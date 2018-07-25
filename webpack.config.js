const ExtractTextPlugin = require('mini-css-extract-plugin');

module.exports = {
  devtool: 'source-map',

  entry: {
    main: [
      './css/bulma.css',
      './css/syntax.css',
      './css/style.css',
      './js/burger_menue_navigation.js',
      './js/main.js',
      './js/hotjar_tracking.js'
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
      },
      {
        test: /\.js$/,
        use: [
                "babel-loader"
            ]
        }
    ]
  },

  plugins: [
    new ExtractTextPlugin({filename: 'css/application.css'}),
  ],

  mode: "none",
};

