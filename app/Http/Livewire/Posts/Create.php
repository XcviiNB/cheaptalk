<?php

namespace App\Http\Livewire\Posts;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $categories, $category_id, $author, $title, $content, $posts, $image;

    public function mount() {
        $this->categories = Category::get();
    }

    public function render() {
        $this->posts = Post::all();
        return view('livewire.posts.create');
    }

    public function store() {
        $validatedData = $this->validate([
            'category_id'   => 'required',
            'author'        => 'required',
            'title'         => 'required',
            'content'       => 'required',
            'image'         => 'image'
        ]);

        $path = $validatedData['image']->store('public/images');

        $post = new Post([
            'category_id' => $validatedData['category_id'],
            'author' => $validatedData['author'],
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
            'image' => $path
        ]);

        $post->save();
        // Post::create($validatedData);

        session()->flash('message', 'Post added');

        return redirect('/posts');
    }

    // public function saveImage() {
    //     $tempPath = $this->image->store('temp');

    //     $publicPath = Storage::disk('public')->putFile('images', new File($tempPath));

    //     Image::create([
    //         'filename' => $publicPath
    //     ]);
    // }
}
