<?php

namespace App\Http\Controllers;

use App\Models\Goods;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    public function index(Request $request)
    {
        $query = Goods::query();

        if ($request->has('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        if ($request->has('stock_id')) {
            $query->whereHas('stocks', function ($q) use ($request) {
                $q->where('id', $request->stock_id)
                    ->where('count', '>', 0);
            });
        }

        if ($request->has('price_min') && $request->has('price_max')) {
            $query->whereBetween('prices->price', [$request->price_min, $request->price_max]);
        }

        if ($request->has('characteristics')) {
            foreach ($request->characteristics as $key => $value) {
                $query->whereHas('characteristics', function ($q) use ($key, $value) {
                    $q->where('name', $key)->where('value', $value);
                });
            }
        }

        if ($request->has('sort_by')) {
            $query->orderBy($request->sort_by, $request->get('order', 'asc'));
        }

        $goods = $query->paginate($request->get('per_page', 14), $request->get('fields', ['*']));

        return response()->json($goods);
    }

}
