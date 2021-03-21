@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/files/create" class="btn btn-primary">Upload files</a>
                    <h3 class="display-5 mt-3">Your documents</h3>
                    @if(count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th>Highlight</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach ($posts as $post)
                                <tr>
                                <td>{{$post->title}}</td>
                                <td>{{$post->description}}</td>
                                <td><a href="/files/{{$post->id}}">View</a></td>
                                <td><a href="/file/download/{{$post->file}}">Download</a></td>
                            </tr>
                            @endforeach
                        </table>
                    @else 
                        <p>You have not uploaded any documents...</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
