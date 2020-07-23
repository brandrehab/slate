<?php

declare(strict_types=1);

namespace App\Views;

use App\Entities\Node;
use Slate\Views\View;
use Illuminate\Http\Response;

/**
 * Renders the section view.
 */
class SectionView extends View
{
    /**
     * Twig template.
     *
     * @var string
     */
    const TEMPLATE = 'client.html.twig';

    /**
     * Render a twig template.
     */
    public function render(Node $node): Response
    {
        return new Response($this->wrapper->render([
            'navigation' => $this->block->create('navigation', ['node' => $node]),
            'banners' => $this->block->create('banners', ['node' => $node]),
            'footer' => $this->block->create('footer', ['node' => $node]),
        ]));
    }
}
