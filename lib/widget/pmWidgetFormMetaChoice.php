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
    
    $choices = $class::getChoices($add_empty);
    
    if (!$this->getOption('translate_choices'))
    {
      return $choices;
    }

    $results = array();
    foreach ($choices as $key => $choice)
    {
      if (is_array($choice))
      {
        $results[$this->translate($key)] = $this->translateAll($choice);
      }
      else
      {
        $results[$key] = $this->translate($choice);
      }
    }

    return $results;
  }
}