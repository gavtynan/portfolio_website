import { defineConfig } from "vite";
import vue from "@vitejs/plugin-vue";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/js/app.js", "resources/css/app.css"],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve: {
        alias: {
            vue: "vue/dist/vue.esm-bundler.js",
        },
    },
    server: {
        port: 5173,
        hmr: {
            host: "localhost",
        },
    },
    build: {
        // Output to 'public/js' and 'public/css' directories
        rollupOptions: {
            output: {
                // Define where JS files will go
                entryFileNames: "js/[name].js",
                chunkFileNames: "js/[name].js",
                assetFileNames: ({ name }) => {
                    if (name && name.endsWith(".css")) {
                        // Define where CSS files will go
                        return "css/[name].css";
                    }
                    return "assets/[name][extname]";
                },
            },
        },
        outDir: "public", // Ensure output goes to the public directory
        emptyOutDir: false, // Clear previous builds
        manifest: true, // Enable manifest generation
    },
    manifest: {
        fileName: "manifest.json", // Name of the manifest file
        outDir: "public/build", // Set manifest to output in 'public/build'
    },
});
