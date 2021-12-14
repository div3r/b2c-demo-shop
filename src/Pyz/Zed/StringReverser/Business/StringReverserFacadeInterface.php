<?php

namespace Pyz\Zed\StringReverser\Business;

interface StringReverserFacadeInterface
{
    /**
     * Specification:
     * - Reverses string.
     *
     * @api
     *
     * @param string $string
     *
     * @return string
     */
    public function reverseString(string $string);

}
