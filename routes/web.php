<?php

//use listing;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/search',function(Request $request){
//    dd($request->name); 
// });

Route::get('/',function(){
    return view('listings',[
        'heading'=>'latest listings',
        'listings'=>Listing::all()
    
    ]);    

});
Route::get('/listings/{id}',function($id){
         
    return view('listing',[
        'listing'=>Listing::find($id),
        
    ]);    

});