<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Brand;
use App\Subcategory;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items=Item::all();
        return view('item.list',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $brands=Brand::all();
        $subcategories=Subcategory::all();
        return view('item.new',compact('brands','subcategories'));
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
            'photo'=>'required|mimes:jpeg,bmp,png,jpg'
        ]);
        if($validator)
        {
            $name = $request->name;
            $photo = $request->photo;
            $price = $request->price;
            $discount = $request->discount;
            $description = $request->description;
            $subcategory_id = $request->subcategory_id;
            $brand_id = $request->brand_id;

            // File Upload
            $imageName = time().'.'.$photo->extension();

            $photo->move(public_path('images/item'),$imageName);

            $filepath = 'images/item/'.$imageName;

            // Data Insert

            $codeno='CODE_'.rand(11111,99999);

            $item = new Item;
            $item->codeno = $codeno;
            $item->name = $name;
            $item->photo = $filepath;
            $item->price = $price;
            $item->discount = $discount;
            $item->description = $description;
            $item->subcategory_id=$subcategory_id;
            $item->brand_id=$brand_id;
            $item->save();

            return redirect()->route('item.index')->with("successMsg", 'New Item is ADDED in your data');
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
        $item = Item::find($id);
        $subcategories=Subcategory::all();
        $brands=Brand::all();
        
        return view('item.edit',compact('item','subcategories','brands'));
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
        $name = $request->name;
        $newphoto = $request->photo;
        $oldphoto = $request->oldphoto;
        $price=$request->price;
        $discount=$request->discount;
        $description=$request->description;
        $subcategory_id=$request->subcategory_id;
        $brand_id=$request->brand_id;

        if ($request->hasFile('photo')) {
            # File Upload
            $imageName = time().'.'.$newphoto->extension();

            $newphoto->move(public_path('images/item'),$imageName);

            $filepath = 'images/item/'.$imageName;

            if (\File::exists(public_path($oldphoto))) {
                \File::delete(public_path($oldphoto));
            }
        }
        else{
            $filepath = $oldphoto;
        }

        // Data update
        $item = Item::find($id);
        $item->name = $name;
        $item->photo = $filepath;
        $item->price = $price;
        $item->discount = $discount;
        $item->description = $description;
        $item->subcategory_id = $subcategory_id;
        $item->brand_id = $brand_id;
        $item->save();

        return redirect()->route('item.index')->with('successMsg', 'Existing Item is UPDATED in your data');
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
        $item = Item::find($id);
    
        /*if(\File::exists(public_path($oldlogo))){
            \File::delete(public_path($oldlogo));
        }*/

        $item->delete();

        return redirect()->route('item.index')->with('successMsg','Existing Item is DELETED in your data');

    }
}
