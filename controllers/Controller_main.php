<?php
class Controller_Main extends Controller
{
    function action_index($param=null)
    {

        $this->view->generate('main_view.php', 'templateHome_view.php', $this->data);

    }


}
