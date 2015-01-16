<?php

final class RetrieveUserResponse {
    public function __construct($username, $email)
    {
        $this->username = $username;
        $this->email = $email;
    }
}