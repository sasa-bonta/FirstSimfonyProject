<?php

// src/Controller/Products.php
# start server ~ php -S 127.0.0.1:8000 -t public/
# http://localhost:8000/products
# http://127.0.0.1:8000/ -- Symfony start page

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class Products
{
    public function displayProducts(): Response
    {
        $list = '[{"name":"test2","code":"124","price":40.55,"category":"tools", "created_at": "2013-03-21T13:28:06", "updated_at": "2013-03-21 13:28:06"},
        {"name":"test3","code":"125","price":30.55,"category":"book", "created_at": "2013-03-21T13:28:06", "updated_at": "2013-03-21 13:28:06"},
        {"name":"test4","code":"126","price":75.33,"category":"pen", "created_at": "2013-03-21T13:28:06", "updated_at": "2013-03-21 13:28:06"},
        {"name":"test5","code":"127","price":71.85,"category":"toy", "created_at": "2013-03-21T13:28:06", "updated_at": "2013-03-21 13:28:06"},
        {"name":"test6","code":"128","price":95.24,"category":"toy", "created_at": "2013-03-21T13:28:06", "updated_at": "2013-03-21 13:28:06"},
        {"name":"test7","code":"129","price":75.15,"category":"tool", "created_at": "2013-03-21T13:28:06", "updated_at": "2013-03-21 13:28:06"},
        {"name":"test8","code":"130","price":84.24,"category":"tool", "created_at": "2013-03-21T13:28:06", "updated_at": "2013-03-21 13:28:06"},
        {"name":"test9","code":"131","price":45.85,"category":"tool", "created_at": "2013-03-21T13:28:06", "updated_at": "2013-03-21 13:28:06"},
        {"name":"test10","code":"132","price":45.85,"category":"tool", "created_at": "2013-03-21T13:28:06", "updated_at": "2013-03-21 13:28:06"},
        {"name":"test11","code":"133","price":45.85,"category":"toy", "created_at": "2013-03-21T13:28:06", "updated_at": "2013-03-21 13:28:06"},
        {"name":"testUPDATED","code":"134","price":45.85,"category":"tool", "created_at": "2013-03-21T13:28:06", "updated_at": "2013-03-21 13:28:06"},
        {"name":"the most latest test","code":"135","price":178.25,"category":"staff", "created_at": "2013-03-21T13:28:06", "updated_at": "2013-03-21 13:28:06"}]';

        $products = json_decode($list);

        return new Response(
            '<html><body>List of Products: '.json_encode($products).'</body></html>'
        );
    }
}
