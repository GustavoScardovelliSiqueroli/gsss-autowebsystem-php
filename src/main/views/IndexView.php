<?php
/*
   The indexView is a default class along with its index method.
   It will render the project's default route.
   Just create the php file in "src/resources/templates/" and return his file name in index function.
   */
class IndexView
{
   public function index(): string
   {
      include __DIR__ . './../services/userService.php';
      return 'home.html';
   }
   public function otherView(): string
   {
      return 'other.html';
   }
}
