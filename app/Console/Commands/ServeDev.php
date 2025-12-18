<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ServeDev extends Command
{
    protected $signature = 'serve:dev';
    protected $description = 'Menjalankan Laravel server + Vite (npm run dev)';

    public function handle()
    {
        $this->info('🚀 Menjalankan Laravel server & Vite dev server...');

        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            // Windows
            pclose(popen('start cmd /k "php artisan serve"', 'r'));
            pclose(popen('start cmd /k "npm run dev"', 'r'));
        } else {
            // Linux / macOS
            exec('php artisan serve > /dev/null 2>&1 &');
            exec('npm run dev > /dev/null 2>&1 &');
        }

        $this->info('✅ Server berjalan.');
        $this->info('🌐 Laravel : http://127.0.0.1:8000');
        $this->info('⚡ Vite    : npm run dev');
    }
}

