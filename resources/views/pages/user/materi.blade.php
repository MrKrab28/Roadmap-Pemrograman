<x-user.layout>
    <div class="row justify-content-center mt-5" id="courses">
        <h2 class="mb-4 text-light text-center">Modul</h2>

        <div class="row mb-5">
            @foreach ($materis as $materi)
                <div class="col-md-6 col-lg-3 column">
                    <div class="card gr-1">
                        <div class="txt">
                            <h1 style="word-wrap: break-word">{{ $materi->judul }}</h1>
                            <p>{{ Str::of($materi->content)->stripTags()->limit(50) }}</p>
                        </div>
                        <h5>{{ $materi->course->category->nama }} - {{ $materi->course->judul }}</h5>
                        <a href="{{ route('user.materi-detail', $materi->id) }}"> Read more</a>
                        <div class="ico-card">

                                <i class="fa-solid fa-laptop-code"></i>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-user.layout>
