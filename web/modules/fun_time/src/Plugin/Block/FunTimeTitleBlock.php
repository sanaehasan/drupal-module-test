<?php

namespace Drupal\fun_time\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'fun time Title' block.
 *
 * @Block(
 *   id = "fun_time_title_block",
 *   admin_label = @Translation("Fun time Title"),
 * )
 */
class FunTimeTitleBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $config = \Drupal::config('fun_time.settings');


    $title = $config->get('title');

    return [
      '#markup' => '<h1 id="title">'.$title.'</h1>',   
    ];
  }


}
