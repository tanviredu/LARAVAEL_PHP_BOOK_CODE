<?php 
    

// adding the namespace for different 

   // if you dont show the namespace there
    // will be two class thats why it will show 
    // an error 
    // because both are at the global namespace
    //you have to add a namespace for this code
    // now if we add a namespace

    namespace NS;
    // then error wont happen
   require_once('filereader.php');
   echo "echo the namespace";
    
   class FileReader{

       public function main(){
            echo __NAMESPACE__;
       }
   }

   // init the function

   $file = new FileReader;
   $file->main();


    // why there is no error after adding the namespace
    //now this filereader from the filereader.php is added to
    // the global anamespace
    // and file reader class in htis file will be added in tthe NS namespace
    // thats why it will not show any error and it will echo the namespace

?>