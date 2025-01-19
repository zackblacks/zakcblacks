<?php
session_start();
if (isset($_SESSION['username'])) { 

  header("Location: zacktube.php"); 
 
 } 
?>
<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ZackTube Site</title>
    <!-- Linking Unicons For Icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body class="sidebar-hidden">
    <div class="container">
      <!-- Header / Navbar -->
      <header>
        <nav class="navbar">
          <div class="nav-section nav-left">
            <button class="nav-button menu-button">
              <i class="uil uil-bars"></i>
            </button>
            <a href="#" class="nav-logo">
              <img src="7.png" alt="Logo" class="logo-image" />
              <h2 class="logo-text">Zacktube</h2>
            </a>
          </div>

          <div class="nav-section">
            <button class="nav-button search-back-button" id="search-back-button">
              <i class="uil uil-arrow-left"></i>
            </button>
          </div>

          <div class="nav-section nav-center">
            <form action="#" class="search-form">
              <input type="search" placeholder="Search" class="search-input" required />
              <button class="nav-button search-button">
                <i class="uil uil-search"></i>
              </button>
            </form>
            <button class="nav-button mic-button">
              <i class="uil uil-microphone"></i>
            </button>
          </div>

          <div class="nav-section nav-right">
            <button class="nav-button search-button" id="search-button">
              <i class="uil uil-search"></i>
            </button>
            <button class="nav-button theme-button">
              <i class="uil uil-moon"></i>
            </button>
            <img src="page_people/assets/img/admin.png" alt="User Image" class="user-image" />
          </div>
        </nav>
      </header>

      <!-- Main Layout -->
      <main class="main-layout">
        <div class="screen-overlay"></div>

        <!-- Sidebar -->
        <aside class="sidebar">
          <div class="nav-section nav-left">
            <button class="nav-button menu-button">
              <i class="uil uil-bars"></i>
            </button>
            <a href="login.php" class="nav-logo">
              <img src="page_people/assets/img/admin.png" alt="Logo" class="logo-image" />
              <h2 class="logo-text">Login</h2>
            </a>
          </div>

          <div class="links-container">
            <div class="link-section">
              <a href="index.php" class="link-item"> <i class="uil uil-estate"></i> Home </a>
              <a href="login.php" class="link-item"> <i class="uil uil-video"></i> Shorts </a>
              <a href="login.php" class="link-item"> <i class="uil uil-tv-retro"></i> Subscriptions </a>
            </div>
            <div class="section-separator"></div>

            <div class="link-section">
              <h4 class="section-title">You</h4>
              <a href="login.php" class="link-item"> <i class="uil uil-user-square"></i> Your channel </a>
              <a href="login.php" class="link-item"> <i class="uil uil-history"></i> History </a>
              <a href="login.php" class="link-item"> <i class="uil uil-clock"></i> Watch later </a>
            </div>
            <div class="section-separator"></div>

            <div class="link-section">
              <h4 class="section-title">Explore</h4>
              <a href="https://www.youtube.com/feed/trending?bp=6gQJRkVleHBsb3Jl" class="link-item"> <i class="uil uil-fire"></i> Trending </a>
              <a href="https://www.youtube.com/channel/UC-9-kyTW8ZkZNDHQJ6FgpwQ" class="link-item"> <i class="uil uil-music"></i> Music </a>
              <a href="https://www.youtube.com/gaming" class="link-item"> <i class="uil uil-basketball"></i> Gaming </a>
              <a href="https://www.youtube.com/channel/UCEgdi0XIXXZ-qJOFPf4JSKw" class="link-item"> <i class="uil uil-trophy"></i> Sports </a>
            </div>
            <div class="section-separator"></div>

            <div class="link-section">
              <h4 class="section-title">More from YouTube</h4>
              <a href="https://www.youtube.com/premium" class="link-item"> <i class="uil uil-shield-plus"></i> YouTube Plus </a>
              <a href="https://music.youtube.com/" class="link-item"> <i class="uil uil-headphones-alt"></i> YouTube Music </a>
              <a href="https://www.youtubekids.com/?source=youtube_web" class="link-item"> <i class="uil uil-airplay"></i> YouTube Kids </a>
            </div>
            <div class="section-separator"></div>

            <div class="link-section">
              <a href="login.php" class="link-item"> <i class="uil uil-setting"></i> Settings </a>
              <a href="login.php" class="link-item"> <i class="uil uil-file-medical-alt"></i> Report </a>
              <a href="login.php" class="link-item"> <i class="uil uil-question-circle"></i> Help </a>
              <a href="login.php" class="link-item"> <i class="uil uil-exclamation-triangle"></i> Feedback </a>
            </div>
          </div>
        </aside>

        <div class="content-wrapper">
          <!-- Category List -->
          <div class="category-list">
            <button class="category-button active">All</button>
            
            <a href="login.php" class="category-button">R15v3</a>
            <a href="login.php" class="category-button">R15v2</a>
            <a href="login.php" class="category-button">Cinematik</button>
            <a href="login.php" class="category-button">Musik ku</button>
            <a href="login.php" class="category-button">Gaming</button>
            <a href="login.php" class="category-button">motovlog</button>
            <a href="login.php" class="category-button">Mukbang</button>
            <a href="login.php" class="category-button">Tutorial</button>
            <a href="login.php" class="category-button">Wisata</button>
            <a href="login.php" class="category-button">Ngoding Bareng yuk</button>
            <a href="login.php" class="category-button">Dangdutan</button>
            <a href="login.php" class="category-button">Religi</button>
            <a href="login.php" class="category-button">Supra GTR</button>
            <a href="login.php" class="category-button">Cb150r</button>
            <a href="login.php" class="category-button">Pulsar Ns200</button>
          </div>

          <!-- Video List -->
          <div class="video-list">
            <a href="playback/my video/R15v2/1.mp4" class="video-card">
              <div class="thumbnail-container">
                <img src="image_video/R15V2/1.png" alt="Video Thumbnail" class="thumbnail" />
                <p class="duration"></p>
              </div>
              <div class="video-info">
                <img src="profile.jpg" alt="Channel Logo" class="icon" />
                <div class="video-details">
                  <h2 class="title">Cinematik Pertama Motor R15 V2</h2>
                  <p class="channel-name">chanel Cinematik zakky</p>
                  <p class="views"></p>
                </div>
              </div>
            </a>
              <a href="playback/my video/R15v2/2.mp4" class="video-card">
                <div class="thumbnail-container">
                  <img src="image_video/R15V2/2.png" alt="Video Thumbnail" class="thumbnail" />
                  <p class="duration"></p>
                </div>
                <div class="video-info">
                  <img src="profile.jpg" alt="Channel Logo" class="icon" />
                  <div class="video-details">
                    <h2 class="title">Cinematikan malem malem - R15v2</h2>
                    <p class="channel-name">chanel Cinematik zakky</p>
                    <p class="views"></p>
                  </div>
                </div>
              </a>
              <a href="playback/my video/R15v2/3.mp4" class="video-card">
                <div class="thumbnail-container">
                  <img src="image_video/R15V2/3.png" alt="Video Thumbnail" class="thumbnail" />
                  <p class="duration"></p>
                </div>
                <div class="video-info">
                  <img src="profile.jpg" alt="Channel Logo" class="icon" />
                  <div class="video-details">
                    <h2 class="title">Night Ride Pertama ke Jakarta Monas - R15v2</h2>
                    <p class="channel-name">chanel Cinematik zakky</p>
                    <p class="views"></p>
                  </div>
                </div>
              </a>
              <a href="playback/my video/R15v2/4.mp4" class="video-card">
                <div class="thumbnail-container">
                  <img src="image_video/R15V2/4.png" alt="Video Thumbnail" class="thumbnail" />
                  <p class="duration"></p>
                </div>
                <div class="video-info">
                  <img src="profile.jpg" alt="Channel Logo" class="icon" />
                  <div class="video-details">
                    <h2 class="title">Kumpul Bareng sama CBR - R15v2</h2>
                    <p class="channel-name">chanel Cinematik zakky</p>
                    <p class="views"></p>
                  </div>
                </div>
              </a>
              <a href="playback/my video/R15v2/5.mp4" class="video-card">
                <div class="thumbnail-container">
                  <img src="image_video/R15V2/5.png" alt="Video Thumbnail" class="thumbnail" />
                  <p class="duration"></p>
                </div>
                <div class="video-info">
                  <img src="profile.jpg" alt="Channel Logo" class="icon" />
                  <div class="video-details">
                    <h2 class="title">Motor Ter IRIT Yang pernah gw coba - Revo</h2>
                    <p class="channel-name">chanel Cinematik zakky</p>
                    <p class="views"></p>
                  </div>
                </div>
              </a>
              <a href="playback/my video/R15v2/6.mp4" class="video-card">
                <div class="thumbnail-container">
                  <img src="image_video/R15V2/6.png" alt="Video Thumbnail" class="thumbnail" />
                  <p class="duration"></p>
                </div>
                <div class="video-info">
                  <img src="profile.jpg" alt="Channel Logo" class="icon" />
                  <div class="video-details">
                    <h2 class="title">Nyantai Bareng Si Biru - R15v2</h2>
                    <p class="channel-name">chanel Cinematik zakky</p>
                    <p class="views"></p>
                  </div>
                </div>
              </a>
              <a href="playback/my video/R15v2/7.mp4" class="video-card">
                <div class="thumbnail-container">
                  <img src="image_video/R15V2/7.png" alt="Video Thumbnail" class="thumbnail" />
                  <p class="duration"></p>
                </div>
                <div class="video-info">
                  <img src="profile.jpg" alt="Channel Logo" class="icon" />
                  <div class="video-details">
                    <h2 class="title">NR malem ke daerah tangerang - R15v2</h2>
                    <p class="channel-name">chanel Cinematik zakky</p>
                    <p class="views"></p>
                  </div>
                </div>
              </a>
              <a href="playback/my video/R15v2/8.mp4" class="video-card">
                <div class="thumbnail-container">
                  <img src="image_video/R15V2/8.png" alt="Video Thumbnail" class="thumbnail" />
                  <p class="duration"></p>
                </div>
                <div class="video-info">
                  <img src="profile.jpg" alt="Channel Logo" class="icon" />
                  <div class="video-details">
                    <h2 class="title">Istirahat sejenak di tangerang kelapa dua - R15v2</h2>
                    <p class="channel-name">chanel Cinematik zakky</p>
                    <p class="views"></p>
                  </div>
                </div>
              </a>
              <a href="playback/my video/R15v2/9.mp4" class="video-card">
                <div class="thumbnail-container">
                  <img src="image_video/R15V2/9.png" alt="Video Thumbnail" class="thumbnail" />
                  <p class="duration"></p>
                </div>
                <div class="video-info">
                  <img src="profile.jpg" alt="Channel Logo" class="icon" />
                  <div class="video-details">
                    <h2 class="title">Jalan2 kepuncak lewat jonggol - R15v2</h2>
                    <p class="channel-name">chanel Cinematik zakky</p>
                    <p class="views"></p>
                  </div>
                </div>
              </a>
              <a href="playback/my video/R15v2/10.mp4" class="video-card">
                <div class="thumbnail-container">
                  <img src="image_video/R15V2/10.png" alt="Video Thumbnail" class="thumbnail" />
                  <p class="duration"></p>
                </div>
                <div class="video-info">
                  <img src="profile.jpg" alt="Channel Logo" class="icon" />
                  <div class="video-details">
                    <h2 class="title">Nyantai Di Villa Daerah Puncak bogor - R15v2</h2>
                    <p class="channel-name">chanel Cinematik zakky</p>
                    <p class="views"></p>
                  </div>
                </div>
              </a>
              <a href="playback/my video/R15v2/11.mp4" class="video-card">
                <div class="thumbnail-container">
                  <img src="image_video/R15V2/11.png" alt="Video Thumbnail" class="thumbnail" />
                  <p class="duration"></p>
                </div>
                <div class="video-info">
                  <img src="profile.jpg" alt="Channel Logo" class="icon" />
                  <div class="video-details">
                    <h2 class="title">Nyantai Di Villa Daerah Puncak bogor Part2 - R15v2</h2>
                    <p class="channel-name">chanel Cinematik zakky</p>
                    <p class="views"></p>
                  </div>
                </div>
              </a>
              <a href="playback/my video/R15v2/12.mp4" class="video-card">
                <div class="thumbnail-container">
                  <img src="image_video/R15V2/12.png" alt="Video Thumbnail" class="thumbnail" />
                  <p class="duration"></p>
                </div>
                <div class="video-info">
                  <img src="profile.jpg" alt="Channel Logo" class="icon" />
                  <div class="video-details">
                    <h2 class="title">Cinematik Apa JJ genk? - R15v2</h2>
                    <p class="channel-name">chanel Cinematik zakky</p>
                    <p class="views"></p>
                  </div>
                </div>
              </a>
              <a href="playback/my video/R15v2/13.mp4" class="video-card">
                <div class="thumbnail-container">
                  <img src="image_video/R15V2/13.png" alt="Video Thumbnail" class="thumbnail" />
                  <p class="duration"></p>
                </div>
                <div class="video-info">
                  <img src="profile.jpg" alt="Channel Logo" class="icon" />
                  <div class="video-details">
                    <h2 class="title">Sibiru Minta Di Guyur Bae - R15v2</h2>
                    <p class="channel-name">chanel Cinematik zakky</p>
                    <p class="views"></p>
                  </div>
                </div>
              </a>
              <a href="playback/my video/R15v2/14.mp4" class="video-card">
                <div class="thumbnail-container">
                  <img src="image_video/R15V2/14.png" alt="Video Thumbnail" class="thumbnail" />
                  <p class="duration"></p>
                </div>
                <div class="video-info">
                  <img src="profile.jpg" alt="Channel Logo" class="icon" />
                  <div class="video-details">
                    <h2 class="title">Cinematikan dulu dong sehabis diguyur - R15v2</h2>
                    <p class="channel-name">chanel Cinematik zakky</p>
                    <p class="views"></p>
                  </div>
                </div>
              </a>
              <a href="playback/my video/R15v2/15.mp4" class="video-card">
                <div class="thumbnail-container">
                  <img src="image_video/R15V2/15.png" alt="Video Thumbnail" class="thumbnail" />
                  <p class="duration"></p>
                </div>
                <div class="video-info">
                  <img src="profile.jpg" alt="Channel Logo" class="icon" />
                  <div class="video-details">
                    <h2 class="title">Malem Gabut - R15v2</h2>
                    <p class="channel-name">chanel Cinematik zakky</p>
                    <p class="views"></p>
                  </div>
                </div>
              </a>
              <a href="playback/my video/R15v2/16.mp4" class="video-card">
                <div class="thumbnail-container">
                  <img src="image_video/R15V2/16.png" alt="Video Thumbnail" class="thumbnail" />
                  <p class="duration"></p>
                </div>
                <div class="video-info">
                  <img src="profile.jpg" alt="Channel Logo" class="icon" />
                  <div class="video-details">
                    <h2 class="title">Pertama kali ngeliat PESAWAT depan Mata - R15v2</h2>
                    <p class="channel-name">chanel Cinematik zakky</p>
                    <p class="views"></p>
                  </div>
                </div>
              </a>
              <a href="playback/my video/R15v2/17.mp4" class="video-card">
                <div class="thumbnail-container">
                  <img src="image_video/R15V2/17.png" alt="Video Thumbnail" class="thumbnail" />
                  <p class="duration"></p>
                </div>
                <div class="video-info">
                  <img src="profile.jpg" alt="Channel Logo" class="icon" />
                  <div class="video-details">
                    <h2 class="title">Trondol mode Rencana mau pake batok Vixion Old - R15v2</h2>
                    <p class="channel-name">chanel Cinematik zakky</p>
                    <p class="views"></p>
                  </div>
                </div>
              </a>
              <a href="playback/my video/R15v2/18.mp4" class="video-card">
                <div class="thumbnail-container">
                  <img src="image_video/R15V2/18.png" alt="Video Thumbnail" class="thumbnail" />
                  <p class="duration"></p>
                </div>
                <div class="video-info">
                  <img src="profile.jpg" alt="Channel Logo" class="icon" />
                  <div class="video-details">
                    <h2 class="title">Tiba tiba nyore di kampung mamah SUMEDANG - R15v2</h2>
                    <p class="channel-name">chanel Cinematik zakky</p>
                    <p class="views"></p>
                  </div>
                </div>
              </a>
              <a href="playback/my video/R15v2/19.mp4" class="video-card">
                <div class="thumbnail-container">
                  <img src="image_video/R15V2/19.png" alt="Video Thumbnail" class="thumbnail" />
                  <p class="duration"></p>
                </div>
                <div class="video-info">
                  <img src="profile.jpg" alt="Channel Logo" class="icon" />
                  <div class="video-details">
                    <h2 class="title">Sumedang Emng bukan Maen - R15v2</h2>
                    <p class="channel-name">chanel Cinematik zakky</p>
                    <p class="views"></p>
                  </div>
                </div>
              </a>
              <a href="playback/my video/R15v2/20.mp4" class="video-card">
                <div class="thumbnail-container">
                  <img src="image_video/R15V2/20.png" alt="Video Thumbnail" class="thumbnail" />
                  <p class="duration"></p>
                </div>
                <div class="video-info">
                  <img src="profile.jpg" alt="Channel Logo" class="icon" />
                  <div class="video-details">
                    <h2 class="title">Ga kapok kapok Cinematikan Disini - R15v2</h2>
                    <p class="channel-name">chanel Cinematik zakky</p>
                    <p class="views"></p>
                  </div>
                </div>
              </a>
              <a href="playback/my video/R15v2/21.mp4" class="video-card">
                <div class="thumbnail-container">
                  <img src="image_video/R15V2/21.png" alt="Video Thumbnail" class="thumbnail" />
                  <p class="duration"></p>
                </div>
                <div class="video-info">
                  <img src="profile.jpg" alt="Channel Logo" class="icon" />
                  <div class="video-details">
                    <h2 class="title">Sejuknya pagi pagi di appartemen Kamala Lagoon</h2>
                    <p class="channel-name">chanel Cinematik zakky</p>
                    <p class="views"></p>
                  </div>
                </div>
              </a>
              <a href="playback/my video/R15v2/22.mp4" class="video-card">
                <div class="thumbnail-container">
                  <img src="image_video/R15V2/22.png" alt="Video Thumbnail" class="thumbnail" />
                  <p class="duration"></p>
                </div>
                <div class="video-info">
                  <img src="profile.jpg" alt="Channel Logo" class="icon" />
                  <div class="video-details">
                    <h2 class="title">Cinematik bareng si Oyen - R15v2</h2>
                    <p class="channel-name">chanel Cinematik zakky</p>
                    <p class="views"></p>
                  </div>
                </div>
              </a>
              <a href="playback/my video/R15v2/23.mp4" class="video-card">
                <div class="thumbnail-container">
                  <img src="image_video/R15V2/23.png" alt="Video Thumbnail" class="thumbnail" />
                  <p class="duration"></p>
                </div>
                <div class="video-info">
                  <img src="profile.jpg" alt="Channel Logo" class="icon" />
                  <div class="video-details">
                    <h2 class="title">Lagi pengen yang ceper ceper - R15v2</h2>
                    <p class="channel-name">chanel Cinematik zakky</p>
                    <p class="views"></p>
                  </div>
                </div>
              </a>
              <a href="playback/my video/R15v2/24.mp4" class="video-card">
                <div class="thumbnail-container">
                  <img src="image_video/R15V2/24.png" alt="Video Thumbnail" class="thumbnail" />
                  <p class="duration"></p>
                </div>
                <div class="video-info">
                  <img src="profile.jpg" alt="Channel Logo" class="icon" />
                  <div class="video-details">
                    <h2 class="title">Iso lahh kyo ngene iki - R15v2</h2>
                    <p class="channel-name">chanel Cinematik zakky</p>
                    <p class="views"></p>
                  </div>
                </div>
              </a>
              <a href="playback/my video/R15v2/25.mp4" class="video-card">
                <div class="thumbnail-container">
                  <img src="image_video/R15V2/25.png" alt="Video Thumbnail" class="thumbnail" />
                  <p class="duration"></p>
                </div>
                <div class="video-info">
                  <img src="profile.jpg" alt="Channel Logo" class="icon" />
                  <div class="video-details">
                    <h2 class="title">Kangen Jalan ke Puncak bogor - R15v2</h2>
                    <p class="channel-name">chanel Cinematik zakky</p>
                    <p class="views"></p>
                  </div>
                </div>
              </a>
              <a href="playback/my video/R15v2/26.mp4" class="video-card">
                <div class="thumbnail-container">
                  <img src="image_video/R15V2/26.png" alt="Video Thumbnail" class="thumbnail" />
                  <p class="duration"></p>
                </div>
                <div class="video-info">
                  <img src="profile.jpg" alt="Channel Logo" class="icon" />
                  <div class="video-details">
                    <h2 class="title">Udaranya beda banget ini seger banget - R15v2</h2>
                    <p class="channel-name">chanel Cinematik zakky</p>
                    <p class="views"></p>
                  </div>
                </div>
              </a>
              <a href="playback/my video/R15v2/27.mp4" class="video-card">
                <div class="thumbnail-container">
                  <img src="image_video/R15V2/27.png" alt="Video Thumbnail" class="thumbnail" />
                  <p class="duration"></p>
                </div>
                <div class="video-info">
                  <img src="profile.jpg" alt="Channel Logo" class="icon" />
                  <div class="video-details">
                    <h2 class="title">Nyantai Arah pulang ke cikarang dari sumedang - R15v2</h2>
                    <p class="channel-name">chanel Cinematik zakky</p>
                    <p class="views"></p>
                  </div>
                </div>
              </a>
                <a href="playback/my video/r15v3/1.mp4" class="video-card">
                  <div class="thumbnail-container">
                    <img src="image_video/R15v3/1.png" alt="Video Thumbnail" class="thumbnail" />
                    <p class="duration"></p>
                  </div>
                  <div class="video-info">
                    <img src="profile.jpg" alt="Channel Logo" class="icon" />
                    <div class="video-details">
                      <h2 class="title">Cinematik Pertama Motor R15 V3</h2>
                      <p class="channel-name">chanel Cinematik zakky</p>
                      <p class="views"></p>
                    </div>
                  </div>
                </a>
                  <a href="playback/my video/r15v3/2.mp4" class="video-card">
                    <div class="thumbnail-container">
                      <img src="image_video/R15v3/2.png" alt="Video Thumbnail" class="thumbnail" />
                      <p class="duration"></p>
                    </div>
                    <div class="video-info">
                      <img src="profile.jpg" alt="Channel Logo" class="icon" />
                      <div class="video-details">
                        <h2 class="title">Masih Standart BosQ - R15v3</h2>
                        <p class="channel-name">chanel Cinematik zakky</p>
                        <p class="views"></p>
                      </div>
                    </div>
                  </a>
                  <a href="playback/my video/r15v3/3.mp4" class="video-card">
                    <div class="thumbnail-container">
                      <img src="image_video/R15v3/3.png" alt="Video Thumbnail" class="thumbnail" />
                      <p class="duration"></p>
                    </div>
                    <div class="video-info">
                      <img src="profile.jpg" alt="Channel Logo" class="icon" />
                      <div class="video-details">
                        <h2 class="title">Night Ride Pertama ke Jakarta - R15v3</h2>
                        <p class="channel-name">chanel Cinematik zakky</p>
                        <p class="views"></p>
                      </div>
                    </div>
                  </a>
                  <a href="playback/my video/r15v3/4.mp4" class="video-card">
                    <div class="thumbnail-container">
                      <img src="image_video/R15v3/4.png" alt="Video Thumbnail" class="thumbnail" />
                      <p class="duration"></p>
                    </div>
                    <div class="video-info">
                      <img src="profile.jpg" alt="Channel Logo" class="icon" />
                      <div class="video-details">
                        <h2 class="title">Tempat paling enak buat ngilangin Stres ama nih motor- R15v3</h2>
                        <p class="channel-name">chanel Cinematik zakky</p>
                        <p class="views"></p>
                      </div>
                    </div>
                  </a>
                  <a href="playback/my video/r15v3/5.mp4" class="video-card">
                    <div class="thumbnail-container">
                      <img src="image_video/R15v3/5.png" alt="Video Thumbnail" class="thumbnail" />
                      <p class="duration"></p>
                    </div>
                    <div class="video-info">
                      <img src="profile.jpg" alt="Channel Logo" class="icon" />
                      <div class="video-details">
                        <h2 class="title">Masih Standart BosQ - R15v3</h2>
                        <p class="channel-name">chanel Cinematik zakky</p>
                        <p class="views"></p>
                      </div>
                    </div>
                  </a>
                  <a href="playback/my video/r15v3/6.mp4" class="video-card">
                    <div class="thumbnail-container">
                      <img src="image_video/R15v3/6.png" alt="Video Thumbnail" class="thumbnail" />
                      <p class="duration"></p>
                    </div>
                    <div class="video-info">
                      <img src="profile.jpg" alt="Channel Logo" class="icon" />
                      <div class="video-details">
                        <h2 class="title">Masih Standart BosQ - R15v3</h2>
                        <p class="channel-name">chanel Cinematik zakky</p>
                        <p class="views"></p>
                      </div>
                    </div>
                  </a>
                  <a href="playback/my video/r15v3/7.mp4" class="video-card">
                    <div class="thumbnail-container">
                      <img src="image_video/R15v3/7.png" alt="Video Thumbnail" class="thumbnail" />
                      <p class="duration"></p>
                    </div>
                    <div class="video-info">
                      <img src="profile.jpg" alt="Channel Logo" class="icon" />
                      <div class="video-details">
                        <h2 class="title">Masih Standart BosQ - R15v3</h2>
                        <p class="channel-name">chanel Cinematik zakky</p>
                        <p class="views"></p>
                      </div>
                    </div>
                  </a>
                  <a href="playback/my video/r15v3/8.mp4" class="video-card">
                    <div class="thumbnail-container">
                      <img src="image_video/R15v3/8.png" alt="Video Thumbnail" class="thumbnail" />
                      <p class="duration"></p>
                    </div>
                    <div class="video-info">
                      <img src="profile.jpg" alt="Channel Logo" class="icon" />
                      <div class="video-details">
                        <h2 class="title">Masih Standart BosQ - R15v3</h2>
                        <p class="channel-name">chanel Cinematik zakky</p>
                        <p class="views"></p>
                      </div>
                    </div>
                  </a>
                  <a href="playback/my video/r15v3/9.mp4" class="video-card">
                    <div class="thumbnail-container">
                      <img src="image_video/R15v3/9.png" alt="Video Thumbnail" class="thumbnail" />
                      <p class="duration"></p>
                    </div>
                    <div class="video-info">
                      <img src="profile.jpg" alt="Channel Logo" class="icon" />
                      <div class="video-details">
                        <h2 class="title">Masih Standart BosQ - R15v3</h2>
                        <p class="channel-name">chanel Cinematik zakky</p>
                        <p class="views"></p>
                      </div>
                    </div>
                  </a>
                  <a href="playback/my video/r15v3/10.mp4" class="video-card">
                    <div class="thumbnail-container">
                      <img src="image_video/R15v3/10.png" alt="Video Thumbnail" class="thumbnail" />
                      <p class="duration"></p>
                    </div>
                    <div class="video-info">
                      <img src="profile.jpg" alt="Channel Logo" class="icon" />
                      <div class="video-details">
                        <h2 class="title">Masih Standart BosQ - R15v3</h2>
                        <p class="channel-name">chanel Cinematik zakky</p>
                        <p class="views"></p>
                      </div>
                    </div>
                  </a>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>

    <!-- Linking custom script -->
    <script src="script.js"></script>
  </body>
</html>
