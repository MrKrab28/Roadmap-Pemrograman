<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\RoadmapConnection as Connection;
use App\Models\Node;
use Livewire\Attributes\On;

class RoadmapConnections extends Component
{
    public $roadmap;
    public $source = '';
    public $target = '';
    public $connections = [];
    public $nodes = [];

    public function mount($roadmap)
    {
        $this->roadmap = $roadmap;
        $this->refreshConnections();
        $this->refreshNodes();
    }

    public function refreshConnections()
    {
        $this->connections = Connection::where('roadmap_id', $this->roadmap->id)->get();
    }

    public function refreshNodes()
    {
        $this->nodes = Node::where('roadmap_id', $this->roadmap->id)->get();
    }

    public function save()
    {
        $this->validate([
            'source' => 'required',
            'target' => 'required|different:source',
        ]);

        Connection::create([
            'roadmap_id' => $this->roadmap->id,
            'source' => $this->source,
            'target' => $this->target,
        ]);

        $this->reset(['source', 'target']);
        $this->refreshConnections();

        // Dispatch event to update Mermaid diagram
        $this->dispatch('connectionsUpdated');

        // Close modal
        $this->dispatch('close-modal', ['id' => 'konekmodal']);
    }

    public function delete($connectionId)
    {
        $connection = Connection::find($connectionId);
        if ($connection) {
            $connection->delete();
            $this->refreshConnections();

            // Dispatch event to update Mermaid diagram
            $this->dispatch('connectionsUpdated');
        }
    }

    #[On('nodesUpdated')]
    public function handleNodesUpdated()
    {
        // Refresh nodes list for select dropdowns
        $this->refreshNodes();
    }

    public function render()
    {
        return view('livewire.roadmap-connections');
    }
}
