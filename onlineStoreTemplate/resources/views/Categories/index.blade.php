@extends('app')

@section('content')
    <div class="container bg-light">
        <div class="p-3"></div>
        <div class="row">

            <div class="col-md-10">
                <H2>Categories</H2>
            </div>
            <a class="btn btn-outline-success" href={{ url('categories/create') }} >Add</a>
        </div>
        </br>
        @if(count($categories)>0)
            @foreach($categories as $category)
                <div class="card bg-secondary">

                    <div class="card-header text-center">
                        {{$category->title}}
                    </div>
                    <a href="/categories/{{$category->id}}/edit" class="btn btn-outline-primary ">Edit</a>
                    {{ Form::open(['action' => ['App\Http\Controllers\CategoriesController@destroy',$category->id],'method'=>'DELETE','class'=>'btn btn-outline-danger']) }}
                    {{ Form::submit('Delete',['class'=>'btn btn-outline-danger border-0'])}}
                    {{Form::close()}}

                </div>
                <div class="m-4"></div>
            @endforeach

        @else
            <div>
                <H2>No Categories to show !!</H2>
                <a href={{ url('categories/create') }}>Create Some</a>
            </div>
        @endif
        <div class="p-3"></div>
    </div>

@endsection
