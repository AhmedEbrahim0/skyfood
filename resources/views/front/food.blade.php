<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sky Food</title>
    <!-- Website Icon -->
    <link rel="icon" href="/images/skyfood-1-white-1.png" />
    <!-- Font Awesome CSS-->
    <link
      rel="stylesheet"
      href="/Static/fontawesome-free-6.4.2-web/css/all.min.css"
    />
    <!-- CSS File -->
    @include('front.layouts.style')
    <!-- Bootstrap file -->
    <link rel="stylesheet" href="/Static/Bootstrap/css/bootstrap.min.css" />

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />

    <style>
        @media (max-width: 930px){
            #HomePageIMG {
                display: block !important;}
            }

    </style>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  </head>
  <body>
    <div>
      <!-- frist Sec -->
      <div class="home_page">


       
            <div id="HomePageIMG">
                      <img id="HomePageIMG" 
                      src="/{{$background->image}}" alt="" />
                      <video  id="HomePageIMG2" src="/{{$background->image}}" muted loop autoplay ></video>
                      <div class="overlay">
                      </div>
            </div>


        <br /><br />
        <!-- navbar -->
        <nav id="navbar" class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container">
            <a class="navbar-brand" href="./">
              <img
                style="width: 109px; height: 64px; flex-shrink: 0"
                src="./public/images/SKY FOOD 1mainLogo.png"
                alt=""
              />
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
              style="
             border: none!important;
             "
            >
             <img 
             src="./public/images/vectortoglle343.svg" alt="">
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul id="nav_item" class="navbar-nav m-auto mb-lg-0">
                <li id="Home_rout" class="nav-item activation ms-5">
                  <a class="nav-link" aria-current="page" href="./index"
                    >Home
                    <p></p
                  ></a>
                </li>

           

                <li id="Company_rout" class="nav-item dropdown ms-5">
                  <a id="dsdsdsd23" class="nav-link dropdown-toggle"  href="./ourcampany" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Food Safety
                  </a>
                  <ul class="dropdown-menu">

                    <li class="dropdown-item" id="Food_rout">
                      <a class=" dropdown-item" href="./food"
                        >Food Safety
                        <p></p
                      ></a>
                    </li>

                    <li id="Company_rout2"class="dropdown-item">
                      <a class=" dropdown-item" href="./ourcampany"
                        >Our Company
                        <p></p
                      ></a>
                    </li>

                    <li  class="dropdown-item" id="Innvation_rout">
                      <a class=" dropdown-item" href="./innvation"
                        >Innovation
                        <p></p
                      ></a>
                    </li>

                  </ul>
                </li>

                <li id="Brands_rout" class="nav-item ms-5">
                  <a class="nav-link" href="./brands"
                    >Our Brands
                    <p></p
                  ></a>
                </li>

                <li id="News_rout" class="nav-item ms-5">
                  <a class="nav-link" href="./news"
                    >News
                    <p></p
                  ></a>
                </li>

                <li id="Contact_rout" class="nav-item ms-5">
                  <a class="nav-link" href="./contact"
                    >Contact Us
                    <p></p
                  ></a>
                </li>
              </ul>
              <form id="searchForm" class="" role="search">
                <div>
                  <img
                    id="searchicon"
                    src="./public/images/iconsax-linear-searchnormal-1.svg"
                    alt=""
                  />
                  <button id="login_btn" type="submit">Login</button>
                </div>
                <input
                  id="search_input"
                  class="form-control me-2"
                  type="search"
                  placeholder="Search"
                  aria-label="Search"
                />
              </form>
            </div>
          </div>
        </nav>

        <div class="center_text">
          <h1>
            <a
              href=""
              class="typewrite"
              data-period="2000"
              data-type='[ "{{$background->text1}}",
                "{{$background->text1}}",
                 "{{$background->text1}}",
                 "{{$background->text1}}" ]'
            >
              <span class="wrap"></span>
            </a>
          </h1>

          <p class="hidddentop" id="juhuiu" style="font-size: 39px; line-height: 60px">
            {{$background->text2}}
          </p>
        </div>
        <div class="skycirclelogo">
          <img
          class="hidddenbutton"
            id="HomePageLogoIMG"
            src="/images/SKY FOOD 1mainLogo.png"
            alt=""
          />
        </div>
      </div>

      <!-- main content -->
      <br /><br />
      <div>
        <div
          style="border-radius: 10px; background: #f4f4f4"
          class="container row m-auto mt-5 pt-4 mb-5 pb-5"
        >
          <div class="col-lg-6 col-md-6 col-12 m-auto hidddenright">
            <div id="adding_imm">
              <img
                
                src="/{{$food[0]->image}}"
                alt=""
              />
              <div
                id="adding_te"
                style="
                  display: flex;
                  width: 428px;
                  padding: 34px 23px;
                  justify-content: center;
                  align-items: center;
                  gap: 8px;
                  border-radius: 40px;
                  background: var(--white-shade, #f4f4f4);
                  color: #e30713;
                  font-family: Roboto;
                  font-size: 32px;
                  font-style: normal;
                  font-weight: 700;
                  line-height: normal;
                "
              >
                Stringent Quality Control
              </div>
            </div>
          </div>
          <div
            id="tefef"
            style="
              color: var(--color, #e30713);
              font-family: Roboto;
              font-size: 28px;
              font-style: normal;
              font-weight: 700;
              line-height: normal;word-wrap: break-word;
                 word-wrap: break-word;
            "
            class="col-lg-6 col-md-6 col-12 m-auto hidddenleft"
          >
          {{$food[0]->text2}}

          <!-- <button-->
          <!--style="background: none; border: none; color: red;text-decoration: underline;"-->
          <!--onclick="myFunction()" id="myBtn"> Read more</button>-->
          </div>
        </div>

        <br /><br />
        <div>
          <div
            id="searches"
            style="
              color: var(--color, #e30713);
              font-family: Roboto;
              font-size: 40px;
              font-style: normal;
              font-weight: 700;
              line-height: normal;
              display: flex;
              justify-content: center;
            "
          >
            Hygiene and Sanitation
          </div>
          <div class="container row m-auto mt-5 pt-4 mb-5 pb-5">
            <div
              id="hide_imddg"
              class="col-lg-6 col-md-6 col-12 m-auto d-flex gap-3 mb-3 hidddenleft"
            >
              <img
                style="width: 50%"
                src="/{{$food[1]->image}}"
                alt=""
              />
              <img
                style="width: 50%"
                src="/{{$food[1]->details}}"
                alt=""
              />
            </div>
            <div
              id="dsadsa"
              style="
                color: var(--color, #e30713);
                font-family: Roboto;
                font-size: 24px;
                font-style: normal;
                font-weight: 700;
                line-height: normal;
                    word-wrap: break-word;

              "
              class="col-lg-6 col-md-6 col-12 m-auto hidddenright"
            >
            {{$food[1]->text2}} 
            <!--<button-->
            <!--style="background: none; border: none; color: red;text-decoration: underline;"-->
            <!--onclick="myFunction1()" id="myBtn1"> Read more</button>-->
            </div>
            <div
              id="un_hide"
              class="col-lg-6 col-md-6 col-12 m-auto d-flex gap-3"
            >
              <img
              class="hidddentop"
                style="width: 50%"
                src="/{{$food[1]->image}}"
                alt=""
              />
              <img
              class="hidddenbutton"
                style="width: 50%"
                src="/{{$food[1]->details}}"
                alt=""
              />
            </div>
          </div>
        </div>

        <br /><br />
        <div>
          <div id="tab_head">
            <div id="tab_head2" class="container">
              <h1></h1>
              <h2>Traceability and Transparency</h2>
            </div>
          </div>

          <div id="main_tab" class="container row m-auto">
            <div class="col-lg-6 col-md-6 col-6 hidddenleft">
              <img src="/{{$food[2]->image}}"               alt="" />
            </div>
            <div class="col-lg-6 col-md-6 col-6 hidddenright">
            {{$food[2]->text2}}
            </div>
          </div>
        </div>

        <br /><br /><br />
        <div id="fourth_sec_food" class="container row m-auto">
          <div class="col-lg-6 col-md-12 col-12 mt-5 pt-5 hidddenright" >
            <h1 id="bef_bef_last_tit" class="mb-5">Continuous Improvement</h1>
            <p id="visible_p">
             {{$food[3]->text2}}
              
            </p>
          </div>

          <div class="col-lg-6 col-md-12 col-12 hidddenleft">
            <img
              width="100%"
              src="/{{$food[3]->image}}"
              alt=""
            />
          </div>
          <div id="hide_btter" class="col-lg-6 col-md-6 col-12 mt-4 hidddenleft" style="    word-wrap: break-word;">
            <p>
            {{$food[3]->text2}}
            <!--<button-->
            <!--style="background: none; border: none; color: red;text-decoration: underline;"-->
            <!--onclick="myFunction3()" id="myBtn3"> Read more</button>-->
            </p>
          </div>
        </div>

        <br /><br /><br /><br />
        <div>
          <h1 id="bef_last_tit" class="mb-5">Food Safety Protocols</h1>

          <div class="container row m-auto d-flex align-items-center">
            <div class="col-lg-6 col-md-6 col-6 hidddenright">
              <img
                style="width: 100%"
                src="/{{$food[4]->image}}"
                alt=""
              />
            </div>
            <div class="col-lg-6 col-md-6 col-6 hidddenleft">
              <img
                style="width: 100%"
                src="/{{$food[4]->details}}"
                alt=""
              />
            </div>
          </div>
          <div class="hidddenbutton" id="cent_texett">
           {{$food[4]->text2}}
          </div>
        </div>

        <br /><br />
        <br /><br />
        <div id="last_sec_food" class="container hidddenleft">
          <p>
            {{$food[5]->text2}}
          </p>
        </div>
      </div>


      
      <br /><br />
      <!-- footer -->
      <div id="footer">
        <br /><br /><br />

        <div id="space_e22" style="display: flex; justify-content: center">
          <img
            style="width: 152px; height: 89px; flex-shrink: 0"
            src="/images/SKY FOOD 1mainLogo.png"
            alt=""
          />
        </div>
        <br />
        <div class="container m-auto row">
          <ul
            class="col-lg-3 col-md-3 col-sm-6 col-12"
            style="
              color: var(--main-green, #0b6532);
              font-family: Poppins;
              font-size: 10px;
              font-style: normal;
              line-height: normal;
            "
          >
            At SkyFood, we are passionate about creating food experiences that
            delight and inspire. As a food manufacturing company, we take
            immense pride in our diverse portfolio of brands that offer a world
            of flavor and commitment to our customers.
          </ul>
          <ul class="col-lg-3 col-md-3 col-sm-6 col-12">
            <li><h6>Company Profile</h6></li>
            <li><a href="">Home</a></li>
            <li><a href="">News</a></li>
            <li><a href="">Our Company</a></li>
            <li><a href="">Our Brands</a></li>
          </ul>
          <ul class="col-lg-3 col-md-3 col-sm-6 col-12">
            <li><h6>Our Company</h6></li>
            <li><a href="">Food Safety</a></li>
            <li><a href="">Innovation</a></li>
          </ul>
          <ul class="col-lg-3 col-md-3 col-sm-6 col-12">
            <li><h6>Contact Us</h6></li>
            <li><a href="">Airport Road, 4th Bridge,Damascus,Syria</a></li>
            <li>
              <a href="">
                <img src="/images/group-1.svg" alt="" />
                info@skyfood.com</a
              >
            </li>
            <li>
              <a href="">
                <img src="/images/solar-phone-outline.svg" alt="" />+963
                989 223 333</a
              >
            </li>
            <li>
              <br />
              <a href="">
                <img src="/images/vector.svg" alt="" />
                <img
                  style="margin-left: 15px"
                  src="/images/entypo-social-linkedin-with-circle.svg"
                  alt=""
              /></a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Font Awesome JS -->
    <script src="/Static/fontawesome-free-6.4.2-web/js/all.min.js"></script>
    <!-- JS File -->
    <script src="/Static/JS/app1.js"></script>
    <!-- Bootstrap file-->
    <script src="/Static/Bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
