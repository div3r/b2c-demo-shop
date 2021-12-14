<?php

namespace Pyz\Zed\HelloSpryker\Persistence;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Spryker\Zed\Kernel\Persistence\AbstractRepository;

class HelloSprykerRepository extends AbstractRepository implements HelloSprykerRepositoryInterface
{
    /**
     * @param int $id
     *
     * @return HelloSprykerTransfer|null
     */
    public function findPyzHelloSprykerById(int $id): ?HelloSprykerTransfer
    {
        $helloSprykerEntity = $this->getFactory()
            ->createHelloSprykerQuery()
            ->filterById($id)
            ->findOne();

        if (!$helloSprykerEntity) {
            return null;
        }

        return (new HelloSprykerTransfer())
            ->fromArray($helloSprykerEntity->toArray(), true);
    }

}
