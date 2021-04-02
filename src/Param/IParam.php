<?php


namespace Cross\Param;

use Cross\Param\IDefinition;

abstract class IParam implements IDefinition
{
    private $method;//请求方法['GET','POST']
    private $https;//默认https
    private $accessPrivateApi;//默认是1688标准api接口,否则要单独处理
    private $version;//版本
    private $nameSpace;//命名空间
    private $nameApi;//api名字
    private $config;//配置项

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @param string $method
     */
    public function setMethod(string $method): void
    {
        $this->method = $method;
    }

    /**
     * @return bool
     */
    public function isHttps(): bool
    {
        return $this->https;
    }

    /**
     * @param bool $https
     */
    public function setHttps(bool $https): void
    {
        $this->https = $https;
    }

    /**
     * @return bool
     */
    public function isAccessPrivateApi(): bool
    {
        return $this->accessPrivateApi;
    }

    /**
     * @param bool $accessPrivateApi
     */
    public function setAccessPrivateApi(bool $accessPrivateApi): void
    {
        $this->accessPrivateApi = $accessPrivateApi;
    }

    /**
     * @return int
     */
    public function getVersion(): int
    {
        return $this->version;
    }

    /**
     * @param int $version
     */
    public function setVersion(int $version): void
    {
        $this->version = $version;
    }

    /**
     * @return string
     */
    public function getNameSpace(): string
    {
        return $this->nameSpace;
    }

    /**
     * @param string $nameSpace
     */
    public function setNameSpace(string $nameSpace): void
    {
        $this->nameSpace = $nameSpace;
    }

    /**
     * @return mixed
     */
    public function getNameApi()
    {
        return $this->nameApi;
    }

    /**
     * @param mixed $nameApi
     */
    public function setNameApi(string $nameApi): void
    {
        $this->nameApi = $nameApi;
    }


    /**
     * @return string
     */
    public function getConfig(): string
    {
        return $this->config;
    }

    /**
     * @param string $config
     */
    public function setConfig(string $config): void
    {
        $this->config = $config;
    }

    public function init()
    {
        if (is_null($this->config)) {
            $this->setConfig('default');
        }

        $name = 'alibaba.channel';
        $prefix = $name . '.' . $this->config;

        if (empty(config($prefix)) && is_array(config($name))) {
            $prefix = $name . '.' . key(config($name));
        }

        if (is_null($this->version)) {
            $this->setVersion(config("{$prefix}.version"));
        }

        if (is_null($this->method)) {
            $this->setMethod('POST');
        }

        if (is_null($this->https)) {
            $this->setHttps(false);
        }

        if (is_null($this->accessPrivateApi)) {
            $this->setAccessPrivateApi(false);
        }
        return $this;
    }

    abstract public function toArray();

}
