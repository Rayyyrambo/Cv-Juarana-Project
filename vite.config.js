import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            input: ['resources/css/modal.js', 'resources/js/modal.js'],
            input: ['resources/css/dataModal.js', 'resources/js/dataModal.js'],
            input: ['resources/css/dataModal.js', 'resources/js/admin/admin.js'],
            refresh: true,
        }),
    ],
});
