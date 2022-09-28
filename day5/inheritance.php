<?php

class Java  
    {  
        public function fun1()  
        {  
            echo "Class <br>";
            echo "Object <br>";  
            echo "operator <br>";    
        } 
    } 
    class PHP extends Java 
    {  
        public function fun2()  
          {  
            echo "Function <br>" ;  
            echo "Keywords <br>" ;  
            echo "Arrays <br>" ;  
        }  
    }  
    class Phython extends PHP
    {  
        public function fun3()  
          {  
            echo "Phython is a programing language <br>" ;  
        }  
    }  
    $obj= new Phython();  
    $obj->fun1();  
    $obj->fun2(); 
    $obj->fun3();  
 





?>  