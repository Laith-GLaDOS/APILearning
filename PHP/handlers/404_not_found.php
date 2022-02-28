<?php
function not_found() {
    http_response_code(404);
    echo 'Not found!';
}
?>