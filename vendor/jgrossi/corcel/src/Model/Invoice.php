<?php

namespace Corcel\Model;

use Illuminate\Database\Eloquent\Builder;

/**
 * Class Invoice
 *
 * @package Corcel\Model
 * @author Junior Grossi <juniorgro@gmail.com>
 */
class Invoice extends Post
{
    /**
     * @var string
     */
    protected $postType = 'houzez_invoice';
}
