<?php

use App\Post;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


// Route::get('/insertDB', function(){

//     DB::insert('insert into posts(title, content, author, categories) values(?, ?, ?, ?)', 
//     ['PHP with Laravel', 'Laravel is the best thing that has happened', 'Carlos Garcia', 'Programming']);

//     DB::insert('insert into posts(title, content, author, categories) values(?, ?, ?, ?)', 
//     ['Python with DJango', 'DJango is the best thing that has happened', 'Charles Antigua', 'Programming']);
// });
/*
    Routes

        create => /api/posts/create
        get all (index) => /api/posts
        get one => /api/posts/{id}
        edit one => /api/posts/{id} - PUT
        delete one => /api/posts/{id}


*/


// Route::get('/contact/{id}', function ($id){
//     return "This is what you wrote: ".$id;
// });

// Route::get('/admin/posts/example', array('as' => 'admin.home', function(){

//     $url = route('admin.home');
//     return "this url is: ". $url;

// }));

// Route::get('/posts/{id}', 'PostsController@index');

//Route::resource('/api/posts/', 'PostsController');

//Route::get('/contact/{id}', 'PostsController@contact');


// Route::get('/', function(){
//     return view('welcome');
// });

// Route::get('/api/posts', function(){

  
//     $posts = Post::all()->where();
//     return $posts;
// });

// Route::get('/api/posts/{id}', function($id){

  
//     $post = Post::find($id);
//     return $post->title;

// });

// Route::get('/basicInsert', function(){

//     $post = new Post;
//     $post->title = "Eloquent ORM";
//     $post->content = "This is an insert from Eloquent";
//     $post->author = "Anonymous";
//     $post->categories = "Programming";

//     $post->save();
// });

// Route::get('/edit/{title}', function($title){

//         $post = Post::find(1);
//         $post->title = $title;
//         $post->save();

// });

// Route::get('/create', function(){

//     Post::create([
//         'title'=>'This is a new title',
//         'content'=>'This is the content of the new title',
//         'author'=>'Create method',
//         'category'=>'Miscellaneous'
//         ]);
// });

Route::get('/softdelete', function(){

    Post::find(1)->delete();
});

Route::get('/select', function(){

        return Post::find(1);
});