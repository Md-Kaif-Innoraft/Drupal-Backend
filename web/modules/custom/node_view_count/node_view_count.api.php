<?php 

/**
 * @file
 * Hooks provided by the Node View Count module.
 */

use \Drupal\Core\Entity\EntityInterface;
use \Drupal\Core\Entity\Display\EntityViewDisplayInterface;

/**
 * Perform actions when a node is viewed.
 *
 * @param array $build
 *   A render array representing the node content.
 * @param \Drupal\Core\Entity\EntityInterface $entity
 *   The entity being viewed.
 * @param \Drupal\Core\Entity\Display\EntityViewDisplayInterface $display
 *   The display settings for the view mode.
 * @param string $view_mode
 *   The view mode in which the entity is being viewed.
 */
function hook_node_view_count_entity_view(array &$build, EntityInterface $entity, EntityViewDisplayInterface $display, $view_mode) {
  // Custom implementation here.
}
