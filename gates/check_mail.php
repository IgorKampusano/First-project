<?php
	print mail("name@my.ru", "header", "text");

    if(mail("kampusano.igor@mail.ru", "My Subject", "Line 1\nLine 2\nLine 3", "-f kampusano.igor@mail.ru")) echo "message send";
    else echo "message not send";