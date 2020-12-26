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
            <form method="post" enctype="multipart/form-data" action="">
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail">Mail</label>
                        <input type="name" class="form-control @error('mail') is-invalid @enderror " name="title" >

                        @error('mail')
                        <p >{{$errors->first('mail')}}</p>
                        @enderror

                    </div>

                </div>
                @csrf
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
