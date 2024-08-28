<?php

namespace Drupal\first_module\controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class firstModuleController extends AbstractController
{
  public function show(): Response
  {
    return $this->render('base.html.twig');
  }
}
