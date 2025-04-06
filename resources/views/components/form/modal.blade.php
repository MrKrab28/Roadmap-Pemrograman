@props(['title', 'action', 'label', 'hasFile' => false, 'size' => null, 'id'=>'formModal' ])

<div class="d-flex justify-content-end">

    <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal"
        data-bs-target="#{{ $id }}.bs-example-modal-{{ $size }}">
        {{ $label }}
    </button>
</div>

<x-component.modal id="{{ $id }}" size="{{ $size }}" :title="$title">
    <form action="{{ $action }}" method="POST" enctype="multipart/form-data" autocomplete="off">
        @csrf
        <div class="modal-body">
            {{ $slot }}
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
        </div>
    </form>
</x-component.modal>
