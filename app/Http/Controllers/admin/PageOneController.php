<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\pageOne;
use Illuminate\Support\Facades\File;

class PageOneController extends Controller
{

    public function one(){
        $page1=pageOne::find(1);
        return view('admin.page.index')
        ->with("page1",$page1)
        ;
    }
    public function all(){
        $page1=pageOne::all();
        return view('admin.page.all')
        ->with("page1",$page1)
        ;
    }
    public function edit($id){
        $data=pageOne::find($id);
        return view('admin.page.edit')
        ->with("data",$data)
        ;
    }
    public function update(Request $request){
        $request->validate([
            "text1"=>"required",
        ]);
        $page=pageOne::find($request->id);
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
    public function destroy(Request $request){
        $page=pageOne::find($request->id);
        File::delete($page->image);
        session()->flash("success","Updated Successfully");
        return back();
    }   
    public function create(){
        return view('admin.page.create');
    }  
    
    public function store(Request $request){
        $request->validate([
            "text1"=>"required",
            "text2"=>"required",
            "image"=>"required",
        ]);
        $extension=$request->image->extension();
        $name=time().".$extension";
        $request->image->move(public_path("images/"),$name);

        pageOne::create([
            "text1"=>$request->text1,
            "text2"=>$request->text2,
            "image"=>"images/$name",
        ]);
        session()->flash("success"," Stored  Successfully");
        return back();
    }   
}
