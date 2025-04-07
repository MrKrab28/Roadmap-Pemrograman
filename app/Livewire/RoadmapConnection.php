<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\RoadmapConnection as Connection;
use App\Models\Node;
use Livewire\Attributes\On;

class RoadmapConnection extends Component
{
    public $roadmapId;
    public $source;
    public $target;
    public $connections = [];
    public $availableNodes = [];

    protected $rules = [
        'source' => 'required|exists:nodes,kode',
        'target' => 'required|exists:nodes,kode|different:source',
    ];

    public function mount($roadmapId)
    {
        $this->roadmapId = $roadmapId;
        $this->loadConnections();
        $this->loadNodes();
    }

    public function loadConnections()
    {
        $this->connections = Connection::where('roadmap_id', $this->roadmapId)
            ->get();
    }

    #[On('nodeUpdated')]
    public function loadNodes()
    {
        $this->availableNodes = Node::where('roadmap_id', $this->roadmapId)->get();
    }

    public function saveConnection()
    {
        $this->validate();

        Connection::create([
            'roadmap_id' => $this->roadmapId,
            'source' => $this->source,
            'target' => $this->target,
        ]);

        $this->reset(['source', 'target']);
        $this->loadConnections();

        // Emit event to parent component
        $this->dispatch('connectionUpdated');
    }
    public function deleteConnection($connectionId)
    {
        // Find the connection by its ID
        $connection = Connection::find($connectionId);

        if ($connection) {
            // Delete the connection
            $connection->delete();

            // Optionally, flash a success message
            session()->flash('success', 'Connection deleted successfully.');

            // Reload connections after deletion
            $this->loadConnections();

            // Emit events to refresh the UI
            $this->dispatch('connectionUpdated');
        } else {
            // Handle case when connection doesn't exist
            session()->flash('error', 'Connection not found.');
        }
    }
    public function render()
    {
        return view('livewire.roadmap-connection', [
            'availableNodes' => $this->availableNodes
        ]);
    }
}
