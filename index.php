<!DOCTYPE html>
<html>
  <head>
  	<meta charset="utf-8">
    <title>WIZstudios</title>
    <meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 부트스트랩 -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <style>
	.syntaxhighlighter.bootstrap{
		padding: 9px 14px;
		margin-bottom: 14px;
		background: #f7f7f9;
		border: 1px solid #e1e1e8;
		border-radius: 4px;}
	h1,h2,h3,h4,h5,h6,p,a,div,pre{font-family:'나눔고딕',맑은 고딕, Apple SD 산돌고딕 Neo, 굴림;}
	.bs-example:after {
		content: "예제";}
		
		.WebWrapper {
    position: relative;
    padding-bottom: 56.25%; /* 16:9 */
    padding-top: 25px;
    height: 0;
}
.WebWrapper iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
    </style>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    function AlertOnly( $message, $charset = 'utf-8' )
 {
  $html = <<<HTML
<meta http-equiv="Content-Type" content="text/html; charset={$charset}"/>
<script type="text/javascript">
window.alert("본 사이트는 미리보기 사이트입니다. 그러나, 본 사이트 템플릿은 WIZstudios를 위하여 제작하였기에 메뉴 클릭시 본 사이트트로 이동됩니다.");
</script>
HTML;
  echo $html;
 }
  </head>
  <body>
  	
  <!-- 네비게이션 바 -->
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="/"><i class="icon icon-gears"></i> WIZstudios</a>
  </div>
 
  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="/">메인</a></li>
      <li><a href="/Design">디자인 템플릿</a></li>
      <li><a href="/Developers">개발자 소개</a></li>
    </ul>
    </div>
   </nav>
   <br /><br /><br />
   
   <!-- 컨텐츠 -->
   <div class="container">
   <h1><i class="icon icon-bullhorn"></i> 환영합니다.</h1>
   <h4>WIZstudios 부트스트랩 웹 디자인 템플릿 개발사이트에 오신것을 환영합니다.</h4>
   <h4>언제나 심플하고, 직관적인 디자인을 배포하도록 노력하겠습니다.</h4>
   <br />
   <h4>저희 모든 디자인은 무료입니다 !</h4>
   <br />
   <h4>상단 메뉴에서 저희 WIZstudios의 디자인을 사용해보세요 !</h4>
   </div>
   
   <!-- 푸터 -->
   <nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
   	<div class="container">
   		<p class="navbar-text">&copy; 2014 <strong>WIZstudios</strong></p>
   	</div>
   </nav>
   
    <!-- jQuery (부트스트랩의 자바스크립트 플러그인을 위해 필요한) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- 모든 합쳐진 플러그인을 포함하거나 (아래) 필요한 각각의 파일들을 포함하세요 -->
    <script src="js/bootstrap.min.js"></script>
 
    <!-- Respond.js 으로 IE8 에서 반응형 기능을 활성화하세요 (https://github.com/scottjehl/Respond) -->
    <script src="js/respond.js"></script>
  </body>
</html>