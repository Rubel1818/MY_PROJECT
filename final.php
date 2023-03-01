<?php
class Person {
  private $fname;
  private $lname;
  private $age;
  private $sex;
  private $weight;
  private $height;
  
  public function setFname($fname) {
    $this->fname = $fname;
  }
  
  public function setLname($lname) {
    $this->lname = $lname;
  }
  
  public function setAge($age) {
    $this->age = $age;
  }
  public function setSex($sex) {
    $this->sex = $sex;
  }
  
  public function setWeight($weight) {
    $this->weight = $weight;
  }
  
  public function setHeight($height) {
    $this->height = $height;
  }
  
  public function getFname($fname) {
   return $this->fname;
  }
  
  public function getLname($lname) {
    return $this->lname;
  }
  public function getAge($age) {
    return $this->age;
  }
  public function getSex($sex) {
    return $this->sex;
  }
  
  public function getWeight($weight) {
    return $this->weight;
  }
  
  public function getHeight($height) {
    return $this->height;
  }

}
?>