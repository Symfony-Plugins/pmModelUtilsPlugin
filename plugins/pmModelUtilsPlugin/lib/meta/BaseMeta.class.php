<?php

class BaseMeta
{
  protected static $choices = array();
  
  public static function getChoices($add_empty = "")
  {
    $called_class = get_called_class();
    
    return $add_empty ? array_merge(array("" => $add_empty === true ? "" : $add_empty), $called_class::$choices) : $called_class::$choices;
  }
  
  public static function getKeys($add_empty = "")
  {
    $called_class = get_called_class();
    
    return array_keys($called_class::getChoices($add_empty));
  }
  
  public static function getString($v)
  {
    $called_class = get_called_class();
    
    return isset($called_class::$choices[$v]) ? $called_class::$choices[$v] : "Error";
  }
}