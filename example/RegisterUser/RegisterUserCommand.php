<?php

final class RegisterUserCommand implements Controller
{
    private $userId;
    private $username;

    public function __construct($userId, $username)
    {
        $this->userId = $userId;
        $this->username = $username;
    }

    public static function fromRequest(RegisterUserRequest $request)
    {
        return new static($request->get('userId'), $request->get('username'));
    }
}
