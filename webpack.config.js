const webpack = require('webpack');

module.exports = require('laravel-bundler')({
        entry: {
            app: './resources/js/app.js',
        },
        plugins: [
            //
        ],
        // Other webpack configs may go here
    },
    require('laravel-bundler/src/recipes/alias.js'),
    require('laravel-bundler/src/recipes/vue-2.js')
);