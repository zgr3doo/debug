function helpMeSatan($title = 'Debug Backtrace:') {
	    $output     = "";
	    $output .= "<hr /><div>" . $title . '<br /><table border="1" cellpadding="2" cellspacing="2" style="background-color:black;color:red;">';
	 
	    $stacks     = debug_backtrace();
	 
	    $output .= "<thead><tr><th><strong>File</strong></th><th><strong>Line</strong></th><th><strong>Function</strong></th>".
	        "</tr></thead>";
	    foreach($stacks as $_stack)
	    {
	        if (!isset($_stack['file'])) $_stack['file'] = '[PHP Kernel]';
	        if (!isset($_stack['line'])) $_stack['line'] = '';
	 
	        $output .=  "<tr><td>{$_stack["file"]}</td><td>{$_stack["line"]}</td>".
	            "<td>{$_stack["function"]}</td></tr>";
	    }
	    $output .=  "</table></div><hr /></p>";
	    print $output;
	    die();
	}
