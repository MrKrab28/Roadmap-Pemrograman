import "./libs/trix";
import './bootstrap';
import '../css/app.css';
import 'trix';
import './jquery';

import mermaid from 'mermaid';

mermaid.initialize({
    startOnLoad: true
});

window.mermaid = mermaid;

