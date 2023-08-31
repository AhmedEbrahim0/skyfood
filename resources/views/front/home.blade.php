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

    @include('front.layouts.style')
    <!-- CSS File -->
    <!-- Bootstrap file -->
    <link rel="stylesheet" href="/Static/Bootstrap/css/bootstrap.min.css" />


    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    

    
    

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

      <!-- second sec -->
      <div class="second_sec">
        <h1 id="OurBrands">Our Brands</h1>
        <br /><br /><br /><br />
        <div class="container row m-auto gap-5">
          @for($i=0;$i<count($brands);$i++)
            @if($i % 2==0)
              <a id="card_det" class="card col hidddenright"  href="/brands/{{$brands[$i]->id}}">
                  <img
                    style="height: 150px"
                    src="/{{$brands[$i]->logo}}"
                    class="card-img-top"
                    alt="..."
                  />
                  <div id="card_info" class="card-body">
                    <h5 class="card-title">{{$brands[$i]->text1}}</h5>
                    <p class="card-text">
                      {{$brands[$i]->text2}}
                    </p>
                  </div>
              
              </a>
            @else
                <a href="/brands/{{$brands[$i]->id}}" id="card_det" class="card col hidddenbutton">
                  <img
                    style="height: 150px"
                    src="/images/logo-white-2.png"
                    class="card-img-top"
                    alt="..."
                  />
                  <div id="card_info2" class="card-body">
                    <h5 class="card-title">{{$brands[$i]->text1}}</h5>
                    <p class="card-text">
                      {{$brands[$i]->text2}}
                    </p>
                  </div>
                </a>
            @endif
          @endfor
        </div>
        <br /><br /><br /><br />
      </div>

      <!-- third sec -->
      <div id="Third_sec">
        <div
          id="Third_Sec_info"
          class="container row m-auto d-flex align-items-center"
        >
          <div
            class="col-lg-6 col-md-6 col-12 mb-5 hidddenright"
            id="frist_half"
          >
            <img id="people_img" src="/images/container.png" alt="" />
            <img id="sec_img" src="/images/cow-normal-11.png" alt="" />
          </div>
          <div
            class="col-lg-6 col-md-6 col-12 hidddenleft"
            style="text-align: center"
          >
            <h1 id="third_tit">A World of Flavor and Commitment</h1>
            <br />
            <p id="third_tex">
              At SkyFood, we are proud owners of some of the most beloved food
              brands that bring joy to people's lives. Our passion for
              excellence and unwavering commitment to quality shine through in
              every product we create.
            </p>
            <br />

          </div>
        </div>
      </div>

      <br /><br /><br />

<!-- fourth sec -->
<div>
        <div
          id="forth_Sec_info"
          class="container row m-auto d-flex align-items-center"
        >
          <div class="col-lg-6 col-md-12 col-12 hidddentop" id="four_fristHalf">
            <h1>Meet our Brands</h1>
            <p>
            {{$eachBrand->text2}}
            </p>
            <button
              style="
                border-radius: 6px;
                background: var(--green-shade, #4d775f);
                padding: 12px 24px;
                color: #fff;
                font-family: Roboto;
                font-size: 12px;
                font-style: normal;
                font-weight: 500;
                line-height: 140%;
                border: none;
              "
            >
              See All
            </button>
          </div>
          <div class="col-lg-6 col-md-12 col-12 mt-5" id="four_secondHalf">
            <div id="fourth_card_det" class="card hidddenleft">
              <div class="card-body row d-flex align-items-center m-auto justify-content-center">
             <div class="col-lg-6 col-md-6 col-7">
              <h5 class="card-title">{{$brands[0]->text1}}</h5>
              <p  class="main_text_shown_dsc">
               {{$brands[0]->text2}}
              </p>
              <p  class="add-read-more show-less-content">
               {{$brands[0]->text2}}
              </p>
             </div>
                <div class="col-lg-6 col-md-6 col-5">
                  <img
                    id="brand_img4243"
                    src="/{{$brands[0]->product_image}}"
                    class="card-img"
                    alt="..."
                  />
                </div>
              </div>
             
            </div>
            <br />
            <div id="fourth_card_det" class="card hidddenright">
              <div class="card-body row d-flex align-items-center m-auto justify-content-center">
                <div class="col-lg-6 col-md-6 col-7">
                  <h5 class="card-title">{{$brands[2]->text1}}</h5>
                  <p class="main_text_shown_dsc">
                    {{$brands[2]->text2}}
                  </p>
                  <p class="add-read-more show-less-content">
                    {{$brands[2]->text2}}
                  </p>
                </div>
                <div class="col-lg-6 col-md-6 col-5">
                  <img
                    src="/{{$brands[2]->product_image}}"
                    class="card-img"
                    alt="..."
                  />
                </div>
              </div>
            
            </div>
          </div>
        </div>
      </div>

      <br /><br /><br />
      <br /><br />
      <!-- fifth sec -->
      <div>
        <div>
          <div
            id="controlling"
            class="container d-flex justify-content-between align-items-center"
          >
            <div><h1>News</h1></div>
            <div class="buttons">
              <button
                type="button"
                data-bs-target="#carouselExampleFade"
                data-bs-slide="next"
                id="prev"
              >
                <img src="/images/group-3left.svg" style="height: 70px;" alt="" />
              </button>
              <button
                type="button"
                data-bs-target="#carouselExampleFade"
                data-bs-slide="prev"
                id="next"
              >
                <img src="/images/group-3right.svg"  style="height: 70px;" alt="" />
              </button>
            </div>
          </div>

          <div
            id="carouselExampleFade"
            class="container carousel slide carousel-fade"
          >
            <div class="carousel-inner">

              <div class="carousel-item active d-flex row ps-4 mt-5"
                style="height: 700px"
                >
                <div
                  id="content_img"
                  class="col-lg-3 col-md-3 col-xsm-12 col-sm-12 col-12 m-auto mt-3 hidddenright"
                  >
                  <img
                    id="fsadfdsfr52"
                    src="/{{$news[0]->image}}"
                    alt="..."
                  />
                  <div class="frist_img_con_tex" style="    transform: none;" >
                    <p>{{$news[0]->text1}}</p>

                    <button>
                      Learn more
                      <img
                        src="/images/line-rounded-arr98iow-right.svg"
                        alt=""
                      />
                    </button>
                  </div>
                </div>

                <div
                  id="content_img2"
                  class="col-lg-3 col-md-3 col-xsm-12 col-sm-12 col-12 m-auto mt-3 hidddentop"
                 >
                  <img
                     id="fsadfdsfr52"
                    src="/{{$news[1]->image}}"
                    alt="..."
                  />
                  <div class="frist_img_con_tex">
                    <p>{{$news[1]->text1}}</p>

                    <button>
                      Learn more
                      <img
                        src="/images/line-rounded-arr98iow-right.svg"
                        alt=""
                      />
                    </button>
                  </div>
                </div>

                <div
                  id="content_img3"
                  class="col-lg-3 col-md-3 col-xsm-12 col-sm-12 col-12 m-auto mt-3 hidddenleft"
                  >
                  <img
                     id="fsadfdsfr52"
                    src="/{{$news[2]->image}}"
                    alt="..."
                  />
                  <div class="frist_img_con_tex" style="    transform: none;">
                    <p>{{$news[2]->text1}}</p>

                    <button>
                      Learn more
                      <img
                        src="/images/line-rounded-arr98iow-right.svg"
                        alt=""
                      />
                    </button>
                  </div>
                </div>
              </div>
              @for($i=1;$i<ceil (count($news) /3   ) ;$i++ )
              <div class="carousel-item d-flex row ps-4 mt-5">
                @for($j=($i* (ceil (count($news) /3 )  ) )  ;$j< ((ceil (count($news) /3 )  )  + 3) ;$j++ ) 
                @if(isset($news[$j]))
                  @if($j%2==0)
                    <div
                      id="content_img"
                      class="col-lg-3 col-md-3 col-xsm-12 col-sm-12 col-12 m-auto mt-3 hidddenright"
                      >
                      <img
                       id="fsadfdsfr52"
                        src="/{{$news[$j]->image}}"
                        alt="..."
                      />
                      <div class="frist_img_con_tex" style="    transform: none;">
                        <p> {{$news[$j]->text1}}</p>

                        <button>
                          Learn more
                          <img
                            src="/images/line-rounded-arr98iow-right.svg"
                            alt=""
                          />
                        </button>
                      </div>
                    </div>
                    @else

                    <div
                      id="content_img2"
                      class="col-lg-3 col-md-3 col-xsm-12 col-sm-12 col-12 m-auto mt-3 hidddentop"
                      >
                      <img
                       id="fsadfdsfr52"
                        src="/{{$news[$j]->image}}"
                        alt="..."
                      />
                      <div class="frist_img_con_tex">
                        <p>{{$news[$j]->text1}}</p>

                        <button>
                          Learn more
                          <img
                            src="/images/line-rounded-arr98iow-right.svg"
                            alt=""
                          />
                        </button>
                      </div>
                    </div>
                    @endif
                  @endif
                @endfor
              </div>

            </div>
            @endfor
          </div>
        </div>
      </div>

      <br /><br /><br />
      <br /><br /><br /><br />
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

<script>
    // search icon
    let searchicon = document.getElementById("searchicon");
    let search_input = document.getElementById("search_input");

    search_input.style.display = "none"
    searchicon.onclick= () => {
        search_input.style.display = "inline"
    }
    search_input.onblur= () => {
        search_input.style.display = "none"
    }


    // write Effect
    var TxtType = function(el, toRotate, period) {
      this.toRotate = toRotate;
      this.el = el;
      this.loopNum = 0;
      this.period = parseInt(period, 10) || 2000;
      this.txt = '';
      this.tick();
      this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
      var i = this.loopNum % this.toRotate.length;
      var fullTxt = this.toRotate[i];

      if (this.isDeleting) {
      this.txt = fullTxt.substring(0, this.txt.length - 1);
      } else {
      this.txt = fullTxt.substring(0, this.txt.length + 1);
      }

      this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

      var that = this;
      var delta = 200 - Math.random() * 100;

      if (this.isDeleting) { delta /= 2; }

      if (!this.isDeleting && this.txt === fullTxt) {
      delta = this.period;
      this.isDeleting = true;
      } else if (this.isDeleting && this.txt === '') {
      this.isDeleting = false;
      this.loopNum++;
      delta = 500;
      }

      setTimeout(function() {
      that.tick();
      }, delta);
    };

    window.onload = function() {
      var elements = document.getElementsByClassName('typewrite');
      for (var i=0; i<elements.length; i++) {
          var toRotate = elements[i].getAttribute('data-type');
          var period = elements[i].getAttribute('data-period');
          if (toRotate) {
            new TxtType(elements[i], JSON.parse(toRotate), period);
          }
      }
      var css = document.createElement("style");
      css.type = "text/css";
      css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
      document.body.appendChild(css);
    };

    // navbar

    let Home_rout = document.querySelector("#Home_rout a p");
    let Company_rout = document.querySelector("#Company_rout a p");
    let Food_rout = document.querySelector("#Food_rout a p");
    let Innvation_rout = document.querySelector("#Innvation_rout a p");
    let Brands_rout = document.querySelector("#Brands_rout a p");
    let News_rout = document.querySelector("#News_rout a p");
    let Contact_rout = document.querySelector("#Contact_rout a p");


    let coloring = () => {
      if (window.location.pathname == "/" || window.location.pathname == "/index.html" || window.location.pathname == "/index" ) {
        document.querySelector("#Home_rout a").style.color = "#0B6532";
        Home_rout.style.transform = "scale(1.02)!important";
        Home_rout.style.borderBottom = "#0B6532 solid 1px";
      }
      if (window.location.pathname == "/ourcampany.html" || window.location.pathname == "/ourcampany") {
        document.querySelector("#Company_rout a").style.color = "#0B6532";
        document.querySelector("#Company_rout2 a").style.color = "#0B6532";
        Company_rout.style.transform = "scale(1.02)!important";
        Company_rout.style.borderBottom = "#0B6532 solid 1px";
      }

      if (window.location.pathname == "/food.html"|| window.location.pathname == "/food") {
        document.querySelector("#Food_rout a").style.color = "#0B6532";
        Food_rout.style.transform = "scale(1.02)!important";
        Food_rout.style.borderBottom = "#0B6532 solid 1px";
        document.querySelector("#Company_rout a").style.color = "#0B6532";
        Company_rout.style.transform = "scale(1.02)!important";
        Company_rout.style.borderBottom = "#0B6532 solid 1px";

      }
      if (window.location.pathname == "/innvation.html"||window.location.pathname == "/innvation" ) {
        document.querySelector("#Innvation_rout a").style.color = "#0B6532";
        Innvation_rout.style.transform = "scale(1.02)!important";
        Innvation_rout.style.borderBottom = "#0B6532 solid 1px";
        document.querySelector("#Company_rout a").style.color = "#0B6532";
        Company_rout.style.transform = "scale(1.02)!important";
        Company_rout.style.borderBottom = "#0B6532 solid 1px";

      }
      if (window.location.pathname == "/brands.html"||window.location.pathname == "/brands") {
        document.querySelector("#Brands_rout a").style.color = "#0B6532";
        Brands_rout.style.transform ="scale(1.02)!important";
        Brands_rout.style.borderBottom = "#0B6532 solid 1px";

      }
      if (window.location.pathname == "/news.html"|| window.location.pathname == "/news") {
        document.querySelector("#News_rout a").style.color = "#0B6532";
        News_rout.style.transform = "scale(1.02)!important";
        News_rout.style.borderBottom = "#0B6532 solid 1px";

      }
      if (window.location.pathname == "/contact.html"||window.location.pathname == "/contact") {
        document.querySelector("#Contact_rout a").style.color = "#0B6532";
        Contact_rout.style.transform = "scale(1.02)!important";
        Contact_rout.style.borderBottom = "#0B6532 solid 1px";

      }
    };
    coloring(); 


    // GSAP
    // hidden right
    let observer = new IntersectionObserver((entries)=>{
      entries.forEach((entry)=>{
        if(entry.isIntersecting){
          entry.target.classList.add('showw')
        }else{
          entry.target.classList.remove('showw')
        }
      })
    })
    let hidddenElement = document.querySelectorAll('.hidddenright');
    hidddenElement.forEach((el) => observer.observe(el))

    // hidden left
    let observer2 = new IntersectionObserver((entries)=>{
      entries.forEach((entry)=>{
        if(entry.isIntersecting){
          entry.target.classList.add('showw')
        }else{
          entry.target.classList.remove('showw')
        }
      })
    })
    let hidddenElement2 = document.querySelectorAll('.hidddenleft');
    hidddenElement2.forEach((el) => observer2.observe(el))

    // hidddenbutton
    let observer3 = new IntersectionObserver((entries)=>{
      entries.forEach((entry)=>{
        if(entry.isIntersecting){
          entry.target.classList.add('showw')
        }else{
          entry.target.classList.remove('showw')
        }
      })
    })
    let hidddenElement3 = document.querySelectorAll('.hidddenbutton');
    hidddenElement3.forEach((el) => observer3.observe(el))

    // hidddentop
    let observer4 = new IntersectionObserver((entries)=>{
      entries.forEach((entry)=>{
        if(entry.isIntersecting){
          entry.target.classList.add('showw')
        }else{
          entry.target.classList.remove('showw')
        }
      })
    })
    let hidddenElement4 = document.querySelectorAll('.hidddentop');
    hidddenElement4.forEach((el) => observer4.observe(el))





    // Read more function

    $(document).ready(function(){
        function AddReadMore() {
          var carLmt = 100;
          var readMoreTxt = " Read more";
          var readLessTxt = " Read less";


          $(".add-read-more").each(function () {
            if ($(this).find(".first-section").length)
                return;

            var allstr = $(this).text();
            if (allstr.length > carLmt) {
                var firstSet = allstr.substring(0, carLmt);
                var secdHalf = allstr.substring(carLmt, allstr.length);
                var strtoadd = firstSet + "<span class='second-section'>" + secdHalf + "</span><span class='read-more'  title='Click to Show More'> <br>" + readMoreTxt + "</span><span class='read-less' title='Click to Show Less'>" + readLessTxt + "</span>";
                $(this).html(strtoadd);
            }
          });

          $(document).on("click", ".read-more,.read-less", function () {
            $(this).closest(".add-read-more").toggleClass("show-less-content show-more-content");
          });
      }

      AddReadMore();
    });





</script>
    <!-- Font Awesome JS -->
    <script src="/Static/fontawesome-free-6.4.2-web/js/all.min.js"></script>
    <!-- JS File -->
    <script src="/Static/JS/app1.js"></script>
    <!-- Bootstrap file-->
    <script src="/Static/Bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
