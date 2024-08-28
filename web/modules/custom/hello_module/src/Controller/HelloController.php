<?php

namespace Drupal\hello_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends ControllerBase
{
  public function hi()
  {
    // return new Response('Hello world!');
    return ['#markup' => $this->t('Hello world')];
  }
}
