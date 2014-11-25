<html>
<head>
<title>通付宝--移动金融领航者（安全、便捷的便民金融服务平台）</title>
<meta name="keywords" content="通付宝">
<meta name="description" content="通付宝网络技术有限公司是国内领先的移动金融创新及第三方支付企业。2013年成立，注册资金一亿元人民币。通付宝以金融创新、便民服务、个人支付、手机移动POS机为主营业务。凭借前瞻的市场洞察、雄厚的资金实力、领先的网络技术、一流的精英团队、广阔的营销网络及强大的战略伙伴，公司成立几个月，便整合了来自中国银行、中国民生银行等9大大银行及数家金融机构、超过5亿元的巨额投资，迅猛发展，不断开创中国移动金融、移动支付领域的崭新格局。">
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<link href="css/index.css" rel="stylesheet" type="text/css"/>
<link href="css/boss.css" rel="stylesheet" type="text/css"/>
<link href="favicon.ico" type="image/x-icon" rel="icon">
<link href="favicon.ico" type="image/x-icon" rel="shortcut icon">
<style type="text/css">
.pagemiddleright .ul
{
	width: 600px;
}
.pagemiddleright .ul .ol
{
	width: 570px;
	height: 30px;
	line-height: 30px;
	padding-left: 30px;
	border-bottom: solid 1px #E5E6E6;
	background-image: url(image/newslist.png);
	background-repeat: no-repeat;
	background-position: 5px 7px;
}
.pagemiddleright .ul .ol .title
{
	float: left;
	height: 30px;
	line-height: 30px;
}
.pagemiddleright .ul .ol .date
{
	float: right;
	height: 30px;
	line-height: 30px;
	color: #797675;
}
</style>
<script type="text/javascript" src="js/index.js"></script>
</head>
<body>
	<div class="pagetop">
		<a href="index.html"><div class="logo"></div></a>
		<div class="index" onmouseout="NormalIcon(this);"  onmouseover="ActiveIcon(this);"><a href="index.html">首页</a></div>
		<div class="company current" onmouseout="NormalIcon(this);"  onmouseover="ActiveIcon(this);">关于公司
			<div class="ul">
				<div class="ol"><a href="boss.html">总裁寄语</a></div>
				<div class="ol"><a href="company.html">公司介绍</a></div>
				<div class="ol"><a href="culture.html">企业文化</a></div>
				<div class="ol"><a href="structure.html">组织架构</a></div>
				<div class="ol"><a href="salenet.html">营销网络</a></div>
				<div class="ol"><a href="security.html">安全资质</a></div>
				<div class="ol"><a href="partner.html">合作伙伴</a></div>
				<div class="ol"><a href="contact.html">联系我们</a></div>
				<div class="ol"><a href="newslist.php">新闻中心</a></div>
			</div>
		</div>
		<div class="product" onmouseout="NormalIcon(this);"  onmouseover="ActiveIcon(this);">产品介绍
			<div class="ul">
				<div class="ol"><a href="business.html">主营业务</a></div>
				<div class="ol"><a href="wallet.html">通付宝APP</a></div>
				<div class="ol"><a href="cardreader.html">手机刷卡器</a></div>
			</div>
		</div>
		<div class="download" onmouseout="NormalIcon(this);"  onmouseover="ActiveIcon(this);"><a href="download.html">应用下载</a></div>
		<div class="mall" onmouseout="NormalIcon(this);"  onmouseover="ActiveIcon(this);"><a href="mall.html">在线商城</a></div>
		<div class="agent" onmouseout="NormalIcon(this);"  onmouseover="ActiveIcon(this);"><a href="agent.html">加盟代理</a></div>
		<div class="user" onmouseout="NormalIcon(this);"  onmouseover="ActiveIcon(this);"><a href="user.html">用户中心</a></div>
		<div class="joinus" onmouseout="NormalIcon(this);"  onmouseover="ActiveIcon(this);"><a href="joinus.html">人才招聘</a></div>
		<div class="search"></div>
		<div class="clear"></div>
	</div>
	<div class="pagetopbottom"></div>
	<div class="pagemiddle">
		<div class="pagemiddletop"><h2>关于公司</h2></div>
		<div class="pagemiddleleft">
			<div class="ul">
				<div class="ol"><a href="boss.html">总裁寄语</a></div>
				<div class="ol" onmouseout="NormalIcon(this);"  onmouseover="ActiveIcon(this);"><a href="company.html">公司介绍</a></div>
				<div class="ol" onmouseout="NormalIcon(this);"  onmouseover="ActiveIcon(this);"><a href="culture.html">企业文化</a></div>
				<div class="ol" onmouseout="NormalIcon(this);"  onmouseover="ActiveIcon(this);"><a href="structure.html">组织架构</a></div>
				<div class="ol" onmouseout="NormalIcon(this);"  onmouseover="ActiveIcon(this);"><a href="salenet.html">营销网络</a></div>
				<div class="ol" onmouseout="NormalIcon(this);"  onmouseover="ActiveIcon(this);"><a href="security.html">安全资质</a></div>
				<div class="ol" onmouseout="NormalIcon(this);"  onmouseover="ActiveIcon(this);"><a href="partner.html">合作伙伴</a></div>
				<div class="ol" onmouseout="NormalIcon(this);"  onmouseover="ActiveIcon(this);"><a href="contact.html">联系我们</a></div>
				<div class="ol current" onmouseout="NormalIcon(this);"  onmouseover="ActiveIcon(this);"><a href="newslist.php">新闻中心</a></div>
			</div>
		</div>
		<div class="pagemiddleright">
			<img src="image/news.png" />
			<div class="ul">
				<?php
					$xml = simplexml_load_file(__DIR__ . "/news/list.xml");
					if(isset($xml))
					{
						foreach($xml->children() as $key => $news)
						{
							echo "<div class='ol'><div class='title'><a href='newsdetail.php?id=" . $news->id . "'>" . iconv("utf-8", "gbk", $news->title) . "</a></div><div class='date'>" . $news->date . "</div><div class='clear'></div></div>";
						}
					}
				?>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="pagebottom">
		全国客服热线：400-6868-956 / 腾讯公众微信：tfbpay
		<br>
		网站地图 | 帮助中心 | 联系我们
		<br>
		通付宝网络技术有限公司@2014版权所有 @粤ICP备13070643号-1
	</div>
</body>
</html>