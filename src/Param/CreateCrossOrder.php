<?php

namespace Cross\Param;

use Cross\Param\IParam;
use Cross\Param\Address;
use Cross\Param\CrossOrderItem;
use Cross\Param\InvoiceInfo;


class CreateCrossOrder extends IParam
{
    /**
     * @var string
     */
    private $flow;
    /**
     * @var string
     */
    private $message;
    /**
     * @var Address
     */
    private $addressParam;
    /**
     * @var CrossOrderItem[]
     */
    private $cargoParamList;

    /**
     * @var InvoiceInfo
     */
    private $invoiceParam;
    /**
     * @var string
     */
    private $tradeType;
    /**
     * @var string
     */
    private $shopPromotionId;
    /**
     * @var bool
     */
    private $anonymousBuyer;

    /**
     * @return string
     */
    public function getFlow(): string
    {
        return $this->flow;
    }

    /**
     * @param string $flow
     */
    public function setFlow(string $flow): void
    {
        $this->flow = $flow;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return \Cross\Param\Address
     */
    public function getAddressParam(): \Cross\Param\Address
    {
        return $this->addressParam;
    }

    /**
     * @param \Cross\Param\Address $addressParam
     */
    public function setAddressParam(\Cross\Param\Address $addressParam): void
    {
        $this->addressParam = $addressParam;
    }

    /**
     * @return CrossOrderItem[]
     */
    public function getCargoParamList(): array
    {
        return $this->cargoParamList;
    }

    /**
     * @param CrossOrderItem[] $cargoParamList
     */
    public function setCargoParamList(array $cargoParamList): void
    {
        $this->cargoParamList = $cargoParamList;
    }

    /**
     * @return \Cross\Param\InvoiceInfo
     */
    public function getInvoiceParam(): \Cross\Param\InvoiceInfo
    {
        return $this->invoiceParam;
    }

    /**
     * @param \Cross\Param\InvoiceInfo $invoiceParam
     */
    public function setInvoiceParam(\Cross\Param\InvoiceInfo $invoiceParam): void
    {
        $this->invoiceParam = $invoiceParam;
    }

    /**
     * @return string
     */
    public function getTradeType(): string
    {
        return $this->tradeType;
    }

    /**
     * @param string $tradeType
     */
    public function setTradeType(string $tradeType): void
    {
        $this->tradeType = $tradeType;
    }

    /**
     * @return string
     */
    public function getShopPromotionId(): string
    {
        return $this->shopPromotionId;
    }

    /**
     * @param string $shopPromotionId
     */
    public function setShopPromotionId(string $shopPromotionId): void
    {
        $this->shopPromotionId = $shopPromotionId;
    }

    /**
     * @return bool
     */
    public function isAnonymousBuyer(): bool
    {
        return $this->anonymousBuyer;
    }

    /**
     * @param bool $anonymousBuyer
     */
    public function setAnonymousBuyer(bool $anonymousBuyer): void
    {
        $this->anonymousBuyer = $anonymousBuyer;
    }


    public function toArray()
    {
        $data['flow'] = $this->flow;
        if (!empty($this->message)) {
            $data['message'] = $this->message;
        }

        $data['addressParam'] = json_encode($this->addressParam->toArray());
        foreach ($this->cargoParamList as $orderItem) {
            $data['cargoParamList'][] = $orderItem->toArray();
        }
        $data['cargoParamList'] = json_encode($data['cargoParamList']);

        if (!empty($this->invoiceParam)) {
            $data['invoiceParam'] = json_encode($this->invoiceParam);
        }
        if (!empty($this->tradeType)) {
            $data['tradeType'] = $this->tradeType;
        }
        if (!empty($this->shopPromotionId)) {
            $data['shopPromotionId'] = $this->shopPromotionId;
        }
        if (!is_null($this->anonymousBuyer)) {
            $data['anonymousBuyer'] = $this->anonymousBuyer;
        }
        return $data;
    }

}
