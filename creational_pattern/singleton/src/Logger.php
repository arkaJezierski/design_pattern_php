<?php

namespace App\Src;

class Logger
{
    private static ?Logger $instance = null;
    private array $logs = [];

    private function __construct() {}
    private function __clone() {}
    private function __wakeup() {}

    public static function getInstance(): Logger
    {
        if (self::$instance === null) {
            self::$instance = new Logger();
        }
        return self::$instance;
    }

    public function log(string $message): void
    {
        $this->logs[] = $message;
        echo "📝 $message\n";
    }

    public function getLogs(): array
    {
        return $this->logs;
    }
}
