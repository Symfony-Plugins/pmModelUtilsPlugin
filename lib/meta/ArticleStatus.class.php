<?php

class ArticleStatus extends BaseMeta
{
  const DRAFT = 0;
  const PUBLISHED = 1;
  
  protected static $choices = array(
    self::DRAFT => "Draft",
    self::PUBLISHED => "Published"
  );
}