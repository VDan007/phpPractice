<div>
    <h1>Login</h1>
    <form action="" method="POST">
        <input type="text" name="email">
        <input type="password" name="password">
        <input type="submit" name="login" value="Login">

    </form>

</div>
<?php if(isset($view_bag['status'])){
    echo $view_bag['status'];
} 
?>