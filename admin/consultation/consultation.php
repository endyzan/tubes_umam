<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consultation - Three Brother Law</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans">

  <div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-lg flex flex-col justify-between">
      <div>
        <div class="p-6 text-center">
          <img src="../../assets/img/logo.png" alt="Logo" class="w-20 mx-auto mb-2">
          <h2 class="text-lg font-bold">Three Brother Law</h2>
        </div>

        <nav class="px-4 space-y-2">
          <a href="../admin-dashboard.php" class="flex items-center space-x-3 px-4 py-2 rounded-lg hover:bg-gray-100">
            <i class="fa-solid fa-house"></i>
            <span>Dashboard</span>
          </a>
          <a href="../lawyer-data/lwyer-data.php" class="flex items-center space-x-3 px-4 py-2 rounded-lg hover:bg-gray-100">
            <i class="fa-solid fa-user"></i>
            <span>Lawyer Data</span>
          </a>
          <a href="../customer-data/customer-data.php" class="flex items-center space-x-3 px-4 py-2 rounded-lg hover:bg-gray-100">
            <i class="fa-solid fa-users"></i>
            <span>Customer Data</span>
          </a>
          <a href="./consultation.php" class="flex items-center space-x-3 px-4 py-2 rounded-lg bg-gray-100 text-red-600 font-semibold">
            <i class="fa-solid fa-file-lines"></i>
            <span>Consultation</span>
          </a>
        </nav>
      </div>

      <div class="p-6">
        <button onclick="window.location.href='../../login.php'" 
          class="w-full py-2 bg-gray-300 text-gray-800 rounded-lg hover:bg-gray-400 font-semibold">
          Log-out
        </button>
      </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8">
      <h1 class="text-3xl font-bold mb-6">Consultation Schedule</h1>

      <div class="bg-white p-6 rounded-2xl shadow-lg">
        <table class="w-full table-auto border-collapse">
          <thead>
            <tr class="bg-gray-200 text-gray-700">
              <th class="px-4 py-3 text-left rounded-tl-lg">Customer Name</th>
              <th class="px-4 py-3 text-left">Consule Date</th>
              <th class="px-4 py-3 text-left">Lawyer</th>
              <th class="px-4 py-3 text-left">Day</th>
              <th class="px-4 py-3 text-left rounded-tr-lg">Time</th>
            </tr>
          </thead>
          <tbody class="text-gray-800">
            <tr class="border-b">
              <td class="px-4 py-3">Supriadi Juli</td>
              <td class="px-4 py-3">15 September 2025</td>
              <td class="px-4 py-3">Tonno Sutono</td>
              <td class="px-4 py-3">Monday</td>
              <td class="px-4 py-3">13.00</td>
            </tr>
            <tr class="border-b">
              <td class="px-4 py-3">Adriawan Lex</td>
              <td class="px-4 py-3">16 September 2025</td>
              <td class="px-4 py-3">Suparto Karto</td>
              <td class="px-4 py-3">Tuesday</td>
              <td class="px-4 py-3">13.30</td>
            </tr>
            <tr>
              <td class="px-4 py-3">Budi Banteran</td>
              <td class="px-4 py-3">16 September 2025</td>
              <td class="px-4 py-3">Lailul Subianto</td>
              <td class="px-4 py-3">Tuesday</td>
              <td class="px-4 py-3">14.00</td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Pagination -->
      <div class="flex justify-center items-center space-x-2 mt-6">
        <button class="px-3 py-1 border rounded-lg text-gray-600 hover:bg-gray-200">&lt; Previous</button>
        <span class="px-3 py-1 border rounded-lg bg-black text-white">1</span>
        <span class="px-3 py-1 border rounded-lg hover:bg-gray-200">2</span>
        <span class="px-3 py-1 border rounded-lg hover:bg-gray-200">3</span>
        <span class="px-3 py-1">...</span>
        <span class="px-3 py-1 border rounded-lg hover:bg-gray-200">67</span>
        <span class="px-3 py-1 border rounded-lg hover:bg-gray-200">68</span>
        <button class="px-3 py-1 border rounded-lg text-gray-600 hover:bg-gray-200">Next &gt;</button>
      </div>
    </main>
  </div>

</body>
</html>
