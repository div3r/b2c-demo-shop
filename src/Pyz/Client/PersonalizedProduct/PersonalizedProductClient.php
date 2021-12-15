<?php

namespace Pyz\Client\PersonalizedProduct;

use Spryker\Client\Kernel\AbstractClient;

class PersonalizedProductClient extends AbstractClient implements PersonalizedProductClientInterface
{
    /**
     * @param int $limit
     *
     * @return array
     */
    public function getPersonalizedProducts(int $limit): array
    {
        /** @var PersonalizedProductFactory $personalizedProductFactory */
        $personalizedProductFactory = $this->getFactory();

        $searchQuery = $personalizedProductFactory
            ->createPersonalizedProductsQueryPlugin($limit);



        $searchQueryFormatters = $personalizedProductFactory
            ->getSearchQueryFormatters();

        $searchResult = $this->getFactory()
            ->getSearchClient()
            ->search(
                $searchQuery,
                $searchQueryFormatters
            );



        return $searchResult;
    }

}
