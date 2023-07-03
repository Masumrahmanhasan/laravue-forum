<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\RegisterRequest;
use App\Models\User;
use App\Traits\sendApiResponse;

/**
 * Class SignupController
 * @package App\Http\Controllers\Api\V1
 * @property sendApiResponse $sendApiResponse
 */
class SignupController extends Controller
{
    use sendApiResponse;

    public function register(RegisterRequest $request)
    {
        $user = User::query()->create($request->validated());

        return $this->sendApiResponse($user, 'Successfully Registered');

    }
}
