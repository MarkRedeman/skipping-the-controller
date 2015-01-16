<?php namespace App\Http\Requests;

final class RetrieveUserController implements RequestController
{
    private $transformer;
    private $processor;

    /**
     * @param APITransformer $transformer
     * @param QueryProcessor $processor
     */
    public function __construct(APITransformer $transformer, QueryProcessor $processor)
    {
        $this->transformer = $transformer;
        $this->processor = $processor;
    }

    /**
     * Handles the request
     * @param  Request $request [description]
     * @return Response
     */
    public function handle(Request $request)
    {
        $query = RetrieveUserQuery::fromRequest($request);
        $result = $this->processor->process($query);

        return $this->transformer->transform($result);
    }
}