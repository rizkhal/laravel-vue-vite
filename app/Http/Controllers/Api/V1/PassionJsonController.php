<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Passion;
use Illuminate\Http\Request;
use App\Actions\PassionAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\PassionRequest;
use App\Http\Resources\PassionResource;
use Symfony\Component\HttpFoundation\Response;

class PassionJsonController extends Controller
{
    public function index(Request $request)
    {
        return PassionResource::collection(
            Passion::query()->withCount('details')->paginate($request->query('per_page', 10))
        );
    }

    public function store(PassionRequest $request)
    {
        try {
            return PassionResource::make(
                PassionAction::store($request)
            );
        } catch (\Throwable $th) {
            return $this->errorJson($th->getCode(), $th->getMessage());
        }
    }

    public function show(Passion $passion)
    {
        $passion->load(['category', 'details']);
        $passion->loadCount('details');

        return PassionResource::make($passion);
    }

    public function update(Passion $passion, PassionRequest $request)
    {
        try {
            return PassionResource::make(
                PassionAction::update($passion, $request)
            );
        } catch (\Throwable $th) {
            return $this->errorJson($th->getCode(), $th->getMessage());
        }
    }

    public function destroy(Passion $passion)
    {
        try {
            PassionAction::destroy($passion);

            return response()->json([
                'message' => __('Berhasil menghapus kategori'),
            ], Response::HTTP_OK);
        } catch (\Throwable $th) {
            return $this->errorJson($th->getCode(), $th->getMessage());
        }
    }
}
