    @push('scripts')
        {{-- <script type="module">
            document.addEventListener('DOMContentLoaded', () => {
                renderDiagram(@json($mermaidData));
            })

            const renderDiagram = async (isinya) => {
                const {
                    svg
                } = await mermaid.render("diagram", isinya);


                document.getElementById("roadmapnya").innerHTML = svg;
            }
        </script> --}}
    @endpush

    @push('scripts')
        <script type="module">
            import mermaid from 'https://cdn.jsdelivr.net/npm/mermaid@10/dist/mermaid.esm.min.mjs';

            document.addEventListener('DOMContentLoaded', () => {
                renderDiagram(@json($mermaidData));
                setupPanZoom();
            });

            const renderDiagram = async (diagramCode) => {
                const {
                    svg
                } = await mermaid.render("diagram", diagramCode);
                const wrapper = document.getElementById("diagram-wrapper");
                wrapper.innerHTML = svg;

                const svgElem = wrapper.querySelector('svg');
                svgElem.style.width = '100%';
                svgElem.style.height = '100%';
            };

            function setupPanZoom() {
                const diagramWrapper = document.getElementById("diagram-wrapper");
                const frameElement = document.getElementById("mermaid-frame");

                let zoomLevel = 1;
                let originX = 0;
                let originY = 0;
                let lastPosX = 0;
                let lastPosY = 0;
                let isDragging = false;

                diagramWrapper.style.transformOrigin = '0 0';
                diagramWrapper.style.transition = 'transform 0.05s ease-out';
                updateTransform();

                function updateTransform() {
                    requestAnimationFrame(() => {
                        diagramWrapper.style.transform =
                            `matrix(${zoomLevel}, 0, 0, ${zoomLevel}, ${originX}, ${originY})`;
                    });
                }

                diagramWrapper.addEventListener('mousedown', function(e) {
                    isDragging = true;
                    lastPosX = e.clientX;
                    lastPosY = e.clientY;
                    diagramWrapper.style.cursor = 'grabbing';
                    diagramWrapper.style.transition = 'none';
                    e.preventDefault();
                });

                document.addEventListener('mousemove', function(e) {
                    if (!isDragging) return;

                    const deltaX = (e.clientX - lastPosX);
                    const deltaY = (e.clientY - lastPosY);

                    lastPosX = e.clientX;
                    lastPosY = e.clientY;

                    originX += deltaX;
                    originY += deltaY;

                    updateTransform();
                });

                document.addEventListener('mouseup', function() {
                    if (isDragging) {
                        isDragging = false;
                        diagramWrapper.style.cursor = 'grab';
                        diagramWrapper.style.transition = 'transform 0.05s ease-out';
                    }
                });

                diagramWrapper.addEventListener('wheel', function(e) {
                    e.preventDefault();

                    const rect = frameElement.getBoundingClientRect();
                    const mouseX = e.clientX - rect.left;
                    const mouseY = e.clientY - rect.top;

                    const pointX = (mouseX - originX) / zoomLevel;
                    const pointY = (mouseY - originY) / zoomLevel;

                    const zoomFactor = 1.05;

                    if (e.deltaY < 0) {
                        zoomLevel = Math.min(zoomLevel * zoomFactor, 5);
                    } else {
                        zoomLevel = Math.max(zoomLevel / zoomFactor, 0.5);
                    }

                    originX = mouseX - pointX * zoomLevel;
                    originY = mouseY - pointY * zoomLevel;

                    updateTransform();
                });

                frameElement.addEventListener('wheel', function(e) {
                    e.preventDefault();
                });

                document.addEventListener('mouseleave', function() {
                    if (isDragging) {
                        isDragging = false;
                        diagramWrapper.style.cursor = 'grab';
                        diagramWrapper.style.transition = 'transform 0.05s ease-out';
                    }
                });

                diagramWrapper.addEventListener('dblclick', function(e) {
                    zoomLevel = 1;
                    originX = 0;
                    originY = 0;
                    diagramWrapper.style.transition = 'transform 0.3s ease-out';
                    updateTransform();

                    setTimeout(() => {
                        diagramWrapper.style.transition = 'transform 0.05s ease-out';
                    }, 300);
                });
            }

            mermaid.initialize({

                theme: 'default',
                themeVariables: {
                    // edgeLabelBackground: '#fff',
                    // primaryColor: '#29b6f6',
                    lineColor: '#121212',
                    color: '#121212',

                    arrowheadColor: '#121212' // ⬅️ Ini penting!
                }
            });
        </script>
    @endpush

    <x-user.layout>
        <style>
            .swal2-container.swal2-center>.swal2-popup {
                background-color: #121212 !important;
            }

            .swal2-html-container,
            .swal2-title {
                color: white !important;
            }

            .range {
                position: relative;
                background-color: #333;
                width: 300px;
                height: 30px;
                transform: skew(30deg);
                font-family: 'Orbitron', monospace;

                &:before {
                    --width: calc(var(--p) * 1%);

                    content: '';
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 0;
                    height: 100%;
                    background-color: var(--warna, #F3E600);
                    z-index: 0;
                    animation: load .5s forwards linear;
                }


                &:after {
                    counter-reset: progress var(--p);
                    content: counter(progress) '%';
                    color: #000;
                    position: absolute;
                    left: 5%;
                    top: 50%;
                    transform: translateY(-50%) skewX(-30deg);
                    z-index: 1;
                }

                &__label {
                    transform: skew(-30deg) translateY(-100%);
                    line-height: 1.5;
                }
            }

            @keyframes load {
                to {
                    width: var(--width);
                }
            }
        </style>
        <div class="row mt-5">
            <div class="col-md-3">
                <a class="btn btn-outline-primary" href="{{ route('user.index') }}" ><i class="fa-regular fa-circle-left">
                    </i> Back</a>
            </div>
        </div>
        <div class="row justify-content-center mt-5 mb-5">

            @foreach ($courses as $course)
                @php
                    $userId = auth()->user()->id;
                    $totalMateri = $course->materi->count();
                    $materiDibaca = $course->materi
                        ->filter(function ($materi) use ($userId) {
                            $readers = $materi->reader ? json_decode($materi->reader, true) : [];
                            return in_array($userId, $readers);
                        })
                        ->count();
                    $persentase = $totalMateri > 0 ? ($materiDibaca / $totalMateri) * 100 : 0;
                    if ($persentase >= 100 && $course->is_completed) {
                        $warna = '#4CAF50'; // hijau: semua selesai
                    } elseif ($persentase >= 100) {
                        $warna = '#FFA500'; // oranye: materi selesai, kuis belum
                    } else {
                        $warna = '#F3E600'; // kuning: masih dalam proses
                    }
                @endphp
                <div class="col-md-3 column mb-5">
                    @if ($course->is_completed)
                        <div class="card gr-cardd" style="background-color: #29b6f6">
                            <div class="txt">
                                <h1 style="word-wrap: break-word">{{ $course->judul }}</h1>
                                <p>{{ Str::of($course->content)->stripTags()->limit(50) }}</p>
                            </div>
                            <a href="{{ route('user.course-detail', $course->id) }}"> Read more</a>
                            @php
                                $skor = $courseSkor->firstWhere('course_id', $course->id);
                            @endphp

                            <h2 class="text-white text-end position-absolute bottom-0 end-0 me-3   "> Score
                                {{ $skor->skor }}</h2>
                            <div class="ico-card">
                                <div class="d-flex align-items-center justify-content-end">
                                    <div class="d-flex align-items-end">
                                        <i class="fa-solid fa-check justify-content-start"></i>

                                        <p class="text-white">Completed</p>
                                    </div>
                                    <img src="{{ asset('images/courses/' . $course->gambar) }}" class="rounded-circle"
                                        style="height: 80px;width: 50px;" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="range mt-2" style="--p:{{ $persentase }}; --warna: {{ $warna }}">
                            <div class="range__label">Progress</div>
                        </div>
                    @else
                        <div class="card gr-backend">
                            <div class="txt">
                                <h1 style="word-wrap: break-word">{{ $course->judul }}</h1>
                                <p>{{ Str::of($course->content)->stripTags()->limit(50) }}</p>
                            </div>
                            <a href="{{ route('user.course-detail', $course->id) }}"> Read more</a>
                            <div class="ico-card">

                                <div class="d-flex align-items-center justify-content-end ">
                                    <img src="{{ asset('images/courses/' . $course->gambar) }}" class="rounded-circle"
                                        style="height: 80px;width: 50px;" alt="">

                                </div>

                            </div>
                        </div>
                        @if ($materiDibaca > 0)
                            <div class="range mt-2" style="--p:{{ $persentase }}">
                                <div class="range__label">Progress</div>
                            </div>
                        @endif
                    @endif

                </div>
            @endforeach
            <h1>Skor Rata-rata:
                {{ $courses->sum(fn($course) => $course->courseCompletions->sum('skor')) / $courses->count() }}</h1>
        </div>
        <style>
            #mermaid-frame {
                width: 100%;
                height: 600px;
                overflow: auto;
                border: 2px solid #ffffff30;
                border-radius: 10px;
                background-color: #ffffff;
                padding: 1rem;
                margin: auto;
                box-shadow: 0 0 10px #00000050;
                position: relative;
                cursor: grab;
                display: flex;
                justify-content: center;
                align-items: center;
                color: #000;
                text-align: center;
                font-size: 14px;
            }

            #diagram-wrapper {
                width: 100%;
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                cursor: grab;
                transition: transform 0.2s ease-in-out;
            }

            #diagram-wrapper svg {
                width: auto;
                height: auto;
                font-size: 16px;
                margin: 0;
            }

            /* Instruksi di dalam frame */
            .instructions {
                position: absolute;
                top: 20px;
                left: 50%;
                transform: translateX(-50%);
                background-color: rgba(0, 0, 0, 0.5);
                padding: 10px;
                border-radius: 5px;
                font-size: 16px;
                text-align: center;
                color: white;
                z-index: 10;
            }

            /* Scrollbar customization */
            #mermaid-frame::-webkit-scrollbar {
                width: 8px;
                height: 8px;
            }

            #mermaid-frame::-webkit-scrollbar-thumb {
                background: #fff;
                border-radius: 10px;
            }

            #mermaid-frame::-webkit-scrollbar-thumb:hover {
                background: #fff;
            }
        </style>

        <div class="row mb-5">
            <h1 class="card-title text-center  fs-1">Roadmap</h1>
            <h1 class="card-title text-center  fs-3">{{ $category->nama }}</h1>
            <h5 class="card-title text-center  mt-3 mb-5">{{ $category->deskripsi }}</h5>
            <div id="mermaid-frame">
                <div class="instructions">
                    <strong>Petunjuk:</strong><br>
                    - Klik dan seret untuk memindahkan diagram.<br>
                    - Gunakan roda mouse/scroll untuk memperbesar atau memperkecil diagram.<br>
                    - Double click untuk mereset tampilan.
                </div>
                <div id="diagram-wrapper">
                    <!-- Mermaid SVG akan ditampilkan disini -->
                </div>
            </div>
        </div>

        @if (Session::has('skor'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: "{{ Session::get('skor') }}",
                    background: '#212529',
                })
            </script>
        @endif
    </x-user.layout>
