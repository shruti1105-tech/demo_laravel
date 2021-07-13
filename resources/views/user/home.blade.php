@extends('user/app')

@section('bg-img',asset('user/img/about-bg.jpg'))
@section('title','E-Commerce')


@section('main-content')
    <div class="container">
        <div class="row">
            @foreach($category as $categories)
                <div class="col-4">
                    <div class="card" style="padding: 10px">
                        <h4 class="card-title" style="text-align: center;font-family: 'Times New Roman';padding-top: 10px">{{$categories->name}}</h4>
{{--                        <a href="/movie/{{ $movies->id }}"> <img src="data:image/png;base64, {{$movies->poster}}" alt="poster" class="w-75 p-3" style="margin-left: 35px"/></a>--}}
{{--                        <p class="card-text">Released Year: {{ $movies->release_year}}</p>--}}
                        {{--                        <a class="btn btn-info" href="{{ route('movies.show',$movies->id) }}" style="font-size: 15px;padding: 5px;border-radius: 5px">More..</a>--}}
                    </div>
                </div>
            @endforeach
            <br>
        </div>
    </div>
    <hr>
@endsection
