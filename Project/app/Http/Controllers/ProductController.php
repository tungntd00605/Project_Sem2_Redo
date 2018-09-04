<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_obj = 0;
        $big_category = Category::all()->where('parentId', null);
        $choosedCategory = Input::get('categoryId');
        if($choosedCategory == 0 || $choosedCategory == null){
            $list_obj = Product::all();
        }
        else {
            $list_obj = Product::where('categoryId', $choosedCategory);
        }
        return view('admin.product.list')
            ->with("list_obj", $list_obj)
            ->with('big_category', $big_category);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj = new Product();
        $obj->categoryId = Input::get('categoryId');
        $obj->name = Input::get('name');
        $obj->thumbnails = Input::get('thumbnails');
        $obj->price = Input::get('price');
        $obj->discount = Input::get('discount');
        $obj->description = Input::get('description');
        $obj->detail = Input::get('detail');
        $obj->save();
        return redirect('admin/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obj = Product::find($id);
        if ($obj == null){
            return '404';
        }
        //return view('admin.product.show')->with('obj',$obj);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Product::find($id);
        $big_category = Category::all()->where('parentId', null);
        $game = Product::find($id)->category;
        if ($obj == null || $obj->status != 1) {
            return '404';
        }
        return view('admin.product.edit')
        ->with('obj', $obj)
        ->with('game', $game)
        ->with('big_category', $big_category);
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
        $obj = Product::find($id);
        $obj->categoryId = Input::get('categoryId');
        $obj->name = Input::get('name');
        $obj->thumbnails = Input::get('thumbnails');
        $obj->price = Input::get('price');
        $obj->discount = Input::get('discount');
        $obj->description = Input::get('description');
        $obj->detail = Input::get('detail');
        $obj->save();
        return redirect('admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Product::find($id);
        if($obj == null){
            return '404';
        }
        $obj->delete();
        return redirect('admin/product')->with('success', 'Account has been deleted!!');
    }

    public function destroyMany(){
        Product::destroy(Input::get('ids'));
        return "Ok";
    }
}
