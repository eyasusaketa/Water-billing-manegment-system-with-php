
<header>

  
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">
        <div class="user_login">
          <ul>
            <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i> 
<?php 
$email=$_SESSION['login'];
$sql ="SELECT FullName FROM tblusers WHERE EmailId=:email ";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
	{

	 echo htmlentities($result->FullName); }}?><i class="fa fa-angle-down" aria-hidden="true"></i></a>
              <ul class="dropdown-menu">
           <?php if($_SESSION['login']){?>
              <li><a href="search.php">Search Readed Data</a></li>
			 <li><a href="comment.php">Comment</a></li>
			    <li><a href="set.php">help</a></li>
            <li><a href="logout.php">Sign Out</a></li>
            <?php } else
				{ ?>
          <li><a href="set.php"  data-toggle="modal" data-dismiss="modal">set price per littre</a></li>
            <li><a href="logout.php"  data-toggle="modal" data-dismiss="modal">Logout</a></li>
            <?php }
			?>
          </ul>
            </li>
          </ul>
        </div>
        <div class="header_search">
          <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
          <form action="search.php" method="get" id="header-search-form">
            <input type="text" placeholder="Search..." class="form-control">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          <li><a href="index1.php">Home</a>    </li>
          
		     <li><a href="searchone.php">Search Customer</a>

          <li><a href="userlist.php?type=faqs">Customer list</a></li>
          <li><a href="register.php">Add Customer</a></li>
           <li><a href="payform.php">Payment</a></li> 
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation end --> 
  
</header>