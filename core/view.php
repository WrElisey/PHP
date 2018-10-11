<?php
class View
{
    /**
     * @param string $content_view The file that contains the page view
     * @param string $template_view The file that contains the template view.
     * @param null $data Data that is passed from the controller to the view.
     */
    function generate($content_view, $template_view, $data=null)
    {
        if(is_array($data)) {

            extract($data);
        }
       include 'application/views/'.$template_view;
    }
}