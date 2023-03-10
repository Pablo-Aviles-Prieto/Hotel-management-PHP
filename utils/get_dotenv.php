<?php
require_once 'libs/dotenv/Repository/Adapter/WriterInterface.php';
require_once 'libs/dotenv/Repository/Adapter/ReaderInterface.php';
require_once 'libs/dotenv/Repository/RepositoryInterface.php';
require_once 'libs/dotenv/Store/StoreInterface.php';
require_once 'libs/dotenv/Exception/ExceptionInterface.php';
require_once 'libs/dotenv/Exception/InvalidPathException.php';
require_once 'libs/dotenv/Loader/LoaderInterface.php';
require_once 'libs/dotenv/Parser/ParserInterface.php';
require_once 'libs/dotenv/Parser/Parser.php';
require_once 'libs/dotenv/Dotenv.php';
require_once 'libs/PhpOption/Option.php';
require_once 'libs/GrahamCampbell/Result.php';

foreach (glob("libs/GrahamCampbell/*.php") as $filename) {
  require_once $filename;
}
foreach (glob("libs/dotenv/Exception/*.php") as $filename) {
  require_once $filename;
}
foreach (glob("libs/dotenv/Loader/*.php") as $filename) {
  require_once $filename;
}
foreach (glob("libs/dotenv/Parser/*.php") as $filename) {
  require_once $filename;
}
foreach (glob("libs/dotenv/Store/File/*.php") as $filename) {
  require_once $filename;
}
foreach (glob("libs/dotenv/Store/*.php") as $filename) {
  require_once $filename;
}
foreach (glob("libs/dotenv/Repository/Adapter/*.php") as $filename) {
  require_once $filename;
}
foreach (glob("libs/dotenv/Repository/*.php") as $filename) {
  require_once $filename;
}
foreach (glob("libs/PhpOption/*.php") as $filename) {
  require_once $filename;
}
foreach (glob("libs/dotenv/Util/*.php") as $filename) {
  require_once $filename;
}
?>