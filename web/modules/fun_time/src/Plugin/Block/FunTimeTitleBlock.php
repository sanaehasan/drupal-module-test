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
  /**
  * Implements hook_block_build_alter().
  */
 public function fun_time_block_build_alter(array &$build, BlockPluginInterface $block) {
   $user = \Drupal::currentUser();
   if ($user->hasRole('Limited')) {
     $build['#attached']['library'][] = 'fun_time/fun_time';
   }
 }

}
