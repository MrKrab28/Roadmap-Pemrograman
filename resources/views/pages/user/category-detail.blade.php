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

    {{-- <script>
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

            // Center the diagram initially
            centerDiagram();
        };

        function centerDiagram() {
            const diagramWrapper = document.getElementById("diagram-wrapper");
            const frameElement = document.getElementById("mermaid-frame");
            const svgElement = diagramWrapper.querySelector('svg');

            if (svgElement) {
                // Get the center of the frame
                const frameWidth = frameElement.clientWidth;
                const frameHeight = frameElement.clientHeight;

                // Get SVG size
                const svgWidth = svgElement.getBBox().width;
                const svgHeight = svgElement.getBBox().height;

                // Center SVG in frame
                const centerX = (frameWidth - svgWidth) / 2;
                const centerY = (frameHeight - svgHeight) / 2;

                // Apply initial centering
                diagramWrapper.style.transform = `translate(${centerX}px, ${centerY}px) scale(1)`;
            }
        }

        function setupPanZoom() {
            const diagramWrapper = document.getElementById("diagram-wrapper");
            const frameElement = document.getElementById("mermaid-frame");

            // Initial values
            let zoomLevel = 1;
            let originX = 0;
            let originY = 0;
            let lastPosX = 0;
            let lastPosY = 0;
            let isDragging = false;

            // Get initial transform values after centering
            const initialTransform = window.getComputedStyle(diagramWrapper).transform;
            if (initialTransform && initialTransform !== 'none') {
                const matrix = new DOMMatrix(initialTransform);
                originX = matrix.e;
                originY = matrix.f;
            }

            // Configure initial state
            diagramWrapper.style.transformOrigin = '0 0';
            diagramWrapper.style.transition = 'transform 0.05s ease-out';

            // Update the transform with current values
            function updateTransform() {
                requestAnimationFrame(() => {
                    diagramWrapper.style.transform = `translate(${originX}px, ${originY}px) scale(${zoomLevel})`;
                    updateScrollIndicators();
                });
            }

            // Update scroll indicators
            function updateScrollIndicators() {
                const svgElement = diagramWrapper.querySelector('svg');
                if (!svgElement) return;

                // Get viewport and content dimensions
                const svgBounds = svgElement.getBBox();
                const viewportWidth = frameElement.clientWidth;
                const viewportHeight = frameElement.clientHeight;
                const contentWidth = svgBounds.width * zoomLevel;
                const contentHeight = svgBounds.height * zoomLevel;

                // Show/hide scroll indicators based on content size vs. viewport
                frameElement.classList.toggle('scroll-x', contentWidth > viewportWidth);
                frameElement.classList.toggle('scroll-y', contentHeight > viewportHeight);
            }

            // Handle mouse down for pan start
            diagramWrapper.addEventListener('mousedown', function(e) {
                if (e.button !== 0) return; // Only left mouse button
                isDragging = true;
                lastPosX = e.clientX;
                lastPosY = e.clientY;
                diagramWrapper.style.cursor = 'grabbing';
                diagramWrapper.style.transition = 'none'; // Disable transition during active dragging
                e.preventDefault();
            });

            // Handle mouse move for panning with smoother updates
            document.addEventListener('mousemove', function(e) {
                if (!isDragging) return;

                // Calculate the distance moved
                const deltaX = (e.clientX - lastPosX);
                const deltaY = (e.clientY - lastPosY);

                // Update the last position
                lastPosX = e.clientX;
                lastPosY = e.clientY;

                // Update origin based on the drag distance
                originX += deltaX;
                originY += deltaY;

                // Use requestAnimationFrame for smoother updates
                updateTransform();
            });

            // Handle mouse up to end panning
            document.addEventListener('mouseup', function() {
                if (isDragging) {
                    isDragging = false;
                    diagramWrapper.style.cursor = 'grab';
                    diagramWrapper.style.transition = 'transform 0.05s ease-out'; // Re-enable transition
                }
            });

            // Handle mouse wheel for zooming
            diagramWrapper.addEventListener('wheel', function(e) {
                e.preventDefault();

                // Get the position of the mouse relative to the frame
                const rect = frameElement.getBoundingClientRect();
                const mouseX = e.clientX - rect.left;
                const mouseY = e.clientY - rect.top;

                // Convert mouse position to be relative to the current transform
                const pointX = (mouseX - originX) / zoomLevel;
                const pointY = (mouseY - originY) / zoomLevel;

                // Adjust zoom level with finer control
                const oldZoom = zoomLevel;
                const zoomFactor = 1.05; // Smoother zoom steps

                if (e.deltaY < 0) {
                    // Zoom in
                    zoomLevel = Math.min(zoomLevel * zoomFactor, 5);
                } else {
                    // Zoom out
                    zoomLevel = Math.max(zoomLevel / zoomFactor, 0.5);
                }

                // Adjust the origin to zoom to/from the mouse point
                originX = mouseX - pointX * zoomLevel;
                originY = mouseY - pointY * zoomLevel;

                updateTransform();
            });

            // Handle when mouse leaves the frame
            document.addEventListener('mouseleave', function() {
                if (isDragging) {
                    isDragging = false;
                    diagramWrapper.style.cursor = 'grab';
                    diagramWrapper.style.transition = 'transform 0.05s ease-out'; // Re-enable transition
                }
            });

            // Double click to reset view
            diagramWrapper.addEventListener('dblclick', function(e) {
                zoomLevel = 1;
                centerDiagram(); // Center the diagram instead of resetting to 0,0

                // Get updated position after centering
                const matrix = new DOMMatrix(window.getComputedStyle(diagramWrapper).transform);
                originX = matrix.e;
                originY = matrix.f;

                diagramWrapper.style.transition = 'transform 0.3s ease-out'; // Smoother reset animation
                updateTransform();

                // Reset back to quick transitions after the reset animation completes
                setTimeout(() => {
                    diagramWrapper.style.transition = 'transform 0.05s ease-out';
                }, 300);
            });

            // Add keyboard shortcuts for navigating
            frameElement.addEventListener('keydown', function(e) {
                const step = 50; // Pixels to move per key press

                switch (e.key) {
                    case 'ArrowLeft':
                        originX += step;
                        break;
                    case 'ArrowRight':
                        originX -= step;
                        break;
                    case 'ArrowUp':
                        originY += step;
                        break;
                    case 'ArrowDown':
                        originY -= step;
                        break;
                    case '0': // Reset view with '0' key
                        zoomLevel = 1;
                        centerDiagram();
                        const matrix = new DOMMatrix(window.getComputedStyle(diagramWrapper).transform);
                        originX = matrix.e;
                        originY = matrix.f;
                        break;
                    case '+': // Zoom in
                        zoomLevel = Math.min(zoomLevel * 1.1, 5);
                        break;
                    case '-': // Zoom out
                        zoomLevel = Math.max(zoomLevel / 1.1, 0.5);
                        break;
                    default:
                        return; // Exit if not a navigation key
                }

                e.preventDefault();
                updateTransform();
            });

            // Make the frame focusable for keyboard navigation
            frameElement.tabIndex = 0;

            // Handle window resize
            window.addEventListener('resize', function() {
                updateScrollIndicators();
            });

            // Initialize scroll indicators
            updateScrollIndicators();
        }
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
    </style>
    <div class="row justify-content-center mt-5 mb-5">

        @foreach ($courses as $course)

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
                @endif
            </div>
        @endforeach


    </div>
    <style>
        /* Frame for Mermaid with scrollbars, zoom and pan */
        #mermaid-frame {
            width: 100%;
            height: 600px;
            /* Adjust as needed */
            overflow: hidden;
            /* Hide overflow by default */
            border: 2px solid #ffffff30;
            border-radius: 10px;
            background-color: #1e1e1e;
            padding: 1rem;
            margin: auto;
            box-shadow: 0 0 10px #00000050;
            position: relative;
        }

        /* Add scroll indicators when content overflows */
        #mermaid-frame.scroll-x::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 8px;
            background: linear-gradient(to right, transparent 0%, #6f6f6f 50%, transparent 100%);
            opacity: 0.6;
            pointer-events: none;
        }

        #mermaid-frame.scroll-y::before {
            content: '';
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            width: 8px;
            background: linear-gradient(to bottom, transparent 0%, #6f6f6f 50%, transparent 100%);
            opacity: 0.6;
            pointer-events: none;
        }

        #diagram-wrapper {
            transform-origin: 0 0;
            cursor: grab;
            transition: transform 0.05s ease-out;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #diagram-wrapper svg {
            width: auto;
            height: auto;
            font-size: 16px;
            margin: 0;
        }

        /* Focus style for keyboard navigation */
        #mermaid-frame:focus {
            outline: 2px solid #4a90e2;
        }

        /* Help indicator */
        #zoom-help {
            position: absolute;
            bottom: 10px;
            left: 10px;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 12px;
            opacity: 0.7;
            pointer-events: none;
        }
    </style>
    <div class="row mb-5">
        <h1 class="card-title text-center text-light fs-1">Roadmap</h1>
        <h1 class="card-title text-center text-light fs-3">{{ $category->nama }}</h1>

        <div id="mermaid-frame">
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
</x-user.layout> --}}
@push('scripts')
    <script type="module">
        import mermaid from 'https://cdn.jsdelivr.net/npm/mermaid@10/dist/mermaid.esm.min.mjs';

        document.addEventListener('DOMContentLoaded', () => {
            renderDiagram(@json($mermaidData));
            setupPanZoom();
        });

        const renderDiagram = async (diagramCode) => {
            const { svg } = await mermaid.render("diagram", diagramCode);
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
    </style>
    <div class="row justify-content-center mt-5 mb-5">
        @foreach ($courses as $course)
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
                @endif
            </div>
        @endforeach
    </div>

    <style>
        #mermaid-frame {
            width: 100%;
            height: 600px;
            overflow: auto;
            border: 2px solid #ffffff30;
            border-radius: 10px;
            background-color: whitesmoke;
            padding: 1rem;
            margin: auto;
            box-shadow: 0 0 10px #00000050;
            position: relative;
            cursor: grab;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
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
            background-color: rgba(0, 0, 0, 0.7);
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
        <h1 class="card-title text-center text-light fs-1">Roadmap</h1>
        <h1 class="card-title text-center text-light fs-3">{{ $category->nama }}</h1>

        <div id="mermaid-frame">
            <div class="instructions">
                <strong>Petunjuk:</strong><br>
                - Klik dan seret untuk memindahkan diagram.<br>
                - Gunakan roda mouse untuk memperbesar atau memperkecil diagram.<br>
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
