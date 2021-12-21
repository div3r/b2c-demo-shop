<?php

/**
* Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
* Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
*/

namespace Pyz\Zed\Abc\Business;

use Pyz\Zed\Abc\Business\Model\Reader\AbcReader;
use Pyz\Zed\Abc\Business\Model\Writer\AbcWriter;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

/**
 * @method \Pyz\Zed\Abc\AbcConfig getConfig()
 */
class AbcFactory extends AbstractBusinessFactory
{
    /**
     * @return AbcReader
     */
    public function createAbcReader(): AbcReader
    {
        return new AbcReader($this->getRepository());
    }


    /**
    * @return AbcWriter
    */
    public function createAbcWriter(): AbcWriter
    {
        return new AbcWriter($this->getEntityManager());
    }
}
