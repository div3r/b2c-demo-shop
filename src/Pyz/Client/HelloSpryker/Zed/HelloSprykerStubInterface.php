<?php

namespace Pyz\Client\HelloSpryker\Zed;

use Generated\Shared\Transfer\HelloSprykerTransfer;

interface HelloSprykerStubInterface
{
    /**
     * @param \Generated\Shared\Transfer\HelloSprykerTransfer $helloSprykerTransfer
     *
     * @return \Generated\Shared\Transfer\HelloSprykerTransfer
     */
    public function reverseString(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer;
}
