<?php

namespace AJ\LineBreak;

class Breakify
{
    /**
     * HTML break tag for web output.
     *
     *Used for rendering a <br /> element in output.
     *
     * @var string
     */
    private $br = "<br />";

    /**
     * Horizontal rule HTML string for web output
     *
     * Used for rendering a <hr /> element in output.
     *
     * @var string
     */
    private $hr = "<hr />";

    /**
     * cli new line \n
     * @var string
     */
    private $nl = "\n";

    /**
     * cli double new line \n\n
     * @var string
     */
    private $dnl = "\n\n";

    /**
     * true if environment is cli default is false
     * @var bool
     */
    private $isCli = false;

    private $interface  = ['web','cli'];

    /**
     * this variable is used when we don't know, where a script will be executed in web or cli
     * default is set to \n but will get value updated as script execution environment changes
     * value will be updated in constructor
     * @var string
     */
    private $lineBreak = "\n";

    private $cr = "\r";

    private $tab = "\t";

    public function __construct()
    {
        $this->lineBreak = ($this->isCli() == 'cli') ? $this->nl : $this->br;
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
        return (php_sapi_name() === 'cli') ;
    }

    /**
     * @return void
     */
    public function pLineBreak()
    {
        echo $this->lineBreak;
    }

    /**
     * Prints a newline character to the CLI output.
     *
     * If $useDoubleNewLine is true, prints two newline characters ("\n\n").
     * Otherwise, prints a single newline character ("\n").
     *
     * @param bool $useDoubleNewLine Whether to print double newline.
     * @return void
     */
    public function pnl(bool $useDoubleNewLine = false)
    {
        echo ($useDoubleNewLine) ? $this->dnl : $this->nl;
    }

    public function pbr(bool $hr = false)
    {
        echo ($hr) ? $this->hr : $this->br ;
    }

    public function phr()
    {
        $this->pbr(true);
    }
    public function phrDashed()
    {
        echo "<hr style='border-style: dashed' />";
    }
    public function phrDotted()
    {
        echo "<hr style='border-style: dotted' />";
    }

    public function phrDouble()
    {
        echo "<hr style='border-style: double' />";
    }

    public function phrRidge()
    {
        echo "<hr style='border-style: ridge' />";
    }

    public function pNewLine(bool $useDoubleNewLine = false)
    {
        echo $useDoubleNewLine ? $this->dnl : $this->nl;
    }

    public function pCarriageReturn()
    {
        echo "\r";
    }

    /**
     * Generate a beep sound on cli environment
     *
     * This works only for cli and its like \a
     * @return void
     */
    public function cliBeep()
    {
        echo chr(7);
    }
    public function getOS(): string
    {
        return PHP_OS;
    }
}
