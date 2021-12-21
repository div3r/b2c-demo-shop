<?php

namespace Pyz\Zed\DeveloperGui\Communication\Form\DataProvider;

use Generated\Shared\Transfer\DeveloperTransfer;
use Pyz\Zed\Developer\Business\DeveloperFacadeInterface;

class DeveloperEditFormDataProvider
{
    /**
     * @var DeveloperFacadeInterface
     */
    private $developerFacade;

    /**
     * @param DeveloperFacadeInterface $developerFacade
     */
    public function __construct(DeveloperFacadeInterface $developerFacade)
    {
        $this->developerFacade = $developerFacade;
    }

    /**
     * @param int $idDeveloper
     *
     * @return array
     */
    public function getData(int $idDeveloper): array
    {
        $searchDeveloperTransfer = (new DeveloperTransfer())
            ->setIdDeveloper($idDeveloper);

        $developerTransfer = $this->developerFacade->findDeveloper($searchDeveloperTransfer);

        if (!$developerTransfer) {
            return [];
        }

        $data = $developerTransfer->toArray();

        return $data;
    }

    /**
     * @return array
     */
    public function getOptions(): array
    {
        return [];
    }

}
