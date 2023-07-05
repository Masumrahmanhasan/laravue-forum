<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\RegisterRequest;
use App\Models\User;
use App\Traits\SendApiResponse;

/**
 * Class SignupController
 * @package App\Http\Controllers\Api\V1
 * @property sendApiResponse $sendApiResponse
 */
class SignupController extends Controller
{
    use SendApiResponse;

    public function register(RegisterRequest $request)
    {
        $user = User::query()->create($request->validated());

        return $this->SendApiResponse($user, 'Successfully Registered');

    }
}
