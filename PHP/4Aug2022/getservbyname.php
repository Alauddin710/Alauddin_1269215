<?php 
echo getservbyname("https", "tcp"); //http, https,ftp,imap, pop3,ssh

echo "<br>";

echo getservbyport("80", "tcp"); //port diea jana jai servic name abong getsbyserv name diea jana jai port name
?>