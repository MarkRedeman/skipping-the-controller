<?php

class Transporter {
    private $pipeline;

    public function transport(Reqeust $request, Route $route)
    {
        // todo: distinguish between Commands and Queries?
        $destination = $route->getDestination();
        $destination->fromRequest($request);

        $this->process($destination, $request);
    }

    private function process(Controller $destination, Request $request)
    {
        // TODO
        if ($request->isAQuery())
        {
            return $this->queryBus->execute($destination);
        }
        else if ($request->isACommand())
        {
            $this->commandBus->execute($destination);
        }
        return $this->response->createFromDestination($destination);
    }
}