<?php

use Hekmatinasser\Verta\Verta;

if (! function_exists('saad')) {
    /**
     * @param null $datetime
     * @param null $timezone
     * @return Verta
     */
    function saad($datetime = null, $timezone = null): Verta
    {
        return new Verta($datetime, $timezone);
    }
}
