<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Field;
use Illuminate\Support\Facades\Auth;

class FieldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $owner = Auth::user();
        $fields = $owner->fields;
        return view('owner.fields.index')->with('fields', $fields);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fields = Field::all();
        return view('owner.fields.add')->with('fields', $fields);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('photopath'))
        {
            $image = $request->file('photopath')->store('public/services');
        } else {
            $image = '/field/defaultfield.jpg';
        }

        $id = Auth::id();

        $this->validate($request, [
            "name" => 'required',
            "location"  => 'required',
            "adress" => 'required',
            "photopath" => 'required',
        ]);

        $field = new Field ([
            'name' => $request->input("name"),
            'location' => $request->input("location"),
            'adress' => $request->input("adress"),
            'photopath' => $image,
            'user_id' => $id,
        ]);

        $field->save();

        return redirect()->route('index-field');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $field = Field::find($id);
        return view('owner.fields.show')->with('field', $field);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $field = Field::find($id);
        return view ('owner.fields.edit')->with('field', $field);
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
        $field = Field::find($id);

        if($request->hasFile('photopath'))
        {
            $field->photopath = $request->file('photopath')->store('public/fields');
        }


        $field->name = $request->input('name');
        $field->location = $request->input('location');
        $field->adress = $request->input('adress');

        $field->update();
        return redirect( route( 'index-field'));
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
