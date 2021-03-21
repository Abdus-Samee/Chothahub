@extends('layouts.app')

@section('content')
    <body style="background: linear-gradient(to right, #ada996, #f2f2f2, #dbdbdb, #eaeaea);overflow-x:hidden;">
        <div class="row">
            <div class="container col-4 col-sm-4 text-white bg-dark pl-4">
                <h1 class="display-4">Notices</h1>
                @if(Auth::user()->admin)
                    <form action="/notice" method="POST">
                        @csrf
                        <textarea name="notice" cols="60" rows="5"></textarea>
                        <input type="hidden" name="folder_id" value="{{$id}}">
                        <button type="submit">Create</button>
                    </form>
                @endif
                @foreach ($notices as $notice)
                    <hr>
                    <h5 class="display-6"> {{ $notice->text }}</h5>
                    <small class="text-secondary">{{ $notice->created_at }}</small>
                @endforeach
            </div>
            <div class="container col-8 col-sm-8">
                @if(count($file) > 0)
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Title</th>
                                <th>Highlight</th>
                                <th>User</th>
                                <th>Date</th>
                                <th>View</th>
                                <th>Download</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($file as $data)
                                <tr>
                                    <td>{{$data->title}}</td>
                                    <td>{{$data->description}}</td>
                                    <td>{{$data->user->name}}</td>
                                    <td>{{$data->created_at}}</td>
                                    <td><a href="/files/{{$data->id}}">View</a></td>
                                    <td><a href="/file/download/{{$data->file}}">Download</a></td>
                                </tr> 
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <h2 class="display-2">No files Uploaded...</h2>
                @endif
            </div>
        </div>
    </body>
@endsection