@props([
    'name',
    'label',
    'value'    
])

<div class="form-control">
    <label class="label">
        <span class="label-text">{{ $label }}</span>
    </label>
    <textarea
        class="textarea textarea-bordered w-full @error($name) textarea-error @enderror" 
        name="{{ $name }}"
        {{ $attributes }}    
    >{{ $value }}</textarea>
    @error($name)
    <label class="label">
        <span class="label-text-alt text-error">{{ $message }}</span>
    </label>
    @enderror
</div>