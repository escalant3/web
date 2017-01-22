<?php

if (!function_exists('flash')) {
    /**
     * Shown flash notification.
     */
    function flash($message, $type = 'success')
    {
        return session()->flash('notification', [
            'type'    => $type,
            'message' => $message,
        ]);
    }
}
