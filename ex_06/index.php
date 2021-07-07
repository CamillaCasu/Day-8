<?php
function remove_cookie ($cookie) {
    setcookie(name, "", time());
}
?>