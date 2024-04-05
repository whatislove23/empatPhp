<?php
require_once './functions/Incrementor.php';
require_once './functions/Request.php';
session_start();
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = new ExtendedIncrementor(0);
}
$counter = $_SESSION['counter'];
$action = Request::post("action");
match ($action) {
    "increment" => $counter->increment(),
    "decrement" => $counter->decrement(),
    "multiply" => $counter->multiply(Request::post("score")),
    null => ""
};
?>


</form>
<form class="flex flex-col gap-5 mx-auto mt-10 max-w-md  rounded-lg border-2 border-gray-300 p-5 shadow-lg"
    action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <p class='text-center  <?php echo $_COOKIE['theme'] == 'Light' ? 'text-gray-900' : 'text-white' ?>'>Count:
        <?php echo $counter->getCount() ?>
    </p>
    <input type="submit" name="action" value="increment" class="bg-green-400 p-2 rounded text-white text-lg" />
    <input type="submit" name="action" value="decrement" class="bg-red-400 p-2 rounded text-white text-lg" />
    <input class="text-lg p-2 border-2 rounded border-gray-300" type="number" placeholder="Multiply by" id="score"
        name="score" />
    <input type="submit" name="action" value="multiply" class="bg-orange-400 p-2 rounded text-white text-lg" />
</form>