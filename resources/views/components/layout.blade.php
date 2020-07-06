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


<x-sidebar>
    <x-slot name="avatar">
        <img src="/image/user-avatar.png" />
    </x-slot>

    <ul>
        <li>Home</li>
        <li>Articles</li>
        <li>About</li>
    </ul>
</x-sidebar>