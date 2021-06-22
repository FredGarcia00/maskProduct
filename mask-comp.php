<?

$exitLink = 'https://tidycarcan.com/product/salespage.php?affId='.$_GET['affId'].'&c1='.$_GET['c1'].'&c2='.$_GET['c2'];

?>
<html>
<head>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<? date_default_timezone_set('America/Los_Angeles'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">

<script src="../js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/jquery-ui.min.js"></script>
<script src="../js/angular.min.js"></script>

<link rel="icon" type="image/png" href="../img/icon.png">

<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">



<style type="text/css">
body{
  margin: 0 0 0 0;
  font-family: 'Open Sans', sans-serif;
  background: #d5d4d0;
  padding-top: 15px;
}
a:link,
a:visited{
	text-decoration: inherit;
	color: inherit;
}
a.articleLink:link,
a.articleLink:visited{
  text-decoration: inherit;
	color:#205cc3;
  font-weight: bold;
}
a.articleLink:hover{
  color:#2b75f5;
  text-decoration: underline;
}
.clear{
	clear: both;
}
.addedTop{
  width: 100%;
  height: auto;
  text-align: center;
  color: #333;
  font-size: 17px;
  padding: 4px 0px;
}
#mainBox{
  width: 1600px;
  height: auto;
  background: #fff;
  margin: 0 auto;
  box-shadow: 0px 0px 7px #000;
}
#header{
  width: 100%;
  height: auto;
  margin: 0 auto;
  border-bottom: 2px solid #ccc;
  padding-top: 7px;
  padding-bottom: 7px;
}
#headerInner{
  width: 1250px;
  height: auto;
  margin: 0 auto;
}
#logoLeft{
  height: 70px;
  width: auto;
  float: left;
}
#textRight{
  height: 70px;
  width: auto;
  float: right;
  line-height: 70px;
  font-style: italic;
  color: #333;
  font-size: 17px;
}
#titleBox{
  width: 100%;
  height: auto;
  margin: 0 auto;
}
#titleInner{
  width: 1250px;
  height: auto;
  margin: 0 auto;
  text-align: center;
  padding-top: 20px;
}
#headline{
  width: 100%;
  height: auto;
  font-size: 34px;
  font-weight: bold;
  color: #222;
}
#author{
  width: 300px;
  height: auto;
  margin: 0 auto;
  font-size: 14px;
  font-weight: bold;
  color: #555;
  margin-top: 15px;
  padding-top: 10px;
  border-top: 1px solid #ccc;
}
#articleBox{
  width: 100%;
  height: auto;
  margin: 0 auto;
}
#articleInner{
  width: 1250px;
  height: auto;
  margin: 0 auto;
  padding-top: 35px;
}
#sidebar{
  width: 300px;
  height: auto;
  float: right;
}
.sidebarTitle{
  width: 100%;
  height: auto;
  font-size: 20px;
  text-align: left;
  font-weight: bold;
  color: #333;
  padding-bottom: 10px;
  border-bottom: 2px solid #ccc;
}
.sidebarNative{
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-top: 15px;
}
.nativeImg{
  width: 45%;
  height: auto;
  float: left;
}
.nativeText{
  width: 52%;
  height: auto;
  float: right;
  font-size: 13px;
  text-align: left;
  color: #444;
}
.nativeText:hover{
  text-decoration: underline;
}


.sidebarImg{
  width: 100%;
  height: auto;
  margin-top: 15px;
}
.sideBarText{
  width: 100%;
  height: auto;
  font-size: 17px;
  text-align: left;
  color: #333;
  margin-top: 10px;
}
#mainContent{
  width: 800px;
  height: auto;
  float: left;
  padding-bottom: 30px;
}
.articleImg{
  width: 100%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
}
.articleImgsmall{
  width: 72%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
}
.articleSubheader{
  width: 100%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 15px;
  font-size: 22px;
  font-weight: bold;
  line-height: 28px;
  color: #17191c;
}
.blockQuote{
  width: calc(90% - 50px);
  height: auto;
  margin: 0 auto;
  border-left: 10px solid #ccc;
  background-color: #f9f9f9;
  background-image: url(../img/blockquote.png);
  background-repeat: no-repeat;
  line-height: 28px;
	padding: 10px 20px 10px 40px;
  margin-bottom: 20px;
}
.articleText{
  width: 100%;
  height: auto;
  margin: 0 auto;
  /*padding-bottom: 20px;*/
  font-size: 17px;
  line-height: 26px;
  color: #333;
}
.articleIndent{
  width: 90%;
  height: auto;
  margin: 0 auto;
  /*padding-bottom: 20px;*/
  font-size: 17px;
  line-height: 26px;
  color: #333;
}
.articleButton{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  padding: 8px;
  color: #fff;
  font-family: 'Open Sans';
  font-size: 18px;
  font-weight: bold;
  text-align: center;
  background-image: linear-gradient(to bottom,#f0ad4e 0,#eb9316 100%);
  background-repeat: repeat-x;
  border: 1px solid #e67919;
  border-radius: 4px;
}

.commentBreak{
	width:100%;
	border-bottom: 1px solid #198fff;
	margin:0 auto;
	height:80px;
}
#map {
  width: 700px;
  height: 405px
}
#footer{
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-top:60px;
  background: #5a787c;
}
#footerInner{
  width: 1040px;
  height: auto;
  margin: 0 auto;
  padding: 25px 0px;
  color: #fff;
  font-family: 'Roboto';
  font-size: 14px;
  text-align: center;
}
.linkLine{
  width: 300px;
  height: auto;
  margin: 0 auto;
  padding-top: 15px;
  color: #fff;
  font-family: 'Roboto';
  font-size: 14px;
  text-align: center;
}
.articleSubimg{
  width: 500px;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
}
.imageSub{
  width: 100%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
  text-align: center;
  font-size: 16px;
  color: #777;
  font-style: italic;
}
li{
  padding-bottom: 15px;
}
.finalBox{
  width: calc(100% - 42px);
  height: auto;
  margin: 0 auto;
  padding: 30px 20px;
  border: 1px solid #dedede;
  margin-top: 30px;
  margin-bottom: 30px;
}
.articleButton{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  padding: 10px;
  color: #fff;
  font-family: 'Roboto';
  font-size: 30px;
  text-align: center;
  background: #63d021;
  border: none;
  outline: none;
}
.articleButton:hover{
  background: #49a511;
}
.updateBox{
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-bottom: 20px;
}
.updateTop{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  background: #459ef7;
  color: #fff;
  padding: 20px 10px;
  border-radius: 5px;
  font-size: 20px;
  font-weight: 700;
}
.updateBot{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  background: #f4f4c3;
  color: #111;
  padding: 20px 10px;
  border-radius: 2px;
  font-size: 18px;
  font-weight: 400;
}
.paperBox{
  width: calc(100% - 50px);
  height: auto;
  margin: 0 auto;
  padding: 25px;
  margin-bottom: 25px;
  background: url(../img/paperbg.jpg);
  background-repeat: repeat;
  box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.8);
}
.paperTitle{
  width: 100%;
  height: auto;
  color: #222;
  font-size: 24px;
  font-weight: 700;
  text-align: center;
  padding-bottom: 20px;
}
.paperText{
  width: 100%;
  height: auto;
  color: #222;
  font-size: 18px;
  font-weight: 400;
  text-align: left;
  padding-bottom: 20px;
}
.reviewBox{
  width: calc(100% - 50px);
  height: auto;
  padding: 25px;
  border-bottom: 1px solid #ddd;
}
.namePic{
  width: 34px;
  height: 34px;
  background: #a7a7a7;
  border-radius: 50%;
  float: left;
  position: relative;
  text-align: center;
  color: #fff;
  line-height: 34px;
  font-size: 20px;
}
.nameCheck{
  width: 12px;
  height: 12px;
  position: absolute;
  right: 0;
  bottom: 0;
  z-index: 10;
}
.dateRight{
  width: 120px;
  height: auto;
  float: right;
  font-size: 14px;
  color: #777;
}
.reviewHeader{
  width: calc(100% - 184px);
  height: 34px;
  float: left;
  margin-left: 15px;
}
.rh1{
  width: 100%;
  height: 20px;
  text-align: left;
  font-size: 14px;
  color: #777;
  line-height: 20px;
}
.rh2{
  width: 100%;
  height: 14px;
}
.reviewText{
  width: 100%;
  height: auto;
  margin-top: 15px;
  font-size: 16px;
  font-style: italic;
  color: #333;
}


@media screen and (max-width: 1600px) {
  body{
    padding-top: 10px;
  }
  #mainBox{
    width: 100%;
  }
  #headerInner,
  #titleInner,
  #articleInner{
    width: 1250px;
  }
  #mainContent{
    width: 750px;
  }
}

@media screen and (max-width: 1250px) {
  #headerInner,
  #titleInner,
  #articleInner{
    width: 95%;
  }
  .barLeft{
    width: 120px;
    font-size: 15px;
  }
  .barRight{
    width: 170px;
    font-size: 12px;
  }
  .barCenter{
    width: calc(100% - 290px);
    font-size: 11px;
  }
  #mainContent{
    width: 100%;
  }
  #sidebar{
    display: none;
  }
  #footerInner{
    width: 95%;
    font-size: 12px;
    padding: 20px 0px;
  }
  .imgSubheader{
    padding-bottom: 12px;
    font-size: 18px;
    line-height: 24px;
  }
  .articleImgsmall{
    width: 80%;
  }
  .articleSubheader{
    padding-bottom: 12px;
    font-size: 26px;
    line-height: 30px;
  }
  .articleText,
  .articleIndent{
    padding-bottom: 12px;
    font-size: 22px;
    line-height: 32px;
  }
  .articleButton{
    font-size: 24px;
  }
  #footerInner{
    width: 95%;
    font-size: 11px;
    padding: 15px 0px;
  }
  #map{
    transform: scale(0.8);
    margin-left: -80px;
  }
  .updateTop{
    width: calc(100% - 16px);
    padding: 16px 8px;
    font-size: 18px;
  }
  .updateBot{
    width: calc(100% - 16px);
    padding: 16px 8px;
    font-size: 17px;
  }
  .rh1{
    font-size: 11px;
  }
}
@media screen and (max-width: 750px) {
  .blockQuote{
		font-size:18px;
		line-height:24px;
  }
  .articleSubimg{
    width: 80%;
  }
}
</style>


</head>
<body>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '552365194970012');
fbq('track', 'PageView');
fbq('track', 'ViewContent', {
  content_ids: ['<?php echo $_GET['utm_term'] ?>'],
  content_type: 'product',
  content_category: ['tidycar']
});
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=552365194970012&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->



<div id="mainBox">
  <div id="header">
    <div id="headerInner">
      <div id="logoLeft">
        <img src="../img/logo1.png" height="100%" />
      </div>
      <div id="textRight">
        Advertisement - Sponsored by TidyCar
      </div>
      <div class="clear"></div>
    </div>
  </div>



  <div id="titleBox">
    <div id="titleInner">
      <div id="headline">
      Dry Eye Relief Mask
      </div>
      <div id="author">
        Jared Lane | <?=date('l\, F d\, Y',strtotime('-9 days'));?>
      </div>
    </div>
  </div>


  <div id="articleBox">
    <div id="articleInner">
      <div id="sidebar">
        <div class="sidebarTitle">
          Sponsored By:
        </div>
        <div class="sidebarImg">
          <a href="https://about.att.com/pages/5g/how-5g-works.html" target="_blank">
            <img src="../img/attban.jpg" width="100%" />
          </a>
        </div>
        <div class="sidebarImg">
          <a href="https://www.mazdausa.com/vehicles/2020-cx-3" target="_blank">
            <img src="../img/mazdaban.jpg" width="100%" />
          </a>
        </div>
      </div>

      <div id="mainContent">
    <div class="articleImg">
      <img src="./img/splash.jpg" width="100%" />
    </div>
    <div class="articleText">
      <p>
        Jared is not a fan of wearing glasses, but he’ll do it if he has to…and let me tell you—after 
        wearing contacts for twelve hours a day out in the blistering heat waves of 
        Phoenix, Arizona, his eyes feel dry and scratchy, and Jared's vision starts to get cloudy. 
        Eye drops help a little bit, but contact-lens fatigue is real. 
        There’s some days where Jared tries to put his contacts in and his eyes are so dry that when he blinks, 
        his eyelid actually crinkles the contact, forcing him to try again or just go for the glasses.
      </p>

      <div class="articleImgsmall" style="width:50%;">
        <img src="./img/dryEyes.jpg" width="100%" />
      </div>

      <p>
        Jared has dry eyes, and the weather out there isn’t helping. 
        It’s that dry heat in the summer, just cooks him inside and out. 
        Jared has been dealing with it for years. His wife, who manages a store at the Desert Sky mall, 
        she comes home almost every day with puffy eyes from allergens. 
        They both talked about different things they could do to try to relieve some of their eye strain, 
        but it just ended up being a rehash of the same things they heard on infomercials late at night; 
        get a full eight hours of sleep, try this certain brand of eye drops, wear these special sunglasses…they tried 
        everything from ointments (thicker, lubricating eyedrops) and omega-3 fatty acids to warm compresses…nothing worked.
      </p>

      <div class="articleImgsmall" style="width:50%;">
        <img src="./img/remedies.jpg" width="100%" />
      </div>

      <p>
        It was getting to the point where Jared didn’t even want to read the newspaper, 
        or if he was checking out something on the internet, Jared had to zoom his iPad text 
        to giant size because he just couldn’t focus properly. If Jared pushed himself, he ended 
        up getting headaches, too, and no one needs that.
      </p>

      <p>
        Jared's wife decided one day that they were going to the doctor to get this figured out once and for all. 
        After explaining the situation they were dealing with, he gave them the hard facts.
      </p>


      <div class="blockQuote">
         <i>
         “Jared, that sounds miserable. The good news is that you and Emily don’t need to keep living like this. 
         I see here that you’ve tried a bunch of common remedies for dry eyes. That’s good you took some initiative 
         on your own to solve your problem, but unfortunately, a lot of these “solutions” are just temporary fixes. 
         I’ve noticed over the years a lot of my patients return with the same symptoms after going through the gamut 
         of these “common solutions.” Tell me, have either of you ever heard about 
         <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a> ?”
		    </i>
      </div>

      <p>Emily and Jared shared a look. Great, he thought, this guy’s just trying to hock an in-office product to make a quick buck.</p>

      <p>  “No, we haven’t.” Jared said, a little defensive.</p>
      <div class="blockQuote">
        <i>
        “I’ve been an ophthalmologist for 32 years, 
        and I’ve spent the last 12 of those years doing 
        research and developing my own permanent solution 
        for people who suffer from dry eyes. I found that 
        the most common factor is clogged tear ducts, and 
        that applying heat within a certain temperature range 
        for just 10 minutes or so a day at targeted areas on the 
        eyelids can actually stimulate the eyes to produce natural 
        oils that clear out the tear ducts. 
        <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a> is more 
        than a temporary fix; it actually addresses the core problem and, 
        with regular use, it is a permanent solution for many of my patients. 
        You don’t have to order yourselves one right this moment, 
        but do yourselves a favor and check out the product on my website, 
        and give it some thought.”
        </i>
      </div>

      <p>
        Jared confesses, his first thought was to be annoyed that this doctor was trying to 
        sell me something that was just another gimmick. His second thought was that he couldn’t afford 
        to drop a ton of money on this device he was telling him about, especially because it sounded 
        like a vanity product, rather than a true medical solution. Jared's wife, though, she thought he 
        was genuine and that they should at least give the website a look. “What do we have to lose?” 
        She asked. “He’s been a doctor for a long time, and he said a lot of patients swear by it.”
      </p>

      <p>
        Jared decided that made sense, so we might as well give it a shot. 
        Jared and his wife did some research on the [Product Name]. He quickly 
        realized the doctor and the product were legit, time-tested, and 
        the sheer number of patients who were talking about the great results 
        they had with the [Product Name] were impossible to dismiss.
      </p>
      </div>
    <div class="articleSubheader">
      What Is It And How Does It Work?
    </div>
    <div class="articleImgsmall" style="width:50%;">
      <img src="./img/product.jpg" width="100%" />
    </div>
    <div class="articleText">
      <p>
      <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a> is an electrically heated mask 
      designed by the industry’s leading dry eye professionals that maintains the optimum temperature to 
      relieve symptoms of the most common eye strain issues like dry eyes, MGD and blepharitis. [Product Name] 
      relies on established scientific studies that have determined the exact temperature range recommended by 
      ophthalmologists that stimulates the eyes to produce congealed oils that opens up clogged tear ducts. 
      The special thermal fabric evenly distributes soothing heat along the Meibomian glands at three settings 
      with a variable timer and auto shut-off..
      </p>

      <p>
          You can relax and let [Product Name] sooth your strained eyes for two 10 minute sessions per day. 
          Don’t live with the annoying symptoms of dry eye, strain/fatigue, puffiness, or migraines. 
          The [Product Name] is made with quality polyester fibers and a durable, adjustable strap for 
          maximum comfort. 
      </p>

      <p>
          Use the <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a> to stimulate reflex zones that lead to increased blood circulation around 
          the eyes, an important and often-overlooked aspect of eye pain and strain. The [Product Name] comes 
          with an AC adapter and 6 ½” USB power cord, and is lightweight and portable: use it at the office, 
          during travel or in the comfort of your own home. Simply wipe clean with a damp cloth after use.
      </p>
    </div>
    <div class="articleSubheader">
      But…Is It Really Worth All This Hype?
    </div>
    <div class="articleText">
      <p>
      So far, the <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a> has sold over 8 million units directly to consumers, 
      even without the help of being sold in stores. The [Product Name] has been SELLING OUT 
      every time new stock becomes available, it’s become THAT popular.
      </p>

      <p>And, it’s all from word of mouth. People just like you are loving it so much that they’re posting about it on instagram and telling everyone they know about it!</p>
    </div>
    <div class="articleImgsmall" style="width:60%;">
      <img src="./img/igpost.jpg" width="100%" style="border: 1px solid #ddd;" />
    </div>
    <div class="articleImgsmall" style="width:60%;">
      <img src="./img/igpost2.jpg" width="100%" style="border: 1px solid #ddd;" />
    </div>
    <div class="articleText">
      <p>
      The <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a> has started to develop a cult following, and with over 10,000 5-star reviews, 
      it makes sense. Here’s what customers are saying about it:
      </p>
    </div>
    <div class="reviewBox">
      <div class="namePic">
        M
        <div class="nameCheck">
          <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Mark L.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        5/27/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
      I am glad that the first electric one I chose to purchase was this one as I was not disappointed! 
      This has helped to relieve the eye pain that you have from dry eyes.
      </div>
    </div>
    <div class="reviewBox">
      <div class="namePic">
        A
        <div class="nameCheck">
          <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Amber A.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        6/1/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
      This is the 2nd product that I have purchased  and I have been very happy with both!
I highly recommend this product and would not hesitate to purchase other items they have. My eyes look amazing.
      </div>
    </div>
    <div class="reviewBox" style="border-bottom: none;">
      <div class="namePic">
        E
        <div class="nameCheck">
          <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Edward C.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        6/5/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
      Within 3 uses, the whites of my eyes were white again (had been dusky or red for years, never white), my eyelids lost their chronic swelling, 
      and the constant crusting along my lashline stopped. 
      This product is worth every penny paid.

      </div>
    </div>
    <div class="articleText">
      <p>
        If his sister's recommendation wasn’t enough, 
        the overwhelming number of positive reviews for the <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a> was very convincing. 
        Jared knew he had to try it for himself. Jared got on the official website and ordered one the moment 
        it came back in stock.
      </p>
    </div>
    <div class="articleSubheader">
      …Here’s What Jared Found.
    </div>
    <div class="articleText">
      <p>The <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a> arrived in just 2 days.</p>
      <p>
        It came with the heating mask, a USB charging cable and AC adapter. 
        Jared unboxed it and plugged it in, expecting to have to wait a few hours for it to charge, 
        but it was ready to go 10 minutes later. Jared was amazed how fast it charged.
      </p>
      <div class="articleImg" style="width:60%;">
        <img src="./img/unboxing.jpg" width="100%" />
      </div>

      <p>
        Jared is not a believer in miracle cures or anything like that, 
        so he set his expectations pretty low, but as soon as he put the 
        mask on and fired up the heat, his body’s response was pretty immediate. 
        Soft fibers over his eyes slowly heated up until it felt like his eyes were 
        getting a spa treatment, kind of like sitting in a sauna. The hairs on the 
        back of his neck stood up, and he could feel his eyes watering slightly. 
        The material was smooth against his face, and it wasn’t too hot so as to be uncomfortable. 
        Jared leaned back and relaxed for the full 10 minutes, and he has to admit, it was great.
      </p>

      <p>
        After the 10 minutes was up, Jared took the massager off and saw how much of a difference it made. 
        That hazy cloud over his vision that he was complaining about for weeks? It was gone. 
        Jared blinked several times, expecting to have it reappear, but it didn’t.
      </p>

      <div class="articleImg" style="width:60%;">
        <img src="./img/normal.jpg" width="100%" />
      </div>

      <p>
      Jared couldn’t believe it, so he had his wife give it a try. 
      After her first go with the <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a>, she told him 
      it was the best her eyes have felt in years. She really enjoyed 
      the experience, and said she’d be using it every day, so Jared should
      order another one if he didn’t want to share it. Jared decided to make this 
      a part of his daily routine to see how it would affect him over the course 
      of a few weeks.
      </p>

      <div class="articleImg" style="width:50%;">
        <img src="./img/wifepic.jpg" width="100%" />
      </div>

      <p>
        It’s been four weeks since Jared started using <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a> twice a day, 
        and the difference has been incredible. Jared no longer has to worry about his dry 
        eyes making it impossible to use his contacts! Every once and a while he will start 
        to get that hazy cloud at the corners of my vision, but he just pops on his [Product Name] 
        and relax for a few minutes, and it stimulates his eyes to be nice and hydrated. 
        Jared doesn't understand the science behind it, honestly, but he can definitely swear by the results. 
        Jared was amazed. Not only does the [Product Name] help his eye strain, it works FAST. 
        Both Jared and his wife are ecstatic to finally have their dry eye situation under control.
      </p>

      <p>
      UPDATE: After using <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a> every day for six weeks now, 
      Jared could not imagine getting through a long day without it. 
      For such a useful product, it was affordable, and after constant use, 
      it’s still working just as good as the first time he used it! Jared did end 
      up ordering one for my wife, too. She made good on her promise to keep 
      stealing his to use it after long days at the mall—until hers showed up 
      2 days after he ordered it—and she’s been loving it. This nifty little device 
      has made a huge difference for both of them, and Jared can’t recommend it enough!
      </p>

    </div>
    <div class="articleSubheader">
      How Much Does It Cost?
    </div>
    <div class="articleText">
      <p>It’s currently on sale at their <a class="articleLink" href="<?=$exitLink;?>">official website</a> for just the price of $99.95!</p>
    </div>
    <div class="articleSubheader">
      Is It Worth It?
    </div>
    <div class="articleText">
      <p>	
        Of course! Jared looks at his purchase of [Product Name] 
        as the only thing that’s made an improvement in his dry 
        eye situation, and it’s really reduced a lot of stress in his life. 
        The days before Jared started using it were filled with a lot of eye-rubbing, 
        constant eye drops, and really put a strain on his mood. Every day after 
        his purchase has been so different. He will be using this product for a very 
        long time—you can’t beat this relief at such a low price!
      </p>

      <p>
      The <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a> has absolutely changed Jared's life, and his wife’s, too. 
      Jared was thrilled to have been proven wrong about my initial suspicion of 
      the ophthalmologist, and he made sure to thank him the next time he saw him 
      for a follow-up appointment. Jared can’t take it away from him—when it comes to 
      [Product Name], the guy had done some great work. Now, when Jared hears his coworkers 
      complaining about the heat and how their dry eyes are affecting them, 
      he know exactly what to recommend to them, too!
      </p>

      </div>
    <div class="updateBox">
      <div class="updateTop">
        UPDATE
      </div>
      <div class="updateBot">
        <b>UPDATE <?=date('l\, F d\, Y',strtotime('-0 days'));?></b> - Ever since <a class="articleLink" href="<?=$exitLink;?>"> [Product Name] </a> was featured on TV, an incredible amount of buzz has been generated and has since sold over 8 million units. Due to its popularity and positive reviews, the company is so confident in their product that they are now offering a <b>one-time discount of 50% off. To see if they are still available, click on the button below.</b>
      </div>
    </div>


    <a href="<?=$exitLink;?>">
      <div class="articleButton">
        Apply Discount & Check Availability >>
      </div>
    </a>





        <div class="commentBreak" style="margin-bottom: 30px;"></div>
        <!-- Load comments -->
        <?
        $commentsUrl= 'http://blackin.top/comments/tidycar.php'; // comments location
        $commentsCh = curl_init();
        $commentsTimeout = 5;
        curl_setopt($commentsCh,CURLOPT_URL,$commentsUrl);
        curl_setopt($commentsCh,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($commentsCh,CURLOPT_CONNECTTIMEOUT,$commentsTimeout);
        $commentsData = curl_exec($commentsCh);
        curl_close($commentsCh);
        echo $commentsData;
        ?>
        <!-- End comments -->







      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>







<!--Footer-->
<div id="footer">
  <div id="footerInner">
    THIS IS AN ADVERTISEMENT AND NOT AN ACTUAL NEWS ARTICLE, BLOG, OR CONSUMER PROTECTION UPDATE
    <br /><br />
    MARKETING DISCLOSURE: This website is a market place. As such you should know that the owner has a monetary connection to the product and services advertised on the site. The owner receives payment whenever a qualified lead is referred but that is the extent of it.
    <br /><br />
    ADVERTISING DISCLOSURE: This website and the products & services referred to on the site are advertising marketplaces. This website is an advertisement and not a news publication. Any photographs of persons used on this site are models. The owner of this site and of the products and services referred to on this site only provides a service where consumers can obtain and compare.
    <br /><br />
    © <?=date('Y'); ?> All Rights Reserved.
    <br /><br />
      <a href="../contact.php" class="textLink" target="_blank" style="color: white;">Contact Us</a> -
      <a href="../terms.php" class="textLink" target="_blank" style="color: white;">Terms & Conditions</a> -
      <a href="../privacy.php" class="textLink" target="_blank" style="color: white;">Privacy Policy</a>
    <? include_once('../dmca.php'); ?>
  </div>
</div>
</body>
</html>
