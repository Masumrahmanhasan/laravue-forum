<?php
namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Pagination\AbstractPaginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

trait sendApiResponse
{
    /**
     * @param mixed|null $data
     * @param string $message
     * @param int $status
     * @param bool $success
     * @return JsonResponse
     */
    public function success($data = null, string $message = "", int $status = 200, bool $success = true): JsonResponse
    {
        $response = [
            'success' => $success,
            'message' => $message
        ];

        if($data instanceof ResourceCollection && $data->resource instanceof AbstractPaginator){
            $data = [...$data->resource->toArray(), ...$data->additional];
        } else if (!$data instanceof LengthAwarePaginator){
            $data = compact('data');
        } else {
            $data = $data->toArray();
        }
        $response += $data;

        if (app()->environment() === 'local') {
            $log = collect(DB::getQueryLog());
            $response['queries'] = [
                'duplicates' => $log->count() - $log->unique('query')->count(),
                'time' => $log->sum('time'),
                'log' => $log->reverse()->toArray(),
            ];
        }
        return new JsonResponse($response, $status);
    }

    /**
     * Send a failed response
     * @param mixed $data
     * @param string $message
     * @param int $status
     * @return JsonResponse
     */
    public function failed($data = [], string $message = "", int $status = 400): JsonResponse
    {
        return $this->success($data, $message, $status, false);
    }

    /**
     * @param mixed $data
     * @param null $message
     * @return JsonResponse
     */
    public function notfound($data = null, $message = null): JsonResponse
    {
        return $this->failed($data, $message ?: 'Resource not found', 404);
    }

    /**
     * @param int $default
     * @param int $max
     * @return int
     */
    protected function limit(int $default = 10, int $max = 50): int
    {
        return (int) min(request()->input('limit', $default), $max);
    }


}
