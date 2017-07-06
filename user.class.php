<?php

class User {
  private $id;
  private $name;

  public static function fromArray($array) {
    $user = new User;
    $user->id = $array['id'];
    $user->name = $array['name'];

    return $user;
  }

  public function toArray() {
    $array = [];
    $array['id'] = $this->id;
    $array['name'] = $this->name;
    return $array;
  }

  public function toJson() {
    $array = $this->toArray();
    return json_encode($array);
  }
}
