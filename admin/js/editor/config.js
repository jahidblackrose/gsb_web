/**
 * @license Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.extraPlugins = 'html5video';
	config.extraPlugins = 'widget';
	config.extraPlugins = 'youtube';

	config.youtube_width = '640';
	config.youtube_height = '480';
	config.youtube_responsive = true;
	config.youtube_related = true;
	config.youtube_older = false;
	config.youtube_privacy = false;
	config.youtube_autoplay = false;
	config.youtube_controls = true;
	




};
