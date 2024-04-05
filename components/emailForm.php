<form class="flex flex-col gap-5 mx-auto mt-10 max-w-md  rounded-lg border-2 border-gray-300 p-5 shadow-lg"
    action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input name="email" class="text-lg p-2 border-2 rounded border-gray-300" type="email" placeholder="Your email" />

    <?php
    require_once './functions/Request.php';
    $email = Request::request("email");
    $themeRes = $_COOKIE['theme'] == 'Light' ? 'text-gray-900' : 'text-white';
    $theme = "themeRes";
    if ($email) {
        echo "<p class='{$$theme}'>" . $email . "</p>";
    }
    ?>
    <input type="submit" name="emile_submit" value="Send" class="bg-purple-400 p-2 rounded text-white text-lg" />
</form>