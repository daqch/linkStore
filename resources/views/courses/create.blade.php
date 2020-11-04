@extends('layouts.app')

@section('content')


<div class="container">
    <form action="/c" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
                    <div class="row"><h3>Add a new course</h3></div>
                    <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label">Course name</label>

                            
                                        <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" >

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    
                    </div>
                    <div class="form-group row">
                                    <label for="v_link" class="col-md-4 col-form-label">Course v_link</label>

                            
                                        <input id="v_link" type="v_link" class="form-control @error('v_link') is-invalid @enderror" name="v_link" value="{{ old('v_link') }}" >

                                        @error('v_link')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    
                    </div>
                    <div class="form-group row">
                                    <label for="chat" class="col-md-4 col-form-label">Course chat</label>

                            
                                        <input id="chat" type="chat" class="form-control @error('chat') is-invalid @enderror" name="chat" value="{{ old('chat') }}" >

                                        @error('chat')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    
                    </div>
                    <div class="row pt-4">
                        <button class="btn btn-primary" type="submit">Add New Post</button>
                    </div>
            </div>
        </div>
    </form>
</div>

@endsection