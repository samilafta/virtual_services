<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    public function __contruct() {

        $this->middleware('auth');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.category.index')->with('categories', Category::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'image' => 'required | mimes:jpeg,jpg,png'
        ]);

        $featured = $request->image;
        $featured_new_name = time().$featured->getClientOriginalName();
        $featured->move('uploads/categories', $featured_new_name);

        $category = new Category;
        $category->name = $request->name;
        $category->image = 'uploads/categories/'.$featured_new_name;
        $category->save();

//       Session::flash('success', 'You successfully created a category');
//        notify()->success('You successfully created a category');

        return redirect()->route('categories.create')->withSuccessMessage('Product Division Created Successfully');

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

        $category = Category::find($id);

        return view('admin.category.edit')->with('category', $category);

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

        $this->validate($request, [
            'name' => 'required',
        ]);

        $category = Category::find($id);

        if($request->hasFile('image')) {

            $featured = $request->image;
            $featured_new_name = time().$featured->getClientOriginalName();
            $featured->move('uploads/categories', $featured_new_name);

            $category->image = 'uploads/categories/'.$featured_new_name;

        }

        $category->name = $request->name;
        $category->save();

//        notify()->success('You successfully updated the category');

        return redirect()->route('categories.index')->withSuccessMessage('Division updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $category = Category::find($id);

        foreach ($category->products as $product){

            $product->forceDelete();

        }

        if(file_exists($category->image)){
            unlink($category->image);

        }

        $category->delete();

//        notify()->success('You successfully deleted the category');

        return redirect()->route('categories.index')->withSuccessMessage('Division deleted successfully');

    }
}
