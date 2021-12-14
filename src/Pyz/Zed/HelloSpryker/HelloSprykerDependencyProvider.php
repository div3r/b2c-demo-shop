<?php

namespace Pyz\Zed\HelloSpryker;

use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\Container;

class HelloSprykerDependencyProvider extends AbstractBundleDependencyProvider
{
    const FACADE_STRING_REVERSER = 'FACADE_STRING_REVERSER';

    /**
     * @param Container $container
     *
     * @return Container
     */
    public function provideBusinessLayerDependencies(Container  $container)
    {
        $container = $this->addStringReverserFacade($container);

        return $container;
    }

    /**
     * @param Container $container
     *
     * @return Container
     */
    protected function addStringReverserFacade(Container $container)
    {
        $container[static::FACADE_STRING_REVERSER] = function (Container    $container) {
            return $container->getLocator()->stringReverser()->facade();
        };

        return $container;
    }

}
