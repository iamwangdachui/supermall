<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/10/12
 * Time: 14:20
 */
header("Access-Control-Allow-Origin:*");

$a = [
    'result' => [
        'itemInfo' => [
            'topImages' => [
                'http://test.cn/imgs/2.jpg',
                'http://test.cn/imgs/2.jpg',
                'http://test.cn/imgs/2.jpg',
                'http://test.cn/imgs/2.jpg'
            ],
            'title'     =>  '2019春秋新款',
            'desc'      =>  '某商品的描述',
            'price'     =>  28.59,
            'oldPrice'  =>  30.61,
            'discountDesc'  =>  '活动价',
            'lowNow'        =>  26.15
        ],
        'columns' => [
            '销量 1580','收藏 33人'
        ],
        'shopInfo' => [
            'services' => [
                ['name' => '退货补运费','icon' => 'http://test.cn/imgs/3.jpg'],
                ['name' => '全国包邮','icon' => 'http://test.cn/imgs/3.jpg'],
                ['name' => '7天无理由退货','icon' => 'http://test.cn/imgs/3.jpg'],
                ['name' => '72小时发货','icon' => 'http://test.cn/imgs/3.jpg']
            ],
            'shopLogo'  =>  'http://test.cn/imgs/4.jpg',
            'name'      =>  '仲陌美',
            'cFans'      =>  23,
            'cSells'     =>  3523,
            'score'     =>  [
                ['isBetter' => false,'name' => '描述相符','score' => 4.64],
                ['isBetter' => true,'name' => '物流速度','score' => 4.99],
                ['isBetter' => false,'name' => '服务态度','score' => 4.12],
                ['isBetter' => false,'name' => '服务态度','score' => 4.12],
                ['isBetter' => false,'name' => '服务态度','score' => 4.12],
                ['isBetter' => false,'name' => '服务态度','score' => 4.12],
                ['isBetter' => false,'name' => '服务态度','score' => 4.12],
                ['isBetter' => false,'name' => '服务态度','score' => 4.12]
            ],
            'goodsCount'    =>  21
        ]
    ]
];

echo json_encode($a);