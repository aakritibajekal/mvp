@extends('layout')

@section('title')
Create User Profile
@endsection

@section('content')

<h1 class="text-center">Create your profile!</h1>

<div class="profile-crud">
    <form method="post" action="{{ route( 'profiles.store' ) }}" enctype="multipart/form-data">
            <div class="form-group container h-100">
                @csrf {{-- cross site request forgery. a security mesaure --}}

                <label for="name">
                    <strong> Name: </strong>
                    <input type="text" id="name" name="name">
                </label>   
                <label for="hourlyRate">
                    <strong> Hourly Rate: </strong>
                    <input type="text" name="hourlyRate" id="hourlyRate">
                </label>
                <label for="city">
                    <strong> City: </strong>
                    <input type="text" id="city" name="city">
                </label>
                <label for="companyName">
                    <strong> Company Name: </strong>
                    <input type="text" id="companyName" name="companyName">
                </label>
                <label for="role">
                    <strong> Role: </strong>
                        <input id="jobFinder" type="radio"class="form-control" name="role" value="jobFinder">
                        <input id="jobPoster" type="radio"class="form-control" name="role" value="jobPoster">
                </label>
                <label for="role">
                    <strong> Role: </strong>
                        <input id="jobFinder" type="radio"class="form-control" name="role" value="jobFinder">
                        <input id="jobPoster" type="radio"class="form-control" name="role" value="jobPoster">
                </label>
                <label for="futureSkills"> 
                {{-- Resources --}}
                {{-- https://harvesthq.github.io/chosen/ --}}
                {{-- https://select2.org/getting-started/basic-usage --}}
                {{-- http://jsfiddle.net/iiic/t66boyea/1 (good if options are preset) --}}
                {{-- https://www.w3schools.com/tags/tryit.asp?filename=tryhtml5_datalist (good if I am proving all the options)--}}
                </label>
                <label for="skills">Choose your browser from the list:</label>
                    <input list="skills" name="skill" id="skill">
                    <datalist id="skill">
                        <option value="Coding">
                        <option value="Designing">
                        <option value="Web UX">
                        <option value="SEO">
                        <option value="SEM">
                    </datalist>
                <div class="form-group">
                    <input class="btn btn-primary btn-customized align-bottom" type="submit" value="Create Profile!">
                </div>
</div>