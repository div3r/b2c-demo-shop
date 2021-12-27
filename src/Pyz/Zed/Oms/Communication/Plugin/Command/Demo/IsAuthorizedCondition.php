<?php

namespace Pyz\Zed\Oms\Communication\Plugin\Command\Demo;

use Orm\Zed\Sales\Persistence\SpySalesOrderItem;
use Spryker\Zed\Oms\Communication\Plugin\Oms\Condition\AbstractCondition;
use Spryker\Zed\Oms\Dependency\Plugin\Condition\ConditionInterface;

class IsAuthorizedCondition extends AbstractCondition implements ConditionInterface
{
    /**
     * @param SpySalesOrderItem $orderItem
     *
     * @return bool
     */
    public function check(SpySalesOrderItem $orderItem): bool
    {
        return true;
    }

}
