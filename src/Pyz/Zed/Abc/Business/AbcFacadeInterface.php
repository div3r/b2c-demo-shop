<?php

/**
* Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
* Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
*/

namespace Pyz\Zed\Abc\Business;

interface AbcFacadeInterface
{
    /**
     * @param AbcTransfer $abcTransfer
     *
     * @return AbcTransfer
     */
    public function createAbc(AbcTransfer $abcTransfer): AbcTransfer;

    /**
     * @param AbcTransfer $abcTransfer
     *
     * @return AbcTransfer
     */
    public function saveAbc(AbcTransfer $abcTransfer): AbcTransfer;

    /**
     * @param AbcTransfer $abcTransfer
     *
     * @return AbcTransfer|null
     */
    public function findAbc(AbcTransfer $abcTransfer): ?AbcTransfer;

    /**
     * @param AbcTransfer $abcTransfer
     *
     * @return AbcTransfer[]
     */

    public function findAbcs(AbcTransfer $abcTransfer): array;

    /**
     * @param AbcTransfer $abcTransfer
     *
     * @return void
     */

    public function deleteAbc(AbcTransfer $abcTransfer): void;
}
