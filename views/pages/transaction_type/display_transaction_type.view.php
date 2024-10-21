<div class="container mx-auto">
    <div class="flex justify-between items-center mt-10">
        <h2 class="text-3xl text-center text-green-500 font-semibold my-6">See All Transaction Type</h2>
        <a href="/add_transaction_type" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-4 rounded focus:outline-none focus:shadow-outline">Add Transaction</a>
    </div>
    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr>
                <th class="px-4 py-2 border-b border-gray-300 text-left bg-gray-200 text-gray-600 font-bold uppercase text-sm">
                        ID
                    </th>
                <th class="px-4 py-2 border-b border-gray-300 text-left bg-gray-200 text-gray-600 font-bold uppercase text-sm">
                        Transaction Type
                </th>
                <th class="px-4 py-2 border-b border-gray-300 text-left bg-gray-200 text-gray-600 font-bold uppercase text-sm">
                        Factor
                </th>
                <th class="px-4 py-2 border-b border-gray-300 text-left bg-gray-200 text-gray-600 font-bold uppercase text-sm">
                        Comment
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
            <?php foreach ($transaction_types as $type) : ?>
                <tr class="hover:bg-gray-100">
                    <td class="px-4 py-2 border-b border-gray-300"><?= $type['id'] ?></td>
                    <td class="px-4 py-2 border-b border-gray-300"><?= $type['name'] ?></td>
                    <td class="px-4 py-2 border-b border-gray-300"><?= $type['factor'] ?></td>
                    <td class="px-4 py-2 border-b border-gray-300"><?= $type['comment'] ?></td>
                    <td class="px-4 py-2 border-b border-gray-300"><?= explode(" ", $type['created_at'])[0] ?></td>
                    <td class="px-4 py-2 border-b border-gray-300"><?= explode(" ", $type['created_at'])[1] ?></td>
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