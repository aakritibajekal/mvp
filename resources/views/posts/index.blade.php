@extends('layout')

@section('content')

@if ( session()->get('success') )
<div role="alert">
    {{ session()->get('success') }}
</div>
@endif

<div id="app"> 
@foreach($posts as $post)

<div class="card" class="gridCard m-b-md" style="width: 36rem;">

    <ul>
        <div class="card-body"> 
            <li> 
                <a href="{{ route('users.show', $post->user_id) }}" class="text-dark" class="nav-link" >
                    <strong >{{ $post->name }}</strong>
                </a>
                <p>
                    {{ $post->content }}    
                </p>
                <a href="{{ route('posts.show', $post->id ) }}" >
                    <button data-post-id="{{ $post->user }}" >View Job Poster</button>
                </a>
            </li> 
        </div>       
    </ul>
</div>
@endforeach
{{--  $posts->links()  --}}
@endsection
</div>
