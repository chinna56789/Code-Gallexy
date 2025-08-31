
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
    background-color: #3F84B1;
    border-bottom: none;
    height: 80px;
    line-height: 35px;
    margin-top: -1%;
}
ul.tp-hd-lft{
    float: left;
}
ul.tp-hd-lft li {
    display: inline-block;
}
li.hm,li.prnt {
    margin-right: 12px;
    text-align: center;
}
ul.tp-hd-lft a {
    font-size: 1.5em;
    font-weight: 600;
    color:#fff;
    padding-top:40px;
    text-align: center;
    padding-bottom:20px;
}
ul.tp-hd-rgt{
    float:right;
}
ul.tp-hd-rgt li {
    display: inline-block;
    font-size: 1.5em;
    font-weight: 600;
    color:#fff;
}
ul.tp-hd-rgt  a {
    font-size: 1.2em;
    font-weight: 600;
    color:#fff;
    text-align: center;
}
li.ned,li.wrt,li.tol{
    margin-right: 12px;
}

</style>

<?php if($_SESSION['loggedin'])
 	{?>
<div class="top-header">
 			<div class="container">
 				<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
 					<li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>
 					<li class="prnt"><a href="profile.php">My Profile</a></li>
 					<li class="prnt"><a href="home.php">Home</a></li>
 					<li class="prnt"><a href="history.php">Quiz History</a></li>
 				</ul>
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
        ?>
        <div class="top-header">
            <div class="container">
                
                <ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">     
                    <li class="sig"><a href="login.php" data-toggle="modal" data-target="#myModal" >login</a></li> 
                    <li class="sigi"><a href="register.php" data-toggle="modal" data-target="#myModal4" >Register</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
        <?php 
    }?>