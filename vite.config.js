import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
// di file utama seperti vite.config.js atau index.js



export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
