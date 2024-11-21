<?php
namespace App\Interfaces\Shop_Rates;

interface ShopRateInterface
{

    public function index();

    public function store($request);

    public function show($item);

    public function update($request,$item);

    public function destroy($item);

}
