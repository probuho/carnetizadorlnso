import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '@': path.resolve(__dirname, './src'),
            'bootstrap': path.resolve(__dirname, 'node_modules/bootstrap')
        }
    },
    server: {
        proxy: {
            '/': {
                target: 'http://127.0.0.1:8000',
                changeOrigin: true,
                secure: false,
                ws: true,
            },
        },
    },
});


