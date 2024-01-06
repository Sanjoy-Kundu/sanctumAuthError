<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    
    
    public function userRegistration(Request $request){
        // $request->validate([

        //     "name" => "required|max:50",
        //     "email" => "required|max:50",
        //     "mobile" => "required|max:50",
        //     "password" => "required|max:50",
        // ]);

        try{
            User::create([
                "name" => $request->input("name"),
                "email" => $request->input("email"),
                "mobile" => $request->input("mobile"),
                "password" => Hash::make($request->input("password")),
            ]);
            return response()->json(["status" => "success", "message" => "User Registration Sucessfully"]);
        }catch(Exception $exc){
            return response()->json(["status" => "fail", "message" => $exc->getMessage()]);
        }
    }
    
    


    public function userLogin(Request $request){
        try{
            $email = $request->input('email');
            $password = Hash::make($request->input('password'));

            $user = User::where("email","=",$email)->first();
            if($user){
                $token = $user->createToken("authToken")->plainTextToken;
                return response()->json(["status" => "success", "message" => "Login Successfully", "token" => $token]);
            }else{
                return response()->json(["status" => "fail", "message" => "Invalid Email and Password"]);
            }

        }catch(Exception $exc){
            return response()->json(["status" => "fail", "message" => $exc->getMessage()]);
        }
    }
    







    public function userProfile(Request $request){
       return Auth::user(); 
       //return "good";

    }


    
    function UserLogout(Request $request){
        $request->user()->tokens()->delete();
        return redirect('/userLogin');
    }




    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
