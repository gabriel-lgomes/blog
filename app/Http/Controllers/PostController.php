<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    // O middleware já está sendo aplicado diretamente nas rotas, então não é necessário no controlador

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'image' => 'required|image',
            'description' => 'required',
        ]);

        // Pegando o usuário logado
        $user = Auth::user();

        // Salvando a imagem
        $imagePath = $request->file('image')->store('posts', 'public');

        // Criando o post
        Post::create([
            'title' => $request->title,
            'category' => $request->category,
            'image' => $imagePath,
            'description' => $request->description,
            'author_name' => $user->name,
            'author_photo' => $user->image,
            'user_id' => $user->id,
        ]);

        return redirect()->route('home')->with('success', 'Post criado com sucesso!');
    }

    public function show(Post $post)
    {
        // Pega todos os posts relacionados (mesma categoria, exceto o post atual)
        $relatedPosts = Post::where('category', $post->category)
                            ->where('id', '!=', $post->id)
                            ->get();
    
        // Retorna a visualização com o post específico e os posts relacionados
        return view('posts.show', compact('post', 'relatedPosts'));
    }
    

}
