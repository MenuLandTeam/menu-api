<?php

namespace App\Http\Controllers\Users\Shops;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shops\ShopUserCreateRequest;
use App\Interfaces\Shops\ShopInterface;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    protected ShopInterface $repository;

    public function __construct(ShopInterface $shop)
    {
        $this->repository = $shop;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->repository->users_index();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ShopUserCreateRequest $request)
    {
        return $this->repository->users_store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
