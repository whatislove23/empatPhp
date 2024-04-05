<?php
require_once ("./functions/Request.php");
$value = Request::get("theme");
if ($value == "Light") {
    setcookie("theme", "Dark", time() + (86400 * 30), "/");
    header('Location: index.php');
    exit();
} elseif ($value == "Dark") {
    setcookie("theme", "Light", time() + (86400 * 30), "/");
    header('Location: index.php');
    exit();
}
?>
<header class="p-5 border-b-2 border-gray-300 shadow-lg flex justify-between items-center">
    <h1
        class="text-center font-medium text-lg <?php echo $_COOKIE["theme"] == "Light" ? "text-gray-900" : "text-white" ?> ">
        TASK 6 PHP </h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
        <input
            class="cursor-pointer p-2 <?php echo $_COOKIE["theme"] == "Light" ? "bg-gray-900 text-white" : "bg-white text-gray-900" ?>  rounded"
            type="submit" name=theme value=<?php echo $_COOKIE["theme"] ?>>
    </form>
</header>