--TEST--
Check for phdfs disconnect function
--SKIPIF--
<?php if (!extension_loaded("phdfs")) print "skip"; ?>
--FILE--
<?php

try {
    $obj = new phdfs();
    $obj->port = "9000";
    $obj->ip = "127.0.0.1";
    $obj->connect();
    $log = $obj->disconnect();
} catch (Exception $ex) {
    var_dump($ex->getMessage());
}
?>
--EXPECT--
Environment variable CLASSPATH not set!
string(27) " Failed to hdfs connection "
