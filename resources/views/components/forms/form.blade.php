@props(['method' => 'GET', 'action' => '#'])

<form method="{{ $method === 'GET' || $method === 'POST' ? $method : 'POST' }}" action="{{ $action }}" {{ $attributes->except(['method', 'action'])->merge(['class' => 'max-w-2xl mx-auto space-y-6']) }}>
    @if ($method !== 'GET' && $method !== 'POST')
        @method($method)
    @endif

    @csrf

    {{ $slot }}
</form>