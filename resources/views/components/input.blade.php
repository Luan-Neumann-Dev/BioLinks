@props([
    'name',
    'label',
    'prefix' => null
])

<div class="form-control">
    <label class="label">
        <span class="label-text">{{ $label }}</span>
    </label>

    <label class="input input-bordered w-full">
        @if ($prefix)
            <span class="text-base-content/70 ">{{ $prefix }}</span>
        @endif
        <input
            class="grow @error($name) input-error @enderror" 
            name="{{ $name }}"
            {{ $attributes }}    
        />
    </label>
    @error($name)
    <label class="label">
        <span class="label-text-alt text-error">{{ $message }}</span>
    </label>
    @enderror
</div>