<?php


namespace Blog\Controller;

use Blog\Template;

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
        $header = Template\HtmlFragments::headerHome();   //HTML Header of the frontpage template
        $postsSortedByDate = '';
        $pagination = '';
        $footer = '';   //HTML Footer
        $frontPage = $header.$postsSortedByDate.$pagination.$footer;
        echo ($frontPage);
    }


}