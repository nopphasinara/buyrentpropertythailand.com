<?php

namespace Corcel\Model;

use Illuminate\Database\Eloquent\Builder;

/**
 * Class Agent
 *
 * @package Corcel\Model
 * @author Junior Grossi <juniorgro@gmail.com>
 */
class Agent extends Post
{
    /**
     * @var string
     */
    protected $postType = 'houzez_agent';
}
