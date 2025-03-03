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
    plugins: [laravel(['resources/js/app.js'])],
    server: {
        host: '0.0.0.0',
        hmr: {
            host: process.env.RAILWAY_STATIC_URL, // Fix HMR khi deploy
        }
    },
    build: {
        outDir: 'public/build', // Đảm bảo build vào thư mục public/build
    }
});

