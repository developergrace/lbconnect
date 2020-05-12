<link rel="stylesheet" href="styles/profile.css">
<?php 
include 'includes/header.php'; 

require('mysqli_connect.php');
$user_id = $_GET['uid'];
// FROM DENA - check if a message is being sent that profile was updated and display feedback

if (isset($_GET['msg'])) {
	echo "Profile Updated Successfully";
}
if (($_SESSION['user_id']) == $user_id) {
	$my_profile = "Y";
} 	 


$query = "SELECT * FROM USER WHERE user_id=" . $user_id;
$result = mysqli_query($connection, $query);
  			
while ($row = mysqli_fetch_assoc($result)) {
	 
	// FIRST NAME/LAST NAME HEADER
	echo  "<h1 class='handle'>" . $row['first_name'] . " " . $row['last_name'] . "</h1>"; 
	
	// PROFILE PIC
	echo "<img id='profile_pic' src='https://www.sackettwaconia.com/wp-content/uploads/default-profile.png' alt='Profile Photo' height='180' width='200'><br>";
		
	if($my_profile == "Y") {
		echo "<form action='profile_edit.php' method='get'><button type='submit' class='button' >EDIT PROFILE</button></form>";
	} 	
    // CENTERS BIO/USER INFO
    echo "<p id='bio'>" 
          	
    //JOIN DATE
    . "<span class='center'><strong>Member since: </strong>" . $row['create_date'] 
      
    //FOLLOWING & FOLLOWERS
   . "<strong> Following: </strong>" . $row['following_cnt'] . " " .  "<strong> Followers: </strong> " . $row['followed_by_cnt'] . "<br></span>" 
      
    //BIO
    . "<strong>BIO:</strong> "  . $row['biography']  . "<br>" . 
		 
	//GENDER
	"<i class='fas fa-venus-mars'></i> " . "<strong> GENDER: </strong>" . $row['gender'] . "<br>" 
		  
	//LOCATION
	. "<strong> <i class='fas fa-map-marker-alt'></i>" . " LOCATION: </strong> " . $row['city'] . ", " . $row['state'] . "</p> "; 
	
	}		  
	//LINKS
include 'includes/footer.php';
?>
