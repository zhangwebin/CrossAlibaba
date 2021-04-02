<?php
/**
 * 协议类型
 * const param2 = "param2";
 * const json2 = "json2";
 * const xml2 = "xml2";
 * const param = "param";
 * const json = "json";
 * const xml = "xml";
 * const http = "http";
 */
return [
    'channel' => [
        'default' => [
            'domain' => 'domain',
            'format' => 'param2',
            'type' => 'openapi',
            'version' => 1,
            'appKey' => 'appKey',
            'secretKey' => 'secretKey',
            'access_token' => 'access_token',
        ]
    ],
    'relation' => [
        //铺货相关
        'Cross\Param\ProductInfo' => 'com.alibaba.product:alibaba.cross.productInfo-1',//跨境场景获取商品详情
        'Cross\Param\ProductPushed' => 'com.alibaba.product.push:alibaba.cross.syncProductListPushed-1',//跨境场景下将商品加入铺货列表
//        '' => 'com.alibaba.product.push:alibaba.product.push.syncPushProductResult-1',//同步铺货结果
        'Cross\Param\productIdList' => 'com.alibaba.product:alibaba.cross.productList-1',//跨境场景获取商品列表
        'Cross\Param\ProductUnFollow' => 'com.alibaba.product:alibaba.product.unfollow.crossborder-1',//解除关注商品
        //交易相关
        'Cross\Param\ProductInfo' => 'com.alibaba.product:alibaba.cross.productInfo-1',//跨境订单创建
        'Cross\Param\ProductInfo' => 'com.alibaba.product:alibaba.cross.productInfo-1',//订单详情查看(买家视角)
        'Cross\Param\ProductInfo' => 'com.alibaba.product:alibaba.cross.productInfo-1',//获取交易订单的物流信息(买家视角)
        'Cross\Param\ProductInfo' => 'com.alibaba.product:alibaba.cross.productInfo-1',//获取交易订单的物流跟踪信息(买家视角)
        'Cross\Param\ProductInfo' => 'com.alibaba.product:alibaba.cross.productInfo-1',//取消交易
        'Cross\Param\ProductInfo' => 'com.alibaba.product:alibaba.cross.productInfo-1',//订单列表查看(买家视角)
        'Cross\Param\ProductInfo' => 'com.alibaba.product:alibaba.cross.productInfo-1',//创建订单前预览数据接口
        'Cross\Param\ProductInfo' => 'com.alibaba.product:alibaba.cross.productInfo-1',//修改订单备忘
    ]

];
