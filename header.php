<?php if($_SESSION['loggedin'])
 	{?>
<div class="top-header">
 			<div class="container">
 				
 				<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
 					<li class="tol">Welcome :</li>        
 					<li class="sig"><?php echo htmlentities($_SESSION['uname']);?></li> 
 					<li class="sigi"><a href="logout.php" >/ Logout</a></li>
 				</ul>
 				<div class="clearfix"></div>
 			</div>
 		</div>
         <?php 
    } else 
    {
        header("location: index1.php");
       
    }?>
    <html><head>
        <style>
.logo a {
    color: #3F84B1;
    letter-spacing: 1px;
    font-size: 2em;
    font-weight: 400;
    display: block;
    text-decoration: none;
    font-family: 'Oswald', sans-serif;
}
.logo span {
    color:#34ad00;
}
i.fa.fa-home {
    font-size: 24px;
}
.top-header {
   
    margin-top: -40%;
    border-bottom: 0 none;
    height: 36px;
    line-height: 35px;
    margin-left:0;
}
ul.tp-hd-lft{
    float: left;
}
ul.tp-hd-lft li {
    display: inline-block;
}
li.hm,li.prnt {
    margin-right: 12px;
}
ul.tp-hd-lft a {
    font-size: 13px;
    font-weight: 600;
    color:#fff;
}
ul.tp-hd-rgt{
    float:right;
}
ul.tp-hd-rgt li {
    display: inline-block;
    font-size: 13px;
    font-weight: 600;
    color:#fff;
}
ul.tp-hd-rgt  a {
    font-size: 13px;
    font-weight: 600;
    color:#fff;
}
li.ned,li.wrt,li.tol{
    margin-right: 20px;
}
.tol
{
    font-size: 1.5em;
    margin-right:20px;
}
</style></head></html>