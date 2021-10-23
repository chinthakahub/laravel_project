<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ProductController extends Controller
{


   public function home(){
     $itemlist = Item::all();

     $itemlist = $itemlist->groupBy('brand');

     return view('welcome', compact('itemlist'));
   }

   public function AddNewProduct () {
    return view('Add-new-product');
   }

   public function saveProduct (Request $request) {
    $product = new Item;
    $product->brand=$request->brand;
    $product->model=$request->model;
    $product->ram=$request->ram;
    $product->memory=$request->memory;
    $product->display=$request->display;
    $product->warranty=$request->warranty;
    $product->weight=$request->weight;
    $product->qty=$request->qty;
    $product->price=$request->price;


    if($request->hasFile('image'))
    {
      $destination_path = 'public/images';
      $image = $request->file('image');
      $image_name = $image->getClientOriginalName();
      $path = $request->file('image')->storeAs($destination_path,$image_name);

      $input['name'] = $image_name;
      $product->image= $image_name;
    }

    $status=$product->save();

    if($status) {
      return redirect()->route('home')->with('success','Successfullt data insert');
      }
      else{
          return back()->with('error', 'Something is not right');
      }

   }

   public function showProduct (Request $request) {
     $id = $request->id;
     $item=Item::find($id);
     return view('show-product', compact('item'));
   }

   public function editProduct (Request $request) {
    $id = $request->id;
    $item=Item::find($id);
    return view('edit-product', compact('item'));

   }

   public function updateProduct (Request $request) {
    $id = $request->id;
    $item=Item::find($id);
    $item->brand=$request->brand;
    $item->model=$request->model;
    $item->ram=$request->ram;
    $item->memory=$request->memory;
    $item->display=$request->display;
    $item->warranty=$request->warranty;
    $item->weight=$request->weight;
    $item->qty=$request->qty;
    $item->price=$request->price;


    if($request->hasFile('image'))
    {
      $destination_path = 'public/images';
      $image = $request->file('image');
      $image_name = $image->getClientOriginalName();
      $path = $request->file('image')->storeAs($destination_path,$image_name);

      $input['name'] = $image_name;
      $item->image= $image_name;
    }
    $status=$item->save();

    if($status) {
      return redirect()->route('home')->with('success','Successfullt data updated');
      }
      else{
          return back()->with('error', 'Something is not right');
      }

   }



public function deleteProduct(Request $request){

  $id=$request->id;
  $status=Item::destroy($id);
  if($status){
      return redirect()->route('home')->with('success','Successfullt data deleted');
      }
      else{
          return back()->with('error', 'Something is not right');
      }

}


  }
