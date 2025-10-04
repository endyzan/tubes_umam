<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Data - Three Brother Law</title>
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
          <a href="./customer-data.php" class="flex items-center space-x-3 px-4 py-2 rounded-lg bg-gray-100 text-red-600 font-semibold">
            <i class="fa-solid fa-users"></i>
            <span>Customer Data</span>
          </a>
          <a href="../consultation/consultation.php" class="flex items-center space-x-3 px-4 py-2 rounded-lg hover:bg-gray-100">
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
      <h1 class="text-3xl font-bold mb-6">Customer Data</h1>

      <div class="bg-white shadow-lg rounded-xl overflow-hidden">
        <table class="w-full text-left border-collapse">
          <thead class="bg-gray-200">
            <tr>
              <th class="py-3 px-4">ID</th>
              <th class="py-3 px-4">Customer Name</th>
              <th class="py-3 px-4">Address</th>
              <th class="py-3 px-4">Phone No.</th>
              <th class="py-3 px-4">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b">
              <td class="py-3 px-4">5764890</td>
              <td class="py-3 px-4">Supriadi Juli</td>
              <td class="py-3 px-4">Jl. Rungkut Indah 19</td>
              <td class="py-3 px-4">+62824989131</td>
              <td class="py-3 px-4 space-x-2">
                <button onclick="window.location.href='./edit-customer.php'" 
                  class="bg-black text-white px-3 py-1 rounded">
                  Edit
                </button>

                <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">Delete</button>
              </td>
            </tr>
            <tr class="border-b">
              <td class="py-3 px-4">5764890</td>
              <td class="py-3 px-4">Adriawan Lex</td>
              <td class="py-3 px-4">Jl. Kendangsari XI/5</td>
              <td class="py-3 px-4">+62822134145</td>
              <td class="py-3 px-4 space-x-2">
                <button onclick="window.location.href='./edit-customer.php'" 
                  class="bg-black text-white px-3 py-1 rounded">
                  Edit
                </button>

                <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">Delete</button>
              </td>
            </tr>
            <tr>
              <td class="py-3 px-4">5764890</td>
              <td class="py-3 px-4">Budi Banteran</td>
              <td class="py-3 px-4">Jl. Graha Famili V/1</td>
              <td class="py-3 px-4">+62814415215</td>
              <td class="py-3 px-4 space-x-2">
                <button onclick="window.location.href='./edit-customer.php'" 
                  class="bg-black text-white px-3 py-1 rounded">
                  Edit
                </button>

                <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">Delete</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Pagination -->
      <div class="flex justify-between items-center mt-4">
        <button class="bg-black text-white px-3 py-1 rounded hover:bg-gray-700">&lt; Previous</button>
        <div class="space-x-2">
          <button class="px-3 py-1 rounded bg-black text-white">1</button>
          <button class="px-3 py-1 rounded hover:bg-gray-200">2</button>
          <button class="px-3 py-1 rounded hover:bg-gray-200">3</button>
          <span>...</span>
          <button class="px-3 py-1 rounded hover:bg-gray-200">67</button>
          <button class="px-3 py-1 rounded hover:bg-gray-200">68</button>
        </div>
        <button class="bg-black text-white px-3 py-1 rounded hover:bg-gray-700">Next &gt;</button>
      </div>
    </main>
  </div>


    <!-- Modal (hidden secara default) -->
    <div id="deleteModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white rounded-lg shadow-lg w-96 p-6">
        <div class="flex items-center mb-4">
        <i class="fa-solid fa-circle-info text-blue-500 text-2xl mr-2"></i>
        <h2 class="text-xl font-bold">Important!</h2>
        </div>
        <p class="text-gray-600 mb-6">Are you sure, you want to delete customer data?</p>
        <div class="flex justify-end space-x-3">
        <button id="cancelBtn" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">
            Cancel
        </button>
        <button id="confirmDeleteBtn" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded">
            Delete
        </button>
        </div>
    </div>
    </div>

    <script>
    // Ambil semua tombol delete
    const deleteButtons = document.querySelectorAll(".bg-red-600");
    const modal = document.getElementById("deleteModal");
    const cancelBtn = document.getElementById("cancelBtn");
    const confirmDeleteBtn = document.getElementById("confirmDeleteBtn");

    let selectedRow = null;

    deleteButtons.forEach(btn => {
        btn.addEventListener("click", (e) => {
        selectedRow = e.target.closest("tr"); // simpan row yang dipilih
        modal.classList.remove("hidden"); // tampilkan modal
        });
    });

    // Tombol cancel -> tutup modal
    cancelBtn.addEventListener("click", () => {
        modal.classList.add("hidden");
        selectedRow = null;
    });

    // Tombol confirm delete -> hapus row
    confirmDeleteBtn.addEventListener("click", () => {
        if (selectedRow) {
        selectedRow.remove(); // hapus baris customer
        }
        modal.classList.add("hidden"); // tutup modal
    });
    </script>


</body>
</html>
