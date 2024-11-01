<!-- Created By CodingNepal - www.codingnepalweb.com  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuis Bab 5</title>
    <link rel="stylesheet" href="style1.css">
    <!-- FontAweome CDN Link for Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
    <!-- start Quiz button -->
    <div class="start_btn"><button>Mulai Quiz</button></div>

        <!-- start Quiz button -->
        <a class="luar_btn" href="index2.php"><button>Keluar Quiz</button></a>

    <!-- Info Box -->
    <div class="info_box">
        <div class="info-title"><span>Beberapa peraturan dalam Quiz</span></div>
        <div class="info-list">
            <div class="info">1. Anda hanya akan memiliki <span>25 detik</span> per setiap pertanyaan.</div>
            <div class="info">2. Setelah anda memilih jawaban anda, itu tidak akan bisa diganti.</div>
            <div class="info">3. Anda tidak bisa memilih opsi apapun setelah waktu habis.</div>
            <div class="info">4. Anda tidak dapat keluar dari kuis saat sedang bermain.</div>
            <div class="info">5. Anda akan mendapatkan poin berdasarkan jawaban yang benar.</div>
        </div>
        <div class="buttons">
            <button class="quit">Keluar Quiz</button>
            <button class="restart">Lanjut</button>
        </div>
    </div>

    <!-- Quiz Box -->
    <div class="quiz_box">
        <header>
            <div class="title">JARINGAN KOMPUTER DAN INTERNET</div>
            <div class="timer">
                <div class="time_left_txt">Time Left</div>
                <div class="timer_sec">25</div>
            </div>
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_text">
                <!-- Here I've inserted question from JavaScript -->
            </div>
            <div class="option_list">
                <!-- Here I've inserted options from JavaScript -->
            </div>
        </section>

        <!-- footer of Quiz Box -->
        <footer>
            <div class="total_que">
                <!-- Here I've inserted Question Count Number from JavaScript -->
            </div>
            <button class="next_btn">Lanjut</button>
        </footer>
    </div>

    <!-- Result Box -->
    <div class="result_box">
        <div class="icon">
            <i class="fas fa-crown"></i>
        </div>
        <div class="complete_text">Kamu telah menyelesaikan Quiz!</div>
        <div class="score_text">
            <!-- Here I've inserted Score Result from JavaScript -->
        </div>
        <div class="buttons">
            <button class="restart">Ulang Quiz</button>
            <button class="quit">Keluar Quiz</button>
        </div>
    </div>

    <!-- Inside this JavaScript file I've inserted Questions and Options only -->
    <script src="js/pertanyaan5.js"></script>

    <!-- Inside this JavaScript file I've coded all Quiz Codes -->
    <script src="js/code.js"></script>

</body>
</html>