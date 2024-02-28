<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="/users" method="post">
    <?= csrf_field() ?>

    <label for="username">Username</label>
    <input type="input" name="username" value="<?= set_value('username') ?>">
    <br>

    <label for="number1">number 1</label>
    <input type="number" name="number1" value="<?= set_value('0') ?>">
    <br>

    <label for="number2">number 2</label>
    <input type="number" name="number2" value="<?= set_value('0') ?>">
    <br>

    <input type="submit" name="submit" value="Felhasználó létrehozása">
</form>