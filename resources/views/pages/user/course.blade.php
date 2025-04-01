<x-user.layout>
    <div class="row justify-content-center mt-5" id="courses">
        <h2 class="mb-4 text-light text-center">Courses</h2>

        <div class="row mb-5">
            @foreach ($courses as $course)
                <div class="col-md-6 col-lg-3 column">
                    @if (session('materi_selesai_' . $course->materi->last()->id))
                        <div class="card gr-1" style="background-color: #29b6f6">
                            <div class="txt">
                                <h1 style="word-wrap: break-word">{{ $course->judul }}</h1>
                                <p>{{ Str::of($course->content)->stripTags()->limit(50) }}</p>
                            </div>
                            <h5>{{ $course->category->nama }}</h5>
                            <a href="{{ route('user.course-detail', $course->id) }}"> Read more</a>
                            <div class="ico-card">
                                <div class="d-flex align-items-center justify-content-end">
                                    <i class="fa-solid fa-check"></i>
                                    <img src="{{ asset('images/courses/' . $course->gambar) }}"
                                        style="height: 200px;width: 200px;" alt="">
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="card gr-1">
                            <div class="txt">
                                <h1 style="word-wrap: break-word">{{ $course->judul }}</h1>
                                <p>{{ Str::of($course->content)->stripTags()->limit(50) }}</p>
                            </div>
                            <h5>{{ $course->category->nama }}</h5>
                            <a href="{{ route('user.course-detail', $course->id) }}"> Read more</a>
                            <div class="ico-card">
                                <div class="d-flex align-items-center justify-content-end">
                                    <img src="{{ asset('images/courses/' . $course->gambar) }}"
                                        style="height: 200px;width: 200px;" alt="">

                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</x-user.layout>
