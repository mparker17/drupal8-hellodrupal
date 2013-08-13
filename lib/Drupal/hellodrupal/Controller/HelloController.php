<?php

namespace Drupal\hellodrupal\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Controller class for the HelloDrupal module.
 */
class HelloController extends ControllerBase {

  public function helloHtml() {
    return 'Hello world!';
  }

  public function helloJson() {
    $response = new JsonResponse(array(
      'Hello' => 'Hello world',
    ));

    return $response;
  }

  public function helloName($name) {
    return 'Hello ' . check_plain($name) . '!';
  }

}
