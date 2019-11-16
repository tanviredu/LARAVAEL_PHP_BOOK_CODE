you can give any namespace name you want
but after you define namespace
then in the index file or any file you want to add this class or function
you have to require the file and you have to add namespace
you can use the aliases
like if the class name is PHP and the namespace is anotherphp 
then you have to add

$obj = new anotherphp\PHP;

you can use the aliases like

use anotherphp\PHP as ph

$obj = new ph;


if you want to use function you habe to call

namespace\php 


it is not necessary that you give namespace based on directory structure
you can give any name 
but we give it like the directory name
so we can organize the code
