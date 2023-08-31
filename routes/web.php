<?php

use App\Models\Food;
use App\Models\News;
use App\Models\brands;
use App\Models\pageOne;
use App\Models\Company2;
use App\Models\Innvation;
use App\Models\BackGround;
use App\Models\OurCompany;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\admin\PageOneController;
use App\Http\Controllers\admin\food\foodController;
use App\Http\Controllers\admin\home\HomeController;
use App\Http\Controllers\admin\news\NewsController;
use App\Http\Controllers\admin\brands\brandsController;
use App\Http\Controllers\admin\company\CompanyController;
use App\Http\Controllers\admin\contact\ContactController;
use App\Http\Controllers\admin\innvation\InnvationController;

Route::post('/login',[LoginController::class,'Login']);

Route::get('/index',function(){
    $background=BackGround::find(1);
    $eachBrand=BackGround::find(7);
    $brands=brands::take(3)->get();
    $news=News::all();
    return view('front.home')
    ->with("brands",$brands)
    ->with("news",$news)
->with("background",$background)
->with("eachBrand",$eachBrand)
    ;
});
Route::get('/',function(){
    $background=BackGround::find(1);
    $eachBrand=BackGround::find(7);
    $brands=brands::take(3)->get();
    $news=News::all();
    return view('front.home')
    ->with("brands",$brands)
    ->with("news",$news)
->with("background",$background)
->with("eachBrand",$eachBrand)
    ;
});
Route::get('/About',function(){
    $background=BackGround::find(2);
    $sections=OurCompany::all();
    return view('front.company')
    ->with('sections',$sections)
    ->with("background",$background)
    ;
});
Route::get('/ourcampany',function(){
    $background=BackGround::find(2);
    $fisrt_section=BackGround::find(10);
    $sliders=Company2::all();
    $sections=OurCompany::all();
    return view('front.company')
    ->with('sections',$sections)
    ->with("background",$background)
    ->with("sliders",$sliders)
    ->with("fisrt_section",$fisrt_section)
    ;
});
Route::get('/innvation',function(){
    $background=BackGround::find(4);
    $last_section=BackGround::find(9);
    
    $sections=Innvation::all();
    return view('front.innvation')
    ->with('sections',$sections)
    ->with("last_section",$last_section)
    ->with("background",$background)
    ;
});
Route::get('/brands',function(){
    $background=BackGround::find(5);
    $brands=brands::all();
    return view('front.brands')
    ->with('brands',$brands)
    ->with("background",$background)
    ;
});
Route::get("/brands/{id}",function($id){
    $brand=brands::find($id);
    return view('front.brandPage')
    ->with("brand",$brand);
    
});
Route::get('/contact',function(){
    $background=BackGround::find(6);
    return view('front.contact')
    ->with("background",$background)
    ;
});
Route::get('/news',function(){
    $background=BackGround::find(3);
    $news=News::orderBy("id","DESC")->get();
    
    return view('front.news')
    ->with("news",$news)
    ->with("background",$background)
    ;
});

Route::get('/news/{id}',function($id){
    $background=BackGround::find(3);
    $new=News::find($id);
    
    return view('front.newsPage')
    ->with("new",$new)
    ->with("background",$background)
    ;
});

Route::get('/food',function(){
    $background=BackGround::find(8);
    $food=Food::all();
    return view('front.food')
    ->with("background",$background)
    ->with("food",$food)
    ;
});
Route::get('/admin',function(){
    if(Auth::user()!=null)
        return view('admin.index');
    else
        return view('front.login');

    });

    Route::get('/login',function(){

        if(Auth::user()!=null)
            return view('admin.index');
        else
            return view('front.login');
    })->name("login");


    Route::group(["middleware"=>"auth"],function(){

 Route::get('/admin/page',[PageOneController::class,'one']);
 Route::post('/admin/update-page',[PageOneController::class,'update']);
 Route::post('/admin/delete-page',[PageOneController::class,'destroy']);
 Route::post('/admin/store-page',[PageOneController::class,'store']);
 Route::get('/admin/create-page',[PageOneController::class,'create']);
 Route::get('admin/all',[PageOneController::class,'all']);
 Route::get('admin/edit-page/{id}',[PageOneController::class,'edit']);

//  users
Route::get('/admin/users',[LoginController::class,'index']);
Route::get('/admin/create-user',[LoginController::class,'create']);
Route::post('/admin/create-user',[LoginController::class,'Register']);

//  home page
 Route::get('/admin/home',[HomeController::class,'index']);
 Route::get('/admin/home-eachbrand',[HomeController::class,'EachBrandHomePage']);
 Route::post('/admin/home-eachbrand',[HomeController::class,'updateEachBrandHomePage']);
 Route::post('/admin/update-home',[HomeController::class,'update']);

//  company
 Route::get('/admin/company',[CompanyController::class,'background']);
 Route::post('/admin/update-company',[CompanyController::class,'update']);
 Route::post('/admin/update-company-section',[CompanyController::class,'updateSection']);

 Route::get('/admin/create-company',[CompanyController::class,'create']);
 Route::post('/admin/store-company',[CompanyController::class,'store']);
 Route::get('/admin/company-sections',[CompanyController::class,'index']);
 Route::post('/admin/delete-company',[CompanyController::class,'destroy']);
 Route::get('admin/edit-company/{id}',[CompanyController::class,'edit']);
 
 Route::get('admin/company-carousel',[CompanyController::class,'indexCarousel']);
 Route::get('/admin/create-carousel-company',[CompanyController::class,'createCarousel']);
 Route::get('/admin/edit-company-carousel/{id}',[CompanyController::class,'editCarousel']);
 Route::post('/admin/store-carousel-company',[CompanyController::class,'storeCarousel']);
 Route::post('/admin/delete-company-carousel',[CompanyController::class,'destroyCarousel']);
 Route::post('/admin/update-company-slider',[CompanyController::class,'updateSectionCarousel']);

 Route::get('/admin/company-firstSection',[CompanyController::class,'firstSection']);
 Route::post('/admin/update-company-firstSection',[CompanyController::class,'UpdatefirstSection']);

//  news
 Route::get('/admin/news',[NewsController::class,'background']);
 Route::post('/admin/update-news',[NewsController::class,'update']);
 Route::post('/admin/update-news-section',[NewsController::class,'updateSection']);
 Route::get('/admin/create-news',[NewsController::class,'create']);
 Route::post('/admin/store-news',[NewsController::class,'store']);
 Route::get('admin/news-sections',[NewsController::class,'index']);
 Route::post('/admin/delete-news',[NewsController::class,'destroy']);
 Route::get('admin/edit-news/{id}',[NewsController::class,'edit']);

//  brands
 Route::get('/admin/brands',[brandsController::class,'background']);
 Route::post('/admin/update-brands',[brandsController::class,'update']);
 Route::post('/admin/update-brands-section',[brandsController::class,'updateSection']);
 Route::get('/admin/create-brands',[brandsController::class,'create']);
 Route::post('/admin/store-brands',[brandsController::class,'store']);
 Route::get('admin/brands-sections',[brandsController::class,'index']);
 Route::post('/admin/delete-brands',[brandsController::class,'destroy']);
 Route::get('admin/edit-brands/{id}',[brandsController::class,'edit']);

//  innvation
 Route::get('/admin/innvation',[InnvationController::class,'background']);
 Route::post('/admin/update-innvation',[InnvationController::class,'update']);
 Route::post('/admin/update-innvation-section',[InnvationController::class,'updateSection']);
 Route::get('/admin/create-innvation',[InnvationController::class,'create']);
 Route::post('/admin/store-innvation',[InnvationController::class,'store']);
 Route::get('admin/innvation-sections',[InnvationController::class,'index']);
 Route::post('/admin/delete-innvation',[InnvationController::class,'destroy']);
 Route::get('admin/edit-innvation/{id}',[InnvationController::class,'edit']);

 Route::get('/admin/innvation-lastSection',[InnvationController::class,'lastSection']);
 Route::post('/admin/update-food-lastSection',[InnvationController::class,'UpdatelastSection']);
 
 

//  contact
Route::get('/admin/contact',[ContactController::class,'background']);
Route::post('/admin/update-contact',[ContactController::class,'update']);


//  Food
Route::get('/admin/foot-background',[foodController::class,'background']);
Route::post('/admin/foot-background',[foodController::class,'UpdateBackground']);
Route::get('/admin/food-section1',[foodController::class,'section1']);
Route::post('/admin/update-food-section1',[foodController::class,'updateSection1']);

Route::get('/admin/food-section2',[foodController::class,'section2']);
Route::post('/admin/update-food-section2',[foodController::class,'updateSection2']);

Route::get('/admin/food-section3',[foodController::class,'section3']);
Route::post('/admin/update-food-section3',[foodController::class,'updateSection3']);

Route::get('/admin/food-section4',[foodController::class,'section4']);
Route::post('/admin/update-food-section4',[foodController::class,'updateSection4']);

Route::get('/admin/food-section5',[foodController::class,'section5']);
Route::post('/admin/update-food-section5',[foodController::class,'updateSection5']);

Route::get('/admin/food-section6',[foodController::class,'section6']);
Route::post('/admin/update-food-section6',[foodController::class,'updateSection6']);




 });
