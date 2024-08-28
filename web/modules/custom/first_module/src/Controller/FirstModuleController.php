<?php

namespace Drupal\first_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class FirstModuleController extends ControllerBase
{
  public function show(): Response
  {
    return new Response('Hello first module');
  }
}
