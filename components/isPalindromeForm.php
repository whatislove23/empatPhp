<form class="flex flex-col gap-5 mx-auto mt-10 max-w-md  rounded-lg border-2 border-gray-300 p-5 shadow-lg"
    action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="word" class="text-center <?php echo $_COOKIE['theme'] == 'Light' ? 'text-gray-900' : 'text-white' ?>">
        Check if your
        word is palindrome</label>
    <input name="palindrome" class="text-lg p-2 border-2 rounded border-gray-300" type="text" placeholder="Your word"
        id="word" name="word" />
    <button type="submit" class="bg-green-400 p-2 rounded text-white text-lg">Check</button>

    <?php
    require_once './functions/Request.php';
    require_once './functions/isPalindrome.php';
    $word = Request::post("palindrome");
    if ($word) {
        $themeRes = $_COOKIE['theme'] == 'Light' ? 'text-gray-900' : 'text-white';
        $palindromeres = $word . (isPalindrome($word) ? ' is ' : ' isnt ') . 'palindrome';
        echo "<p class='$themeRes'>$palindromeres</p>";
    }
    ?>
</form>