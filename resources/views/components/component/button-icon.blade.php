@props(['label', 'type' => 'button', 'color' => 'primary', 'small' => false, 'href' => null, 'disabled' => false , 'icon' => 'smile'])


<button type="{{ $type }}"
    class="btn btn-{{ $color }} waves-effect waves-light @if ($small) btn-sm @endif"
    @if ($href) onclick="document.location.href='{{ $href }}'" @endif
    @if ($disabled) disabled @endif {{ $attributes }} @endif>
    <i class="bx bx-{{ $icon }} font-size-16 align-middle me-2"></i> {{ $label }}
</button>
