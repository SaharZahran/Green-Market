@extends('dashboard.user.layouts.master');
@section('pageTitle', 'User|Register');

@section('content')
<div class="container">
    <h1>Register</h1>
    <form action={{ route('user.create') }} class='register__form' method="POST" autocomplete="off">
        @if (Session::get('success'))
        <div>
            {{ Session::get('success')}}
        </div> 
        @endif
        @if (Session::get('fail'))
        <div>
            {{ Session::get('fail')}}
        </div> 
        @endif
        @csrf
        <div class="form__field">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Enter Your Name" value={{ old('name') }}>
            <span class="text-danger">@error('name')
                {{ $message }}
            @enderror</span>
        </div>
        <div class="form__field">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter Email Address" value={{ old('email') }}>
            <span class="text-danger">@error('email')
                {{ $message }}
            @enderror</span>
        </div>
        <div class="form__field">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter Password" value={{ old('password') }}>
            <span class="text-danger">@error('password')
                {{ $message }}
            @enderror</span>
        </div>
        <div class="form__field">
            <label for="confirm_password">Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password " value={{ old('confirm_password') }}>
            <span class="text-danger">@error('confirm_password')
                {{ $message }}
            @enderror</span>
        </div>
        <button type="submit" class="register__btn">Register</button>
        <br>
        <a class="form__hint" href={{ route('user.login') }}>Already have an account</a>
    </form>
</div>
@endsection