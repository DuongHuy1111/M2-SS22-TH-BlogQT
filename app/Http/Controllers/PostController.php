<?php

namespace App\Http\Controllers;

use App\Repositories\Eloquent\Post\PostRepositoryInterface;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $postService;

    public function __construct(PostRepositoryInterface $postService)
    {
        $this->postService = $postService;
    }

    public function index(){
        $posts = $this->postService->all();
        return view("post.list", ['posts'=>$posts]);
    }
    public function create(Request $request){
        return view("post.create");
    }
    public function store(Request $request){
        $post = $this->postService->create($request->all());
        return view("post.create");
    }
}
