<?php
namespace Oxilo\System\Tool;

define('tooltip_none',   0);
define('tooltip_page',   1);
define('tooltip_popup',  2);

class Tool
{
    public static function display_action($action) {
        if ( tooltip_none == $action ) {
            print "current tooltip is not selected.";
        } elseif ( tooltip_page == $action ) {
            print "current tooltip select a display as page.";
        } elseif ( tooltip_popup == $action ) {
            print "current tooltip select a display as popup.";
        } else {
            print "undefined tooltip";
        }
    }
}