const { src, dest, series } = require("gulp");

// use a different version of webpack than the one webpack-stream uses
const compiler = require("webpack");

// run webpack as a stream to conveniently integrate with gulp.
const webpack = require("webpack-stream");

//
const concat = require("gulp-concat");

// eslint
const eslint = require("gulp-eslint");

// webpack module
const webpackModule = {
  rules: [
    {
      test: /\.(js)$/,
      exclude: /(node_modules|bower_components)/,
      use: {
        loader: "babel-loader",
        options: {
          // babelrc: false,
          presets: ["@babel/preset-env"],
        },
      },
    },
  ],
};

function buildScripts() {
  return src(["./build/scripts/app.js"])
    .pipe(
      webpack(
        {
          mode: process.env.NODE_ENV || "production",
          devtool: "source-map",
          watch: false,
          output: {
            filename: "app.js",
          },
          module: webpackModule,
        },
        compiler
      )
    )
    .pipe(dest("./dist/scripts"));
}

function combineVendorScripts() {
  return src([
    "./build/scripts/vendors/flickity.pkgd.min.js",
    "./build/scripts/vendors/noframework.waypoints.min.js",
  ])
    .pipe(concat("vendor.js"))
    .pipe(dest("./dist/scripts"));
}

function lintScripts() {
  return src("./build/scripts/**/*.js")
    .pipe(eslint({ configFile: ".eslintrc.json", useEslintrc: true }))
    .pipe(eslint.format());
  // .pipe(eslint.failAfterError());
}

module.exports = {
  buildScripts,
  combineVendorScripts,
  // lintScripts,
};
