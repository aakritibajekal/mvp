<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Posts;
use App\User;
use App\Skill;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if ( $user = Auth::user() )
        {
            $posts = Post::query( )
            ->join( 'users', 'posts.user_id', '=', 'users.id' )
            ->select( 
                'posts.id',
                'users.id as user_id',
                'users.name',
                'posts.posted_at',
                'posts.posted_at',
                'posts.content',
                'users.companyName', )
                ->orderBy('posts.posted_at');

                $post = Post::where("user_id", "=", $user->id)->first();

                return view();
        } else
        $posts = Post::query()
                ->join( 'users', 'posts.user_id', '=', 'users.id' )
                ->select( 'posts.id',
                'users.id as user_id',
                'users.name',
                'users.companyName',
                'posts.posted_at',
                'posts.posted_at',
                'posts.content',
                 )
                ->orderBy('posts.posted_at',)
                ->get();

                return view( 'posts.index', compact('posts'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
