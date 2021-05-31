<?php


namespace Blog\View;


class Listview
{
    /*
     * TODO: Implement pagination
     */

    /**
     * Listview constructor.
     */
    public static function showListView($posts)
    {
        $login = HtmlFragments::loginBox();
        $htmlOutput = '<div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                        <div class="col-lg-12">
                           '.$posts.'
                        </div>
                    </div>
                    <!-- Pagination-->
                    <nav aria-label="Pagination">
                        <hr class="my-0">
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    '.$login.'
                    
                    <!-- Side widget-->
                    <div class="card mb-4">
                        <div class="card-header">Side Widget</div>
                        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                    </div>
                </div>
            </div>
        </div>';

        $header = HtmlFragments::startHtml();
        $pageHeader = HtmlFragments::pageHeader();
        $bodyWrapped = HtmlFragments::wrapBody($pageHeader.$htmlOutput);
        $footer = HtmlFragments::footer();
        $htmlWrappedOutput = HtmlFragments::wrapHtml($header.$bodyWrapped.$footer);
        echo($htmlWrappedOutput);
    }
}