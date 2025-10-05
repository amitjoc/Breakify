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
     * function checks a request type
     * @return string cli | web
     */
    public function checkRequest(): string
    {
        return $this->isCli() ? "cli" : "web" ;
    }

    /**
     * Will check request come from cli or web
     *
     * @return bool returns true if request came form cli
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