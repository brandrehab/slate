<?php

namespace App\Traits;

/**
 * Trait for the retrieval of Seo group values.
 */
trait SeoGroupTrait
{
    /**
     * Get the computed seo group values for this node.
     */
    public function getSeoAttribute(): ?array
    {
        if (!$group = $this->getGroup('SEO')) {
            return null;
        }

        return $this->getValues($group);
    }
}
