@props(['id'])



@push('scripts')
   
    <script>
        let table = new DataTable('#{{ $id }}', {
            sort: false,
        });
    </script>
@endpush

<div class="table-responsive text-nowrap pb-3">
    <table id="{{ $id }}" class="table table-hover">
        {{ $slot }}
    </table>
</div>
