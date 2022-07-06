<?php

namespace App\Actions;

use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryAction
{
    public static function store(array $validated)
    {
        return DB::transaction(function () use ($validated) {
            return Category::create($validated);
        });
    }

    public static function update(Category $category, array $validated)
    {
        return DB::transaction(function () use ($category, $validated) {
            $category->update($validated);
            return $category;
        });
    }

    public static function destroy(Category $category)
    {
        return DB::transaction(fn () => $category->delete());
    }
}
