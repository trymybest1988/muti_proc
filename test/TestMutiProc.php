<?php
require_once __DIR__ . '/../MutiProc.php';

if (! empty($argv[1]) && function_exists($argv[1])) {
    call_user_func($argv[1]);
} else {
    echo 'do nothing', "\r\n";
}

function start()
{
    $proc = new MutiProc();
    $proc->start();
}

function stop()
{
    $proc = new MutiProc();
    $proc->stop();
}

function restartWorker()
{
    $proc = new MutiProc();
    $proc->restartWorker();
}


exit;



