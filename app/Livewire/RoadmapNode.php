<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Node;
use App\Models\RoadmapConnection;

class RoadmapNode extends Component
{
    public $roadmapId;
    public $kode;
    public $label;
    public $nodes = [];

    protected $rules = [
        'kode' => 'required|string|max:255|unique:nodes,kode',
        'label' => 'required|string|max:255',
    ];

    public function mount($roadmapId)
    {
        $this->roadmapId = $roadmapId;
        $this->loadNodes();
    }

    public function loadNodes()
    {
        $this->nodes = Node::where('roadmap_id', $this->roadmapId)->get();
    }

    public function saveNode()
    {
        $this->validate();

        Node::create([
            'kode' => $this->kode,
            'label' => $this->label,
            'roadmap_id' => $this->roadmapId,
        ]);

        $this->reset(['kode', 'label']);
        $this->loadNodes();

        // Emit event to parent component
        $this->dispatch('nodeUpdated');
    }

    public function deleteNode($nodeId)
    {
        // Check if there are any connections using this node as source or target
        $connectionCount = RoadmapConnection::where('source', $nodeId)
            ->orWhere('target', $nodeId)
            ->count();

        if ($connectionCount > 0) {
            // If there are connections, flash an error message
            session()->flash('error', 'Cannot delete node. Please remove all connections using this node first.');
            $this->loadNodes();
        } else {
            // Find the node by its ID
            $node = Node::find($nodeId);

            if ($node) {
                // Delete the node
                $node->delete();

                // Flash success message
                session()->flash('success', 'Node deleted successfully.');

                // Reload the nodes
                $this->loadNodes();

                // Emit events to refresh UI
                $this->dispatch('nodeUpdated');
            } else {
                // Handle case when node is not found
                session()->flash('error', 'Node not found.');
            }
        }
    }
    public function render()
    {
        return view('livewire.roadmap-node');
    }
}
