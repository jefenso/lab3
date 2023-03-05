<h2 class="glow4" style="text-align:center"><?= esc($title) ?></h2>

<div>
  <div class="w3-col w3-container  l6 ">
  <a href="create" class="w3-button w3-block w3-black glow2 w3-hover-purple">CREATE NEWS</a>
  </div>
  <div class="w3-col w3-container  l6">  
  <a href="guest" class="w3-button w3-block w3-black glow2 w3-hover-purple">GO TO GUESTS</a>
  </div>
</div>
<div style="height:50px; width: 600px;">


</div>
<?php if (! empty($news) && is_array($news)): ?>

    <?php foreach ($news as $news_item): ?>

        <h3 class="glow4"><?= esc($news_item['title']) ?></h3>

        <div class="main glow4">
            <?= esc($news_item['body']) ?>
        </div>
        <p class="glow4"><a href="news/<?= esc($news_item['slug'], 'url') ?>">View article</a></p>

    <?php endforeach ?>

<?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>