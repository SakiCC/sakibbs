<!DOCTYPE html><html><head>
<meta charset='UTF-8'>
<meta content='True' name='HandheldFriendly'>
<meta content='width=device-width, initial-scale=1.0' name='viewport'>
<title><?php echo $title;?>列表 - <?=$settings['site_name']?></title>
<?php $this->load->view('header-meta');?>
</head>
<body id="startbbs">
<?php $this->load->view('header');?>

<div id="wrap"><div class="container" id="page-main"><div class="row"><div class='col-xs-12 col-sm-6 col-md-8'>

<div class='box'>
<div class='inner'>
<div class='page'>
<article>
<h1 class='page-header' style="margin-top:20px;">
<?php echo $title;?>包含<span class="red"><?php echo $q;?></span>的话题列表
</h1>
<ul>
<!-- Put the following javascript before the closing </head> tag. --> 
<?php
$q = $_GET["q"];
$rSearch = mysql_query("select * from stb_forums where title like '%$q%'");
while ($row = mysql_fetch_array($rSearch)){
	echo "<li><a style='height:40px; line-height:40px;' target='_blank' href='site_url()/forum/view/{$row['fid']}'>".$row['title']."</a></li>";
}
?>
</ul>
<!-- Place this tag where you want the search results to render -->
<gcse:searchresults-only></gcse:searchresults-only>
</article>
</div>
</div>
</div>

</div>
<div class='col-xs-12 col-sm-6 col-md-4' id='Rightbar'>

<?php $this->load->view('block/right_login');?>

<?php $this->load->view('block/right_ad');?>

</div>
</div></div></div>

<?php $this->load->view('footer');?>