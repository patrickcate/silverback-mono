<?php

namespace Drupal\cypress\TestSite;

use Drupal\TestSite\TestSetupInterface;

class CypressTestSite implements TestSetupInterface {
  /**
   * {@inheritdoc}
   */
  public function setup() {
    /** @var \Drupal\Core\Extension\ModuleInstallerInterface $moduleInstaller */
    $moduleInstaller = \Drupal::service('module_installer');
    $moduleInstaller->install(['cypress']);
  }
}
