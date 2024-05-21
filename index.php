<?php
include 'db.php';

// Fetch images
$image_query = "SELECT * FROM images";
$image_result = $conn->query($image_query);
$images = $image_result->fetch_all(MYSQLI_ASSOC);

// Fetch blog posts
$blog_query = "SELECT * FROM blogs";
$blog_result = $conn->query($blog_query);
$blog_posts = $blog_result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .section { display: none; }
        .section.active { display: block; }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#" onclick="showSection('home')">Home</a></li>
                <li><a href="#" onclick="showSection('gallery')">Gallery</a></li>
                <li><a href="#" onclick="showSection('blog')">Blog</a></li>
                <li><a href="#" onclick="showSection('contact')">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="home" class="section active">
            <section class="hero">
                <h1>Website Tugas Program Web</h1>
                <p>Website ini merupakan Tugas yang berisi tentang konten-konten random. Anda bisa melihatnya pada laman gallery dan laman blog</p>
            </section>
            <section class="about">
                <h2>Tentang Tugas</h2>
                <p>Website ini hanya sebagai awal dari proyek tugas saya.</p>
            </section>
        </section>

        <section id="gallery" class="section">
            <section class="gallery">
                <h2>Galeri Foto yg Saya Gunakan</h2>
                <div class="foto-container">
                    <?php foreach ($images as $image): ?>
                        <img src="<?php echo htmlspecialchars($image['src']); ?>" alt="<?php echo htmlspecialchars($image['alt']); ?>" width="500px">
                    <?php endforeach; ?>
                </div>
            </section>
        </section>

        <section id="blog" class="section">
            <section class="blog">
                <h2>Blog</h2>
                <?php foreach ($blog_posts as $post): ?>
                    <article class="blog-post">
                        <h3><?php echo htmlspecialchars($post['title']); ?></h3>
                        <p><?php echo htmlspecialchars($post['content']); ?></p>
                        <a href="<?php echo htmlspecialchars($post['link']); ?>">Baca Selengkapnya</a>
                    </article>
                <?php endforeach; ?>
            </section>
        </section>

        <section id="contact" class="section">
            <section class="contact">
                <h2>Hubungi Saya</h2>
                <p>Silahkan hubungi Saya melalui formulir di bawah ini. Anda juga bisa menghubungi saya melalui Whatsapp dan instagram</p>
                <p>Whatsapp: <a href="https://wa.me/6289612283710" target="_blank">Tio Laya</a></p>
                <p>instagram: <a href="https://www.instagram.com/tiolaya_" target="_blank">Thio Laya</a> </p>
                <form action="process_message.php" method="post">
                    <label for="nama">Nama:</label>
                    <input type="text" id="nama" name="nama" required>
                    <br>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <br>
                    <label for="pesan">Pesan:</label>
                    <textarea id="pesan" name="pesan" rows="5" required></textarea>
                    <br>
                    <button type="submit">Kirim Pesan</button>
                </form>
            </section>
        </section>
    </main>

    <footer>
        <p>2024 Website random</p>
    </footer>

    <script>
        function showSection(sectionId) {
            document.querySelectorAll('.section').forEach(section => {
                section.classList.remove('active');
            });
            document.getElementById(sectionId).classList.add('active');
        }
    </script>
    <script src="js/index.js"></script>
    <script src="js/gallery.js"></script>
    <script src="js/blog.js"></script>
    <script src="js/contact.js"></script>
</body>
</html>
