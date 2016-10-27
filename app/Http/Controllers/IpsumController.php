<?php

namespace P3\Http\Controllers;

use Illuminate\Http\Request;

class IpsumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $lines = file('../resources/HomerSimpson.txt', FILE_IGNORE_NEW_LINES);
        $paragraphs = $request->input('paragraphs');
        $ipsumText = [];

        if ($paragraphs) {
          $this->validate($request, [
          'paragraphs' => 'required|min:1|max:99|numeric',
          ]);
          for ($i = 1; $i <= $paragraphs; $i++){
            $newParagraph = "";
            for ($j = 1; $j <= 5; $j++){
              $newParagraph = $newParagraph." ".$lines[rand(0,count($lines)-1)];
            }
            array_push($ipsumText, $newParagraph);
          }
        }

        return view('ipsum.index')->with('ipsumText',$ipsumText);
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
