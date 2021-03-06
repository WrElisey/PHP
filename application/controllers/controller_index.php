<?php
include_once "/application/models/model_intro.php";
include_once "/application/models/model_record.php";

/**
 * Class Controller_Index  is basic site controller.
 * Responsible for processing requests with site / index / ... and site / ..
 */
class Controller_Index extends Controller
{

    /**
     * Title: My Blog
     * Displays the main page of the site.
     * Uses models record and intro.
     */
    function action_index()
    {
        Global $args;
        try {
            $data['dTitle'] = "My Blog";
            $textIntro = "let's get acquainted";
            $imgIntro = "/images/intro/index.jpg";
            $data['dIntro'] = new model_intro($data['dTitle'], $textIntro, $imgIntro);

            $start = !empty($args[0]) ? $args[0] : 0;
            $data['dRecords'] = model_record::getRecords($start, 10);

            $this->view->generate('index_view.php', 'template_view.php', $data);
        } catch (AppException $e) {
            $data['dExp'] = $e;
            $this->view->generate('exception_view.php', 'template_view.php', $data);
        }
    }

    /**
     * Title: Singe Post
     * Page separate post
     * Uses models record and intro.
     * index/post/N - where N is id
     */
    function action_post()
    {
        Global $args;
        try {
            $id = $args[0];
            $data['dRecord'] = model_record::getRecord($id);

            $data['dTitle'] = $data['dRecord']->headline;
            $textIntro = "Posted by ".$data['dRecord']->author;
            $imgIntro = $data['dRecord']->img;
            $data['dIntro'] = new model_intro($data['dTitle'], $textIntro, $imgIntro);

            $this->view->generate('recordFull_view.php', 'template_view.php', $data);
        } catch (AppException $e) {
            $data['dExp'] = $e;
            $this->view->generate('exception_view.php', 'template_view.php', $data);
        }
    }

    /**
     * Title: About me
     * Uses models intro.
     */
    function action_about()
    {
        $data['dTitle'] = "About me";
        $textIntro = "This is what I do.";
        $imgIntro = "/images/intro/about.jpg";
        $data['dIntro'] = new model_intro($data['dTitle'], $textIntro, $imgIntro);

        $this->view->generate('about_view.php', 'template_view.php', $data);
    }
}

?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                