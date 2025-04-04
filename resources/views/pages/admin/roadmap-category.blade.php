<x-admin.layout title="Roadmap Category">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Roadmap</h1>
                        <div class="d-flex justifiy-content-end">

                            <x-mermaid::component :data="$data" />


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin.layout>
