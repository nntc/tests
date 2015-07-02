<html>
 <head>
  <meta charset="utf-8">
  <title>Тег TEXTAREA</title>
 </head>
 <body>
<?php
$URL = 'http://1c.nntc.nnov.ru/cp/odata/standard.odata/Document_АнкетаАбитуриента';
$POSTFIELDS = '<entry>
<category term="StandardODATA.Document_ЗаявлениеОбАкадемическомОтпуске" scheme="http://schemas.microsoft.com/ado/2007/08/dataservices/scheme"/>
<title type="text"/>
<updated/>
<author/>
<summary/>
<content type="application/xml">
    <m:properties xmlns:d="http://schemas.microsoft.com/ado/2007/08/dataservices" xmlns:m="http://schemas.microsoft.com/ado/2007/08/dataservices/metadata">
       <d:Ref_Key>00000000-0000-0000-0000-000000000000</d:Ref_Key>
        <d:DeletionMark>false</d:DeletionMark>
       <d:Date>2015-07-10T12:00:01</d:Date>
       <d:Комментарий>Автосоздание</d:Комментарий>   
    </m:properties>
 </content>
</entry>';
if(isset($_POST['POSTFIELDS'])) $POSTFIELDS = $_POST['POSTFIELDS'];
if(isset($_POST['URL'])) $URL = $_POST['URL'];
?>
	<hr /><h1>XML-REQUEST:</h1>
	<form action="?go" method="post">
	<input style="width: 600px;" name="URL" type="text" value="<?php echo $URL;?>">
	<br />
	<br />
	<textarea rows="20" cols="90" name="POSTFIELDS">
	<?php echo $POSTFIELDS; ?>
	</textarea>
	<br />
	<input type="submit" value="go">
	</form>
	
<?php
	$response="no yet..";
	
	if (isset($_GET['go'])):
	
		$myCurl = curl_init();
		curl_setopt_array($myCurl, array(
				CURLOPT_URL => $URL,
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_POST => true,
				CURLOPT_USERPWD => "web:webwebweb",
				CURLOPT_POSTFIELDS => $POSTFIELDS
		));
		$response = curl_exec($myCurl);	
		curl_close($myCurl);	
	endif;
	
	echo "<hr /><h1>RESPONSE:</h1>";
	echo "<pre>";
	echo $response;
	echo "</pre>";	
?>
</body>
</html>
