import tailwindcss from '@tailwindcss/vite';
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import collectModuleAssetsPaths from './vite-module-loader.js';

async function getConfig() {
    const paths = [
        'Modules/Ppdb/resources/assets/js/app.js',
        'Modules/Auth/resources/assets/js/app.js',
        'resources/css/app.css',
        'resources/js/app.js',
    ];
    const allPaths = await collectModuleAssetsPaths(paths, 'Modules');

    return defineConfig({
        plugins: [
            laravel({
                input: allPaths,
                refresh: true,
            }),
            tailwindcss(),
        ]
    });
}

export default getConfig();