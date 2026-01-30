import { defineConfig } from 'vite'
import path from 'path'

export default defineConfig({
  root: 'src',

  css: {
    devSourcemap: true,
    preprocessorOptions: {
      scss: {
        additionalData: `@use "sass:math";`
      }
    }
  },

  build: {
    outDir: '../dist',
    emptyOutDir: true,
    manifest: true,
    rollupOptions: {
      input: {
        main: path.resolve(__dirname, 'src/js/main.js'),
        style: path.resolve(__dirname, 'src/scss/style.scss')
      }
    }
  },

  server: {
    host: 'localhost',
    port: 5173,
    strictPort: true,
    cors: true,
    origin: 'http://kerigma.test'
  }
})

