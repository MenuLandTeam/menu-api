<?php

namespace App\Repositories\Shops;



use App\Http\Resources\Shops\ShopUserIndexResource;
use App\Interfaces\Shops\ShopInterface;

class ShopRepository implements ShopInterface
{
    public function index()
    {

    }

    public function store($request)
    {

    }

    public function show($item)
    {

    }

    public function update($request, $item)
    {

    }

    public function destroy($item)
    {

    }

    //Users
    public function users_index(): \Illuminate\Http\JsonResponse
    {
        $data = auth()->user()->shops();
        $data->with(['province','city','category']);
        return helper_response_fetch(ShopUserIndexResource::collection($data->get()));

    }

    public function users_store($request)
    {
        // TODO: Implement users_store() method.

    }

}
