<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Http\Requests\Image\createImageRequest;
use App\Http\Requests\Image\updateImageRequest;
use Auth;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use App\Http\Services\ImageService;


class ImageController extends Controller
{
    public function __construct(protected ImageService $imageService){
        $this->middleware('auth');
    }
    
    public function index(){
        $images = Image::orderBy('id', 'desc')->get();
        return view ('dashboard', compact('images'));
    }

    public function savePublication(createImageRequest $request){
        $this->imageService->savePublication($request);
        return redirect()->route('dashboard')->with(['message' => 'La publicación ha sido creada']);
    }

    public function getImage($filename){
        $file = Storage::disk('images')->get($filename);
        return new Response($file, 200);
    }

    public function updateImage(Image $image, updateImageRequest $request){
        $this->imageService->updatePublication($image, $request);
        return redirect()->route('dashboard');
    }

    public function deleteImage(Image $image){
        $this->imageService->deletePublication($image);
        return redirect()->route('dashboard')->with(['message' => 'La publicacion ha sido eliminada']);
    }

    public function singlePublication(Image $image){
        return view('image.especifica',compact('image'));
    }

}
