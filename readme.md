This is a PHP sample for an XXE attack!

ext.dtd: DTD-FILE with the entities. Change http://localhost:9999/%file to the malicious web server who
exfiltrates the data. The ext.dtd can be also loaded remotely.

int.xml: Possible XML payload to send to the server

abc.txt: File with the "sensitive" data

index.php: Server code
