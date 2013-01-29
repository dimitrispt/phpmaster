<?php

require_once 'courier.php';

class PigeonPost extends Courier {
  
  public function ship(Parcel $parcel) {
      // fetch pigeon
      // attach parcel
      // send
      return true;
  }
}
?>
