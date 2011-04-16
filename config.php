<?php 

/*
 * directory structure:
 * + coscup.org
 * |- 2011 - main website
 * |- 2011-theme - theme
 * |+ deploy - deploy script (cwd)
 *  |- marksite - marksite script
 *  |- src - content source
 *  |- tmp - temporary output
 */

define('TRANSLATE_KEY', 'AIzaSyCbZgdwUALL5e6UCj8jN2kJ0zBtfQTuzsM');
define('SPONSOR_LIST_KEY', '0AtZAnc7MwjgldFRIVW9SNEV1dVBfNmhDUGZBRml1SEE');

$marksite_path = "marksite/";
$theme_path = "../2011-theme/";
$src_path = "src/";
$tmp_path = "tmp/";
$website_path = "../2011-beta/";

$sponsors_output = array(
	"sidebar" => array(
		"zh-tw" => "src/blocks/sponsors-zh-tw.md",
		"zh-cn" => "src/blocks/sponsors-zh-cn.md",
		"en" => "src/blocks/sponsors.md"
	),
	"page" => array(
		"zh-tw" => "src/zh-tw/sponsors/index.md",
		"zh-cn" => "src/zh-cn/sponsors/index.md",
		"en" => "src/en/sponsors/index.md"
	)
);

$json_output = array(
	"menu" => "src/api/menu/menu.json.js",
	"sponsors" => "src/api/sponsors/sponsors.json.js",
	"program" => "src/api/program/program.json.js"
);



