@extends('layouts.master')

@section('content')
<!-- custom form start here -->
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from earning your own money!</p>
                            <a href="{{url('register')}}" class="btn">Register</a>
                        <br/>
                    </div>
                    <div class="col-md-9 register-right">
                      <div class="" id="myTabContent">
                          
                            <div class="" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Login Here!</h3>
                                
                                    <form method="POST" action="{{ route('login') }}" class="row register-form">
                                         @csrf
                                    <div class="col-md-8 offset-2">
                                        <div class="form-group">
                                          
                                             <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Username">

                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password ..">

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                        </div>
                                         <div class="form-group row text-left">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <input type="submit" class="btnRegister"  value="Login"/>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                                       </div>
                                    
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



@endsection
