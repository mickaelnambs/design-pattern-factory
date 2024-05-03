<?php

namespace App\Console\Commands;

use App\FactoryPattern\FormatterFactory;
use Illuminate\Console\Command;

class ArrayFormatterCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'format {formatter}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Format an array to the specified formatting type.';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $formatterFactory = new FormatterFactory();
        $formatter = $formatterFactory->getFormatter($this->argument('formatter'));

        $this->info($formatter->format([
            'data 1',
            'data 2',
            'data 3',
            'key' => 'value',
        ]));

        return Command::SUCCESS;
    }
}
