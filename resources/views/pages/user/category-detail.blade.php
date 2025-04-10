@push('scripts')
    <script type="module">
        document.addEventListener('DOMContentLoaded', () => {
            renderDiagram(@json($mermaidData));
        })

        const renderDiagram = async (isinya) => {
            const {
                svg
            } = await mermaid.render("diagram", isinya);


            document.getElementById("roadmapnya").innerHTML = svg;
        }
    </script>
@endpush
<x-user.layout>
    <div class="row justify-content-center mt-5 mb-5">
        {{-- <div class="col-md-4"> --}}
        @foreach ($courses as $course)
            {{-- @php

                    $isCompleted = \App\Models\CourseCompletion::where('user_id', auth()->id())
                        ->where('course_id', $course->id)
                        ->where('selesai', true)
                        ->exists();
                @endphp --}}
            <div class="col-md-3 column mb-5">
                @if ($course->is_completed)
                    <div class="card gr-1" style="background-color: #29b6f6">
                        <div class="txt">
                            <h1 style="word-wrap: break-word">{{ $course->judul }}</h1>
                            <p>{{ Str::of($course->content)->stripTags()->limit(50) }}</p>
                        </div>
                        <a href="{{ route('user.course-detail', $course->id) }}"> Read more</a>
                        <div class="ico-card">
                            <div class="d-flex align-items-center justify-content-end">
                                <div class="d-flex align-items-end">
                                    <i class="fa-solid fa-check justify-content-start"></i>
                                    <p class="text-white">Completed</p>
                                </div>
                                <img src="{{ asset('images/courses/' . $course->gambar) }}"
                                    style="height: 200px;width: 200px;" alt="">

                            </div>

                        </div>
                    </div>
                @else
                    <div class="card gr-1" >
                        <div class="txt">
                            <h1 style="word-wrap: break-word">{{ $course->judul }}</h1>
                            <p>{{ Str::of($course->content)->stripTags()->limit(50) }}</p>
                        </div>
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
        {{-- </div> --}}

        <div class="col-md-6 px-5">
            {{-- <div class="card"> --}}
            {{-- <div class="card-body text-light"> --}}
            <h1 class="card-title text-center text-light fs-1">Roadmap</h1>
            <h1 class="card-title text-center text-light fs-3">{{ $category->nama }}</h1>

            {{-- </div> --}}
            {{-- </div> --}}
        </div>
    </div>
    <style>
        #roadmapnya * {
            transition: none !important;

        }
    </style>
    <div id="roadmapnya" class="w-100 h-100 ">
        %%{init: {"themeVariables": {"graphWidth": "1200", "graphHeight": "800"}}}%%
    </div>
</x-user.layout>
