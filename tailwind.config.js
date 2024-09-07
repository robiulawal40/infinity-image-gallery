
let pluginFolder = null;
process.argv.forEach(function (val, index, array) {
  console.log(index + ': ' + val);
	if( val.includes("--pluginName=") ){
		pluginFolder = "./plugins/"+val.replace("--pluginName=", "");
	}
});
if(pluginFolder){
	console.log("Plugin Folder:", pluginFolder);
module.exports = {
	content: [
		pluginFolder+'/**/*.php',
		pluginFolder+'/src/**/*.js',
		pluginFolder+'/src/**/*.html',
		pluginFolder+'/*.html',
		pluginFolder+'/index.html',
	],
};
}else{
	console.log('No plugin folder found');
	module.exports =  {
		content: [
			'templates/**/*.php',
			'templates/src/**/*.js',
			'templates/src/**/*.html',
			'templates/*.html',
			'templates/index.html',
		],
	};
}
