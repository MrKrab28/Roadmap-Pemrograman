<x-admin.layout>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18" style="font-family: Cascadia Code; font-weight: 1000;">
                    Category</h4>

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
                    <h4 class="card-title">CATEGORY EDIT</h4>

                    <p class="card-title-desc">
                    </p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 d-flex justify-content-center">
                            <img src="{{ asset('assets/images/testingcopy.png') }}" alt="">
                        </div>
                        <div class="col-md-6">
                            <form action="{{ route('admin.category-update', $category->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <x-form.input label="Nama" type="text" id="namaInput" name="nama"
                                    value="{{ $category->nama }}" />
                                <x-form.textarea label="Deskripsi" id="deskripsiInput" name="deskripsi" :rows="5"  :required="true" >{{ $category->deskripsi }}</x-form.textarea>
                               
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
