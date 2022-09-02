<h1>Панель администрирования</h1>
<p>
<?php
foreach ($data['users'] as $page) {
    echo $page['email'] . '</br>';
}
?>
<ul class="pagination">
    <li><a href="main/?page=1">First</a></li>
    <li class="<?php if($data['page'] <= 1){ echo 'disabled'; } ?>">
        <a href="<?php if($data['page'] <= 1){ echo '#'; } else { echo "main/?page=".($data['page'] - 1); } ?>">Prev</a>
    </li>
    <li class="<?php if($data['page'] >= $data['total_pages']){ echo 'disabled'; } ?>">
        <a href="<?php if($data['page'] >= $data['total_pages']){ echo '#'; } else { echo "main/?page=".($data['page'] + 1); } ?>">Next</a>
    </li>
    <li><a href="main/?page=<?php echo $data['total_pages']; ?>">Last</a></li>
</ul>
</p>
