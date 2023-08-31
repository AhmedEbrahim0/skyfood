<?php

namespace App\Http\Controllers\admin\news;

use App\Models\BackGround;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    public function background(){
        $page1=BackGround::find(3);
        return view('admin.news.background')
        ->with("page1",$page1)
        ;
    }
    public function index(){
        $page1=News::all();
        return view('admin.news.index')
        ->with("page1",$page1)
        ;
    }
    public function create(){
        return view('admin.news.create')
        ;
    }
    public function store(Request $request){
        $request->validate([
            "text1"=>"required",
            "image"=>"required",
        ]);
        $extension=$request->image->extension();
        $name=time().".$extension";
        $request->image->move(public_path("images/"),$name);

        News::create([
            "text1"=>$request->text1,
            "image"=>"images/$name",
        ]);
        session()->flash("success"," Stored  Successfully");
        return back();
    }   
    public function update(Request $request){
        $request->validate([
            "text1"=>"required",
        ]);
        $page=BackGround::find(3);
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
        ]);
        $page=News::find($request->id);
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
        ]);
        session()->flash("success","Updated Successfully");
        return back();
    } 
    public function destroy(Request $request){
        $page=News::find($request->id);
        File::delete($page->image);
        News::destroy($page->id);

        session()->flash("success","deleted Successfully");
        return back();
    }   
    public function edit($id){
        $data=News::find($id);
        return view('admin.news.edit')
        ->with("data",$data)
        ;
    }  
}
