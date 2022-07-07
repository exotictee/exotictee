<!DOCTYPE html>
<html>
    <head>
        <title>PHP and HTML</title>
        <!-- Sample 5 -->
        <script type="text/javascript">
            <?=
            "alert('I am coming from PHP!')";
            ?>
        </script>
    </head>
    <body>
       <h1>Embed PHP in HTML</h1>

        <!-- Sample 1 -->
        <?php echo 'Welcome to Krystal Digital Network Solutions'; ?>

        <!-- Sample 2 -->
        <?php

            echo "<p>Sample 1: This text is  printed from PHP</p>"
        ?>

        <?= "<hr>" ?>

            <p>
                <?php
                echo "Sample 2: This text is printed from PHP!";
                ?>
            </p>

            <!-- Sample 3 -->
            <p <?= 'style="color:red;"'?>>Sample 3: This is a red text!</p>

            <!-- Sample 4 -->
            <?= "<p>" ?>
                Sample 4: This text is printed from PHP!
            <?= "</P>" ?>

            <!-- white space -->
            <?= 'This          is             a            Test'; ?>


            <?="
            <hr>

            <p>

                you are free to type

                anything inside this

                block.
            </p>

            "?>

            <?= "hello " . ($_GET['name']); ?>

    </body>
</html>