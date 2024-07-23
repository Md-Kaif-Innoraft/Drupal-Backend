<?php

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class HelloWorldController.
 *
 * Provides a 'Hello World' message with user permission check.
 */
class HelloWorldController extends ControllerBase {

  /**
   * Returns a render array with a 'Hello World' message.
   *
   * Checks if the current user has the 'custom permission' and displays a personalized greeting.
   *
   * @return array
   *   A render array containing the message.
   */
  public function content() {
    // Check if the current user has the 'custom permission'.
    if (\Drupal::currentUser()->hasPermission('custom permission')) {
      // Get the display name of the current user.
      $userName = \Drupal::currentUser()->getDisplayName();

      // Return a render array with a personalized greeting.
      return [
        '#type' => 'markup',
        '#markup' => 'Hello ' . $userName . ' From My first Created Module Permission Page.',
        '#cache' => [
          'tags' => ['user:' . \Drupal::currentUser()->id()],
        ],
      ];
    }

    // Return a render array indicating no permission.
    return [
      '#type' => 'markup',
      '#markup' => 'No Permission',
      '#cache' => [
        'tags' => ['user:' . \Drupal::currentUser()->id()],
      ],
    ];
  }

}
