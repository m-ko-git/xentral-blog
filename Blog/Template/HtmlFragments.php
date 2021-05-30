<?php


namespace Blog\Template;


/**
 * Class HtmlFragments
 * @Description
 * @package Blog\Template
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
                    <meta name="author" content="">
                    <title>Xentral Blog Task</title>
                    <!-- Favicon-->
                    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
                    <!-- Core theme CSS (includes Bootstrap)-->
                    <link href="css/styles.css" rel="stylesheet">
                </head>';
        return $head;
    }

    /**
     * @return string
     */
    public static function headerHome()
    {
        $header = "<header class=\"py-5 bg-light border-bottom mb-4\">
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
     * @return string
     */
    public static function loginBox()
    {
        $loginBox = '<div class="card mb-4">
                        <div class="card-header">Login</div>
                        <div class="card-body">
                            <form action="index.php?action=login" method="POST">
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Username" aria-label="Enter email">
                                    <input class="form-control" type="text" placeholder="password" aria-label="Enter password">
                                    <button class="btn btn-primary" id="button-search" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>';

        return $loginBox;
    }

    /**
     * @return string
     */
    public static function footer()
    {
        $footer = '<footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright © Marko 2021 ;-)</p></div>
        </footer>';
        return $footer;
    }


    /**
     * @param $content [string]
     * @return string
     */
    public static function wrapHtml($content)
    {
        $html = '<!DOCTYPE html><html lang="en">'.$content.'</html>';
        return $html;
    }
}