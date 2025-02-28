import react from '@vitejs/plugin-react';
import { config } from 'dotenv';
import laravel from 'laravel-vite-plugin';
import { defineConfig } from 'vite';

config();

const { VITE_HOST, VITE_PORT } = process.env;

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
        host: 'localhost',
        port: VITE_PORT || 3000,
        hmr: {
            host: VITE_HOST || 'localhost',
        },
        strictPort: true,
    },
});
