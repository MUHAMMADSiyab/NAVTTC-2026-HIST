<?php

interface Notifiable
{

    public function send(string $to, string $message): void;
}

interface ShouldQueue
{
    public function queue(): string;
}


class EmailNotification implements Notifiable, ShouldQueue
{
    public function send(string $to, string $message): void
    {
        echo "Sending email to: {$to} with message: {$message} <br>";
    }

    public function queue(): string
    {
        return "queued_emails";
    }
}

class WhatsAppNotification implements Notifiable, ShouldQueue
{
    public function send(string $to, string $message): void
    {
        echo "Sending WhatsApp message to: {$to} with message: {$message} <br>";
    }

    public function queue(): string
    {
        return "queued_wa_notifications";
    }
}


class SmsNotification implements Notifiable, ShouldQueue
{
    public function send(string $to, string $message): void
    {
        echo "Sending SMS to: {$to} with message: {$message} <br>";
    }

    public function queue(): string
    {
        return "queued_messages";
    }
}


// Helper
function notify(Notifiable $notifier, string $to, string $message)
{
    $notifier->send($to, $message);
}


notify(new EmailNotification, "johndoe@gmail.com", "Hey there!");

notify(new WhatsAppNotification, "+92312392392", "Hello there!");

notify(new SmsNotification, "+923123939202", "How are you!");
