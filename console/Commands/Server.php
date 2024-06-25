<?php

namespace Console\Commands;

use Sentgine\Arise\Command;

/**
 * Class Server
 */
class Server extends Command
{
    protected string $signature = 'server';
    protected string $description = 'Starts your localhost server';

    /**
     * Configures the command.
     */
    protected function configure(): void
    {
        parent::configure();

        // If port is not specified, set it to 8000
        $this->option('port', 'The port to start the server on', 8888);
    }

    /**
     * Handles the execution of the command.
     *
     * @return int The exit code
     */
    protected function handle(): int
    {
        // Get the value of the port
        $port = $this->getOption('port');

        $this->printSection("Starting local server on http://127.0.0.1:{$port}");
        shell_exec("php -S 127.0.0.1:$port -t public/");

        return true;
    }
}
