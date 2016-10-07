<?php

 class GameLogic {

   static function startsWith($word) {

     $word = strtolower($word);
     $letter = substr($word, 0, 1);

     return $letter;

   }

   static function endsWith($word) {

     $word = strtolower($word);
     $letter = substr($word, -1);

     return $letter;

   }

 }
