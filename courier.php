<?php

//namespace shipping;

class Courier implements Countable{
  
  protected $count;  
    
  protected $name;
  public $home_country;
  protected $data;
  
  public function __construct($name) {
      $this->name = $name;
      return true;
}
  
  
  public function ship($parcel) {
      //sends parcel to its destination
      if (empty($parcel->address)) {
          throw new Exception('Address not Specified');
      }
      
      if ($parcel->weight > 5) {
          throw new HeavyParcelException('Parcel exceeds courier limit');
      }
      
      return true;
  }
  
  public function __call($name, $params) {
      if ($name == 'sendParcel') {
          return $this->ship($params[0]);
      }
      else {
          error_log("Failed to call: $name in Courier class");
          return false;
      }
  }

  public static function getCouriersByCountry($country) {
    // get a list of couriers with their home_country = $country
    // create a Courier object for each result
    // return an array of the results
    return $courier_list;
  }
  
  public function calculateShipping($parcel) {
      // look up the rate for the destination
      $rate = 1.78;
      
      // calculate the cost
      $cost = $rate * $parcel->weight;
      return $cost;
  }
  
  public function __get($property) {
      return $this->data[$property];
  }
  
  public function __set($property, $value) {
      $this->data[$property] = $value;
      return true;
  }
  
  public function getName() {
      return $this->name;
  }
  
  public function setName($name) {
      $this->name = $name;
      return true;
  }
  
  // implement count() from Countable interface
  public function count() {
      return $this->count;
  }
  
  
  
}

?>
