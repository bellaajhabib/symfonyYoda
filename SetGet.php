<?php
class Post{
private  $name;
    public function __set($name,$value){

      //  var_dump($name. ' '.$value);
        $this->name=$value;
    }
    public function __get($name){

        return $this->name;

    }
}
$pst= new Post;
$pst->hamaa='sssss';
echo $pst->hamaa;
