<?php
class Shares extends Controller{
    protected function Index(){
        // echo '<h1>HOME/INDEX</h1>';
        $viewmodel = new ShareModel();
        $this -> ReturnView($viewmodel -> Index(), true);
    }

    protected function add(){
        $viewmodel = new ShareModel();
        $this -> ReturnView($viewmodel -> add(), true);
    }
}
?>