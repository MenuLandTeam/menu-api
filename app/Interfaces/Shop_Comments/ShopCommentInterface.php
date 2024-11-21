<?php
namespace App\Interfaces\Shop_Comments;

interface ShopCommentInterface
{

    public function index();

    public function store($request);

    public function show($item);

    public function update($request,$item);

    public function destroy($item);

}
