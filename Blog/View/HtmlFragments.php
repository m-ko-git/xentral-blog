<?php


namespace Blog\View;


/**
 * Class HtmlFragments
 * @Description
 * @package Blog\View
 */
class HtmlFragments
{
    /**
     * @return string
     */
    public static function startHtml(){
        $head = '<head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                    <meta name="description" content="">
                    <meta name="author" content="Marko Grasshoff">
                    <title>Xentral Blog Task</title>
                    <!-- Favicon-->
                    <link rel="icon" type="image/x-icon" href="Blog/View/assets/favicon.ico">
                    <!-- Core theme CSS (includes Bootstrap)-->
                    <link href="Blog/View/css/styles.css" rel="stylesheet">
                </head>';
        return $head;
    }

    /**
     * @return string
     */
    public static function startHtmlAdmin(){
        $head = '<head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                    <meta name="description" content="">
                    <meta name="author" content="Marko Grasshoff">
                    <title>Xentral Blog Task</title>
                    <!-- Favicon-->
                    <link rel="icon" type="image/x-icon" href="Blog/View/assets/favicon.ico">
                    <!-- Core theme CSS (includes Bootstrap)-->
                    <link href="Blog/View/css/styles.css" rel="stylesheet">
                </head>';
        return $head;
    }

    /**
     * Returns header of the Frontpage
     * @return string
     */
    public static function headerHome()
    {
        $header = "<header class=\"py-1 bg-light border-bottom mb-4\">
            <div class=\"container\">
                <div class=\"text-center my-5\">
                    <h1 class=\"fw-bolder\">Welcome to Xentral Blog Excercise!</h1>
                    <p class=\"lead mb-0\">Here you will see all blogposts available</p>
                </div>
            </div>
        </header>";

        return $header;
    }

    /**
     * Renders the loginBox
     * @return string
     */
    public static function loginBox()
    {
        $loginBox = '<div class="card mb-4">
                        <div class="card-header">Login</div>
                        <div class="card-body">
                            <form action="index.php?action=login" method="post">
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Username" aria-label="Enter email" name="user">
                                    <input class="form-control" type="text" placeholder="password" aria-label="Enter password" name="pw">
                                    <input class="btn btn-primary" id="button-search" type="submit">
                                </div>
                            </form>
                        </div>
                    </div>';

        return $loginBox;
    }

    /**
     * Renders the AdminMessage
     * @return string
     */
    public static function loginBoxAdmin()
    {
        $loginBox = '<div class="card mb-4">
                        <div class="card-header">Logout</div>
                        <div class="card-body">
                            <form action="index.php?action=logout" method="post">
                                <div class="input-group">
                                    <input class="btn btn-primary" id="button-search" type="submit">
                                </div>
                            </form>
                        </div>
                    </div>';

        return $loginBox;
    }

    /**
     * Renders the footer
     * @return string
     */
    public static function footer()
    {
        $footer = '<footer class="py-2 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright © Marko 2021 ;-)</p></div>
        </footer>';
        return $footer;
    }

    /**
     * Wrap in <html> tags
     *
     * @param $content [the content to wrap]
     * @return string
     */
    public static function wrapHtml($content)
    {
        $html = '<!DOCTYPE html><html lang="en">'.$content.'</html>';
        return $html;
    }

    /**
     * Wrap in <body> tags
     *
     * @param $content [string]
     * @return string
     */
    public static function wrapBody($content)
    {
        $body = '<body>'.$content.'</body>';
        return $body;
    }


    /**
     * Renders the pageHeader for ListView
     * @return string
     */
    public static function pageHeader(){
        return '<header class="py-1 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Xentral Blog Task</h1>
                    <p class="lead mb-0">Let\'s see how it goes...</p>
                </div>
            </div>
        </header>';
    }

    /**
     * Renders the pageHeader for AdminView
     * @return string
     */
    public static function pageHeaderAdmin(){
        return '<header class="py-1 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Xentral Blog Task</h1>
                    <p class="lead mb-0">Admin View</p>
                </div>
            </div>
        </header>';
    }

    /**
     * Wrap a post for the listview
     *
     * @param $postTitle
     * @param $excerpt
     * @param $date
     * @return string
     */
    public static function wrapListPost($postTitle, $excerpt, $date){

        $post =  '    <div class="card mb-4">
                      <div class="card-body">
                      <div class="small text-muted">'.$date.'</div>
                      <h2 class="card-title h4">'.$postTitle.'</h2>
                      <p class="card-text">'.$excerpt.'</p>
                      <a class="btn btn-primary" href="#!">Read more →</a>
                      </div></div>';
        return $post;
    }

    /**
     * Wrap a post for the Admin
     *
     * @param $postTitle
     * @param $excerpt
     * @param $date
     * @return string
     */
    public static function wrapListPostAdmin($postTitle, $excerpt, $date){

        $post =  '    <div class="card mb-4">
                      <div class="card-body">
                      <div class="small text-muted">'.$date.'</div>
                      <h2 class="card-title h4">'.$postTitle.'</h2>
                      <p class="card-text">'.$excerpt.'</p>
                      <a class="btn btn-primary" href="#!">Edit post →</a>
                      </div></div>';
        return $post;
    }
}