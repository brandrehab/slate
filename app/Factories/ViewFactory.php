<?php

declare(strict_types=1);

namespace App\Factories;

use App\Factories\BlockFactory;
use App\Views\HomeView;
use App\Views\SectionView;
use App\Views\AboutView;
use Twig\Environment;

/**
 * Create a new instance of a view.
 */
class ViewFactory
{
    /**
     * Twig environment.
     *
     * @var \Twig\Environment
     */
    protected $twig;

    /**
     * Block factory.
     *
     * @var \App\Factories\BlockFactory
     */
    protected $block;

    /**
     * Class constructor.
     */
    public function __construct(Environment $twig, BlockFactory $block)
    {
        $this->twig = $twig;
        $this->block = $block;
    }

    /**
     * Attempt to create the requested view.
     *
     * @return mixed
     */
    public function create(string $view)
    {
        return method_exists($this, $view) ? $this->{$view}() : null;
    }

    /**
     * Home view.
     */
    private function home(): HomeView
    {
        return new HomeView($this->twig, $this->block);
    }

    /**
     * Section view.
     */
    private function section(): SectionView
    {
        return new SectionView($this->twig, $this->block);
    }

    /**
     * About view.
     */
    private function about(): AboutView
    {
        return new AboutView($this->twig, $this->block);
    }
}
