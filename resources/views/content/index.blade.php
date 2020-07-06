@extends('auth.passwords.email')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7" style="margin-right: 70px;">
                <div class="card-header" style="margin-bottom: 14px;">
                    <code>Section 1</code>
                </div>

                <div class="row">
                    @foreach( $contents['section_1'] as $content )
                        @include('include.section1', ['loop' => $loop, 'content' => $content])
{{--                        {{ $loop->iteration.' remaining :' .$loop->remaining. ' index: '.$loop->index.' mod: '. ($loop->index%5).'image'. $content->image }}<br>--}}
                    @endforeach
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-header" style="margin-bottom: 14px;">
                    <code>Section 2</code>
                </div>
                <div class="row">
                    @foreach( $contents['section_2'] as $content )
                        @include('include.section2', ['loop' => $loop, 'content' => $content])
{{--                        {{ $loop->iteration.' remaining :' .$loop->remaining. ' mod: '. $loop->index%3 }} <br>--}}
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection


@section('style')
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/videojs/video-js.min.css') }}" />

    <style>
        .video-js .vjs-big-play-button{
            font-size: 1.57em !important;
            line-height: 1.0em !important;
            height: 1.1em !important;
            width: 2.3em !important;
            border-radius: .1em !important;
            top: 81% !important;
            left: 73% !important;
        }
    </style>
@endsection

@section('script')
    <script src="{{ asset('assets/videojs/video.min.js') }}"></script>
    <script src="{{ asset('assets/videojs/Youtube.min.js') }}"></script>
@endsection