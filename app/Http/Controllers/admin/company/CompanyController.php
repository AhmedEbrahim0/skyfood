<?php

namespace App\Http\Controllers\admin\company;

use App\Models\Company2;
use App\Models\BackGround;
use App\Models\OurCompany;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class CompanyController extends Controller
{
    public function background(){
        $page1=BackGround::find(2);
        return view('admin.company.background')
        ->with("page1",$page1)
        ;
    }
    public function update(Request $request){
        $request->validate([
            "text1"=>"required",
        ]);
        $page=BackGround::find(2);
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


    public function index(){
        $page1=OurCompany::all();
        return view('admin.company.index')
        ->with("page1",$page1)
        ;
    }
    public function create(){
        return view('admin.company.create')
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

        OurCompany::create([
            "text1"=>$request->text1,
            "image"=>"images/$name",
        ]);
        session()->flash("success"," Stored  Successfully");
        return back();
    }   

    public function updateSection(Request $request){
        $request->validate([
            "text1"=>"required",
        ]);
        $page=OurCompany::find($request->id);
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
        $page=OurCompany::find($request->id);
        File::delete($page->image);
        OurCompany::destroy($page->id);
        session()->flash("success","Updated Successfully");
        return back();
    }   
    public function edit($id){
        $data=OurCompany::find($id);
        return view('admin.company.edit')
        ->with("data",$data)
        ;
    }  

    public function indexCarousel(){
        $page1=Company2::all();
        return view('admin.company.indexCarousel')
        ->with("page1",$page1)
        ;
    }
    public function createCarousel(){
        return view('admin.company.createCarousel')
        ;
    }

    public function storeCarousel(Request $request){
        $request->validate([
            "text1"=>"required",
            "image"=>"required",
        ]);
        $extension=$request->image->extension();
        $name=time().".$extension";
        $request->image->move(public_path("images/"),$name);

        Company2::create([
            "text1"=>$request->text1,
            "image"=>"images/$name",
        ]);
        session()->flash("success"," Stored  Successfully");
        return back();
    }   

    public function updateSectionCarousel(Request $request){
        $request->validate([
            "text1"=>"required",
        ]);
        $page=Company2::find($request->id);
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
    public function destroyCarousel(Request $request){
        $page=Company2::find($request->id);
        File::delete($page->image);
        Company2::destroy($page->id);
        session()->flash("success","Updated Successfully");
        return back();
    }   
    public function editCarousel($id){
        $data=Company2::find($id);
        return view('admin.company.editCarousel')
        ->with("data",$data)
        ;
    }  

    public function firstSection(){
        $data=BackGround::find(10);
        return view('admin.company.first_section')
        ->with("data",$data)
        ;
    }
    
    public function UpdatefirstSection(Request $request){
        $request->validate([
            "text2"=>"required",
        ]);
        $page=BackGround::find(10);

        $page->update([
            "text2"=>$request->text2,
        ]);
        session()->flash("success","updated Successfuly");
        return back();
    }


}
