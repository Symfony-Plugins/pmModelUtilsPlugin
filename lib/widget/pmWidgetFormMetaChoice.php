<?php

class pmWidgetFormMetaChoice extends sfWidgetFormChoice
{
  protected function configure($options = array(), $attributes = array())
  {
    parent::configure($options, $attributes);
    
    $this->addRequiredOption("model");
    $this->addOption("add_empty", false);
    
    $this->setOption("choices", array());
  }
  
  public function getChoices()
  {
    $class = $this->getOption("model");
    $add_empty = $this->getOption("add_empty");
    
    return $class::getChoices($add_empty);
  }
}