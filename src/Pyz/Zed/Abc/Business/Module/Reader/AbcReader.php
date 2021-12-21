<?php

namespace Pyz\Zed\Abc\Business\Model\Reader;

use Generated\Shared\Transfer\AbcTransfer;
use Pyz\Zed\Abc\Persistence\AbcRepositoryInterface;

class AbcReader
{
    /**
     * @var AbcRepositoryInterface
     */
    private $abcRepository;

    /**
     * @param AbcRepositoryInterface $abcRepository
     */

    public function __construct(AbcRepositoryInterface $abcRepository)
    {
        $this->abcRepository = $abcRepository;
    }

    /**
    * @param AbcTransfer $abcTransfer
    *
    * @return AbcTransfer|null
    */
    public function findAbcByTransfer(AbcTransfer $abcTransfer): ?AbcTransfer
    {
        return $this->abcRepository->findAbcByTransfer($abcTransfer);
    }

    /**
    * @param AbcTransfer $abcTransfer
    *
    * @return array
    */

    public function findAbcsByTransfer(AbcTransfer $abcTransfer): array
    {
        return $this->abcRepository->findAbcsByTransfer($abcTransfer);
    }
}
