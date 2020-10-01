<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subcategory;
use App\Category;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subcategories=Subcategory::all();
        return view('subcategory.list',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories=Category::all();
        return view('subcategory.new',compact('categories'));
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
        $validator=$request->validate([
            'name'=>['required','string','max:255','unique:brands'],
            'category_id'=>'required'
        ]);
        if($validator)
        {
            $name = $request->name;
            $category_id = $request->category_id;

            // Data Insert
            $subcategory = new Subcategory;
            $subcategory->name = $name;
            $subcategory->category_id = $category_id;
            $subcategory->save();

            return redirect()->route('subcategory.index')->with("successMsg", 'New Subcategory is ADDED in your data');
        }
        else{
            return redirect::back()->withErrors($validator);
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

        $subcategory = Subcategory::find($id);
        $categories=Category::all();
        return view('subcategory.edit',compact('categories','subcategory'));
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
        $validator = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'category_id' => 'required'
        ]);

        if($validator)
        {
            $name = $request->name;
            $category_id = $request->category_id;

            // Data insert
            $subcategory = Subcategory::find($id);
            $subcategory->name = $name;
            $subcategory->category_id = $category_id;
            $subcategory->save();

            return redirect()->route('subcategory.index')->with('successMsg','Existing Subcategory is UPDATE in your data');
        }
        else{
            return Redirect::back()->withErrors($validator);

        }
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
        $subcategory = Subcategory::find($id);

        $subcategory->delete();

        return redirect()->route('subcategory.index')->with('successMsg','Existing Subcategory is DELETED in your data');

    }
}
