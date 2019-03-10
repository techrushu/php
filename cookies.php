<html>
<body>
<pre>
1) Set Cookie();
2) Read Cookie();
3) Delete Cookie();

1) setcookie($name,$value,$expire,$path,$domain,$secure=true/false,$httponly=true/false);
 
1)  $name - the name of the cookie - book
2)  $value - this value is stored on client machine - php book
3)  $Expire - The time the cookie expire.
4)  $Path - the path on the server in which cookie will be avilable.
5)  $Domain - The domain that the cookie is avilable.
6)  $Secure - Indicate that the Cookie should only be transmitted over 
              a secure HTTPS connection from the client.
  
7)  $HTTPOnly - When TRUE the Cookie will be made
                accesibility only through the HTTP Protocol.
</pre>
</body>
</html>