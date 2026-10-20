<?php

namespace App\Support;

class WhatsApp
{
    /**
     * Build a wa.me deep link with an optional pre-filled message.
     */
    public static function url(?string $message = null): string
    {
        $number = static::number();
        $message = $message ?? static::message();

        $url = 'https://wa.me/'.$number;

        return $message !== '' ? $url.'?text='.rawurlencode($message) : $url;
    }

    /**
     * The WhatsApp number in international format.
     */
    public static function number(): string
    {
        return (string) config('whatsapp.number');
    }

    /**
     * The default message pre-filled in the chat.
     */
    public static function message(): string
    {
        return (string) config('whatsapp.message');
    }
}
