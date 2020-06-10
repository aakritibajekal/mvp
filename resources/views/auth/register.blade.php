@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="hourlyRate" class="col-md-4 col-form-label text-md-right">
                                <strong> Hourly Rate: </strong>
                                <input type="text" name="hourlyRate" id="hourlyRate" class="col-md-6">
                            </label>
                        </div>
                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">
                                <strong> City: </strong>
                                <input type="text" id="city" name="city" class="col-md-6">
                            </label>
                        <div>
                        <div class="form-group row">
                            <label for="companyName" class="col-md-4 col-form-label text-md-right">
                                <strong> Company Name: </strong>
                                <input type="text" id="companyName" name="companyName" class="col-md-6">
                            </label>
                        </div>
                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">
                                <strong> Role: </strong>
                                <input id="jobFinder" type="radio"class="col-md-6" name="role" value="jobFinder"> Job Finder
                                <input id="jobPoster" type="radio"class="col-md-6" name="role" value="jobPoster"> Job Poster
                            </label>
                        </div>
                        <div class="form-group row">
                            <label for="skills" class="col-md-4 col-form-label text-md-right">Choose your Skills from the list:
                                <input list="skills" name="skill[]"  class="col-md-6">
                                    <datalist id="skills">
                                    <option value="Coding">Coding</option>
                                    <option value="Designing">Designing</option>
                                    <option value="Web UX">Web UX</option>
                                    <option value="SEO">SEO</option>
                                    <option value="SEM">SEM</option>
                                </datalist>
                                <input list="skills" name="skill[]"  class="col-md-6">
                                <input list="skills" name="skill[]"  class="col-md-6">
                                </label>
                            </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
