<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Login User</h3>
    </div>
    <div class="panel-body">
        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
            <label>Email</label>
            <input type="email" name="email" class="form-control" />
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control" />
    </div>
    <input class="btn btn-primary" name="submit" type="submit" value="Log In" />
    </form>
</div>
</div>