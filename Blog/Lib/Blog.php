<?php


namespace Blog\Lib;

use Blog\Controller\Frontpage;


/**
 * Class Blog
 * @package Blog\Lib
 */
class Blog
{

    /**
     * From here we start all our Blog Logic
     * (one entry point only)
     */
    public static function start()
    {
        Frontpage::listView();
    }

}