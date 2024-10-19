<form class="max-w-lg mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="" method="post">
  <div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="product_name">
      Product Name
    </label>
    <input
      type="text"
      id="product_name"
      name="product_name"
      placeholder="Enter product name"
      class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
    />
  </div>

  <div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="category_id">
      Category
    </label>
    <select
      id="category_id"
      name="category_id"
      class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded leading-tight focus:outline-none focus:shadow-outline"
    >
      <option value="">Select category</option>
      <?php foreach( $categories as $category) :?>
        <option value="<?= $category['id'] ?>"><?= $category['category_name'] ?></option>
        <?php endforeach ?>
    </select>
  </div>

  <div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="unit_price">
      Unit Price
    </label>
    <input
      type="number"
      id="unit_price"
      name="unit_price"
      placeholder="Enter unit price"
      class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
    />
  </div>

  <div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="barcode">
      Barcode
    </label>
    <input
      type="text"
      id="barcode"
      name="barcode"
      placeholder="Enter barcode"
      class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
    />
  </div>

  <div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="uom_id">
      Unit of Measure (UOM)
    </label>
    <select
      id="uom_id"
      name="uom_id"
      class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded leading-tight focus:outline-none focus:shadow-outline"
    >
      <option value="">Select UOM</option>
      <?php foreach( $measurements as $m) :?>
        <option value="<?= $m['id'] ?>"><?= $m['name'] ?></option>
        <?php endforeach ?>
    </select>
  </div>

  <div class="flex items-center justify-between">
    <button
      type="submit"
      class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
      name="add_product_btn"
    >
      Add Product
    </button>
  </div>
</form>
