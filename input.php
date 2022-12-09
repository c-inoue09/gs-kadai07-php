<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="viewport" content="width=device-width">
    <script src="js/jquery-2.1.3.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/favicon.png" />
    <title>イークラウド広告メーカー</title>
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://c-inoue09.github.io/gs-kadai03-janken-app-rich/">
    <meta property="og:image" content="https://c-inoue09.github.io/gs-kadai03-janken-app-rich/img/ogp.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:type" content="website">
    <meta property="og:title" content="イークラウド広告メーカー" />
    <meta property="og:description" content="クラウドファンディングの広告を自動で作れます。井上しか得しないフォームです" />
    <meta property="og:site_name" content="イークラウド広告メーカー | by イノウエ" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
    </header>
    <main>
        <div class="wrapper">
            <div class = "title">
                <img src="img/title.png" alt="">
            </div>
            <p></p>
            <div class="inoue">
                
                <div class="inoue-icon">
                    <img src="img/inoue-icon.png" alt="">
                </div>
                <div class="sample-balloon">
                    <p>井上は<a href = "https://ecrowd.co.jp/" target = "blank">クラウドファンディングの会社</a>で働いています。</p>
                    <p>しかし、広告文作成で毎回のようにミスって怒られています。</p>
                    <p>そこで、定型の広告文の生成を自動化してみました</p>
                </div>
            </div>


            <p style = "text-align: center;">▼案件データを入力します▼</p>

            <div class="form-wrapper">
                <form action="write.php" method="post">
                <dl class="form-inner">

                <dt class="form-title">案件No. </dt>
                        <dd class = "form-item"><input type="number" name="projectId" class="form-parts"></dd>
                        <dt class="form-title">案件名 </dt> 
                        <dd class = "form-item"><input type="text" name="projectName" size = "60" class="form-parts" placeholder="蚊の針に着想を得た次世代型ワクチン投与デバイスで世界の医療課題に挑戦する「ライトニックス」"></dd>
                        <dt class="form-title">代表者の名字 </dt> 
                        <dd class = "form-item"><input type="text" name="ceoName" class="form-parts" placeholder="イクラ谷" size = "30"></dd>

                    <dt class="form-title">事前開示日時 </dt> 
                    <dd class = "form-item"><input type="date" name="projectReleaseDate" class="form-parts"></dd> 
                    <dt class="form-title">事前開示時刻 </dt> 
                    <dd class = "form-item"><input type="time" name="projectReleaseTime" class="form-parts"></dd>


                    <dt class="form-title">投資家からの質問回答日 </dt> 
                    <dd class = "form-item"><input type="date" name="questionUploadDate" class="form-parts"></dd>


                    <dt class="form-title">募集開始日時 </dt> 
                    <dd class = "form-item"><input type="date" name="fundingStartDate" class="form-parts"></dd> 
                    <dt class="form-title">募集開始時刻 </dt> 
                    <dd class = "form-item"><input type="time" name="fundingStartTime" class="form-parts"></dd>


                    <br>
                    <dt class="form-title">募集終了日時 </dt> 
                    <dd class = "form-item"><input type="date" name="fundingEndDate" class="form-parts"></dd> 
                    <dt class="form-title">募集終了時刻 </dt> 
                    <dd class = "form-item"><input type="time" name="fundingEndTime" class="form-parts"></dd>
                </dl>

                    <input type="submit" value="広告生成" class="btn-submit">

                </form>
            </div>

    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="js/main.js"></script>

    </script>

</body>
</html>