<?php
namespace App\Interfaces\User_Shop_Favourite;

interface UserShopFavouriteInterface
{

    public function index();

    public function store($request);

    public function show($item);

    public function update($request,$item);

    public function destroy($item);

}
