<?php

namespace App\Http\Controllers\admin\food;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BackGround;
use App\Models\Food;
use App\Models\pageOne;
use Illuminate\Support\Facades\File;

class foodController extends Controller
{

    public function background(){
        $data=BackGround::find(8);
        return view('admin.food.background')
        ->with("data",$data)
        ;
    }
    public function UpdateBackground(Request $request){
        $request->validate([
            "text1"=>"required",
            "text2"=>"required",
        ]);
        $page=BackGround::find(8);
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
        ]);
        session()->flash("success","updated Successfuly");
        return back();
    }

    public function section1(){
        $data=Food::find(1);
        return view('admin.food.section1')
        ->with("data",$data)
        ;
    }



    public function updateSection1(Request $request){
        $request->validate([
            "text2"=>"required",
        ]);
        $page=food::find($request->id);
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
            "text2"=>$request->text2,
            "details"=>$request->details,
        ]);
        session()->flash("success","Updated Successfully");
        return back();
    }   

    public function section2(){
        $data=Food::find(2);
        return view('admin.food.section2')
        ->with("data",$data)
        ;
    }



    public function updateSection2(Request $request){
        $request->validate([
            "text2"=>"required",
        ]);
        $page=food::find(2);
        if($request->has('image1')){
            File::delete($page->image);
            $extension=$request->image1->extension();
            $name=time()."1.$extension";
            $request->image1->move(public_path("images/"),$name);
            $page->update([
                "image"=>"images/".$name,
            ]);
        }
        if($request->has('image2')){
            File::delete($page->details);
            $extension=$request->image2->extension();
            $name=time()."2.$extension";
            $request->image2->move(public_path("images/"),$name);
            $page->update([
                "details"=>"images/".$name,
            ]);
        }
        $page->update([
            "text2"=>$request->text2,
        ]);
        session()->flash("success","Updated Successfully");
        return back();
    }   


    public function section3(){
        $data=Food::find(3);
        return view('admin.food.section3')
        ->with("data",$data)
        ;
    }



    public function updateSection3(Request $request){
        $request->validate([
            "text2"=>"required",
        ]);
        $page=food::find($request->id);
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
            "text2"=>$request->text2,
        ]);
        session()->flash("success","Updated Successfully");
        return back();
    }   

    public function section4(){
        $data=Food::find(4);
        return view('admin.food.section4')
        ->with("data",$data)
        ;
    }



    public function updateSection4(Request $request){
        $request->validate([
            "text2"=>"required",
        ]);
        $page=food::find($request->id);
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
            "text2"=>$request->text2,
        ]);
        session()->flash("success","Updated Successfully");
        return back();
    }   

    public function section5(){
        $data=Food::find(5);
        return view('admin.food.section5')
        ->with("data",$data)
        ;
    }



    public function updateSection5(Request $request){
        $request->validate([
            "text2"=>"required",
        ]);
        $page=food::find($request->id);
        if($request->has('image1')){
            File::delete($page->image);
            $extension=$request->image1->extension();
            $name=time()."1.$extension";
            $request->image1->move(public_path("images/"),$name);
            $page->update([
                "image"=>"images/".$name,
            ]);
        }
        if($request->has('image2')){
            File::delete($page->details);
            $extension=$request->image2->extension();
            $name=time()."2.$extension";
            $request->image2->move(public_path("images/"),$name);
            $page->update([
                "details"=>"images/".$name,
            ]);
        }
        $page->update([
            "text2"=>$request->text2,
        ]);
        session()->flash("success","Updated Successfully");
        return back();
    }   

    public function section6(){
        $data=Food::find(6);
        return view('admin.food.section6')
        ->with("data",$data)
        ;
    }



    public function updateSection6(Request $request){
        $request->validate([
            "text2"=>"required",
        ]);
        $page=food::find(6);


        $page->update([
            "text2"=>$request->text2,
        ]);
        session()->flash("success","Updated Successfully");
        return back();
    }   

 
}
