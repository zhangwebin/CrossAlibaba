<?php

namespace Cross\Param;

use Cross\Param\IDefinition;


class InvoiceInfo implements IDefinition
{
    /**
     * @var int
     */
    private $invoiceType;
    /**
     * @var string
     */
    private $provinceText;
    /**
     * @var string
     */
    private $cityText;
    /**
     * @var string
     */
    private $areaText;
    /**
     * @var string
     */
    private $townText;
    /**
     * @var string
     */
    private $postCode;
    /**
     * @var string
     */
    private $address;
    /**
     * @var string
     */
    private $fullName;
    /**
     * @var string
     */
    private $phone;
    /**
     * @var string
     */
    private $mobile;
    /**
     * @var string
     */
    private $companyName;
    /**
     * @var string
     */
    private $taxpayerIdentifier;
    /**
     * @var string
     */
    private $bankAndAccount;
    /**
     * @var string
     */
    private $localInvoiceId;

    /**
     * @return int
     */
    public function getInvoiceType(): int
    {
        return $this->invoiceType;
    }

    /**
     * @param int $invoiceType
     */
    public function setInvoiceType(int $invoiceType): void
    {
        $this->invoiceType = $invoiceType;
    }

    /**
     * @return string
     */
    public function getProvinceText(): string
    {
        return $this->provinceText;
    }

    /**
     * @param string $provinceText
     */
    public function setProvinceText(string $provinceText): void
    {
        $this->provinceText = $provinceText;
    }

    /**
     * @return string
     */
    public function getCityText(): string
    {
        return $this->cityText;
    }

    /**
     * @param string $cityText
     */
    public function setCityText(string $cityText): void
    {
        $this->cityText = $cityText;
    }

    /**
     * @return string
     */
    public function getAreaText(): string
    {
        return $this->areaText;
    }

    /**
     * @param string $areaText
     */
    public function setAreaText(string $areaText): void
    {
        $this->areaText = $areaText;
    }

    /**
     * @return string
     */
    public function getTownText(): string
    {
        return $this->townText;
    }

    /**
     * @param string $townText
     */
    public function setTownText(string $townText): void
    {
        $this->townText = $townText;
    }

    /**
     * @return string
     */
    public function getPostCode(): string
    {
        return $this->postCode;
    }

    /**
     * @param string $postCode
     */
    public function setPostCode(string $postCode): void
    {
        $this->postCode = $postCode;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return $this->fullName;
    }

    /**
     * @param string $fullName
     */
    public function setFullName(string $fullName): void
    {
        $this->fullName = $fullName;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getMobile(): string
    {
        return $this->mobile;
    }

    /**
     * @param string $mobile
     */
    public function setMobile(string $mobile): void
    {
        $this->mobile = $mobile;
    }

    /**
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     */
    public function setCompanyName(string $companyName): void
    {
        $this->companyName = $companyName;
    }

    /**
     * @return string
     */
    public function getTaxpayerIdentifier(): string
    {
        return $this->taxpayerIdentifier;
    }

    /**
     * @param string $taxpayerIdentifier
     */
    public function setTaxpayerIdentifier(string $taxpayerIdentifier): void
    {
        $this->taxpayerIdentifier = $taxpayerIdentifier;
    }

    /**
     * @return string
     */
    public function getBankAndAccount(): string
    {
        return $this->bankAndAccount;
    }

    /**
     * @param string $bankAndAccount
     */
    public function setBankAndAccount(string $bankAndAccount): void
    {
        $this->bankAndAccount = $bankAndAccount;
    }

    /**
     * @return string
     */
    public function getLocalInvoiceId(): string
    {
        return $this->localInvoiceId;
    }

    /**
     * @param string $localInvoiceId
     */
    public function setLocalInvoiceId(string $localInvoiceId): void
    {
        $this->localInvoiceId = $localInvoiceId;
    }


    public function toArray()
    {
        return get_object_vars($this);
    }

}
