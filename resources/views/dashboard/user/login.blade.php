@extends('dashboard.user.layouts.master')
@section('pageTitle', 'Seller|Login')

@section('content')
<div class="container">
    <h1>Login</h1>
    <form action="{{ route('user.check') }}" method="post" class="login__form">
       @if (Session::get('fail'))
           {{ Session::get('fail') }}
       @endif
        @csrf
        <div class="form__field">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter Email Address" value={{ old('email') }}>
            <span class="text-danger">
                @error('email')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="form__field">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter Password" value={{ old('password') }}>
            <span class="text-danger">
                @error('password')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <button type="submit" class="login__btn">Login</button>
        <br>
        <a class="form__hint" href={{ route('user.register') }}>Do not have an account</a>
    </form>
</div>
@endsection
