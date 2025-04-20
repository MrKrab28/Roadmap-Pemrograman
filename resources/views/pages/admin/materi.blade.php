<x-admin.layout>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18" style="font-family: Cascadia Code; font-weight: 1000;">
                    MODUL</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Moduls</h4>
                    <x-form.modal label="New Modul" size="modal-l" title="Form Modul"
                        action="{{ route('admin.materi-store') }}" size="xl">

                        <div class="row">
                            <div class="col-md-6">
                                <x-form.input label="Judul" name="judul" id="judulInput" :required="true" />
                                <div class="mb-2">
                                    <x-form.input label="Urutan" name="urutan" id="urutanInput" :required="true" />

                                </div>
                            </div>
                            <div class="col-md-6">
                                <x-form.select-search label="Courses" id="courseInput" name="course_id"
                                    :required="true" placeholder="Pilih" modalid="formModal">
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}">{{ $course->judul }}</option>
                                    @endforeach
                                </x-form.select-search>
                            </div>


                        </div>
                        <div class="card bg bg-dark text-light p-5 ">

                            <x-trix-input label="content" name="content" id="content" :required="true"
                                style="height: 500px" />

                        </div>

                    </x-form.modal>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <x-component.datatable id="CourseTable">
                            <thead>
                                <th>#</th>
                                <th>Modul</th>
                                <th>Course</th>
                                <th>Urutan</th>


                                <th></th>
                            </thead>
                            <tbody>
                                @foreach ($materis as $materi)
                                    <tr data-id="1">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $materi->judul }}</td>
                                        <td>{{ $materi->course->judul }}</td>
                                        <td>{{ $materi->urutan }}</td>


                                        <td style="width: 100px" class="">
                                            <div class="d-flex  gap-2">
                                                <a href="{{ route('admin.materi-edit', $materi->id) }}"
                                                    class="btn btn-outline-primary btn-sm edit" title="Edit">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>

                                                <form action="{{ route('admin.materi-delete', $materi->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger btn-sm delete"
                                                        title="Delete">
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
