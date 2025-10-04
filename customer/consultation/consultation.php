<?php
session_start();

// Cek apakah sudah login
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'Customer') {
    // Jika belum login atau bukan role Customer → tendang balik ke login
    header("Location: ../login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Consultation - Three Brother Law</title>
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
          <a href="../customer-dashboard.php" class="flex items-center space-x-3 px-4 py-2 rounded-lg hover:bg-gray-100">
            <i class="fa-solid fa-house"></i>
            <span>Dashboard</span>
          </a>
          <a href="./consultation.php" class="flex items-center space-x-3 px-4 py-2 rounded-lg bg-gray-100 text-red-600 font-semibold">
            <i class="fa-regular fa-clipboard"></i>
            <span>Consultation</span>
          </a>
          <a href="../consultation-status/consultation-status.php" class="flex items-center space-x-3 px-4 py-2 rounded-lg hover:bg-gray-100">
            <i class="fa-regular fa-inbox"></i>
            <span>Consultation Status</span>
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
      <h1 class="text-3xl font-bold mb-8">Add Consultation</h1>

      <!-- Card Box -->
      <div class="bg-white shadow-lg rounded-lg p-8">
        <form class="space-y-6">
          <div class="flex flex-wrap gap-4">
            <!-- Lawyer -->
            <div class="relative inline-block w-40">
            <!-- Tombol utama -->
                <button 
                    type="button"
                    onclick="toggleDropdown('lawyerDropdown')" 
                    id="lawyerBtn"
                    class="w-full flex justify-between items-center px-4 py-2 bg-gray-300 rounded-lg shadow hover:bg-gray-400">
                    Lawyer
                    <i class="fa-solid fa-chevron-down ml-2"></i>
                </button>

                <!-- Isi Dropdown -->
                <div id="lawyerDropdown" class="absolute hidden w-full mt-2 bg-gray-200 rounded-lg shadow-lg z-10">
                    <button type="button" onclick="selectOption('lawyerBtn','Tonno','lawyerDropdown')" class="w-full px-4 py-2 text-left hover:bg-gray-300">Tonno</button>
                    <button type="button" onclick="selectOption('lawyerBtn','Suparto','lawyerDropdown')" class="w-full px-4 py-2 text-left hover:bg-gray-300">Suparto</button>
                    <button type="button" onclick="selectOption('lawyerBtn','Lailul','lawyerDropdown')" class="w-full px-4 py-2 text-left hover:bg-gray-300">Lailul</button>
                    <button type="button" onclick="selectOption('lawyerBtn','Michael','lawyerDropdown')" class="w-full px-4 py-2 text-left hover:bg-gray-300">Michael</button>
                </div>
            </div>

            <!-- Lawyer -->
            <div class="relative inline-block w-40">
            <!-- Tombol utama -->
                <button 
                    type="button"
                    onclick="toggleDropdown('profesiDropdown')" 
                    id="profesiBtn"
                    class="w-full flex justify-between items-center px-4 py-2 bg-gray-300 rounded-lg shadow hover:bg-gray-400">
                    Profession
                    <i class="fa-solid fa-chevron-down ml-2"></i>
                </button>

                <!-- Isi Dropdown -->
                <div id="profesiDropdown" class="absolute hidden w-full mt-2 bg-gray-200 rounded-lg shadow-lg z-10">
                    <button type="button" onclick="selectOption('profesiBtn','Advokat','profesiDropdown')" class="w-full px-4 py-2 text-left hover:bg-gray-300">Advokat</button>
                    <button type="button" onclick="selectOption('profesiBtn','Pidana','profesiDropdown')" class="w-full px-4 py-2 text-left hover:bg-gray-300">Pidana</button>
                    <button type="button" onclick="selectOption('profesiBtn','Koorporasi','profesiDropdown')" class="w-full px-4 py-2 text-left hover:bg-gray-300">Koorporasi</button>
                    <button type="button" onclick="selectOption('profesiBtn','Sengketa','profesiDropdown')" class="w-full px-4 py-2 text-left hover:bg-gray-300">Sengketa</button>
                </div>
            </div>

            <!-- Lawyer -->
            <div class="relative inline-block w-40">
            <!-- Tombol utama -->
                <button 
                    type="button"
                    onclick="toggleDropdown('dayDropdown')" 
                    id="dayBtn"
                    class="w-full flex justify-between items-center px-4 py-2 bg-gray-300 rounded-lg shadow hover:bg-gray-400">
                    Day
                    <i class="fa-solid fa-chevron-down ml-2"></i>
                </button>

                <!-- Isi Dropdown -->
                <div id="dayDropdown" class="absolute hidden w-full mt-2 bg-gray-200 rounded-lg shadow-lg z-10">
                    <button type="button" onclick="selectOption('dayBtn','Monday','dayDropdown')" class="w-full px-4 py-2 text-left hover:bg-gray-300">Monday</button>
                    <button type="button" onclick="selectOption('dayBtn','Tuesday','dayDropdown')" class="w-full px-4 py-2 text-left hover:bg-gray-300">Tuesday</button>
                    <button type="button" onclick="selectOption('dayBtn','Wednesday','dayDropdown')" class="w-full px-4 py-2 text-left hover:bg-gray-300">Wednesday</button>
                    <button type="button" onclick="selectOption('dayBtn','Thrusday','dayDropdown')" class="w-full px-4 py-2 text-left hover:bg-gray-300">Thrusday</button>
                    <button type="button" onclick="selectOption('dayBtn','Friday','dayDropdown')" class="w-full px-4 py-2 text-left hover:bg-gray-300">Friday</button>
                </div>
            </div>


            <!-- Lawyer -->
            <div class="relative inline-block w-40">
            <!-- Tombol utama -->
                <button 
                    type="button"
                    onclick="toggleDropdown('timeDropdown')" 
                    id="timeBtn"
                    class="w-full flex justify-between items-center px-4 py-2 bg-gray-300 rounded-lg shadow hover:bg-gray-400">
                    Time
                    <i class="fa-solid fa-chevron-down ml-2"></i>
                </button>

                <!-- Isi Dropdown -->
                <div id="timeDropdown" class="absolute hidden w-full mt-2 bg-gray-200 rounded-lg shadow-lg z-10">
                    <button type="button" onclick="selectOption('timeBtn','08:00','timeDropdown')" class="w-full px-4 py-2 text-left hover:bg-gray-300">08:00</button>
                    <button type="button" onclick="selectOption('timeBtn','10:00','timeDropdown')" class="w-full px-4 py-2 text-left hover:bg-gray-300">10:00</button>
                    <button type="button" onclick="selectOption('timeBtn','13:00','timeDropdown')" class="w-full px-4 py-2 text-left hover:bg-gray-300">13:00</button>
                    <button type="button" onclick="selectOption('timeBtn','15:00','timeDropdown')" class="w-full px-4 py-2 text-left hover:bg-gray-300">15:00</button>
                </div>
            </div>
          </div>

          <!-- Submit Button -->
          <div class="flex justify-end">
            <button type="submit" class="px-6 py-2 bg-gradient-to-r from-gray-400 to-gray-600 text-white font-semibold rounded shadow hover:opacity-90">
              Submit
            </button>
          </div>
        </form>
      </div>
    </main>
  </div>
    <script>
    // buka/tutup dropdown
    function toggleDropdown(id) {
        document.getElementById(id).classList.toggle("hidden");
    }

    // pilih opsi → update text + tutup dropdown
    function selectOption(buttonId, value, dropdownId) {
        document.getElementById(buttonId).childNodes[0].nodeValue = value + " "; 
        document.getElementById(dropdownId).classList.add("hidden");
    }
    </script>

</body>
</html>
