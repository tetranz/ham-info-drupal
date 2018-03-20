<?php

namespace Drupal\tetranz_test\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Entity\EntityFieldManagerInterface;
use Drupal\fcc_ham_data\EntityUpdater;
use Drupal\fcc_ham_data\Plugin\Importer\ImporterInterface;
use Drupal\fcc_ham_data\Plugin\Importer\ImporterManager;
use Drupal\ham_station\Entity\HamStation;
use Drupal\ham_station\Geocoder;
use Drupal\ham_station\Importers\FccImporter;

/**
 * Class DefaultController.
 */
class DefaultController extends ControllerBase {

  /**
   * Test1.
   *
   * @return string
   *   Return Hello string.
   */
  public function test1() {

 //   $etm = \Drupal::entityTypeManager();

    /** @var EntityFieldManagerInterface $efm */
//    $efm = \Drupal::service('entity_field.manager');

//    $defs = $efm->getFieldDefinitions('ham_station', 'ham_station');

/*
    $hs = HamStation::create([
      'callsign' => 'KT1F',
      'first_name' => 'bbb',
      'last_name' => 'ccc',
      'address' => [
        'address_line1' => 'rrrr',
        'locality' => 'ggg',
        'administrative_area' => 'NH',
        'postal_code' => '03055',
        'country_code' => 'US',
      ]
    ]);

    $hs->save();
*/
    /** @var ImporterManager $man */
    $man = \Drupal::service('fcc_ham_data.importer_manager');
    
    /** @var ImporterInterface $importer */
    $importer = $man->createInstance('hd');

    $importer->import('/home/ross/devel/d8dev/data/HD.dat');

    $x = 1 ;
    /** @var Geocoder $geo */
  //  $geo = \Drupal::service('ham_station.geocoder');

  //  $geo->copyGeocodeForDuplicates();

    return [
      '#theme' => 'tetranz_test',
      '#name' => 'aaa',
    ];
  }

}
