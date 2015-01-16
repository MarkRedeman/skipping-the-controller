<?php

use Illuminate\Foundation\Http\FormRequest;

abstract class Request extends FormRequest {
//
}

interface RequestController {
    function handle(Request $request);
}