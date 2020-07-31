<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Models\Posts;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * dashbord page
     *
     * @param  void
     * @return View
     */
    public function newPosts()
    {

        $veriables = null;
        $viewName = 'admin.post.newPost';
        return view('admin.layout.app', compact('viewName', 'veriables'));
    }

    /**
     * Create new post
     * 
     * @param void
     * @return view
     */
    public function savePost(Request $Request)
    {
        # input
        $insertParam = [
            "title" => $Request->input('title'),
            "keywords" => $Request->input('keywords'),
            "description" => $Request->input('description'),
            "image" => $Request->input('url'),
            "url" => $Request->input('posturl'),
            "content" => $Request->input('content'),
            "user_id" => Auth::id()
        ];

        # save post
        Posts::insert($insertParam);

        return redirect('admin/dashboard')->with('success', 'Post publish successfully');
    }

    /**
     * Update post
     * 
     * @param void
     * @return view
     */
    public function updatePost($id)
    {
        # get post by id
        $id = decrypt($id);
        $post = Posts::where('id',$id)->first();

        $veriables = 'post';
        $viewName = 'admin.post.updatePost';
        return view('admin.layout.app', compact('viewName', 'veriables', 'post'));
    }

    /**
     * Save updeted post
     * 
     * @param Request
     * @return view
     */
    public function saveUpdatePost(Request $Request)
    {
        # input
        $postId = decrypt($Request->input('id'));
        $updateParam = [
            "title" => $Request->input('title'),
            "keywords" => $Request->input('keywords'),
            "description" => $Request->input('description'),
            "image" => $Request->input('url'),
            "url" => $Request->input('posturl'),
            "content" => $Request->input('content'),
            "user_id" => Auth::id()
        ];

        # save post
        Posts::where('id', $postId)->update($updateParam);

        return redirect('admin/dashboard')->with('success', 'Post updated successfully');
    }
}