<h2 class="glow4"><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="create" method="post">
    <?= csrf_field() ?>

    <label class="glow4" for="name">Name</label>
    <input type="input" name="name" value="<?= set_value('name') ?>">
    <br>

    <label class="glow4" for="email">Email</label>
    <input type="input" name="email" value="<?= set_value('email') ?>">
    <br>

    <label class="glow4" for="website">Website</label>
    <input type="input" name="website" value="<?= set_value('website') ?>">
    <br>

    <label class="glow4" for="comment">Comment</label>
    <textarea name="comment" cols="45" rows="4"><?= set_value('comment') ?></textarea>
    <br>

    <label class="glow4" for="gender">Gender</label>
    <input type="input" name="gender" value="<?= set_value('gender') ?>">
    <br>

    <input type="submit" name="submit" value="Create guest entry">
</form>