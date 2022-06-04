<?php
namespace Core;

class Message{

    public static function setMessage($text, $type = 'success')
    {
        switch ($type) {
            case 'alert':
            case 'alerta':
            case 'warning':
                $type = 'alert alert-warning';
                break;
            case 'erro':
            case 'error':
            case 'danger':
                $type = 'alert alert-danger';
                break;
            case 'info':
            case 'infor':
                $type = 'alert alert-info';
                break;
            default:
                $type = 'alert alert-success';
                break;
        }
        $_SESSION['message'] = "<div class='$type'>$text</div>";
    }
    
    public static function getMessage()
    {
        $message = null;
        if (isset($_SESSION['message'])) {
            $message = $_SESSION['message'];
            unset($_SESSION['message']);
        }
        return $message;
    }
}
