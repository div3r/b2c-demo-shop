<?php

namespace Pyz\Zed\StringReverser\Business\Model;

use Generated\Shared\Transfer\HelloSprykerTransfer;

class StringReverser implements StringReverserInterface
{
    public function reverseString($string): string
    {
        return strrev($string);
    }

}
