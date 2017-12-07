<?php

echo "<h3>WEBSITE-HOSTNAME</h3>";
echo getenv("WEBSITE_HOSTNAME");
echo "<br />";
echo "<h3>API-KEY</h3>";
echo getenv("apiKey");
echo "<br />";
echo "<h3>SLOT Message</h3>";
echo getenv("slotMessage");
echo "<br />";
echo "<h3>Default Connection string</h3>";
echo getenv("SQLAZURECONNSTR_DefaultConnectionString");
echo "<br />";
echo "<h3>Stagging Connection string</h3>";
echo getenv("SQLAZURECONNSTR_SlotConnectionString");
echo "<p>github</p>";
?>
