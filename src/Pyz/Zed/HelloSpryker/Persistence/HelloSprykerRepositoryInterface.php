<?php

namespace Pyz\Zed\HelloSpryker\Persistence;

use Generated\Shared\Transfer\HelloSprykerTransfer;

interface HelloSprykerRepositoryInterface
{
    /**
     * @param int $id
     *
     * @return HelloSprykerTransfer|null
     */
    public function findPyzHelloSprykerById(int $id): ?HelloSprykerTransfer;
}
