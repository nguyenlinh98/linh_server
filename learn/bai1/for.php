<?php
echo "-----------hinh1-----------<br/>";

for ($j=0; $j <=10 ; $j++) { 
	for ($i=9; $i >=$j ; $i--) { 
		echo "*";
	}
	echo "<br/>";
}
echo "---------hinh 2------------<br/>";
$sotriSpace = 0;
for ($i = 1; $i <=10; $i++)
{
	// echo '  space : '.$sotriSpace;
    for ($j = 1; $j<=10; $j++)
    {
        if ($j <= $sotriSpace) {
        	echo "&nbsp&nbsp";
        }
        else
        {
        	echo "*";
        	
        }
    }
    $sotriSpace++;
	echo '<br/>';
}
echo "-----------hinh 3-------------<br/>";
 for ($i=1; $i <10 ; $i++) 
 { 
 	for ($j=1; $j<10 ; $j++) 
 	{ 
 		echo "*" ;
 	}
 	echo "<br/>";
 }
 echo "-----------hinh 4-------------<br/>";
 for ($i = 1; $i <=10; $i++)
{
    for ($j =1; $j<=$i; $j++)
    {
        	echo "*";
    }
	echo '<br/>';
}
echo "----------hinh 5--------<br/>";
for ($i = 1; $i <=5; $i++)
{
    for ($j =1; $j<=$i; $j++)
    {
        	echo "*";
    }
	echo '<br/>';
}
for ($j=0; $j <=5 ; $j++) { 
	for ($i=5; $i >=$j ; $i--) { 
		echo "*";
	}
	echo "<br/>";
}
echo "----------hinh 6--------<br/>";
$e=1;
for ($i = 1; $i <=10; $i++)
{
    for ($j =10; $j>=$i; $j--)
    {
        	// echo "*";
    	if ($j <= $sotriSpace)
    		{
    			echo $e;
    		}
    		else
    		{
    			echo "*";
    		}

    }
    $e++;
	echo '<br/>';
}
 for ($i=10; $i <12 ; $i++) { 
    if($i ==12)
    {
        echo "nghi hui";
    }
    else
        echo " van lam a";
 }
    
?>

