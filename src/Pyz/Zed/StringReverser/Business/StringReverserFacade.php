<?php

namespace Pyz\Zed\StringReverser\Business;

use Spryker\Zed\Kernel\Business\AbstractFacade;

class StringReverserFacade extends AbstractFacade implements StringReverserFacadeInterface
{
    /**
     * @param string $string
     *
     * @return string
     */
    public function reverseString(string $string): string
    {
        return $this->getFactory()
            ->createStringReverser()
            ->reverseString($string);
    }

}
