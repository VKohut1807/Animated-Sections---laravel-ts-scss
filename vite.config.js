import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import path from "path";

const filesStyle = [
  './resources/scss/global/index.scss',
  './resources/scss/layouts/home.scss',
  './resources/scss/layouts/section-1.scss',
  './resources/scss/layouts/section-2.scss',
  './resources/scss/layouts/section-3.scss',
  './resources/scss/layouts/section-4.scss',
  './resources/scss/layouts/section-5.scss',
  './resources/scss/layouts/section-6.scss',
  './resources/scss/layouts/section-7.scss',
  './resources/scss/layouts/section-8.scss',
  './resources/scss/layouts/section-9.scss',
  './resources/scss/layouts/section-10.scss',
  './resources/scss/layouts/section-11.scss',
  './resources/scss/layouts/section-12.scss',
  './resources/scss/layouts/section-13.scss',
  './resources/scss/layouts/section-14.scss',
];
const filesTs = [
  './resources/ts/components/navigationDrawers.ts',
  './resources/ts/partials/breadcrumbs.ts',
  './resources/ts/layouts/section-2.ts',
  './resources/ts/layouts/section-7.ts',
  './resources/ts/layouts/section-8.ts',
  './resources/ts/layouts/section-11.ts',
];

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
