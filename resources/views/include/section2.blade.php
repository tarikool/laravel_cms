@php
    $class = $content->section. ($loop->index%3 ? 'B' : 'A');
    $col = $loop->index%3 ? 'col-md-6' : 'col-md-12';
@endphp


<div class="section2 {{ $col }}">
    <img class="{{ $class }}" src="{{ $content->image }}">
    <div class="content">
        <span class="text-muted content-tile">{{ $content->title }}</span><br>
        <span class="content-body">{{ $content->body }}</span>
    </div>
</div>
