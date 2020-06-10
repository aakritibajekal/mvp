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
            $posts = Posts::query( )
            ->join( 'users', 'posts.user_id', '=', 'users.id' )
            ->select( 
                'posts.id',
                'users.id as user_id',
                'users.name',
                'posts.content',
                'users.companyName' )
                ->orderBy('users.name')
                ->get();

                $post = Posts::where("user_id", "=", $user->id)->first();
                dd($posts);
                return view( 'posts.index', compact('posts') );
        } else
        $posts = Posts::query()
                ->join( 'users', 'posts.user_id', '=', 'users.id' )
                ->select( 'posts.id',
                'users.id as user_id',
                'users.name',
                'users.companyName',
                'posts.content',
                 )
                ->orderBy('users.name',)
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
        $user = Auth::user();
        if ( $user ) // we are logged in and can create posts

        

            return view('posts.create');
        else // not logged in, can not make posts. redirect to index
            return redirect('/posts');
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
        if ( $user = Auth::user() ) //only store data if user is logged in. 
        {

        $validatedData = $request->validate(array( 
            'content' => 'required|max:255',
           
        ));
        $post = new Posts();
        $post->user_id = $user->id;
        $post->save();
        
    
         return redirect('/posts')->with('success', 'Job saved.');
        }// redirect by default
         return redirect('/posts');
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
        $post = Posts::findOrFail($id);

        $user = User::findOrFail($post->user_id);

        $user = User::where("user_id", "=", $user->id)->firstOrFail(); 

        return view( 'posts.show', compact('post', 'user') );
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
        if ( $user = Auth::user() ) {
            
            $post = Posts::findOrFail($id);

            return view( 'posts.edit', compact('post') );
        }
        return redirect('/posts');
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
        if ( $user = Auth::user() ) {
            $validatedData = $request->validate(array( 
                'content' => 'required|max:255',
             ));
    
             Posts::whereId($id)->update($validatedData);

             return redirect('/posts')->with('success', 'Job updated.');
            }
            return redirect('/posts');
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
        if ( $user = Auth::user() ) {
            $post = Posts::findOrFail($id);
    
            $post->delete();
    
            return redirect('/posts')->with('success', 'Job post deleted.');
        }
        return redirect('/posts');
    }
}
