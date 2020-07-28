const path = require('path');
const TerserJSPlugin = require('terser-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const OptimizeCssAssetsPlugin = require('optimize-css-assets-webpack-plugin')
const ManifestPlugin = require('webpack-manifest-plugin');
const PurgecssPlugin = require('purgecss-webpack-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const WebpackShellPlugin = require('webpack-shell-plugin-next');
const ExtraWatchWebpackPlugin = require('extra-watch-webpack-plugin');
const glob = require('glob-all');
require("dotenv-json")();

const public = path.resolve(__dirname, 'public/assets/admin');
const resources = path.resolve(__dirname, 'resources/admin');
const templates = path.resolve(__dirname, 'templates/admin');
const host = process.env.host;
const certs = process.env.home + '/.valet/Certificates/';

const cssContent = [
  path.resolve(__dirname, 'templates/admin.html.twig'),
  path.resolve(__dirname, templates + '/*.html.twig'),
  path.resolve(__dirname, 'node_modules/bootstrap/js/src/*.js'),
];

const cssWhitelistPatterns = [
];

module.exports = {
  entry: {
    vendor: resources + '/js/vendor.js',
    app: resources + '/js/app.js',
    fonts: resources + '/js/fonts.js'
  },
  output: {
    filename: '[name].js?v=[chunkhash]',
    path: public,
    publicPath: '/assets/admin/'
  },
  mode: 'production',
  watch: true,
  watchOptions: {
    ignored: ['files/**/*.js', 'node_modules']
  },
  resolve: {
    extensions: ['.js'],
    alias: {
      'jquery': 'jquery/dist/jquery.slim.js',
    }
  },
  optimization: {
    minimizer: [
      new TerserJSPlugin({}),
      new OptimizeCssAssetsPlugin({})
    ]
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: '[name].css?v=[chunkhash]',
    }),
    new PurgecssPlugin({
      paths: () => glob.sync(cssContent),
      only: ['vendor', 'app', 'fonts'],
      whitelistPatterns: cssWhitelistPatterns
    }),
    new ManifestPlugin({
      fileName: 'manifest.json',
    }),
    new BrowserSyncPlugin({
      host: 'localhost',
      open: false,
      port: 3000,
      proxy: 'https://' + host,
      https: {
        key: certs + host + '.key',
        cert: certs + host + '.crt'
      },
    }),
    new WebpackShellPlugin({
      onBuildExit: {
        scripts: [
          // execute command line scripts here.
        ]
      },
      dev: false
    }),
    new ExtraWatchWebpackPlugin({
      files: [
        // eg. app + '/**/*.php',
      ],
    })
  ],
  module: {
    rules: [
      {
        test: /\.(sa|sc|c)ss$/i,
        use: [
          {
            loader: MiniCssExtractPlugin.loader,
          },
          'css-loader',
          'sass-loader'
        ]
      },
      {
        test: /\.(eot|ttf|woff|woff2)$/i,
        loader: 'file-loader',
      },
      {
        test: /\.js$/i,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader'
        }
      }
    ]
  }
};
