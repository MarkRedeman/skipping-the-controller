<?php

final class RetrieveUsersQuery implements Controller
{
    public function __construct()
    {
        # code...
    }

    public static function fromRequest(RetrieveUsersRequest $request)
    {
        // maybe add some filter options?
        return new static();
    }
}