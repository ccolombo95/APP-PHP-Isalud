<div class="sidebar">
  <?php if (!empty($this->topics)): ?>
    <div class="sidebar-section topics-section">
      <h2 class="title">Categorias</h2>
      <div class="topic-list">
        <?php foreach ($this->topics as $topic): ?>
          <a href="<?php url("/topics/" . $topic['slug']); ?>"><?php echo $topic['name']; ?></a>
        <?php endforeach;?>
      </div>
    </div>
  <?php endif;?>
</div>