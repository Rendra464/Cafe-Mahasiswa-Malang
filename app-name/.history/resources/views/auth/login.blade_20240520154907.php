

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="title">Sign in</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" id="SignInUsername" placeholder="Username" name="Username"/>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="SignInPassword" placeholder="Password" name="Password"/>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
