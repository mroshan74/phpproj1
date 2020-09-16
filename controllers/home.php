<?php
class Home extends Controller{
    protected function Index(){
        echo '<h1>HOME/INDEX</h1>';
        $viewmodel = new HomeModel();
        $this -> ReturnView($viewmodel -> Index(), true);
    }
}
?>