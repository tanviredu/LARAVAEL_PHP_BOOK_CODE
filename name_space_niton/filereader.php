<?php 
    echo "echo the namespace";
    
    class FileReader{

        public function main(){
             echo __NAMESPACE__;
        }
    }

    // init the function

    $filereader = new FileReader;
    $filereader->main();
    // this result will show empty
    // there is no name in the global namespace
    // so it will show nothing


?>