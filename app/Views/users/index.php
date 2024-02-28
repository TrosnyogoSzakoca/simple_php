    <a href="http://localhost:8080/users/new">Új felhasználó</a>
    <h1>Üdv</h1>
    <?php if (!empty($users) && is_array($users)) : ?>

        <?php foreach ($users as $users_item) : ?>
            <h2><?= esc($users_item['username']) ?></h2>
            <h3><?= esc($users_item['total']) ?></h3>

            <div class="main">
                <?= esc($users_item['number1']) ?>
                <?= esc($users_item['number2']) ?>
            </div>


        <?php endforeach ?>

    <?php else : ?>

        <h3>No users</h3>

        <p>Unable to find any users for you.</p>

    <?php endif ?>