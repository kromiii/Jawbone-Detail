<?php
class WriteCSV
{
    private $fp;

    function write($array)
    {
	$this->fp = fopen('php://temp/maxmemory:'.(5*1024*1024), 'w');

	foreach($array as $fields)
	{
	    fputcsv($this->fp, $fields);
	}
	header('Content-Type: text/csv');
	header('Content-Disposition: attachment; filename=jawbone_detail.csv');
	rewind($this->fp);
	$csv = stream_get_contents($this->fp);
	return $csv;
    }
    

    function __destruct()
    {
	fclose($this->fp);
	return;
    }
}

?>
