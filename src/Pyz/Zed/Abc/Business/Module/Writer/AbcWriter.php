<?php

namespace Pyz\Zed\Abc\Business\Model\Writer;

use Generated\Shared\Transfer\AbcTransfer;
use Pyz\Zed\Abc\Persistence\AbcEntityManagerInterface;

class AbcWriter
{
    /**
     * @var AbcEntityManagerInterface
     */
    private $abcEntityManager;


    /**
     * @param AbcEntityManagerInterface $abcEntityManager
     */
    public function __construct(AbcEntityManagerInterface $abcEntityManager)
    {
        $this->abcEntityManager = $abcEntityManager;
    }


    /**
    * @param AbcTransfer $abcTransfer
    *
    * @return AbcTransfer
    */
    public function createAbc(AbcTransfer $abcTransfer): AbcTransfer
    {
        return $this->abcEntityManager->createAbc($abcTransfer);
    }


    /**
    * @param AbcTransfer $abcTransfer
    *
    * @return AbcTransfer
    */
    public function updateAbc(AbcTransfer $abcTransfer): AbcTransfer
    {
        $abcTransfer->requireIdAbc();

        return $this->abcEntityManager->updateAbc($abcTransfer);
    }

    /**
    * @param AbcTransfer $abcTransfer
    *
    * @return void
    */
    public function deleteAbc(AbcTransfer $abcTransfer): void
    {
        $abcTransfer->requireIdAbc();

        $this->abcEntityManager->deleteAbc($abcTransfer);
    }
}
