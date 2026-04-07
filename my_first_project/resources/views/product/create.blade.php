<h2>Add Product</h2>

<form method="POST" action="/product/store">
    @csrf

    <label>Name:</label><br>
    <input type="text" name="name"><br><br>

    <label>Price:</label><br>
    <input type="number" name="price"><br><br>

    <button type="submit">Add Product</button>
</form>