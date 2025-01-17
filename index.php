<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstarp CDN Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const username = localStorage.getItem('username');
            const token = localStorage.getItem('token');

            if (username && token) {
                document.getElementById('user-info').innerHTML = `
                    <div>${username}</div>
                    <div>Token: ${token}</div>
                `;
            } else {
                document.getElementById('auth-buttons').innerHTML = `
                    <button onclick="location.href='login_form/register.php'">Register</button>
                    <button onclick="location.href='login_form/login.php'">Login</button>
                `;
            }
        });
    </script>   


    <title>Game App | Game Website Using Html Css And Javascript</title>

</head>

<body>
    <?php
session_start();
?>
    <header>
        <aside>
            <a href="index.php"><h1>Game <i class="bi bi-joystick"></i></h1></a>
            <button>Get Game Prime</button>
            <ul>
                <li class="active_li"><a href="index.php"><i class="bi bi-archive-fill"></i> Browse</a></li>
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
                            <h6>Jahid Khan </h6>
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
            <!-- Game Box Start  -->
            <div class="game1">
                <div class="btns">
                    <i class="bi bi-caret-left-fill" id="game_bx_1_left_btn"></i>
                    <i class="bi bi-caret-right-fill" id="game_bx_1_right_btn"></i>
                </div>
                <h3>Recommend For You</h3>
                <div class="game_bx" id="game_bx_1">
                    <div class="card">
                        <a href="gta_V.php"><img src="img/GTA V Premium.webp" alt=""> </a>
                        <div class="content">
                            <div class="left">
                                <h5>Grand Theft Auto V</h5>
                                <p>Syafiq Rasul</p>
                            </div>
                            <h6>354,452 Views</h6>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/frontline.jpg" alt="">
                        <div class="content">
                            <div class="left">
                                <h5>Ghost Recon Frontline</h5>
                                <p>Ali Ahmmed[Gamer]</p>
                            </div>
                            <h6>881,646 Views</h6>
                        </div>
                    </div>

                    <div class="card">
                        <img src="img/sniper2.jpg" alt="">
                        <div class="content">
                            <div class="left">
                                <h5>Sniper 2 Ghost Warrior</h5>
                                <p>Carry Minati[Gamers]</p>
                            </div>
                            <h6>354,452 Views</h6>
                        </div>
                    </div>
                    <div class="card">
                        <a href="pubg.php"> <img src="img/pubg.jpg" alt=""></a>
                        <div class="content">
                            <div class="left">
                                <h5>PUBG</h5>
                                <p>Nabil Khan[Pro Gamer]</p>
                            </div>
                            <h6>354,452 Views</h6>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/call-of-duty-mobile.jpg" alt="">
                        <div class="content">
                            <div class="left">
                                <h5>Call Of Duty</h5>
                                <p>Solver[47]</p>
                            </div>
                            <h6>854,152 Views</h6>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/need_for_speed.jpg" alt="">
                        <div class="content">
                            <div class="left">
                                <h5>Need For Speed</h5>
                                <p>Piter Parker[Gam]</p>
                            </div>
                            <h6>784,452 Views</h6>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/war_face.jpg" alt="">
                        <div class="content">
                            <div class="left">
                                <h5>Warface undercover</h5>
                                <p>Siwani [PTC]</p>
                            </div>
                            <h6>354,452 Views</h6>
                        </div>
                    </div>
                    <!-- all card data changed  -->
                </div>
            </div>
            <!-- game box 2 start  -->
            <div class="game2">
                <h3>Most Played</h3>
                <div class="games_bx">
                    <div class="card">
                        <img src="img/unchartes4.jpg" alt="">
                        <div class="content">
                            <h6>Uncharted 4</h6>
                            <p>4512 Streamers</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/call_of_duty.jpg" alt="">
                        <div class="content">
                            <h6>Call Of Duty</h6>
                            <p>6118 Streamers</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/igi.jpg" alt="">
                        <div class="content">
                            <h6>Project IGI</h6>
                            <p>9652 Streamers</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/battlefield.jpg" alt="">
                        <div class="content">
                            <h6>Battlefield</h6>
                            <p>8552 Streamers</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/hitman.jpg" alt="">
                        <div class="content">
                            <h6>Hitman</h6>
                            <p>3712 Streamers</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/fan_cry_3.jpg" alt="">
                        <div class="content">
                            <h6>Fan Cry 3</h6>
                            <p>7562 Streamers</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/brother_in_ arms.jpg" alt="">
                        <div class="content">
                            <h6>Brother In Arms</h6>
                            <p>9516 Streamers</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/medal-of-honor.jpg" alt="">
                        <div class="content">
                            <h6>Medal Of Horor</h6>
                            <p>2712 Streamers</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/halo.jpg" alt="">
                        <div class="content">
                            <h6>Halo KAI-125</h6>
                            <p>8542 Streamers</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/max payne.jpg" alt="">
                        <div class="content">
                            <h6>Max Payen</h6>
                            <p>9542 Streamers</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/triangle-strategy.jpg" alt="">
                        <div class="content">
                            <h6>Triangle Strategy</h6>
                            <p>3842 Streamers</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/minecraft.jpg" alt="">
                        <div class="content">
                            <h6>Minecraft</h6>
                            <p>9836 Streamers</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/cyberpunk.jpg" alt="">
                        <div class="content">
                            <h6>Cyberpunk</h6>
                            <p>6842 Streamers</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/the last of us.jpg" alt="">
                        <div class="content">
                            <h6>The LAst Of US</h6>
                            <p>3412 Streamers</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/metal-gear-solid-5.jpg" alt="">
                        <div class="content">
                            <h6>Metal Gear Solid 5</h6>
                            <p>8422 Streamers</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/sanadreas.jfif" alt="">
                        <div class="content">
                            <h6>Sanadress</h6>
                            <p>9562 Streamers</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/zelda.jpg" alt="">
                        <div class="content">
                            <h6>Zelda</h6>
                            <p>8564 Streamers</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/elden ring.jpg" alt="">
                        <div class="content">
                            <h6>Elden Ring</h6>
                            <p>7584 Streamers</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/unchartes4.jpg" alt="">
                        <div class="content">
                            <h6>Uncharted 4</h6>
                            <p>4512 Streamers</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/call_of_duty.jpg" alt="">
                        <div class="content">
                            <h6>Call Of Duty</h6>
                            <p>6118 Streamers</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/igi.jpg" alt="">
                        <div class="content">
                            <h6>Project IGI</h6>
                            <p>9652 Streamers</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/battlefield.jpg" alt="">
                        <div class="content">
                            <h6>Battlefield</h6>
                            <p>8552 Streamers</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/hitman.jpg" alt="">
                        <div class="content">
                            <h6>Hitman</h6>
                            <p>3712 Streamers</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/fan_cry_3.jpg" alt="">
                        <div class="content">
                            <h6>Fan Cry 3</h6>
                            <p>7562 Streamers</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/brother_in_ arms.jpg" alt="">
                        <div class="content">
                            <h6>Brother In Arms</h6>
                            <p>9516 Streamers</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/medal-of-honor.jpg" alt="">
                        <div class="content">
                            <h6>Medal Of Horor</h6>
                            <p>2712 Streamers</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/halo.jpg" alt="">
                        <div class="content">
                            <h6>Halo KAI-125</h6>
                            <p>8542 Streamers</p>
                        </div>
                    </div>
                    <!-- All Card Data Changed  -->
                </div>
            </div>
        </article>
    </header>
    <script src="app.js"></script>
    <script src="game_box.js"></script>
</body>

</html>