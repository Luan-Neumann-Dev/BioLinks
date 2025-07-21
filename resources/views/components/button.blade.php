@props([
    'href' => null,    
    'block' => null,
    'outline' => null,
    'ghost' => null,
    'mt' => null
])

@php
    $tag = $href ? 'a' : 'button';
@endphp

<div {{ $attributes->merge(['class' => 'form-control']) }} class="{{ $mt ? 'mt-6' : '' }}">
    <{{ $tag }} {{ $href ? "href=$href" : '' }} 
     {{ $attributes->class([ 
        "btn btn-primary",
        'btn-block' => $block,
        'btn-outline' => $outline,
        'btn-ghost' => $ghost,
        ]) 
     }}>
        {{ $slot }}
    </{{ $tag }}>
</div>