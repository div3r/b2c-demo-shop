<?php

namespace Pyz\Zed\StringReverser\Business;

use Pyz\Zed\StringReverser\Business\Model\StringReverser;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

class StringReverserBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return StringReverser
     */
    public function createStringReverser()
    {
        return new StringReverser();
    }

}
