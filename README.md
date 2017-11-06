**PHPScanDirectory**

Example PHP code for read file in folder and subfolder recursively.

In this example it will show the file with .php extension only.

Add this code to your project and setup the directory on:

`recursiveScan('/var/www/');` //If you add `/` in the beginning it will read from root of your computer folder

or 

`recursiveScan('my-folder/');` //It will read from my-folder.


If you want to activate the rename function you can unremark this line(in this example it will change .php file to be .txt file).

`rename($filename, str_replace(".php",".txt",$file));`

>WARNING: Please be aware of this code. It will rename all of your .PHP file to be .TXT file. Be carefull about your project(That's why i not activated this code as default).
