<x-user.layout>
    <div class="row justify-content-center">
        <h2 class="mb-4 text-light text-center">Category</h2>
        @foreach ($categories as $category)
            <div class="col-md-3 mb-4">
                <div class="card bg-dark text-white h-100 rounded-4 ">

                    <div class="card-body">
                        <h5 class="card-title">{{ $category->nama }}</h5>
                        <p class="card-text">{{ Str::limit($category->deskripsi, 50) }}</p>
                        <a href="{{ route('user.category-detail', $category->id) }}"
                            class="btn btn-primary position-absolute bottom-0 end-0 mb-2 me-2 rounded-4">Start</a>
                    </div>
                </div>
            </div>
        @endforeach


    </div>

</x-user.layout>
