@props([
    'label',
    'type' => 'text',
    'id',
    'name',
    'required' => false,
    'readonly' => false,
    'value' => null,
    'helperText' => null,
])

<div class="mb-3">
    <label for="example-text-input" class="form-label" for="{{ $id }}">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" class="form-control" value="{{ $value }}"
        id="{{ $id }}" {{ $readonly ? 'readonly' : '' }} {{ $required ? 'required' : '' }}>
    @if ($helperText)
        <small class="text-muted">{{ $helperText }}</small>
</div>
