<?php

namespace App\Actions;

use App\Http\Requests\PassionRequest;
use App\Models\DetailPassion;
use App\Models\Passion;
use Illuminate\Support\Facades\DB;

class PassionAction
{
    public static function store(PassionRequest $request)
    {
        return DB::transaction(function () use ($request) {
            $passion = Passion::create($request->getPassion());

            $passion->details()->saveMany(
                $request->getDetailPassions()->map(fn ($v) => DetailPassion::create([
                    'key' => $v['key'],
                    'value' => $v['value'],
                    'passion_id' => $passion->id
                ]))
            );

            return $passion;
        });
    }

    public static function update(Passion $passion, PassionRequest $request)
    {
        return DB::transaction(function () use ($passion, $request) {
            $passion->update($request->getPassion());

            $request->getDetailPassions()->each(function ($item) use ($passion) {
                if (isset($item['id']) && !is_null($item['id'])) {
                    $pd = DetailPassion::where('id', $item['id'])->where('passion_id', $passion->id)->first();

                    $pd->update([
                        'key' => $item['key'],
                        'value' => $item['value'],
                        'passion_id' => $passion->id
                    ]);
                } else {
                    DetailPassion::create([
                        'key' => $item['key'],
                        'value' => $item['value'],
                        'passion_id' => $passion->id
                    ]);
                }
            });

            // delete if deleted in the view
            DetailPassion::where('passion_id', $passion->id)->whereNotIn('id', $request->getDetailPassions()->pluck('id')->all())->delete();

            return $passion;
        });
    }

    public static function destroy(Passion $passion)
    {
        return DB::transaction(fn () => $passion)->delete();
    }
}
