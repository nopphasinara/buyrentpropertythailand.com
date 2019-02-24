<?php

namespace Corcel\Model;

use Illuminate\Database\Eloquent\Builder;

/**
 * Class Package
 *
 * @package Corcel\Model
 * @author Junior Grossi <juniorgro@gmail.com>
 */
class Package extends Post
{
    /**
     * @var string
     */
    protected $postType = 'houzez_packages';
}
