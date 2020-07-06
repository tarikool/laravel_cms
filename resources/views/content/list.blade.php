@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="com-md-8">
                <table id="myTable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Title</th>
                        <th>Body</th>
                        <th>Media</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $contents as $content )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $content->title }}</td>
                            <td>{{ $content->body }}</td>
                            <td>
                                @if($content->type == 'post')
                                    <a href="{{ url('contents/'.$content->slug) }}"><img class="section_1B" src="{{ $content->image }}"></a>
                                @else
                                    <x-video>
                                        <x-slot name="class">
                                            section_1B
                                        </x-slot>
                                        {{ $content->youtube_link }}
                                    </x-video>
                                @endif
                            </td>
                            <td>
                                <button class="btn btn-sm btn-{{ $content->status == 'publish' ? 'dark' : 'success' }}"
                                        onclick='window.location.href="{{ url('contents/'.$content->id.'/edit') }}"'>
                                    {{ $content->status == 'publish' ? 'Unpublish' : 'Publish' }}
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th></th>
                        <th>Title</th>
                        <th>Body</th>
                        <th>Media</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                </table>

            </div>
        </div>
    </div>
@endsection



@section('style')
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/videojs/video-js.min.css') }}" />
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

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
    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
@endsection