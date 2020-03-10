<!DOCTYPE html>
<html lang="ja">

<head>
	<title>べんきょうかい</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1">
	<meta name="format-detection" content="telephone=no">



    
</head>


<body>




<h1 class="suu">こんなかんじで出てくる</h1>
	
	
<p>▼画像もできます</p>
<div class="suu image">
	<img src="shibaface.png" alt="">
</div>



<div class="suu row">囲み方次第では</div>
<div class="suu row">2行とかでも出来る</div>


</body>

</html>

<style type="text/css">
.suu{
	position: relative;
	
	/* 	ココから下はどうでもいい */
	display: inline-block;
	color: #008475;
	font-size: 3.2rem;
	line-height: 1.9;
}

.suu:after{/* ココが動きの部分になるます */
	content: "";
   display: block;
   position: absolute;
   top: 0;
   right: 0;
   height: 100%;
   width: 100%;/* 必須！ */
   background: #008475;

	/* 	animationに関するプロパティ */
	animation-name: yoko_suu;
	animation-fill-mode: forwards; /* アニメーションの実行の前後のスタイルをどうするか forwardsは、終わったらおわりっぱなし */
	animation-duration: 0.6s; /* アニメーション一回分の時間の長さ */
	animation-timing-function: ease-in-out; /* アニメーションのタイミング・進行割合 */
	animation-delay: 1s;

}

@keyframes yoko_suu{
	0%{
		width: 100%;/* デモでは横幅をいじります、なのでwidthをいじる */
	}
	100%{
		width: 0%;
	}
}


/* ココから下はどうでもいいココから下はどうでもいいココから下はどうでもいいココから下はどうでもいい */
img{width: 100%;}

.image{
	width: 200px;
	height: 190px;
	
}

.suu:nth-child(3):after{animation-delay: 3s;}
.suu:nth-child(4):after{animation-delay: 5s;}
.suu:nth-child(5):after{animation-delay: 5.3s;}
.row{display: block;
	width: max-content;
}

body > div:nth-child(4){
	margin-top: 50px;
}
</style>
