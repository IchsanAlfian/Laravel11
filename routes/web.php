<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', ['title' => 'HomePage']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Ichsan Alfian'], ['title' => 'About']);
});

Route::get('/blog', function () {
    // $posts = Post:: with(['author','category'])->latest()->get();
    // dd(request('search'));
    // $posts= Post::latest();
   
    // if(request('search')){
    //     $posts->where('title','like','%'. request('search').'%');
    // }
    return view('blog', ['title'=> 'Blog', 'posts'=> Post::filter(request(['search', 'category', 'author']))->latest()->paginate(6)->withQueryString()]);
});
Route::get('/blog/{post:slug}', function(Post $post){
    // $post = Post::find($id);
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});
Route::get('/authors/{user:username}', function(User $user){
    // $post = Post::find($id);
    // $posts = $user->posts->load('category', 'author');
    return view('blog', ['title' => count($user -> posts). ' Articles by '. $user->name, 'posts' => $user -> posts]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    // $post = Post::find($id);
    // $posts = $category->posts->load('category', 'author');
    return view('blog', ['title' =>'Articles in: '. $category->name , 'posts' => $category->posts]);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
