<?php

namespace Examples\App\Http\Controllers;

use Examples\App\DTO\Users\CreateUserDTO;
use Examples\App\Exceptions\ApiException;
use Examples\App\Http\Resources\UserResource;
use Examples\App\Repositories\Users\UserRepository;
use Examples\App\Services\Users\UserService;
use Examples\App\Support\ApiResponse;

final class UserController
{
    public function store(array $requestData): array
    {
        try {
            // Em um app Laravel: $dto = CreateUserDTO::fromArray($request->validated());
            $dto = CreateUserDTO::fromArray($requestData);

            $service = new UserService(new UserRepository());
            $user = $service->create($dto);

            return ApiResponse::success(
                data: UserResource::make($user),
                httpcode: 201,
                message: 'User created.'
            );
        } catch (ApiException $e) {
            return ApiResponse::error($e);
        }
    }
}
