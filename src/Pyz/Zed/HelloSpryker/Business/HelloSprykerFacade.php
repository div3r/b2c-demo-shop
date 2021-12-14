<?php

namespace Pyz\Zed\HelloSpryker\Business;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

class HelloSprykerFacade extends AbstractFacade implements HelloSprykerFacadeInterface
{
    // Your code goes here

    /**
     * @param HelloSprykerTransfer $helloSprykerTransfer
     *
     * @return string
     */
    public function reverseString(HelloSprykerTransfer $helloSprykerTransfer)
    {
         $reversedString = $this->getFactory()
            ->createStringReverser()
            ->reverseString($helloSprykerTransfer->getOriginalString());

        $helloSprykerTransfer->setReversedString($reversedString);

        return $helloSprykerTransfer->getReversedString();
    }

    /**
     *
     * Specification:
     * - Creates a database record
     * @inheritDoc
     *
     * @param HelloSprykerTransfer $helloSprykerTransfer
     *
     * @return HelloSprykerTransfer
     * @api
     *
     */
    public function createHelloSprykerEntity(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer
    {
        return $this->getFactory()->createStringWriter()->createHelloSprykerEntity($helloSprykerTransfer);
    }

    /**
     * Specification:
     * - Finds a record in database
     * @inheritDoc
     *
     * @param HelloSprykerTransfer $helloSprykerTransfer
     *
     * @return HelloSprykerTransfer
     * @api
     *
     */
    public function findHelloSpryker(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer
    {
        return $this->getFactory()->createStringReader()->findHelloSpryker($helloSprykerTransfer);
    }

}
