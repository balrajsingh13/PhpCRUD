<?php

use App\Post;
use App\Employee;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('form');
});

// Route::get('/view',function(){      
//     $posts = Post::all();
//     foreach($posts as $post){
//         return $post->emp_ID;    
//     }
// });

// Route::get('/viewall',function(){     
//     $posts = Post::all();           //all() use to reterive all records.
//     //echo $posts;
//     foreach($posts as $post){
//         //echo $post;
//         foreach($post as $key=>$value){
//             echo $value;echo",";
//         }
//         echo '<br>';
//     }
// });

Route::get('/view ', 'CRUDController@viewAll');

Route::post('/', 'CRUDController@store');

Route::post('/{id}', 'CRUDController@update');

Route::get('/view/{id}','CRUDController@destroy');

Route::get('/{id}', 'CRUDController@fillForm');

// Route::get('/view ',function(){
//     $data = Employee::all()->toArray();
//         print_r($data);
// });