<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get"
    class="mx-auto mt-10 max-w-md flex justify-center">
    <input type="submit" name="load_data" value="Load json" class="bg-green-400 p-2 rounded text-white text-lg">
</form>

<?php
require_once './functions/Request.php';
require_once './functions/SingletonDB.php';
if (!isset($_SESSION['db'])) {
    $_SESSION['db'] = SingletonDB::getInstance();
}

$db = $_SESSION['db'];
$button = Request::get("load_data");
if ($button) {
    $db->connect();
    if ($db->status == 1) {
        $data = json_decode($db->fetch(), true);
        echo "<div class='flex flex-col  mx-auto mt-10 max-w-md gap-5'>";
        $resTheme = ($_COOKIE['theme'] == 'Light' ? 'text-gray-900' : 'text-white');
        foreach ($data as $item) {
            echo "<div class='rounded border-2 border-gray-300 p-2 shadow-lg' >";
            echo "<p class='" . $resTheme . "'>Name: " . $item['name'] . "</p>";
            echo "<p class='" . $resTheme . "'>Age: " . $item['age'] . "</p>";
            echo "<p class='" . $resTheme . "'>City: " . $item['city'] . "</p>";
            echo "<p class='" . $resTheme . "'>Email: " . $item['email'] . "</p>";
            echo "<p class='" . $resTheme . "'>Is Subscribed: " . ($item['is_subscribed'] ? 'Yes' : 'No') . "</p>";
            echo "</div>";
        }
        echo "</div>";
    }
    $db->disconect();
}
?>