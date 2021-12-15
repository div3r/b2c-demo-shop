<?php

namespace Pyz\Yves\PersonalizedProduct\Plugin\Router;

use Spryker\Yves\Router\Plugin\RouteProvider\AbstractRouteProviderPlugin;
use Spryker\Yves\Router\Route\RouteCollection;

class PersonalizedProductRouteProviderPlugin extends AbstractRouteProviderPlugin
{
    public const ROUTE_NAME_PERSONALIZED_PRODUCT_INDEX = 'personalized-product-index';

    /**
     * Specification:
     * - Adds Routes to the RouteCollection.
     *
     * @api
     *
     * @param RouteCollection $routeCollection
     *
     * @return RouteCollection
     */
    public function addRoutes(RouteCollection $routeCollection): RouteCollection
    {
        $route = $this->buildRoute('/personalized-product/{limit}', 'PersonalizedProduct', 'Index', 'index');
        $routeCollection->add(static::ROUTE_NAME_PERSONALIZED_PRODUCT_INDEX, $route);

        return $routeCollection;
    }

}
