<style>
#customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td,
#customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even) {
    background-color: #f2f2f2;
}

#customers tr:hover {
    background-color: #ddd;
}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #04AA6D;
    color: white;
}
</style>


<h1>Danh sách danh mục</h1>

<table id="customers">
    <?php

    ?>
    <tr>
        <th>ID</th>
        <th>Tên danh mục</th>
        <th>Danh mục cha</th>
        <th colspan="2">Actions</th>
    </tr>
    <?php if (!empty($categories)) {
        foreach ($categories as $category) {
    ?>
    <tr>
        <td><?= $category['category_id'] ?></td>
        <td><?= $category['category_name'] ?></td>
        <td><?= $category['parent_category_id'] ?></td>
        <td>Sửa</td>
        <td>
            <form action="<?php _WEB_ROOT . '/categories/delete' . $category['category_id'] ?>" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <input type="submit" value="Xóa">
            </form>
        </td>
    </tr>
    <?php }
    }
    ?>
</table>