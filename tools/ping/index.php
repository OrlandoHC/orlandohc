<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>The WorldsEnd.NET - Free Ping Script, written in PHP</title>
</head>
<?php
error_reporting(0);
ini_set('display_errors', 0);
ini_set('default_charset', 'utf-8');
header('Content-type: text/html; charset=utf-8');
mb_internal_encoding('UTF-8'); 
mb_http_output('UTF-8'); 
mb_http_input('UTF-8'); 
mb_regex_encoding('UTF-8');
echo mb_internal_encoding();

//
$locale='de_DE.UTF-8';
setlocale(LC_ALL,$locale);
putenv('LC_ALL='.$locale);
echo exec('locale charmap');

//  This script was writen by webmaster@theworldsend.net, Dec. 2003
//  http://www.theworldsend.net 
//  This is my first script. Enjoy.
//  
// Put it into whatever directory and call it. That's all.
// Updated to 4.2 code 
// Get Variable from form via register globals on/off
// Security problem, $count wasn't checked upon. 
// "-" was zapped out....not anymore
//-------------------------
$max_count = 10; //maximum count for ping command
$unix      =  0; //set this to 1 if you are on a *unix system      
$windows   =  1; //set this to 1 if you are on a windows system
// -------------------------
// nothing more to be done.
// -------------------------
//globals on or off ?
$register_globals = (bool) ini_get('register_gobals');
$system = ini_get('system');
$unix = (bool) $unix;
$win  = (bool)  $windows;
//
If ($register_globals)
{
   $ip = getenv(REMOTE_ADDR);
   $self = $PHP_SELF;
} 
else 
{
   $submit = $_GET['submit'];
   $count  = $_GET['count'];
   $host   = $_GET['host'];
   $ip     = $_SERVER['REMOTE_ADDR'];
   $self   = $_SERVER['PHP_SELF'];
};
// form submitted ?
If ($submit == "Ping") 
{
   // over count ?
   If ($count > $max_count) 
   {
      echo 'Maximum for count is: '.$max_count;
      echo '<a href="'.$self.'">Back</a>';
   }
   else 
   {
      // replace bad chars
      $host= preg_replace ("/[^A-Za-z0-9.-]/","",$host);
      $count= preg_replace ("/[^0-9]/","",$count);
      echo '<body bgcolor="#FFFFFF" text="#000000"></body>';
      echo(" Ping Output:<br>
      "); 
      echo '<pre>';           
      //check target IP or domain
      if ($unix) 
      {
         system ("ping -c$count -w$count $host");
         system("killall ping");// kill all ping processes in case there are some stalled ones or use echo 'ping' to execute ping without shell
      }
      else
      {
         system("ping -n $count $host");
         echo utf8_encode("Mañana programación PHP");

      }
      echo '</pre>';
    }
} 
else 
{
    echo '<body bgcolor="#FFFFFF" text="#000000"></body>';
    echo '<p><font size="2">Your IP is: '.$ip.'</font></p>';
    echo '<form methode="post" action="'.$self.'">';
    echo '   Enter IP or Host <input type="text" name="host" value=""></input>';
    //echo '   Enter IP or Host <input type="text" name="host" value="'.$ip.'"></input>';
    echo '   Enter Count <input type="text" name="count" size="2" value="4"></input>';
    echo '   <input type="submit" name="submit" value="Ping"></input>';
    echo '</form>';
    echo '<br><b>'.$system.'</b>';
    echo '</body></html>';
}
?>
