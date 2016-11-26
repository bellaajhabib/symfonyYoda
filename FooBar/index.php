<?php
/**
 * Created by PhpStorm.
 * User: habib
 * Date: 9/19/2016
 * Time: 10:47 PM
 */

spl_autoload_register(function ($class_name){
include $class_name.".php";
});

$database= new Database();
$database->query('SELECT * FROM posts');
$rows=$database->resultset();
$post=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
if ($post['delete']){
$delete_id=$post['delete_id'];
    $database->query('DELETE FROM posts where id = :id');
    $database->bind(':id',$delete_id);
    $database->execute();
}
if ($post['submit']){
    $title=$post['title'];
    $body=$post['body'];
    $database->query('INSERT INTO posts (title,body)VALUES (:title,:body)');
    $database->bind(':title',$title);
    $database->bind(':body',$body);
    $database->execute();
if ($database->getLastInsertId()){
    $message="this post Added !";
    echo "<p>$message</p>";
}

}
?>
<h1>Add Post</h1>
<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
<label>Post Title</label>
<input type="text" name="title" placeholder="Add a Title ..."><br/>
<label>Post Body</label>
<textarea name="body" ></textarea>
    <br/><br/>
<input type="submit" name="submit" value="Submit">
</form>
<h1>Post</h1>
<div>
    <?php foreach ($rows as $row): ?>
    <div>
        <h3><?php echo $row['title'] ?></h3>
        <h3><?php echo $row['body'] ?></h3>
    </div>
        <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
            <input type="hidden" name="delete_id" value="<?php echo $row['id'];?>">
            <input type="submit" name="delete" value="Delete">
        </form>
    <?php endforeach ?>
</div>