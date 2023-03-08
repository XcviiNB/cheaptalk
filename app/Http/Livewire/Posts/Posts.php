<?php

namespace App\Http\Livewire\Posts;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Posts extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $postCategory = 'all';
    public $categories, $postSearch;

    public function sortCategory() {
        $query = Post::latest('created_at')->search($this->postSearch);

        if ($this->postCategory != 'all') {
            $query->where('category_id', $this->postCategory);
        }


        $posts = $query->paginate(3);
        return compact('posts');

    }

    public function mount() {
        $this->categories = Category::get();
    }

    public function render()
    {
        return view('livewire.posts.posts', $this->sortCategory());
    }
}
