<?php
class showcsv {
	static public function getform() {
	$form = '<body>';
	$form .= '<form action="index.php" method="get">';
	$form .= '<hr><h1>Choose file to load: </h1>';
	$form .= '<select name="csv">';
	$files = scandir('CSVdata');
	for($i = 2; $i < count($files); $i++){
		$form .= $files[$i] ;
		$form .= "<option value=\"$files[$i]\">$files[$i]</option>";
	}
        $form .= '<input type="submit" value="Click HERE TO LOAD" name="submit">';
	$form .= '</form>';
	return $form;
	}

	static public function csv($filename) {		
		$string = '';		
		$target_file = 'CSVdata/' . $filename;

		$string .= "<html>";
		$string .= "<head>
		<style>
		table {
		    border-collapse: collapse;
		    width: 100%;
		}
		th, td {
		    text-align: left;
		    padding: 8px;
		}
		th {
		    background-color: Indigo;
		    color: white;
		}
		tr:nth-child(even){background-color: #f2f2f2}
		tr:hover {background-color: LightSkyBlue}
		caption { 
			display: table-caption;
			text-align: center;
			color: MidnightBlue;
			font-size:200%;
		}
		</style>
		</head>";
		$string .= "<body>";
		$string .= "<div style='overflow-x:auto;'>";
		$string .= "<table style='width:100%'><caption>" . $filename . "</caption>";
		$appp = file($target_file);
		foreach($appp as $i => $k) {
			$string .= "<tr>";
			foreach(explode(",", $k) as $j) {
				$string .= ($i == 0) ? "<th>$j</th>" : "<td>$j</td>";
        		}
        		$string .= "</tr>";
		}
		$string .= "</table></div>";
		$string .= "</body>";
		return $string;
	}
}
