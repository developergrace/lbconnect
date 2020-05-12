<?php 
    include '../includes/header.php'; 
    include '../model/database.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $error_msg = [];

        if(empty($_POST['user_id'])) {
            $error_msg[0] = 'You cannot leave this blank.';
        } else {
            $user_id = trim($_POST['user_id']);
        } 
    
        if(empty($_POST['first_name'])) {
            $error_msg[1] = 'You cannot leave this blank.';
        } else {
            $first_name = trim($_POST['first_name']);
        }
        
        if(empty($_POST['last_name'])) {
            $error_msg[2] = 'You cannot leave this blank.';
        } else {
            $last_name = trim($_POST['last_name']);
        } 

        $biography = trim($_POST['biography']);
        $gender = trim($_POST['gender']);
        $rs = trim($_POST['relationship_status']);
        $city = trim($_POST['city']);
        $state = trim($_POST['state']);

        if(empty($error_msg)) {
            $updateInfo = "UPDATE USER
                            SET first_name = '$first_name',
                                last_name = '$last_name',
                                biography = '$biography',
                                gender = '$gender',
                                relationship_status = '$rs',
                                city = '$city',
                                state = '$state'
                            WHERE user_id = '$user_id'";

            if($result = mysqli_query($connection, $updateInfo)) {
                // output a success message here 
                header('Location: edit.php?success=1');
                exit;
            } 
        } else {
            $update_msg = 'There was an error updating your profile, please try again.';
        }
    } 

    elseif($_SERVER['REQUEST_METHOD'] == 'GET') {
        $get_id = $_GET["id"];
 
        $query = "SELECT * FROM USER 
                WHERE user_id = $get_id"; //index.php?id=3
                
        $result_update = mysqli_query($connection, $query);

        if($result_update) {
            $users = mysqli_fetch_all($result_update, MYSQLI_ASSOC);    
            foreach ($users as $user) {            
                $user_id = $user['user_id'];
                $first_name = $user['first_name'];
                $last_name = $user['last_name'];
                $biography = $user['biography'];
                $gender = $user['gender'];
                $rs = $user['relationship_status'];
                $city = $user['city'];
                $state = $user['state'];
            }
        } 
    }    

?>

<main>
    <div class="welcome-container">
        <h1>Edit Profile</h1>

        <form method="POST" action="edit.php">

        <?php //error message
            if(isset($update_msg)) {
                echo '<p class="text-red">' . $update_msg . '</p>'; 
            }
        ?>

        <input type="hidden" id="user_id" name="user_id" value="<?php echo $user_id; ?>">
        
        <div>
            <label for="first_name" class="hidden">First Name</label>
            <input type="text" id="first_name" name="first_name" value="<?php echo $first_name; ?>">
            <?php if(isset($error_msg[1])) { echo '<p class="text-red">' . $error_msg[1] . '</p>'; } ?>
        </div>

        <div>
            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" name="last_name" value="<?php echo $last_name; ?>">
            <?php if(isset($error_msg[2])) { echo '<p class="text-red">' . $error_msg[2] . '</p>'; } ?>
        </div>

        <div>
            <label for="biography">Bio</label>
            <textarea id="biography" name="biography"><?php echo $biography; ?></textarea>
        </div>

        <div>
            <label for="gender">Gender</label>
            <select id="gender" name="gender">
                <option value="">Select...</option>
                <option value="M" <?php if($gender=='M') echo 'selected'; ?>>Male</option>
                <option value="F" <?php if($gender=='F') echo 'selected'; ?>>Female</option>
                <option value="O" <?php if($gender=='O') echo 'selected'; ?>>Other</option>
            </select>
        </div>

        <div>
            <label for="rs">Relationship Status</label>
            <select id="rs" name="relationship_status">
                <option value="">Select...</option>
                <option value="S" <?php if($rs=='S') echo 'selected'; ?>>Single</option>
                <option value="M" <?php if($rs=='M') echo 'selected'; ?>>Married</option>
                <option value="O" <?php if($rs=='O') echo 'selected'; ?>>Other</option>
            </select>
        </div>

        <div>
            <label for="city">City</label>
            <input type="text" id="city" name="city" value="<?php echo $city; ?>">
        </div>

        <div>
            <label for="state">State</label>
            <select id="state" name="state">
                <option value="">Select...</option>
                <option value="CA" <?php if($state=='CA') echo 'selected'; ?>>CA</option>
                <option value="MA" <?php if($state=='MA') echo 'selected'; ?>>MA</option>
                <option value="NY" <?php if($state=='NY') echo 'selected'; ?>>NY</option>
            </select>
        </div>

        <div>
            <button class="button" name="update" value="update" type="submit">Update</button>
        </div>
    </form>
    </div>


</main>

<?php include '../includes/footer.php'; ?>