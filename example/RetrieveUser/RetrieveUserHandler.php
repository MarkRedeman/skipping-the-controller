<?php

final class RetrieveUserHandler implements Handler {
    public function handle(RetrieveUserQuery $query)
    {
        $user = $this->repo->getFromUsername($query->getUsername());
        return new RetrieveUserResponse($user->username(), $user->email())
    }
}