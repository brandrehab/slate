<?php

declare(strict_types=1);

namespace App\Blocks;

use Slate\Blocks\Block;

/**
 * Head block data.
 */
class HeadBlock extends Block
{
    /**
     * {@inheritdoc}
     */
    public function build(): array
    {
        $seo = $this->config('seo');

        return [
          'title' => $seo['Meta Title']->first()->value,
          'description' => $seo['Meta Description']->first()->value,
          'name' => 'Head block',
        ];
    }
}
