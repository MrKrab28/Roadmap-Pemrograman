<x-user.layout>
    <div class="container mt-3 mb-5">
        <div class="row mt-5 mb-5">

            <div class="col-md-6 text-center p-5">
                <h1 href="#" style="font-family: Cascadia Code; font-weight: 1000;">
                    @{{ Artisan<span>.</span><span>Compass</span> }}</h1>
            </div>
            <div class="col-md-6">
                <form action="{{ route('user.profile-update', auth()->user()->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <x-form.input label="Nama" type="text" id="namaInput" name="nama"
                        value="{{ auth()->user()->nama }}" class="bg bg-success" style="color: blue !important;" />
                    <x-form.input label="Email" type="email" id="emailInput" name="email"
                        value="{{ auth()->user()->email }}" />
                    <x-form.input label="Password" type="password" id="passwordInput" name="password"
                        helperText="Biarkan Kosong Jika Tidak Diubah" />
                        <div class="d-flex justify-content-end me-3">

                            <x-component.button label="Simpan" type="submit" color="primary" />
                        </div>
                </form>
            </div>
        </div>
    </div>
    @if (Session::has('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: "{{ Session::get('success') }}",
            background: '#212529',
        })
    </script>
@endif
</x-user.layout>
