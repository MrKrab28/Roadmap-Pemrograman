@script
    <script type="module">
        document.addEventListener('DOMContentLoaded', () => {
            renderDiagram($wire.mermaidData);
            // renderDiagram(@json($mermaidData));
        })

        $wire.on('mermaidUpdated', () => {
            renderDiagram($wire.mermaidData);
        })

        const renderDiagram = async (isinya) => {
            const {
                svg
            } = await mermaid.render("diagram", isinya);


            document.getElementById("roadmapnya").innerHTML = svg;
        }
    </script>
@endscript

<div>
    <div class="card">
        <div class="card-body">
            <div>
                <div id="roadmapnya"></div>
            </div>
        </div>
    </div>
</div>
