@props([
    'route',
    'post' => null    
])

<form action="{{ $route }}" method="{{ $post ? 'post' : 'get' }}" {{ $attributes->class(['space-y-4']) }}>
    @csrf

    {{ $slot }}
</form>