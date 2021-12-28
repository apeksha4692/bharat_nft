<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="A New digital oasis is coming powered by the Bharat NFT" />
  <!-- SITE TITLE -->
  <title>Bharat NFT</title>
  <!-- Favicon Icon -->
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assest/website/images/favicon.png">
  <!-- Animation CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assest/website/css/animate.css">
  <!-- Latest Bootstrap min CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assest/website/bootstrap/css/bootstrap.min.css">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assest/website/css/all.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assest/website/css/font-awesome.min.css">
  <!-- ionicons CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assest/website/css/ionicons.min.css">
  <!--- owl carousel CSS-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assest/website/owlcarousel/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assest/website/owlcarousel/css/owl.theme.default.min.css">
  <!-- Magnific Popup CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assest/website/css/magnific-popup.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assest/website/css/spop.min.css">
  <!-- Style CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assest/website/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assest/website/css/responsive.css">
  <!-- Color CSS -->
  <link id="layoutstyle" rel="stylesheet" href="<?php echo base_url(); ?>assest/website/color/theme.css">

</head>

<body class="v_blue_pro" data-spy="scroll" data-offset="110">
 
  <!-- START HEADER -->
  <header class="header_wrap fixed-top nav_bg">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand page-scroll animation" href="#home_section" data-animation="fadeInDown"
          data-animation-delay="1s">
          <img class="logo_light outer_glow" src="<?php echo base_url(); ?>assest/website/images/bharat-nft-logo.png" alt="logo" />
          <img class="logo_dark" src="<?php echo base_url(); ?>assest/website/images/bharat-nft-logo.png" alt="logo" />
        </a>
        <button class="navbar-toggler animation" type="button" data-toggle="collapse"
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation" data-animation="fadeInDown" data-animation-delay="1.1s">
          <span class="ion-android-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto">
            <li class="dropdown animation" data-animation="fadeInDown" data-animation-delay="1.1s">
              <a  class="nav-link active" href="<?php echo base_url(); ?>">Home</a>
             
            </li>
            <li class="animation" data-animation="fadeInDown" data-animation-delay="1.2s">
              <a class="nav-link page-scroll nav_item nav_link_clr" href="javascript:;">Bharat NFT</a>
            </li>
            <li class="animation" data-animation="fadeInDown" data-animation-delay="1.3s">
              <a class="nav-link page-scroll nav_item nav_link_clr"
                href="javascript:;">Whitepaper</a>
            </li>
            <!-- <li class="animation" data-animation="fadeInDown" data-animation-delay="1.3s">
              <a class="nav-link page-scroll nav_item nav_link_clr" href="audit.html">Audit</a>
            </li> -->
            <!-- <li class="animation" data-animation="fadeInDown" data-animation-delay="1.2s">
              <a class="nav-link page-scroll nav_item nav_link_clr" href="https://Bharat NFT.world/" target="_blank">Bharat NFT
                World</a>
            </li> -->
            <li class="dropdown animation" data-animation="fadeInDown" data-animation-delay="1.3s">
              <a class="dropdown-toggle nav-link nav_link_clr" href="#" data-toggle="dropdown">Social</a>
              <div class="dropdown-menu">
                <ul class="list_none">
                  <li>
                    <a class="dropdown-item nav-link nav_item nav_link_clr" target="_blank" href="<?php echo $contactinformation->facebook?>"><i class="fab fa-facebook-f"></i> Facebook</a>
                  </li>
                  <li>
                    <a class="dropdown-item nav-link nav_item nav_link_clr" href="<?php echo $contactinformation->twitter?>" target="_blank"><i class="fab fa-twitter"></i>
                      Twitter</a>
                  </li>
                  <li>
                    <a class="dropdown-item nav-link nav_item nav_link_clr"
                      href="<?php echo $contactinformation->instagram?>" target="_blank"><i class="fab fa-instagram"></i>
                      Instagram</a>
                  </li>
                  <li>
                    <a class="dropdown-item nav-link nav_item nav_link_clr" href="<?php echo $contactinformation->telegram?>"
                      target="_blank"><i class="fab fa-telegram-plane"></i> Telegram</a>
                  </li>
                  <li>
                    <a class="dropdown-item nav-link nav_item nav_link_clr" href="<?php echo $contactinformation->discord?>" target="_blank"><i class="fab fa-discord"></i>
                      Discord</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="animation" data-animation="fadeInDown" data-animation-delay="1.5s"><a
                class="nav-link page-scroll nav_item nav_link_clr" href="#faq">FAQ</a></li>
            <li class="animation" data-animation="fadeInDown" data-animation-delay="1.6s"><a
                class="nav-link page-scroll nav_item nav_link_clr"
                href="https://ropsten.etherscan.io/address/0x49c1b2cfa2e74ef6cffd7bc2b190fa6f9c5a0e01#code"
                target="_blank">Contract</a></li>
            
            <!-- <li class="animation" data-animation="fadeInDown" data-animation-delay="1.8s"><a class="nav-link nav_item"
                href="news.html">News</a></li> -->
                <li class="animation" data-animation="fadeInDown" data-animation-delay="1.2s"><a
                  class="nav-link page-scroll nav_item nav_link_clr" href="#roadmap">Roadmap</a></li>
                <li class="animation" data-animation="fadeInDown" data-animation-delay="1.2s"><a
                  class="nav-link page-scroll nav_item nav_link_clr" href="#contact">Contact</a></li>
            <!-- <li class="animation" data-animation="fadeInDown" data-animation-delay="1.7s"><a
                class="nav-link page-scroll nav_item nav_link_clr" href="javascript:;" data-bs-toggle="tooltip"
                data-bs-placement="bottom" title="Newsletter" data-toggle="modal" data-target="#envo_popup"><i
                  class="far fa-envelope news_icon"></i></a></li> -->
                  <li class="animation" data-animation="fadeInDown" data-animation-delay="1.2s"><a
                    class="nav-link page-scroll nav_item nav_link_clr" href="#about">About</a></li>
                  <li class="animation" data-animation="fadeInDown" data-animation-delay="1.7s"><a
                class="nav-link page-scroll nav_item nav_link_clr" href="#footer" data-bs-toggle="tooltip"
                data-bs-placement="bottom" title="Newsletter"><i
                  class="far fa-envelope news_icon"></i></a></li>
          </ul>
          <ul class="navbar-nav nav_btn align-items-center">
            <!-- <li class="animation" data-animation="fadeInDown" data-animation-delay="2s"><a data-target="#buy_popup"
                class="btn btn-default btn-radius nav_item" data-toggle="modal" target="_blank">Buy Now</a></li> -->
            <li class="animation" data-animation="fadeInDown" data-animation-delay="2s"><a href="<?php echo site_url('dashboard');?>" class="btn btn-default btn-radius nav_item " target="_blank">Dashboard
                </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <!-- END HEADER -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title pvt_salehead" id="exampleModalLabel">Private Pre Sale</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Passcode</label>
              <input type="password" class="form-control" id="recipient-name" placeholder="Enter passcode">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
          <a type="button" class="btn-secondary popup_buybtn"
            href="">Submit</a>
        </div>
      </div>
    </div>
  </div>
  <!-- BUY NOW POP_UP  -->
  <div class="modal fade" id="buy_popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <!-- <h5 class="modal-title" id="exampleModalLabel">New message</h5> -->
          <h2 class="buy_pop_headtxt">Instruction</h2>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <!-- <img src="..." class="d-block w-100" alt="..."> -->
                <div class="modalbodyDiv">
                  <img src="<?php echo base_url(); ?>assest/website/images/pancake-icon.png" alt="" class="img-fluid ">
                  <div class="modalbodycontent">
                    <p class="buy_pop_bodytile">Instruction to be followed to buy Bharat NFTusing pancakeswap.</p>
                    <ol>
                      <li>
                        Install Metamask <a class="buy_pop_a" href="javascript:;">(metamask.io)</a> or use an existing
                        wallet
                      </li>

                      <li>
                        Connect your metamask to Ethereum</a>
                      </li>

                      <li>Withdraw your EHT from Ethereum Wallet</li>

                      <li>
                        Go to Bharat Nft <a class="buy_pop_a" href="javascript:;">(Bharat Nft)</a>
                      </li>

                      <li> Click 'Connect' in the top right corner</li>

                      <li> Add the Bharat token by pasting the Smart Contract Address</li>

                      <li>
                        Swap your ETH for Bharat Token!
                      </li>
                    </ol>
                    <div class="modal-footer">
                      <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                      <a type="button" class="btn-secondary popup_buybtn"
                        href="https://exchange.pancakeswap.finance/#/swap" target="_blank">Buy
                        Bharat NFT</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="carousel-item">
                <div class="modalbodyDiv">
                  <img src="<?php echo base_url(); ?>assest/website/images/apeswap-icon.png" alt="" class="img-fluid ">
                  <div class="modalbodycontent">
                    <p class="buy_pop_bodytile">Instruction to be followed to buy Bharat NFTusing apeswap.</p>
                    <ol>
                      <li>
                        Install Metamask <a class="buy_pop_a" href="javascript:;">(metamask.io)</a> or use an existing
                        wallet
                      </li>

                      <li>
                        Connect your metamask to Binance Smart Chain - <a class="buy_pop_a" href="javascript:;">Here's
                          How</a>
                      </li>

                      <li>Withdraw your BNB from Binance to Metamask Wallet</li>

                      <li>
                        Go to Bharat NFTWorld <a class="buy_pop_a" href="javascript:;">(Bharat NFTworld)</a>
                      </li>

                      <li> Click 'Connect' in the top right corner</li>

                      <li> Add the $Bharat NFTtoken by pasting the Smart Contract Address</li>

                      <li>
                        Swap your BNB for Bharat NFT!
                      </li>
                    </ol>
                    <div class="modal-footer">
                      <a type="button" class="btn-secondary popup_buybtn" href="https://app.apeswap.finance/swap"
                        target="_blank">Buy
                        Bharat NFT</a>
                    </div>
                  </div>
                </div>
              </div> -->
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="strip-btm">
          <div class="strip-btmtxt"> Exchange Instructions</div>
        </div>
      </div>
    </div>
  </div>
  <!-- ENVELOPE ICON POP UP  -->
  <div class="modal fade" id="envo_popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title pvt_salehead" id="exampleModalLabel">SignUp for Newsletter</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Email</label>
              <input type="email" class="form-control" id="recipient-name" placeholder="Enter Email">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <a type="button" class="btn-secondary popup_buybtn" href="javascript:;">SignUp</a>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- START SECTION BANNER -->
  <section id="home_section" class="section_banner small_pb blue_light_bg" data-z-index="1" data-parallax="scroll"
    data-image-src="<?php echo base_url(); ?>assest/website/images/banner_bg2.png">
    <canvas id="banner_canvas" class="transparent_effect fixed"></canvas>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-12 col-sm-12 order-lg-first">
          <div class="banner_text text_md_center">
            <h1 class="animation" data-animation="fadeInUp" data-animation-delay="1.1s">
              <span>Bharat NFT</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            </h1>
            <p class="animation" data-animation="fadeInUp" data-animation-delay="1.3s">
            Bharat NFT is a Community-Driven Multi-Chain IDO/TGE platform with Launchpad Aggregation, Unique Distribution Model, and more.
Bharat NFT aims to provide the much-needed early-stage support for projects through its launchpad aggregation and IDO/TGE services while offering great incentives for Bharat stakers through in-house protocols.
            </p>
            <div class="newsletter_form pb-4">
              <form class="subscribe_form animation" data-animation="fadeInUp" data-animation-delay="1.4s">
                <input class="input-rounded" type="text" required placeholder="Enter Email Address" />
                <button type="submit" title="Subscribe" class="btn-info" name="submit" value="Submit"> Subscribe
                </button>
              </form>
            </div>
            <span class="text-white icon_title animation" data-animation="fadeInUp" data-animation-delay="1.5s">Follow
              us :</span>
            <ul class="list_none social_icon">
              <li class="animation" data-animation="fadeInUp" data-animation-delay="1.6s"><a href="javascript:;"><i
                    class=" fa fa-facebook"></i></a></li>
              <li class="animation" data-animation="fadeInUp" data-animation-delay="1.7s"><a
                  href="" target="_blank"><i class=" fa fa-twitter"></i></a></li>
              <li class="animation" data-animation="fadeInUp" data-animation-delay="1.8s"><a
                  href="" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a></li>
              <li class="animation" data-animation="fadeInUp" data-animation-delay="1.9s"><a
                  href="" target="_blank"><i class="fab fa-telegram-plane"></i></a>
              </li>
              <li class="animation" data-animation="fadeInUp" data-animation-delay="2s"><a
                  href="" target="_blank"><i class="fab fa-discord"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 order-first">
          <div class="banner_image_right res_md_mb_50 res_xs_mb_30 animation" data-animation-delay="1.5s"
            data-animation="fadeInRight">
            <img alt="banner_vector2" src="<?php echo base_url(); ?>assest/website/images/banner_img_new.png">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END SECTION BANNER -->


  <!-- START SECTION SERVICES -->
  <section id="service" class="small_pb small_pt light_blue_dark_bg">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12">
          <div class="title_default_light title_border text-center">
            <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Bharat NFT</h4>
            <p class="animation tw_coin_para" data-animation="fadeInUp" data-animation-delay="0.4s">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero nihil soluta tenetur ea,<br>
              <!-- <a class="Bharat NFT_wc_a" href="Bharat NFT-world-coin.html"><img src="<?php echo base_url(); ?>assest/website/images/favicon.png"
                  class="img-fluid coin_button"> Bharat NFT</a> -->
            </p>

          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="box_wrap text-center animation" data-animation="fadeInUp" data-animation-delay="0.6s">
            <!-- <img src="<?php echo base_url(); ?>assest/website/images/service_icon1.png" alt="service_icon1" /> -->
            <i class="fas fa-burn web_icon"></i>
            <h4>Total Supply</h4>
          
            <p> 100 M Bharat Token</p>
            
            
            <!-- <p>Uniswap Liquidity: 15M Bharat</p>
            <p>Ecosystem: 27M Bharat</p>
            <p>Team: 10M Bharat</p> -->
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="box_wrap text-center animation" data-animation="fadeInUp" data-animation-delay="0.8s">
            <i class="fas fa-users web_icon"></i>
            <h4>Public</h4>
            <p> 8 M Bharat Token</p>
            <p>Uniswap Liquidity: 15M Bharat Token</p>
            <p>Ecosystem: 27M Bharat Token</p>
            <p>Team: 10M Bharat Token</p>
            <!-- <p class="public_para">20% Circulation<br>
              20% Creative fund <i class="fas fa-lock"></i><br>
              5% Charity <i class="fas fa-lock"></i><br>
              10% Reinvestment <i class="fas fa-lock"></i></p> -->
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="box_wrap text-center animation" data-animation="fadeInUp" data-animation-delay="1s">

            <i class="fas fa-gift web_icon"></i>
            <h4>Private</h4>
            <p> 30M Bharat Token</p>
            <!-- <button data-target="#reward_popup" class="reward_readmore" data-toggle="modal">Read More...</button> -->
          </div>
        </div>

        <!-- <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="box_wrap text-center animation" data-animation="fadeInUp" data-animation-delay="1s">
            <i class="fas fa-sync-alt web_icon"></i>
            <h4>Anti Snipe</h4>
            <p>Buy, Sell, and transfer orders worth over 0.05% of the total supply will not be approved. Perform transfers over 0.05% supply, 3 BNB penalty sent to reward pool.</p>
          </div>
        </div> -->
        <!-- <div class="col-lg-4  col-md-6 col-sm-12">
          <div class="box_wrap text-center animation" data-animation="fadeInUp" data-animation-delay="1s"> -->
            <!-- <img src="<?php echo base_url(); ?>assest/website/images/service_icon5.png" alt="service_icon5" /> -->
            <!-- <i class="fas fa-globe web_icon"></i>
            <h4>Bharat NFT</h4>
            <p>A high-performing, cohesive, and progressive ecosystem enabling creatives to foster creativity without the compromise of creative freedom. a unique and entirely different digital oasis for all.</p>
          </div>
        </div> -->
        <!-- <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="box_wrap text-center animation" data-animation="fadeInUp" data-animation-delay="1s">
            <i class="fas fa-hand-holding-heart web_icon"></i>
            <h4>Buyback!</h4>
            <p>
            Bharat Nft Orca! Bharat NFT world's very own A.I to ensure we keep the supply in check. As a Deflationary measure, Toon Orca will run sweeps to buyback $TOON to payout and burn to ensure we hedge for inflation.
            </p>
          </div>
        </div> -->
      </div>
    </div>
  </section>
  <!-- END SECTION SERVICES -->

  <!-- READ MORE POPUP  -->
  <div class="modal fade" id="reward_popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title pvt_salehead" id="exampleModalLabel">The reward for Holding $Bharat NFT</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          We will set aside 4.5% of every transaction and redistribute them anytime
          holding Bharat Nft in the form of $ETH. However, holders and mandated to wait
          for seven days before they can access these rewards. In addition, if holders
          keep adding over 2% of their overall Bharat NFT balance within the waiting
          duration, the waiting duration automatically accumulates with the cycle. Let’s
          put this in perspective; suppose on the first day of the cycle, a holder adds
          over 5% Bharat Nft. In that case, the holder must wait for an additional 8.4 hours
          (5% of seven days) alongside the previously highlighted seven days.
          Selling has no effect on the cycle. However, if a user collects over 2 ETH, 15%
          will be set aside to buy back Bharat Nft at market price and subsequently burn.
          This is a practical approach to tackle inflation and keep the token value
          stable in the long term.
          The total $ETH in the reward pool determines the amount accessible for
          holders. Thus, rewards vary with available $ETH.
        </div>
      </div>
    </div>
  </div>

  <!-- START SECTION ABOUT US -->
  <section id="about" class="small_pt">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="text_md_center res_md_mb_30 res_sm_mb_20">
            <img class="animation" data-animation="zoomIn" data-animation-delay="0.2s" src="<?php echo base_url(); ?>assest/website/images/bharat-nft-logo.png"
              alt="aboutimg2" />
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="title_default_light title_border">
            <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">About Bharat NFT</h4>
            <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">
            Bharat NFT is a Community-Driven Multi-Chain IDO/TGE platform with Launchpad Aggregation, Unique Distribution Model, and more.
Bharat NFT aims to provide the much-needed early-stage support for projects through its launchpad aggregation and IDO/TGE services while offering great incentives for Bharat stakers through in-house protocols.
            </p>
            <!-- <p class="animation" data-animation="fadeInUp" data-animation-delay="0.8s">which empowers people to not be
              marginalized by governments and financial institutions. Bitcoin is freedom. </p> -->
          </div>
          <a href="javascript:;" class="btn btn-default btn-radius animation"
            data-animation="fadeInUp" data-animation-delay="1s">Enter Bharat NFT <i
              class="ion-ios-arrow-thin-right"></i></a>
        </div>
      </div>
    </div>
  </section>
  <!-- END SECTION ABOUT US -->

  

  <!-- START SECTION TOKEN SALE -->
  <section id="token" class="section_token token_sale light_blue_dark_bg" data-z-index="1" data-parallax="scroll"
    data-image-src="<?php echo base_url(); ?>assest/website/images/token_bg.png">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12">
          <div class="title_default_light title_border text-center">
            <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Bharat NFT Sale</h4>
            <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero nihil soluta tenetur ea,
            </p>
          </div>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-lg-3">
          <div class="pr_box">
            <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Starting time :</h6>
            <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">MM , YY (DD HH:MM )</p>
          </div>
          <div class="pr_box">
            <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">Ending time :</h6>
            <p class="animation" data-animation="fadeInUp" data-animation-delay="0.8s">MM, YY (DD HH:MM )
            </p>
          </div>
          <div class="pr_box">
            <h6 class="animation" data-animation="fadeInUp" data-animation-delay="1s">Tokens exchange rate</h6>
            <p class="animation" data-animation="fadeInUp" data-animation-delay="1.2s">xxxxxxxx
            </p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="token_sale res_md_mb_40 res_md_mt_40 res_sm_mb_30 res_sm_mt_30">
            <div class="tk_countdown text-center animation token_countdown_bg" data-animation="fadeIn"
              data-animation-delay="1s">
              <div class="tk_counter_inner">
                <div class="tk_countdown_time animation" data-animation="fadeInUp" data-animation-delay="1.2s"
                  data-time="2019/02/06 00:00:00"></div>
                <div class="progress animation" data-animation="fadeInUp" data-animation-delay="1.3s">
                  <div class="progress-bar progress-bar-striped gradient" role="progressbar" aria-valuenow="46"
                    aria-valuemin="0" aria-valuemax="100" style="width:46%"> 46% </div>
                  <span class="progress_label bg-white" style="left: 30%">
                    <!-- <strong> 46,000 BCC </strong> -->
                  </span>
                  <span class="progress_label bg-white" style="left: 75%">
                    <!-- <strong> 90,000 BCC </strong> -->
                  </span>
                  <span class="progress_min_val">Sale Raised</span>
                  <span class="progress_max_val">Soft-caps</span>
                </div>
                <a href="https://exchange.pancakeswap.finance/#/swap" class="btn btn-default btn-radius animation"
                  data-animation="fadeInUp" data-animation-delay="1.4s" target="_blank">Buy Tokens <i
                    class="ion-ios-arrow-thin-right"></i></a>
                <ul class="icon_list list_none d-flex justify-content-center">
                  <li class="animation" data-animation="fadeInUp" data-animation-delay="1.5s"></li>
                  <!-- <li class="animation" data-animation="fadeInUp" data-animation-delay="1.6s">
                    <img src="<?php echo base_url(); ?>assest/website/images/bnb.png" class="bnb_img" alt="BNB">
                  </li> -->
                  <!-- <li class="animation" data-animation="fadeInUp" data-animation-delay="1.7s"><i
                      class="fa fa-bitcoin"></i></li> -->
                  <li class="animation" data-animation="fadeInUp" data-animation-delay="1.8s">
                    <i class="fab fa-ethereum"></i>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="pr_box">
            <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Low - High 24h :</h6>
            <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">xxxxx - xxxxx</p>
          </div>
          <div class="pr_box">
            <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">Total tokens sale</h6>
            <p class="animation" data-animation="fadeInUp" data-animation-delay="0.8s">100 Million</p>
          </div>
          <div class="pr_box">
            <h6 class="animation" data-animation="fadeInUp" data-animation-delay="1s">Acceptable Currency :</h6>
            <p class="animation" data-animation="fadeInUp" data-animation-delay="1.2s"> Eth</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END SECTION TOKEN SALE -->

  <!-- START SECTION TOKEN PROCEEDS & DISTRIBUTION -->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg- col-md-12 col-sm-12 res_md_mb_40">
          <div class="title_default_light title_border text-center">
            <h4 class="animation Bharat NFT_allocation" data-animation="fadeInUp" data-animation-delay="0.2s">100 Million
              Bharat Token Allocation</h4>
          </div>
          <div class="lg_pt_20 res_sm_pt_0 text-center animation" data-animation="fadeInRight"
            data-animation-delay="0.2s">
            <img src="<?php echo base_url(); ?>assest/website/images/distribution3.png" alt="sale-proceeds3" />
          </div>
          <div class="divider small_divider"></div>
          <ul class="list_none list_chart text-center">
            <li>
              <span class="chart_bx color1"></span>
              <span>Management <i class="fas fa-lock"></i></span>
            </li>
            <li>
              <span class="chart_bx color-burn"></span>
              <span>Burnt Portion </span>
            </li>
            <li>
              <span class="chart_bx color2"></span>
              <span>Circulation + Burning </span>
            </li>
            <li>
              <span class="chart_bx color4"></span>
              <span>Charity <i class="fas fa-lock"></i></span>
            </li>
            <li>
              <span class="chart_bx color3"></span>
              <span>Bharat NFT Reinvestment <i class="fas fa-lock"></i></span>
            </li>
            <li>
              <span class="chart_bx color-sale"></span>
              <span>Pre Sale</span>
            </li>
            <li>
              <span class="chart_bx color5"></span>
              <span>Creative World <i class="fas fa-lock"></i></span>
            </li>
          </ul>
        </div>
        
      </div>
    </div>
  </section>
  <!-- END SECTION TOKEN PROCEEDS & DISTRIBUTION -->

  

  <!-- START SECTION TIMELINE -->
  <section id="roadmap" class="small_pb light_blue_dark_bg">
    <div class="container">
      <div class="row text-center">
        <div class="col-lg-8 col-md-12 offset-lg-2">
          <div class="title_default_light text-center">
            <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Roadmap</h4>
            <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="timeline owl-carousel small_space">
            <div class="item">
              <div class="timeline_box complete">
                <div class="timeline_inner">
                  <div class="timeline_circle"></div>
                  <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">January 2022</h6>
                  <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">
      
                  <ul class="road_map_content">
                    <li>- Bharat Nft ORCA deployment (buyback begins)</li>
                    <li>- Creatives showcase preview</li>
                    <li>- Bharat Nft  digital experience show</li>
                    <li>- Holiday giveaways</li>
                    <li>- Creatives holiday NFT airdrop celebration</li>
                    <li>- GOAL 100000 wallet holders</li>
                  </ul>
                  </p>

                </div>
              </div>
            </div>
            <div class="item">
              <div class="timeline_box complete">
                <div class="timeline_inner">
                  <div class="timeline_circle"></div>
                  <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">February 2022</h6>
                  <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                 
                  <ul class="road_map_content">
                    <li>- Bharat Nft V1 launch</li>
                    <li>- Bharat Nft exchange launch</li>
                    <li>- Bharat Nft.io announcement</li>
                    <li>- Creatives global launch</li>
                    <li>- Bharat Nft.finance launch</li>
                    <li>- Bharat Nft tour launch pre-sale</li>
                    <li>- GOAL 250000 wallet holders</li>
                  </ul>
                  </p>

                </div>
              </div>
            </div>
            <div class="item">
              <div class="timeline_box complete current">
                <div class="timeline_inner">
                  <div class="timeline_circle"></div>
                  <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">March 2022</h6>
                  <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                  <ul class="road_map_content">
                  <li>- Bharat Nft.io showcase</li>
                    <li>- New exchange listing</li>
                    <li>- Real estate announcement……. (Macro studios)</li>
                    <li>- Live studio build announcement</li>
                    <li>- GOAL 500000 wallet holders</li>
                  </ul>
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="timeline_box">
                <div class="timeline_inner">
                  <div class="timeline_circle"></div>
                  <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">April 2022</h6>
                  <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                  <ul class="road_map_content">
                    <li>- TBA, a lot of excitement awaits</li>
                  </ul>
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="timeline_box">
                <div class="timeline_inner">
                  <div class="timeline_circle"></div>
                  <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">May 2022</h6>
                  <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                  
                  - Bharat Nft Coin &amp; Bharat Nft beginnings
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="timeline_box">
                <div class="roadmap_inner">
                  <div class="timeline_circle"></div>
                  <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">June 2022</h6>
                  <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                  
                  - Bharat Nft Coin &amp; Bharat Nft beginnings
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="timeline_box">
                <div class="timeline_inner">
                  <div class="timeline_circle"></div>
                  <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">July 2022</h6>
                  <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                  - Build Bharat Nft Coin &amp; Prepare Bharat Nft live build
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="timeline_box">
                <div class="timeline_inner">
                  <div class="timeline_circle"></div>
                  <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">August 2022</h6>
                  <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                  <ul class="road_map_content">
                    <li>- Initial coin distribution and marketing</li>
                    <li>- Private pre-sale</li>
                  </ul>
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="timeline_box">
                <div class="timeline_inner">
                  <div class="timeline_circle"></div>
                  <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">September 2022</h6>
                  <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                  <ul class="road_map_content">
                    <li>- Public pre-sale</li>
                    <li>- Bharat Nft coin giveaway *additional details in giveaway channel</li>
                    <li>- GOAL 5000 wallet holders</li>
                    <li>- Pancakeswap, Apeswap</li>
                  </ul>
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="timeline_box">
                <div class="timeline_inner">
                  <div class="timeline_circle"></div>
                  <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">October 2022</h6>
                  <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                  <ul class="road_map_content">
                    <li>- Launch Bharat Nft careers. We are expanding the development team. </li>
                    <li>- Bharat Nft NFT collectors NFT Airdrop</li>
                    <li>- CoinMarketCap</li>
                    <li>- Coingecko</li>
                    <li>- GOAL- 10000 wallet holders</li>
                    <li>- Bharat Nft billboards (Los Angeles, Miami, and New York)</li>
                  </ul>
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="timeline_box">
                <div class="timeline_inner">
                  <div class="timeline_circle"></div>
                  <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">November 2022</h6>
                  <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                  <ul class="road_map_content">
                    <li>- Bharat Nft creatives touring</li>
                    <li>- Creatives early onboarding, early showcase</li>
                    <li>- Charitable giving and Bharat Nft promise; and mission to make a
                      change</li>
                    <li>- BETA TESTING INVITES</li>
                    <li>- Bharat Nft COIN GIVEAWAY</li>
                    <li>- New exchange listing</li>
                    <li>- Limited edition creatives NFT capsule airdrop</li>
                    <li>- GOAL 25000 wallet holders</li>
                  </ul>>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END SECTION TIMELINE -->

  <!-- START SECTION FAQ -->
  <section id="faq" class="small_pt small_pb">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12 offset-lg-2">
          <div class="title_default_light title_border text-center">
            <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Frequently asked questions (FAQ)
            </h4>
          </div>
        </div>
      </div>
      <div class="row small_space">
        <div class="col-lg-3 col-md-12">
          <ul class="nav nav-pills d-block tab_s2" id="pills-tab" role="tablist">
            <li class="nav-item animation" data-animation="fadeInUp" data-animation-delay="0.5s">
              <a class="tab-link active" data-toggle="tab" href="#tab1">General</a>
            </li>
            <li class="nav-item animation" data-animation="fadeInUp" data-animation-delay="0.6s">
              <a class="tab-link" data-toggle="tab" href="#tab2">Pre-sale and Listing</a>
            </li>
            <li class="nav-item animation" data-animation="fadeInUp" data-animation-delay="0.7s">
              <a class="tab-link" data-toggle="tab" href="#tab3">NFT</a>
            </li>
            <li class="nav-item animation" data-animation="fadeInUp" data-animation-delay="0.7s">
              <a class="tab-link" data-toggle="tab" href="#tab4">Bharat NFT</a>
            </li>
            <li class="nav-item animation" data-animation="fadeInUp" data-animation-delay="0.8s">
              <a class="tab-link" data-toggle="tab" href="#tab5">Supply</a>
            </li>
            <li class="nav-item animation" data-animation="fadeInUp" data-animation-delay="0.8s">
              <a class="tab-link" data-toggle="tab" href="#tab6">Rewards</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-9 col-md-12">
          <div class="tab-content res_md_mt_30 res_sm_mt_20">
            <div class="tab-pane fade show active" id="tab1" role="tabpanel">
              <div id="accordion1" class="faq_content5">
                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                  <div class="card-header">
                    <h6 class="mb-0"> <a data-toggle="collapse" href="#collapseOne" aria-expanded="true"
                        aria-controls="collapseOne"><span>What is cryptocurrency?</span><ins></ins></a></h6>
                  </div>
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion1">
                    <div class="card-body">A digital currency secured by cryptography is typically used as a
                      medium of exchange within a <span class="faq_highlightedtxt">peer-to-peer (P2P)</span> digital
                      economic
                      system. The use of cryptographic techniques is what ensures that
                      these systems are entirely immune to fraud and counterfeiting. Most
                      cryptocurrency systems work through a decentralized framework that
                      is collectively maintained by a distributed network of computers.</div>
                  </div>
                </div>
                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                  <div class="card-header" id="headingTwo">
                    <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseTwo"
                        aria-expanded="false" aria-controls="collapseTwo"><span>What is BEP20?</span><ins></ins></a>
                    </h6>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion1">
                    <div class="card-body">BEP-20 is a <span class="faq_highlightedtxt">token</span> standard on Binance
                      Smart Chain that
                      extends <span class="faq_highlightedtxt">ERC-20</span>, the most common Ethereum token standard.
                      You
                      can think of it as a blueprint for tokens that defines how they can be
                      spent, who can spend them, and other rules for their usage. Due to its
                      similarity to Binance Chain’s <span class="faq_highlightedtxt">BEP-2</span> and Ethereum’s ERC-20,
                      it’s
                      compatible with both. BEP-20 was conceived as a technical
                      specification for Binance Smart Chain, with the goal of providing a
                      flexible format for developers to launch a range of different tokens.
                      These could represent anything from shares in a business to dollars
                      stored in a bank vault (i.e., a <span class="faq_highlightedtxt">stablecoin</span>)..</div>
                  </div>
                </div>
                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                  <div class="card-header" id="headingThree">
                    <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseThree"
                        aria-expanded="false" aria-controls="collapseThree"><span>What is the Bharat Nft
                          coin?
                          </span><ins></ins></a> </h6>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion1">
                    <div class="card-body">Bharat Nft coin is BEP20 Token built on Binance Smart Chain. Not another meme
                      coin, nor is it a pump and dump. The intention and purpose of the Bharat Nft coin utility token is
                      to revolutionize the creative economy with blockchain technology and introduce a suite of products
                      globally for creatives and entertainment media. Creative independence, effective content
                      distribution, and engagement globally is our core principles. Creating a new digital oasis to
                      create, engage, and connect through the power of the Bharat Nft coin.<br><br>Bharat Nft coin will
                      be
                      powering five core oasis +more to come as we empower the community to create, engage, and connect.
                      We’ll be announcing our five core oasis as time progress and as we release each one.
                      <ul class="tw_coin_ul">
                        <li><a href="https://Bharat NFT.world/" target="_blank">Bharat NFT.world</a></li>
                        <li><a href="http://Bharat NFT.io/" target="_blank">Bharat NFT.io</a></li>
                        <li><a href="http://Bharat NFT.digital/" target="_blank">Bharat NFT.digital</a></li>
                        <li><a href="http://Bharat NFT.finance/" target="_blank">Bharat NFT.finance</a></li>
                        <li><a href="http://Bharat NFT.gallery/" target="_blank">Bharat NFT.gallery</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card animation" data-animation="fadeInUp" data-animation-delay="1s">
                  <div class="card-header" id="headingFour">
                    <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseFour"
                        aria-expanded="false" aria-controls="collapseFour"><span>Which wallets are
                          supported?
                          </span><ins></ins></a> </h6>
                  </div>
                  <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion1">
                    <div class="card-body">We recommend Trust Wallet or Metamask. Otherwiseany personal
                      preferences works as well as long as Bianca Smart Chain Is
                      supported. Here are some links to Trust Wallet and Metamask to see
                      additional information about each wallet and benefits.<br>
                      Trust Wallet: <a class="faq_link" target="_blank"
                        href="https://trustwallet.com">https://trustwallet.com</a><br>
                      Metamask Wallet: <a class="faq_link" target="_blank"
                        href="https://metamask.io">https://metamask.io</a>
                    </div>
                  </div>
                </div>
                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                  <div class="card-header" id="headingTWC">
                    <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseTWC"
                        aria-expanded="false" aria-controls="collapseTWC"><span> How do I buy Bharat Nft
                          Coin?
                          </span><ins></ins></a> </h6>
                  </div>
                  <div id="collapseTWC" class="collapse" aria-labelledby="headingTWC" data-parent="#accordion1">
                    <div class="card-body">Following steps when clicking buy, will redirect to pancakeswap. On
                      pancakeswap, you will be able to exchange ETH (Binance coin) for
                      Bharat Nft Coin. Here is link below with full guide to pancakeswap
                      for additional information.<br>
                      <a class="faq_link" target="_blank"
                        href="https://academy.binance.com/en/articles/a-guide-to-pancakeswap">https://academy.binance.com/en/articles/a-guide-to-pancakeswap</a>
                    </div>
                  </div>
                </div>
                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                  <div class="card-header" id="headingBSC">
                    <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseBSC"
                        aria-expanded="false" aria-controls="collapseBSC"><span>  How do I connect my wallet to Binance
                          Smart Chain?
                          </span><ins></ins></a> </h6>
                  </div>
                  <div id="collapseBSC" class="collapse" aria-labelledby="headingBSC" data-parent="#accordion1">
                    <div class="card-body">Here are links with steps to link Trust Wallet and Metamask to
                      Binance Smart Chain<br> <a class="faq_link" target="_blank"
                        href="https://academy.binance.com/en/articles/connecting-trust-wallet-to-binance-smart-chain-bsc">https://academy.binance.com/en/articles/connectingtrust-wallet-to-binance-smart-chain-bsc</a><br>
                      Metamask: <a class="faq_link" target="_blank"
                        href="https://academy.binance.com/en/articles/connecting-metamask-to-binance-smart-chain">https://academy.binance.com/en/articles/connectingmetamask-to-binance-smart-chain</a>
                    </div>
                  </div>
                </div>
                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                  <div class="card-header" id="headingTWCoin">
                    <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseTWCoin"
                        aria-expanded="false" aria-controls="collapseTWCoin"><span>Where can I see the charting for Bharat Nft coin?
                          </span><ins></ins></a> </h6>
                  </div>
                  <div id="collapseTWCoin" class="collapse" aria-labelledby="headingTWCoin" data-parent="#accordion1">
                    <div class="card-body">Charting with be available on Dex.guru. Also can scroll on the
                      homepage to partners/listing section and click Dex.guru icon and get
                      directly to BharatNft coin chart.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tab2" role="tabpanel">
              <div id="accordion2" class="faq_content5">
                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                  <div class="card-header" id="headingPS">
                    <h6 class="mb-0"> <a data-toggle="collapse" href="#collapsePS" aria-expanded="true"
                        aria-controls="collapsePS"><span>Private Sale</span><ins></ins></a> </h6>
                  </div>
                  <div id="collapsePS" class="collapse show" aria-labelledby="headingPS" data-parent="#accordion2">
                    <div class="card-body">An early stage investment round for strategic investors with a considerable amount of investible funds.</div>
                  </div>
                </div>
                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                  <div class="card-header" id="headingListing">
                    <h6 class="mb-0"> <a data-toggle="collapse" href="#collapseListing" aria-expanded="true"
                        aria-controls="collapseListing"><span>Listing</span><ins></ins></a> </h6>
                  </div>
                  <div id="collapseListing" class="collapse" aria-labelledby="headingListing" data-parent="#accordion2">
                    <div class="card-body">When an exchange offers trading pairs for a particular asset, this action is known as “listing” the asset. In traditional markets, this means that a companies shares (or material asset) are available to be traded on that particular stock exchange. In general, this means that the company being listed has passed certain thresholds for financial and regulatory viability in addition to a degree of trust from the exchange. Thus, by the act of listing, the exchange is signaling that the shares of company/asset are known to be of a base threshold of quality.</div>
                  </div>
                </div>
                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                  <div class="card-header" id="headingFive">
                    <h6 class="mb-0"> <a data-toggle="collapse" href="#collapseFive" aria-expanded="true"
                        aria-controls="collapseFive"><span>Initial Coin Offering (ICO)</span><ins></ins></a> </h6>
                  </div>
                  <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion2">
                    <div class="card-body">Initial Coin Offering (ICO) is an innovative approach for raising funds through the use of digital currencies (cryptocurrencies). Such a strategy is more prevalent in cryptocurrency projects that are yet to fully developed their blockchain-based product, service, or platform. The funds collected on ICO events are normally received as Bitcoin (BTC) or Ether (ETH), but in some cases, fiat currency may also be taken as payment.</div>
                  </div>
                </div>
                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                  <div class="card-header" id="headingSix">
                    <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseSix"
                        aria-expanded="false" aria-controls="collapseSix"><span>Initial Exchange Offering
                          (IEO)
                          </span><ins></ins></a> </h6>
                  </div>
                  <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion2">
                    <div class="card-body"> An Initial Exchange Offering, commonly referred to as an IEO, is a
                      fundraising event that is administered by an exchange.</div>
                  </div>
                </div>
                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                  <div class="card-header" id="headingSeven">
                    <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseSeven"
                        aria-expanded="false" aria-controls="collapseSeven"><span>   Integrated Circuit
                          (IC)
                          </span><ins></ins></a> </h6>
                  </div>
                  <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion2">
                    <div class="card-body">An integrated circuit (IC) is a small chip, typically made of silicon, that holds a set of electronic parts such as transistors, resistors or capacitors. Such small chips are widely used today and are present in most of the electronic devices. They can perform calculations, and also function as microprocessors, amplifiers, oscillators, and data storage.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tab3" role="tabpanel">
              <div id="accordion3" class="faq_content5">
                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                  <div class="card-header" id="headingNine">
                    <h6 class="mb-0"> <a data-toggle="collapse" href="#collapseNine" aria-expanded="true"
                        aria-controls="collapseNine"><span>Transactions on the creative world</span><ins></ins></a>
                    </h6>
                  </div>
                  <div id="collapseNine" class="collapse show" aria-labelledby="headingNine" data-parent="#accordion3">
                    <div class="card-body">The framework of this innovation emphasizes a community of creative content creators and users who engage their brand on their journey to stardom. To facilitate and actualize this concept, a fund is necessary to validate and carry out transactions. On the Bharat Nft platform, the Bharat Nft  Coin takes up a similar role. Holders of the Coin can sell and purchase creative content/pieces. Web template codes, fonts, music, artworks, and other creatives assets are accessible from anywhere globally and anytime, either for communication, entertainment, or creative teams usage
                    </div>
                  </div>
                </div>
                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                  <div class="card-header" id="headingTen">
                    <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseTen"
                        aria-expanded="false" aria-controls="collapseTen"><span>Partnering with other
                          creatives
                          </span><ins></ins></a> </h6>
                  </div>
                  <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion3">
                    <div class="card-body">
                      To position Bharat Nft as a global creative ecosystem, interactions between creatives and partnerships are essential. Considering the current traditional creative outfit landscape, the creative collaboration is a significant upside that we have decided to amplify. Bharat Nft will be the focal point and primary driver of this idea. As a holder, you can interact and collaborate with partners on projects ranging from design, recording, mobile developments, and other creative efforts.
                    </div>
                  </div>
                </div>
                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                  <div class="card-header" id="headingEleven">
                    <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseEleven"
                        aria-expanded="false" aria-controls="collapseEleven"><span>Rewards and Loyalty
                        
                        </span><ins></ins></a>
                    </h6>
                  </div>
                  <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion3">
                    <div class="card-body">We have laid down plans to set up Projects that reward Bharat Nft coin holders for their support. To support both creatives and users, we can establish a thriving ecosystem for the $Bharat Nft token. In addition, we are working to develop engaging events, games, and milestones that will further expand the use cases of the Bharat Nft Coin.
                    </div>
                  </div>
                </div>
                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                  <div class="card-header" id="headingStaking">
                    <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseStaking"
                        aria-expanded="false" aria-controls="collapseStaking"><span>Stacking</span><ins></ins></a>
                    </h6>
                  </div>
                  <div id="collapseStaking" class="collapse" aria-labelledby="headingStaking" data-parent="#accordion3">
                    <div class="card-body">
                      Simply put, staking is a lesser resource-intensive alternative to mining. Owners of Bharat Nft can hold funds in their wallets to support the operations and security of the platform and Binance Smart Chain alike. In return, using a set of algorithms, they qualify for rewards that are paid in Bharat Nft. Essentially, users can stake on favorite creatives, support them, and earn rewards while doing so. It is worth keeping in mind that staking on Bharat Nft is relatively safe. Besides its tendency to help users earn passive income on assets, we have a dedicated team of experienced professionals and protocols to shield users from bugs and other malware.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tab5" role="tabpanel">
              <div id="accordion4" class="faq_content5">
                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                  <div class="card-header" id="headingSupply">
                    <h6 class="mb-0"> <a data-toggle="collapse" href="#collapseSupply" aria-expanded="true"
                        aria-controls="collapseSupply"><span>What is the supply?</span><ins></ins></a>
                    </h6>
                  </div>
                  <div id="collapseSupply" class="collapse show" aria-labelledby="headingSupply"
                    data-parent="#accordion4">
                    <div class="card-body">Total supply: 1,000,000,000,000,000
                      5% intial burn has begun +more to come as we meet progressive milestones and 55% of the total supply will be locked for period of time through third party defi asset manager service mudra lock (https:// mudra.website). We will provide transparency and certificates to verify and valid supply locks and timeframe. As a commitment to project and ensuring we protect your investment and show our true value in making this project a success.</div>
                  </div>
                </div>
                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                  <div class="card-header" id="headingThirteen">
                    <h6 class="mb-0"> <a data-toggle="collapse" href="#collapseThirteen" aria-expanded="true"
                        aria-controls="collapseThirteen"><span>Circulating Supply</span><ins></ins></a>
                    </h6>
                  </div>
                  <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen"
                    data-parent="#accordion4">
                    <div class="card-body">The term circulating supply refers to the number of cryptocurrency coins or tokens that are publicly available and circulating in the market.</div>
                  </div>
                </div>
                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                  <div class="card-header" id="headingFourteen">
                    <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseFourteen"
                        aria-expanded="false" aria-controls="collapseFourteen"><span>Cloud</span><ins></ins></a> </h6>
                  </div>
                  <div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen"
                    data-parent="#accordion4">
                    <div class="card-body">In computer science, the term cloud refers to a shared pool of resources, which are made available to multiple users through the Internet. Such resources are usually related to data storage and computing power, but may also include different types of services, applications, networks, and servers.</div>
                  </div>
                </div>
                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                  <div class="card-header" id="headingFifteen">
                    <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseFifteen"
                        aria-expanded="false" aria-controls="collapseFifteen"><span>Colocation</span><ins></ins></a>
                    </h6>
                  </div>
                  <div id="collapseFifteen" class="collapse" aria-labelledby="headingFifteen" data-parent="#accordion4">
                    <div class="card-body">In general, colocation (or Colo) refers to the establishment of a shared facility to store IT equipment and specialized hardware of multiple individuals or companies.
                    </div>
                  </div>
                </div>
                <div class="card animation" data-animation="fadeInUp" data-animation-delay="1s">
                  <div class="card-header" id="headingSixteen">
                    <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseSixteen"
                        aria-expanded="false" aria-controls="collapseSixteen"><span>Coin</span><ins></ins></a> </h6>
                  </div>
                  <div id="collapseSixteen" class="collapse" aria-labelledby="headingSixteen" data-parent="#accordion4">
                    <div class="card-body">A cryptocurrency or digital cash that is independent of any other blockchain or platform. The key feature of a coin is that of a currency, and the term may also be used to describe a cryptocurrency asset that is not a token.</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tab4" role="tabpanel">
              <div id="accordion5" class="faq_content5">
                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                  <div class="card-header" id="headingThirteen">
                    <h6 class="mb-0"> <a data-toggle="collapse" href="#collapseThirteen" aria-expanded="true"
                        aria-controls="collapseThirteen"><span>What is Bharat Nft?</span><ins></ins></a>
                    </h6>
                  </div>
                  <div id="collapseThirteen" class="collapse show" aria-labelledby="headingThirteen"
                    data-parent="#accordion4">
                    <div class="card-body">Bharat Nft was founded on the belief that every creative has the right to be independent and free in their journey to attaining stardom. We believe decentralization of the creative economy holds the key to empower creatives globally to gain complete and better control over their creative content. We are the first innovation to leverage the distributed ledger framework to enable fair remuneration and engagement of every creative content and service, irrespective of the niche or target audience, through the ownership of our cryptographic Coin, $Bharat Nft.
                    </div>
                  </div>
                </div>
               
              </div>
            </div>
            <div class="tab-pane fade" id="tab6" role="tabpanel">
              <div id="accordion4" class="faq_content5">

                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                  <div class="card-header" id="headingRewardHold">
                    <h6 class="mb-0"> <a data-toggle="collapse" href="#collapseRewardHold" aria-expanded="true"
                        aria-controls="collapseRewardHold"><span>The reward for Holding $Bharat Nft</span><ins></ins></a>
                    </h6>
                  </div>
                  <div id="collapseRewardHold" class="collapse show" aria-labelledby="headingRewardHold"
                    data-parent="#accordion4">
                    <div class="card-body">We will set aside 4.5% of every transaction and redistribute them anytime holding $Bharat Nft in the form of $ETH. However, holders and mandated to wait for seven days before they can access these rewards. In addition, if holders keep adding over 2% of their overall $Bharat Nft balance within the waiting duration, the waiting duration automatically accumulates with the cycle. Let’s put this in perspective; suppose on the first day of the cycle, a holder adds over 5% $Bharat Nft. In that case, the holder must wait for an additional 8.4 hours (5% of seven days) alongside the previously highlighted seven days. Selling has no effect on the cycle. However, if a user collects over 2 EHT, 15% will be set aside to buy back $Bharat Nft at market price and subsequently burn. This is a practical approach to tackle inflation and keep the token value stable in the long term. The total $ETH in the reward pool determines the amount accessible for holders. Thus, rewards vary with available $ETH.
                    </div>
                  </div>
                </div>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END SECTION FAQ -->

  <!-- START CLIENTS SECTION -->
  <section class=" small_pt small_pb light_blue_dark_bg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title_default_light title_border text-center">
            <h4 class="animation partnerHead" data-animation="fadeInUp" data-animation-delay="0.2s"
              style="margin-bottom: -4px;">Partners / Listings</h4>
            <p class="animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.4s" style="animation-delay: 0.4s; opacity: 1;font-size: 12px;
              letter-spacing: 1.2px;
              line-height: 16px;">Click icons for links to available</p>
          </div>
        </div>
      </div>
      <div class="row align-items-center text-center overflow_hide small_space">
        <div class="col-lg-4 col-md-4 col-6 logo_border">
          <div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation"
            data-animation="fadeInUp" data-animation-delay="0.3s">
            <a class="toolhoverimg" href="https://exchange.pancakeswap.finance/#/swap" target="_blank">
              <img class="img-fluid" src="<?php echo base_url(); ?>assest/website/images/pancakeswap.png" alt="client_logo_gray1" />
            </a>
            <!-- <div id="div-0" class="toltip">
              <div class="toltiptxt">www.exchange.pancakeswap.finance/#/swap</div>
            </div> -->
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-6 logo_border">
          <div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation"
            data-animation="fadeInUp" data-animation-delay="0.4s">
            <a class="toolhoverimg" href="https://dex.guru/token/0x2260fac5e5542a773aa44fbcfedf7c193bc2c599-eth"
              target="_blank">
              <img class="img-fluid" src="<?php echo base_url(); ?>assest/website/images/dex-guru.png" alt="client_logo_gray2" />
            </a>
            <!-- <div id="div-1" class="toltip1">
              <div class="toltiptxt">www.dex.guru/token</div>
            </div> -->
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-6 logo_border">
          <div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation"
            data-animation="fadeInUp" data-animation-delay="0.5s">
            <img class="img-fluid" src="<?php echo base_url(); ?>assest/website/images/coin_market.png" alt="client_logo_gray3" />
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-6 logo_border">
          <div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation"
            data-animation="fadeInUp" data-animation-delay="0.6s">
            <img class="img-fluid" src="<?php echo base_url(); ?>assest/website/images/coinbase.png" alt="client_logo_gray4" />
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-6 logo_border">
          <div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation"
            data-animation="fadeInUp" data-animation-delay="0.7s">
            <img class="img-fluid" src="<?php echo base_url(); ?>assest/website/images/dext.png" alt="client_logo_gray5" />
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-6 logo_border">
          <div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation"
            data-animation="fadeInUp" data-animation-delay="0.8s">
            <img class="img-fluid" src="<?php echo base_url(); ?>assest/website/images/Binance-Logo.png" alt="client_logo_gray6" />
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-6 logo_border">
          <div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation"
            data-animation="fadeInUp" data-animation-delay="0.9s">
            <img class="img-fluid" src="<?php echo base_url(); ?>assest/website/images/coindcx.png" alt="client_logo_gray7" />
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-6 logo_border">
          <div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation"
            data-animation="fadeInUp" data-animation-delay="1s">
            <img class="img-fluid" src="<?php echo base_url(); ?>assest/website/images/huobi.png" alt="client_logo_gray8" />
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-6 logo_border">
          <div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation"
            data-animation="fadeInUp" data-animation-delay="1s">
            <img class="img-fluid" src="<?php echo base_url(); ?>assest/website/images/gemini.png" alt="client_logo_gray8" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END CLIENTS SECTION -->

  <!-- START SECTION CONTACT -->
  <section id="contact" class="contact_section small_pt">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 pr-0 res_md_pr_15">
          <div class="light_blue_dark_bg contact_box animation" data-animation="fadeInLeft" data-animation-delay="0.1s">
            <div class="title_default_light title_border">
              <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Contact Us</h4>
            </div>
            <ul class="list_none contact_info mt-margin">
              <li class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                <i class="ion-ios-email"></i>
                <div class="contact_detail"> <span>Email-id</span>
                  <p>support@Bharat NFT.world</p>
                </div>
              </li>
            </ul>
            <div class="contct_follow large_space">
              <span class="text-uppercase animation" data-animation="fadeInUp" data-animation-delay="0.2s">Follow
                Us</span>
              <ul class="list_none social_icon">
                <li class="animation" data-animation="fadeInUp" data-animation-delay="0.4s"><a href="javascript:;"><i
                      class=" fa fa-facebook"></i></a></li>
                <li class="animation" data-animation="fadeInUp" data-animation-delay="0.5s"><a
                    href="" target="_blank"><i class=" fa fa-twitter"></i></a>
                </li>
                <li class="animation" data-animation="fadeInUp" data-animation-delay="0.6s"><a
                    href="" target="_blank"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="animation" data-animation="fadeInUp" data-animation-delay="0.7s"><a
                    href="" target="_blank"><i class="fab fa-telegram-plane"></i></a>
                </li>
                <li class="animation" data-animation="fadeInUp" data-animation-delay="0.8s"><a
                    href="" target="_blank"><i class="fab fa-discord"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 pl-0 res_md_pl_15">
          <div class="blue_lightdark_bg contact_box animation" data-animation="fadeInRight" data-animation-delay="0.1s">
            <div class="title_default_light title_border">
              <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Leave a Message</h4>
            </div>
            <form method="post" name="enq" class="form_field">
              <div class="row">
                <div class="form-group col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                  <input type="text" required="required" placeholder="Enter Name *" id="first-name" class="form-control"
                    name="name">
                </div>
                <div class="form-group col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                  <input type="email" required="required" placeholder="Enter Email *" id="email" class="form-control"
                    name="email">
                </div>
                <div class="form-group col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                  <input type="text" required="required" placeholder="Enter Subject" id="subject" class="form-control"
                    name="subject">
                </div>
                <div class="form-group col-md-12 animation" data-animation="fadeInUp" data-animation-delay="1s">
                  <textarea required="required" placeholder="Message *" id="description" class="form-control"
                    name="message" rows="2"></textarea>
                </div>
                <div class="col-md-12 text-center animation" data-animation="fadeInUp" data-animation-delay="1.2s">
                  <button type="submit" title="Submit Your Message!" class="btn btn-default btn-radius"
                    id="submitButton" name="submit" value="Submit">Submit <i
                      class="ion-ios-arrow-thin-right"></i></button>
                </div>
                <div class="col-md-12">
                  <div id="alert-msg" class="alert-msg text-center"></div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END SECTION CONTACT -->

  <!-- START FOOTER SECTION -->
  
  <footer id="footer">
    <div class="top_footer light_blue_dark_bg footer_new_bg" data-z-index="1" data-parallax="scroll"
      data-image-src="<?php echo base_url(); ?>assest/website/images/footer_bg.png">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12">
            <div class="footer_logo mb-3 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
              <a href="#home_section" class="page-scroll">
                <img class="logo_light outer_glow" alt="logo" src="<?php echo base_url(); ?>assest/website/images/bharat-nft-logo.png">
              </a>
            </div>
            <div class="footer_desc home_footer">
              <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">
              Bharat NFT is a Community-Driven Multi-Chain IDO/TGE platform with Launchpad Aggregation, Unique Distribution Model, and more.
Bharat NFT aims to provide the much-needed early-stage support for projects through its launchpad aggregation and IDO/TGE services while offering great incentives for Bharat stakers through in-house protocols.
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 res_md_mt_30 res_sm_mt_20">
            <h4 class="footer_title border_title animation home_footer_title" data-animation="fadeInUp"
              data-animation-delay="0.2s">Quick
              Links</h4>
            <ul class="footer_link list_arrow home_footer_link">
              <li class="animation" data-animation="fadeInUp" data-animation-delay="0.2s"><a href="<?php echo base_url(); ?>">Home</a>
              </li>
              <li class="animation" data-animation="fadeInUp" data-animation-delay="0.2s"><a
                  href="javascript:;">Bharat NFT
                  World</a>
              </li>
              <!-- <li class="animation" data-animation="fadeInUp" data-animation-delay="0.2s"><a href="https://Bharat NFT.world/"
                  target="_blank">Bharat NFT
                  World</a>
              </li> -->
              <li class="animation" data-animation="fadeInUp" data-animation-delay="0.4s"><a
                  href="javascript:;" >Whitepaper</a></li>
              <!-- <li class="animation" data-animation="fadeInUp" data-animation-delay="0.3s"><a
                  href="javascript:;">Dextool</a>
              </li> -->
              <li class="animation" data-animation="fadeInUp" data-animation-delay="0.5s"><a href="#faq">FAQ</a>
              </li>
              <li class="animation" data-animation="fadeInUp" data-animation-delay="0.6s"><a
                  href="#contact">Contact</a></li>
            </ul>
          </div>
          <div class="col-lg-5 col-md-6 res_md_mt_30 res_sm_mt_20">
            <div class="newsletter_form home_footer_frm" id="news">
              <h4 class="footer_title border_title animation home_footer_title" data-animation="fadeInUp"
                data-animation-delay="0.2s">
                Newsletter</h4>
              <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                Sign up for early news, details, giveaways, and more.
              </p>
              <form class="subscribe_form animation home_footer_subfrm" data-animation="fadeInUp"
                data-animation-delay="0.4s">
                <input class="input-rounded" type="text" required placeholder="Enter Email Address" />
                <button type="submit" title="Subscribe" class="btn-info" name="submit" value="Submit"> Subscribe
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bottom_footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p class="copyright">Copyright &copy; 2021 All Rights Reserved.</p>
          </div>
          <div class="col-md-6">
            <ul class="list_none footer_menu">
              <li><a href="javascript:;">Privacy Policy</a></li>
              <li><a href="javascript:;">Terms & Conditions</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  
  <!-- END FOOTER SECTION -->

  <a href="#" class="scrollup btn-default"><i class="ion-ios-arrow-up"></i></a>

  <!-- Latest jQuery -->
  <script src="<?php echo base_url(); ?>assest/website/js/jquery-3.6.0.min.js"></script>
  <!-- Latest compiled and minified Bootstrap -->
  <script src="<?php echo base_url(); ?>assest/website/bootstrap/js/bootstrap.min.js"></script>
  <!-- owl-carousel min js  -->
  <script src="<?php echo base_url(); ?>assest/website/owlcarousel/js/owl.carousel.min.js"></script>
  <!-- magnific-popup min js  -->
  <script src="<?php echo base_url(); ?>assest/website/js/magnific-popup.min.js"></script>
  <!-- waypoints min js  -->
  <script src="<?php echo base_url(); ?>assest/website/js/waypoints.min.js"></script>
  <!-- parallax js  -->
  <script src="<?php echo base_url(); ?>assest/website/js/parallax.js"></script>
  <!-- countdown js  -->
  <script src="<?php echo base_url(); ?>assest/website/js/jquery.countdown.min.js"></script>
  <!-- particles min js  -->
  <script src="<?php echo base_url(); ?>assest/website/js/particles.min.js"></script>
  <!-- scripts js -->
  <script src="<?php echo base_url(); ?>assest/website/js/jquery.dd.min.js"></script>
  <!-- jquery.counterup.min js -->
  <script src="<?php echo base_url(); ?>assest/website/js/jquery.counterup.min.js"></script>
  <!-- modern_canvas js -->
  <script src="<?php echo base_url(); ?>assest/website/js/modern_canvas.js"></script>
  <!-- <script src="<?php echo base_url(); ?>assest/website/js/spop.min.js"></script> -->
  <!-- <script src="<?php echo base_url(); ?>assest/website/js/notification.js"></script> -->
  <!-- scripts js -->
  <script src="<?php echo base_url(); ?>assest/website/js/scripts.js"></script>
  <script>
    $('.toolhoverimg').each(function (i, u) {
      $(this).hover(function () {
        $('#div-' + i).show();

      }, function () {
        $('#div-' + i).hide(); //on mouseout;
      })

    });
  </script>
</body>

</html>