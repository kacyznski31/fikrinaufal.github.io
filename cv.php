<?php
session_start();

// Data Dinamis Resmi (Aman untuk Publik)
$nama_lengkap = "Fikri Azmi Naufal";
$peran        = "Senior OSS Data Engineer & Full-Stack Developer";
$deskripsi    = "Architecting robust data solutions, automated reporting, and enterprise data warehouses for major telecommunication networks. Expert in Full-Stack PHP, advanced SQL, and pioneering Autonomous AI Agents (CrewAI) to drive executive decision-making.";

$link_cv      = "assets/Fikri_Azmi_Naufal_CV_2026.docx"; 

// Integrasi WhatsApp
$nomor_wa     = "6285236943825"; 
$text_pembuka = urlencode("Halo Fikri, saya melihat portofolio Anda di GitHub dan tertarik untuk berdiskusi lebih lanjut mengenai project / job opportunity.");
$link_contact = "https://wa.me/{$nomor_wa}?text={$text_pembuka}";

// Menu Navigasi
$menus = [
    'Resume'    => 'resume.php',
    'Portfolio' => '#',
    'Contact'   => $link_contact,
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio <?php echo htmlspecialchars($nama_lengkap); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            background-color: #1a1a1a;
        }
    </style>
</head>
<body class="text-gray-300 min-h-screen flex flex-col justify-between selection:bg-blue-500 selection:text-white">

    <header class="w-full max-w-6xl mx-auto px-6 py-6 flex justify-between items-center">
        <div class="w-10 h-10 invisible"></div>

        <nav class="hidden md:flex items-center space-x-8 text-sm font-medium text-gray-400">
            <?php foreach ($menus as $menu_name => $link): ?>
                <a href="<?php echo $link; ?>" <?php echo ($menu_name == 'Contact') ? 'target="_blank"' : ''; ?> class="hover:text-white transition duration-200">
                    <?php echo $menu_name; ?>
                    <?php if (in_array($menu_name, ['About Me', 'Blog'])): ?>
                        <span class="text-xs text-gray-500">▼</span>
                    <?php endif; ?>
                </a>
            <?php endforeach; ?>
        </nav>

        <div class="hidden md:block">
            <a href="#" class="text-sm font-medium text-gray-400 hover:text-white transition duration-200">Get it Now</a>
        </div>
    </header>

    <main class="w-full max-w-5xl mx-auto px-6 py-12 md:py-24 flex flex-col md:flex-row items-center justify-center gap-12 md:gap-16 flex-grow">
        
        <div class="relative w-64 h-64 md:w-80 md:h-80 flex-shrink-0">
            <div class="absolute inset-0 rounded-full border-[12px] border-neutral-800 shadow-2xl"></div>
            <img 
                src="profile_fikri.png" 
                alt="<?php echo htmlspecialchars($nama_lengkap); ?>" 
                class="w-full h-full rounded-full object-cover"
            >
        </div>

        <div class="max-w-xl text-center md:text-left">
            <span class="text-gray-500 uppercase tracking-wider text-xs font-semibold block mb-2">
                <?php echo htmlspecialchars($peran); ?>
            </span>
            <h1 class="text-white text-4xl md:text-5xl font-bold mb-4 tracking-tight">
                <?php echo htmlspecialchars($nama_lengkap); ?>
            </h1>
            
            <p class="text-gray-400 leading-relaxed text-sm md:text-base font-light mb-8 text-justify">
                <?php echo htmlspecialchars($deskripsi); ?>
            </p>

            <div class="flex flex-wrap justify-center md:justify-start gap-4">
                <a href="<?php echo $link_cv; ?>" download class="px-6 py-3 border border-blue-600 bg-transparent text-white text-sm font-medium rounded-full hover:bg-blue-600 hover:shadow-[0_0_15px_rgba(37,99,235,0.5)] transition duration-300">
                    Download CV
                </a>
                <a href="<?php echo $link_contact; ?>" target="_blank" class="px-6 py-3 border border-neutral-600 bg-transparent text-white text-sm font-medium rounded-full hover:bg-neutral-800 hover:border-neutral-400 transition duration-300">
                    Contact Me
                </a>
            </div>
        </div>

    </main>

    <footer class="w-full text-center py-6 text-xs text-neutral-600">
        &copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($nama_lengkap); ?>. All rights reserved.
    </footer>

</body>
</html>