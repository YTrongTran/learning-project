import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

// export default defineConfig({
//     plugins: [
//         laravel({
//             input: ['resources/css/app.css', 'resources/js/app.js'],
//             refresh: true,
//         }),
//     ],
// });

export default defineConfig({
    base: '/',
    plugins: [laravel(['resources/js/app.js'])],
    server: {
        host: '0.0.0.0',
        hmr: {
            protocol: 'wss', // Fix WebSocket Secure khi dùng HTTPS
            host: process.env.RAILWAY_STATIC_URL
        }
    },
    build: {
        outDir: 'public/build',
        assetsDir: 'assets'
    }
});


