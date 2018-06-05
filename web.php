<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
|
*/

use Illuminate\Http\Request;

Route::get('/', function () {
    $res = App\University::all();
    return view('index', ["key"=>$res]);
});
Route::get('/abit',function(){
    $res = App\University::all();
    return view('abit', ["key"=>$res]);
});
Route::get('/grants', function(){
    $grant = App\Grant::all();
    return view('grants',["grant"=>$grant]);
});
Route::get('/competitions', function(){
    $photo = App\Competition::where('category','=','photo')->get();
    $design = App\Competition::where('category','=','design')->get();
    return view('competitions',["photo"=>$photo,"design"=>$design]);
});
Route::get('/search', function(Request $req){
    header("Access-Control-Allow-Origin: *");
    $search = App\Grant::where('title','like','%'.$req->value.'%')->orWhere('description','like','%'.$req->value.'%')->orWhere('deadline','like','%'.$req->value.'%')->get();
    return $search;
});
Route::get('/post/{id}', function($id){
    $res = App\University::find($id);
    $res2 = App\Faculty::where("id_university","=",$id)->get();
   // $res->comments
    return view('post', ["post"=>$res, "res2"=>$res2]);
});
Route::post('/comment/{id}',function(Request $req, $id){
    App\Ccomment::create([
        "nickname"=>$req->nickname,
        "comment"=>$req->comment,
        "university_id"=>$id
    ]);
    return back();
});
