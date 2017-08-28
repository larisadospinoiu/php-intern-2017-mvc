<?php


class Controller_AddPost extends Controller
{
    function action_index()
    {

        $addPost = $this->model->load('addPost');
		$this->data['addPost'] = $addPost->insert_post();
		$this->view->generate('addPost_view.php', 'templatePost_view.php', $this->data);
    }

}
?>
