<?php

namespace App\Http\Services;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;



class ProfileService{

    public function updateProfile(ProfileUpdateRequest $request){
        $request->user()->fill($request->validated());
            if ($request->user()->isDirty('email')){
                $request->user()->email_verified_at = null;
            }

        $imagenrecibida = $request->file('image'); 
            if($imagenrecibida){
                $image_nueva = time().$imagenrecibida->getClientOriginalName();  
                \Storage::disk('users')->put($image_nueva, File::get($imagenrecibida)); 
                $request->user()->image = $image_nueva;
            }
        $request->user()->save();
    }

    public function deleteAccount(Request $request){
        $request->validateWithBag('userDeletion', ['password' => ['required', 'current_password'],]);
        $user = $request->user();
        Auth::logout();
        $user->delete();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }



}