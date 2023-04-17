<?php

class File
{
    public $filename;
    public $somecontent;
    private $fp;

    public function __construct($filename, $somecontent, $fp)
    {
        $this->filename = $filename;

        if (is_writable($this->filename)) {
            echo "Не могу открыть файл ($this->filename)";
        }

    public function __destruct()
    {
        //print_r($this);
    }

    public function fileWrite($somecontent)
    {
        if (is_writable($this->filename)) {
            if (!$fp = fopen($this->filename, 'a')) {
                echo "Не могу открыть файл ($this->filename)";
            }

            if (fwrite($fp, $this->somecontent) === FALSE) {
                echo "Не могу произвести запись в файл ($this->filename)";
            }

            echo "Ура! Записали ($this->somecontent) в файл ($this->filename)";
            fclose($fp);
        }
        echo "Файл $this->filename недоступен для записи";
    }




}