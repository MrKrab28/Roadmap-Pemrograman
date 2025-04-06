@props(['id', 'title', 'size' => null])

<div class="modal fade bs-example-modal-{{ $size }}" tabindex="-1" role="dialog"
    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="{{ $id }}">
    <div class="modal-dialog modal-{{ $size }}">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="{{ $id }}">{{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           {{ $slot }}
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
