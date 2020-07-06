@php
    $class = $content->section. ($loop->index%5 ? 'B' : 'A');
@endphp

@if($loop->index%5 == 1)
    <div class="col-md-6">
        <div class="row">
@endif

<div class="col-md-6 {{ $loop->index%5 == 0 ? 'section1' : '' }}">
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

    <div class="content">
        <a href="{{ url('contents/'.$content->slug) }}">
            <span class="text-muted content-tile">{{ $content->title }}</span><br>
        </a>
        <a href="{{ url('contents/'.$content->slug) }}">
            <span class="content-body">{{ $content->body }}</span>
        </a>
    </div>
</div>




@if($loop->index%5 == 4 || ($loop->remaining == 0 && $loop->index%5 > 0))
        </div>
    </div>
@endif



