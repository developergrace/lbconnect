<?php
//not sure what this page is good for, doesn't seem to do anything
?>

<?php
function getInfo() {
    include('database.php');

    $query = 'SELECT * FROM USER';
    $result = mysqli_query($connection, $query);

    if($result) {
       return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        return "Error: getInfo()";
    }
}

function updateInfo(){
    include('database.php');

    if(isset($_POST['update'])) {   
        $user_id = $_POST['user_id']; 
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $biography = $_POST['biography'];   
        $gender = $_POST['gender'];
        $relationship_status = $_POST['relationship_status'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        
        if(empty($first_name) || empty($last_name)) {            
            $error_msg = "<span class=\"error_msg\">You cannot leave this field blank.</span><br/>";
        } else {    
            $query = "UPDATE USER 
                        SET first_name='$first_name', 
                            last_name='$last_name',
                            biography='$biography',
                            gender='$gender', 
                            relationship_status='$relationship_status',
                            city='$city',
                            state='$state'
                        WHERE user_id=$user_id";
            $result = mysqli_query($connection, $query);
            print_r($result);
        }
    }
}

$user_id = $_GET['user_id'];

$result = mysqli_query($connection, "SELECT * FROM USER WHERE user_id = $user_id");
?>