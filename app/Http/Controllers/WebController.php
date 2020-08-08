<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Contact;

class WebController extends Controller
{
    /**
     * Login page
     *
     * @param  void
     * @return View
     */
    public function index()
    {


        $imagePrefix = env('image_prefix');
        $posts = DB::table('posts')
            ->select('posts.id','posts.title','posts.description','posts.image','posts.keywords','posts.url','posts.created_at','users.pic','users.first_name','users.last_name',)
            ->leftJoin('users', 'users.id', '=', 'posts.user_id')
            ->where('posts.status', 'Y')
            ->orderBy('posts.id', 'DESC')
            ->paginate(10);

        $sponsers = DB::table('sponsers')->where('status', 'Y')->get();
        

        # backround content
        $background = [
            "image" => $imagePrefix."home-bg.jpg",
            "title" => "Infinite Ability",
            "subtitle" => "We have the ability to build infinite way for us",
        ];

        # meta tags
        $metaTags = [
            "title" => "Infinitbility - Infinite Ability",
            "description" => "We have the ability to build infinite way for us",
            "image" => $imagePrefix."home-bg.jpg",
            "keywords" => "Infinitbility, Infinite Ability"
        ];

        $veriables = [
            "posts" => $posts,
            "sponsers" => $sponsers,
        ];

        $viewName = 'website.pages.index';
        return view('website.layout.app', compact('viewName', 'veriables', 'posts', 'background', 'sponsers', 'metaTags'));
    }

    /**
     * About Page
     * 
     * @param  void
     * @return View
     */
    public function about()
    {
        # backround content
        $imagePrefix = env('image_prefix');
        $background = [
            "image" => $imagePrefix."about-bg.jpg",
            "title" => "About",
            "subtitle" => "I care not what others think of what I do, but I care very much about what I think of what I do! That is character! - Theodore Roosevelt",
        ];

        # meta tags
        $metaTags = [
            "title" => "Infinitbility - About",
            "description" => "We have the ability to build infinite way for us",
            "image" => $imagePrefix."about-bg.jpg",
            "keywords" => "Infinitbility, Infinite Ability, about"
        ];

        $veriables = [];
        $viewName = 'website.pages.about';
        return view('website.layout.app', compact('viewName', 'veriables', 'background', 'metaTags'));
    }

    /**
     * Contact page
     * 
     * @param  void
     * @return View
     */
    public function contact()
    {
        # backround content
        $imagePrefix = env('image_prefix');
        $background = [
            "image" => $imagePrefix."contact-bg.jpg",
            "title" => "Contact",
            "subtitle" => "The infinitbility is a pretty big place and you are always welcome here.",
        ];

        # meta tags
        $metaTags = [
            "title" => "Infinitbility - Contact",
            "description" => "We have the ability to build infinite way for us",
            "image" => $imagePrefix."contact-bg.jpg",
            "keywords" => "Infinitbility, Infinite Ability, contact"
        ];

        $veriables = [];
        $viewName = 'website.pages.contact';
        return view('website.layout.app', compact('viewName', 'veriables', 'background', 'metaTags'));
    }

    /**
     * Post page
     * 
     * @param url
     * @return view
     */
    public function post($url)
    {

        # get post detail
        $post = DB::table('posts')
        ->select('posts.id','posts.title','posts.description','posts.image','posts.keywords','posts.url','posts.views','posts.content','posts.created_at','users.pic','users.first_name','users.last_name','users.bio')
        ->leftJoin('users', 'users.id', '=', 'posts.user_id')
        ->where('posts.status', 'Y')
        ->where('posts.url', $url)
        ->first();

        # update post view
        DB::table('posts')->where('url', $url)->update(['views' => $post->views + 1]);

        # backround content
        $imagePrefix = env('image_prefix');
        $background = [
            "image" => $post->image,
            "title" => $post->title,
            "subtitle" => $post->description,
        ];

        # releted post
        $reletedPost = DB::table('posts')
        ->select('posts.id','posts.title','posts.description','posts.image','posts.keywords','posts.url','posts.views','posts.content','posts.created_at','users.pic','users.first_name','users.last_name','users.bio')
        ->leftJoin('users', 'users.id', '=', 'posts.user_id')
        ->where('posts.status', 'Y')
        ->where('posts.keywords', 'like', '%'.$post->keywords.'%')
        ->where('posts.id', '!=',$post->id)
        ->limit(3)
        ->get();

        # meta tags
        $metaTags = [
            "title" => $post->title,
            "description" => $post->description,
            "image" => $post->image,
            "keywords" => "Infinitbility, Infinite Ability,".$post->keywords
        ];

        # sponser
        $sponsers = DB::table('sponsers')->where('status', 'Y')->get();

        $veriables = ['post' => $post, 'sponsers' => $sponsers, 'posts' => $reletedPost];
        $viewName = 'website.pages.post';
        return view('website.layout.app', compact('viewName', 'veriables', 'background', 'metaTags'));

    }

    /**
     * Save contact
     * 
     * @param request
     * @return view
     */
    public function saveContact(Request $Request)
    {
        # save new entry
        $captchaResponse = $Request->input('g-recaptcha-response');
        if($captchaResponse !== null){

            # input
            $name = $Request->input('name');
            $email = $Request->input('email');
            $phone = $Request->input('phone');
            $message = $Request->input('message');

            $insertParam = [
                "name" => $name,
                "email" => $email,
                "phone" => $phone,
                "message" => $message,
            ];

            $query = Contact::insert($insertParam);
            if($query == true){
                return back()->with('success','Thank You for contact us we will get back to you as soon as possible!');

            }else{
                return back()->with('danger','Something went wrong! please fill all field clearely');

            }

        }else{
            return back()->with('danger','Please check google captcha');
        }
    }

    /**
     * Privacy Policy page
     * 
     * @param void
     * @return view
     */
    public function privacyPolicy()
    {
        # backround content
        $imagePrefix = env('image_prefix');
        $background = [
            "image" => $imagePrefix."privacy-policy-background.jpg",
            "title" => "Privacy Policy",
            "subtitle" => "They who can give up essential liberty to obtain a little temporary safety deserve neither liberty nor safety",
        ];

        # meta tags
        $metaTags = [
            "title" => "Infinitbility - Privacy Policy",
            "description" => "We have the ability to build infinite way for us",
            "image" => $imagePrefix."privacy-policy-background.jpg",
            "keywords" => "Infinitbility, Infinite Ability, about"
        ];

        $veriables = [];
        $viewName = 'website.pages.privacyPolicy';
        return view('website.layout.app', compact('viewName', 'veriables', 'background', 'metaTags'));
    }
}