<?php

function create_slug($string){
  $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
  return $slug;
}