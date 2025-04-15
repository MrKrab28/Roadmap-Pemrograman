<x-admin.layout>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18" style="font-family: Cascadia Code; font-weight: 1000;">
                    Modul</h4>

                {{-- <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">Welcome !</li>
                    </ol>
                </div> --}}

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">MODUL EDIT</h4>

                    <p class="card-title-desc">
                    </p>
                </div>
                <div class="card-body">



                    <form action="{{ route('admin.materi-update', $materi->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row mb-5">
                            <div class="col-md-6">

                                <x-form.input label="Judul" type="text" id="judulInput" name="judul"
                                    value="{{ $materi->judul }}" />
                                    <div class="mb-2">
                                        <x-form.input label="Urutan" name="urutan" id="urutanInput" value="{{ $materi->urutan }}" />

                                    </div>
                            </div>
                            <div class="col-md-6">
                                <x-form.select-search label="Courses" id="courseSelect" name="course_id" :required="true">
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}" @if($course->id == $materi->course_id) selected @endif >
                                            {{ $course->judul }}</option>
                                    @endforeach
                                </x-form.select-search>
                            </div>
                        </div>
                        <div class="card bg bg-dark text-light p-5 " >
                        <x-trix-input label="content" name="content" id="content"
                            value="{!! $materi->content !!}"></x-trix-input>
                        </div>
                        <div class="d-flex justify-content-end me-3 mt-3">

                            <x-component.button label="Simpan" type="submit" color="primary" />
                        </div>
                    </form>




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
