import { defineConfig } from 'vite';
import vue from "@vitejs/plugin-vue";
import laravel from 'laravel-vite-plugin';
import { viteCommonjs } from '@originjs/vite-plugin-commonjs'

export default defineConfig({
    plugins: [
        vue(),
        viteCommonjs(),
        laravel([
            'resources/js/app.js',
            'resources/sass/app.scss'
        ]),
    ],
    resolve: {
        alias: {
            '~': '/resources/js',
        },
    },
});
