<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Node;
use App\Models\RoadmapConnection as Connection;
use Livewire\Attributes\On;

class Roadmap extends Component
{
    public $roadmap;
    public $mermaidData;

    // Perhatikan: Tidak menggunakan polling
    // tetapi menggunakan event listener untuk update

    public function mount($roadmap)
    {
        $this->roadmap = $roadmap;
        $this->generateMermaidData();
    }

    public function generateMermaidData()
    {
        $nodes = Node::where('roadmap_id', $this->roadmap->id)->get();
        $connections = Connection::where('roadmap_id', $this->roadmap->id)->get();

        $mermaidCode = "flowchart TD\n";

        // Add nodes with quotes around labels to handle special characters
        foreach ($nodes as $node) {
            $mermaidCode .= "    {$node->kode}[\"{$node->label}\"]\n";
        }

        // Add connections
        foreach ($connections as $connection) {
            $mermaidCode .= "    {$connection->source} --> {$connection->target}\n";
        }

        $this->mermaidData = $mermaidCode;
    }

    #[On('nodesUpdated')]
    #[On('connectionsUpdated')]
    public function handleDataUpdated()
    {
        $this->generateMermaidData();
    }

    public function render()
    {
        return view('livewire.roadmap');
    }
}
