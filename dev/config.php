<?php

/*
 * v0.0.1
 *
 * Last edit by Ömer KALA (kalaomer@hotmail.com)
 * PPAC configration file.
 * All configrations are in this file.
 */

$config["php_modules"] = array(
	/*
	 * Public folder settings.
	 */
	"public" => array(
		/*
		 * When searching module, add module pool first for seaching.
		 */
		"addFirst" => false,
		/*
		 *	Public php module folder path.
		 */
		"path" => PPAC_ROOT . "php_modules" . DS
	),

	/*
	 * Private folder settings.
	 */
	"private" => array(
		/*
		 *	Folder name which folder that ise module folder is in there.
		 */
		"folderName" => "php_modules",

		/*
		 * No settings for Module now :(
		 */
		"module" => array(
			
		)
	),

	"common" => array(
		"module" => array(
			/*
			 * Module settings file name.
			 * This is very sensitive opition! So be careful!
			 */
			"settingsFileName" => "package.json",
			/*
			 * If module(or module file) added and request is want to add again...
			 * This is very sensitive opition! So be careful!
			 */
			"reloadable" => false,
			/*
			 * When require some file, add() function return require's return value.
			 * This is very sensitive opition! So be careful!
			 */
			"returnRequire" => false,
			/*
			 * When Class isn't added and need it, Add Class automaticly..
			 * This is very sensitive opition! So be careful!
			 */
			"autoLoadClass" => true,
			/*
			 * If Module's Settings File doesn't have main file value, use this default.
			 */
			"mainFile" => "index.php"
		)
	)
);

return $config;
