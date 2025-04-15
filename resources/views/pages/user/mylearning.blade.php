<x-user.layout>
    <div class="container mt-5">
        <div class="d-flex justify-content-center align-items-center mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-5">
                        <div class="card-header">
                            <h1 class="text-center">My Learning Path</h1>
                        </div>
                        <div class="card-body ">
                            @foreach ($categories as $category)
                                <h3 class="text-light text-center">
                                    {{ $category ? $category->nama : 'Kategori tidak ditemukan' }}
                                </h3>
                                <div class="card-text mb-4">
                                @foreach ($groupedCompletions[$category->id] as $completion)
                                    {{-- <h3 class="card-title text-center text-light fs-2 mb-2">
                                        {{ $completion->course->category->nama }}
                                    </h3> --}}




                                    <ol class="list-group mb-1">
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-start text-light">
                                            <div class="ms-2 me-auto">
                                                <div class="fw-bold"> {{ $completion->course->judul }}</div>
                                                Skor : {{ $completion->skor }}
                                            </div>

                                            <span class="mdi mdi-check-circle-outline text-success fs-2"></span>
                                        </li>
                                        <hr class="bg bg-success border-success mt-0 mb-0" style="height: 3px;">

                                    </ol>
                                @endforeach
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-user.layout>
