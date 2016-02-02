<?php

namespace App\Model;


class Robot
{
    private $_user;
    public function __construct(User $user = null) {
        if ($user) {
            $this->setUser($user);
        }
    }
    //
    public function parseParams() {

    }

    public function setUser(User $user) {
      $this->_user = $user;
    }

    public function send() {

      return ['hello world'];
      return 'hello world';
    }
}
