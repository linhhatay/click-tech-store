<style>
input[type=text],
input[type=file],
select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>

<h3>Thêm danh mục</h3>

<div>
    <?php if (isset($messages)) {
        echo '<p style="color: green;">' . $messages . '</p>';
    } ?>
    <form action="<?= _WEB_ROOT . '/categories/store' ?>" method="POST" enctype="multipart/form-data">
        <label for="fname">Tên danh mục</label>
        <input type="text" id="fname" name="category_name" placeholder="Your name.." value="<?php echo isset($errors) && !isset($errors['category_name']) ? htmlspecialchars($_POST['category_name']) : '';
                                                                                            ?>">
        <?php if (isset($errors['category_name'])) {
            foreach ($errors['category_name'] as $error) {
                echo '<p style="color: red;">' . $error . '</p>';
            }
        } ?>

        <label for="lname">Danh mục cha (nếu có)</label>
        <select id="categories" name="parent_category_id">
            <option value="0" selected>Danh mục cha</option>
            <option value="1">Phụ kiện Laptop</option>
            <option value="2">Bàn phím, Chuột, Gaming Gear</option>
        </select>
        <?php if (isset($errors['parent_category_id'])) {
            foreach ($errors['parent_category_id'] as $error) {
                echo '<p style="color: red;">' . $error . '</p>';
            }
        } ?>

        <input type="submit" value="Create">
    </form>
</div>