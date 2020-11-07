@extends('layout.layout')

@section('content')

    <div class ="row justify-content-center nt-4">
        <h1>
            UPDATE GAME
        </h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-8">
            <form method="post" enctype="multipart/form-data" action="{{route('games.update', $game->id)}}">
                @csrf
                @method('PUT')
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail">Game Title</label>
                        <input type="name" class="form-control" name="title" value="{{old('title', $game->title)}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Game description</label>
                        <input type="name" class="form-control" name="game_description" value="{{old('game_description', $game->game_description)}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">game rating</label>
                        <input type="name" class="form-control" name="rating" value="{{old('rating', $game->rating)}}">
                    </div>
                </div>
                @csrf
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
