// Script untuk memastikan Mermaid terus berfungsi dengan Livewire
document.addEventListener("livewire:initialized", function () {
    // Konfigurasi Mermaid global
    if (typeof mermaid !== "undefined") {
        mermaid.initialize({
            startOnLoad: false,
            theme: "default",
            securityLevel: "loose",
        });
    }

    // Fungsi untuk merender diagram Mermaid
    window.renderMermaidDiagrams = function () {
        if (typeof mermaid !== "undefined") {
            try {
                // Reset dan hapus atribut data-processed untuk memaksa render ulang
                document.querySelectorAll(".mermaid").forEach((el) => {
                    if (el.hasAttribute("data-processed")) {
                        el.removeAttribute("data-processed");
                    }
                });

                // Re-initialize
                mermaid.init(undefined, document.querySelectorAll(".mermaid"));
            } catch (e) {
                console.error("Error rendering Mermaid:", e);
            }
        }
    };

    // Render saat awal load
    setTimeout(window.renderMermaidDiagrams, 300);

    // Render ulang setiap ada update pada diagram
    Livewire.hook("morph.updated", function () {
        setTimeout(window.renderMermaidDiagrams, 300);
    });

    // Mendengarkan event Livewire spesifik untuk update
    Livewire.on("nodesUpdated", function () {
        setTimeout(window.renderMermaidDiagrams, 300);
    });

    Livewire.on("connectionsUpdated", function () {
        setTimeout(window.renderMermaidDiagrams, 300);
    });
});
