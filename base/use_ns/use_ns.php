<?php

namespace Product {

    class School {
        public static function helloSchool()
        {
            echo "hello school".PHP_EOL;
        }
    }




}

namespace Product {
//    use School;
    function createGood()    {
        School::helloSchool();
        echo "create good".PHP_EOL;

    }


}

namespace Product\Shelf {

    use function Product\createGood;

    function createShelf()    {
        createGood();
        echo "create shelf".PHP_EOL;
    }

    class Product {
        public static function info()
        {
            echo "shelf product info".PHP_EOL;
        }
    }
}

namespace {

    use Product\Shelf;

    function helloUseProduct()
    {

        echo "before use product".PHP_EOL;
        Shelf\createShelf();
        Shelf\Product::info();
        echo "after use product".PHP_EOL;
    }

    helloUseProduct();

}

