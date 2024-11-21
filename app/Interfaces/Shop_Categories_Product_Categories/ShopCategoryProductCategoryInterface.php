<?php
namespace App\Interfaces\Shop_Categories_Product_Categories;

interface ShopCategoryProductCategoryInterface
{

    public function index();

    public function store($request);

    public function show($item);

    public function update($request,$item);

    public function destroy($item);

}
