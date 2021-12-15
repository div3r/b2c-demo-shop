<?php

namespace Pyz\Client\PersonalizedProduct;

use Pyz\Client\PersonalizedProduct\Plugin\Elasticsearch\Query\PersonalizedProductQueryPlugin;
use Spryker\Client\Search\SearchClientInterface;
use Spryker\Client\Kernel\AbstractFactory;
use Spryker\Yves\Kernel\Exception\Container\ContainerKeyNotFoundException;

class PersonalizedProductFactory extends AbstractFactory
{
    /**
     * @param $limit
     *
     * @return PersonalizedProductQueryPlugin
     */
    public function createPersonalizedProductsQueryPlugin($limit)
    {
        return new PersonalizedProductQueryPlugin($limit);
    }

    /**
     * @throws ContainerKeyNotFoundException
     *
     * @return array
     */
    public function getSearchQueryFormatters()
    {
        return $this->getProvidedDependency(PersonalizedProductDependencyProvider::CATALOG_SEARCH_RESULT_FORMATTER_PLUGINS);
    }

    /**
     * @throws ContainerKeyNotFoundException
     *
     * @return SearchClientInterface
     */
    public function getSearchClient()
    {
        return $this->getProvidedDependency(PersonalizedProductDependencyProvider::CLIENT_SEARCH);
    }

}
