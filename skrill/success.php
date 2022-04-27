<?php

try {
    // To save
    file_put_contents("post.txt", serialize($_POST));
}
catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
}

try {
    // To save
    file_put_contents("get.txt", serialize($_GET));
}
catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
}

try {
    // To save
    file_put_contents("request.txt", serialize($_REQUEST));
}
catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
}

echo 'Success Transaction';

?>