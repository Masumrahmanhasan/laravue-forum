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
    use SendApiResponse;
    public function __construct(TagService $tagService)
    {
        $this->tagService = $tagService;
    }
    public function index(): JsonResponse
    {
        $tags = $this->tagService->getTags();
        return $this->success($tags);
    }
}
