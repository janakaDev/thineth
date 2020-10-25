<?php>
@extends('layouts.app')
@section('content')
<section class="left-section">
<div id="left-cover" class="cover cover-hide">
    <img src="{{asset('app-assets/img/cover2.png')}}" alt="">
    <h1>Welcome !</h1>
    <h3>Already have an account ?</h3>
    <button type="button" class="switch-btn" onclick="location.reload()">Login</button>
</div>
<div id="left-form" class="form fade-in-element">
    <h1>Login</h1>
    @if(session()->has('error'))
                   <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif
    <form action="/login" method="post">
        @csrf
        <input type="text" name="username" class="input-box" placeholder="User Name">
        <input type="password" name="password" class="input-box" placeholder="Password">
        <input type="submit" name="login-btn" class="btn" value="Login">
    </form>
</div>
</section>

<section class="right-section">
<div id="right-cover" class="cover fade-in-element">
    <img src="{{asset('app-assets/img/cover2.png')}}" alt="">
    <h1>Welcome !</h1>
    <h3>Dont have an account ?</h3>
    <button type="button" class="switch-btn" onclick="switchSignup()">Signup</button>
</div>
<div id="right-form" class="form form-hide">
    <h1>Signup</h1>
    @if( session('success'))
        <div class="alert alert-success">    {{ session()->get('error') }}</div>
      @endif
      <h1>Login</h1>
    @if(session()->has('error'))
                   <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif
    <form action="register" method="post">
        @csrf
        <input type="text" name="firstname" class="input-box" placeholder="first Name">
        <input type="text" name="lastname" class="input-box" placeholder="last Name">
        <input type="text" name="username" class="input-box" placeholder="User Name">
        <input type="email" name="email" class="input-box" placeholder="Email">
        <input type="password" name="password" class="input-box" placeholder="Password">
        <input type="submit" name="signup-btn" class="btn" value="Signup">
    </form>
</div>
</section>
@endsection