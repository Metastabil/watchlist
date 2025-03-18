<?php

if (!function_exists('set_message')) {
    /**
     * @param string $type
     * @param string $message
     * @return void
     */
    function set_message(string $type, string $message) :void {
        $_SESSION['message'] = [ 'type' => esc($type), 'message' => esc($message) ];
    }
}

if (!function_exists('unset_message')) {
    /**
     * @return void
     */
    function unset_message() :void {
        unset($_SESSION['message']);
    }
}