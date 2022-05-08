<?php

session_start();
ob_start();


if(($_POST["email"]=="g201210017@sakarya.edu.tr") && ($_POST["password"]=="g201210017"))
{

$_SESSION["login"] = "true";
$_SESSION["email"] = "g201210017@sakarya.edu.tr";
$_SESSION["password"] = "g201210017";

echo "Hosgeldiniz g201210017. Başarıyla giriş yaptınız. Hakkında sayfasına yonlendiriliyorsunuz. Lütfen bekleyin..";
												
header("Refresh:2; url=hakkimda.html");

}
elseif(($_POST["email"]=="") && ($_POST["password"]==""))
{
    echo "Kullanici adi veya sifre bos birakilmamalidir";
    header("Refresh: 2; url=login.html");
}

else
{
	echo "Kullanici adi veya sifreniz yanlis.";
	header("Refresh: 2; url=login.html");
}


ob_end_flush();
?>