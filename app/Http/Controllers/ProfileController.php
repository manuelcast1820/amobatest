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
        $profiles = Profile::paginate(10);
        return response()->json($profiles);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'First_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
        ],[
            'email.required'=> 'El correo es obligatorio', 
            'First_name.required'=> 'El nombre es obligatorio', 
            'email.unique'=> 'El correo esta siendo utilizado por otra persona' 
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
        $profiles = Profile::paginate(10);
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

    public function filter(Request $request){
        if($request->search == ""){
            return response()->json(Profile::paginate(10));
        }

        $profiles = Profile::join('users','users.id','profiles.User_id')->
        where('First_name', 'like', '%' . $request->search.'%')
        ->select('profiles.*','users.First_name','users.Description')->paginate(10);
        return response()->json($profiles);
    }

    public function show($id){
        $profile = Profile::find($id);
        return response()->json($profile);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'First_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
        ],[
            'email.required'=> 'El correo es obligatorio', 
            'First_name.required'=> 'El nombre es obligatorio', 
            'email.unique'=> 'El correo esta siendo utilizado por otra persona' 
         ]);
        if ($validator->fails()) {
            return response(['errors' => $validator->errors()->all()], 422);
        }

        $profile = Profile::find($request->id);
        $user = User::find($profile->User_id);
        $user->First_name = $request->First_name;
        $user->Description = $request->Description;
        $user->save();

        return response()->json(Profile::paginate(10));
    }

    public function destroy($id) {
        $profile = Profile::find($id);
        $user = User::find($profile->User_id);
        $profile->delete();
        $user->delete();
        $profiles = Profile::paginate(10);
        return response()->json($profiles);
    }

    public function filterDate(Request $request){
        if($request->fromdate == "" || $request->todate == ""){
            return response()->json(Profile::paginate(10));
        }

        $profiles = Profile::whereDate('created_at', '>', $request->fromdate)
        ->whereDate('created_at', '<=', $request->todate)->paginate(10);
        return response()->json($profiles);
    }

}
