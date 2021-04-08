<?php

namespace Cross\test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cross\Param\ProductInfo;
use Cross\Param\ProductPushed;
use Cross\Param\ProductList;
use Cross\Param\ProductUnFollow;
use Cross\Param\Address;
use Cross\Param\CrossOrderItem;
use Cross\Param\InvoiceInfo;
use Cross\Facades\Alibaba;
use Cross\Param\CreateCrossOrder;

class TestController extends Controller
{
    function __invoke()
    {
        //铺货相关
        $productInfo = new ProductInfo();
        $productInfo->setProductId(123456);

        $productPushed = new ProductPushed();
        $productPushed->setProductIdList([1, 2, 3, 4]);

        $productList = new ProductList();
        $productList->setProductIdList([1111, 222]);

        $productUnFollow = new ProductUnFollow();
        $productUnFollow->setProductId(123);

        $address = new Address();
        $address->setAddressId(11111);

        $item1 = new CrossOrderItem();
        $item1->setOfferId(123456789);
        $item1->setSpecId("AAAAAAAAA");
        $item1->setQuantity(10);

        $item2 = new CrossOrderItem();
        $item2->setOfferId(987654321);
        $item2->setSpecId("BBBBBBBBB");
        $item2->setQuantity(20);

        $createCrossOrder = new CreateCrossOrder();
        $createCrossOrder->setFlow("general");
        $createCrossOrder->setAddressParam($address);
        $createCrossOrder->setCargoParamList([$item1, $item2]);


        $result = Alibaba::parseParams([$productInfo, $productPushed, $productList, $productUnFollow, $createCrossOrder]);

        dd($result);
        return "";
    }
}
