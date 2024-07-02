<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstarp CDN Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>PUBG Download | Game App | Game Website Using Html Css And Javascript</title>
</head>

<body>
    <header>
        <aside>
            <a href="index.php"><h1>Game <i class="bi bi-joystick"></i></h1></a>
            <button>Get Game Prime</button>
            <ul>
                <li class="active_li"><a href="#"><i class="bi bi-archive-fill"></i> Browse</a></li>
                <li><a href="#"><i class="bi bi-clipboard-check-fill"></i> Channels</a></li>
                <li><a href="#"><i class="bi bi-calendar-event-fill"></i> Events</a></li>
                <li><a href="#"><i class="bi bi-people-fill"></i> Friends</a></li>
                <li><a href="#"><i class="bi bi-controller"></i> Games</a></li>
                <li><a href="#"><i class="bi bi-bookmark-check-fill"></i> Store</a></li>
            </ul>
            <!-- subscriptions box start  -->
            <div class="subscriptions">
                <h5>Subscriptions</h5>
                <div class="cards">

                    <div class="card">
                        <div class="img_bx">
                            <img src="user_img/user1.jfif" alt="">
                        </div>
                        <div class="content">
                            <h6>Jahid Khan [KDS CODER]</h6>
                            <p>GTA V</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img_bx">
                            <img src="user_img/user2.png" alt="">
                        </div>
                        <div class="content">
                            <h6>Allie Baker</h6>
                            <p>PUBG</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img_bx">
                            <img src="user_img/user3.png" alt="">
                        </div>
                        <div class="content">
                            <h6>Jacklin Ptasr2536</h6>
                            <p>Fortline</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img_bx">
                            <img src="user_img/4.png" alt="">
                        </div>
                        <div class="content">
                            <h6>Pitar Sarte[klemn]</h6>
                            <p>D-Day</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img_bx">
                            <img src="user_img/5.png" alt="">
                        </div>
                        <div class="content">
                            <h6>Simaran Alen</h6>
                            <p>Contract-Strike</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img_bx">
                            <img src="user_img/6.png" alt="">
                        </div>
                        <div class="content">
                            <h6>Amanda Fariosv</h6>
                            <p>GTA V</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img_bx">
                            <img src="user_img/user2.png" alt="">
                        </div>
                        <div class="content">
                            <h6>Allie Baker</h6>
                            <p>PUBG</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img_bx">
                            <img src="user_img/4.png" alt="">
                        </div>
                        <div class="content">
                            <h6>Pitar Sarte[klemn]</h6>
                            <p>D-Day</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img_bx">
                            <img src="user_img/user1.jfif" alt="">
                        </div>
                        <div class="content">
                            <h6>Jahid Khan [KDS CODER]</h6>
                            <p>GTA V</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img_bx">
                            <img src="user_img/user3.png" alt="">
                        </div>
                        <div class="content">
                            <h6>Jacklin Ptasr2536</h6>
                            <p>Fortline</p>
                        </div>
                    </div>
                    <!-- all card data changed  -->
                </div>
            </div>
        </aside>
        <article>
            <nav>
            <?php if(isset($_SESSION['username'])): ?>
            <div>
                <?php echo htmlspecialchars($_SESSION['username']); ?>
            </div>
            <div>
                Token: <?php echo htmlspecialchars($_SESSION['token']); ?>
            </div>
        <?php else: ?>
            <button onclick="location.href='login_form/register.php'">Register</button>
            <button onclick="location.href='login_form/login.php'">Login</button>
        <?php endif; ?>
                <div class="search">
                    <input type="text" placeholder="Search...">
                    <i class="bi bi-search"></i>
                </div>
                <div class="right_bx">
                    <i class="bi bi-moon-fill" id="day_night"></i>
                    <i class="bi bi-brightness-high-fill" id="day_night2"></i>
                    <i class="bi bi-wifi" id="wifi"></i>
                    <i class="bi bi-gear-fill"></i>
                    <button id="active_battery"><i class="bi bi-battery-half" id="battery_icon"></i> <span id="battery_level">84%</span></button>
                    <div class="user_data">
                        <h6>Syafiq Rasul</h6>
                        <h5>SR</h5>
                        <i class="bi bi-caret-down-fill"></i>
                        <div class="card">
                            <img src="user_img/user_admiin.jpg" alt="">
                            <h6>Syafiq Rasul</h6>
                            <p>GTA V</p>
                            <button>Premium</button>
                            <img class="card_gta_img" src="img/GTA V Premium.webp" alt="">
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Download Box Start  -->
            <div class="download_realted_box">
                <div class="download_box">
                    <div class="img_video_bx">
                        <h6 id="img_change"></h6>
                        <video src="video/pubg.mp4" id="video"></video>
                    </div>
                    <h4>Requirememt</h4>
                    <ul>
                        <li><i class="bi bi-pc-horizontal"></i> 64-bit Windows 7, 8.1, 10, 11</li>
                        <li><i class="bi bi-cpu"></i> Core i3 5th Generation</li>
                        <li><i class="bi bi-gpu-card"></i> 2GB Graphics Card</li>
                        <li><i class="bi bi-memory"></i> Minimum 8GB Memory(Ram) </li>
                        <li><i class="bi bi-hdd-fill"></i> Minimum 50GB Disk Memory</li>
                        <li><i class="bi bi-pci-card"></i> Installed Open GL</li>
                        <li><i class="bi bi-reception-4"></i> A broadband Internet connection</li>
                        <li><i class="bi bi-x-circle-fill"></i> Installed Direct X Any Version</li>
                    </ul>
                    <div class="btns">
                        <a href="#"><i class="bi bi-hdd-fill"></i> 32.5GB</a>
                        <a href="#" id="play"><i class="bi bi-play-fill"></i> Play</a>
                        <a href="Download/pubg.zip" download="Pubg"><i class="bi bi-cloud-arrow-down-fill"></i> Download</a>
                    </div>
                </div>
                <div class="realted_box">
                    <h4>Related</h4>
                    <div class="cards">
                        <div class="card">
                            <img src="img/call-of-duty-mobile.jpg" alt="">
                            <div class="content">
                                <h6>Call Of Duty Mobile</h6>
                                <p>78,4512 Viwes</p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="img/sniper2.jpg" alt="">
                            <div class="content">
                                <h6>Sniper 2 Gost Worrior</h6>
                                <p>64,4582 Viwes</p>
                            </div>
                        </div>
                        <div class="card">
                            <a href="gta_V.php"><img src="img/GTA V Premium.webp" alt=""> </a>
                            <div class="content">
                                <h6>Grand Theft Auto V</h6>
                                <p>89,9512 Viwes</p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="img/war_face.jpg" alt="">
                            <div class="content">
                                <h6>War Face</h6>
                                <p>68,3512 Viwes</p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="img/frontline.jpg" alt="">
                            <div class="content">
                                <h6>Ghost Recon Frontline</h6>
                                <p>66,4512 Viwes</p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="img/need_for_speed.jpg" alt="">
                            <div class="content">
                                <h6>Need For Speed</h6>
                                <p>98,1512 Viwes</p>
                            </div>
                        </div>
                        <!-- All Card Changed Data  -->
                    </div>
                    <div class="join_new_member">
                    </div>
                </div>
            </div>
        </article>
    </header>
    <script src="app.js"></script>
</body>

</html>