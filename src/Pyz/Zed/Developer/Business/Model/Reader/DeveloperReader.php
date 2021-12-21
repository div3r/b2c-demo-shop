<?php

namespace Pyz\Zed\Developer\Business\Model\Reader;

use Generated\Shared\Transfer\DeveloperTransfer;
use Pyz\Zed\Developer\Persistence\DeveloperRepositoryInterface;

class DeveloperReader
{
    /**
     * @var DeveloperRepositoryInterface
     */
    private $developerRepository;

    /**
     * @param DeveloperRepositoryInterface $developerRepository
     */

    public function __construct(DeveloperRepositoryInterface $developerRepository)
    {
        $this->developerRepository = $developerRepository;
    }

    /**
     * @param DeveloperTransfer $developerTransfer
     *
     * @return DeveloperTransfer|null
     */
    public function findDeveloperByTransfer(DeveloperTransfer $developerTransfer): ?DeveloperTransfer
    {
        return $this->developerRepository->findDeveloperByTransfer($developerTransfer);
    }

    /**
     * @param DeveloperTransfer $developerTransfer
     *
     * @return array
     */

    public function findDevelopersByTransfer(DeveloperTransfer $developerTransfer): array
    {
        return $this->developerRepository->findDevelopersByTransfer($developerTransfer);
    }
}
