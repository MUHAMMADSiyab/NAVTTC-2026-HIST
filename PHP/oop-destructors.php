<?php

class FileWriter
{
    private $handle;
    private string $filename;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
        $this->handle = fopen($filename, 'w');

        echo "File opened.";
    }

    public function write(string $data)
    {
        fwrite($this->handle, $data);

        echo "Wrote to file.";
    }

    public function __destruct()
    {
        fclose($this->handle);

        echo "File closed.";
    }
}


$writer = new FileWriter("mynotes.txt");
$writer->write("Hello World. \n");
$writer->write("How are you?. ");
