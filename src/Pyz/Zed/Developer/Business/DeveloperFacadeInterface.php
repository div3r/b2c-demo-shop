<?php

namespace Pyz\Zed\Developer\Business;

use Generated\Shared\Transfer\DeveloperTransfer;

interface DeveloperFacadeInterface
{
    /**
     * @param DeveloperTransfer $developerTransfer
     *
     * @return DeveloperTransfer
     */
    public function createDeveloper(DeveloperTransfer $developerTransfer): DeveloperTransfer;

    /**
     * @param DeveloperTransfer $developerTransfer
     *
     * @return DeveloperTransfer
     */
    public function saveDeveloper(DeveloperTransfer $developerTransfer): DeveloperTransfer;

    /**
     * @param DeveloperTransfer $developerTransfer
     *
     * @return DeveloperTransfer|null
     */
    public function findDeveloper(DeveloperTransfer $developerTransfer): ?DeveloperTransfer;

    /**
     * @param DeveloperTransfer $developerTransfer
     *
     * @return DeveloperTransfer[]
     */

    public function findDevelopers(DeveloperTransfer $developerTransfer): array;

    /**
     * @param DeveloperTransfer $developerTransfer
     *
     * @return void
     */

    public function deleteDeveloper(DeveloperTransfer $developerTransfer): void;

}
