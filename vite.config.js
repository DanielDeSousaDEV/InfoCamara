import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js',
                'resources/js/home.js',
                'resources/js/datatables.js',
                'resources/js/waiting.js',
                'resources/js/bootstrap.js',
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        host: process.env.VITE_HOST || '0.0.0.0',
        port: Number(process.env.VITE_PORT) || 5173,
        origin: process.env.VITE_URL || 'http://localhost:5173',
    },
});
