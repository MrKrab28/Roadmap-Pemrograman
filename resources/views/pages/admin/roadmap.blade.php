<x-admin.layout title="Roadmap Category">
    <div class="row">
        <div class="col-md-12">
            <h1>Roadmap</h1>
            <div class="card">
                <div class="card-body">

                    <x-form.modal label="New Roadmap" size="modal-l" title="Form Roadmap"
                        action="{{ route('admin.roadmap-store') }}">

                        @csrf
                        <x-form.select-search label="Category" id="CategoryInput" name="category_id" :required="true"
                            placeholder="Pilh Category">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->nama }}</option>
                            @endforeach
                        </x-form.select-search>

                    </x-form.modal>
                    {{-- <x-mermaid::component :data="$data" /> --}}


                    <x-component.datatable id="CategoryTable">
                        <thead>
                            <th>#</th>
                            <th>Category</th>

                            <th></th>
                        </thead>
                        <tbody>
                            @foreach ($roadmaps as $roadmap)
                                <tr data-id="1">
                                    <td data-field="id">{{ $loop->iteration }}</td>
                                    <td data-field="name">{{ $roadmap->category->nama }}</td>

                                    <td style="width: 100px" class="">
                                        <div class="d-flex  gap-2">
                                            <a href="{{ route('admin.roadmap-build', $roadmap) }}"
                                                class="btn btn-outline-success btn-sm edit" title="Roadmap">
                                                Roadmap
                                            </a>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </x-component.datatable>
                </div>
            </div>
        </div>
    </div>
</x-admin.layout>
