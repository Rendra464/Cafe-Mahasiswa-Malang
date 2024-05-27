@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="title">Sign in</h2>
            <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
        </div>
    </div>
</div>
@endsection
