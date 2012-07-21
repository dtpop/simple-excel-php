<?php

namespace SimpleExcel\Writer;

/**
 * Defines SimpleExcel writer interface
 * 
 * @author  Faisalman
 * @package SimpleExcel
 */

/** define parser interface */
interface IWriter
{
    public function addRow($values);
    public function saveFile($filename, $target);
    public function setData($values);
}

?>