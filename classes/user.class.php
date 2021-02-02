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
}
