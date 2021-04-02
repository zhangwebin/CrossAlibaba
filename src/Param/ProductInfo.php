<?php

namespace Cross\Param;

use Cross\Param\IParam;


class ProductInfo extends IParam
{
    private $productId;

    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param mixed $productId
     */
    public function setProductId(int $productId): void
    {
        $this->productId = $productId;
    }

    public function toArray()
    {
        return get_object_vars($this);
    }

}
