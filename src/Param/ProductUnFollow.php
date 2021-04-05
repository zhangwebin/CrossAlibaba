<?php

namespace Cross\Param;

use Cross\Param\IParam;


class ProductUnFollow extends IParam
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
        return [
            'productId' => json_encode($this->productId)
        ];
    }

}
