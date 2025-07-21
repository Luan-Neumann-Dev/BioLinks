@props(['href'])

<a href="{{ $href }}" {{ $attributes->class(['link link-primary ']) }}>{{ $slot }}</a>