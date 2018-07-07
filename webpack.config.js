const ExtractTextPlugin = require('mini-css-extract-plugin');

module.exports = {
  devtool: 'source-map',

  entry: {
    main: [
      './css/bulma.css',
      './css/syntax.css',
      './css/style.css'
    ],
  },

  output: {
    path: __dirname + '',
  },


  module: {
    rules: [
      {
        test: /\.css$/,
        use: [
                ExtractTextPlugin.loader,
                "css-loader",
            ]
      }
    ]
  },

  plugins: [
    new ExtractTextPlugin({filename: 'css/application.css'}),
  ],

  mode: "none",
};

