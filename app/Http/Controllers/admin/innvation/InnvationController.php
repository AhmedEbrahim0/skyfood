<?php

namespace App\Http\Controllers\admin\innvation;

use App\Models\BackGround;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Innvation;
use Illuminate\Support\Facades\File;

class InnvationController extends Controller
{
    public function background(){
        $page1=BackGround::find(4);
        return view('admin.innvation.background')
        ->with("page1",$page1)
        ;
    }
    public function index(){
        $page1=Innvation::all();
        return view('admin.innvation.index')
        ->with("page1",$page1)
        ;
    }
    public function create(){
        return view('admin.innvation.create')
        ;
    }
    public function store(Request $request){
        $request->validate([
            "text1"=>"required",
            "text2"=>"required",
            "image"=>"required",
            "card"=>"required",
        ]);
        $extension=$request->image->extension();
        $name=time()."1.$extension";
        $request->image->move(public_path("images/"),$name);

        $extension2=$request->card->extension();
        $name2=time()."2.$extension2";
        $request->card->move(public_path("images/"),$name2);

        Innvation::create([
            "text1"=>$request->text1,
            "text2"=>$request->text2,
            "image"=>"images/$name",
            "card"=>"images/$name2",
        ]);
        session()->flash("success"," Stored  Successfully");
        return back();
    }   
    public function update(Request $request){
        $request->validate([
            "text1"=>"required",
        ]);
        $page=BackGround::find(4);
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
            "text2"=>"required",
        ]);
        $page=Innvation::find($request->id);
        if($request->has('image')){
            File::delete($page->image);
            $extension=$request->image->extension();
            $name=time()."1.$extension";
            $request->image->move(public_path("images/"),$name);
            $page->update([
                "image"=>"images/".$name,
            ]);
        }
        if($request->has('card')){
            File::delete($page->card);
            $extension=$request->card->extension();
            $name=time()."2.$extension";
            $request->card->move(public_path("images/"),$name);
            $page->update([
                "card"=>"images/".$name,
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
        $page=Innvation::find($request->id);
        File::delete($page->image);
        Innvation::destroy($page->id);
        session()->flash("success","Deleted Successfully");
        return back();
    }   
    public function edit($id){
        $data=Innvation::find($id);
        return view('admin.innvation.edit')
        ->with("data",$data)
        ;
    }  

    public function lastSection(){
        $data=BackGround::find(9);
        return view('admin.food.last_section')
        ->with("data",$data)
        ;
    }
    
    public function UpdatelastSection(Request $request){
        $request->validate([
            "text2"=>"required",
        ]);
        $page=BackGround::find(9);

        $page->update([
            "text2"=>$request->text2,
        ]);
        session()->flash("success","updated Successfuly");
        return back();
    }

}
