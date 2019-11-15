<?php 


    class Library{

        public function index(){

            // importing from the namaspace
            //book from the Library
            // and Elseicer from the Journal inside the Library
            $book = new Library\book;
            $elsevier = new Library\Journal\Elseiver;
        }

    }

    $library = new Library;


?>