<?php

namespace Cross\Param;

use Cross\Param\IParam;


class ProductList extends IParam
{
    private $productIdList;

    /**
     * @return int[]
     */
    public function getProductIdList()
    {
        return $this->productIdList;
    }

    /**
     * @param int[] $productIdList
     */
    public function setProductIdList(array $productIdList): void
    {
        $this->productIdList = $productIdList;
    }


    public function toArray()
    {
        return [
            'productIdList' => json_encode($this->productIdList)
        ];
    }

}
