<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $request){
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

        dd($post);
    }
        public function read(Request $r){
            $post = Post::find(1);
            
            return $post;
        }

        public function all(Request $r){
            $posts= Post::all();
            return $posts;
            //almbas tem a mesma função
            // $posts = new Post();            
            // $posts = $posts->all();
            // dd($posts);
        }

        public function update(Request $request){
            $posts = Post::where('id', '>',1)->update([
                'author' => 'Araujo',
                'title'=> 'alterado'
            ]);


            // $post->title = 'Meu Post Atualizado';
            // $post->save();
            return $posts;
        }

        public function delete(Request $r){
            $post = Post::where('id','>',0)->delete();
            return $post;
        //     if($post){
        //     return $post->delete();
        // }else{
        //     return "<script>alert('Não existe post com esse id')</script>";
        // }

            // Ambas as formas podem ser feitas.
            
            // $post = Post::where('id', '=', 1)->delete();
            // return $post;
        }

    
}
