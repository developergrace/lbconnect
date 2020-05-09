<?php include 'includes/header.php'; ?>
  <main>
    <div class="welcome-container">
      <h1 class="text-red">Hello Students!</h1>
      <div class="content">
      <h2>So is this a template we can use for the final project?</h2>
      <p>
        Yes! We've created this skeleton of a template so you can jump-start 
        your design and development. There will be a few key things you can start
        using right away and if you'd like you can most certainly append or create your
        own styles. 
        <br><br>
        Please take a look at the "styles.css" file for inspiration.
      </p>
      </div>
      <div class="content">
        <h2>Main Colors</h2>
        <div class="color-list-container">
          <div class="color-item text-white bg-gray">Gray<br>#424c55</div>
          <div class="color-item bg-red">Red<br>#db5461</div>
          <div class="color-item bg-blue">Blue<br>#00b2ca</div>
          <div class="color-item bg-gradient">Gradient<br>#63d0d5</div>
        </div>
      </div>
      <div class="content">
        <h2>File Structure</h2>
        <pre>
        [Root Folder]
            index.php (landing page to be created)
                [styles]
                    styles.css
                    styles_navbar.css
                [img] (add any needed images here)
                [includes]
                    footer.php
                    header.php
            register.php (registration page)
            login.php (login page)
            forgot_password.php (forgot password page)
            newsfeed.php (newsfeed landing page)
            post_add.php
            post_edit.php (editing and deleting)
            profile.php (profile landing page to view a specific user)
            profile_edit.php (CRUD for profile)
            messaging.php (messaging landing page listing list of chats)
            message_view.php (view a specific chat between 2 users)
            message_new.php
            message_edit.php (editing and deleting)
            search.php (searching landing page)
            search_results.php (display search results)
            [admin]
                index.php (admin landing page with links to other pages)
                users.php (CRUD list of users page)
                security_questions.php (CRUS list of security questions for forgot password page)
                tags.php (CRUD list of tags available for posts)
        </pre>
      </div>
      <h2>Components</h2>
      <div class="component-item">
        <h3>Cards</h3>
        <div class="component-class">
          <span class="badge">Class: .card</span>
        </div>
        <div class="card">
          This is an element using the "card" class.
        </div>
      </div>

      <div class="component-item">
        <h3>Button</h3>
        <div class="component-class">
          <span class="badge">Class: .button</span>
        </div>
        <div>
          <button class="button">Click Me</button>
          <button class="button">Submit Post</button>
          <button class="button">Upvote</button>
          <button class="button">Some Action</button>
        </div>
      </div>

      <div class="component-item">
        <h3>Inputs</h3>
        <p>We've updated the CSS to style the inputs and make them larger.</p>
        <div class="mb-3">
          <input type="text" style="width:500px;">
        </div>
        <div>
          <input type="checkbox"> Option A
        </div>
        <div class="mb-3">
          <input type="checkbox"> Option B
        </div>
        <div class="mb-3">
          <input type="radio" name="sample-radio"> Option 1 &nbsp;&nbsp;&nbsp;
          <input type="radio" name="sample-radio"> Option 2
        </div>
        <div>
          <select name="sample-select">
            <option value="">Select...</option>
            <option value="sample1">Option X</option>
            <option value="sample2">Option Y</option>
          </select>
        </div>
      </div>

      <div class="component-item">
        <h3>Useful Links</h3>
        <div class="mb-5">
          Site: <a href="https://fontawesome.com/">Font Awesome</a>
          <p>
            If you need icons for any of your pages or features, this is
            a great place to start. There's so many to choose from! We've
            included this library already with this template so it's ready 
            to be used. Look at these examples:
          </p> 
          <div class="font-awesome-examples">
            <i class="fas fa-poo"></i> <i class="fas fa-address-book"></i>
            <i class="fas fa-paper-plane"></i> <i class="fas fa-smile"></i> 
            <i class="fas fa-user-edit"></i> <i class="fas fa-street-view"></i>
          </div>
        </div>

        <div class="mb-5">
          Site: <a href="https://cssgradient.io/">CSS Gradient</a>
          <p>
            You can make some really cool gradient with just a few clicks.
            Need some flashy color combinations? Check out this site.
          </p> 
        </div>

        <div class="mb-5">
          Site: <a href="http://www.cssarrowplease.com/">CSS Arrow Please</a>
          <p>
            A lot of social media sites use these "chat" style boxes to
            display messages. Check out this site for inspiration!
          </p> 
        </div>

        <div class="mb-5">
          Site: <a href="https://www.pexels.com/">Pexels (Stock Photos)</a>
          <p>
            Need an image to use for your page? Check out this site which includes
            royaltee free images.
          </p> 
        </div>

        <div>
          Site: <a href="https://www.w3schools.com/php/">W3Schools (PHP & MySQL)</a>
          <p>
            Looking for a function or need a quick refreshing on joining tables? Take a look here!
          </p> 
        </div>
      </div>
      
      <div class="component-item">
        <h3>Need More Inspiration?</h3>
        <p>Your fellow students have made these great mock-ups:</p>
        <p>
          <a href="http://34.94.95.169/project/mocks/Project/">Dong's Example</a> &nbsp;&nbsp;
          <a href="http://natedamschen.com/mockup/">Nate's Example</a> &nbsp;&nbsp;
          <a href="https://www.figma.com/file/qLkQC2dHDCwYcmAOoMXVzg/COSW30-Final-Project?node-id=7%3A36">Grace's Example</a>
        </p>
        <p>
          Please reach out to Dena, Harry or Grace and we'll help you 
          think things through, be it code or design. Good luck students!
        </p>
      </div>
    </div>
  </main>
<?php include 'includes/footer.php'; ?>