<?php

namespace Cross\Param;

use Cross\Param\IDefinition;


class CrossOrderItem implements IDefinition
{
    /**
     * @var int
     */
    private $offerId;
    /**
     * @var string
     */
    private $specId;
    /**
     * @var float|int
     */
    private $quantity;

    /**
     * @return int
     */
    public function getOfferId(): int
    {
        return $this->offerId;
    }

    /**
     * @param int $offerId
     */
    public function setOfferId(int $offerId): void
    {
        $this->offerId = $offerId;
    }

    /**
     * @return string
     */
    public function getSpecId(): string
    {
        return $this->specId;
    }

    /**
     * @param string $specId
     */
    public function setSpecId(string $specId): void
    {
        $this->specId = $specId;
    }

    /**
     * @return float|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param float|int $quantity
     */
    public function setQuantity($quantity): void
    {
        $this->quantity = $quantity;
    }


    public function toArray()
    {
        return get_object_vars($this);
    }

}
