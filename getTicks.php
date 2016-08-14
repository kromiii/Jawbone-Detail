<?php
class GetTicks
{
    private $output = [];

    public function __construct($endpoint, $access_token, $start_time, $end_time, $columns)
    {
	$query = [
	    'start_time'=> $start_time,
	    'end_time'=> $end_time,
	];
	$headers = [
	    "Authorization: Bearer {$access_token}",
	];
	$url = "https://jawbone.com/nudge/api/v.1.1/users/@me/{$endpoint}?".http_build_query($query);
	$curl = curl_init($url);
	curl_setopt_array($curl, [
	    CURLOPT_RETURNTRANSFER => true,
	    CURLOPT_HTTPHEADER => $headers
	]);
	$list = json_decode(curl_exec($curl), true);
	curl_close($curl);

	array_push($this->output, $columns);

	foreach ($list['data']['items'] as $item_list)
	{
	    $xid = $item_list['xid'];
	    $url = "https://jawbone.com/nudge/api/v.1.1/{$endpoint}/{$xid}/ticks";
	    $curl = curl_init($url);
	    curl_setopt_array($curl, [
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_HTTPHEADER => $headers,
	    ]);
	    $ticks = json_decode(curl_exec($curl), true);
	    curl_close($curl);
	    foreach($ticks['data']['items'] as $item_ticks)
	    {
		foreach($columns as $column)
		{
		    if($column == 'time' || $column == 'time_completed')
		    {
			$stack[$column] = date('Y-m-d H:i:s', $item_ticks[$column]);
		    } else {
			$stack[$column] = $item_ticks[$column];
		    }
		}
		array_push($this->output, $stack);
	    }
	}
    }

    public function getArray()
    {
	return $this->output;
    }
    
}

?>
