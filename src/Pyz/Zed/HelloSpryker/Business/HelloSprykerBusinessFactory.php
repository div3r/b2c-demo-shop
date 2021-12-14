<?php

namespace Pyz\Zed\HelloSpryker\Business;

use Pyz\Zed\HelloSpryker\Business\Reader\StringReader;
use Pyz\Zed\HelloSpryker\Business\Reader\StringReaderInterface;
use Pyz\Zed\HelloSpryker\Business\Writer\StringWriter;
use Pyz\Zed\HelloSpryker\Business\Writer\StringWriterInterface;
use Pyz\Zed\HelloSpryker\HelloSprykerDependencyProvider;
use Pyz\Zed\StringReverser\Business\StringReverserFacade;
use Pyz\Zed\StringReverser\Business\StringReverserFacadeInterface;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

class HelloSprykerBusinessFactory extends AbstractBusinessFactory
{
    public function createStringReverser()
    {
        return $this->getStringReverserFacade();
    }

    /**
     * @return StringReaderInterface
     */
    public function createStringReader(): StringReaderInterface
    {
        return new StringReader($this->getRepository());
    }

    /**
     * @return StringWriterInterface
     */
    public function createStringWriter(): StringWriterInterface
    {
        return new StringWriter($this->getEntityManager());
    }

    /**
     * @return StringReverserFacade
     */
    protected function getStringReverserFacade(): StringReverserFacadeInterface
    {
        return $this->getProvidedDependency(HelloSprykerDependencyProvider::FACADE_STRING_REVERSER);
    }

}
