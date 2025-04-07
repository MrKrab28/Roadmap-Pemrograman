<div>
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Add New Node</h5>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="saveNode">
                <div class="mb-3">
                    <label for="kode" class="form-label">Node Code</label>
                    <input type="text" class="form-control" id="kode" wire:model="kode">
                    @error('kode')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="label" class="form-label">Node Label</label>
                    <input type="text" class="form-control" id="label" wire:model="label">
                    @error('label')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Add Node</button>
            </form>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header">
            <h5 class="card-title">Existing Nodes</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>Label</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($nodes as $node)
                            <tr>
                                <td>{{ $node->kode }}</td>
                                <td>{{ $node->label }}</td>
                                <td>
                                    <button wire:click="deleteNode('{{ $node->kode }}')"
                                        class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">No nodes found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
