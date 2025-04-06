<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Node;
use Livewire\Attributes\On;

class RoadmapNodes extends Component
{
    public $roadmap;
    public $kode = '';
    public $label = '';
    public $nodes = [];

    // Kunci: Menghapus wire:poll dari kode lama
    // dan menggantinya dengan refresh manual

    public function mount($roadmap)
    {
        $this->roadmap = $roadmap;
        $this->refreshNodes();
    }

    public function refreshNodes()
    {
        $this->nodes = Node::where('roadmap_id', $this->roadmap->id)->get();
    }

    public function save()
    {
        $this->validate([
            'kode' => 'required|unique:nodes,kode',
            'label' => 'required',
        ]);

        Node::create([
            'roadmap_id' => $this->roadmap->id,
            'kode' => $this->kode,
            'label' => $this->label,
        ]);

        $this->reset(['kode', 'label']);
        $this->refreshNodes();

        // Dispatch event untuk memperbarui Roadmap
        $this->dispatch('nodesUpdated');

        // Tutup modal
        $this->dispatch('close-modal', ['id' => 'nodemodal']);
    }

    public function delete($nodeId)
    {
        $node = Node::find($nodeId);
        if ($node) {
            $node->delete();
            $this->refreshNodes();

            // Dispatch event untuk memperbarui Roadmap
            $this->dispatch('nodesUpdated');
        }
    }

    #[On('connectionsUpdated')]
    public function handleConnectionsUpdated()
    {
        $this->refreshNodes();
    }

    public function render()
    {
        return view('livewire.roadmap-nodes');
    }
}
