<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StatementRequest;
use App\Models\Category;
use App\Models\Statement;
use App\Services\ImageSaveService;
use Illuminate\Support\Facades\Storage;

class StatementController extends Controller
{
    public function create()
    {
        return view('statement-create',['categories' => Category::all()]);
    }

    public function store(StatementRequest $request)
    {   
        Statement::create([
            'user_id' => auth()->user()->id,
            'category_id' => 1,
            'address' => $request->address,
            'description' => $request->description,
            'price' => $request->price,
            'photo_place' => (new ImageSaveService)->imageSave('place', $request->file('photo_place')),
            'photo_blueprint' => (new ImageSaveService)->imageSave('blueprint', $request->file('photo_blueprint')),
        ]);
        return redirect()->route('main')->with('success', 'Заявка успешно отправлена');
    }

    public function edit(int $id)
    {
        return view('statement-edit', ['statement' => Statement::findOrFail($id), 'categories' => Category::all()]);
    }

    public function update($id,StatementRequest $request)
    {
        Statement::findOrFail($id)->update([
            'user_id' => auth()->user()->id,
            'category_id' => '1',
            'address' => $request->address,
            'description' => $request->description,
            'price' => $request->price,
            'photo_place' => 'KARTINKA',
            'photo_blueprint' => 'KARTINKA',
        ]);
        return redirect()->route('main')->with('success', 'Заявка успешно Обновлена');
    }

    public function delete(int $id)
    {
        $statement = Statement::findOrFail($id);
        $statement->delete();
        Storage::disk('public')->delete($statement->photo_place);
        Storage::disk('public')->delete($statement->photo_place);
        return redirect()->route('home', $id)->with('success', "Заявка удалена");
    }

    public function show()
    {
        return view('statement-list', ['statements' => Statement::where('user_id', auth()->user()->id)->orderBy('updated_at')->paginate(10)]);
    }

    public function count(){
        return response()->json([
            'statementCount' => Statement::count()
        ]);
    }

    public function destroy($id)
    {
        $statement = Statement::findOrFail($id);
        $statement->delete();
        return redirect()->route('statement')->with('success', 'Заявка успешно Обновлена');

    }
}
