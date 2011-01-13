<?php

/**
 * Article form.
 *
 * @package    testing2
 * @subpackage form
 * @author     Your name here
 */
class ArticleForm extends BaseArticleForm
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
}
