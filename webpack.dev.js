const BrowserSyncPlugin = require("browser-sync-webpack-plugin");
const merge = require("webpack-merge");
const common = require("./webpack.common.js");

/**
 * Set default domain value
 */
let domain = "http://localhost";

/**
 * Loop over arguments passed to 'npm run watch -- --foo=bar'
 */
process.argv.map((val, i) => {
  /**
   * If --domain= found, get value and set domain
   */
  if (val.includes(`--domain=`)) {
    let domainArr = val.split(`=`);
    domain = domainArr[1];
  }
});

common.plugins.push(
  //  https://www.browsersync.io/docs/options
  new BrowserSyncPlugin({
    proxy: {
      target: domain, // Set domain to serve from
    },
    port: 3006, // Change this to any available port of preference
    files: ["**/*.php"], // Set preferred files to watch
    open: false,
    injectChanges: true,
    logFileChanges: true,
    logLevel: "debug",
    logPrefix: "wepback",
    notify: true,
    reloadDelay: 0,
  })
);

module.exports = merge(common, {
  mode: "development",
  devtool: "inline-source-map",
  devServer: {
    contentBase: "./assets/public",
  },
});
