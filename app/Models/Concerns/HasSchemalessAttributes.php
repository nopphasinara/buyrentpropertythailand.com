<?php

namespace App\Models\Concerns;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Spatie\SchemalessAttributes\SchemalessAttributes;

trait HasSchemalessAttributesTrait
{
    public function getExtrasAttribute(): SchemalessAttributes
    {
       return SchemalessAttributes::createForModel($this, 'extras');
    }

    public function scopeWithExtras(): Builder
    {
        return SchemalessAttributes::scopeWithSchemalessAttributes('extras');
    }
}
