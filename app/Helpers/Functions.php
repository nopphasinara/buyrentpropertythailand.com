<?php

if (!function_exists('get_meta_keys')) {
    function get_meta_keys($collect = [])
    {
        if (!$collect) {
            return null;
        }

        $metaKeys = collect([]);
        $collect->map(function ($item, $key) use (&$metaKeys) {
            $meta = $item->meta()->get();
            $meta->pluck('meta_key')->map(function ($item, $key) use (&$metaKeys) {
                if (!$metaKeys->containsStrict($item)) {
                    $metaKeys->push($item);
                }
            });
        });
        $sorted = $metaKeys->sort()->values()->all();
        return $sorted;
    }
}
