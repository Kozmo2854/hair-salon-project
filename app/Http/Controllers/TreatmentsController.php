<?php

namespace App\Http\Controllers;

use App\Models\Treatment;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class TreatmentsController extends Controller
{
    /**
     * @return Collection
     */
    public function index(): Collection
    {
        return Treatment::all();
    }

    /**
     * @param Treatment $treatment
     * @return Treatment
     */
    public function show(Treatment $treatment): Treatment
    {
        return $treatment;
    }

    /**
     * @throws Exception
     */
    public function store(Request $request): Treatment
    {
        return Treatment::create($request->all());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Treatment $treatment): Treatment
    {
        $treatment->update($request->all());
        return $treatment;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Treatment $treatment): ?bool
    {
        return $treatment->delete();

    }
}
