@extends('public.layouts.master')

@section('content')
<div class="auth-forms">
        <form method="POST" action="{{ route('register') }}">
            <div class="form-title">{{ __('Register') }}</div>
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>
                            
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                                
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="company_name" class="col-md-4 col-form-label text-md-end">Company Name</label>
                                <div class="col-md-6">
                                    <input id="company_name" type="text" name="company_name" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="seller_method" class="col-md-4 col-form-label text-md-end">Seller Method</label>
                                <div class="col-md-6">
                                    <input id="seller_method" type="file" name="seller_method" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="user_phone" class="col-md-4 col-form-label text-md-end">Phone</label>
                                <div class="col-md-6">
                                    <input id="user_phone" type="number" name="user_phone" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="user_type" class="col-md-4 col-form-label text-md-end">User Type</label>
                                <div class="col-md-6">
                                    <select name="user_type" id="user_type">
                                        <option selected>Choose User Type</option>
                                        <option>user</option>
                                        <option>seller</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="green-btn">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
</div>
@endsection
