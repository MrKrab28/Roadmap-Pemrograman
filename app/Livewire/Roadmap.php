<?php

namespace App\Livewire;

use App\Models\Node;
use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\RoadmapConnection;
use App\Models\Roadmap as RoadmapModel;

class Roadmap extends Component
{
    public $roadmap;
    public $roadmapId;
    public $mermaidData;

    public function mount($roadmapId)
    {
        $this->roadmapId = $roadmapId;
        $this->roadmap = RoadmapModel::findOrFail($roadmapId);
        $this->refreshMermaidData();
    }

    #[On('nodeUpdated'), On('connectionUpdated')]
    public function refreshMermaidData()
    {
        // Get nodes and connections from database
        $nodes = Node::where('roadmap_id', $this->roadmapId)->get();
        $connections = RoadmapConnection::where('roadmap_id', $this->roadmapId)->get();

        $diagram = "graph TD;\n";

        // Add nodes using kode as identifier
        foreach ($nodes as $node) {
            $diagram .= "    {$node->kode}[\"{$node->label}\"]\n";
        }

        // Add connections
        foreach ($connections as $connection) {
            $diagram .= "    {$connection->source} --> {$connection->target}\n";
        }
        $diagram .= "classDef node fill:#29b6f6,stroke:#000,stroke-width:1px, rx:10px,ry:10px,color:#fff;\n";  // Styling untuk node
        // $diagram .= "class A,B,C,D node;\n";
        $diagram .= "linkStyle default stroke:#fff,stroke-width:2px;\n";

        $this->mermaidData = $diagram;
        $this->dispatch('mermaidUpdated');
    }

    public function render()
    {
        return view('livewire.roadmap');
    }
}
