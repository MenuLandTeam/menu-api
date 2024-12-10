<?php

namespace App\Providers;

use App\Interfaces\Auth\AuthInterface;
use App\Interfaces\Product_Categories\ProductCategoryInterface;
use App\Interfaces\Product_Comments\ProductCommentInterface;
use App\Interfaces\Product_Media\ProductMediaInterface;
use App\Interfaces\Product_Rates\ProductRateInterface;
use App\Interfaces\Product_Shop_Favourite\ProductShopFavouriteInterface;
use App\Interfaces\Shop_Categories\ShopCategoryInterface;
use App\Interfaces\Shop_Categories_Product_Categories\ShopCategoryProductCategoryInterface;
use App\Interfaces\Shop_Comments\ShopCommentInterface;
use App\Interfaces\Shop_Products\ShopProductInterface;
use App\Interfaces\Shop_Rates\ShopRateInterface;
use App\Interfaces\Shops\ShopInterface;
use App\Interfaces\User_Shop_Favourite\UserShopFavouriteInterface;
use App\Repositories\Auth\AuthRepository;
use App\Repositories\Product_Categories\ProductCategoryRepository;
use App\Repositories\Product_Comments\ProductCommentRepository;
use App\Repositories\Product_Media\ProductMediaRepository;
use App\Repositories\Product_Rates\ProductRateRepository;
use App\Repositories\Product_Shop_Favourite\ProductShopFavouriteRepository;
use App\Repositories\Shop_Categories\ShopCategoryRepository;
use App\Repositories\Shop_Categories_Product_Categories\ShopCategoryProductCategoryRepository;
use App\Repositories\Shop_Comments\ShopCommentRepository;
use App\Repositories\Shop_Products\ShopProductRepository;
use App\Repositories\Shop_Rates\ShopRateRepository;
use App\Repositories\Shops\ShopRepository;
use App\Repositories\User_Shop_Favourite\UserShopFavouriteRepository;
use Carbon\Laravel\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(AuthInterface::class,AuthRepository::class);
        $this->app->bind(ProductCategoryInterface::class,ProductCategoryRepository::class);
        $this->app->bind(ProductCommentInterface::class,ProductCommentRepository::class);
        $this->app->bind(ProductMediaInterface::class,ProductMediaRepository::class);
        $this->app->bind(ProductRateInterface::class,ProductRateRepository::class);
        $this->app->bind(ProductShopFavouriteInterface::class,ProductShopFavouriteRepository::class);
        $this->app->bind(ShopCategoryInterface::class,ShopCategoryRepository::class);
        $this->app->bind(ShopCategoryProductCategoryInterface::class,ShopCategoryProductCategoryRepository::class);
        $this->app->bind(ShopCommentInterface::class,ShopCommentRepository::class);
        $this->app->bind(ShopProductInterface::class,ShopProductRepository::class);
        $this->app->bind(ShopRateInterface::class,ShopRateRepository::class);
        $this->app->bind(ShopInterface::class,ShopRepository::class);
        $this->app->bind(UserShopFavouriteInterface::class,UserShopFavouriteRepository::class);

    }

    public function boot(): void
    {

    }
}



?>
