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
        // echo '<pre>'; print_r(request()->route()->getController()); echo '</pre>';
        // echo '<pre>'; print_r(request()->route()->controllerMiddleware()); echo '</pre>';
        // echo '<pre>'; print_r(request()->route()->middleware()); echo '</pre>';
        // echo '<pre>'; print_r(request()->route()->getAction()); echo '</pre>';
        // echo '<pre>'; print_r(request()->route()->getActionMethod()); echo '</pre>';
        // echo '<pre>'; print_r(request()->route()->getActionName()); echo '</pre>';
        // echo '<pre>'; print_r(request()->route()->getPrefix()); echo '</pre>';
        // echo '<pre>'; print_r(request()->route()->methods()); echo '</pre>';
        // echo '<pre>'; print_r(request()->route()->parameters()); echo '</pre>';
        // echo '<pre>'; print_r(request()->route()->getName()); echo '</pre>';
        // echo '<pre>'; print_r(get_class_methods(request()->route())); echo '</pre>';
        echo '<pre>'; print_r(app()->get('dashboard')); echo '</pre>';
        return;

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
