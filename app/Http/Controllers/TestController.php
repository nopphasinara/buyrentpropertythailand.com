<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function getPage($pagename = '')
    {
        if (!$pagename) {
            $pagename = 'index';
        }
        return $this->{$pagename}();
    }

    public function test1()
    {
        $collection = collect([
            1 => 11,
            5 => 13,
            12 => 14,
            21 => 15,
        ])->getCachingIterator();
        echo '<pre>'; print_r($collection); echo '</pre>';

        foreach ($collection as $key => $value) {
            dump($collection->current() . ':' . $collection->getInnerIterator()->current());
        }
        echo '<pre>'; print_r($collection); echo '</pre>';
    }
}
