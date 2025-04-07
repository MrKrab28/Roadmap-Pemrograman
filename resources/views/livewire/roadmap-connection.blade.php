<div>
    @if(session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Add New Connection</h5>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="saveConnection">
                <div class="mb-3">
                    <label for="source" class="form-label">From Node</label>
                    <select class="form-select" id="source" wire:model="source">
                        <option value="">Select Source Node</option>
                        @foreach($availableNodes as $node)
                            <option value="{{ $node->kode }}">{{ $node->label }} ({{ $node->kode }})</option>
                        @endforeach
                    </select>
                    @error('source') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="target" class="form-label">To Node</label>
                    <select class="form-select" id="target" wire:model="target">
                        <option value="">Select Target Node</option>
                        @foreach($availableNodes as $node)
                            <option value="{{ $node->kode }}">{{ $node->label }} ({{ $node->kode }})</option>
                        @endforeach
                    </select>
                    @error('target') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <button type="submit" class="btn btn-primary">Add Connection</button>
            </form>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header">
            <h5 class="card-title">Existing Connections</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($connections as $connection)
                        <tr>
                            <td>{{ $connection->id }}</td>
                            <td>
                                @php
                                    $sourceNode = $availableNodes->firstWhere('kode', $connection->source);
                                @endphp
                                {{ $sourceNode ? $sourceNode->label . ' (' . $sourceNode->kode . ')' : $connection->source }}
                            </td>
                            <td>
                                @php
                                    $targetNode = $availableNodes->firstWhere('kode', $connection->target);
                                @endphp
                                {{ $targetNode ? $targetNode->label . ' (' . $targetNode->kode . ')' : $connection->target }}
                            </td>
                            <td>
                                <button wire:click="deleteConnection({{ $connection->id }})" class="btn btn-sm btn-danger">Delete Connection</button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center">No connections found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
