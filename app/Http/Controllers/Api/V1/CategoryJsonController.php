<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Actions\CategoryAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Resources\CategoryResource;
use Symfony\Component\HttpFoundation\Response;

class CategoryJsonController extends Controller
{
    public function index(Request $request)
    {
        return CategoryResource::collection(
            Category::query()->select(['id', 'name', 'created_at'])->paginate($request->query('per_page', 10))
        );
    }

    public function store(CategoryRequest $request)
    {
        try {
            return CategoryResource::make(CategoryAction::store($request->validated()));
        } catch (\Throwable $th) {
            return $this->errorJson($th->getCode(), $th->getMessage());
        }
    }

    public function update(Category $category, CategoryRequest $request)
    {
        try {
            return CategoryResource::make(
                CategoryAction::update($category, $request->validated())
            );
        } catch (\Throwable $th) {
            return $this->errorJson($th->getCode(), $th->getMessage());
        }
    }

    public function show(Category $category)
    {
        $category->load('passions');

        return CategoryResource::make($category);
    }

    public function destroy(Category $category)
    {
        try {
            CategoryAction::destroy($category);

            return response()->json([
                'message' => __('Berhasil menghapus kategori'),
            ], Response::HTTP_OK);
        } catch (\Throwable $th) {
            return $this->errorJson($th->getCode(), $th->getMessage());
        }
    }
}
