<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use App\Models\User;
use App\Http\Services\ProfileService;


class ProfileController extends Controller
{
    public function __construct(protected ProfileService $profileService){
        $this->middleware('auth');
    }

    public function myprofile(): View{  
        $user = Auth::user();
        return view('profile.miperfil', compact('user'));
    }

    public function edit(Request $request): View{
        return view('profile.edit', ['user' => $request->user(),]);
    }

    public function update(ProfileUpdateRequest $request): RedirectResponse{
        $this->profileService->updateProfile($request);
        return Redirect::route('profile.edit')->with(['status', 'profile-updated', 'message' => 'Datos actualizados con exito']);
    }

    public function getImage($filename){
        $file = Storage::disk('users')->get($filename);
        return new Response($file, 200);
    }

    public function destroy(Request $request): RedirectResponse{
        $this->profileService->deleteAccount($request);
        return Redirect::to('/');
    }

    public function specificProfile(User $user){
        return view('profile.perfilparticular', compact('user'));
    }
}
