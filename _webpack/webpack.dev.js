const path = require('path')
const webpack = require('webpack')
const merge = require('webpack-merge')
const common = require('./webpack.common')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')

module.exports = merge(common, {
  mode: 'development',
  output: {
    filename: 'scripts/[name].bundle.js',
    path: path.resolve(__dirname, '../assets/')
  },
  plugins: [
    new MiniCssExtractPlugin({ filename: 'styles/[name].css' }),
    new webpack.ProgressPlugin()
  ],
  module: {
    rules: [
      {
        test: /\.(sa|sc|c)ss$/,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          'sass-loader'
        ]
      }
    ]
  }
})
