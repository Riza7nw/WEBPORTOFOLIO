<?php
// Bisa menambahkan logika PHP di sini jika diperlukan
$education = [
    ['2013 - 2015', 'TK Diponegoro'],
    ['2015 - 2021', 'SD Negeri Purwosari'],
    ['2021 - 2024', 'SMP Telkom Purwokerto'],
    ['2024 - 2027', 'SMK Telkom Purwokerto']
];

$projects = [
    [
        'url' => 'https://id.pinterest.com/pin/1069745717754042158/',
        'img' => 'img/Screenshot 2025-01-28 223859.png',
        'desc' => 'Desain vector karakter Waguri'
    ],
    [
        'url' => 'https://id.pinterest.com/pin/1069745717755166836/',
        'img' => 'img/Screenshot 2025-02-17 213634.png',
        'desc' => 'Desain vector Mobil Lancer Evo IX'
    ],
    [
        'url' => 'https://riza7nw.github.io/TUJUENWENEW/',
        'img' => 'img/Screenshot 2025-02-27 103530.png',
        'desc' => 'JUAL BELI AKUN GAME (WEB INI SAYA BUAT MENGGUNKAN AI)'
    ]
];

$contacts = [
    ['📞', 'Telepon', '082220420602'],
    ['📧', 'Email', 'pengembara5413@email.com'],
    ['📍', 'Alamat', 'desa Purwosari, Kec.Baturraden, Kab. Banyumas, Jawa Tengah']
];

$social_links = [
    ['https://github.com/Riza7nw', 'img/th.jpg', 'GitHub'],
    ['https://www.linkedin.com/feed/', 'img/th (1).jpg', 'LinkedIn'],
    ['https://www.instagram.com/riza7nw', 'img/th (2).jpg', 'Instagram']
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Portfolio Aulia Riza"; ?></title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About me</a></li>
            <li><a href="#skills">Skills & Education</a></li>
            <li><a href="#project">Project</a></li>
            <li><a href="#contact">Contact me</a></li>
        </ul>
    </nav>

    <!-- Main Content Sections -->
    <div class="container" id="home">
        <div class="circle">
            <img src="img/WhatsApp Image 2025-02-12 at 19.52.01.jpeg" alt="Aulia Riza" class="profile">
            <h2><?php echo "Aulia Riza"; ?></h2>
            <h1><?php echo "DESAINER AI"; ?></h1>
        </div>
    </div>

    <div class="About" id="about">
        <div class="about-card">
            <h1>About me</h1>
            <h4>Saya Aulia Riza Syahputra, seorang pelajar di SMK Telkom Purwokerto dengan minat dalam INDUSTRI AI/Artificial 
                Intelegent dan Cryptography, AI akan menjadi masa depan dunia, dan mengubah tatanan dunia, seperti pekerjaan akan digantikan oleh AI membuat 
                orang mencari pekerjaan menjadi sulit, karena perusahaan membutuhkan AI karena AI efisien dan lebih menguntungkan.</h4>
        </div>
    </div>

    <div class="skills" id="skills">
        <h2>Skills & Education</h2>
        <div class="containerp">
            <div class="skills-card">
                <img src="img/Adobe_Illustrator_Logo.png" alt="Adobe Illustrator">
                <h1>Adobe Illustrator</h1>
            </div>
            <div class="skills-card">
                <img src="img/artificial-intelligence-ai-logo-human-technology-human-digital-robot-tech-icon-design-template-free-vector.jpg" alt="New Skill">
                <h1>AI/Artificial Intelegent</h1>
            </div>
        </div>
        <div class="skills-card">
            <h2>Education</h2>
            <div class="education-list">
                <?php
                foreach($education as $edu) {
                    echo "<div class='education-item'>";
                    echo "<h4>{$edu[1]} ({$edu[0]})</h4>";
                    echo "</div>";
                }
                ?>
            </div>
        </div>
    </div>

    <div class="projects" id="project">
        <h2>PROJECT</h2>
        <div class="containerp">
            <?php
            foreach($projects as $project) {
                echo "<div class='project-card'>";
                echo "<a href='{$project['url']}' target='_blank'>";
                echo "<img src='{$project['img']}' alt='Project'>";
                echo "</a>";
                echo "<p>{$project['desc']}</p>";
                echo "</div>";
            }
            ?>
        </div>
    </div>

    <div class="contact" id="contact">
        <h1>Contact me</h1>
        <section class="contact-section">
            <div class="contact-info-card">
                <h3>Informasi Kontak</h3>
                <?php
                foreach($contacts as $contact) {
                    echo "<div class='contact-info-item'>";
                    echo "<i>{$contact[0]}</i>";
                    echo "<div>";
                    echo "<h4>{$contact[1]}</h4>";
                    echo "<p>{$contact[2]}</p>";
                    echo "</div>";
                    echo "</div>";
                }
                ?>
            </div>
            <div class="contact-form">
                <h3>Kirim Pesan</h3>
                <form action="process_message.php" method="POST">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="name@example.com" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Pesan</label>
                        <textarea id="message" name="message" rows="5" placeholder="Tulis pesan Anda di sini..." required></textarea>
                    </div>
                    <button type="submit">Kirim Pesan</button>
                </form>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-social">
                <?php
                foreach($social_links as $link) {
                    echo "<a href='{$link[0]}' class='social-icon'>";
                    echo "<img src='{$link[1]}' alt='{$link[2]}'>";
                    echo "</a>";
                }
                ?>
            </div>
            <p class="footer-text">Aulia Riza S.</p>
        </div>
    </footer>
</body>
</html> 