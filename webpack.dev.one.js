const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const merge = require('webpack-merge');
const common = require('./webpack.common.js');

const stagingDomain = "https://devon.missionmike.dev";

common.plugins.push(
	new BrowserSyncPlugin({
		proxy: {
			target: stagingDomain
		},
		port: 3006,
		files: [
			'**/*.php'
		],
		open: false,
		injectChanges: true,
		logFileChanges: true,
		logLevel: 'debug',
		logPrefix: 'wepback',
		notify: true,
		reloadDelay: 0
	})
);

// module.exports = common;

module.exports = merge(common, {
	mode: 'development',
	devtool: 'inline-source-map',
	devServer: {
		contentBase: './assets/public'
	}
});