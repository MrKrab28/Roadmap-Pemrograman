<x-admin.layout>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18" style="font-family: Cascadia Code; font-weight: 1000;">
                    CATEGORY</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Categories</h4>
                    <x-form.modal label="New Category" size="modal-l" title="Form User"
                        action="{{ route('admin.category-store') }}" method="POST" autocomplete="off">
                        <div class="row">
                            <x-form.input label="Category" name="nama" id="namaInput" :required="true" />
                            <x-form.textarea label="Deskripsi" name="deskripsi" id="deskripsiInput" :required="true"
                                :rows="5" />
                        </div>
                    </x-form.modal>
                    <p class="card-title-desc">
                    </p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <x-component.datatable id="CategoryTable">
                            <thead>
                                <th>#</th>
                                <th>Category</th>
                                <th>Deskripsi</th>

                                <th></th>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr data-id="1">
                                        <td data-field="id">{{ $loop->iteration }}</td>
                                        <td data-field="name">{{ $category->nama }}</td>
                                        <td data-field="age">{{ Str::limit($category->deskripsi, 100) }}</td>

                                        <td style="width: 100px" class="">
                                            <div class="d-flex  gap-2">
                                                <a href="{{ route('admin.category-edit', $category) }}"
                                                    class="btn btn-outline-primary btn-sm edit" title="Edit">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>

                                                <form action="{{ route('admin.category-delete', $category) }}">
                                                    <button type="submit" class="btn btn-outline-danger btn-sm delete"
                                                        title="Edit">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </x-component.datatable>
                    </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div>

    <!-- end row-->

    <div class="row">

        <!-- end col -->


        <!-- end col -->


        <!-- end col -->
    </div>
</x-admin.layout>
