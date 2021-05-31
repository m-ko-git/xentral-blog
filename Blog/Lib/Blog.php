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
     * Dependent on the action we will call the right controller function from here
     * @param string $action
     */
    public static function start($action='')
    {
        if(isset($_GET['action']) && $_GET['action'] != ''){
            switch(htmlspecialchars($_GET['action'])){
                case 'login' : Frontpage::adminAction('login');break;
                case 'logout': Frontpage::listAction();break;
            }
        }else{
            Frontpage::listAction();
        }

    }

}