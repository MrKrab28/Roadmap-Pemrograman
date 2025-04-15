<x-admin.layout>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18" style="font-family: Cascadia Code; font-weight: 1000;">
                    COURSE</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Courses</h4>
                    <x-form.modal label="New Course" size="modal-l" title="Form Course"
                        action="{{ route('admin.course-store') }}" >
                        <div class="row">

                            <x-form.input label="Judul" name="judul" id="judulInput" :required="true" />
                            <x-form.select-search label="Category" id="category_id" name="category_id" :required="true" placeholder="Pilih" id="formModal">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->nama }}</option>
                                @endforeach
                            </x-form.select-search>


                            <x-form.image label="Upload" name="gambar" id="imgInput" :required="true" />


                        </div>
                    </x-form.modal>
                    <p class="card-title-desc">
                    </p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <x-component.datatable id="CourseTable">
                            <thead>
                                <th>#</th>
                                <th>Course</th>
                                <th>Category</th>
                                <th>Quiz</th>
                                <th>Modul</th>

                                <th></th>
                            </thead>
                            <tbody>
                                @foreach ($courses as $course)
                                    <tr data-id="1">
                                        <td data-field="id">{{ $loop->iteration }}</td>
                                        <td data-field="name">{{ $course->judul }}</td>
                                        <td data-field="age">{{ $course->category->nama }}</td>
                                        <td data-field="age">
                                            <a href="{{ route('admin.quis-index', $course) }}" class="btn btn-primary">
                                                <i class="fas fa-brain">?</i>
                                            </a>
                                        </td>
                                        <td data-field="age">
                                            <a href="{{ route('admin.course-modul', $course) }}" class="btn btn-primary">
                                                <i class="fas fa-book"></i>
                                            </a>
                                        </td>

                                        <td style="width: 100px" class="">
                                            <div class="d-flex  gap-2">
                                                <a href="{{ route('admin.course-edit', $course) }}"
                                                    class="btn btn-outline-primary btn-sm edit" title="Edit">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>

                                                <form action="{{ route('admin.course-delete', $course) }}">
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
