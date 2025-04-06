<div>
    <div class="mb-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#konekmodal">
            New Connection
        </button>
    </div>

    <div class="table-responsive">
        <table class="table table-striped" wire:poll.5s>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Source</th>
                    <th>Target</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($connections as $index => $connection)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $connection->source }}</td>
                        <td>{{ $connection->target }}</td>
                        <td style="width: 100px">
                            <div class="d-flex gap-2">
                                <button type="button" class="btn btn-outline-danger btn-sm"
                                        wire:click="delete({{ $connection->id }})"
                                        wire:confirm="Are you sure you want to delete this connection?">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal for adding connections -->
    <div class="modal fade" id="konekmodal" tabindex="-1" aria-labelledby="konekModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="konekModalLabel">Form Connection</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit="save">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="source" class="form-label">Source</label>
                            <select class="form-select" id="source" wire:model="source" required>
                                <option value="">Pilih Source</option>
                                @foreach ($nodes as $node)
                                    <option value="{{ $node->kode }}">{{ $node->label }}</option>
                                @endforeach
                            </select>
                            @error('source') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="target" class="form-label">Target</label>
                            <select class="form-select" id="target" wire:model="target" required>
                                <option value="">Pilih Target</option>
                                @foreach ($nodes as $node)
                                    <option value="{{ $node->kode }}">{{ $node->label }}</option>
                                @endforeach
                            </select>
                            @error('target') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('livewire:initialized', () => {
            Livewire.on('close-modal', (data) => {
                const modalId = data.id;
                const modalElement = document.getElementById(modalId);
                const modal = bootstrap.Modal.getInstance(modalElement);
                if (modal) {
                    modal.hide();
                }
            });
        });
    </script>
</div>
