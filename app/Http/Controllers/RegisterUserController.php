<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequest;
use Illuminate\Http\Request;

class RegisterUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.users.registerUser");
    }


    public function payment()
    {
        # code...
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(session()->has("paid")){
            $request->validate([
            "name"=> ["required", "max:50"], 
            "date_of_birth"=> ["required"],
            "gender"=> ["required"],
            "membership_status"=>["required"],
            "student_number"=> ["required"],
            "course"=>["required"],
            "image"=>["required", "image", "mimes:png,jpg,jpeg"],
            "email"=>["email", "required"],
            "phone_number"=> ["required"],
            "residential_address"=> ["required"],
            "skills"=> ["required"],
            "accept"=>["required"],
            "terms"=>["required"]
            ]);
            dd($request->all());

        }else {
            toastr()->error("You have to paid dues before");
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
