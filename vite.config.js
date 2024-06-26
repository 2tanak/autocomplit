import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    server: {
       host: true,
        strictPort: true,
        origin: 'http://localhost:5173',
        port:5173,
        hmr: {
        host: 'localhost',
       },
     watch: {
        usePolling: true
    },
  },
    plugins: [
        vue(),
        laravel({
            input: ['resources/sass/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
   resolve: {
        alias: {
            vue: "vue/dist/vue.esm-bundler.js",
        },
    },
});