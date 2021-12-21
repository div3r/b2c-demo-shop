<?php

namespace Pyz\Zed\Developer\Persistence;

use Generated\Shared\Transfer\DeveloperTransfer;
use Orm\Zed\Developer\Persistence\PyzDeveloper;
use Propel\Runtime\Exception\EntityNotFoundException;
use Spryker\Zed\Kernel\Persistence\AbstractEntityManager;

class DeveloperEntityManager extends AbstractEntityManager implements DeveloperEntityManagerInterface
{
    /**
     * @param DeveloperTransfer $developerTransfer
     *
     * @return DeveloperTransfer
     */

    public function createDeveloper(DeveloperTransfer $developerTransfer): DeveloperTransfer
    {
        $pyzDeveloperEntity = $this->getFactory()->createDeveloperMapper()->mapDeveloperTransferToEntity($developerTransfer, new PyzDeveloper());
        $pyzDeveloperEntity->save();

        return $this->getFactory()->createDeveloperMapper()->mapDeveloperEntityToTransfer($pyzDeveloperEntity, $developerTransfer);
    }

    /**
     * @param DeveloperTransfer $developerTransfer
     *
     * @return DeveloperTransfer
     *@throws EntityNotFoundException
     *
     */
    public function updateDeveloper(DeveloperTransfer $developerTransfer): DeveloperTransfer
    {

        $developerTransfer->requireIdDeveloper();
        $pyzDeveloperEntity = $this->getFactory()->createDeveloperQuery()->findOneByIdDeveloper($developerTransfer->getIdDeveloper());

        if (!$pyzDeveloperEntity) {
            throw new EntityNotFoundException(sprintf('Developer entity with id: %s haven\'t been found', $developerTransfer->getIdDeveloper()));
        }

        $pyzDeveloperEntity = $this->getFactory()->createDeveloperMapper()->mapDeveloperTransferToEntity($developerTransfer, $pyzDeveloperEntity);
        $pyzDeveloperEntity->save();

        return $this->getFactory()->createDeveloperMapper()->mapDeveloperEntityToTransfer($pyzDeveloperEntity, $developerTransfer);

    }

    /**
     * @param DeveloperTransfer $developerTransfer
     *
     * @return void
     */
    public function deleteDeveloper(DeveloperTransfer $developerTransfer): void
    {

        $developerTransfer->requireIdDeveloper();
        $pyzDeveloperEntity = $this->getFactory()->createDeveloperQuery()->findOneByIdDeveloper($developerTransfer->getIdDeveloper());

        if ($pyzDeveloperEntity) {
            $pyzDeveloperEntity->delete();
        }
    }

}
