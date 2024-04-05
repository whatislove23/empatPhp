<form class="flex flex-col gap-5 mx-auto mt-10 max-w-md  rounded-lg border-2 border-gray-300 p-5 shadow-lg"
    action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="string"
        class='text-center <?php echo $_COOKIE['theme'] == 'Light' ? 'text-gray-900' : 'text-white' ?>'>Letters
        counter</label>
    <input name="lettersCounter" class="text-lg p-2 border-2 rounded border-gray-300" type="text"
        placeholder="Your string" id="string" name="string" />
    <button type="submit" class="bg-orange-400 p-2 rounded text-white text-lg">Get count</button>


    <?php
    require_once './functions/Request.php';
    require_once './functions/lettersCounter.php';
    $string = Request::post("lettersCounter");
    if ($string) {
        $resLetters = letterCounter($string);
        $themeRes = $_COOKIE['theme'] == 'Light' ? 'text-gray-900' : 'text-white';
        $theme = 'themeRes';
        echo '<ul>';
        foreach ($resLetters as $letter => $count) {
            echo "<li class='{$$theme}'>$letter:$count</li>";
        }
        echo '</ul>';
    }
    ?>
</form>