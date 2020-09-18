@extends('app')

@section('content')
    <div class="container bg-light">
        <h1>Place New Ad:</h1>
        <div>
            {{ Form::open(['action' => 'App\Http\Controllers\ApartmentsController@store','method'=>'POST','enctype'=>'multipart/form-data']) }}
            <div class="form-group">
                {{ Form::label('title','Title:') }}
                {{ Form::text('title','',['class' => 'form-control','placeholder'=>'Title']) }}
            </div>
            <div class="form-group">
                {{ Form::label('description','Description:') }}
                {{ Form::text('description','',['class' => 'form-control','placeholder'=>'Description']) }}
            </div>
            <div class="form-group">
                {{ Form::label('price','Price:') }}
                {{ Form::number('price','',['class' => 'form-control','placeholder'=>'Price']) }}
            </div>
            <div class="form-group">
                {{ Form::label('type','Type:') }}
                {{ Form::select('type', array(0 => 'Sell', 1 => 'Rent'), 0) }}
            </div>
            <div class="form-group">
                {{ Form::label('images','Images:') }}
                <input type="file" name="images[]" multiple>
            </div>

            <div>
                {{ Form::submit('Add',['class'=>'btn btn-primary']) }}
            </div>
            {{ Form::close() }}
        </div>
    </div>

@endsection
