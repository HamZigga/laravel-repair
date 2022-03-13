<?php

namespace App\Services;

use Intervention\Image\ImageManagerStatic as Image;

class ImageSaveService
{
    public function imageSave($dir, $image)
    {
        if (file_exists($image)) {
            $ext = $image->extension();
        }
        else {
            return null;
        }

        $filename = $dir . '/' . \Str::random(40) . '.' . $ext;
        $img = Image::make($image)->encode($ext)->resize(600, 400);
        \Storage::disk('public')->put($filename, $img);
        return $filename;
    }
}
