<?php


namespace Blog\View;


class Adminview
{

    /**
     * Shows the AdminView
     */
    public static function showAdminView($posts)
    {
        $login = HtmlFragments::loginBoxAdmin();
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
                        <div class="card-header">ToDo\'s</div>
                        <div class="card-body">Logincheck, Pagination, User administration, </div>
                    </div>
                </div>
            </div>
        </div>';

        $header = HtmlFragments::startHtmlAdmin();
        $pageHeader = HtmlFragments::pageHeaderAdmin();
        $bodyWrapped = HtmlFragments::wrapBody($pageHeader.$htmlOutput);
        $footer = HtmlFragments::footer();
        $htmlWrappedOutput = HtmlFragments::wrapHtml($header.$bodyWrapped.$footer);
        echo($htmlWrappedOutput);
    }
}