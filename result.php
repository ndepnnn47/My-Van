<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $day = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $zodiac = '';
        $description = '';
        $shio = '';
        $shioDescription = '';

        // Cek Zodiak Berdasarkan Tanggal dan Bulan
        if (($month == 1 && $day >= 1 && $day <= 20) || ($month == 12 && $day >= 22 && $day <= 31)) {
            $zodiac = 'Capricorn';
            $description = 'Capricorn memiliki ciri disiplin, ambisius, dan bertanggung jawab.';
        } elseif (($month == 1 && $day >= 21) || ($month == 2 && $day <= 18)) {
            $zodiac = 'Aquarius';
            $description = 'Aquarius adalah individu inovatif, mandiri, dan visioner.';
        } elseif (($month == 2 && $day >= 19) || ($month == 3 && $day <= 20)) {
            $zodiac = 'Pisces';
            $description = 'Pisces intuitif dan artistik, dengan empati yang tinggi.';
        } elseif (($month == 3 && $day >= 21) || ($month == 4 && $day <= 19)) {
            $zodiac = 'Aries';
            $description = 'Aries penuh semangat, berani, dan ambisius.';
        } elseif (($month == 4 && $day >= 20) || ($month == 5 && $day <= 20)) {
            $zodiac = 'Taurus';
            $description = 'Taurus stabil, tabah, dan sangat menghargai kenyamanan.';
        } elseif (($month == 5 && $day >= 21) || ($month == 6 && $day <= 20)) {
            $zodiac = 'Gemini';
            $description = 'Gemini cerdas dan komunikatif, dengan kemampuan beradaptasi.';
        } elseif (($month == 6 && $day >= 21) || ($month == 7 && $day <= 22)) {
            $zodiac = 'Cancer';
            $description = 'Cancer emosional, penuh kasih sayang, dan intuitif.';
        } elseif (($month == 7 && $day >= 23) || ($month == 8 && $day <= 22)) {
            $zodiac = 'Leo';
            $description = 'Leo percaya diri, karismatik, dan suka menjadi pusat perhatian.';
        } elseif (($month == 8 && $day >= 23) || ($month == 9 && $day <= 22)) {
            $zodiac = 'Virgo';
            $description = 'Virgo praktis, analitis, dan perfeksionis.';
        } elseif (($month == 9 && $day >= 23) || ($month == 10 && $day <= 22)) {
            $zodiac = 'Libra';
            $description = 'Libra adil, diplomatis, dan menyukai harmoni.';
        } elseif (($month == 10 && $day >= 23) || ($month == 11 && $day <= 21)) {
            $zodiac = 'Scorpio';
            $description = 'Scorpio misterius, penuh energi, dan bertekad kuat.';
        } elseif (($month == 11 && $day >= 22) || ($month == 12 && $day <= 21)) {
            $zodiac = 'Sagittarius';
            $description = 'Sagittarius optimis, petualang, dan sangat jujur.';
        } else {
            echo "<h2>Tanggal atau bulan tidak valid.</h2>";
            exit;
        }

        // Cek Shio Berdasarkan Tahun
        $shioArray = [
            'Tikus', 'Kerbau', 'Macan', 'Kelinci', 'Naga', 'Ular', 'Kuda', 'Kambing', 'Monyet', 'Ayam', 'Anjing', 'Babi'
        ];

        $shio = $shioArray[($year - 4) % 12];

        // Karakteristik Shio
        switch ($shio) {
            case 'Tikus':
                $shioDescription = 'Tikus cerdas, cepat, dan memiliki kemampuan untuk beradaptasi.';
                break;
            case 'Kerbau':
                $shioDescription = 'Kerbau pekerja keras, sabar, dan bisa diandalkan.';
                break;
            case 'Macan':
                $shioDescription = 'Macan penuh energi, berani, dan suka tantangan.';
                break;
            case 'Kelinci':
                $shioDescription = 'Kelinci lembut, penuh perhatian, dan sopan.';
                break;
            case 'Naga':
                $shioDescription = 'Naga kuat, ambisius, dan penuh keberanian.';
                break;
            case 'Ular':
                $shioDescription = 'Ular bijaksana, misterius, dan tenang.';
                break;
            case 'Kuda':
                $shioDescription = 'Kuda energetik, suka kebebasan, dan sangat pekerja keras.';
                break;
            case 'Kambing':
                $shioDescription = 'Kambing artistik, lembut, dan penuh kasih.';
                break;
            case 'Monyet':
                $shioDescription = 'Monyet cerdas, lucu, dan penuh ide.';
                break;
            case 'Ayam':
                $shioDescription = 'Ayam penuh percaya diri, pekerja keras, dan perfeksionis.';
                break;
            case 'Anjing':
                $shioDescription = 'Anjing setia, jujur, dan penuh tanggung jawab.';
                break;
            case 'Babi':
                $shioDescription = 'Babi baik hati, murah hati, dan berjiwa besar.';
                break;
        }

        // Output Zodiak dan Shio
        echo "<div style='text-align: center;'>";
        echo "<h2>Zodiak Anda adalah: " . $zodiac . "</h2>";
        echo "<p>Deskripsi Zodiak: " . $description . "</p>";
        echo "<h2>Shio Anda adalah: " . $shio . "</h2>";
        echo "<p>Deskripsi Shio: " . $shioDescription . "</p>";
        echo "</div>";
    }
?>