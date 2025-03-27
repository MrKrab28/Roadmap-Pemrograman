@props(['id', 'name', 'value' => ''])

<input type="hidden" name="{{ $name }}" id="{{ $id }}_input" value="{{ $value }}" />

<trix-toolbar class="[&_.trix-button]:bg-white [&_.trix-button.trix-active]:bg-gray-300"
    id="{{ $id }}_toolbar"></trix-toolbar>

<trix-editor id="{{ $id }}" toolbar="{{ $id }}_toolbar" input="{{ $id }}_input"
    {{ $attributes->merge([
        'class' => 'max-w-full max-h-[500px] trix-content border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300
                focus:ring-1 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600
                rounded-md shadow-sm dark:[&_pre]:!bg-gray-700 dark:[&_pre]:rounded dark:[&_pre]:!text-white overflow-auto bg-white text-black',
    ]) }}></trix-editor>
<style>
    /* Mengubah warna untuk teks yang di-bold */
    trix-editor b,
    trix-editor strong {
        color: #000000;
        /* Warna tomat */
    }

    /* Mengubah warna untuk teks yang di-italic */
    trix-editor em,
    trix-editor i {
        color: #000000;
        /* Warna hijau limau */
    }

    /* Mengubah warna untuk teks yang di-underline */
    trix-editor u {
        color: #1E90FF;
        /* Warna biru terang */
    }

    trix-editor pre {
        background-color: #000000;
        /* Latar belakang gelap */
        color: #1b1a1a;
        /* Warna teks putih */
        padding: 10px;
        border-radius: 4px;
        font-family: 'Courier New', Courier, monospace;
        /* Font monospace */
    }

    trix-editor code {
        background-color: #2E2E2E;
        color: #f7f3f2;
        /* Warna teks kode */
        font-size: 1.1rem;
    }

    trix-editor heading {
        color: #000000;
        /* Warna hitam */
    }
</style>
