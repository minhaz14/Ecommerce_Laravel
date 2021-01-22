<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function category_store(Request $request)
    {
        
      //   $request->validate([
      //       'title' => 'required|max:255',
      //      // 'description' => 'required',
      //       'price' => 'required|numeric',
      //       'quantity' => 'required|numeric',
        
      //   ]);


        $category=new Category;
        $category->name=$request->Name;
        $category->CategoryType=$request->Type;
        $category->description=$request->description;
        $category->image=$request->image;
        $category->parent_id=1;
        $category->save();

        return redirect()->route ('categories');
    }

    public function destroy_categories($id) {
      $category = Category::find($id);
      $category->delete();
      session()->flash ('success','Product has deleted successfully !!!');
      return back();
      // return view("pages.products.show")
      //     ->with("product", $product);
    }
    public function edit_categories()
    {
      
        
         return view('admin.products.categoryedit');
        // return view('admin.products.dashboard');

    }


}
