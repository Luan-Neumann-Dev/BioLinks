@props([
    'title',
    'subtitle' => null    
])

<div class="text-center mb-6">
    <h1 class="text-3xl font-bold">{{ $title }}</h1>
    <p class="text-base-content/70 mt-2">{{ $subtitle }}</p>
</div>