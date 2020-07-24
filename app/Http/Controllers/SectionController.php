<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Managers\NodeManager;
use Slate\Http\Controllers\Controller;
use Illuminate\Http\Response;

/**
 * Section page controller.
 */
class SectionController extends Controller
{
    /**
     * Render a section page.
     */
    public function show(string $slug): Response
    {
        $view = $this->view->create('section');
        return $view->render(NodeManager::first('section', $slug));
    }
}
