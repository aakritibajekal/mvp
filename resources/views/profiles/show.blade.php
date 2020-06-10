@extends('layout')

@section('title')
Check User Profile
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                   


                    <h4> See a Profile</h4>
                  
                    <strong> Job Finder: </strong> 
                    {{ $user->name }}

                    <br>

                    <strong> Skills </strong>
                    <p>{{ $user->skill }}</p>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection