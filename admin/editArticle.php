<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Management System</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<?php include ("adminNavbar.php"); ?>
<div class="mx-auto max-w-screen-sm mt-20">
          <h2 class="mb-4 text-4xl tracking-tight text-center font-extrabold text-gray-900 dark:text-white">Edit Articles</h2>
      </div> 
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg ml-4 mr-4">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Article Title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Author's Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Description
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-gray dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        How to find good hostel
                    </th>
                    <td class="px-6 py-4">
                        NSBM team
                    </td>
                    <td class="px-6 py-4">
                        2024-03-12
                    </td>
                    <td class="px-6 py-4">
                        test test test test test test test test test test test test test test test
                        test test test test test test test test test test test test test test test
                        test test test test test test test test test test test test test test test
                        test test test test test test test test test test test test test test test
                        test test test test test test test test test test test test test test test
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a>
                    </td>
                </tr>
                
            </tbody>
        </table>
        </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
