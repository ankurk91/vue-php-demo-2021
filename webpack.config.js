const webpack = require('webpack');
const NodePolyfillPlugin = require("node-polyfill-webpack-plugin");

module.exports = require('laravel-bundler')({
        entry: {
            app: './resources/js/app.js',
        },
        plugins: [
            new NodePolyfillPlugin(),
        ],
        // Other webpack configs may go here
    },
    require('laravel-bundler/src/recipes/alias.js'),
    require('laravel-bundler/src/recipes/vue-2.js')
);