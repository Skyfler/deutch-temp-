<?php
    require_once("simpleTranslator.php");

    $translator = new Translator();

    function __($str) {
        global $translator;
        return $translator->getTranslation($str);
    }
?>
