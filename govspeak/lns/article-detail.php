<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Details</title>
    <link rel="stylesheet" href="article-detail.css">
</head>
<body>
    <div class="header">
    <?php 
        include 'article-database.php'; 
        $id;
        if (isset($_GET['id'])) {
            $id = $_GET['id'] - 1;
        }
    ?>
        <!-- navbar -->
        <div class="navbar">
            <div class="logo">
                <img src="images/logo.svg" alt="">
                <h3>Govspeak</h3>
            </div>
            <div class="menu">
                <a href="homepage.html">Homepage</a>
                <a href="tentang-kami.html">Articles</a>
                <a href="artikel.html">Video</a>
                <a href="tests.php">Forum</a>
                <a href="tim.html">Government Profile</a>
                <button><a>Sign Up</a></button>
            </div>
        </div>

        <div class="judul">
            <h1>Article Details</h1>
            <p>The article details page explains how the government is working to make education 
                better. It talks about the programs and policies they're using to improve schools 
                and help all students. It also mentions the problems they're trying to solve and what 
                they plan to do next. Overall, it gives a clear picture of the government's efforts to 
                make education fair and effective for everyone.
            <p>
        </div>
    </div>
    
    <!-- detail-artikel -->
    <div class="detail-artikel">
        <img src="images/detail-artikel2.svg" alt=""><br><br>
        <h1><?php echo $artikel[$id]->name ?></h1><br>
        <p><?php echo $artikel[$id]->content ?>
    </div>

    <!-- artikel -->
    <div class="artikel">
        <div class="text">
            <h1>Relevansi Artikel</h1>
        </div>
        <div class="container">
            <div class="box">
                <img src="images/dummy.svg" alt="">
                <h2>Mengatasi Stres di Tempat Kerja: Teknik Penanganan yang Efektif</h2>
                <p>Stres di tempat kerja bisa menjadi hal yang menantang bagi banyak orang..<span><a href="detail-artikel.php?id=1"> Read more</a></span></p>
            </div>
            <div class="box">
                <img src="images/dummy.svg" alt="">
                <h2>Menjaga Kesehatan Mental di Era Digital: Tips dan Strategi Praktis</h2>
                <p>Era digital membawa banyak manfaat, tetapi juga menimbulkan tantangan baru bagi kesehatan..<span><a href="detail-artikel.php?id=2"> Read more</a></span></p>
            </div>
            <div class="box">
                <img src="images/dummy.svg" alt="">
                <h2>Meditasi untuk Menenangkan Pikiran dan Emosional</h2>
                <p>Meditasi adalah cara yang efektif untuk menenangkan pikiran dan mengurangi stres..<span><a href="detail-artikel.php?id=3"> Read more</a></span></p>
            </div>
        </div>
    </div>
</body>
</html>