<?php

namespace Corcel\Model;

use Illuminate\Database\Eloquent\Builder;

/**
 * Class UserPackage
 *
 * @package Corcel\Model
 * @author Junior Grossi <juniorgro@gmail.com>
 */
class UserPackage extends Post
{
    /**
     * @var string
     */
    protected $postType = 'user_packages';
}
