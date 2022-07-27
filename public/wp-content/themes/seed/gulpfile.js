const browserSync = require("browser-sync").create();
const del = require("del");
const { series, parallel, watch } = require("gulp");
const { buildScripts, combineVendorScripts } = require("./gulp/tasks/scripts");
const { buildStyles } = require("./gulp/tasks/styles");

/**
 * BrowserSync
 */
const serve = () => {
  browserSync.init({
    proxy: "https://seed.lndo.site",
  });
};

/**
 * Clean dist folder
 */
const clean = () => del(["./dist/styles", "./dist/scripts"]);
const cleanStyles = () => del(["./dist/styles"]);
const cleanScripts = () => del(["./dist/scripts"]);

/**
 * Watch
 */
const watchStyles = () => {
  watch("./build/styles/**/*.scss")
    .on("change", series(buildStyles, browserSync.reload))
    .on("unlink", series(cleanStyles, buildStyles, browserSync.reload));
};

const watchScripts = () => {
  watch("./build/scripts/**/*.js")
    .on(
      "change",
      series(buildScripts, browserSync.reload)
    )
    .on(
      "unlink",
      series(
        cleanScripts,
        buildScripts,
        combineVendorScripts,
        browserSync.reload
      )
    );
};

/**
 * Build
 */
const dev = series(
  clean,
  parallel(buildStyles, buildScripts, combineVendorScripts),
  parallel(serve, watchStyles, watchScripts)
);

const prod = series(
  clean,
  parallel(
    buildScripts,
    combineVendorScripts,
    buildStyles
  )
);

/**
 * Export
 */
module.exports = {
  dev,
  prod,
};

exports.default = prod;
