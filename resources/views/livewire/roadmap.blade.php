<div>
    <div wire:ignore class="mermaid-container">
        <div class="mermaid">
            {!! $mermaidData !!}
        </div>
    </div>

    <script>
        document.addEventListener('livewire:initialized', () => {
            // Fungsi untuk me-render diagram Mermaid
            function renderMermaid() {
                if (typeof mermaid !== 'undefined') {
                    try {
                        // Reset diagram sebelum merender ulang
                        document.querySelectorAll('.mermaid').forEach(el => {
                            if (el.hasAttribute('data-processed')) {
                                el.removeAttribute('data-processed');
                            }
                        });

                        // Re-initialize
                        mermaid.init(undefined, document.querySelectorAll('.mermaid'));
                    } catch (e) {
                        console.error('Error rendering Mermaid:', e);
                    }
                }
            }

            // Render awal
            renderMermaid();

            // Render ulang saat ada perubahan data
            @this.on('$refresh', () => {
                // Sedikit penundaan untuk memastikan DOM sudah diperbarui
                setTimeout(renderMermaid, 50);
            });
        });
    </script>
</div>
