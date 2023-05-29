<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Services\TagService;
use App\Traits\sendApiResponse;
use Illuminate\Http\JsonResponse;

/**
 * @property TagService $tagService
 * @property sendApiResponse $sendApiResponse
 */
class TagController extends Controller
{
    public function __construct(TagService $tagService, sendApiResponse $sendApiResponse)
    {
        $this->tagService = $tagService;
        $this->sendApiResponse = $sendApiResponse;
    }
    public function index(): JsonResponse
    {
        $tags = $this->tagService->getTags();
        return $this->sendApiResponse->success($tags);
    }
}
