@props([
    'name',
    'label'    
])

<div class="form-control">
    <label class="label">
        <span class="label-text">{{ $label }}</span>
    </label>
    <input
        class="input input-bordered w-full @error($name) input-error @enderror" 
        name="{{ $name }}"
        {{ $attributes }}    
    />
    @error($name)
    <label class="label">
        <span class="label-text-alt text-error">{{ $message }}</span>
    </label>
    @enderror
</div>