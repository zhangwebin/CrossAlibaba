<?php

namespace Cross\Param;

use Cross\Param\IDefinition;


class Address implements IDefinition
{
    /**
     * @var int
     */
    private $addressId;
    /**
     * @var string
     */
    private $fullName;
    /**
     * @var string
     */
    private $mobile;
    /**
     * @var string
     */
    private $phone;
    /**
     * @var string
     */
    private $postCode;
    /**
     * @var string
     */
    private $cityText;
    /**
     * @var string
     */
    private $provinceText;
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
    private $address;
    /**
     * @var string
     */
    private $districtCode;

    /**
     * @return int
     */
    public function getAddressId(): int
    {
        return $this->addressId;
    }

    /**
     * @param int $addressId
     */
    public function setAddressId(int $addressId): void
    {
        $this->addressId = $addressId;
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
    public function getDistrictCode(): string
    {
        return $this->districtCode;
    }

    /**
     * @param string $districtCode
     */
    public function setDistrictCode(string $districtCode): void
    {
        $this->districtCode = $districtCode;
    }

    public function toArray()
    {
        return get_object_vars($this);
    }

}
