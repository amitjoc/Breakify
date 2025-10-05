<?php

namespace AJ\LineBreak;

class Breakify
{
    private $br = "<br />";

    private $hr = "<hr />";

    private $nl = "\n";

    private $dnl = "\n\n";

    private $isCli = false;

    private $interface  = ['web','cli'];

    private $lineBreak = "\n"; // default line break is \n

    public function __construct()
    {
        $this->lineBreak = ($this->isCli()=='cli') ? $this->nl : $this->br ;
    }

    /**
     * Determines the current execution environment.
     *
     * Checks if the script is running in a web (HTTP) or CLI context,
     * and returns a string representing the environment type.
     *
     * @return string 'web' if running via HTTP, 'cli' if running in command-line interface.
     */
    public function checkRequest(): string
    {
        return $this->isCli() ? "cli" : "web" ;
    }

    /**
     * Determines if the current script is running in the CLI (Command Line Interface) environment.
     *
     * @return bool True if running via CLI, false otherwise.
     */
    private function isCli(): bool
    {
        return (php_sapi_name() == 'cli') ;
    }

    public function pLineBreak()
    {
        echo $this->lineBreak;
    }

    public function pnl($doubleNewLine = false)
    {
        echo ($doubleNewLine) ? $this->dnl: $this->nl;
    }

    public function pbr($hr = false)
    {
        echo ($hr) ? $this->hr : $this->br ;
    }

    public function phr()
    {
        $this->pbr(true);
    }
    public function phr_dashed()
    {
        echo "<hr style='border-style: dashed' />";
    }
    public function phr_dotted()
    {
        echo "<hr style='border-style: dotted' />";
    }

    public function phr_double()
    {
        echo "<hr style='border-style: double' />";
    }

    public function phr_ridge()
    {
        echo "<hr style='border-style: ridge' />";
    }

}
