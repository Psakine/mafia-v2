<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\File\FileCreateRequest;
use App\Http\Resources\File\FileDetailResource;
use App\Services\FileService;

class FileController extends Controller
{
    private FileService $fileService;

    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }

    public function create(FileCreateRequest $request): FileDetailResource
    {
        //TODO:IMPLEMENT
        return new FileDetailResource([]);
    }

    public function delete(int $fileId): bool
    {
        //TODO:IMPLEMENT
        return true;
    }
}
