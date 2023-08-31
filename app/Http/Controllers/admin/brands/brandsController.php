<?php

namespace App\Http\Controllers\admin\brands;

use DateTime;
use App\Models\brands;
use App\Models\BackGround;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class brandsController extends Controller
{
    public function background(){
        $page1=BackGround::find(5);
        return view('admin.brands.background')
        ->with("page1",$page1)
        ;
    }
    public function index(){
        $page1=brands::all();
        return view('admin.brands.index')
        ->with("page1",$page1)
        ;
    }
    public function create(){
        return view('admin.brands.create')
        ;
    }
    public function store(Request $request){
        $request->validate([
            "text1"=>"required",
            "text2"=>"required",
            "detials"=>"required",
            "product_image"=>"required",
            "background"=>"required",
            "logo"=>"required",
        ]);
        $extension=$request->background->extension();
        $background=time()."1.$extension";
        $request->background->move(public_path("images/"),$background);

        $extension=$request->logo->extension();
        $logo=time()."2.$extension";
        $request->logo->move(public_path("images/"),$logo);

        $extension=$request->product_image->extension();
        $product_image=time()."3.$extension";
        $request->product_image->move(public_path("images/"),$product_image);

        brands::create([
            "text1"=>$request->text1,
            "text2"=>$request->text2,
            "detials"=>$request->detials,
            "product_image"=>"images/$product_image",
            "logo"=>"images/$logo",
            "background"=>"images/$background",
        ]);
        session()->flash("success"," Stored  Successfully");
        return back();
    }   
    public function update(Request $request){
        $request->validate([
            "text1"=>"required",
            "text2"=>"required",
        ]);
        $page=BackGround::find(5);
        if($request->has('image')){
            File::delete($page->image);
            $extension=$request->image->extension();
            $name=time().".$extension";
            $request->image->move(public_path("images/"),$name);
            $page->update([
                "image"=>"images/".$name,
            ]);
        }
        $page->update([
            "text1"=>$request->text1,
            "text2"=>$request->text2,
            "details"=>$request->details,
        ]);
        session()->flash("success","Updated Successfully");
        return back();
    } 
    public function updateSection(Request $request){
        $request->validate([
            "text1"=>"required",
            "text2"=>"required",
        ]);
        $page=brands::find($request->id);

        if($request->has('background')){
            File::delete($page->background);
            $extension=$request->background->extension();
            $name=time()."1.$extension";
            $request->background->move(public_path("images/"),$name);
            $page->update([
                "background"=>"images/".$name,
            ]);
        }


        if($request->has('logo')){
            File::delete($page->logo);
            $extension=$request->logo->extension();
            $name=time()."2.$extension";
            $request->logo->move(public_path("images/"),$name);
            $page->update([
                "logo"=>"images/".$name,
            ]);
        }
        if($request->has('product_image')){
            File::delete($page->product_image);
            $extension=$request->product_image->extension();
            $name=time()."2.$extension";
            $request->product_image->move(public_path("images/"),$name);
            $page->update([
                "product_image"=>"images/".$name,
            ]);
        }

        $page->update([
            "text1"=>$request->text1,
            "text2"=>$request->text2,
        ]);
        session()->flash("success","Updated Successfully");
        return back();
    } 
    public function destroy(Request $request){
        $page=brands::find($request->id);
        File::delete($page->image);
        brands::destroy($page->id);

        session()->flash("success","deleted Successfully");
        return back();
    }   
    public function edit($id){
        $data=brands::find($id);
        return view('admin.brands.edit')
        ->with("data",$data)
        ;
    }  
}
