<div>
    <h1>{{ $title }}</h1>
    <div class="flex">
        <div class="w-1/3">
            {{ $sidebar }}
        </div>
        <div class="w-2/3">
            {!! $slot !!}
        </div>
    </div>
    <footer>
        {{ $footer }}
    </footer>
</div>