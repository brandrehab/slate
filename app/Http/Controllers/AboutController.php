<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Managers\NodeManager;
use Slate\Http\Controllers\Controller;
use Illuminate\Http\Response;

/**
 * About page controller.
 */
class AboutController extends Controller
{
    /**
     * Render an about page.
     */
    public function show(string $slug): Response
    {
        $view = $this->view->create('about');
        return $view->render(NodeManager::first('about', $slug));
    }
}
