<?php

namespace Corcel\Model;

use Illuminate\Database\Eloquent\Builder;

/**
 * Class Testimonial
 *
 * @package Corcel\Model
 * @author Junior Grossi <juniorgro@gmail.com>
 */
class Testimonial extends Post
{
    /**
     * @var string
     */
    protected $postType = 'houzez_testimonials';
}
