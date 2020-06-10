@extends('layout')
{{-- @if ($role == "jobPoster"; --}}
@section('content')

<h1 class="text-center"> Create a job post!</h1>

<div class="container-fluid">
    <div class="row h-100 justify-content-center align-items-center">

        <form method="post" action="{{ route( 'posts.store' ) }}" enctype="multipart/form-data">
            <div class="form-group container h-100">
         
                @csrf {{-- cross site request forgery. a security mesaure --}}

                <label for="content">
                    <strong> Job Post: </strong>
                    <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
                </label>
            </div>

            <div class="form-group container h-100">
                <input class="btn btn-primary btn-customized align-bottom" type="submit" value="Create Job">
            </div>
        </form>

</div>
</div>

<div id="app">
    <image-post></image-post>
</div>

@endsection
