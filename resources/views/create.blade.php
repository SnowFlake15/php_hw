@extends('layout.layout')

@section('content')


<div class ="row justify-content-center nt-4">
    <h1>
        CREATE GAME
    </h1>
</div>
<div class="row justify-content-center">
    <div class="col-8">
        @if($errors->any())

            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        @endif
        <form method="post" enctype="multipart/form-data" action="{{route('games.save')}}">
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail">Game Title</label>
                    <input type="name" class="form-control @error('title') is-invalid @enderror " name="title" >
{{--                    {{ $errors->has('title') ? 'is-invalid' : ''}}--}}
{{--                    @if($errors->first('title'))--}}
{{--                        <p >{{$errors->first('title')}}</p>--}}
{{--                    @endif--}}
                    @error('title')
                        <p >{{$errors->first('title')}}</p>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail">Game description</label>
                    <input type="name" class="form-control" name="game_description">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail">game rating</label>
                    <input type="name" class="form-control" name="rating">
                </div>
            </div>
            @csrf
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
