<x-user.layout>


    <div class="container p-5">

        <div class="row justify-content-center mt-5">
            <h2 class="mb-4 text-dark text-center">{{ $course->judul }}</h2>

            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-center">
                        <div class="card-image-container"
                            style="border-radius: 20px 20px 0px 0px; height: 600px;width: 600px; overflow: hidden;">
                            <img src="{{ asset('images/courses/' . $course->gambar) }}" class="card-img-top "
                                style="object-fit:initial; height: 100%;" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body mt-5 ">
                <h3 class="card-title text-dark fs-2 text-center mt-0">Modul</h3>
                <div class="row mt-5">
                    <div class="col-md-3">
                        <a class="btn btn-outline-primary" href="{{ route('user.category-detail', $course->category_id) }}"><i
                                class="fa-regular fa-circle-left">
                            </i> Back</a>
                    </div>
                </div>
                <hr style="border: 2px solid #29b6f6">
                <div class="row mt-5 mb-5 justify-content-center">

                    @foreach ($course->materi as $materi)
                        @if ($materi->reader != null && in_array(auth()->user()->id, json_decode($materi->reader)))
                            <div class="col-md-3 col-lg-3 column ">
                                <div class="card gr-backend " style="height: 250px;">
                                    <p>Done</p>
                                    <div class="txt">
                                        <h1 style="word-wrap: break-word">{{ $materi->judul }}</h1>
                                        <p>{{ Str::of($materi->content)->stripTags()->limit(50) }}</p>
                                    </div>
                                    <a href="{{ route('user.materi-detail', $materi->id) }}"> Read more</a>
                                    <div class="ico-card">
                                        <i class="fa-solid fa-check justify-content-start"></i>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-md-3 col-lg-3 column ">
                                <div class="card gr-1 " style="height: 250px;">
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
                        @endif
                    @endforeach


                </div>
            </div>


        </div>
    </div>

</x-user.layout>
