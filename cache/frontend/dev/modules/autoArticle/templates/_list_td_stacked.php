<td colspan="4">
  <?php echo __('%%title%% - %%content%% - %%status%% - %%id%%', array('%%title%%' => $article->getTitle(), '%%content%%' => $article->getContent(), '%%status%%' => $article->getStatus(), '%%id%%' => link_to($article->getId(), 'article_edit', $article)), 'messages') ?>
</td>
