<?php
namespace App\Interfaces\Product_Comments;

interface ProductCommentInterface
{

    public function index();

    public function store($request);

    public function show($item);

    public function update($request,$item);

    public function destroy($item);

}
