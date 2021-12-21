<?php

namespace Pyz\Zed\Developer\Business;

use Generated\Shared\Transfer\DeveloperTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

class DeveloperFacade extends AbstractFacade implements DeveloperFacadeInterface
{
    /**
     * @param DeveloperTransfer $developerTransfer
     *
     * @return DeveloperTransfer
     */
    public function createDeveloper(DeveloperTransfer $developerTransfer): DeveloperTransfer
    {
        return $this->getFactory()->createDeveloperWriter()->createDeveloper($developerTransfer);
    }

    /**
     * @param DeveloperTransfer $developerTransfer
     *
     * @return DeveloperTransfer
     */
    public function saveDeveloper(DeveloperTransfer $developerTransfer): DeveloperTransfer
    {
        return $this->getFactory()->createDeveloperWriter()->updateDeveloper($developerTransfer);
    }

    /**
     * @param DeveloperTransfer $developerTransfer
     *
     * @return DeveloperTransfer|null
     */
    public function findDeveloper(DeveloperTransfer $developerTransfer): ?DeveloperTransfer
    {
        return $this->getFactory()->createDeveloperReader()->findDeveloperByTransfer($developerTransfer);
    }

    /**
     * @param DeveloperTransfer $developerTransfer
     *
     * @return DeveloperTransfer[]
     */
    public function findDevelopers(DeveloperTransfer $developerTransfer): array
    {
        return $this->getFactory()->createDeveloperReader()->findDevelopersByTransfer($developerTransfer);
    }

    /**
     * @param DeveloperTransfer $developerTransfer
     *
     * @return void
     */
    public function deleteDeveloper(DeveloperTransfer $developerTransfer): void
    {
        $this->getFactory()->createDeveloperWriter()->deleteDeveloper($developerTransfer);
    }

}
