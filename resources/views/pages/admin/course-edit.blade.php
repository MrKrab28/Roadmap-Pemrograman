<x-admin.layout>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18" style="font-family: Cascadia Code; font-weight: 1000;">
                    Course</h4>

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
                    <h4 class="card-title">COURSE EDIT</h4>

                    <p class="card-title-desc">
                    </p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 d-flex justify-content-center">
                            <img src="{{ asset('images/courses/' . $course->gambar) }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-6">
                            <form action="{{ route('admin.course-update', $course->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <x-form.input label="category" type="text" id="judulInput" name="category_id"
                                    value="{{ $course->category_id }}" :readonly="true" :hidden="true" />
                                <x-form.input label="Course" type="text" id="judulInput" name="judul"
                                    value="{{ $course->judul }}" />
                                    <x-form.image label="Upload" name="gambar" id="imgInput" :required="true" />

                                    <div class="d-flex justify-content-end me-3">

                                        <x-component.button label="Simpan" type="submit" color="primary" />
                                    </div>
                            </form>

                        </div>
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
