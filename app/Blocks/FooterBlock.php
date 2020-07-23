<?php

declare(strict_types=1);

namespace App\Blocks;

use Slate\Blocks\Block;

/**
 * Footer block data.
 */
class FooterBlock extends Block
{
    /**
     * {@inheritdoc}
     */
    public function build(): array
    {
        return [
          'node' => $this->config('node')->id,
          'name' => 'Footer block',
        ];
    }
}
