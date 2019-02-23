<?php

namespace Corcel\Model;

use Illuminate\Database\Eloquent\Builder;

/**
 * Class Property
 *
 * @package Corcel\Model
 * @author Junior Grossi <juniorgro@gmail.com>
 */
class Property extends Post
{
    /**
     * @var string
     */
    protected $postType = 'property';
}
