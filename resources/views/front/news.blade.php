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
                    Our Company
                  </a>
                  <ul class="dropdown-menu">

                    <li id="Company_rout2"class="dropdown-item">
                      <a class=" dropdown-item" href="./ourcampany"
                        >Our Company
                        <p></p
                      ></a>
                    </li>

                    <li class="dropdown-item" id="Food_rout">
                      <a class=" dropdown-item" href="./food"
                        >Food Safety
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

          <p class="hidddentop">
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

      <br /><br />
      <br /><br />

      <div id="newdsdsdsds43" class="container row m-auto d-flex justify-content-left">
        @for($i=0;$i<count($news) -1  ;$i++)
          @if($i% 2 ==0)
            <a
            href="/news/{{$news[$i]->id}}"
              class="card col-lg-4 col-md-4 col-sm-6 col-12 mt-3 hidddenright"
              style="border-radius: 20px; border: none"
              >
              <img
                src="/{{$news[$i]->image}}"
                class="card-img-top"
                alt=""
              />
              <div
                class="card-body"
                style="
                  border-radius: 0 0 20px 20px;
                  background: var(--white-shade, #f4f4f4);
                "
              >
                <p
                  style="
                    color: var(--color, #e30713);
                    font-family: Roboto;
                    font-size: 20px;
                    font-style: normal;
                    font-weight: 600;
                    line-height: 26px;
                  "
                  class="card-text"
                >
                  {{$news[$i]->text1}}
                </p>
              </div>
            </a>
          @else
            <a
            href="/news/{{$news[$i]->id}}"
              class="card col-lg-4 col-md-4 col-sm-6 col-12 mt-3 hidddenbutton"
              style="border-radius: 20px; border: none"
              >
              <img
                src="/{{$news[$i]->image}}"
                class="card-img-top"
                alt=""
              />
              <div
                style="border-radius: 0 0 20px 20px; background: #e30713"
                class="card-body"
              >
                <p
                  style="
                    color: var(--white-shade, #f4f4f4);
                    font-family: Roboto;
                    font-size: 20px;
                    font-style: normal;
                    font-weight: 600;
                    line-height: 26px;
                  "
                  class="card-text"
                >
                  {{$news[$i]->text1}}
                </p>
              </div>
            </a>
          @endif
        @endfor
      </div>

      <br /><br /><br />
      <br /><br /><br />


      

      <a href="/news/{{$news[count($news)-1]->id}}" id="newdsdsdsds4ewqeq3" class="container row m-auto d-flex justify-content-center">
        <div class="col-lg-7 col-md-7 col-5 hidddenright">
          <img
          id="fdfioewr7"
          style="
          width: 100%;
          height: 100%;
          "
          src="/{{$news[count($news)-1]->image}}" alt="" />
        </div>
        <div
          class="col-lg-4 col-md-4 col-7 hidddenleft"
          id="cont_tex33"
        >
          <p
          id="tex_lasss"
          >
          {{$news[count($news)-1]->text1}}
          </p>
        </div>
      </a>

      <br /><br /><br />
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
