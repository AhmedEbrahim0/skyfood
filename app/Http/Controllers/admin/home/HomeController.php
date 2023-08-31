<?php

namespace App\Http\Controllers\admin\home;

use App\Models\BackGround;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
        public function index(){
            $page1=BackGround::find(1);
            return view('admin.home.background')
            ->with("page1",$page1)
            ;
        }
        public function EachBrandHomePage(){
            $data=BackGround::find(7);
            return view('admin.home.eachbrand')
            ->with("data",$data)
            ;
        }
        public function updateEachBrandHomePage(Request $request){
            $request->validate([
                'text2'=>"required",
            ]);
            BackGround::find(7)->update([
                "text2"=>$request->text2
            ]);
            session()->flash("success","Updated Successfully");
            return back();

        }
        public function update(Request $request){
            $request->validate([
                "text1"=>"required",
            ]);
            $page=BackGround::find(1);
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
}
