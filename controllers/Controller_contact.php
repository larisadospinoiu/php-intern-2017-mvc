<?php

//Controller for contact form

class Controller_Contact extends Controller
{
    function action_index($param=null)
    {

        $this->view->generate('contact_view.php', 'template_view.php', $this->data);

    }

    function action_send()
    {
    	$products_model = $this->model->load('contact');
		$products_model->send_email();	
    	$this->view->generate('send_view.php', 'template_view.php', $this->data);

    }


}
