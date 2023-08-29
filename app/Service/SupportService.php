<?php

namespace App\Service;

use App\DTO\Supports\CreateSupportDTO;
use App\Repositories\PaginationInterface;
use App\Repositories\SupportRepositoryInterface;
use GuzzleHttp\Promise\Create;
use stdClass;

class SupportService{

    public function __construct(
        protected SupportRepositoryInterface $repository
    ){}

    public function paginate(
        int $page = 1,
        int $totalPerPage = 15,
        string $filter = null
        ): PaginationInterface {
        return $this->repository->paginate(
            page: $page = 1,
            totalPerPage: $totalPerPage, 
            filter: $filter,
        );
    }

    public function getAll(string $filter = null): array{

        return $this->repository->getAll($filter);
    }

    public function findOne(string $id): stdClass|null{

        return $this->repository->findOne($id);
    }

    public function new(CreateSupportDTO $dto): stdClass{

        return $this->repository->new($dto);
    }

    public function update($dto): stdClass {

        return $this->repository->update($dto);
    }

    public function delete(string $id): void{

        $this->repository->delete($id);
    }
}