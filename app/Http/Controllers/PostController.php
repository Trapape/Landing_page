<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

class PostController extends Controller
{
    public function blog(){
        $posts = Post::where('status',2)->latest('id')->paginate(10);
        $categories = Category::all();
        $tags = Tag::all();
        return view('sitio.pages.blog', compact('posts','categories','tags')); 
    }  

    public function articulo(Post $post){
        $this->authorize('published', $post);
        $similares = Post::where('category_id', $post->category_id)
                ->where('status',2)
                ->where('id','!=', $post->id)
                ->latest('id')
                ->take(4)
                ->get();

        return view('sitio.pages.articulo', compact('post', 'similares'));
    }

    public function category(Category $category){
        $posts = Post::where('category_id', $category->id)
                ->where('status',2)
                ->latest('id')
                ->paginate(6);
        return view('sitio.pages.filtrado.categoria', compact('posts', 'category'));
    }  

    public function tag(Tag $tag){
        $posts = $tag->posts()->where('status',2)->latest('id')->paginate(4);
        return view('sitio.pages.filtrado.tag', compact('posts', 'tag'));
    } 

}
