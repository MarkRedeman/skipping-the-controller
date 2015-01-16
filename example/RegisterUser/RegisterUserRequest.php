<?php namespace App\Http\Requests;


class RegisterUserRequest extends CommandRequest
{
    public function respond(CommandBus $bus)
    {
        $command = new RegisterUserCommand($this->get('username'), $this->get('password'));
        $this->bus->execute($command);

        return $this->requestAccepted();
    }

    // public function validate()
    // {

    // }

    // public function authorize()
    // {

    // }
}