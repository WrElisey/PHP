<?php
/**
 * Class Controller
 * The controller connects the user and the system.
 * Monitors and sends data from the user to the system and vice versa.
 * Uses a model and a view to implement an action flow.
 * @package  Core
 */
class Controller {
    /**
     * @var Model $model Should contain a model that is used in the controller.;
     * @var View $view Should contain a view that is used in the controller.;;
     */
    public  $model,
            $view;

    /**
     * Controller constructor.
     * @param bool $isDefaultSet
     */
    function __construct($isDefaultSet=true)
    {
        $this->view = new View();
    }

    /**
     * Base action controller
     */
    function action_index()
    {

    }

}
