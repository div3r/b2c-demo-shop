<?php

namespace Pyz\Yves\HelloSpryker\Plugin\Router;

use Spryker\Yves\Router\Plugin\RouteProvider\AbstractRouteProviderPlugin;
use Spryker\Yves\Router\Route\RouteCollection;

class HelloSprykerRouteProviderPlugin extends AbstractRouteProviderPlugin
{
    public const ROUTE_NAME_HELLO_SPRYKER_INDEX = 'hello-spryker-index';

    /**
     * Specification:
     * - Adds Routes to the RouteCollection.
     *
     * @param RouteCollection $routeCollection
     *
     * @return RouteCollection
     * @api
     *
     */
    public function addRoutes(RouteCollection $routeCollection): RouteCollection
    {

        $routeCollection = $this->addHelloSprykerIndexRoute($routeCollection);

        return $routeCollection;
    }

    /**
     * @param \Spryker\Yves\Router\Route\RouteCollection $routeCollection
     *
     * @return \Spryker\Yves\Router\Route\RouteCollection
     */
    protected function addHelloSprykerIndexRoute(RouteCollection $routeCollection): RouteCollection
    {
        $route = $this->buildRoute('/hello-spryker', 'HelloSpryker', 'Index', 'index');
        $routeCollection->add(static::ROUTE_NAME_HELLO_SPRYKER_INDEX, $route);

        return $routeCollection;
    }

}
