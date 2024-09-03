<?php

namespace Drupal\hello_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Link;
use Drupal\Core\Url;

class HelloController extends ControllerBase
{
  public function hi()
  {
    $url = Url::fromRoute('hello_module.form');
    $link = Link::fromTextAndUrl($this->t('Go to the form'), $url)->toString();
    return ['#markup' => $this->t('Hello, @user! @link', [
      '@link' => $link,
    ])];
  }

  public function greeting($user)
  {
    return ['#markup' => $this->t('Hello, @user!', ['@user' => $user])];
  }
}
