<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Schedule - Three Brother Law</title>
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
          <a href="../lawyer-dashboard.php" class="flex items-center space-x-3 px-4 py-2 rounded-lg hover:bg-gray-100">
            <i class="fa-solid fa-house"></i>
            <span>Dashboard</span>
          </a>
          <a href="../lawyer-schadule/lawyer-schedule.php" class="flex items-center space-x-3 px-4 py-2 rounded-lg hover:bg-gray-100">
            <i class="fa-regular fa-calendar"></i>
            <span>Lawyer Schedule</span>
          </a>
          <a href="../consultation/consultation.php" class="flex items-center space-x-3 px-4 py-2 rounded-lg hover:bg-gray-100">
            <i class="fa-regular fa-clipboard"></i>
            <span>Consultation</span>
          </a>
          <a href="../consultation-history/consultation-history.php" class="flex items-center space-x-3 px-4 py-2 rounded-lg hover:bg-gray-100">
            <i class="fa-solid fa-database"></i>
            <span>Consultation History</span>
          </a>
          <a href="./my-schedule.php" class="flex items-center space-x-3 px-4 py-2 rounded-lg bg-gray-100 text-red-600 font-semibold">
            <i class="fa-solid fa-server"></i>
            <span>My Schedule</span>
          </a>
          <a href="../my-profile/my-profile.php" class="flex items-center space-x-3 px-4 py-2 rounded-lg hover:bg-gray-100">
            <i class="fa-regular fa-user"></i>
            <span>My Profile</span>
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
    <main class="flex-1 p-12">
      <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold">My Schedule</h1>
        <a href="./add-scedule.php" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Add +</a>
      </div>

      <!-- Table -->
      <div class="bg-white shadow-lg rounded-2xl overflow-hidden">
        <table class="w-full text-left border-collapse">
          <thead class="bg-gray-200">
            <tr>
              <th class="px-6 py-3 font-semibold">Lawyer Name</th>
              <th class="px-6 py-3 font-semibold">Consule Date</th>
              <th class="px-6 py-3 font-semibold">Profession</th>
              <th class="px-6 py-3 font-semibold">Day</th>
              <th class="px-6 py-3 font-semibold">Time</th>
              <th class="px-6 py-3 font-semibold">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-t">
              <td class="px-6 py-4">Tonno Sutono</td>
              <td class="px-6 py-4">15 Sept 2025</td>
              <td class="px-6 py-4">Pidana</td>
              <td class="px-6 py-4">Monday</td>
              <td class="px-6 py-4">13.00</td>
              <td class="px-6 py-4 space-x-2">
                <button onclick="window.location.href='./edit-schedule.php'" 
                  class="bg-black text-white px-3 py-1 rounded">
                  Edit
                </button>

                <button class="bg-red-600 text-white px-3 py-1 rounded">Delete</button>
              </td>
            </tr>
            <tr class="border-t">
              <td class="px-6 py-4">Tonno Sutono</td>
              <td class="px-6 py-4">16 Sept 2025</td>
              <td class="px-6 py-4">Pidana</td>
              <td class="px-6 py-4">Wednesday</td>
              <td class="px-6 py-4">10.30</td>
              <td class="px-6 py-4 space-x-2">
                <button onclick="window.location.href='./edit-schedule.php'" 
                  class="bg-black text-white px-3 py-1 rounded">
                  Edit
                </button>

                <button class="bg-red-600 text-white px-3 py-1 rounded">Delete</button>
              </td>
            </tr>
            <tr class="border-t">
              <td class="px-6 py-4">Tonno Sutono</td>
              <td class="px-6 py-4">17 Sept 2025</td>
              <td class="px-6 py-4">Pidana</td>
              <td class="px-6 py-4">Thursday</td>
              <td class="px-6 py-4">15.00</td>
              <td class="px-6 py-4 space-x-2">
                <button onclick="window.location.href='./edit-schedule.php'" 
                  class="bg-black text-white px-3 py-1 rounded">
                  Edit
                </button>

                <button class="bg-red-600 text-white px-3 py-1 rounded">Delete</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Pagination -->
      <div class="flex items-center justify-between mt-6">
        <button class="flex items-center px-3 py-1 text-sm bg-black text-white rounded hover:opacity-80">
          <span class="mr-1">&lt;</span> Previous
        </button>

        <div class="flex items-center space-x-2 text-gray-700">
          <span class="px-3 py-1 rounded bg-black text-white text-sm">1</span>
          <span class="px-2">2</span>
          <span class="px-2">3</span>
          <span class="px-2">...</span>
          <span class="px-2">67</span>
          <span class="px-2">68</span>
        </div>

        <button class="flex items-center px-3 py-1 text-sm bg-black text-white rounded hover:opacity-80">
          Next <span class="ml-1">&gt;</span>
        </button>
      </div>
    </main>
  </div>

  <!-- Modal -->
  <div id="deleteModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white rounded-lg shadow-lg w-96 p-6">
      <div class="flex items-center mb-4">
        <i class="fa-solid fa-circle-info text-blue-500 text-2xl mr-2"></i>
        <h2 class="text-xl font-bold">Important!</h2>
      </div>
      <p class="text-gray-600 mb-6">Are you sure, you want to delete this schedule?</p>
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
        selectedRow = e.target.closest("tr");
        modal.classList.remove("hidden");
      });
    });

    cancelBtn.addEventListener("click", () => {
      modal.classList.add("hidden");
      selectedRow = null;
    });

    confirmDeleteBtn.addEventListener("click", () => {
      if (selectedRow) {
        selectedRow.remove();
      }
      modal.classList.add("hidden");
    });
  </script>

</body>
</html>
