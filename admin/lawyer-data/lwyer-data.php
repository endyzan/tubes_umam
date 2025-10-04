<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lawyer Data - Three Brother Law</title>
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
          <a href="./lwyer-data.php" class="flex items-center space-x-3 px-4 py-2 rounded-lg bg-gray-100 text-red-600 font-semibold">
            <i class="fa-solid fa-user"></i>
            <span>Lawyer Data</span>
          </a>
          <a href="../customer-data/customer-data.php" class="flex items-center space-x-3 px-4 py-2 rounded-lg hover:bg-gray-100">
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
      <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">Lawyer Data</h1>
        <a href="./add-lawyer.php" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
          Add +
        </a>
      </div>

      <!-- Table -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <table class="w-full text-left">
          <thead class="bg-gray-200">
            <tr>
              <th class="px-6 py-3">ID</th>
              <th class="px-6 py-3">Lawyer Name</th>
              <th class="px-6 py-3">Lawyer Profession</th>
              <th class="px-6 py-3">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b">
              <td class="px-6 py-3">1409981985</td>
              <td class="px-6 py-3">Tonno Sutono</td>
              <td class="px-6 py-3">Pidana</td>
              <td class="px-6 py-3 flex space-x-2">
                <button onclick="window.location.href='./edit-lawyer.php'" 
                  class="bg-black text-white px-3 py-1 rounded">
                  Edit
                </button>

                <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">Delete</button>
              </td>
            </tr>
            <tr class="border-b">
              <td class="px-6 py-3">1409981986</td>
              <td class="px-6 py-3">Suparto Karto</td>
              <td class="px-6 py-3">Advokat</td>
              <td class="px-6 py-3 flex space-x-2">
                <button onclick="window.location.href='./edit-lawyer.php'" 
                  class="bg-black text-white px-3 py-1 rounded">
                  Edit
                </button>

                <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">Delete</button>
              </td>
            </tr>
            <tr>
              <td class="px-6 py-3">1409981987</td>
              <td class="px-6 py-3">Lailul Subianto</td>
              <td class="px-6 py-3">Kooporasi</td>
              <td class="px-6 py-3 flex space-x-2">
                <button onclick="window.location.href='./edit-lawyer.php'" 
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
      <div class="flex justify-between items-center mt-6">
        <button class="bg-black text-white px-4 py-2 rounded">‹ Previous</button>
        <div class="space-x-2">
          <button class="px-3 py-1 border rounded bg-black text-white">1</button>
          <button class="px-3 py-1 border rounded hover:bg-gray-100">2</button>
          <button class="px-3 py-1 border rounded hover:bg-gray-100">3</button>
          <span>...</span>
          <button class="px-3 py-1 border rounded hover:bg-gray-100">68</button>
        </div>
        <button class="bg-black text-white px-4 py-2 rounded">Next ›</button>
      </div>
    </main>
  </div>

  <!-- Modal Delete -->
  <div id="deleteModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white rounded-lg shadow-lg w-96 p-6">
      <div class="flex items-center mb-4">
        <i class="fa-solid fa-circle-info text-blue-500 text-2xl mr-2"></i>
        <h2 class="text-xl font-bold">Important!</h2>
      </div>
      <p class="text-gray-600 mb-6">Are you sure, you want to delete lawyer data?</p>
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
    const deleteButtons = document.querySelectorAll(".bg-red-600");
    const modal = document.getElementById("deleteModal");
    const cancelBtn = document.getElementById("cancelBtn");
    const confirmDeleteBtn = document.getElementById("confirmDeleteBtn");

    let selectedRow = null;

    deleteButtons.forEach(btn => {
      btn.addEventListener("click", (e) => {
        selectedRow = e.target.closest("tr"); // simpan baris yg dipilih
        modal.classList.remove("hidden"); // tampilkan modal
      });
    });

    // Tombol cancel -> tutup modal
    cancelBtn.addEventListener("click", () => {
      modal.classList.add("hidden");
      selectedRow = null;
    });

    // Tombol confirm delete -> hapus baris
    confirmDeleteBtn.addEventListener("click", () => {
      if (selectedRow) {
        selectedRow.remove(); // hapus baris lawyer
      }
      modal.classList.add("hidden");
    });
  </script>

</body>
</html>
