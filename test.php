@charset "utf-8";
/*reset*/
*{
    margin: 0 auto;
    padding: 0;
    list-style: none;
    font-family: "맑은 고딕";
    color: #222328;
}

a{
    display: block;
    text-decoration: none;
}

body{
    width: 1200px;
    background-color: #ffffff;
    font-size: 20px;
}

/*header*/
header{
    float: left;
    width: 1200px;
    height: 100px;
    background-color: #ffffff;
}

/*logo*/
.logo{
    float: left;
    width: 300px;
    height: 100px;
    position: relative;
}

.logo a{
    float: left;
    width: 200px;
    height: 40px;
    
    position: absolute;
    top: 30px;
    left: 50px;
}

/*nav*/
nav{
    float: left;
    width: 900px;
    height: 100px;
    background-color: #ffffff;
}

/*log*/
.log{
    float: left;
    width: 900px;
    height: 50px;
    position: relative;
}

.log ul{
    position: absolute;
    top: 10px;
    left: 450px;
    float: left;
    width: 450px;
    height: 30px;
}

.log li{
    float: left;
    width: 100px;
    height: 30px;
    margin-right: 50px;
}

.log li a{
    display: block;
    font-size: 15px;
    line-height: 30px;
    text-align: center;
    font-weight: bold;
    color: #222328;
}

.log li a:hover{
    color: #ed4d3c;
}



/*navi*/
.navi{
    float: left;
    width: 900px;
    height: 50px;
    
    position: relative;
    z-index: 1;
}

.menu{
    float: left;
    width: 600px;
    height: 30px;
    
    position: absolute;
    top: 20px;
    left: 300px;
}

.menu li{
    float: left;
    width: 150px;
    height: 30px;
}

.menu li a{
    display: block;
    font-size: 15px;
    line-height: 30px;
    text-align: center;
    font-weight: bold;
    
    background-color: #5ae95d;
    color: #ffffff;
}

.menu li a:hover{
    background-color: #b127de;
    color: #314edf;
}

.submenu{
    display: none;
}

.submenu li a{
    display: block;
    width: 150px;
    font-size: 15px;
    line-height: 30px;
    text-align: center;
    font-weight: bold;
    
    background-color: #e51664;
    color: #ffffff;
}

.submenu li a:hover{
    background-color: #decf27;
    color: #222328;
}

/*
full-menu시 추가 : 
<2>.menu li:first-child
<3>.menu li .submenu:after 
*/

/*.menu li:first-child{
    position: relative;
}

.menu li .submenu:after{
    content: '';
    position: absolute;
    top: 30px;
    left: -600px;
    
    background-color: #e51664;
    width: 600px;
    height: 120px;
}*/

/*nav-original*/
/*.navi{
    float: left;
    width: 900px;
    height: 100px;
    
    position: relative;
    z-index: 1;
}

.menu{
    float: left;
    width: 600px;
    height: 30px;
    
    position: absolute;
    top: 40px;
    left: 200px;
}

.menu li{
    float: left;
    width: 150px;
    height: 30px;
}

.menu li a{
    display: block;
    font-size: 15px;
    line-height: 30px;
    text-align: center;
    font-weight: bold;
    
    background-color: #2c5bf3;
    color: #ffffff;
}

.menu li a:hover{
    background-color: #71f311;
    color: #314edf;
}

.submenu{
    display: none;
}

.submenu li a{
    display: block;
    width: 150px;
    font-size: 15px;
    line-height: 30px;
    text-align: center;
    font-weight: bold;
    
    background-color: #e51664;
    color: #ffffff;
}

.submenu li a:hover{
    background-color: #64f32c;
    color: #222328;
}*/

/*full-menu시 
<1>.menu 위치 변경*/
/*

.menu{
    float: left;
    width: 600px;
    height: 30px;
    
    position: absolute;
    top: 70px;
    left: 300px;
}
*/

/*
full-menu시 추가 : 
<2>.menu li:first-child
<3>.menu li .submenu:after 
*/

/*
.menu li:first-child{
    position: relative;
}

.menu li .submenu:after{
    content: '';
    position: absolute;
    top: 30px;
    left: -600px;
    
    background-color: #e51664;
    width: 600px;
    height: 120px;
}
*/


/*section*/
section{
    float: left;
    width: 1200px;
    height: 900px;
    background-color: #ffffff;
}

/*slider*/
.slider{
    float: left;
    width: 1200px;
    height: 300px;
    
    position: relative;
    overflow: hidden;
}

.slider>div{
    position: absolute;
    top: 0;
    left: 0;
}

.slider>div img{
    display: block;
}

.slider>div img:hover{
    opacity: 0.5;
}

.sliderList{
    width: 3600px;
}

/* top-sliding과 fadeIn-fadeOut의 경우 변경 */
/*.sliderList{
    width: 1200px;
}*/

.sliderImg{
    float: left;
}


/*contents*/
.con{
    float: left;
    width: 1200px;
    height: 200px;
    background-color: #ffffff;
    
    position: relative;
}

/*.tabmenu*/
.tabmenu{
    position: absolute;
    top: 0;
    left: 0;
    
    float: left;
    width: 390px;
    height: 180px;
    margin-top: 10px;
    margin-bottom: 10px;
    margin-right: 10px;
}

.tabmenu>li{
    float: left;
    width: 100px;
    height: 30px;
}

.tabmenu>li>a{
    display: block;
    font-size: 15px;
    line-height: 30px;
    text-align: center;
    font-weight: bold;
    
    border: 1px solid #999999;
    border-radius: 5px;
    border-bottom: none;
    box-sizing: border-box;
    
    background-color: #9016e5;
    color: #ffffff;
}

.tabmenu>li>a h2{
    font-size: 15px;
}

.tabmenu>li:first-child>a{
    border-right: none;
}

.tabmenu>li>a:hover{
    background-color: #4896ee;
    color: #ecee48;
}

.tabmenu>li.active>a{
    background-color: #ffffff;
    color: #222328;
    cursor: default;
}

/*아래 네모박스*/
.tabmenu>li div{
    position: absolute;
    left: 0;
    height: 0;
    
    overflow: hidden;
}

.tabmenu>li.active div{
    width: 390px;
    height: 150px;
    border: 1px solid #999999;
    box-sizing: border-box;
}

/*공지사항 내용 박스*/
.notice ul{
    width: 390px;
    height: 150px;
    margin-top: 10px;
    background-color: #ffffff;
}

.notice li{
    font-size: 15px;
    height: 25px;
    line-height: 25px;
    margin-left: 5px;
    margin-right: 5px;
}

.notice li span{
    float: right;
}

.notice li:nth-child(2n){
    background-color: #cccccc;
}

.notice li:hover{
    font-weight: bold;
}

/*갤러리 내용 박스*/
.gallery ul{
    width: 390px;
    height: 150px;
    margin-top: 20px;
    background-color: #ffffff;
}

.gallery li{
    float: left;
    margin-left: 20px;
    background-color: #ffffff;
    
    border: 1px solid #999999;
    box-sizing: border-box;
}

.gallery img{
    float: left;
    width: 90px;
    height: 90px;
    padding: 5px;
}

.gallery img:hover{
    opacity: 0.5;
}


/*.tab3*/
.tab3{
    position: absolute;
    top: 0;
    left: 400px;
    
    float: left;
    width: 390px;
    height: 180px;
    margin-top: 10px;
    margin-bottom: 10px;
    margin-right: 10px;
}

.tab3>li{
    float: left;
    width: 100px;
    height: 30px;
}

.tab3>li>a{
    display: block;
    font-size: 15px;
    line-height: 30px;
    text-align: center;
    font-weight: bold;
    
    border: 1px solid #999999;
    border-radius: 5px;
    border-bottom: none;
    box-sizing: border-box;
    
    background-color: #9016e5;
    color: #ffffff;
    cursor: default;
}

.banner ul{
    width: 390px;
    height: 150px;
    background-color: #ffffff;
}

.banner img{
    float: left;
    width: 390px;
    height: 150px;
    cursor: default;
}

.direct_banner{
    background-image: url("../images/banner.jpg");
    position: relative;
}

.direct_banner ul{
    position: absolute;
    top: 60px;
    left: 30px;
    
    width: 360px;
    height: 30px;
    
    background-color: rgba(0,0,0,0.0);
}

.direct_banner ul li{
    float: left;
    width: 60px;
    height: 30px;
    margin-right: 30px;
}

.direct_banner ul li a{
    font-size: 15px;
    text-align: center;
    line-height: 30px;
    font-weight: bold;
    background-color: #ff0000;
    color: #ffffff;
}

.direct_banner ul li a:hover{
    background-color: #00ff00;
    color: #333333;
}

/*.tab4*/
.tab4{
    position: absolute;
    top: 0;
    left: 800px;
    
    float: left;
    width: 400px;
    height: 180px;
    margin-top: 10px;
    margin-bottom: 10px;
}

.tab4>li{
    float: left;
    width: 100px;
    height: 30px;
}

.tab4>li>a{
    display: block;
    font-size: 15px;
    line-height: 30px;
    text-align: center;
    font-weight: bold;
    
    border: 1px solid #999999;
    border-radius: 5px;
    border-bottom: none;
    box-sizing: border-box;
    
    background-color: #9016e5;
    color: #ffffff;
    cursor: default;
}

/*.shortcut ul{
    width: 400px;
    height: 150px;
    background-color: #ffffff;
}*/

.shortcut .img_box{
    display: block;
    width: 400px;
    height: 150px;
    border: 1px solid #000;
    box-sizing: border-box;
    overflow: hidden;
}

.shortcut .img_box>img{
    width: 100%;
    transition: transform 0.5s;
}

.shortcut .img_box:hover>img{
    transform: scale(1.2);
}

/*자유게시판 + 광고란*/
.board{
    float: left;
    width: 1200px;
    height: 400px;
    background-color: #ffffff;
    position: relative;
}

.free{
    position: absolute;
    top: 0;
    left: 0;
    float: left;
    width: 790px;
    height: 390px;
    margin-bottom: 10px;
    margin-right: 10px;
}

.free>li{
    float: left;
    width: 200px;
    height: 30px;
}

.free>li>a{
    display: block;
    font-size: 17px;
    line-height: 30px;
    text-align: center;
    font-weight: bold;
    border: 1px solid #999999;
    border-radius: 5px;
    border-bottom: none;
    box-sizing: border-box;
    background-color: #44e429;
    color: #ffffff;
    cursor: default;
}

.free>li span{
    float: right;
}

/*아래 네모박스*/
.free li div{
    position: absolute;
    top: 30px;
    left: 0;
    width: 790px;
    height: 360px;
    border: 1px solid #999999;
    box-sizing: border-box;
}

/*자유게시판 내용 박스*/
.write ul{
    width: 788px;
    height: 358px;
    background-color: #ffffff;
}

.write li{
    font-size: 15px;
    height: 25px;
    line-height: 25px;
    margin-left: 5px;
    margin-right: 5px;
}

.write li span{
    float: right;
}

.write li:nth-child(2n){
    background-color: #cccccc;
}

.write li:hover{
    font-weight: bold;
}


.ad{
    float: left;
    position: absolute;
    top: 0;
    left: 800px;
    height: 390px;
    margin-bottom: 10px;
}

.ad1 ul{
    float: left;
    width: 400px;
    height: 190px;
    
}

.ad1 img{
    float: left;
    width: 400px;
    height: 190px;
    margin-bottom: 10px;
}

.ad1 img:hover{
    opacity: 0.5;
}

.ad2 ul{
    float: left;
    width: 400px;
    height: 190px;
}

.ad2 img{
    float: left;
    width: 400px;
    height: 190px;
}

.ad2 img:hover{
    opacity: 0.5;
}

/*layer popup*/
#modal{
    position: absolute;
    top: 0;
    left: 0;
    
    width: 100%;
    height: 100%;
    
    background-color: rgba(40,40,40,0.5);
    z-index: 1;
    display: none;
}

#modal.active{
    display: block;
}

.popup{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    
    width: 500px;
    height: 400px;
    background-color: #ffffff;
}

.uptitle{
    font-size: 20px;
    line-height: 30px;
    text-align: center;
    font-weight: bold;
    padding: 30px;
    
    text-decoration: underline;
    text-decoration-color: aqua;
    background-color: #cbefa9;
}

.upbody{
    font-size: 15px;
    padding: 30px;
    line-height: 30px;
    text-align: center;
}

.close{
    position: absolute;
    bottom: 10px;
    right: 10px;
    
    width: 80px;
    height: 30px;
    font-size: 15px;
    line-height: 30px;
    text-align: center;
    font-weight: bold;
    
    border: 1px solid #aaaaaa;
    border-radius: 5px;
    background-color: #e9da37;
    color: #ffffff;
}

.close:hover{
    background-color: #e51664;
    color: #222328;
    cursor: pointer;
}


/*layer popup2*/
#modal2{
    position: absolute;
    top: 0;
    left: 0;
    
    width: 100%;
    height: 100%;
    
    background-color: rgba(40,40,40,0.5);
    z-index: 1;
    display: none;
}

#modal2.active{
    display: block;
}

.popup2{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    
    width: 500px;
    height: 400px;
    background-color: #ffffff;
}

.uptitle2{
    font-size: 20px;
    line-height: 30px;
    text-align: center;
    font-weight: bold;
    padding: 30px;
    
    text-decoration: underline;
    text-decoration-color: aqua;
    background-color: #cbefa9;
}

.upbody2{
    font-size: 15px;
    padding: 30px;
    line-height: 30px;
    text-align: center;
}

.close2{
    position: absolute;
    bottom: 10px;
    right: 10px;
    
    width: 80px;
    height: 30px;
    font-size: 15px;
    line-height: 30px;
    text-align: center;
    font-weight: bold;
    
    border: 1px solid #aaaaaa;
    border-radius: 5px;
    background-color: #e9da37;
    color: #ffffff;
}

.close2:hover{
    background-color: #e51664;
    color: #222328;
    cursor: pointer;
}


/*footer*/
footer{
    float: left;
    width: 1200px;
    height: 100px;
    background-color: #9018e5;
}

.blogo{
    float: left;
    width: 300px;
    height: 100px;
    position: relative;
}

.blogo img{
    float: left;
    width: 200px;
    height: 40px;
    
    position: absolute;
    top: 30px;
    left: 50px;
}

.copy{
    float: left;
    width: 600px;
    height: 100px;
}

.copy p{
    margin-top: 30px;
    font-size: 14px;
    line-height: 1.7;
    text-align: center;
    color: #ffffff;
}

.sns{
    float: left;
    width: 300px;
    height: 100px;
    position: relative;
}

.sns ul{
    position: absolute;
    top: 35px;
    left: 90px;
    
    float: left;
    width: 180px;
    height: 30px;
}

.sns ul li {float:left; width: 30px; height: 30px; margin-right: 30px;}
.sns ul li a {display:block; background:url('../images/sns.png')no-repeat; width:30px; height:30px; float:left;}

.sns ul li a.sns_f{background-position:0 0;} /* 왼, 상 */ 
.sns ul li a.sns_i{background-position:50% 50%;}
.sns ul li a.sns_y{background-position:100% 100%;}

.sns ul li a:hover {display: block;
background:url('../images/sns_hover.png')no-repeat;
width:30px; height:30px; float:left; }

.sns ul li a:hover.sns_f{background-position:0 0;} /* 왼, 상 */ 
.sns ul li a:hover.sns_i{background-position:50% 50%;}
.sns ul li a:hover.sns_y{background-position:100% 100%;}







