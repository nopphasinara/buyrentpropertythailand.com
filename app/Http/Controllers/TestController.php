<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function getPage($name = '')
    {
        if (!$name) {
            $name = 'index';
        }
        return $this->{$name}();
    }

    public function getTemplate($name = '')
    {
        if (!$name) {
            $name = 'home';
        }

        $path = 'demo.'. trim($name, '.') .'';
        if (!view()->exists($path)) {
            return abort(404);
        }
        return view($path);
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
