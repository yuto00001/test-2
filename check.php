<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KeioFashionCreator</title>
    <!-- <link rel="stylesheet" href="css/common.css" /> -->
    <link href="js/slick-theme.css" rel="stylesheet" type="text/css" />
    <link href="js/slick.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
    <link rel="stylesheet" href="css/icon.css" />
    <link rel="stylesheet" href="css/hamburger.css" />
    <link rel="stylesheet" href="css/tab.css" />
    <link rel="stylesheet" href="css/slider.css" />
    <link rel="stylesheet" href="css/pagination.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/common.css" />
    <script type="text/javascript" src="js/slick.min.js"></script>
  </head>
  <body>
    <div class="wrapper">
      <?php
        include('_header.php');
      ?>
      <section>
        <figure class="kfcLogo">
          <a
            href="../public/index.html"
          >
            <img
              src="../public/css/img/pic01.png"
              alt="logo"
              height="40px"
            />
          </a>
        </figure>
        <nav class="display menuContainer">
          <ul class="tabMenu">
            <li class="tab">
              <p>
                <a
                  href="/Users/sakaguchiyuto/Desktop/development/keio fashion creator/concept.html"
                  >CONCEPT</a
                >
              </p>
            </li>
            <li class="tab">
              <p>
                <a
                  href="/Users/sakaguchiyuto/Desktop/KeioFashionCreator/public/movie.html"
                  >MOVIE</a
                >
              </p>
              <section class="tabContent tabHidden" id="about">
                <ul>
                  <li><a href="">2019-impression-</a></li>
                  <li><a href="">2018-日常の再考-</a></li>
                  <li><a href="">2018-日常の再考-</a></li>
                  <li><a href="">2018-日常の再考-</a></li>
                </ul>
              </section>
            </li>
            <li class="tab">
              <p>
                <a
                  href="/Users/sakaguchiyuto/Desktop/KeioFashionCreator/public/artworks.html"
                  >ART WORKS</a
                >
              </p>
              <section class="tabContent tabHidden" id="about">
                <ul>
                  <li><a href="">2020-poster-</a></li>
                  <li><a href="">2019-poster-</a></li>
                  <li><a href="">2019-Ad Contents-</a></li>
                </ul>
              </section>
            </li>
            <li class="tab">
              <p>
                <a
                  href="/Users/sakaguchiyuto/Desktop/KeioFashionCreator/public/blog.html"
                  >BLOG</a
                >
              </p>
            </li>
            <li class="tab">
              <p>
                <a
                  href="/Users/sakaguchiyuto/Desktop/KeioFashionCreator/public/collection.html"
                  >COLLECTION</a
                >
              </p>
              <section class="tabContent tabHidden" id="about">
                <ul>
                  <li><a href="">2019-impression-</a></li>
                  <li><a href="">2018-日常の再考-</a></li>
                  <li><a href="">2018-日常の再考-</a></li>
                  <li><a href="">2018-日常の再考-</a></li>
                </ul>
              </section>
            </li>
            <li class="tab">
              <p>
                <a
                  href="/Users/sakaguchiyuto/Desktop/KeioFashionCreator/public/news.html"
                  >NEWS</a
                >
              </p>
            </li>
          </ul>
        </nav>
      </section>
      <main>
        <section>
          <article class="movie">
            <div class="movieTitle">
              <p>The 2019 ShowThema</p>
              <!-- <p>ShowThema</p> -->
              <h2>INPRESSION</h2>
            </div>
            <a
              href="../public/index.html"
            >
              <div class="moviePosition">
                <div class="circleBack">
                  <p>PLAY</p>
                </div>
              </div>
            </a>
            <div class="moviePosition">
              <a
                class="viewAll"
                href="file:///Users/sakaguchiyuto/Desktop/development/keio%20fashion%20creator/movie.html"
                >VIEW ALL→
              </a>
            </div>
          </article>
          <article class="movie">
            <p class="display"></p>
            <div class="movieTitle">
              <p>The 2018 ShowThema</p>
              <h2>日常の再考</h2>
            </div>
            <a
              href="../public/index.html"
            >
              <div class="moviePosition">
                <div class="circleBack">
                  <p>PLAY</p>
                </div>
              </div>
            </a>
            <div class="moviePosition">
              <a
                class="viewAll"
                href="file:///Users/sakaguchiyuto/Desktop/development/keio%20fashion%20creator/movie.html"
                >VIEW ALL→
              </a>
            </div>
          </article>
        </section>
        <section class="imageZone">
          <h2>COLLECTION</h2>
          <article class="collectionImage">
            <img
              src="../public/css/img/pic03.png"
              alt=""
            />
            <img
              src="../public/css/img/pic03.png"
              alt=""
            />
            <img
              src="../public/css/img/pic03.png"
              alt=""
            />
            <img
              src="../public/css/img/pic03.png"
              alt=""
            />
            <img
              src="../public/css/img/pic03.png"
              alt=""
            />
            <img
              src="../public/css/img/pic03.png"
              alt=""
            />
            <img
              class="display"
              src="../public/css/img/pic03.png"
              alt=""
            />
            <img
              class="display"
              src="../public/css/img/pic03.png"
              alt=""
            />
            <a
              href="file:///Users/sakaguchiyuto/Desktop/development/keio%20fashion%20creator/collection.html"
              class="viewAll underViewAll"
              >VIEW ALL→</a
            >
          </article>
          <h2>ART WORKS</h2>
          <article class="collectionImage">
            <img
              src="../public/css/img/pic03.png"
              alt=""
            />
            <img
              src="../public/css/img/pic03.png"
              alt=""
            />
            <img
              src="../public/css/img/pic03.png"
              alt=""
            />
            <img
              src="../public/css/img/pic03.png"
              alt=""
            />
            <img
              src="../public/css/img/pic03.png"
              alt=""
            />
            <img
              src="../public/css/img/pic03.png"
              alt=""
            />
            <img
              class="display"
              src="../public/css/img/pic03.png"
              alt=""
            />
            <img
              class="display"
              src="../public/css/img/pic03.png"
              alt=""
            />
            <a
              href="/Users/sakaguchiyuto/Desktop/KeioFashionCreator/public/artworks.html"
              class="viewAll underViewAll"
              >VIEW ALL→</a
            >
          </article>
        </section>
        <section class="blog">
          <article class="blogArticle ">
            <img
              class="display"
              src="../public/css/img/pic02.png"
              alt=""
            />
            <div class="blogText">
              <h3>
                記事のタイトル記事のタイトル記事のタイトル
              </h3>
              <p class="assistanceText display">
                投稿者と日時とか小文字で書いてあるようなやつ
              </p>
              <p class="assistanceText">
                本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チ...
              </p>
            </div>
          </article>
          <article class="blogArticle ">
            <img
              class="display"
              src="../public/css/img/pic02.png"
              alt=""
            />
            <div class="blogText">
              <h3>
                記事のタイトル記事のタイトル記事のタイトル
              </h3>
              <p class="assistanceText display">
                投稿者と日時とか小文字で書いてあるようなやつ
              </p>
              <p class="assistanceText">
                本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チ...
              </p>
            </div>
          </article>
          <article class="blogArticle ">
            <img
              class="display"
              src="../public/css/img/pic02.png"
              alt=""
            />
            <div class="blogText">
              <h3>
                記事のタイトル記事のタイトル記事のタイトル
              </h3>
              <p class="assistanceText display">
                投稿者と日時とか小文字で書いてあるようなやつ
              </p>
              <p class="assistanceText">
                本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チ...
              </p>
            </div>
          </article>
          <article class="blogArticle ">
            <img
              class="display"
              src="../public/css/img/pic02.png"
              alt=""
            />
            <div class="blogText">
              <h3>
                記事のタイトル記事のタイトル記事のタイトル
              </h3>
              <p class="assistanceText display">
                投稿者と日時とか小文字で書いてあるようなやつ
              </p>
              <p class="assistanceText">
                本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チ...
              </p>
            </div>
          </article>
          <article class="blogArticle ">
            <img
              class="display"
              src="../public/css/img/pic02.png"
              alt=""
            />
            <div class="blogText">
              <h3>
                記事のタイトル記事のタイトル記事のタイトル
              </h3>
              <p class="assistanceText display">
                投稿者と日時とか小文字で書いてあるようなやつ
              </p>
              <p class="assistanceText">
                本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チ...
              </p>
            </div>
          </article>
          <article class="blogArticle ">
            <img
              class="display"
              src="../public/css/img/pic02.png"
              alt=""
            />
            <div class="blogText">
              <h3>
                記事のタイトル記事のタイトル記事のタイトル
              </h3>
              <p class="assistanceText display">
                投稿者と日時とか小文字で書いてあるようなやつ
              </p>
              <p class="assistanceText">
                本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チ...
              </p>
            </div>
          </article>
          <article class="blogArticle">
            <img
              class="display"
              src="../public/css/img/pic02.png"
              alt=""
            />
            <div class="blogText">
              <h3>
                記事のタイトル記事のタイトル記事のタイトル
              </h3>
              <p class="assistanceText display">
                投稿者と日時とか小文字で書いてあるようなやつ
              </p>
              <p class="assistanceText">
                本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チ...
              </p>
            </div>
          </article>
          <article class="blogArticle">
            <img
              class="display"
              src="../public/css/img/pic02.png"
              alt=""
            />
            <div class="blogText">
              <h3>
                記事のタイトル記事のタイトル記事のタイトル
              </h3>
              <p class="assistanceText display">
                投稿者と日時とか小文字で書いてあるようなやつ
              </p>
              <p class="assistanceText">
                本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チラ見せ本文チ...
              </p>
            </div>
          </article>
          <a
            class="viewAll blogText"
            href="file:///Users/sakaguchiyuto/Desktop/development/keio%20fashion%20creator/blog.html"
            >VIEW ALL→
          </a>
          <ul class="blogButton"></ul>
        </section>
        <section class="concept">
          <h2>CONCEPT</h2>
          <article>
            <h3>ファッションショーのあり方の再定義</h3>
            <p>
              服を売らなければならないファッションブランドがしていない、もしくはしたくてもできないような「服」や「ファッション」における革新的・実験的なことをショーやインスタレーションで行う。
            </p>
            <p>
              人を包むという意味では衣服と空間は共通しており、
              ファッションショーでは 「服」と その服を着る「人」、
              その人を包む「空間」 というこの三つの関係性を重視する。
            </p>
          </article>
          <article>
            <h3>「服」や「ファッション」の価値観を深める</h3>
            <p>
              実際に服のパターンや縫製等を自分の手で作るということから、自分が普段身につける服の構造やその製作過程を知り、服やファッションに対する価値観を深める。
            </p>
          </article>
        </section>
        <section class="post">
          <article>
            <img
              src="../public/css/img/pic00.png"
              alt=""
            />
            <div class="postText">
              <h2>DIRECTOR</h2>
              <p class="assistanceText">
                舞台装置・照明・音響などの演出を考え、ファッションショーの空間作り全般を担います。また、団体の世界観を伝えるための動画も制作します。
              </p>
            </div>
          </article>
          <article>
            <img
              src="/Users/sakaguchiyuto/Desktop/KeioFashionCreator/public/css/img/pic00.png"
              alt=""
            />
            <div class="postText">
              <h2>PRESS</h2>
              <p class="assistanceText">
                舞台装置・照明・音響などの演出を考え、ファッションショーの空間作り全般を担います。また、団体の世界観を伝えるための動画も制作します。
              </p>
            </div>
          </article>
          <article>
            <img
              src="/Users/sakaguchiyuto/Desktop/KeioFashionCreator/public/css/img/pic00.png"
              alt=""
            />
            <div class="postText">
              <h2>DESIGNER</h2>
              <p class="assistanceText">
                舞台装置・照明・音響などの演出を考え、ファッションショーの空間作り全般を担います。また、団体の世界観を伝えるための動画も制作します。
              </p>
            </div>
          </article>
          <article>
            <img
              src="/Users/sakaguchiyuto/Desktop/KeioFashionCreator/public/css/img/pic00.png"
              alt=""
            />
            <div class="postText">
              <h2>MODEL MANAGER</h2>
              <p class="assistanceText">
                舞台装置・照明・音響などの演出を考え、ファッションショーの空間作り全般を担います。また、団体の世界観を伝えるための動画も制作します。
              </p>
            </div>
          </article>
          <!-- <ul>
          <li class="circleBack topShelf">DIRECTOR</li>
          <li class="circleBack topShelf">PRESS</li>
          <li class="circleBack">DESIGNER</li>
          <li class="circleBack">MODEL MANAGER</li>
        </ul> -->
        </section>
        <section class="post team">
          <div class="growStyle">
            <article>
              <img
                src="../public/css/img/pic00.png"
                alt=""
              />
              <div class="postText">
                <h2>広告・技法研究</h2>
                <p class="assistanceText">
                  舞台装置・照明・音響などの演出を考え、ファッションショーの空間作り全般を担います。また、団体の世界観を伝えるための動画も制作します。
                </p>
              </div>
            </article>
            <article>
              <img
                src="../public/css/img/pic00.png"
                alt=""
              />
              <div class="postText">
                <h2>文化文藝部</h2>
                <p class="assistanceText">
                  舞台装置・照明・音響などの演出を考え、ファッションショーの空間作り全般を担います。また、団体の世界観を伝えるための動画も制作します。
                </p>
              </div>
            </article>
          </div>
          <div class="growStyle">
            <article>
              <img
                src="../public/css/img/pic00.png"
                alt=""
              />
              <div class="postText">
                <h2>メイク</h2>
                <p class="assistanceText">
                  舞台装置・照明・音響などの演出を考え、ファッションショーの空間作り全般を担います。また、団体の世界観を伝えるための動画も制作します。
                </p>
              </div>
            </article>
            <article>
              <img
                src="../public/css/img/pic00.png"
                alt=""
              />
              <div class="postText">
                <h2>スタイリング</h2>
                <p class="assistanceText">
                  舞台装置・照明・音響などの演出を考え、ファッションショーの空間作り全般を担います。また、団体の世界観を伝えるための動画も制作します。
                </p>
              </div>
            </article>
          </div>
          <div class="growStyle">
            <article>
              <img
                src="../public/css/img/pic00.png"
                alt=""
              />
              <div class="postText">
                <h2>撮影</h2>
                <p class="assistanceText">
                  舞台装置・照明・音響などの演出を考え、ファッションショーの空間作り全般を担います。また、団体の世界観を伝えるための動画も制作します。
                </p>
              </div>
            </article>
            <article>
              <img
                src="../public/css/img/pic00.png"
                alt=""
              />
              <div class="postText">
                <h2>広告・技法研究</h2>
                <p class="assistanceText">
                  舞台装置・照明・音響などの演出を考え、ファッションショーの空間作り全般を担います。また、団体の世界観を伝えるための動画も制作します。
                </p>
              </div>
            </article>
          </div>
        </section>
        <section class="display slick">
          <ul class="slider">
            <li>
              <a href="#">
                <img src="css/img/pic00.png" alt="image01" />
                <div class="memberText">
                  <p class="assistanceText">役職</p>
                  <h3>名前名前</h3>
                  <p>
                    アンケート本文アンケート本文アンケート本文アンケート本文
                  </p>
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <img src="css/img/pic00.png" alt="image01" />
                <div class="memberText">
                  <p class="assistanceText">役職</p>
                  <h3>名前名前</h3>
                  <p>
                    アンケート本文アンケート本文アンケート本文アンケート本文
                  </p>
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <img src="css/img/pic00.png" alt="image01" />
                <div class="memberText">
                  <p class="assistanceText">役職</p>
                  <h3>名前名前</h3>
                  <p>
                    アンケート本文アンケート本文アンケート本文アンケート本文
                  </p>
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <img src="css/img/pic00.png" alt="image01" />
                <div class="memberText">
                  <p class="assistanceText">役職</p>
                  <h3>名前名前</h3>
                  <p>
                    アンケート本文アンケート本文アンケート本文アンケート本文
                  </p>
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <img src="css/img/pic00.png" alt="image01" />
                <div class="memberText">
                  <p class="assistanceText">役職</p>
                  <h3>名前名前</h3>
                  <p>
                    アンケート本文アンケート本文アンケート本文アンケート本文
                  </p>
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <img src="css/img/pic00.png" alt="image01" />
                <div class="memberText">
                  <p class="assistanceText">役職</p>
                  <h3>名前名前</h3>
                  <p>
                    アンケート本文アンケート本文アンケート本文アンケート本文
                  </p>
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <img src="css/img/pic00.png" alt="image01" />
                <div class="memberText">
                  <p class="assistanceText">役職</p>
                  <h3>名前名前</h3>
                  <p>
                    アンケート本文アンケート本文アンケート本文アンケート本文
                  </p>
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <img src="css/img/pic00.png" alt="image01" />
                <div class="memberText">
                  <p class="assistanceText">役職</p>
                  <h3>名前名前</h3>
                  <p>
                    アンケート本文アンケート本文アンケート本文アンケート本文
                  </p>
                </div>
              </a>
            </li>
          </ul>
          <div class="viewButton">
            <a
              class="viewAll blogText"
              href="/Users/sakaguchiyuto/Desktop/KeioFashionCreator/public/member.html"
              >VIEW ALL
            </a>
          </div>
        </section>
        <footer>
          <div class="footerLink">
            <div class="pageLink">
              <ul>
                <a href=""><li>pageLink</li></a>
                <a href=""><li>pageLink</li></a>
                <a href=""><li>pageLink</li></a>
                <a href=""><li>pageLink</li></a>
              </ul>
              <ul>
                <a href=""><li>pageLink</li></a>
                <a href=""><li>pageLink</li></a>
                <a href=""><li>pageLink</li></a>
                <a href=""><li>pageLink</li></a>
              </ul>
            </div>
            <ul class="display">
              <li>sns</li>
              <li>sns</li>
            </ul>
            <div class="snsIcon">
              <a href="https://www.instagram.com/keio_fashioncreator/?hl=ja"
                ><img
                  src="/Users/sakaguchiyuto/Desktop/KeioFashionCreator/public/css/img/glyph-logo_May2016.png"
                  alt=""
              /></a>
              <a href="https://twitter.com/keio_fc"
                ><img
                  src="/Users/sakaguchiyuto/Desktop/KeioFashionCreator/public/css/img/Twitter_Logo_WhiteOnImage.png"
                  alt=""
              /></a>
            </div>
          </div>
          <div class="sponsorImage">
            <a href=""
              ><img
                src="../public/css/img/pic02.png"
                alt="SPONSOR"
            /></a>
            <a href=""
              ><img
                src="../public/css/img/pic02.png"
                alt="SPONSOR"
            /></a>
          </div>
          <div class="logo">
            <a
              href="file:///Users/sakaguchiyuto/Desktop/KeioFashionCreator/public/index.html"
              ><img
                src="../public/css/img/pic01.png"
                alt=""
            /></a>
            <ul>
              <li>KEIO</li>
              <li>FASHION</li>
              <li>CREATOR</li>
            </ul>
          </div>
        </footer>
      </main>
    </div>
    <script src="js/hamburger.js"></script>
    <script src="js/tab.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/pagination.js"></script>
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>
  </body>
</html>
