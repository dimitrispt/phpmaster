<?php
require_once 'courier.php';
require_once 'trackable.php';

class MonotypeDelivery extends Courier implements Trackable {
  
  public function ship($parcel) {
      // put in box
      // send
      return true;
  }
  
  public function getTrackInfo($parcelId) {
      //look up some info
      return(array("status"=>"in transit")) ;
  }
}
?>
