<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Forum-CommunityX.com</title>
    <link rel="stylesheet" href="Forum.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">

  </head>
  <body>
    <div class="full_page">
      <div class="nav_bar">
        <h1><img src="Schoolcrest.png" alt="">
          CommunityX
        </h1>
        <ul>
          <form class=""  method="post">
            <input class="Search_box"  type="text" name="Search_box"  placeholder="Search Finder">
            <button id="Seachfinder" type="submit" name="search_button">Search</button>
        </ul>
      </div>
      <div class="hub-template">
        <h3>The Hub <i class="fas fa-chevron-up"></i><i class="fas fa-chevron-down" onclick="document.getElementById('Post-thread1').style.display='none'"></i></h3>

        <div class="Gen-discuss" style="background-color:#efefef;">
          <h3> <a href="#">  <i class="far fa-comments"></i>
            General Discussion</a></h3>
            <h4>Come hang out and discuss Coventry related content! Please check other subforums before posting</h4>
            <button type="button" name="button" onclick="document.getElementById('Post-thread1').style.display='block'">Create Post</button>
        </div>

        <div id="Post-thread1" hidden>
          <h3>Create Post</h3>
          <h4>Title</h4>
          <h4>Be Specific and make sure that your question or topic is understandable</h4>
          <textarea contenteditable="true" name="name" rows="1" cols="75"></textarea>
          <h3>Message</h3>
          <h4>Include all of the Information necessary or that you want people to comment about</h4>
          <textarea contenteditable="true" name="name" rows="4" cols="75"></textarea>
          <button type="button" name="button">Create Thread</button>
        </div>

        <div class="Tech-discuss" style="background-color:#fff;">
          <h3><a href="#"><i class="far fa-comments"></i>Tech News</a></h3>
          <h4>News and reviews from all around the world</h4>
          <button type="button" name="button" onclick="document.getElementById('Post-thread2').style.display='block'">Create Post</button>
        </div>
        <div id="Post-thread2" hidden>
          <h3>Create Post</h3>
          <h4>Title</h4>
          <h4>Be Specific and make sure that your question or topic is understandable</h4>
          <textarea contenteditable="true" name="name" contenteditable="true" rows="1" cols="75"></textarea>
          <h3>Message</h3>
          <h4>Include all of the Information necessary or that you want people to comment about</h4>
          <textarea contenteditable="true" name="name" rows="4" cols="75"></textarea>
          <button type="button" name="button">Create Thread</button>
        </div>
        <div class="Business-discuss" style="background-color:#efefef;">
          <h3><a href="#"><i class="far fa-comments"></i>Business News</a></h3>
          <h4>News and reviews from all around the world</h4>
          <button type="button" name="button" onclick="document.getElementById('Post-thread3').style.display='block'">Create Post</button>

        </div>
        <div id="Post-thread3" hidden>
          <h3>Create Post</h3>
          <h4>Title</h4>
          <h4>Be Specific and make sure that your question or topic is understandable</h4>
          <textarea contenteditable="true" name="name" rows="1" cols="75"></textarea>
          <h3>Message</h3>
          <h4>Include all of the Information necessary or that you want people to comment about</h4>
          <textarea contenteditable="true" name="name" rows="4" cols="75"></textarea>
          <button type="button" name="button">Create Thread</button>
        </div>
        <div class="Off-discuss" style="background-color:#fff;">
          <h3><a href="#"><i class="far fa-comments"></i>Off Topic</a></h3>
          <h4>News and reviews from all around the world</h4>
          <button type="button" name="button" onclick="document.getElementById('Post-thread4').style.display='block'">Create Post</button>

        </div>
        <div id="Post-thread4" hidden>
          <h3>Create Post</h3>
          <h4>Title</h4>
          <h4>Be Specific and make sure that your question or topic is understandable</h4>
          <textarea contenteditable="true" name="name" rows="1" cols="75"></textarea>
          <h3>Message</h3>
          <h4>Include all of the Information necessary or that you want people to comment about</h4>
          <textarea contenteditable="true" name="name" rows="4" cols="75"></textarea>
          <button type="button" name="button">Create Thread</button>
        </div>
      </form>
      </div>


    </div>

  </body>
</html>
