<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

abstract class BaseController extends Controller
{
    protected mixed $modelClass = Model::class;

    public function __construct()
    {
        $this->modelClass = new ($this->modelClass)();
    }

    /**
     * @return Collection
     */
    public function index(): Collection
    {
        return $this->modelClass::all();
    }

    /**
     * @param $id
     * @return Model
     */
    public function show($id): Model
    {
        return $this->modelClass::findOrFail($id);
    }

    /**
     * @throws Exception
     */
    public function store(Request $request): Model
    {
        return $this->modelClass::create($request->all());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,int $id): int
    {
        return $this->modelClass::whereId($id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): ?bool
    {
        return $this->modelClass::whereId($id)->delete();

    }

}
