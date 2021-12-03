<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yang & Parks Worker</title>
  <link href="/components/join.css" rel="stylesheet">
  <link href="/components/header.css" rel="stylesheet">
  <link href="/components/basic.css" rel="stylesheet">
  <link href="/components/adminWorker.css" rel="stylesheet">
</head>

<body>
  <header class="header">

    <a href="#" class="logo">
      <span id="logo-font">Yang & Parks</span>
    </a>

    <div class="action">
      <a href="/admin.php" alt="#">메인페이지로 돌아가기</a>
    </div>
  </header>

  <section id="join">

    <div class="jointitle">
      <span>직원정보 기입</span>
    </div>

    <form action="/admin/adminWorkerCom.php" method="post">
      <div class="container">
        <div class="join_box">
          <input type="text" name="worker-name" id="worker-name" placeholder="worker-name">
          <div class="war_be">
            <span> 2~5자리 사이로 이름을 기입하십시오 </span>
          </div>
        </div>

        <div class="join_box">
          <input type="text" name="worker-adafter" id="worker-adafter" placeholder="주민번호 앞자리">
          <input type="text" name="worker-adbefo" id="worker-adbefo" placeholder="주민번호 뒷자리">
          <div class="war_be">
            <span> 정확히 기입하시오 </span>
          </div>
        </div>

        <div class="join_box">
          <input type="text" name="worker-phone" id="worker-phone" placeholder="전화번호를 입력하세요">
          <div class="war_be">
            <span> -를 제외한 숫자만 기입하십시오 </span>
          </div>
        </div>

      </div>
      <button class="join_btn" type="submit">저장</button>
    </form>

  </section>
  <script src="/admin/adminWorker.js"></script>
</body>

</html>