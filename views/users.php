<h1>Users</h1>

<?php foreach ($users as $user): ?>
    <p>User: <a href="/user?id=<?php echo $user['id']; ?>"><?php echo $user['name']; ?></a></p>
<?php endforeach; ?>