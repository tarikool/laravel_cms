@php
    $class = $content->section. ($loop->index%3 ? 'B' : 'A');
    $col = $loop->index%3 ? 'col-md-6' : 'col-md-12';
@endphp


<div class="section2 {{ $col }}">
    @if($content->type == 'post')
        <a href="{{ url('contents/'.$content->slug) }}"><img class="{{ $class }}" src="{{ $content->image }}"></a>
    @else
        <x-video>
            <x-slot name="class">
                {{ $class }}
            </x-slot>
            {{ $content->youtube_link }}
        </x-video>
    @endif

{{--    <img class="{{ $class }}" src="{{ $content->image }}">--}}
    <div class="content">
        <a href="{{ url('contents/'.$content->slug) }}">
            <span class="text-muted content-tile">{{ $content->title }}</span><br>
        </a>
        <a href="{{ url('contents/'.$content->slug) }}">
            <span class="content-body">{{ $content->body }}</span>
        </a>
    </div>
</div>
