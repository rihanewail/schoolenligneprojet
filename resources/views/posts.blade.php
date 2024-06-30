<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="description" content="function Facebook Post">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/stylep.css">
  <title>Facebook Posts</title>
</head>

<body>

    <li class="navbar-item">

        <form action="{{ url('resource_search') }}" method="GET">
              @csrf
              <div class="input-group mb-3">
                 <input type="text"  class="navbar-link"name="search" placeholder="Search for a product" aria-label="Recipient's username" aria-describedby="basic-addon2">
                 <div class="input-group-append">
                       <input type="submit" class="input-group-text" id="basic-addon2" value="Search">
                 </div>
              </div>


        </form>

          </li>



    <h1>Filtered Resources</h1>
        @if($filteredRessources->isEmpty())
            <p>No resources found.</p>
        @else
            <ul>
                @foreach($filteredRessources as $ressource)
                    <li>
                        <h2>{{ $ressource->nom }}</h2>
                        <p>{{ $ressource->description }}</p>
                        <p>Speciality: {{ $ressource->specialite }}</p>
                        <p>Number of Singles: {{ $ressource->nbrSingl }}</p>
                    </li>
                @endforeach
            </ul>
        @endif

  <div id="mother">

    <div id="option">
      <div class="container">
        <ul>
          <li>
            <img src="assets/save_post.png" class="icon">
            <span class="option-title">Save Post</span>
            <p class="option-title">Add this to your saved items</p>
          </li>
          <li class="turn_off_post">
            <img src="assets/notification.png" class="icon">
            <span class="option-title">Turn off notification for this post.</span>
          </li>
          <li>
            <img src="assets/hide_post.png" class="icon">
            <span class="option-title">Hide post</span>
            <p class="option-title">Add this to your saved items.</p>
          </li>
          <li>
            <img src="assets/snooze.png" class="icon">
            <span class="option-title">Snooze</span>
            <p class="option-title">Temporarily stop seeing posts.</p>
          </li>
          <li>
            <img src="assets/unfollow.png" class="icon">
            <span class="option-title">Unfollow Rejwan Islam Rijvy</span>
            <p class="option-title">Temporarily stop seeing posts.</p>
          </li>
          <li>
            <img src="assets/find_post.png" class="icon">
            <span class="option-title">Find support or report pos</span>
            <p class="option-title">Im concerned about this post.</p>
          </li>
        </ul>
      </div>
    </div>

    <div class="reaction" id="emojies">
      <div class="row">
        <img id="e-like" src="./svg/like.svg" alt="">
        <img id="e-love" src="./svg/love.svg" alt="">
        <img id="e-care" src="./svg/care.svg" alt="">
        <img id="e-haha" src="./svg/haha.svg" alt="">
        <img id="e-wow" src="./svg/wow.svg" alt="">
        <img id="e-sad" src="./svg/sad.svg" alt="">
        <img id="e-angry" src="./svg/angry.svg" alt="">
      </div>
    </div>


    <div class="fb-post" id="fpost0">

      <!-- Top Section -->

      <div class="top-s">
        <div class="top-info">
          <div class="profile-picture">
            <img src="./assets/profile-pic.jpg">
          </div>
          <div class="top-title">
            <div class="profile-name">
              <a href="#">Rejwan Islam Rizvy</a>
            </div>
            <div class="post-time">
              <span>Just Now - </span>
              <img src="./svg/lock.svg">
            </div>
          </div>
          <div class="top-options">
            <button>
              <img src="./svg/three_dot.svg">
            </button>
          </div>
        </div>
        <div class="post-content">
          <strong>Facebook Post</strong><br />
          Hello world <br />
          I'm feeling great today!
        </div>
      </div>

      <!-- Like section -->

      <div class="like-section">
        <div class="top-part">
          <div class="left-part">
            <div class="react">
              <img src="./svg/love.svg" alt="">
              <img src="./svg/care.svg" alt="">
              <img src="./svg/like.svg" alt="">
            </div>
            <div class="id-name">
              <p>You, Saadman and <span>9</span> others</p>
            </div>
          </div>
          <div class="right-part">
            <p><span>1</span>Comments</p>
          </div>
        </div>
        <div class="bottom-part">
          <div class="like-btn" fpost="0">
            <img src="./svg/thumbs-up.svg" alt="">
            <span>Like</span>
          </div>
          <div class="comment-btn" fpost="0">
            <img src="./svg/message-square.svg" alt="">
            <span>Comment</span>
          </div>
          <div class="share-btn">
            <img src="./svg/share-2.svg" alt="">
            <span>Share</span>
          </div>
        </div>
      </div>

      <!-- Comment section-->

      <div class="all-comments">
        <h4>All comments <img src="svg/sort-down.svg" class="all-comments-h4-i" alt=""></h4>
      </div>

      <div class="comment-box">
        <div class="comment-container">
          <div class="comment">
            <img src="assets/maruf.jpg" alt="" class="comment-img">
            <div class="comment-text">
              <div class="comment-header">
                <p><strong>Abdullah Al Maruf</strong></p>
              </div>
              <p>console.log("I am feeling great today!")</p>
            </div>
            <div class="three-dot">
              <img src="svg/three_dot_gray.svg" class="three-dot-img" alt="">
            </div>
          </div>
          <div class="comment-lks">
            <p>
              <span>Like</span><span class="dot"> . </span>
              <span>Reply</span><span class="dot"> . </span>
              <span>Share</span><span class="dot"> . </span>
              <span>2 m</span>
            </p>
          </div>
        </div>
      </div>
      <div class="comment-s">
        <div class="comment-area">
          <div class="comment-profile-pic">
            <img src="assets/profile-pic.jpg" alt="user">
          </div>
          <div class="comment-input-area">
            <input type="text" placeholder="Write a comment..." fpost="0">
            <div class="comment-icon">
              <div class="icon-comment"><img src="svg/smile-1.svg" alt=""></div>
              <div class="icon-comment"><img src="svg/camera.svg" alt=""></div>
              <div class="icon-comment"><img src="svg/gif%20(1).svg" alt=""></div>
              <div class="icon-comment"><img src="svg/circular-sticker.svg" alt=""></div>
            </div>
          </div>
        </div>
      </div>

    </div>


    <div class="fb-post" id="fpost2">

        <!-- Top Section -->

        <div class="top-s">
          <div class="top-info">
            <div class="profile-picture">
              <img src="./assets/soikat.jpg">
            </div>
            <div class="top-title">
              <div class="profile-name">
                <a href="#">Soikot Khan</a>
              </div>
              <div class="post-time">
                <span>1h ago - </span>
                <img src="./svg/lock.svg">
              </div>
            </div>
            <div class="top-options">
              <button>
                <img src="./svg/three_dot.svg">
              </button>
            </div>
          </div>
          <div class="post-content">
            Programming is great!<br><br>
            <img src="https://thumbs.dreamstime.com/b/modern-computer-programming-code-screen-showing-random-scripts-113805394.jpg" alt="">
          </div>
        </div>

        <!-- Like section -->

        <div class="like-section">
          <div class="top-part">
            <div class="left-part">
              <div class="react">
                <img src="./svg/wow.svg" alt="">
                <img src="./svg/love.svg" alt="">
                <img src="./svg/like.svg" alt="">
              </div>
              <div class="id-name">
                <p>You, Maruf and <span>35</span> others</p>
              </div>
            </div>
            <div class="right-part">
              <p><span>0</span>Comments</p>
            </div>
          </div>
          <div class="bottom-part">
            <div class="like-btn" fpost="2">
              <img src="./svg/thumbs-up.svg" alt="">
              <span>Like</span>
            </div>
            <div class="comment-btn" fpost="2">
              <img src="./svg/message-square.svg" alt="">
              <span>Comment</span>
            </div>
            <div class="share-btn">
              <img src="./svg/share-2.svg" alt="">
              <span>Share</span>
            </div>
          </div>
        </div>

        <!-- Comment section-->

        <div class="all-comments">
          <h4>All comments <img src="svg/sort-down.svg" class="all-comments-h4-i" alt=""></h4>
        </div>

        <div class="comment-box">

        </div>
        <div class="comment-s">
          <div class="comment-area">
            <div class="comment-profile-pic">
              <img src="assets/profile-pic.jpg" alt="user">
            </div>
            <div class="comment-input-area">
              <input type="text" placeholder="Write a comment..." fpost="2">
              <div class="comment-icon">
                <div class="icon-comment"><img src="svg/smile-1.svg" alt=""></div>
                <div class="icon-comment"><img src="svg/camera.svg" alt=""></div>
                <div class="icon-comment"><img src="svg/gif%20(1).svg" alt=""></div>
                <div class="icon-comment"><img src="svg/circular-sticker.svg" alt=""></div>
              </div>
            </div>
          </div>
        </div>

      </div>









  </div>
  <script src="js/scriptp.js"></script>
</body>

</html>
