<x-user.layout>
    <div class="hero">
        <div class="container">
            <div class="hero-content" data-aos="zoom-in" data-aos-duration="1000">
                <div class="hero-text">
                    <h1 class="main-title">Join & Learn Website Programming with Us!</h1>
                    <p class="sub-title">Temukan Roadmap Pemrograman dan sumber belajar yang komprehensif untuk
                        memulai karier sebagai Web Developer.</p>
                    <a href="{{ route('user.index') }}#category" class="btn-main"><i data-feather="terminal"></i><span
                            data-key="t-email"> Mulai Belajar
                            Sekarang</span></a>
                </div>
                <div class="hero-image">
                    <img src="{{ asset('assets/images/hero2.png') }}" alt="Gambar Hero">
                    <!-- Ganti dengan URL gambar sesuai kebutuhan -->
                </div>
            </div>
        </div>
    </div>
    <section class="category-section">
        <div class="container">
            <h2>Category</h2>
            <div class="row" data-aos="zoom-in" data-aos-duration="1000" id="category">
                <!-- Backend Card -->


                <!-- Fullstack Card -->
                @foreach ($categories as $category)
                    <div class="col-md-4 column">
                        <div class="card gr-frontend">
                            <div class="txt">
                                <h1>{{ $category->nama }}</h1>
                                <p>{{ Str::of($category->deskripsi)->stripTags()->limit(50) }}</p>
                            </div>
                            <a href="{{ route('user.category-detail', $category->id) }}">READ MORE</a>
                            <div class="ico-card">
                                <i class="fa fa-@if($category->nama=='BackEnd')database @elseif($category->nama=='FrontEnd')code-fork @elseif($category->nama=='Fullstack')terminal @endif"></i>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- <div class="row justify-content-center " data-aos="zoom-in" data-aos-duration="1000" id="category">
        <h2 class="mb-4  mt-5text-dark text-center">Category</h2>
        @foreach ($categories as $category)
            <div class="col-md-3 col-lg-3 column mb-5">
                <div class="card gr-1">
                    <div class="txt">
                        <h1 class="text-wrap">{!! $category->nama !!}</h1>
                        <p>{{ Str::of($category->deskripsi)->stripTags()->limit(50) }}</p>
                    </div>
                    <a href="{{ route('user.category-detail', $category->id) }}"> Read more</a>
                    <div class="ico-card">
                        <i class="fa-brands fa-codepen"></i>
                    </div>
                </div>
            </div>
        @endforeach


    </div> --}}
</x-user.layout>
