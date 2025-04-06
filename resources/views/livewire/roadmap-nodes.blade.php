<div>
    <form wire:submit="save">

            <div class="mb-3">
                <label for="kode" class="form-label">Kode</label>
                <input type="text" class="form-control" id="kode" wire:model="kode" required>
                @error('kode') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label for="label" class="form-label">Label</label>
                <input type="text" class="form-control" id="label" wire:model="label" required>
                @error('label') <span class="text-danger">{{ $message }}</span> @enderror
            </div>


            
            <button type="submit" class="btn btn-primary">Save</button>

    </form>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Kode</th>
                    <th>Label</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nodes as $index => $node)
                    <tr wire:key="node-{{ $node->id }}">
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $node->kode }}</td>
                        <td>{{ $node->label }}</td>
                        <td style="width: 100px">
                            <div class="d-flex gap-2">
                                <button type="button" class="btn btn-outline-danger btn-sm"
                                        wire:click="delete({{ $node->id }})"
                                        wire:confirm="Are you sure you want to delete this node?">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal for adding nodes -->


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
