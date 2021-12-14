<?php

namespace Pyz\Zed\HelloSpryker\Persistence;

use Spryker\Zed\Kernel\Persistence\AbstractQueryContainer;

class HelloSprykerQueryContainer extends AbstractQueryContainer implements HelloSprykerQueryContainerInterface
{
    /**
     * @param $id
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     *
     * @return \Orm\Zed\HelloSpryker\Persistence\PyzHelloSprykerQuery
     */
    public function queryHelloSprykerById($id)
    {
        return $this->getFactory()
            ->createHelloSprykerQuery()
            ->filterById($id);
    }

    /**
     * @api
     *
     * @return \Orm\Zed\HelloSpryker\Persistence\PyzHelloSprykerQuery
     */
    public function queryHelloSpryker()
    {
        return $this->getFactory()
            ->createHelloSprykerQuery();
    }

}
