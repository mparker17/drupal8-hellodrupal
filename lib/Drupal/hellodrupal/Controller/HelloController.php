<?php

namespace Drupal\hellodrupal\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Controller class for the HelloDrupal module.
 */
class HelloController extends ControllerBase {

  public function hello_html() {
    return 'Hello world!';
  }

  public function hello_json() {
    $response = new JsonResponse(array(
      'Hello' => 'Hello world',
    ));

    return $response;
  }

  public function hello_name($name) {
    return 'Hello ' . check_plain($name) . '!';
  }

}
