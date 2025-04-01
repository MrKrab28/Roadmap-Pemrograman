
    <x-user.layout>


        <div class="container p-5">
            <div class="row justify-content-center mt-5">
                <h2 class="mb-4 text-light text-center">{{ $course->judul }}</h2>

                <div class="row">
                    <div class="col-md-12">


                        <div class="card-image-container"
                            style="border-radius: 20px 20px 0px 0px; height: 600px; overflow: hidden;">
                            <img src="{{ asset('images/courses/' . $course->gambar) }}" class="card-img-top "
                                style="object-fit: cover; height: 100%;" alt="">
                        </div>


                        <div class="card-body mt-5">
                            <h3 class="card-title text-light fs-2 text-center mt-0">Modul</h3>
                            <hr style="border: 2px solid #29b6f6">
                            <div class="row mt-5 mb-5">

                                @foreach ($course->materi as $materi)
                                    <div class="col-md-6 col-lg-3 column">
                                        <div class="card gr-1 ">
                                            <div class="txt">
                                                <h1 style="word-wrap: break-word">{{ $materi->judul }}</h1>
                                                <p>{{ Str::of($materi->content)->stripTags()->limit(50) }}</p>
                                            </div>
                                            <a href="{{ route('user.materi-detail', $materi->id) }}"> Read more</a>
                                            <div class="ico-card">
                                                <i class="fa-solid fa-laptop-code"></i>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>

    </x-user.layout>
