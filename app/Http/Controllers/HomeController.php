<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Managers\NodeManager;
use Slate\Http\Controllers\Controller;
use Illuminate\Http\Response;

/**
 * Home page controller.
 */
class HomeController extends Controller
{
  /**
   * Render the home page.
   */
    public function show(): Response
    {
        $view = $this->view->create('home');
        return $view->render(NodeManager::first('home'));
    }
}
