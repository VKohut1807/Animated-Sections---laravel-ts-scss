import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import path from "path";

const filesStyle = [
  // './resources/scss/global/index.scss',
  // './resources/scss/layouts/section-13.scss'
];
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
});
