<?php

/**
 * Class Controller_404
 */
class Controller_404 extends Controller
{

    /*
     * Displays a 404 error message.
     */
    function action_index()
    {
        $this->view->generate('Err_view.php', 'template_view.php');
    }

}
