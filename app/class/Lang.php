<?php

namespace App;

/**
 * Class lang
 *
 * @package \App
 */
class Lang
{
    public function expose()
    {
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        if ($lang == 'fr') :
            $content = file_get_contents("app/i18n/$lang.json", true);
        elseif ($lang == 'zh') :
            //chinese language
            $content = file_get_contents("app/i18n/$lang.json", true);
        else :
            //default language
            $content = file_get_contents("app/i18n/en.json", true);
        endif;
        return $json = json_decode($content);
    }

}
