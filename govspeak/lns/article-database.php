<?php

class artikel {
    public string $name;
    public string $content;
    public int $id;


    public function __construct(string $names, string $content, int $id){
        $this->name = $names;
        $this->content = $content;
        $this->id = $id;
    }
}


$artikel = array();

$content1 = "
Stres di tempat kerja bisa menjadi hal yang menantang bagi banyak orang. Namun, dengan mengimplementasikan teknik penanganan yang efektif, Anda dapat mengurangi dampaknya dan meningkatkan kesejahteraan Anda secara keseluruhan. Salah satu cara untuk mengatasi stres adalah dengan menetapkan batas-batas yang sehat antara pekerjaan dan kehidupan pribadi. Dengan membuat jadwal yang teratur dan memprioritaskan waktu untuk istirahat dan rekreasi, Anda dapat mengurangi tingkat stres yang Anda alami.";


$content2 = "
Era digital membawa banyak manfaat, tetapi juga menimbulkan tantangan baru bagi kesehatan mental. Untuk menjaga keseimbangan yang sehat, penting untuk mengambil langkah-langkah konkret dalam mengelola penggunaan teknologi. Salah satu strategi praktis adalah mengatur waktu layar, di mana Anda menetapkan batas waktu untuk menggunakan perangkat digital setiap hari. Selain itu, mengidentifikasi tanda-tanda kelelahan digital dan mengambil waktu untuk istirahat dari teknologi juga dapat membantu menjaga kesehatan mental Anda tetap prima.";


$content3 = "
Meditasi adalah cara yang efektif untuk menenangkan pikiran dan mengurangi stres. Meskipun terkadang dianggap rumit, meditasi sebenarnya dapat dipraktikkan oleh siapa saja, termasuk pemula. Mulailah dengan duduk dalam posisi yang nyaman, tutup mata, dan fokuslah pada pernapasan Anda. Biarkan pikiran Anda mengalir tanpa menilai atau mereaksi terhadap apa pun yang muncul. Dengan konsistensi dan latihan, meditasi dapat menjadi alat yang kuat untuk meningkatkan kesejahteraan mental Anda.";


$content4 = "
Kecemasan adalah pengalaman umum yang bisa mengganggu kesejahteraan mental seseorang. Namun, dengan menggunakan strategi yang tepat, Anda dapat belajar untuk mengatasi rasa takut dan kekhawatiran yang mungkin Anda alami. Salah satu langkah penting adalah mengidentifikasi pemicu kecemasan Anda. Setelah Anda mengenali apa yang memicu kecemasan, Anda dapat mengembangkan strategi untuk mengatasinya, seperti teknik pernapasan dalam atau praktik pemusatan perhatian.";


$content5 = "
Kesejahteraan pribadi adalah fondasi bagi kesehatan mental yang baik. Dengan mengadopsi kebiasaan sehari-hari yang mendukung kesejahteraan Anda, Anda dapat meningkatkan kualitas hidup Anda secara keseluruhan. Salah satu kebiasaan yang penting adalah menjaga pola tidur yang teratur. Tidur yang cukup dan berkualitas memainkan peran penting dalam menjaga kesehatan mental dan emosional Anda. Selain itu, rajin berolahraga dan mengonsumsi makanan sehat juga dapat membantu meningkatkan kesejahteraan pribadi Anda secara keseluruhan.";


$content6 = "
Hubungan antara olahraga dan kesehatan mental telah terbukti secara ilmiah. Aktivitas fisik dapat merangsang pelepasan endorfin, zat kimia yang meningkatkan suasana hati dan mengurangi stres. Untuk mengoptimalkan manfaat kesehatan mental dari olahraga, pilihlah jenis olahraga yang Anda nikmati dan lakukan secara teratur. Baik itu berjalan santai, berlari, yoga, atau olahraga tim, yang terpenting adalah Anda menemukan kegiatan fisik yang membuat Anda bahagia dan terhubung dengan tubuh Anda.";


$artikel[] = new artikel("Mengatasi Stres di Tempat Kerja: Teknik Penanganan yang Efektif", $content1, 1);
$artikel[] = new artikel("Menjaga Kesehatan Mental di Era Digital: Tips dan Strategi Praktis", $content2, 2);
$artikel[] = new artikel("Meditasi untuk Menenangkan Pikiran dan Emosional", $content3, 3);
$artikel[] = new artikel("Langkah-langkah Konkret untuk Mengatasi Rasa Takut", $content4, 4);
$artikel[] = new artikel("Meningkatkan Sehari-hari untuk Kesehatan Mental yang Lebih Baik", $content5, 5);
$artikel[] = new artikel("Olahraga dan Kesehatan Mental: Cara Mengoptimalkannya", $content6, 6);