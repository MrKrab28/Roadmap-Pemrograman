<x-admin.layout>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18" style="font-family: Cascadia Code; font-weight: 1000;">
                    User</h4>

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
                    <h4 class="card-title">USER</h4>
                    <x-form.modal label="New User" size="modal-l" title="Form User"
                        action="{{ route('admin.user-store') }}" method="POST" autocomplete="off">
                        <div class="row">


                            <x-form.input label="Nama" name="nama" id="namaInput" :required="true" />
                            <x-form.input label="Email" name="email" type="email" id="emailInput"
                                :required="true" />
                            <x-form.input label="password" name="password" type="password" id="passwordInput"
                                :required="true" />



                        </div>
                    </x-form.modal>
                    <p class="card-title-desc">
                    </p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        {{-- <table class="table table-editable table-nowrap align-middle table-edits">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Jurusan</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr data-id="1">
                                        <td data-field="id">{{ $loop->iteration }}</td>
                                        <td data-field="name">{{ $user->nama }}</td>
                                        <td data-field="age">{{ $user->email }}</td>
                                        <td data-field="gender">{{ $user->jurusan }}</td>
                                        <td style="width: 100px" class="">
                                            <a href="{{ route('admin.user-edit', $user) }}"
                                                class="btn btn-outline-primary btn-sm edit" title="Edit">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>

                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table> --}}
                        <x-component.datatable id="CategoryTable">
                            <thead>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Email</th>

                                <th></th>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr data-id="1">
                                        <td data-field="id">{{ $loop->iteration }}</td>
                                        <td data-field="name">{{ $user->nama }}</td>
                                        <td data-field="age">{{ $user->email }}</td>

                                        <td style="width: 100px" class="">
                                            <a href="{{ route('admin.user-edit', $user) }}"
                                                class="btn btn-outline-primary btn-sm edit" title="Edit">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>

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
