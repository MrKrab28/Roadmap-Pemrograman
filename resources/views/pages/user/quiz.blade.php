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
                        <h1 class="card-title text-center text-danger fs-3">Pertanyaan Belum Ditambahkan</h1>
                    @endif
                    <style>
                        pre code {
                            background-color: #333333;
                            color: #fff;
                            padding: 10px;
                            border-radius: 5px;
                            font-family: 'Courier New', Courier, monospace;
                            font-size: 1.2em;
                            white-space: pre-wrap;
                            /* Agar teks tetap membungkus saat panjang */
                            word-wrap: break-word;
                            /* margin-bottom: 20px; */
                            /* Agar teks tidak keluar dari batas kontainer */
                        }

                        code {
                            display: block;
                            /* Menjadikan code sebagai block-level element agar lebih mudah diatur */
                            white-space: pre-wrap;
                            /* Agar teks tetap membungkus dan tidak keluar */
                            word-wrap: break-word;
                            /* Agar teks tidak keluar dari batas kontainer */
                        }

                        .pertanyaan {
                            margin-bottom: 20px;
                            /* Menambahkan jarak bawah antar pertanyaan dan kode */
                        }
                    </style>
                    @if (!$courseCompletion)
                        <form action="{{ route('user.quis-submitJawaban', $course) }}" method="post">
                            @csrf

                            @foreach ($daftarPertanyaan as $quis)
                                <ol class="text-white fw-normal">
                                    <li class="text-start">{!! $quis->pertanyaan !!}</li>
                                    @foreach ($quis->jawaban as $jawaban)
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                id="jawaban{{ $jawaban->id }}" name="jawaban[{{ $quis->id }}]"
                                                value="{{ $jawaban->id }}" required>
                                            <label class="form-check-label fw-light"
                                                for="jawaban{{ $jawaban->id }}">{{ $jawaban->jawaban }}</label>
                                        </div>
                                    @endforeach
                                </ol>
                            @endforeach
                            @if ($daftarPertanyaan->count() == 0)
                                <h3 class="text-light">Quiz Not Found</h3>
                            @else
                                <button class="btn btn-danger">Submit</button>
                            @endif
                        </form>
                    @else
                        <h1 class="card-title text-center text-light fs-3">Anda telah mengerjakan quiz ini</h1>
                        <h3>Skor Anda: {{ round($courseCompletion->skor, 2) }}</h3>
                        <button class="btn btn-outline-info mt-3"
                            onclick="location.href='{{ route('user.category-detail', $course->category_id) }}'"> >
                            next Course</button>
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
