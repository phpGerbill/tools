<?php
namespace Oxilo\System\Tool\Text;

class Filter
{
   /**
    * filter data about bad utf8
    *
    * @param string $str data to filtr
    * @return string
    */
    public static function utf8($str) {
        return @iconv("utf-8", "utf-8//IGNORE", $str);
    }

   /**
    * filter data about xss
    *
    * @param string $str data to filtr
    * @return string
    */
    public static function xss($str) {
        return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
    }
}