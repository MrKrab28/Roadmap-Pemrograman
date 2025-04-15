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


                    {{-- @if ($quis)
                        <h1 class="card-title text-center text-light fs-3">{{ $quis->pertanyaan }}</h1>
                    @else
                        <h1 class="card-title text-center text-light fs-3">Tidak Ditemukan</h1>
                    @endif --}}
                    @if ($daftarPertanyaan->count() == 0)
                        <h1 class="card-title text-center text-light fs-3">Pertanyaan Belum Ditambahkan</h1>

                    @endif

                    @if (!$courseCompletion)
                        <form action="{{ route('user.quis-submitJawaban', $course) }}" method="post">
                            @csrf

                            <ol class="text-white fw-normal">
                                @foreach ($daftarPertanyaan as $quis)
                                    <li class="text-start">{{ $quis->pertanyaan }}</li>
                                    @foreach ($quis->jawaban as $jawaban)
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                id="jawaban{{ $jawaban->id }}" name="jawaban[{{ $quis->id }}]"
                                                value="{{ $jawaban->id }}" required>
                                            <label class="form-check-label fw-light"
                                                for="jawaban{{ $jawaban->id }}">{{ $jawaban->jawaban }}</label>
                                        </div>
                                    @endforeach
                                @endforeach
                            </ol>

                            <button class="btn btn-danger">Submit</button>
                        </form>
                    @else
                        <h1 class="card-title text-center text-light fs-3">Anda telah mengerjakan quiz ini</h1>
                        <h3>Skor Anda: {{ round($courseCompletion->skor, 2) }}</h3>
                        <button class="btn btn-outline-info mt-3" onclick="location.href='{{ route('user.category-detail', $course->category_id) }}'"> > next Course</button>
                    @endif



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
                        @if (Session::has('error'))
                            <script>
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Failed',
                                    text: '{{ Session::get('error') }}',
                                })
                            </script>
                        @endif
                    @endpush
                </div>
            </div>



            <div class="col-md-3">
                <div class="d-flex justify-content-center">
                    @if (session('status') == 'benar')
                        {{-- @php

                            $isLastQuisCompleted = \App\Models\CourseCompletion::where('user_id', auth()->id())
                                ->where('course_id', $course->id)->where('selesai', true)->exists();
                        @endphp --}}
                        <button class="btn btn-outline-info mt-3"
                            onclick="location.href='{{ route('user.quis-show', $next) }}'">
                            Next Quiz <i class="fa-regular fa-circle-right"></i>
                        </button>
                        {{-- @if ($isLastQuisCompleted)
                            <button class="btn btn-outline-info mt-3"
                                onclick="location.href='{{ route('user.course-index') }}'">
                                Next Modul <i class="fa-regular fa-circle-right"></i>
                            </button>
                        @else
                        @endif --}}
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-user.layout>
