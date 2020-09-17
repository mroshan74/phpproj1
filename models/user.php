<?php
class UserModel extends Model{
    public function register(){
        // Sanitize the post array
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if(isset($post['submit'])){
            //! Insert
            $this -> query('INSERT INTO users (name,email,password) VALUES (:name, :email, :password)');
            $this->bind(":name", $post['name']);
            $this->bind(":email", $post['email']);
            $this->bind(":password", $post['password']);
            $this->execute();

            //Verify
            if($this-> lastInsertId()){
                header('Location:'.ROOT_URL.'users/login');
            }
        }
        return;
    }

    public function login(){
        //! Read/Check
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if(isset($post['submit'])){
        $this -> query('SELECT * FROM users WHERE email = :email AND password = :password');
            $this->bind(":email", $post['email']);
            $this->bind(":password", $post['password']);
            $this->execute();

            $row = $this -> single();
            if($row){
                $_SESSION['is_logged_in'] = true;
                $_SESSION['user_data'] = array(
                    "id"        => $row["id"],
                    "name"      => $row["name"],
                    "email"     => $row["email"]
                );
                header('Location:'.ROOT_URL.'shares');
            } else {
                echo 'Incorrect Password';
            }
        }
    }
}
?>