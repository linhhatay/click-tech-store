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
    <form id="productForm" action="<?= _WEB_ROOT . '/product/store'  ?>" method="post" enctype="multipart/form-data">
        <label for="productName">Tên sản phẩm:</label>
        <input type="text" name="product_name" required />
        <br />
        <label for="productDescription">Mô tả:</label>
        <textarea name="description" required></textarea>
        <br />

        <label for="productName">Giá:</label>
        <input type="text" name="price" required />

        <label for="productName">Số lượng:</label>
        <input type="text" name="stock_quantity" required />

        <label for="extraImages">Ảnh:</label>
        <input type="file" name="images[]" accept="image/*" multiple>

        <label for="lname">Danh mục</label>
        <select id="categories" name="category_id">
            <option value="0" selected>Chọn danh mục</option>
            <option value="1">Phụ kiện Laptop</option>
            <option value="2">Bàn phím, Chuột, Gaming Gear</option>
        </select>

        <label for="lname">Thương hiệu (nếu có)</label>
        <select id="categories" name="brand_name">
            <option value="0" selected>Chọn thương hiệu</option>
            <option value="1">DareU</option>
            <option value="2">Akko</option>
        </select>

        <label for="lname">Thuộc tính</label>
        <div id="attributesContainer" style="padding: 0">
            <!-- Đây là nơi để thêm các thuộc tính -->
        </div>
        <button type="button" onclick="addAttribute()">Thêm thuộc tính</button>
        <br />
        <input type="submit" value="Thêm" />
    </form>
</div>

<script>
    function addAttribute() {
        const container = document.getElementById("attributesContainer");
        const attributeDiv = document.createElement("div");
        attributeDiv.className = "attribute-container";

        const attributeNameInput = document.createElement("input");
        attributeNameInput.type = "text";
        attributeNameInput.name = "attribute_name";
        attributeNameInput.placeholder = "Tên thuộc tính";
        attributeNameInput.required = true;

        const attributeValueInput = document.createElement("input");
        attributeValueInput.type = "text";
        attributeValueInput.name = "attribute_value";
        attributeValueInput.placeholder = "Giá trị thuộc tính";
        attributeValueInput.required = true;

        const deleteButton = document.createElement("button");
        deleteButton.type = "button";
        deleteButton.textContent = "Xóa";
        deleteButton.addEventListener("click", function() {
            container.removeChild(attributeDiv);
        });

        attributeDiv.appendChild(attributeNameInput);
        attributeDiv.appendChild(attributeValueInput);
        attributeDiv.appendChild(deleteButton);
        container.appendChild(attributeDiv);
    }

    // document
    //     .getElementById("productForm")
    //     .addEventListener("submit", function(event) {
    //         event.preventDefault();

    //         const productName = document.getElementById("productName").value;
    //         const productDescription = document.getElementById(
    //             "productDescription"
    //         ).value;

    //         const attributes = [];
    //         const attributeDivs = document.querySelectorAll(
    //             "#attributesContainer .attribute-container"
    //         );
    //         attributeDivs.forEach((div) => {
    //             const attributeName = div.querySelector("input[type='text']").value;
    //             const attributeValue = div.querySelector("input[type='text']")
    //                 .value;
    //             attributes.push({
    //                 name: attributeName,
    //                 value: attributeValue
    //             });
    //         });

    //         // Tại đây, bạn có thể sử dụng JavaScript để gửi dữ liệu sản phẩm và các thuộc tính lên máy chủ hoặc làm các xử lý khác.

    //         console.log("Tên sản phẩm:", productName);
    //         console.log("Mô tả:", productDescription);
    //         console.log("Thuộc tính:", attributes);
    //     });
</script>