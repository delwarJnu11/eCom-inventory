<div class="flex flex-col items-center justify-center min-h-[90vh] bg-gray-100">
  <h2 class="text-3xl text-gray-500 font-semibold mb-10">Add New Stock</h2>
  <form class="w-1/2 mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="" method="post">
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="product_id">
        Product Name
      </label>
      <select
        id="product_id"
        name="product_id"
        class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded leading-tight focus:outline-none focus:shadow-outline"
      >
        <option value="">Select Product</option>
        <?php foreach( $products as $product) :?>
          <option value="<?= $product['id'] ?>"><?= $product['product_name'] ?></option>
          <?php endforeach ?>
      </select>
    </div>

    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="quantity">
        Quantity
      </label>
      <input
        type="number"
        id="quantity"
        name="quantity"
        placeholder="Enter quantity"
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
      />
    </div>

    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="transaction_id">
        Transaction Type
      </label>
      <select
        id="transaction_id"
        name="transaction_type_id"
        class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded leading-tight focus:outline-none focus:shadow-outline"
      >
        <option value="">Select Transaction Type</option>
        <?php foreach( $transaction_types as $type) :?>
          <option value="<?= $type['id'] ?>"><?= $type['name'] ?></option>
          <?php endforeach ?>
      </select>
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="warehouse_id">
        Warehouse
      </label>
      <select
        id="warehouse_id"
        name="warehouse_id"
        class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded leading-tight focus:outline-none focus:shadow-outline"
      >
        <option value="">Select Warehouse</option>
        <?php foreach( $warehouses as $warehouse) :?>
          <option value="<?= $warehouse['id'] ?>"><?= $warehouse['warehouse_name'] ?></option>
          <?php endforeach ?>
      </select>
    </div>

    <div class="flex items-center justify-between">
      <button
        type="submit"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
        name="add_stock"
      >
        Add stock
      </button>
    </div>
  </form>
   <h2 class="text-green-400 text-base font-semibold"><?= isset($message) ? $message : ""; ?></h2>
  <h2 class="text-red-400 text-base font-semibold"><?= isset($error) ? $error : ""; ?></h2>
</div>
