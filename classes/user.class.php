<?php
class User
{
    protected $Conn;
    public function __construct($Conn)
    {
        $this->Conn = $Conn;
    }
    public function createUser($user_data)
    {
        $sec_password = password_hash($user_data['password'], PASSWORD_DEFAULT);
        $query = "INSERT INTO users (user_email, user_pass) VALUES (:user_email, :user_pass)";
        $stmt = $this->Conn->prepare($query);
        return $stmt->execute(array(
            'user_email' => $user_data['email'],
            'user_pass' => $sec_password
        ));
    }

    public function loginUser($email, $password) {
        $query = "SELECT * FROM users WHERE user_email = :user_email";
        $stmt = $this->Conn->prepare($query);
        $stmt->execute(array('user_email' => $email));
        $attempt = $stmt->fetch();
        // if $attempt is true it matches a known user!
        if($attempt && password_verify($password, $attempt['user_pass'])) {
            return $attempt;
        }else{
            return false;
        }


    } 
}
