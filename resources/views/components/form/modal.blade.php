@props(['title', 'action', 'label', 'hasFile' => false, 'size' => null])

<button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal"
    data-bs-target=".bs-example-modal-{{ $size }}">
    {{ $label }}
</button>

<x-component.modal id="formModal" size="{{ $size }}" :title="$title">
    <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
            {{ $slot }}
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary waves-effect waves-light">Submit</button>
        </div>
    </form>
</x-component.modal>
