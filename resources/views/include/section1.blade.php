@php
    $class = $content->section. ($loop->index%5 ? 'B' : 'A');
@endphp

@if($loop->index%5 == 1)
    <div class="col-md-6">
        <div class="row">
@endif

<div class="col-md-6 {{ !$loop->index%5 ? 'section1' : '' }}">
    <img class="{{ $class }}" src="{{ $content->image }}">
    <div class="content">
        <span class="text-muted content-tile">{{ $content->title }}</span><br>
        <span class="content-body">{{ $content->body }}</span>
    </div>
</div>




@if($loop->index%5 == 4 || ($loop->remaining == 0 && $loop->index%5 > 0))
        </div>
    </div>
@endif



