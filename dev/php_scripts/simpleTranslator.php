<?php
class Translator {
	public $langStrings = array();
	public $lang = 'en';

	public function __construct() {
		if (isset($_COOKIE["lang"]) && file_exists((dirname(__FILE__) . DIRECTORY_SEPARATOR . 'langFiles' . DIRECTORY_SEPARATOR . $_COOKIE["lang"] . '.php'))) {
			$this->lang = $_COOKIE["lang"];
		}

		setcookie("lang", $this->lang, time() + 60 * 60 * 24 * 7);

		$langFilePath = "langFiles" . DIRECTORY_SEPARATOR . "$this->lang.php";
		if (file_exists(dirname(__FILE__) . DIRECTORY_SEPARATOR . $langFilePath)) {
			require_once($langFilePath);
			if (isset($langStrings)) {
				$this->langStrings = $langStrings;
			}
		}
	}

	public function getTranslation($str) {
		if (array_key_exists($str, $this->langStrings)) {
			return $this->langStrings[$str];
		}
		return $str;
	}
}
?>
