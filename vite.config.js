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
});
