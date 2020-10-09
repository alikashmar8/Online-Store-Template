@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="p-2"></div>
        <div class="post p-4 m-5">
        <h1>Edit Property:</h1>
        <div class="alert alert-warning">Editing your property will need admin confirmation to get listed again!</div>

            {{ Form::open(['action' => ['App\Http\Controllers\PropertiesController@update',$property->id],'method'=>'PUT']) }}
            <div class=" creat_app">
                <div class="" style="height:500px">
                    <div class=" form-group form-label-group special ">
                        {{ Form::label('price','Price:') }}
                        {{ Form::number('price',$property->price,['class' => 'form-control','placeholder'=>'Price']) }}
                    </div>
                    <div class=" form-group form-label-group special ">
                        @if($property->showPrice == 0)
                            {{ Form::checkbox('showPrice',0, false) }}
                        @else
                            {{ Form::checkbox('showPrice',1, true) }}
                        @endif
                        {{ Form::label('showPrice','Show Price') }}
                    </div>
                    <div class="form-group form-label-group special">
                        {{ Form::label('bedroomsNumber','Number Of Bedrooms:') }}
                        {{ Form::number('bedroomsNumber',$property->bedroomsNumber,['class' => 'form-control','placeholder'=>'bedroomsNumber']) }}
                    </div>
                    <div class="form-group form-label-group special">
                        {{ Form::label('type','Type:') }}
                        <select name="type">
                            <option value="0" @if($property->type == 0) selected @endif>Sell</option>
                            <option value="1" @if($property->type == 1) selected @endif>Rent</option>
                        </select>
                        {{--                        {{ Form::select('type', array(0 => 'Sell', 1 => 'Rent'), 0) }}--}}
                    </div>
                    <div class="form-group form-label-group special">
                        {{ Form::label('description','Description:') }}
                        {{ Form::textarea('description',$property->description,['class' => 'form-control','placeholder'=>'Description']) }}
                    </div>
                    <div class="form-group form-label-group special">
                        <input type="checkbox" onclick="imgs2()"> Change images
                    </div>

                    <div class="form-group form-label-group special" id="imgs" style="display: none">
                        {{ Form::label('images','Images:') }}
                        <input type="file" name="images[]" multiple readonly>
                    </div>
                </div>
            </div>
            <div class="form-label-group">
                {{ Form::submit('Edit',['class'=>'btn btn-primary1']) }}
            </div>
            {{ Form::close() }}
        </div>
        <div class="p-3"></div>
    </div>

    <script>
        var imgs1= 0;
        function imgs2(){
            if (imgs1 == 0){
                document.getElementById("imgs").style.display = "block";
                imgs1=1;
            }
            else {
                document.getElementById("imgs").style.display = "none";
                imgs1=0;
            }
        }

    </script>
@endsection
