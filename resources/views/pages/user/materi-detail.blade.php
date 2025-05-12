<x-user.layout>
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-md-3">
                <a class="btn btn-outline-primary" href="{{ route('user.course-detail', $materi->course_id) }}"><i
                        class="fa-regular fa-circle-left">
                    </i> Back</a>
            </div>
        </div>
        <div class="row mt-5 mb-5">
            <div class="col-md-12">
                <div class="card">
                    <h1 class="card-title text-center text-light fs-1">{{ $materi->judul }}</h1>
                    <div class="card-body text-light">
                        <p class="card-text text-light">{!! $materi->content !!}</p>
                        <div class="d-flex justify-content-between mt-4">
                            <button class="btn btn-primary"
                                @if ($prev == null) disabled @else onclick="location.href='{{ route('user.materi-detail', $prev) }}'" @endif>Prev</button>
                            {{-- <button class="btn btn-primary"
                                @if ($next == null) disabled @else onclick="location.href='{{ route('user.materi-detail', $next) }}'" @endif>Next</button> --}}
                            @if ($next == null && $course->quis)
                                <button class="btn btn-primary"
                                    onclick="location.href='{{ route('user.quis-show', $course->id) }}'">Quiz</button>
                            @elseif ($next == null && !$course->quis)
                                <button class="btn btn-primary" disabled>Next</button>
                            @else
                                <button class="btn btn-primary"
                                    onclick="location.href='{{ route('user.materi-detail', $next) }}'">Next</button>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-user.layout>
