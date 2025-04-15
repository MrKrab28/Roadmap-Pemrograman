<x-admin.layout>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18" style="font-family: Cascadia Code; font-weight: 1000;">
                    QUIZ</h4>



            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">QUIZZESS</h4>

                    <x-form.modal label="New Quiz" size="modal-l" title="Form Quiz"
                        action="{{ route('admin.quis-store') }}" method="POST" autocomplete="off">
                        <div class="row">
                            <x-form.input label="course_id" type="text" id="course_idInput" name="course_id"
                                :hidden="true" value="{{ $course->id }}" />

                            <x-form.textarea label="Quiz" name="pertanyaan" id="quisInput" :required="true"
                                :rows="5" />
                        </div>
                    </x-form.modal>


                        <div class="table-responsive">
                            <x-component.datatable id="quisTable">
                                <thead>
                                    <th>#</th>
                                    <th>Quiz</th>
                                    <th>Jawaban</th>

                                    <th></th>
                                </thead>
                                <tbody>
                                    @foreach ($quises as $quis)
                                        <tr data-id="1">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $quis->pertanyaan }}</td>
                                            <td>
                                                <a href="{{ route('admin.jawaban-index', $quis->id) }}"
                                                    class="btn btn-outline-success btn-sm edit" title="Edit">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </td>
                                            <td style="width: 100px" class="">
                                                <div class="d-flex  gap-2">
                                                   

                                                    <form action="{{ route('admin.quis-delete', $quis->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-outline-danger btn-sm delete" title="Delete">
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
</x-admin.layout>


