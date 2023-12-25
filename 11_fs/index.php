<?php
// Magic constants
echo __FILE__."<br>";
echo __DIR__."<br>";
echo __LINE__."<br>";

// Create directory
if(mkdir('test'))
{ 
    echo "created";
}

// Rename directory
if(rename("test", "test2"))
{
  echo "renamed";
}
;
// Delete directory
if(rmdir("test2")){
    echo "delete directory";
}


// Read files and folders inside directory
$files = scandir("../");
echo "<pre>";
var_dump($files);
echo "</pre>";


// file_get_contents, file_put_contents
echo file_get_contents("lorem.txt");
file_put_contents("sample.txt", "40");


// Check if the file exists

// file_get_contents from URLs
$content = file_get_contents("https://jsonplaceholder.typicode.com/users");
file_put_contents("user.json", $content);
// https://www.php.net/manual/en/book.filesystem.php
// file_exists
// is_dir
// filemtime
// filesize
// disk_free_space
// file