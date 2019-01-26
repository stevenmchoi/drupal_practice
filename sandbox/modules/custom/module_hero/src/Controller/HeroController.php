<?php

namespace Drupal\module_hero\Controller;

use Drupal\Core\Controller\ControllerBase;

class HeroController extends ControllerBase {
  public function heroList()
  {
    $heroes = [
      ["name" => 'Hulk'],
      ["name" => 'Thor'],
      ["name" => 'Iron Man'],
    ];

    return [
      '#theme' => 'hero_list',
      "#items" => $heroes,
      '#title' => $this->t('Our wonderful hero list')
    ];
  }
}

?>
