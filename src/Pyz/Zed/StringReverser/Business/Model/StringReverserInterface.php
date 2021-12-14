<?php

namespace Pyz\Zed\StringReverser\Business\Model;

use Generated\Shared\Transfer\HelloSprykerTransfer;

interface StringReverserInterface
{
    /**
     * @param string $string
     *
     * @return string
     */
    public function reverseString(string $string): string;

}
