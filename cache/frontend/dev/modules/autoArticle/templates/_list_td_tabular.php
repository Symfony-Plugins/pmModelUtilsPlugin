<td class="sf_admin_text sf_admin_list_td_title">
  <?php echo $article->getTitle() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_content">
  <?php echo $article->getContent() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_status">
  <?php echo $article->getStatus() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($article->getId(), 'article_edit', $article) ?>
</td>
