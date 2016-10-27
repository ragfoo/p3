<?php

namespace P3\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $numberOfUsers = $request->input('users');
        $cities = file('/Applications/MAMP/htdocs/p3/resources/us-cities.txt', FILE_IGNORE_NEW_LINES);
        $userList = [];
        $generator = \Nubs\RandomNameGenerator\All::create();
        if ($numberOfUsers){
          for ($i = 1; $i <= $numberOfUsers; $i++){
            $userInfo['name'] = $generator->getName();
            $userInfo['birthdate'] = rand(1,12)."/".rand(1,28)."/".rand(1900,2000);
            $userInfo['location'] = $cities[rand(0,count($cities)-1)];
            array_push($userList, $userInfo);
          }
        }
        return view('users.index')->with('userList',$userList);
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
