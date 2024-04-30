<?php

namespace App\Http\Services;

use App\Models\Image;
use Auth;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Http\Requests\Image\createImageRequest;
use App\Http\Requests\Image\updateImageRequest;

class ImageService{

    public function savePublication(createImageRequest $request){
        $image_path = $request->file('image_path');
        $description = $request->input('desription');
        $user_id = Auth::user()->id;

        if($image_path){
            $image_path_name = time().$image_path->getClientOriginalName();
            \Storage::disk('images')->put($image_path_name, File::get($image_path));}

        Image::create([
            'user_id' => $user_id,
            'desription' => $description,
            'image_path' => $image_path_name
        ]);
    }

    public function updatePublication(Image $image, updateImageRequest $request){
        if($image->user_id == Auth::user()->id){
            $image->update(['desription' => $request->desription]);
            $image->save();
        }
    }

    public function deletePublication(Image $image){
        if($image->user_id == Auth::user()->id){
            $image->delete();
            Storage::disk('images')->delete($image->image_path);
        }
    }
}