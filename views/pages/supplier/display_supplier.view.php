<div class="container mx-auto">
    <div class="flex justify-between items-center mt-10">
        <h2 class="text-3xl text-center text-green-500 font-semibold my-6">See All Suppliers</h2>
        <a href="/add_supplier" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-4 rounded focus:outline-none focus:shadow-outline">Add Supplier</a>
    </div>
    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr>
                <th class="px-4 py-2 border-b border-gray-300 text-left bg-gray-200 text-gray-600 font-bold uppercase text-sm">
                        ID
                    </th>
                <th class="px-4 py-2 border-b border-gray-300 text-left bg-gray-200 text-gray-600 font-bold uppercase text-sm">
                        Client Name
                </th>
                <th class="px-4 py-2 border-b border-gray-300 text-left bg-gray-200 text-gray-600 font-bold uppercase text-sm">
                        Email
                </th>
                <th class="px-4 py-2 border-b border-gray-300 text-left bg-gray-200 text-gray-600 font-bold uppercase text-sm">
                        Phone
                </th>
                <th class="px-4 py-2 border-b border-gray-300 text-left bg-gray-200 text-gray-600 font-bold uppercase text-sm">
                        Date Of Birth
                </th>
                <th class="px-4 py-2 border-b border-gray-300 text-left bg-gray-200 text-gray-600 font-bold uppercase text-sm">
                        Address
                </th>
                <th class="px-4 py-2 border-b border-gray-300 text-left bg-gray-200 text-gray-600 font-bold uppercase text-sm">
                        Created At
                    </th>
                <th class="px-4 py-2 border-b border-gray-300 text-left bg-gray-200 text-gray-600 font-bold uppercase text-sm">
                        Create Time
                    </th>
                <th class="px-4 py-2 border-b border-gray-300 text-left bg-gray-200 text-gray-600 font-bold uppercase text-sm">
                        Action
                    </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($suppliers as $supplier) : ?>
                <tr class="hover:bg-gray-100">
                    <td class="px-4 py-2 border-b border-gray-300"><?= $supplier['id'] ?></td>
                    <td class="px-4 py-2 border-b border-gray-300"><?= $supplier['supplier_name'] ?></td>
                    <td class="px-4 py-2 border-b border-gray-300"><?= $supplier['email'] ?></td>
                    <td class="px-4 py-2 border-b border-gray-300"><?= $supplier['phone'] ?></td>
                    <td class="px-4 py-2 border-b border-gray-300"><?= explode(" ", $supplier['dob'])[0] ?></td>
                    <td class="px-4 py-2 border-b border-gray-300"><?= $supplier['address'] ?></td>
                    <td class="px-4 py-2 border-b border-gray-300"><?= explode(" ", $supplier['created_at'])[0] ?></td>
                    <td class="px-4 py-2 border-b border-gray-300"><?= explode(" ", $supplier['created_at'])[1] ?></td>
                    <td class="px-4 py-2 border-b border-gray-300">
                        <div class="flex space-x-4">
                            <a
                                    href="#"
                                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-4 rounded focus:outline-none focus:shadow-outline"
                                >
                                    Edit
                                </a>
                            <a
                                    href="#"
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-4 rounded focus:outline-none focus:shadow-outline"
                                >
                                    Delete
                                </a>
                        </div>
                    </td>
                    </tr>
            <?php endforeach ?>
        </tbody>
     </table>
</div>