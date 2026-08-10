<?php
echo "<h1>Привет, Termux!</h1>";
echo "<p>PHP работает.</p>";
echo "<p>Текущая дата: " . date("Y-m-d H:i:s") . "</p>";
echo "<p>Текущая дата: " . local("w-l H:i:s") . "</p>";
?>
