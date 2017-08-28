<?php


class Controller_AboutUs extends Controller
{
    function action_index()
    {

        $aboutUs = $this->model->load('aboutUs');
		$this->data['aboutUs'] = $aboutUs->about();
		$this->view->generate('aboutUs_view.php', 'template_view.php', $this->data);
    }

}
?>