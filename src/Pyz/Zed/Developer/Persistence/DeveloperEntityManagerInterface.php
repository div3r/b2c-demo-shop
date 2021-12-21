<?php

namespace Pyz\Zed\Developer\Persistence;

use Generated\Shared\Transfer\DeveloperTransfer;

interface DeveloperEntityManagerInterface
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
    public function updateDeveloper(DeveloperTransfer $developerTransfer): DeveloperTransfer;

    /**
     * @param DeveloperTransfer $developerTransfer
     *
     * @return void
     */
    public function deleteDeveloper(DeveloperTransfer $developerTransfer): void;
}
