<style>
input[type=text],
input[type=file],
select,
textarea {
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

<h3>Thêm sản phẩm</h3>

<div>
    <form action="/PHP/src/public/product/store" method="POST" enctype="multipart/form-data">
        <label for="fname">Name</label>
        <input type="text" id="fname" name="product_name" placeholder="Your name..">

        <label for="fname">Description</label>
        <textarea id="fname" name="description" placeholder="Your description.."></textarea>

        <label for="lname">Price</label>
        <input type="text" id="lname" name="price" placeholder="Your price..">

        <label for="lname">Stock quantity</label>
        <input type="text" id="lname" name="stock_quantity" placeholder="Your image..">

        <label for="lname">Image</label>
        <input type="file" id="lname" name="stock_quantity" placeholder="Your image..">

        <label for="lname">Categories</label>
        <select id="categories" name="categories">
            <?php foreach ($categories as $category) : ?>
            <option value="<?= $category['category_id'] ?>"><?= $category['category_name'] ?></option>
            <?php endforeach;
            ?>
        </select>

        <input type="submit" value="Create">
    </form>
</div>