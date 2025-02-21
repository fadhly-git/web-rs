import react from '@vitejs/plugin-react';
import laravel from 'laravel-vite-plugin';
import { defineConfig } from 'vite';

export default defineConfig({
    plugins: [
        laravel({
            input: 'resources/js/app.jsx',
            ssr: 'resources/js/ssr.jsx',
            refresh: true,
        }),
        react(),
    ],
    server: {
        cors: true, // Mengizinkan CORS
        host: '100.66.48.65',
        port: 5173,
        hmr: {
            host: '100.66.48.65',
        },
        strictPort: true,
    },
});
