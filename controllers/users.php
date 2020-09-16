<?php
class Users extends Controller{
    protected function Index(){
        echo '<h1>HOME/INDEX</h1>';
        $viewmodel = new UserModel();
        $this -> ReturnView($viewmodel -> Index(), true);
    }
}
?>