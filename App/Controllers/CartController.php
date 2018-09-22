<?php

namespace App\Controllers\Admin;

//use App\Models\Product\Category;
//use App\Models\Product\Product;
//use App\Services\Store\Services\ProductStore;
//use App\Services\Validators\Validators\ProductStoreValidator;
use Core\Controller;
use Core\Request;
use Core\View;

/**
 * Cart controller
 *
 * PHP version 7.0
 */
class CartController extends Controller
{
    /**
     * @var Product
     */
    public $product;

    public function __construct(
        Product $product
    ) {
        $this->product = $product;
    }

    public function setSession($id){
        $product = $this->product->findById($id);
        var_dump($product);
        session_start();
        $_SESSION['id'] = $product;

    }

}