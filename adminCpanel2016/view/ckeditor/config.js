/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	// config.allowedContent = 'true'
	config.filebrowserBrowseUrl = '/admin/view/kcfinder/browse.php?opener=ckeditor&type=files';
   config.filebrowserImageBrowseUrl = '/admin/view/kcfinder/browse.php?opener=ckeditor&type=images';
   config.filebrowserFlashBrowseUrl = '/admin/view/kcfinder/browse.php?opener=ckeditor&type=flash';
   config.filebrowserUploadUrl = '/admin/view/kcfinder/upload.php?opener=ckeditor&type=files';
   config.filebrowserImageUploadUrl = '/admin/view/kcfinder/upload.php?opener=ckeditor&type=images';
   config.filebrowserFlashUploadUrl = '/admin/view/kcfinder/upload.php?opener=ckeditor&type=flash';
};
