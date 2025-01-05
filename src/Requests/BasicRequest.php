<?php

namespace Ehsandevs\BResources\Requests;

use Ehsandevs\BResources\Resources\BasicResource;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class BasicRequest extends FormRequest
{
    protected function failedValidation(Validator $validator)
    {
        throw new ValidationException($validator, response(new BasicResource([
            'error_message' => $validator->errors()->first(),
            'errors' => $validator->errors()->toArray()
        ]), Response::HTTP_UNPROCESSABLE_ENTITY), $this->errorBag);
    }
}
