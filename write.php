<?php


// $time = date('Y-m-d H:i:s');
$projectId = $_POST['projectId'];
$projectName = $_POST['projectName'];
$ceoName = $_POST['ceoName'];

$projectReleaseDate = $_POST['projectReleaseDate'];
$questionUploadDate = $_POST['questionUploadDate'];
$fundingStartDate = $_POST['fundingStartDate'];
$fundingEndDate = $_POST['fundingEndDate'];

$projectReleaseTime = $_POST['projectReleaseTime'];
$projectReleaseTime = $_POST['projectReleaseTime'];

$fundingStartTime = $_POST['fundingStartTime'];
$fundingEndTime = $_POST['fundingEndTime'];

//------------------------------ 広告文言を生成 ------------------------------

//------- LINE事前告知 -------

$projectReleaseSubject = "【新着案件のお知らせ】『".$projectName."』";
$projectReleaseContent = "【新着案件のお知らせ】\n".$projectName."\nお申込みの受付開始は".$fundingStartDate."の".$fundingStartTime."です。\n👇下記より、詳細をご確認ください！";
// $projectReleaseURL = 'https://ecrowd.co.jp/projects/'.$projectId.'?utm_source=line&utm_medium=social&utm_campaign='.date(Ymd,strtotime($projectReleaseDate)).'&openExternalBrowser=1';
$projectReleaseURL = 'https://ecrowd.co.jp/projects/'.$projectId.'?utm_source=line&utm_medium=social&utm_campaign='.date('Ymd',strtotime($projectReleaseDate)).'&openExternalBrowser=1';



//------- LINE質疑応答掲載 -------

$questionClosingSubject = "【社長が投資家のご質問にお答え】.$projectName.";
$questionClosingContent = "【質疑応答を掲載しました】\n".$projectName."の".$ceoName."代表が、投資家のみなさまからいただいたご質問にお答えしました。ぜひご覧ください。";;
$questionClosingUrl = 'https://ecrowd.co.jp/projects/'.$projectId.'?utm_source=line&utm_medium=social&utm_campaign='.date('Ymd',strtotime($questionUploadDate)).'&openExternalBrowser=1';


//------- LINE募集開始 -------

$fundingStartSubject = "【開始速報】『".$projectName."』";
$fundingStartContent = "【開始速報】\nまもなく第".$projectId."号案件へのお申込みの受付を開始いたします！\n『".$projectName."』\n👇下記より、詳細をご確認ください！";
$fundingStartURL = 'https://ecrowd.co.jp/projects/'.$projectId.'?utm_source=line&utm_medium=social&utm_campaign='.date('Ymd',strtotime($projectReleaseDate)).'&openExternalBrowser=1';



//------- LINE募集終了前日 -------

$fundingEndSubject = "【まもなく募集終了】".$projectId."号案件『".$projectName."』";
$fundingEndContent = "【まもなく募集終了】\n".$projectId."号案件『".$projectName."』へのお申込み額がX,XXX万円を超え、目標募集額のXXX%に到達しております。\n募集終了は明日".$fundingEndDate."の".$fundingEndTime."です。\nまだご覧になっていない方は、ぜひご覧ください。";
$fundingEndURL = 'https://ecrowd.co.jp/projects/'.$projectId.'?utm_source=line&utm_medium=social&utm_campaign='.date('Ymd',strtotime('-1 day',$fundingEndTime)).'&openExternalBrowser=1';

// ------------------------------ ファイルに書き込み ------------------------------
$file = fopen('data/data.txt' , 'a');

fwrite($file, $projectId.'	'.$projectName
.'	'.$projectReleaseDate.'	'.$questionUploadDate.'	'.$projectReleaseSubject.'	'.$projectReleaseContent.'	'.$projectReleaseURL."\n");




fclose($file);


//文字作成


?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました</h1>
    <h2>./data/data.txt のテキストをコピーして、広告審査シートに貼り付ければ完成！</h2>

    <h2>生成した広告内容はこちら</h2>
    <div>
        <h3>◆LINE事前告知</h3>
        <ul>
            <li><?=$projectReleaseSubject?></li>
            <li><?=$projectReleaseContent?></li>
            <li><?=$projectReleaseURL?></li>
        </ul>
    </div>
    <div>
        <h3>◆LINE質疑応答掲載</h3>
        <ul>
            <li><?=$questionClosingSubject?></li>
            <li><?=$questionClosingContent?></li>
            <li><?=$questionClosingUrl?></li>
        </ul>
    </div>
    <div>
        <h3>◆LINE募集開始</h3>
        <ul>
            <li><?=$fundingStartSubject?></li>
            <li><?=$fundingStartContent?></li>
            <li><?=$fundingStartURL?></li>
        </ul>
    </div>
    <div>
        <h3>◆LINE募集期間中1</h3>
        <ul>
            <li><?=$fundingEndSubject?></li>
            <li><?=$fundingEndContent?></li>
            <li><?=$fundingEndURL?></li>
        </ul>
    </div>

</body>

</html>
