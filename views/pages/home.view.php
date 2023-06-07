<?php require "./views/layout/header.view.php"; ?>
    <div class="container">
        <h1>Home Page</h1>
        <ul>
            <?php foreach($users as $user): ?>
                <li><?= $user->name ?></li>
            <?php endforeach ?>
        </ul>
    </div>
<?php require "./views/layout/footer.view.php"; ?>