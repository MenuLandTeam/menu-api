<?php
namespace App\Interfaces\Product_Categories;

interface ProductCategoryInterface
{

    public function index();

    public function store($request);

    public function show($item);

    public function update($request,$item);

    public function destroy($item);

}
