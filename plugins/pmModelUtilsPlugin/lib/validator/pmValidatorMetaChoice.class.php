<?php

class pmValidatorMetaChoice extends sfValidatorChoice
{
  protected function configure($options = array(), $messages = array())
  {
    parent::configure($options, $messages);
    
    $this->addRequiredOption("model");
    $this->addOption("add_empty", false);
    
    $this->setOption("choices", array());
  }
  
  public function getChoices()
  {
    $class = $this->getOption("model");
    $add_empty = $this->getOption("add_empty");
    
    return $class::getKeys($add_empty);
  }
}