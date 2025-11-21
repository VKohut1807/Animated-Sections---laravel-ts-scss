<<<<<<< HEAD
import {defineConfig} from "vite";
import laravel from "laravel-vite-plugin";
import path from "path";

const filesStyle = [];
const filesTs = [];

export default defineConfig({
  plugins: [
    laravel({
      input: [...filesStyle, ...filesTs],
      refresh: true,
    }),
  ],
  resolve: {
    alias: {
      "@": path.resolve(__dirname, "./resources"),
      "@scss": path.resolve(__dirname, "./resources/scss"),
    },
  },
=======
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
>>>>>>> 1d53d9c (feat:add-docker)
});
