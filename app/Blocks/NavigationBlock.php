<?php

declare(strict_types=1);

namespace App\Blocks;

use Slate\Blocks\Block;

/**
 * Navigation block data.
 */
class NavigationBlock extends Block
{
    /**
     * {@inheritdoc}
     */
    public function build(): array
    {
        return [
          'node' => $this->config('node')->id,
          'name' => 'Navigation block',
        ];
    }
}
