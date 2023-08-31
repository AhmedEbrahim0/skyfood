<?php

namespace App\Http\Controllers\admin\contact;

use App\Models\BackGround;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Support\Facades\File;

class ContactController extends Controller
{
    public function background(){
        $page1=BackGround::find(6);
        return view('admin.contact.background')
        ->with("page1",$page1)
        ;
    }
  
    public function update(Request $request){
        $request->validate([
            "text1"=>"required",
        ]);
        $page=BackGround::find(6);
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
