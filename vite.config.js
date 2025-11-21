<<<<<<< HEAD
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
=======
import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import path from "path";

const filesStyle = [
    './resources/scss/layouts/section-13.scss'
];
const filesTs = [];
>>>>>>> f9a9859 (feat:add-project)

export default defineConfig({
    plugins: [
        laravel({
            input: [...filesStyle, ...filesTs],
            refresh: true,
        }),
    ],
<<<<<<< HEAD
>>>>>>> 1d53d9c (feat:add-docker)
=======
    resolve: {
        alias: {
            "@": path.resolve(__dirname, "./resources"),
            "@scss": path.resolve(__dirname, "./resources/scss"),
        },
    },
>>>>>>> f9a9859 (feat:add-project)
});
