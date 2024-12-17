@props(['label', 'id', 'name', 'required' => false, 'modalId' => null , placeholder => null])


@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/libs/choices.js/public/assets/styles/choices.min.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>

@endpush

<div class="mb-3">
    <label for="choices-single-default" class="form-label font-size-13 text-muted">{{ $label }}</label>
    <select class="form-control" data-trigger name="{{ $name } }}" id="{{ $id }}"
        placeholder="Pilih">
        <option value="">This is a placeholder</option>
        {{ $slot }}
    </select>
</div>
