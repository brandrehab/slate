<?php

declare(strict_types=1);

namespace App\Factories;

use App\Blocks\BannersBlock;
use App\Blocks\FooterBlock;
use App\Blocks\NavigationBlock;
use App\Blocks\HeadBlock;
use Slate\Factories\BlockFactoryInterface;

/**
 * Create a new instance of a block.
 */
class BlockFactory implements BlockFactoryInterface
{
    /**
     * Attempt to create the requested block.
     *
     * @return mixed
     */
    public function create(string $block, ?array $config = [])
    {
        return method_exists($this, $block) ? $this->{$block}($config)->build() : null;
    }

    /**
     * Banners block.
     */
    private function banners(array $config): BannersBlock
    {
        return new BannersBlock($config);
    }

    /**
     * Footer block.
     */
    private function footer(array $config): FooterBlock
    {
        return new FooterBlock($config);
    }

    /**
     * Navigation block.
     */
    private function navigation(array $config): NavigationBlock
    {
        return new NavigationBlock($config);
    }

    /**
     * Head block.
     */
    private function head(array $config): HeadBlock
    {
        return new HeadBlock($config);
    }
}
