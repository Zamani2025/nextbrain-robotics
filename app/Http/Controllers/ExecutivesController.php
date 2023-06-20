<?php

namespace App\Http\Controllers;

use App\Models\Executives;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ExecutivesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $executives = Executives::all();
        return view("admin.executives.index", compact("executives"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.executives.create");
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => ["required", "max:30"],
            "position" => ["required"],
            "image" => ["required", "image", "mimes:png,jpg,jpeg"]
        ]);
        $executive = new Executives();

        $executive->name = $request->name;
        $executive->position = $request->position;
        $executive->image = $request->file("image")->store("executives");

        $executive->save();
        
        toastr()->success("Executive successfully added");
        return redirect()->route("executives.index");
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
        $executive = Executives::findOrFail($id);
        return view("admin.executives.edit", compact("executive"));
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
        $executive = Executives::findOrFail($id);
        $request->validate([
            "name" => ["required"],
            "position" => ["required"]
        ]);

        if($request->hasFile("image")){
            Storage::delete($executive->image);
            $executive->image = $request->file("image")->store("executives");
        }

        $executive->name = $request->name;
        $executive->position = $request->position;
        $executive->name = $request->name;

        $executive->update();
        
        toastr()->info("Executive successfully updated");
        return redirect()->route("executives.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exc = Executives::findOrFail($id);
        Storage::delete($exc->image);
        $exc->delete();
        toastr()->error("Executive successfully deleted");
        return back();

    }
}
