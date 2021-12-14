<?php

namespace Pyz\Client\HelloSpryker;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Spryker\Client\Kernel\AbstractClient;

class HelloSprykerClient extends AbstractClient implements  HelloSprykerClientInterface
{
    /**
     * @param HelloSprykerTransfer $helloSprykerTransfer
     *
     * @return HelloSprykerTransfer|\Spryker\Shared\Kernel\Transfer\TransferInterface
     */
    public function reverseString(HelloSprykerTransfer $helloSprykerTransfer)
    {
        return $this->getFactory()
            ->createZedHelloSprykerStub()
            ->reverseString($helloSprykerTransfer);
    }

}
