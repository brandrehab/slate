<?php

declare(strict_types=1);

namespace App\Blocks;

use Slate\Blocks\Block;

/**
 * Banners block data.
 */
class BannersBlock extends Block
{
    /**
     * {@inheritdoc}
     */
    public function build(): array
    {
        return [
          'node' => $this->config('node')->id,
          'name' => 'Banners block',
        ];
    }
}
