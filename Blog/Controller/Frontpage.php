<?php


namespace Blog\Controller;


/**
 * Class Frontpage
 *
 * Controller Class for Frontpage Generation
 * @package Blog\Controller
 */
class Frontpage
{
    /*
     * Function listView
     * Shows the initial view when entering the blog
     */
    public static function listView()
    {
        $header = '';   //HTML Header of the frontpage template
        $postsSortedByDate = '';
        $pagination = '';
        $footer = '';   //HTML Footer
        $frontPage = $header.$postsSortedByDate.$pagination.$footer;
        echo ($frontPage);
    }
}