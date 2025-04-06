<x-admin.layout title="Roadmap">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#home-tab-pane" type="button" role="tab"
                                aria-controls="home-tab-pane" aria-selected="true">Nodes</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#profile-tab-pane" type="button" role="tab"
                                aria-controls="profile-tab-pane" aria-selected="false">Connections</button>
                        </li>

                    </ul>
                    <div class="tab-content mt-3" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                            aria-labelledby="home-tab" tabindex="0">
                            <form action="{{ route('admin.node-store') }}" method="POST">
                                <div class="row">
                                    @csrf
                                    <div class="col-md-6">

                                        <x-form.input label="roadmap_id" name="roadmap_id" id="roadmap_idInput"
                                            :hidden="true" value="{{ $roadmap->id }}" :required="true" />
                                        <x-form.input label="Kode" name="kode" id="kodeInput" :required="true" />
                                    </div>
                                    <div class="col-md-6">

                                        <x-form.input label="Label" name="label" id="labelInput" :required="true" />
                                    </div>
                                    <div class="d-flex justify-content-end mt-1 mb-5">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </form>
                            <x-component.datatable tatable id="NodesTable">
                                <thead>
                                    <th>#</th>
                                    <th>Kode</th>
                                    <th>Label</th>

                                    <th></th>
                                </thead>
                                <tbody>
                                    @foreach ($nodes as $node)
                                        <tr data-id="1">
                                            <td data-field="id">{{ $loop->iteration }}</td>
                                            <td data-field="name">{{ $node->kode }}</td>
                                            <td data-field="name">{{ $node->label }}</td>

                                            <td style="width: 100px" class="">
                                                <div class="d-flex  gap-2">
                                                    <form action="{{ route('admin.node-delete', $node) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-outline-danger btn-sm delete"
                                                            title="Roadmap">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>

                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </x-component.datatable>

                        </div>





                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                            tabindex="0">



                            <form action="{{ route('admin.konek-store') }}" method="POST">
                                <div class="row">
                                    @csrf
                                    <div class="col-md-6">

                                        <x-form.input label="roadmap_id" name="roadmap_id" id="roadmap_idInput"
                                            :hidden="true" value="{{ $roadmap->id }}" :required="true" />
                                       <x-form.select-search label="Source" id="SourceInput" name="source">
                                            @foreach ($nodes as $node )
                                                <option value="{{ $node->kode }}">{{ $node->label }}</option>
                                            @endforeach
                                       </x-form.select-search>
                                    </div>
                                    <div class="col-md-6">

                                        <x-form.select-search label="Target" id="TargetInput" name="target">
                                            @foreach ($nodes as $node )
                                                <option value="{{ $node->kode }}">{{ $node->label }}</option>
                                            @endforeach
                                       </x-form.select-search>
                                    </div>
                                    <div class="d-flex justify-content-end mt-1 mb-5">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </form>

                            <x-component.datatable id="konekTable">
                                <thead>
                                    <th>#</th>
                                    <th>Source</th>
                                    <th>Target</th>

                                    <th></th>
                                </thead>
                                <tbody>
                                    @foreach ($koneks as $konek)
                                        <tr data-id="1">
                                            <td data-field="id">{{ $loop->iteration }}</td>
                                            <td data-field="name">{{ $konek->source }}</td>
                                            <td data-field="name">{{ $konek->target }}</td>

                                            <td style="width: 100px" class="">
                                                <div class="d-flex  gap-2">
                                                    <form action="{{ route('admin.konek-delete', $konek) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-outline-danger btn-sm delete"
                                                            title="Roadmap">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
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
        </div>
        <div class="col-md-8">
            <div class="d-flex justify-content-center" style="width: 100%;height: 100%">

                <x-mermaid::component :data="$mermaidData" />
            </div>
        </div>
    </div>
</x-admin.layout>
