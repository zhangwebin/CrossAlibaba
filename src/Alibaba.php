<?php

namespace Cross;

use Cross\Param\IParam;
use Illuminate\Support\Carbon;

class Alibaba
{

    /**
     *
     * @param IParam[] $params
     * @return  void
     */
    public function parseParams(array $params)
    {
        $result = [];
        foreach ($params as $param) {
            $param = $param->init();
            $param = $this->parseApiUrl($param);
            if ($param !== false) {
                $res = $this->handleParam($param);
                if ($res !== false) {
                    $result[] = $res;
                }
            }
        }
        return $result;
    }


    //把对象处理成url数据
    private function handleParam($param)
    {
        $url = '';
        $key = 'alibaba.channel.' . $param->getConfig();
        if (!$param->isAccessPrivateApi()) {
            $urlPath = '';
            $url .= "http" . ($param->isHttps() ? 's' : '');
            $url .= "://" . config($key . '.domain') . '/' . config($key . '.type');//网关
            $urlPath .= config($key . '.format');//数据格式
            $urlPath .= "/" . $param->getVersion();//版本
            $urlPath .= "/" . $param->getNameSpace();//命名空间
            $urlPath .= "/" . $param->getNameApi();//api名字
            $urlPath .= "/" . config($key . '.appKey');//appKey
            $url .= '/' . $urlPath;
            $factorArr = $param->toArray();
//            $factorArr['_aop_timestamp'] = Carbon::now()->getPreciseTimestamp(3);
            $factorArr['access_token'] = config($key . '.access_token');
            $factorArr['_aop_datePattern'] = 'yyyyMMddHHmmssSSSZ';
            $factorArr['_aop_signature'] = $this->apiSignature($urlPath, $factorArr, config($key . '.secretKey'));
            $data['url'] = $url;
            $data['method'] = $param->getMethod();
            array_walk($factorArr, function (&$item, $key) {
                $item = $key . '=' . urlencode($item);
            });
            $data['query'] = implode('&', $factorArr);
            return $data;
        }
        return false;
    }

    //根据配置解析出api名字、命名空间、版本号
    private function parseApiUrl(IParam $param)
    {
        $class = get_class($param);
        $relation = config('alibaba.relation');
        if (!empty($relation) && isset($relation[$class])) {
            $arr = preg_split('/[:-]/', $relation[$class]);
            if (count($arr) == 3) {
                $param->setNameSpace($arr[0]);
                $param->setNameApi($arr[1]);
                $param->setVersion($arr[2]);
                return $param;
            }
        }
        return false;
    }

    //api签名
    private function apiSignature(string $urlPath, array $params, string $secretKey)
    {
        $factorArr = [];
        foreach ($params as $key => $val) {
            $factorArr[] = $key . $val;
        }
        sort($factorArr);
        $factor = $urlPath . implode("", $factorArr);
        return strtoupper(bin2hex(hash_hmac("sha1", $factor, $secretKey, true)));
    }

}
