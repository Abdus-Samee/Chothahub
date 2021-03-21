@extends('layouts.app')

@section('content')
    <body style="text-align:center;background: linear-gradient(to right, #abbaab, #ffffff);">
        <div class="jumbotron">
            <h1 class="display-4">{{$data->title}}</h1>
            <p class="lead">{{$data->description}}</p>
            <p>Uploaded on: {{$data->created_at}} by {{$data->user->name}}</p>
        </div>
        <p>
            <iframe src="{{url('storage/'.$data->file)}}" style="width:700px;height:600px;"></iframe>
        </p>
    </body>
@endsection