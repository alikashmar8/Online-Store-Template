@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">


                <div class="card-body">


                    <div class="card-header"><h5 class="card-title text-center">{{ __('Register') }}</h5></div>
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <input id="role" type="hidden" name="role" value=1>


                        <div class="form-label-group">

                            <label for="name" >{{ __('Name') }}*</label>



                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror



                        </div>

                        <div class="form-label-group">

                            <label for="bio" >Bio</label>


                                <textarea id="bio" type="text" class="form-control @error('bio') is-invalid @enderror" name="bio" value="{{ old('bio') }}" autocomplete="bio" autofocus></textarea>
                                @error('bio')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                        </div>

                        <div class="form-label-group">
                            <label for="email" >{{ __('E-Mail Address') }}*</label>


                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <div class="form-label-group">
                            <label for="phoneNumber" >Phone Number*</label>

                            <select id="phoneNumberCode" name="phoneNumberCode"  class="form-control" ><option value="+61">+61</option> </select>
                            <input id="phoneNumber" type="number" class="form-control @error('Phone Number') is-invalid @enderror" name="phoneNumber" value="{{ old('phoneNumber') }}" required autocomplete="phoneNumber" autofocus>
                                @error('phoneNumber')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <div class="form-label-group">
                            <label for="profileImg" >Profile Image</label>


                            <input id="profileImg" type="file" class="@error('profileImg') is-invalid @enderror " name="profileImg" value="{{ old('profileImg') }}" autocomplete="profileImg" autofocus>


                        </div>

                        <div class="form-label-group">
                            <label for="password" >{{ __('Password') }}*</label>


                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <div class="form-label-group">
                            <label for="password-confirm" >{{ __('Confirm Password') }}*</label>



                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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

{{--    /*second form*/--}}

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">


                <div class="card-body">


                    <div class="card-header"><h5 class="card-title text-center">{{ __('Register') }}</h5></div>
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" id="agentForm">
                        @csrf

                        <input id="role" type="hidden" name="role" value=2>


                        <div class="form-label-group">

                            <label for="name" >{{ __('Name') }}*</label>



                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror



                        </div>

                        <div class="form-label-group">

                            <label for="license" >License Number*</label>


                            <input id="license" type="number" class="form-control @error('license') is-invalid @enderror" name="license" value="{{ old('license') }}" required autocomplete="license" autofocus>
                            @error('license')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror


                        </div>

                        <div class="form-label-group">

                            <label for="comp_name" >Cpmpany Name*</label>



                            <input id="comp_name" type="text" class="form-control @error('comp_name') is-invalid @enderror" name="comp_name" value="{{ old('comp_name') }}" required autocomplete="comp_name" autofocus>
                            @error('comp_name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror



                        </div>

                        <div class="form-label-group">
                            <label for="email" >{{ __('E-Mail Address') }}*</label>


                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>

                        <div class="form-label-group">
                            <label for="phoneNumber" >Phone Number*</label>

                            <select id="phoneNumberCode" name="phoneNumberCode"  class="form-control" ><option value="+61">+61</option> </select>
                            <input id="phoneNumber" type="number" class="form-control @error('Phone Number') is-invalid @enderror" name="phoneNumber" value="{{ old('phoneNumber') }}" required autocomplete="phoneNumber" autofocus>
                            @error('phoneNumber')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>

                        <div class="form-label-group">
                            <label for="profileImg" >Profile Image</label>


                            <input id="profileImg" type="file" class="@error('profileImg') is-invalid @enderror " name="profileImg" value="{{ old('profileImg') }}" autocomplete="profileImg" autofocus>


                        </div>

                        <div class="form-label-group">
                            <label for="password" >{{ __('Password') }}*</label>


                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>

                        <div class="form-label-group">
                            <label for="password-confirm" >{{ __('Confirm Password') }}*</label>



                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">


                        </div>


                        <input type="hidden" name="role" value=2>
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
