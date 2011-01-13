<?php

/**
 * Article filter form.
 *
 * @package    testing2
 * @subpackage filter
 * @author     Your name here
 */
class ArticleFormFilter extends BaseArticleFormFilter
{
  public function configure()
  {
    $this->setWidget("status", new pmWidgetFormMetaChoice(array(
      "model" => "ArticleStatus"
    )));
    
    $this->setValidator("status", new pmValidatorMetaChoice(array(
      "model" => "ArticleStatus"
    )));
  }
  
  public function getFields()
  {
    return array_merge(parent::getFields(), array("status" => "ForeignKey"));
  }
}
