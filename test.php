<?php

namespace Elminson\SqlToTable;

require_once __DIR__ . '/vendor/autoload.php';

/**
 * Created by edeoleo@gmail.com.
 * User: Elminson De Oleo Baez
 * Desc: ...
 * Date: 7/30/2018
 * Time: 1:20 PM
 */

$sql = new SqlToTable();
try {
    echo $sql->create_backup($argv[1]);
} catch (\Exception $e) {
    echo $e->getMessage();
}
