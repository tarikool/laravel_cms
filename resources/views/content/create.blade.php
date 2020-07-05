@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Create A New Content
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('contents') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Content Type</label>
                                        <select class="form-control" name="type" id="type">
                                            <option value="post" {{ old('type') == 'post' ? 'selected' : '' }}>Post</option>
                                            <option value="video" {{ old('type') == 'video' ? 'selected' : '' }}>Video</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Section</label>
                                        <select class="form-control" name="section">
                                            @foreach( $data['section'] as $key => $value )
                                                <option value="{{ $key }}" {{ old('section') == $key ? 'selected' : '' }}>{{ $value }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                                        <p class="text-danger">{{ $errors->has('title') ? $errors->first('title') : '' }}</p>
                                    </div>
                                </div>

                                <div class="col-md-5 post">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" class="form-control-file" name="image" value="">
                                        <p class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 video">
                                    <div class="form-group">
                                        <label>Yoube Link</label>
                                        <input type="text" class="form-control" name="youtube_link" value="{{ old('youtube_link') }}">
                                        <p class="text-danger">{{ $errors->has('youtube_link') ? $errors->first('youtube_link') : '' }}</p>
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <label>Body</label>
                                    <textarea class="form-control" name="body" rows="5">{{ old('body') }}</textarea>
                                    <p class="text-danger">{{ $errors->has('body') ? $errors->first('body') : '' }}</p>
                                </div>
                            </div>

                            <br>
                            <button type="submit" class="btn btn-dark btn-sm">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('style')
    <style>
        .post{
            display: none;
        }
        .video{
            display: none;
        }
    </style>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            var type = $('#type').val();
            $('.'+type).show();

            $('#type').on('change', function () {
                $('.post').toggle(500);
                $('.video').toggle(800)
            })
            // $('.link').fadeIn(5000)
        })
    </script>
@endsection