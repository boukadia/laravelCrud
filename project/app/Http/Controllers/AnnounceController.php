<?php

namespace App\Http\Controllers;

use App\Models\announce;
use App\Http\Requests\StoreannounceRequest;
use App\Http\Requests\UpdateannounceRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnounceController extends Controller
{
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
    public function create(Request $request)
    {
        // dd($request);
        $request->validate(["title"=>'required',
        "description"=>'required']);
        announce::create([
            'title'=>$request->title,
        'description'=>$request->description]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $user=Auth::user();
        if($user){
            $announces=announce::all();
            return view("index",["announces" => $announces]);
        }
        else {
            echo "non";
        }
    }
    public function form(){
        return view("formInser");
    }

    /**
     * Display the specified resource.
     */
    public function show(announce $announce)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $announce=announce::find($id);

        return view("formUpdate",["announce"=>$announce]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        announce::where('id',$id)->update([
            "title"=>$request->title,
        "description"=>$request->description
    ]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(announce $announce)
    {
        announce::where('id',$announce->id)->delete();
    }
}
