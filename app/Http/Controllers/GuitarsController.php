<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuitarsController extends Controller
{
    // private static function getData(){
    //     return [
    //         ['id'->1, 'name'->American, 'brand'->'Fender'],
    //         ['id'->2, 'name'->Str, 'brand'->'PRS'],
    //         ['id'->3, 'name'->talman, 'brand'->'GIBson'],
    //     ];
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //GET 
        return view ('guitars.index');
        // ,[
        //     'guitars'->self::getData(),
        //    // 'userInput' -> '<script> alert("hello")</script>'
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
