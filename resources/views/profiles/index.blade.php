@extends('layout')


@section('title')
Job Finders
@endsection

@section('content')

@if ( session()->get('success') )
<div role="alert">
    {{ session()->get('success') }}
</div>
@endif

<p> List of Profiles:</p>
@foreach($users as $user)
<div class="card" style="width: 40rem;">

    <ul>    
        <div class="card-body"> 
            <li>
                <h5>
                    <strong> {{ $user->name }} </strong>
                </h5>
                <p>
                   <strong> Skills: </strong>  {{ $user->skill}}
                </p>
            </li>
        </div>       
    </ul>
</div>
@endforeach
@endsection

@auth 

@endauth