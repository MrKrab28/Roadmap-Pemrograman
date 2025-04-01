@push('scripts')
    <script type="module">
        document.addEventListener('DOMContentLoaded', () => {

            const data = `

                 graph TD
                     A[Enter Chart Definition] --> B(Preview)
                     B --> C{decide}
                     C --> D[Keep]
                     C --> E[Edit Definition]
                     E --> B
                     D --> F[Save Image and Code]
                     F --> B
                `
            renderDiagram(data);

        });

        const renderDiagram = async (data) => {
            const {
                svg
            } = await mermaid.render("diagram", data);

            document.getElementById("roadmap").innerHTML = svg;
        }
    </script>
@endpush
<x-user.layout>
    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-md-4">
            @foreach ($courses as $course)
                <div class="col-md-12 column">
                    <div class="card gr-1">
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
                </div>
            @endforeach
        </div>

        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-body text-light">
                    <h1 class="card-title text-center text-light fs-1">Roadmap</h1>
                    <h1 class="card-title text-center text-light fs-3">{{ $category->nama }}</h1>
                    <div id="roadmap" class="d-flex justify-content-center">
                        {{-- graph TD
                      A[Enter Chart Definition] --> B(Preview)
                      B --> C{decide}
                      C --> D[Keep]
                      C --> E[Edit Definition]
                      E --> B
                      D --> F[Save Image and Code]
                      F --> B --}}
                    </div>

                </div>
            </div>
        </div>
    </div>

</x-user.layout>
