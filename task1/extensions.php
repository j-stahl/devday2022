<?php
echo "<h1>Extensions currently loaded:</h1>";

$extensions = get_loaded_extensions();
foreach ($extensions as $extension)
{
    echo "Extension: '" . $extension . "'<br/>";
}
