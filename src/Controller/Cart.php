<?php


namespace App\Controller;

# # http://localhost:8000/cart

use Symfony\Component\HttpFoundation\Response;

class Cart
{
    public function displayCart(): Response
    {
       $items = '[{"code": "abc1","amount": 5},
                  {"code": "khf2","amount": 9},
                  {"code": "wfy3","amount": 3},
                  {"code": "wdf4","amount": 1},
                  {"code": "wsf5","amount": 4}]';

       $cart = json_decode($items);

        return new Response(
            '<html><body>Cart: '.json_encode($cart).'</body></html>'
        );
    }
}