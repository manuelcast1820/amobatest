<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::all()->toArray();
        return array_reverse($profiles);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'First_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
        ]);
        if ($validator->fails()) {
            return response(['errors' => $validator->errors()->all()], 422);
        }

        $request['password'] = Hash::make('amoba');
        $request['remember_token'] = Str::random(10);
        $user = User::create($request->toArray());
        $profile = new Profile();
        $profile->User_id = $user->id;
        $profile->Ima_profile = 'default';
        $profile->save();
        if ($request->photo != "") {
            $this->uploadImagen($profile, $request->photo);
        }
        $profiles = Profile::all()->toArray();
        return response()->json([
            'message' => 'Profile created!',
            'success' => true,
            'profiles' => $profiles
        ]);
    }

    public function uploadImagen($profile, $filesimage)
    {
        $file = $filesimage;
        $archivo = $file->getClientOriginalName();
        if ($archivo != "") {
            $imageName = $profile->id . $archivo;
            $file->move(
                base_path() . '/public/profile_photo/',
                $imageName
            );
            $profile->Ima_profile = $imageName;
            $profile->save();
        }
    }
}
