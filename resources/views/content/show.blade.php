@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ $content->title }}
                    </div>
                    <div class="card-body">
                        <div class="image text-center">
                            @if( $content->type == 'post')
                                <img src="{{ $content->image }}">
                            @else
                                <video
                                        id="vid1"
                                        class="video-js vjs-default-skin"
                                        controls
                                        data-setup='{ "techOrder": ["youtube"], "aspectRatio": "8:4", "sources": [{ "type": "video/youtube", "src": "{{ $content->youtube_link }}"}], "youtube": { "playlist": "2_HXUhShhmY,lLJf9qJHR3E" } }'
                                >
                                </video>
                            @endif
                        </div>


                        <div class="description">
                            {{ $content->body }}
                        </div>

                        <p class="author">
                            -{{ $content->user->name }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('style')
{{--    <link type="text/css" rel="stylesheet" href="{{ asset('assets/video.js/dist/video-js.min.css') }}" />--}}
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/videojs/video-js.min.css') }}" />

    <style>
        img {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
            height: 230px;
            width: 280px;
        }

        .description{
            padding: 23px;
            padding-bottom: 3px;
        }

        .author{
            font-weight: 700;
            margin-left: 23px;
        }

        .video-js .vjs-big-play-button{
            top: 112px;
            left: 290px;
        }



    </style>
@endsection


@section('script')
    <script src="{{ asset('assets/videojs/video.min.js') }}"></script>
    <script src="{{ asset('assets/videojs/Youtube.min.js') }}"></script>
@endsection