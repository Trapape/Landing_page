<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;


class PostsIndex extends Component
{
    use WithPagination;
    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        if (auth()->user()->hasRole('Admin')) {
            // Si el usuario es un administrador, obtén todos los posts sin filtro.
            $posts = Post::query()
            ->where('name', 'LIKE','%' . $this->search . '%')
            ->latest('id')
            ->paginate();
            return view('livewire.admin.posts-index', compact('posts'));;
        } else {
            // Si no es un administrador, obtén los posts creados por el usuario en sesión.
            $posts = Post::where('user_id', auth()->user()->id)
            ->where('name', 'LIKE','%' . $this->search . '%')
            ->latest('id')
            ->paginate();
            return view('livewire.admin.posts-index', compact('posts'));
        }
        
    }
}
