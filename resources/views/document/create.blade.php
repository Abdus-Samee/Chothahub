@extends('layouts.app')

@section('content')
    <body style="background: linear-gradient(to right, #606c88, #3f4c6b);">
        <div class="mt-5 p-5 d-flex justify-content-center align-items-center">
            <form action="/files" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control-lg" name="title" placeholder="title" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control-lg" name="description" placeholder="highlight" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Select a suitable folder</label>
                    <select name="folder" class="form-control" id="exampleFormControlSelect1">
                      @foreach ($folders as $folder)
                          <option>{{$folder->name}}</option>
                      @endforeach
                    </select>
                  </div>
                <div class="form-group">
                    <input type="file" class="form-control-file" name="file">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </body>
@endsection