<?php

namespace Pyz\Client\HelloSpryker;

use Pyz\Client\HelloSpryker\Zed\HelloSprykerStub;
use Pyz\Client\HelloSpryker\Zed\HelloSprykerStubInterface;
use Spryker\Client\Kernel\AbstractFactory;

class HelloSprykerFactory extends AbstractFactory
{
    /**
     * @return HelloSprykerStubInterface
     */
    public function createZedHelloSprykerStub(): HelloSprykerStubInterface
    {
        return new HelloSprykerStub($this->getZedRequestClient());
    }

    /**
     * @return \Spryker\Client\ZedRequest\ZedRequestClientInterface
     */
    protected function getZedRequestClient()
    {
        return $this->getProvidedDependency(HelloSprykerDependencyProvider::CLIENT_ZED_REQUEST);
    }

}
