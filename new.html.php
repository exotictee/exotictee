<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        header {

            background: grey;
            padding: 2em;
            text-align: center;

        }

    </style>
</head>
<body>

        <ul>

            <li>
                <strong>Due Date:</strong> <?= $task ['time']; ?>
            </li>

            <li>
                <strong>Responsibility:</strong> <?= $task ['assigned to']; ?>
            </li>

            <li>
                <strong>Status:</strong> <?= $task ['completed'] ? 'complete' : 'incomplete'; ?>
            </li>

        </ul>

        <hr>

        <h1>Task For The Day</h1>

        <ul>
            <?php foreach ($task as $heading => $value) : ?>

            <li>

                <strong><?= ucwords($heading); ?>: </strong> <?= $value; ?>

            </li>
            <?php endforeach; ?>

        </ul>

        <ul>

            <?php  foreach ($names as $name)  : ?>
                     <li><?= $name; ?></li>
            <?php endforeach; ?>




            <?php

                foreach ($names as $name) {
                    echo "<li>$name</li>";
                }

            ?>
        </ul>


        <ul>

            <?php foreach ($animals as $animal) : ?>
                <li><?= $animal; ?></li>
                <?php endforeach; ?><br><br>

                <?php

                    foreach ($animals as $animal) {
                        echo "<li>$animal</li>";
                    }
                ?>

        </ul>

        <ul>

                <?php foreach ($person as $key => $feature) : ?>
                    <li><strong><?= $key; ?></strong> <?= $feature; ?></li>
                <?php endforeach; ?>

        </ul>

        <ul>

                <?php foreach ($task as $key => $feature) : ?>
                    <li><strong><?= $key; ?></strong> <?= $feature; ?></li>
                <?php endforeach; ?>

        </ul>






</body>
</html>