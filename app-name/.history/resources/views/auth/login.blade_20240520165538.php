<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
	<title>Login Form</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap');

    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
    }

    body,
    input {
    font-family: 'Montserrat', sans-serif;
    }

    .container-login {
    position: relative;
    width: 100%;
    background-color: #fff;
    min-height: 100vh;
    overflow: hidden;
    }

    .forms-container-login {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    }

    .signin-signup {
    position: absolute;
    top: 30%;
    transform: translate(-50%, -50%);
    left: 75%;
    width: 50%;
    transition: 1s 0.7s ease-in-out;
    display: grid;
    grid-template-columns: 1fr;
    z-index: 5;
    }

    form {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0rem 5rem;
    transition: all 0.2s 0.7s;
    overflow: hidden;
    grid-column: 1 / 2;
    grid-row: 1 / 2;
    }

    form.sign-up-form {
    opacity: 0;
    z-index: 1;
    }

    form.sign-in-form {
    z-index: 2;
    }

    .title {
    font-size: 2.2rem;
    color: #444;
    margin-bottom: 10px;
    }

    .py-4{
        padding-top:0px !important
    }

    .input-field {
    max-width: 380px;
    width: 100%;
    background-color: #f0f0f0;
    margin: 10px 0;
    height: 55px;
    border-radius: 5px;
    display: grid;
    grid-template-columns: 15% 85%;
    padding: 0 0.4rem;
    position: relative;
    }

    .input-field i {
    text-align: center;
    line-height: 55px;
    color: #acacac;
    transition: 0.5s;
    font-size: 1.1rem;
    }

    .input-field input {
    background: none;
    outline: none;
    border: none;
    line-height: 1;
    font-weight: 600;
    font-size: 1.1rem;
    color: #333;
    }

    .input-field input::placeholder {
    color: #aaa;
    font-weight: 500;
    }

    .social-text {
    padding: 0.7rem 0;
    font-size: 1rem;
    }

    .social-media {
    display: flex;
    justify-content: center;
    }

    .social-icon {
    height: 46px;
    width: 46px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 0.45rem;
    color: #333;
    border-radius: 50%;
    border: 1px solid #333;
    text-decoration: none;
    font-size: 1.1rem;
    transition: 0.3s;
    }

    .social-icon:hover {
    color: #073C21;
    border-color: #073C21;
    }

    .btn-Login {
    width: 150px;
    background-color: #073C21;
    border: none;
    outline: none;
    height: 49px;
    border-radius: 15px;
    color: #fff;
    text-transform: uppercase;
    font-weight: 600;
    margin: 10px 0;
    cursor: pointer;
    transition: 0.5s;
    }

    .btn:hover {
    background-color: #073C21;
    }
    .panels-container-login {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    }

    .container-login:before {
    content: "";
    position: absolute;
    height: 2000px;
    width: 2000px;
    top: -10%;
    right: 48%;
    transform: translateY(-50%);
    background-image: linear-gradient(-45deg, #5F5D5E 0%, #073C21 35%);
    transition: 1.8s ease-in-out;
    border-radius: 50%;
    z-index: 6;
    }

    .image {
    width: 100%;
    transition: transform 1.1s ease-in-out;
    transition-delay: 0.4s;
    }

    .panel {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: space-around;
    text-align: center;
    z-index: 6;
    }

    .left-panel {
    pointer-events: all;
    padding: 3rem 17% 2rem 12%;
    }

    .right-panel {
    pointer-events: none;
    padding: 3rem 12% 2rem 17%;
    }

    .panel .content {
    color: #fff;
    transition: transform 0.9s ease-in-out;
    transition-delay: 0.6s;
    }

    .panel h3 {
    font-weight: 600;
    line-height: 1;
    font-size: 1.5rem;
    }

    .panel p {
    font-size: 0.95rem;
    padding: 0.7rem 0;
    }

    .btn.transparent {
    margin: 0;
    background: none;
    border: 2px solid #fff;
    width: 130px;
    height: 41px;
    font-weight: 600;
    font-size: 0.8rem;
    }

    .right-panel .image,
    .right-panel .content {
    transform: translateX(800px);
    }

    /* ANIMATION */

    .container-login.sign-up-mode:before {
    transform: translate(100%, -50%);
    right: 52%;
    }

    .container-login.sign-up-mode .left-panel .image,
    .container-login.sign-up-mode .left-panel .content {
    transform: translateX(-800px);
    }

    .container-login.sign-up-mode .signin-signup {
    left: 25%;
    }

    .container-login.sign-up-mode form.sign-up-form {
    opacity: 1;
    z-index: 2;
    }

    .container-login.sign-up-mode form.sign-in-form {
    opacity: 0;
    z-index: 1;
    }

    .container-login.sign-up-mode .right-panel .image,
    .container-login.sign-up-mode .right-panel .content {
    transform: translateX(5%);
    }

    .container-login.sign-up-mode .left-panel {
    pointer-events: none;
    }

    .container-login.sign-up-mode .right-panel {
    pointer-events: all;
    }

    @media (max-width: 870px) {
    .container-login {
        min-height: 800px;
        height: 100vh;
    }
    .signin-signup {
        width: 100%;
        top: 95%;
        transform: translate(-50%, -100%);
        transition: 1s 0.8s ease-in-out;
    }

    .signin-signup,
    .container-login.sign-up-mode .signin-signup {
        left: 50%;
    }

    .panels-container-login {
        grid-template-columns: 1fr;
        grid-template-rows: 1fr 2fr 1fr;
    }

    .panel {
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
        padding: 2.5rem 8%;
        grid-column: 1 / 2;
    }

    .right-panel {
        grid-row: 3 / 4;
    }

    .left-panel {
        grid-row: 1 / 2;
    }

    .image {
        width: 200px;
        transition: transform 0.9s ease-in-out;
        transition-delay: 0.6s;
    }

    .panel .content {
        padding-right: 15%;
        transition: transform 0.9s ease-in-out;
        transition-delay: 0.8s;
    }

    .panel h3 {
        font-size: 1.2rem;
    }

    .panel p {
        font-size: 0.7rem;
        padding: 0.5rem 0;
    }

    .btn.transparent {
        width: 110px;
        height: 35px;
        font-size: 0.7rem;
    }

    .container-login:before {
        width: 1500px;
        height: 1500px;
        transform: translateX(-50%);
        left: 30%;
        bottom: 68%;
        right: initial;
        top: initial;
        transition: 2s ease-in-out;
    }

    .container-login.sign-up-mode:before {
        transform: translate(-50%, 100%);
        bottom: 32%;
        right: initial;
    }

    .container-login.sign-up-mode .left-panel .image,
    .container-login.sign-up-mode .left-panel .content {
        transform: translateY(-300px);
    }

    .container-login.sign-up-mode .right-panel .image,
    .container-login.sign-up-mode .right-panel .content {
        transform: translateY(0px);
    }

    .right-panel .image,
    .right-panel .content {
        transform: translateY(300px);
    }

    .container-login.sign-up-mode .signin-signup {
        top: 5%;
        transform: translate(-50%, 0);
    }
    }

    @media (max-width: 570px) {
    form {
        padding: 0 1.5rem;
    }

    .image {
        display: none;
    }
    .panel .content {
        padding: 0.5rem 1rem;
    }
    .container-login {
        padding: 1.5rem;
    }

    .container-login:before {
        bottom: 72%;
        left: 50%;
    }

    .container-login.sign-up-mode:before {
        bottom: 28%;
        left: 50%;
    }
    }
</style>

@extends('layouts.app')

@section('content')
<div class="container-login">

    <div class="forms-container">
        <div class="signin-signup">
            <form action="{{ route('login') }}" method="POST" class="sign-in-form">
                @csrf
                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn-Login">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                <p class="social-text">Or Sign in with social platforms</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>

                </div>
            </form>
        </div>
    </div>

    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>New here ?</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                    ex ratione. Aliquid!
                </p>
                <button class="btn transparent" id="sign-up-btn">
                    Sign up
                </button>
            </div>
            <img src="{{ URL('Privacy_Policy_ICON.png') }}" alt="" class="image" style="border-radius:100px">
        </div>
    </div>

</div>

@endsection
