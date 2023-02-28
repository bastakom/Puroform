const urlapi = require('url');
const siteUrl = 'http://puro.dev-bk.loc/', // example `http://site-url.com/`
	themeName = 'wp-amigo'; // example `project-name`
const URL = urlapi.parse(siteUrl);

module.exports = {
	"files": ["assets/css/*.css","*.php", "parts/**/*.php", "templates/*.php", "assets/js/global.js"],
	"proxy": siteUrl,
	"reloadDelay": 1000,
	"serveStatic": ["./"],

	rewriteRules: [
		{
			match: new RegExp( URL.path.substr(1) + "wp-content/themes/" + themeName + "/assets/css" ),
			fn: function () {
				return "assets/css"
			}
		},
		{
			match: new RegExp( URL.path.substr(1) + "wp-content/themes/" + themeName + "/assets/css/custom.css" ),
			fn: function () {
				return "assets/css/custom.css"
			}
		},
		{
			match: /AIzaSyBgg23TIs_tBSpNQa8RC0b7fuV4SOVN840/g,
			replace: "AIzaSyAZteVk16ICKxgLgH87g1D0nnG5_bC2xPI"
		}
	],
};
