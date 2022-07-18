<?php include 'teste/link.php' ?>
<?php include 'teste/form.php' ?>
<!-- add our functions -->

<!DOCTYPE html>
<html>

<head>
    <title>Dynamic Form Elements</title>
</head>

<body>

    <h1>My First Time using elements</h1>
    <p>My first paragraph.</p>
    <?php echo create_link(
        "View the link to this code here",
        "https://gist.github.com/wyntonfranklin/fa9dfe8bc5a46294d194e6dbcc396f23",
        ['target' => '_blank']
    ) ?>
    <p>Lets create a form</p>

    <!-- form start -->

    <?php form_open_widget($_SERVER["PHP_SELF"], "get", false); ?>

    <?php echo form_input("user", "text", "", ['placeholder' => 'Your name']); ?><br><br>
    <?php echo form_input('email', "email", "", ["placeholder" => 'Your email']); ?><br><br>
    <?php echo form_textarea('details', "", ["placeholder" => 'Your details' , "id" => 'teste']); ?><br><br>
    <?php echo form_input('', "submit", "Submit"); ?><br><br>

    <?php form_close_widget(); ?>

    <!-- form end -->

</body>

</html>