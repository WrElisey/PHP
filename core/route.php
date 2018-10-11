<?php
/**
 * Class Route
 *The class router to determine the requested page.
 *Clings to the classes of controllers and models.
 *Instantiates the page controllers and invokes the actions of these controllers.
 * @package  Core
 */
class Route
{
    /**
     * @param string $controller_name standard controller is 'index'.
     * @param string $action_name standard action is 'index'.
     */
    static function start()
    {
        Global $args;
        $controller_name = 'Index';
        $action_name = 'index';
        $args = explode('/', $_SERVER['REQUEST_URI']);

        $site=array_shift($args);

        // get names controller and action
        if (!empty($args[0])) {
            $controller_name=array_shift($args);
        }

        if (!empty($args[0])) {
            $action_name=array_shift($args);
        }


        // add prefix
        $model_name = 'Model_' . $controller_name;
        $controller_name = 'Controller_' . $controller_name;
        $action_name = 'action_' . $action_name;


        // add file with class model
        $model_file = strtolower($model_name) . '.php';
        $model_path = "application/models/" . $model_file;
        if (file_exists($model_path)) {
            include "application/models/" . $model_file;
        }

        // add file with class controller
        $controller_file = strtolower($controller_name) . '.php';
        $controller_path = "application/controllers/" . $controller_file;
        if (file_exists($controller_path)) {
            include "application/controllers/" . $controller_file;
        } else {
            Route::ErrorPage404();
        }

        // create controller
        $controller = new $controller_name;
        $action = $action_name;

        // call controller
        if (method_exists($controller, $action)) {
            $controller->$action();
        } else {
            Route::ErrorPage404();
        }

    }

    /**
     *Redirection to page 404
     */
    static function ErrorPage404()
    {
        $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:' . $host . '404');
    }

}
?>