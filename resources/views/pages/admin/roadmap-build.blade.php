{{-- @push('scripts')
    <script>
        document.addEventListener('livewire:initialized', () => {
            Livewire.on('mermaidUpdated', () => {
                if (window.mermaid) {
                    window.mermaid.init(undefined, document.querySelectorAll('.mermaid'));
                }
            });

            Livewire.on('refreshDatatable', ({
                tableId
            }) => {
                if (window.$ && window.$.fn.DataTable) {
                    if ($.fn.DataTable.isDataTable('#' + tableId)) {
                        $('#' + tableId).DataTable().ajax.reload();
                    }
                }
            });
        });
    </script>
    @endpush --}}


<x-admin.layout title="Roadmap">

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" wire:click="setActiveTab('nodes')" id="home-tab"
                                data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab"
                                aria-controls="home-tab-pane">Nodes</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link"
                                wire:click="$set('activeTab', 'connections'); $dispatch('refreshNodes');"
                                id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button"
                                role="tab" aria-controls="profile-tab-pane">Connections</button>
                        </li>
                    </ul>
                    <div class="tab-content mt-3" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                            aria-labelledby="home-tab" tabindex="0">
                            @livewire('roadmap-node', ['roadmapId' => $roadmap->id])
                        </div>
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                            tabindex="0">
                            @livewire('roadmap-connection', ['roadmapId' => $roadmap->id])
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">


                    @livewire('roadmap', ['roadmapId' => $roadmap->id])
              

        </div>
    </div>

</x-admin.layout>
