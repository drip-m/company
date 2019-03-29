<div class="top_box">
 <div class="top_box_inner">
   
   <div class="logo"><a href=""><img src="images/s1/logo2.png" border="0"></a></div>
   <div class="topcontent"><div style="clear:both;overflow:hidden;">
	<div style="float:left;">
		<ul>
			<li class="top_1">
				SERVICE HOTLINE
			</li>
			<li class="top_2">
				TEL:0531-87039611
			</li>
		</ul>
	</div>
	<div style="float:left;">
<script type="text/javascript">
function  c_keyword()
 {
  if($("title").value=="")
  {
    alert("请输入关键词！");
    $("title").focus();
    return false;
  }
 }
</script>
		<form action="search/" target="zdy_search" method="get" name="S_article">
			<input size="25/" maxlength="50" id="title" name="title" value="请输入查找产品的名称" onfocus="javascript:if(this.value=='请输入查找产品的名称')this.value='';" style="height:36px;width:150px;float:left;border:2px solid #074177;line-height:40px;border-radius:5px 0 0 5px;margin-left:20px;" type="text" /><input value="125" name="modelid" type="hidden" /><input style="height:40px;border:0px;width:40px;float:left;" class="botton" onclick="return c_keyword()" src="css/images/ss.jpg" type="image" /> <input name="siteid" value="1" type="hidden" /> 
		</form>
	</div>
</div></div><div class="clear"></div>
   <div class="menu_box" id="Menu"><ul>
<li class="menu_style_homepage {{ nav_active('home') }}" id="MenuItem61" name="MenuItem"><a href="{{ route('home') }}" class="menu">首页</a></li>

<li class="menu_style {{ nav_active('about') }}" id="MenuItem62" name="MenuItem"><a href="{{ route('about') }}" class="menu">公司简介</a></li>
<!-- <li class="menu_style" id="MenuItem63" name="MenuItem"><a href="/index/news/" class="menu">新闻动态</a></li> -->
<li class="menu_style {{ nav_active('product') }}" id="MenuItem67" name="MenuItem"><a href="{{ route('product') }}" class="menu">产品中心</a></li>
<li class="menu_style {{ nav_active('solution') }}" id="MenuItem68" name="MenuItem"><a href="{{ route('solution') }}" class="menu">解决方案</a></li>
<li class="menu_style {{ nav_active('engineering') }}" id="MenuItem68" name="MenuItem"><a href="{{ route('engineering') }}" class="menu">工程案例</a></li>
<li class="menu_style {{ nav_active('download') }}" id="MenuItem64" name="MenuItem"><a href="{{ route('download') }}" class="menu">下载中心</a></li>
<li class="menu_style {{ nav_active('contact') }}" id="MenuItem65" name="MenuItem"><a href="{{ route('contact') }}" class="menu">联系我们</a></li>
</ul></div>
 </div>
</div>

<script type="text/javascript">var IsPageHome="1";var Lanmu_Id="61";var Sublanmu_Id="0";ShowSubMenu(Lanmu_Id);</script>
<div class="banner"><script  type="text/javascript">

var Show_Style=3;
var Image_12=new Array();
var Pics="images/banner/1.jpg|images/banner/2.jpg|images/banner/3.jpg";
var Links="";
var Titles="";
var Alts="";
var Apic12=Pics.split('|');
var ALink12=Links.split('|');
var ATitle12=Titles.split('|');
var AAlts12=Alts.split('|');
var Show_Text=0;
for(i=0;i<Apic12.length;i++)
  {
   Image_12.src = Apic12[i]; 
  }



  var FHTML='<div id="js_slide_focus_12" class="slide_focus focus_style3" style="height:400px">';
  FHTML+='<ul class="inner">';
  for(var i=0;i<Apic12.length;i++)
   {
     if(ALink12.length<(i+1) || ALink12[i]=="")
      {
       ALink12[i]="javascript:void(0)";
      }
     if(AAlts12.length<(i+1))
      {
       AAlts12[i]="";
      }
     if(ATitle12.length<(i+1))
      {
       ATitle12[i]="";
      }
    FHTML+='<li><a href="'+ALink12[i]+'" target="_self" title="'+AAlts12[i]+'"><img src="'+Apic12[i]+'">';
    FHTML+='<em>'+ATitle12[i]+'</em>';
    FHTML+='</a></li>';
   }
 FHTML+='</ul>';
 FHTML+='</div>';
 document.write(FHTML);
$(function(){Slide_Focus("js_slide_focus_12",1,5,1500,400,true);});

</script></div>