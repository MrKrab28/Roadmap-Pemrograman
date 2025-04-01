<x-user.layout>

    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-md-3">
                <button class="btn btn-outline-info mt-3" onclick="window.history.back();">
                    <i class="fa-regular fa-circle-left"> </i> Back
                </button>
            </div>
            <div class="col-md-6">
                <div class="card text-center px-5 py-5">
                    <h1 class="card-title text-center text-light fs-1 mb-5">QUIZ</h1>
                    @if ($quis)
                        <h1 class="card-title text-center text-light fs-3">{{ $quis->pertanyaan }}</h1>
                    @else
                        <h1 class="card-title text-center text-light fs-3">tidak ditemukan</h1>
                    @endif
                    <p class="card-text text-light"></p>
                    <form action="{{ route('user.quis-submitJawaban', $quis->id) }}" method="POST">
                        @csrf
                        <x-form.input label="" type="hidden" id="materi_idInput" name="materi_id"
                            :required="true" value="{{ $materi->id }}" />
                        @foreach ($jawabans as $jawaban)
                            <div class="form-check mb-3">

                                <input class="form-check-input" type="radio" name="jawabanOpsi"
                                    id="flexRadioDefault{{ $jawaban->opsi }}" value="{{ $jawaban->opsi }}"
                                    {{ session('jawabanOpsi') == $jawaban->opsi ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexRadioDefault{{ $jawaban->opsi }}">
                                    {{ $jawaban->opsi }} . {{ $jawaban->jawaban }}
                                </label>
                            </div>
                        @endforeach

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                    @push('scripts')
                        @if (session('status'))
                            <script>
                                Swal.fire({
                                    icon: '{{ session('status') == 'benar' ? 'success' : 'error' }}',
                                    title: '{{ ucfirst(session('status')) }}',
                                    text: 'Jawaban Anda: {{ session('jawabanOpsi') }}.{{ session('jawabanUser') }}',
                                    showConfirmButton: true,
                                });
                            </script>
                        @endif
                    @endpush
                </div>
            </div>
            <div class="col-md-3">
                <div class="d-flex  justify-content-center">
                    @if (session('status') == 'benar' )
                        <button class="btn btn-outline-info mt-3"
                            onclick="location.href='{{ route('user.course-index', ) }}'">Next Modul
                            <i class="fa-regular fa-circle-right"> </i>
                        </button>
                    @endif
                </div>
            </div>
        </div>
    </div>

</x-user.layout>
