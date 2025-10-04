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
          <a href="../my-schadule/my-schedule.php" class="flex items-center space-x-3 px-4 py-2 rounded-lg hover:bg-gray-100">
            <i class="fa-solid fa-server"></i>
            <span>My Schedule</span>
          </a>
          <a href="../my-profile/my-profile.php" class="flex items-center space-x-3 px-4 py-2 rounded-lg bg-gray-100 text-red-600 font-semibold">
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
    <!-- My Profile Section -->
    <div class="bg-white shadow-lg rounded-2xl p-8 mt-6">
    <h1 class="text-3xl font-bold mb-8">My Profile</h1>

    <div class="grid grid-cols-3 gap-8">
        <!-- Left: Profile Form -->
        <div class="col-span-2 space-y-6">
        <!-- Name -->
        <div>
            <label for="name" class="block text-sm font-semibold mb-2">Name</label>
            <input type="text" id="name" value="Michael Hutabarat" 
                class="w-full px-4 py-2 border rounded-lg bg-gray-100">
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-semibold mb-2">Email Address</label>
            <input type="email" id="email" value="michael.hutabrt@gmail.com" 
                class="w-full px-4 py-2 border rounded-lg bg-gray-100">
        </div>

        <!-- Address -->
        <div>
            <label for="address" class="block text-sm font-semibold mb-2">Address</label>
            <input type="text" id="address" value="Old Trafford, Stretford, Manchester M16 0RA, UK" 
                class="w-full px-4 py-2 border rounded-lg bg-gray-100">
        </div>

        <!-- Place of Birth -->
        <div>
            <label for="pob" class="block text-sm font-semibold mb-2">Place of Birth</label>
            <input type="text" id="pob" value="London" 
                class="w-full px-4 py-2 border rounded-lg bg-gray-100">
        </div>

        <!-- Date of Birth -->
        <div>
            <label for="dob" class="block text-sm font-semibold mb-2">Date of Birth</label>
            <input type="text" id="dob" value="19 January 1998" 
                class="w-full px-4 py-2 border rounded-lg bg-gray-100">
        </div>

        <!-- Phone -->
        <div>
            <label for="phone" class="block text-sm font-semibold mb-2">Phone Number</label>
            <input type="text" id="phone" value="+6294810581059" 
                class="w-full px-4 py-2 border rounded-lg bg-gray-100">
        </div>

        <!-- Password -->
        <!-- Password -->
        <div>
        <label for="password" class="block text-sm font-semibold mb-2">Password</label>
        <div class="relative">
            <input type="password" id="password" value="umam"
                class="w-full px-4 py-2 border rounded-lg bg-gray-100 pr-10"
                aria-describedby="togglePassword" />
            <!-- tombol untuk toggle -->
            <button type="button"
                    class="absolute right-2 top-2.5 text-gray-500 focus:outline-none"
                    data-target="password"
                    aria-label="Show password"
                    title="Show password">
            <i class="fa-regular fa-eye"></i>
            </button>
        </div>
        </div>

        <!-- Confirm Password -->
        <div>
        <label for="confirm-password" class="block text-sm font-semibold mb-2">Confirm Password</label>
        <div class="relative">
            <input type="password" id="confirm-password" value="umam"
                class="w-full px-4 py-2 border rounded-lg bg-gray-100 pr-10"
                aria-describedby="toggleConfirmPassword" />
            <button type="button"
                    class="absolute right-2 top-2.5 text-gray-500 focus:outline-none"
                    data-target="confirm-password"
                    aria-label="Show confirm password"
                    title="Show confirm password">
            <i class="fa-regular fa-eye"></i>
            </button>
        </div>
        </div>
        </div>

        <!-- Right: Profile Photo -->
        <!-- Right: Profile Photo -->
        <div class="text-center">
        <h2 class="text-xl font-bold mb-4">Profile Photo</h2>
        <img src="../../assets/img/profiletbl.png" 
            alt="Profile" class="w-40 mx-auto rounded-md mb-4">

        <p class="bg-gray-200 px-4 py-2 rounded-lg mb-3">Michael Hutabarat S.H</p>
        <div class="flex justify-center space-x-2 mb-4">
            <span class="px-4 py-2 bg-gray-200 rounded-lg">Coorporate</span>
            <span class="px-4 py-2 bg-gray-800 text-white rounded-lg">Active</span>
        </div>

        <!-- Hapus tombol Upload Photo -->
        <button class="w-full py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
            Change Password
        </button>
        </div>

    </div>
    </div>

    <!-- Modal Change Password -->
    <div id="changePasswordModal" 
        class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-xl shadow-lg w-96 p-6 relative">
        <h2 class="text-xl font-bold mb-2">Change Password</h2>
        <p class="text-sm text-gray-500 mb-6">New password can’t be same as the old password</p>

        <!-- Old Password -->
        <div class="mb-4">
        <label for="oldPassword" class="block text-sm font-semibold mb-2">Old Password</label>
        <div class="relative">
            <input type="password" id="oldPassword" 
                class="w-full px-4 py-2 border rounded-lg pr-10" />
            <button type="button" data-target="oldPassword"
                    class="absolute right-2 top-2.5 text-gray-500">
            <i class="fa-regular fa-eye"></i>
            </button>
        </div>
        </div>

        <!-- New Password -->
        <div class="mb-4">
        <label for="newPassword" class="block text-sm font-semibold mb-2">New Password</label>
        <div class="relative">
            <input type="password" id="newPassword" 
                class="w-full px-4 py-2 border rounded-lg pr-10" />
            <button type="button" data-target="newPassword"
                    class="absolute right-2 top-2.5 text-gray-500">
            <i class="fa-regular fa-eye"></i>
            </button>
        </div>
        </div>

        <div class="mb-4">
        <label for="confrimPassword" class="block text-sm font-semibold mb-2">Confrim Password</label>
        <div class="relative">
            <input type="password" id="confrimPassword" 
                class="w-full px-4 py-2 border rounded-lg pr-10" />
            <button type="button" data-target="confrimPassword"
                    class="absolute right-2 top-2.5 text-gray-500">
            <i class="fa-regular fa-eye"></i>
            </button>
        </div>
        </div>

        <!-- Checkbox -->
        <div class="flex items-center mb-4">
        <input type="checkbox" id="acceptTerms" class="mr-2">
        <label for="acceptTerms" class="text-sm">I accept the terms 
            <a href="#" class="text-blue-500 underline">Read our T&Cs</a>
        </label>
        </div>

        <!-- Action Buttons -->
        <button id="submitChangePassword" 
                class="w-full py-2 bg-gray-800 text-white rounded-lg hover:bg-gray-900">
        Change Password
        </button>

        <!-- Close Button -->
        <button onclick="closeModal()" 
                class="absolute top-3 right-3 text-gray-500 hover:text-gray-700">
        <i class="fa-solid fa-xmark"></i>
        </button>
    </div>
    </div>


    <!-- Success Notification Modal -->
    <div id="successModal"
        class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-xl shadow-lg w-[440px] p-6 relative">
        
        <!-- Header dengan ikon + judul -->
        <div class="flex items-start space-x-3 mb-3">
        <i class="fa-solid fa-circle-info text-2xl"></i>
        <h2 class="text-lg font-semibold">Password Change Succesfull</h2>
        </div>

        <!-- Deskripsi -->
        <p class="text-sm text-gray-600 mb-6">
        Password can’t be changed for another 2 weeks, if you like to change password
        again, please kindly wait for 2 weeks.
        </p>

        <!-- Tombol Close -->
        <div class="flex justify-end">
        <button onclick="closeSuccessModal()"
                class="px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300">
            Close
        </button>
        </div>
    </div>
    </div>




    </main>
  </div>

  <!-- Script preview -->
    <script>
    // pilih semua tombol toggle
    document.querySelectorAll('button[data-target]').forEach(btn => {
        btn.style.cursor = 'pointer';

        btn.addEventListener('click', () => {
        const targetId = btn.getAttribute('data-target');
        const input = document.getElementById(targetId);
        if (!input) return;

        // toggle type
        const isPassword = input.type === 'password';
        input.type = isPassword ? 'text' : 'password';

        // ganti ikon (font-awesome)
        const icon = btn.querySelector('i');
        if (icon) {
            icon.classList.remove(isPassword ? 'fa-eye' : 'fa-eye-slash');
            icon.classList.add(isPassword ? 'fa-eye-slash' : 'fa-eye');
        }

        // update aria-label & title
        const showLabel = isPassword ? 'Hide password' : 'Show password';
        btn.setAttribute('aria-label', showLabel);
        btn.setAttribute('title', showLabel);
        });
    });
    </script>

    <script>
    // buka modal
    document.querySelector("button.bg-red-600").addEventListener("click", () => {
        document.getElementById("changePasswordModal").classList.remove("hidden");
        document.getElementById("changePasswordModal").classList.add("flex");
    });

    // fungsi close modal
    function closeModal() {
        document.getElementById("changePasswordModal").classList.add("hidden");
        document.getElementById("changePasswordModal").classList.remove("flex");
    }

    // toggle show/hide password di modal
    document.querySelectorAll('#changePasswordModal button[data-target]').forEach(btn => {
        btn.style.cursor = 'pointer';

        btn.addEventListener('click', () => {
        const targetId = btn.getAttribute('data-target');
        const input = document.getElementById(targetId);
        if (!input) return;

        const isPassword = input.type === 'password';
        input.type = isPassword ? 'text' : 'password';

        const icon = btn.querySelector('i');
        if (icon) {
            icon.classList.remove(isPassword ? 'fa-eye' : 'fa-eye-slash');
            icon.classList.add(isPassword ? 'fa-eye-slash' : 'fa-eye');
        }
        });
    });
    </>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
    // --- buka modal (tangkap tombol Change Password di sidebar kanan) ---
    const openBtn = document.querySelector('button.bg-red-600') || document.getElementById('openChangePassword');
    const modal = document.getElementById('changePasswordModal');

    if (openBtn && modal) {
        openBtn.addEventListener('click', () => {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        // fokus ke field lama supaya pengalaman bagus
        const firstPwd = modal.querySelector('input[type="password"]');
        if (firstPwd) firstPwd.focus();
        });
    }

    // tutup modal: tombol X atau klik overlay (di luar dialog)
    window.closeModal = function() {
        if (!modal) return;
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    };
    if (modal) {
        modal.addEventListener('click', (e) => {
        if (e.target === modal) closeModal(); // klik area gelap menutup
        });
    }

    // --- event delegation untuk semua tombol show/hide password ---
    document.body.addEventListener('click', (e) => {
        const btn = e.target.closest('button[data-target]');
        if (!btn) return; // bukan tombol toggle
        // pastikan tombol benar-benar button (bukan submit)
        if (btn.type === 'submit') btn.type = 'button';

        const targetId = btn.getAttribute('data-target');
        const input = document.getElementById(targetId);
        if (!input) return;

        // toggle tipe input
        const isPassword = input.type === 'password';
        input.type = isPassword ? 'text' : 'password';

        // ganti ikon (font-awesome) secara safe
        const icon = btn.querySelector('i');
        if (icon) {
        icon.classList.remove(isPassword ? 'fa-eye' : 'fa-eye-slash');
        icon.classList.add(isPassword ? 'fa-eye-slash' : 'fa-eye');
        }

        // update aksesibilitas
        btn.setAttribute('aria-label', isPassword ? 'Hide password' : 'Show password');
        btn.setAttribute('title', isPassword ? 'Hide password' : 'Show password');
    });
    });
    </script>

    <script>
    // tombol submit di modal ganti password
    const submitBtn = document.getElementById('submitChangePassword');
    if (submitBtn) {
        submitBtn.addEventListener('click', (e) => {
        e.preventDefault();
        // tutup modal ganti password
        closeModal();
        // buka modal sukses
        const successModal = document.getElementById('successModal');
        successModal.classList.remove('hidden');
        successModal.classList.add('flex');
        });
    }

    // fungsi close success modal
    function closeSuccessModal() {
        const successModal = document.getElementById('successModal');
        successModal.classList.add('hidden');
        successModal.classList.remove('flex');
    }
    </script>




</body>
</html>
