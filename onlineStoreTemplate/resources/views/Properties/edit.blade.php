@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="p-3"></div>
        <h1>Edit Property:</h1>
        <div class="alert alert-warning">Editing your property will need admin confirmation to get listed again!</div>
        <div>
            {{ Form::open(['action' => ['App\Http\Controllers\PropertiesController@update',$property->id],'method'=>'PUT']) }}
            <div class="row">
                <div class="col-md-6" style="height:500px">
                    <div class="form-group form-label-group">
                        {{ Form::label('price','Price:') }}
                        {{ Form::number('price',$property->price,['class' => 'form-control','placeholder'=>'Price']) }}
                    </div>
                    <div class="form-group form-label-group special">
                        @if($property->showPrice == 0)
                            {{ Form::checkbox('showPrice',0, false) }}
                        @else
                            {{ Form::checkbox('showPrice',1, true) }}
                        @endif
                        {{ Form::label('showPrice','Show Price') }}
                    </div>
                    <div class="form-group form-label-group">
                        {{ Form::label('bedroomsNumber','Number Of Bedrooms:') }}
                        {{ Form::number('bedroomsNumber',$property->bedroomsNumber,['class' => 'form-control','placeholder'=>'bedroomsNumber']) }}
                    </div>
                    <div class="form-group form-label-group">
                        {{ Form::label('type','Type:') }}
                        <select name="type">
                            <option value="0" @if($property->type == 0) selected @endif>Sell</option>
                            <option value="1" @if($property->type == 1) selected @endif>Rent</option>
                        </select>
                        {{--                        {{ Form::select('type', array(0 => 'Sell', 1 => 'Rent'), 0) }}--}}
                    </div>
                    <div class="form-group form-label-group">
                        {{ Form::label('description','Description:') }}
                        {{ Form::text('description',$property->description,['class' => 'form-control','placeholder'=>'Description']) }}
                    </div>
                    <div class="form-group form-label-group">
                        Change images ? <input type="checkbox">
                        {{ Form::label('images','Images:') }}
                        <input type="file" name="images[]" multiple readonly>
                    </div>
                </div>
            </div>
            <div>
                {{ Form::submit('Edit',['class'=>'btn btn-primary']) }}
            </div>
            {{ Form::close() }}
        </div>
        <div class="p-3"></div>
    </div>

@endsection
