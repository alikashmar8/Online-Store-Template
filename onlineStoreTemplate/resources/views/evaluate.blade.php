@extends('layouts.app')

@section('content')

    <div class="hero" style=" background-image: url(https://image.freepik.com/free-vector/stock-market-analysis_23-2148598449.jpg);
    " >
        <div class="inner">
             <h1>Evaluate</h1>
        </div>
    </div>

    <Br><BR><BR>
    <div class="container p-5  bg-white" >
        <div class="card-header  ">

            <h5 class="card-title text-center">Evaluation Form</h5>
        </div>
        <form method="POST" action="" enctype="multipart/form-data">
            @csrf

            <input id="role" type="hidden" name="role" value=2>


            <div class="form-label-group">

                <label for="name">{{ __('Name') }}*</label>


                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                       name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror


            </div>


            <div class="form-label-group">
                <label for="email">{{ __('E-Mail Address') }}*</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                       name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>

            <div class="form-label-group">
                <label for="phoneNumber">Phone Number*</label>
                <select id="phoneNumberCode" name="phoneNumberCode" class="form-control" style="display: none;">
                    <option value="+61">+61</option>
                </select>
                <input id="phoneNumber" type="number"
                       class="form-control @error('Phone Number') is-invalid @enderror" name="phoneNumber"
                       value="{{ old('phoneNumber') }}" required autocomplete="phoneNumber" autofocus>
                @error('phoneNumber')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>


            <div class="form-label-group">

                <label for="location">Location</label>


                <input id="location" type="text" class="form-control @error('location') is-invalid @enderror"
                       name="location" value="{{ old('location') }}" required autocomplete="location" autofocus>
                @error('location')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror


            </div>
            <div class="form-label-group">

                <label for="description">Description</label>


                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror"
                       name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>
                @error('description')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror


            </div>




            <div class="form-label-group">
                <label for="num_bed">Number of bedrooms</label>

                <input id="num_bed" type="number"
                       class="form-control @error('num_bed') is-invalid @enderror" name="num_bed"
                       value="{{ old('num_bed') }}" required autocomplete="num_bed" autofocus>
                @error('num_bed')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>


            <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" name="check1"
                       id="check1"  >
                <label class="custom-control-label"
                       for="check1">&nbsp;&nbsp;&nbsp;&nbsp; I am the owner of this property </label>
            </div>

            <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" name="check2"
                       id="check2"  >
                <label class="custom-control-label"
                       for="check2">&nbsp;&nbsp;&nbsp;&nbsp; Note that the price will be given based on research, area, and landsize </label>
            </div>



            <div class="form-group row mb-0">
                <div class="col-md-6 ">
                    <button type="submit" class=" btn-primary1">
                        Send
                    </button>
                </div>
            </div>
        </form>

    </div>
@endsection
