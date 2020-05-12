<?php 
    include '../includes/header.php'; 
    include '../model/database.php';

    $posts = getPosts();

    function getPosts() {
        include('../model/database.php');

        $query = "SELECT POST.*, USER.first_name, USER.last_name 
                    FROM POST, USER 
                    WHERE POST.user_id = USER.user_id"; 

        $result = mysqli_query($connection, $query);

        if($result) {
            return mysqli_fetch_all($result, MYSQLI_ASSOC);

        } else {
            return "Error: getInfo()";
        }
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $error_msg = [];
    
        if(empty($_POST['post_title'])) {
            $error_msg[1] = 'You cannot leave this blank.';
        } else {
            $post_title = trim($_POST['post_title']);
        }
        
        if(empty($_POST['post_msg'])) {
            $error_msg[2] = 'You cannot leave this blank.';
        } else {
            $post_msg = trim($_POST['post_msg']);
        } 

        $tag_list = $_POST['tag_list']; //only saves the last tag currently, fix this

        if(empty($error_msg)) {
            $addPost = "INSERT INTO POST (post_title, post_msg, tag_list) 
                                VALUES ('$post_title','$post_msg', '$tag_list')";     
        } else {
            $update_msg = 'There was an error posting your update, please try again.';
        }
    } 
    

?>

<main>
    <div class="welcome-container">

        <form method="POST" action="index.php">
            <div>
                <label for="post_title">Title</label>
                <input type="text" id="post_title" name="post_title" value="<?php echo $post_title; ?>">
                <?php if(isset($error_msg[1])) { echo '<p class="text-red">' . $error_msg[1] . '</p>'; } ?>
            </div>

            <div>
                <label for="post_msg">Message</label>
                <textarea id="post_msg" name="post_msg"><?php echo $post_msg; ?></textarea>
                <?php if(isset($error_msg[2])) { echo '<p class="text-red">' . $error_msg[2] . '</p>'; } ?>
            </div>

            <div id="tag_list">
                <p>Tags</p>
                <?php for($x=1;$x<=5;$x++): ?>
                    <label><input type="checkbox" name="tag_list" value="<?php echo $x; ?>" <?php echo $tag_list == $x ? 'checked' : null; ?>> <?php echo $x; ?>
                    </label>
                <?php endfor; ?>

            </div>

            <div>
                <button class="button" name="post" value="post" type="submit">Post</button>
            </div>
        </form>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Message</th>
                    <th>Tags</th>
                    <th>Upvotes</th>
                    <th>Downvotes</th>
                    <th>Date</th>
                </tr>
            </thead>

            <tbody>
            <?php
                foreach($posts as $post) {
                    echo '<tr>
                        <td>' .$post['first_name'] . " " . $post['last_name']. '</td>
                        <td>' .$post['post_title']. '</td>
                        <td>' .$post['post_msg']. '</td>
                        <td>' .$post['tag_list']. '</td> 
                        <td>' .$post['up_votes']. '</td> 
                        <td>' .$post['down_votes']. '</td> 
                        <td>' .$post['create_date']. '</td>';
                }
            ?>
            </tbody>
        </table>

    </div>
</main>

<?php include '../includes/footer.php'; ?>