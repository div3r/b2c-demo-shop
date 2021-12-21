<?php

/**
* Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
* Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
*/

namespace Pyz\Zed\Abc\Business;

use Generated\Shared\Transfer\AbcTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \Pyz\Zed\Abc\Business\AbcBusinessFactory getFactory()
 */
class AbcFacade extends AbstractFacade implements AbcFacadeInterface
{

    /**
     * @param AbcTransfer $abcTransfer
     *
     * @return AbcTransfer
     */
    public function createAbc(AbcTransfer $abcTransfer): AbcTransfer
    {
        return $this->getFactory()->createAbcWriter()->createAbc($abcTransfer);
    }

    /**
    * @param AbcTransfer $abcTransfer
    *
    * @return AbcTransfer
    */
    public function saveAbc(AbcTransfer $abcTransfer): AbcTransfer
    {
        return $this->getFactory()->createAbcWriter()->updateAbc($abcTransfer);
    }

    /**
    * @param AbcTransfer $abcTransfer
    *
    * @return AbcTransfer|null
    */
    public function findAbc(AbcTransfer $abcTransfer): ?AbcTransfer
    {
        return $this->getFactory()->createAbcReader()->findAbcByTransfer($abcTransfer);
    }

    /**
    * @param AbcTransfer $abcTransfer
    *
    * @return AbcTransfer[]
    */
    public function findAbcs(AbcTransfer $abcTransfer): array
    {
    return $this->getFactory()->createAbcReader()->findAbcsByTransfer($abcTransfer);
    }

    /**
    * @param AbcTransfer $abcTransfer
    *
    * @return void
    */
    public function deleteAbc(AbcTransfer $abcTransfer): void
    {
        $this->getFactory()->createAbcWriter()->deleteAbc($abcTransfer);
    }

}
