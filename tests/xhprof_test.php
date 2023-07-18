<?php

/**
 * xhprof_test
 * @createdAt 2023-07-18
 * */

require_once __DIR__ . '/tests.php';

require_once __DIR__ . "/../src/Xhprof/xhprof_lib.php";
require_once __DIR__ . "/../src/Xhprof/xhprof_runs.php";

xhprof_enable(XHPROF_FLAGS_NO_BUILTINS | XHPROF_FLAGS_CPU | XHPROF_FLAGS_MEMORY);

echo date('Y-m-d') . PHP_EOL;

$xhprof_data = xhprof_disable();
$xhprof_runs = new XHProfRuns_Default();
$run_id = $xhprof_runs->save_run($xhprof_data, "xhprof_foo");

var_dump($run_id);
