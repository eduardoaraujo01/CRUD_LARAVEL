<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return $posts;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //No futuro irá apenas exibir um formulario
        $new_post = [
            'title'=>'Meu Primeiro Post',
            'content'=>'Conteúdo Qualquer',
            'author'=>'Eduardo',
        ];
        // Forma mais convencional de criar um registro no banco
        // $post = new Post($new_post);
        // $post->save();

        $post = new Post();
        $post->title = 'Meu Segundo Post';
        $post->content = 'Conteúdo Qualquer';
        $post->author = 'Araujo';
        $post->save();

        return $post;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //No futuro, receberá um post com um novo recurso
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Post::find($id);
            
        return $post;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Post::find($id)->update([
            'author' => 'Araujo',
            'title'=> 'alterado'
        ]);


        // $post->title = 'Meu Post Atualizado';
        // $post->save();
        return $posts;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id)->delete();
        return $post;
    }
}
