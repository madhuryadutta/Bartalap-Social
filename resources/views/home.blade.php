@extends('layouts.main')
@push('title')
    <title>Home Page</title>
@endpush
@section('main-section')
    
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic Page Needs
 ================================================== -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="Font Awesome, the iconic font and CSS framework">
  <meta name="author" content="Dave Gandy">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="../assets/ico/favicon.ico">

  <title>fa-user: Font Awesome Icons</title>

  <!-- CSS
  ================================================== -->
  <link rel="stylesheet" href="../assets/css/site.css">
  <link rel="stylesheet" href="../assets/css/pygments.css">
  <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.css">

  <!--[if lt IE 9]>
    <script src="../assets/js/html5shiv.js"></script>
    <script src="../assets/js/respond.min.js"></script>
  <![endif]-->

  <script src="https://use.fonticons.com/ffe176a3.js"></script>

  <script>
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-30136587-4']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script');
      ga.src = 'https://www.google-analytics.com/ga.js';
      var s = document.scripts[0];
      s.parentNode.insertBefore(ga, s);
    })();
  </script>
</head>
<body class="font-awesome ">
    <div id="wrap"> <!-- necessary for sticky footer. wrap all content except footer -->
      <div class="hidden-print fa5" id="banner">
    <div class="container">
      <div class="message-container">
        <div class="tagline">
          <strong>Font Awesome 4 is so 2017.</strong>  Upgrade to version 5 and get twice the icons. 
        </div>
        <div class="action">
          <a id="rotating-url" class="btn btn-primary btn-lg btn-block" href="https://fontawesome.com/?utm_source=v4_homepage&utm_medium=display&utm_campaign=fa5_released&utm_content=banner" target="_blank">
            Get the Latest &nbsp;<i class='fas fas-external-link'></i>
          </a>
        </div>
      </div>
    </div>
  </div>
  
  <div class="navbar navbar-inverse navbar-static-top hidden-print">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <i class="fa fa-bars fa-lg" aria-hidden="true" title="Toggle navigation"></i>
          <span class="sr-only">Toggle navigation</span>
        </button>
        <a class="navbar-brand" href="../"><i class="fa fa-font-awesome" aria-hidden="true"></i> Font Awesome</a>
      </div>
  
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="hidden-sm "><a href="../">Home</a></li>
          <li class="hidden-sm">
            <a href="../whats-new/">What's New</a>
          </li>
          <li class="hidden-xs hidden-md hidden-lg">
            <a href="../whats-new/">New</a>
          </li>
  
          <li class="hidden-sm"><a href="../get-started/">Get Started</a></li>
          <li class="hidden-xs hidden-md hidden-lg">
            <a href="../get-started/">Start</a>
          </li>
  
          <li class="dropdown-split-left"><a href="../icons/">Icons</a></li>
          <li class="dropdown dropdown-split-right hidden-xs">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-caret-down" aria-hidden="true" title="Toggle dropdown menu"></i>
              <span class="sr-only">Toggle dropdown menu</span>
              <span class="toggle drop down"></span>
            </a>
            <ul class="dropdown-menu pull-right">
              <li><a href="../icons/"><i class="fa fa-flag fa-fw" aria-hidden="true"></i>&nbsp; All Icons</a></li>
              <li class="divider"></li>
              <li><a href="../icons/#new"><i class="fa fa-handshake-o fa-fw" aria-hidden="true"></i>&nbsp; New Icons in 4.7</a></li>
              <li><a href="../icons/#web-application"><i class="fa fa-camera-retro fa-fw" aria-hidden="true"></i>&nbsp; Web Application Icons</a></li>
              <li><a href="../icons/#accessibility"><i class="fa fa-universal-access fa-fw" aria-hidden="true"></i>&nbsp; Accessibility Icons</a></li>
              <li><a href="../icons/#hand"><i class="fa fa-hand-spock-o fa-fw" aria-hidden="true"></i>&nbsp; Hand Icons</a></li>
              <li><a href="../icons/#transportation"><i class="fa fa-ship fa-fw" aria-hidden="true"></i>&nbsp; Transportation Icons</a></li>
              <li><a href="../icons/#gender"><i class="fa fa-venus fa-fw" aria-hidden="true"></i>&nbsp; Gender Icons</a></li>
              <li><a href="../icons/#file-type"><i class="fa fa-file-image-o fa-fw" aria-hidden="true"></i>&nbsp; File Type Icons</a></li>
              <li><a href="../icons/#spinner"><i class="fa fa-spinner fa-fw" aria-hidden="true"></i>&nbsp; Spinner Icons</a></li>
              <li><a href="../icons/#form-control"><i class="fa fa-check-square fa-fw" aria-hidden="true"></i>&nbsp; Form Control Icons</a></li>
              <li><a href="../icons/#payment"><i class="fa fa-credit-card fa-fw" aria-hidden="true"></i>&nbsp; Payment Icons</a></li>
              <li><a href="../icons/#chart"><i class="fa fa-pie-chart fa-fw" aria-hidden="true"></i>&nbsp; Chart Icons</a></li>
              <li><a href="../icons/#currency"><i class="fa fa-won fa-fw" aria-hidden="true"></i>&nbsp; Currency Icons</a></li>
              <li><a href="../icons/#text-editor"><i class="fa fa-file-text-o fa-fw" aria-hidden="true"></i>&nbsp; Text Editor Icons</a></li>
              <li><a href="../icons/#directional"><i class="fa fa-arrow-right fa-fw" aria-hidden="true"></i>&nbsp; Directional Icons</a></li>
              <li><a href="../icons/#video-player"><i class="fa fa-play-circle fa-fw" aria-hidden="true"></i>&nbsp; Video Player Icons</a></li>
              <li><a href="../icons/#brand"><i class="fa fa-facebook-official fa-fw" aria-hidden="true"></i>&nbsp; Brand Icons</a></li>
              <li><a href="../icons/#medical"><i class="fa fa-medkit fa-fw" aria-hidden="true"></i>&nbsp; Medical Icons</a></li>
            </ul>
          </li>
          <li class="dropdown-split-left"><a href="../examples/">Examples</a></li>
          <li class="dropdown dropdown-split-right hidden-xs">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-caret-down" aria-hidden="true" title="Toggle dropdown menu"></i>
              <span class="sr-only">Toggle dropdown menu</span>
              <span class="toggle drop down"></span>
            </a>
            <ul class="dropdown-menu pull-right">
              <li><a href="../examples/">Examples</a></li>
              <li class="divider"></li>
              <li><a href="../examples/#basic">Basic Icons</a></li>
              <li><a href="../examples/#larger">Larger Icons</a></li>
              <li><a href="../examples/#fixed-width">Fixed Width Icons</a></li>
              <li><a href="../examples/#list">List Icons</a></li>
              <li><a href="../examples/#bordered-pulled">Bordered & Pulled Icons</a></li>
              <li><a href="../examples/#animated">Animated Icons</a></li>
              <li><a href="../examples/#accessible">Accessibility-Minded</a></li>
              <li><a href="../examples/#rotated-flipped">Rotated &amp; Flipped Icons</a></li>
              <li><a href="../examples/#stacked">Stacked Icons</a></li>
              <li><a href="../examples/#bootstrap">Bootstrap 3 Examples</a></li>
              <li><a href="../examples/#custom">Custom CSS</a></li>
            </ul>
          </li>
          <li class="hidden-sm"><a href="../accessibility/">Accessibility</a></li>
          <li class="hidden-xs hidden-md hidden-lg"><a href="../accessibility/"><i class="fa fa-universal-access"></i></a></li>
          <li><a href="../community/">Community</a></li>
          <li><a href="../license/">License</a></li>
        </ul>
  
        <ul class="nav navbar-nav navbar-right">
          <li><a href="http://articles.fortawesome.com">Blog</a></li>
        </ul>
      </div>
    </div>
  </div>
  
  
      <div class="jumbotron jumbotron-icon">
    <div class="container">
      <div class="info-icons">
        <i class="fa fa-user fa-6" aria-hidden="true"></i>
        <span class="sr-only">Example of user at 6x</span>&nbsp;&nbsp;
        <span class="hide-xs">
          <i class="fa fa-user fa-5" aria-hidden="true"></i>
          <span class="sr-only">Example of user at 5x</span>
          &nbsp;&nbsp;
          <span class="hide-sm">
            <i class="fa fa-user fa-4" aria-hidden="true"></i>
            <span class="sr-only">Example of user at 4x</span>
            &nbsp;&nbsp;
          </span>
          <i class="fa fa-user fa-3" aria-hidden="true"></i>
          <span class="sr-only">Example of user at 3x</span>
          &nbsp;&nbsp;
          <i class="fa fa-user fa-2" aria-hidden="true"></i>
          <span class="sr-only">Example of user at 2x</span>
          &nbsp;
        </span>
        <i class="fa fa-user fa-1" aria-hidden="true"></i>
        <span class="sr-only">Example of user</span>
      </div>
      <h1 class="info-class">
        fa-user
        <small>
          <i class="fa fa-user" aria-hidden="true"></i> &middot;
          Unicode: <span class="upper">f007</span> &middot;
          Created: v1.0 &middot;
          Categories:
          
            Web Application Icons
          
          
          
          
        </small>
      </h1>
    </div>
  </div>
  
  <div class="container">
    <section>
      <div class="row">
        <div class="col-md-9 col-sm-9">
          <p>After you get <a href="../get-started/">up and running</a>, you can place Font Awesome icons just about anywhere with the <code>&lt;i&gt;</code> tag:</p>
          <div class="well well-transparent">
            <div style="font-size: 24px; line-height: 1.5em;">
              <i class="fa fa-user" aria-hidden="true"></i><span class="sr-only">Example of user</span> fa-user
            </div>
          </div>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-user&quot;</span> <span class="na">aria-hidden=</span><span class="s">&quot;true&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
  </code></pre></div>
          <p class="margin-bottom-lg">
            <small class="text-muted">Note: to improve <a href="../accessibility/">web accessibility</a>, we recommend using <strong>aria-hidden="true"</strong> to hide icons used purely for decoration.</small>
          </p>
  
          <div class="lead">
            <i class="fa fa-info-circle" aria-hidden"true"></i> Looking for more? Check out the <a href="../examples/">examples</a>.
          </div>
        </div>
        <div class="col-md-3 col-sm-3">
          <div class="vertical-ad"><script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1673&serve=C6AILKT&placement=fontawesome" id="_carbonads_js"></script>
  </div>
        </div>
      </div>
    </section>
  </div>
  
    </div>
    <footer id="footer" class="footer hidden-print">
    <div class="container text-center">
      <div>
        <i class="fa fa-flag" aria-hidden="true"></i> Font Awesome 4.7.0
        <span class="hide-xs">&middot;</span><br class="hide-sm hide-md hide-lg">
        Created by <a href="https://fontawesome.com">Font Awesome</a>
      </div>
      <div>
        Font Awesome licensed under <a href="http://scripts.sil.org/OFL">SIL OFL 1.1</a>
        <span class="hide-xs">&middot;</span><br class="hide-sm hide-md hide-lg">
        Code licensed under <a href="http://opensource.org/licenses/mit-license.html">MIT License</a>
        <span class="hide-xs hide-sm">&middot;</span><br class="hide-md hide-lg">
        Documentation licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>
      </div>
      <div>
        Thanks to <a href="http://tracking.maxcdn.com/c/148092/3982/378/"><i class="fa fa-maxcdn"></i> MaxCDN</a> for providing the excellent <a href="https://www.bootstrapcdn.com/fontawesome/">BootstrapCDN for Font Awesome</a>
      </div>
      <div class="project">
        <a href="https://github.com/FortAwesome/Font-Awesome">GitHub Project</a> &middot;
        <a href="https://github.com/FortAwesome/Font-Awesome/issues">Issues</a> &middot;
        <a href="/v3.2.1">Old 3.2.1 Docs</a>
      </div>
    </div>
  </footer>
  
    <div class="modal" id="modal-fa5" tabindex="-1" role="dialog" aria-labelledby="modal-fa5-label">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-fa5">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i><span class="close"></span></button>
          <h3 class="modal-title" id="modal-fa5-label">Font Awesome 5 Released!</h3>
        </div>
        <div class="modal-body">
          <div class="row margin-bottom-lg margin-top">
            <div class="col-md-2 col-sm-2 col-xs-2 text-right padding-right-sm">
              <i class="fas fas-trophy-alt fas-3x fas-fw text-muted hidden-xs"></i>
              <i class="fas fas-trophy-alt fas-2x fas-fw text-muted hidden-sm hidden-md hidden-lg"></i>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <h4 class="page-header margin-top-none padding-bottom-sm margin-bottom-sm">More Icons</h4>
              <p>
                Get 1535 icons right now with FA Free, plus another 7020 icons with Pro, which also gets you another 53 icon category packs as we finish them!
              </p>
            </div>
          </div>
          <div class="row margin-bottom-lg">
            <div class="col-md-2 col-sm-2 col-xs-2 text-right padding-right-sm">
              <i class="fas fas-flask fas-3x fas-fw text-muted hidden-xs"></i>
              <i class="fas fas-flask fas-2x fas-fw text-muted hidden-sm hidden-md hidden-lg"></i>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <h4 class="page-header margin-top-none padding-bottom-sm margin-bottom-sm">All-New SVG</h4>
              <p>
                Our all-new SVG with JavaScript gives you all the power of SVG without the usual hassle.
              </p>
            </div>
          </div>
          <div class="row margin-bottom-lg">
            <div class="col-md-2 col-sm-2 col-xs-2 text-right padding-right-sm">
              <i class="fas fas-rocket fas-3x fas-fw text-muted hidden-xs"></i>
              <i class="fas fas-rocket fas-2x fas-fw text-muted hidden-sm hidden-md hidden-lg"></i>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-10">
              <h4 class="page-header margin-top-none padding-bottom-sm margin-bottom-sm">Tons More</h4>
              <p>
                Ligatures for easier desktop use, shim for quick upgrades from 4, and more styles, icons, and tools with FA Pro.
              </p>
            </div>
          </div>
  
          <a target="_blank" href="https://fontawesome.com/?utm_source=font_awesome_homepage&utm_medium=display&utm_campaign=fa5_released&utm_content=auto_modal" class="btn btn-fa5 btn-lg btn-block">
            <h3 class="margin-top margin-bottom strong">
              Font Awesome 5 &nbsp;<i class="fas fas-external-link" aria-hidden="true"></i>
            </h3>
          </a>
  
        </div>
      </div>
    </div>
  </div>
  
    <script src="https://platform.twitter.com/widgets.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/algoliasearch/3.13.1/algoliasearch.jquery.min.js" integrity="sha256-2MTQjOt4Q02v+W/QjgCO5yv+si9RAo/o/RGR5alVYzY=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/algoliasearch.helper/2.9.1/algoliasearch.helper.min.js" integrity="sha256-MhjLBzVVNkMEKnIE2ueYNb7QSj+oiSv4x89dlui09hg=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/underscorejs/1.8.3/underscore-min.js" integrity="sha256-obZACiHd7gkOk9iIL/pimWMTJ4W/pBsKu+oZnSeBIek=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/backbonejs/1.2.2/backbone-min.js" integrity="sha256-p6bkfFqmxtebrKOS+wyGi+Qf3d111eWUQP67keyXJ6Q=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/jsdelivr-rum/1.5/jsdelivr-rum.min.js" integrity="sha256-HlY2rbkgbiHhtilMXmQ86rjL/EIxGDtdg9GU9/T2ZxE=" crossorigin="anonymous"></script>
    <script src="../assets/js/site.js"></script>
    <script src="../assets/js/search.js"></script>
    <script src="../assets/js/monetization.js" type="text/javascript"></script>
  
    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
    document,'script','https://connect.facebook.net/en_US/fbevents.js');
  
    fbq('init', '590758314440297');
    fbq('track', "PageView");</script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=590758314440297&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
    </body>
  </html> 
<body class="font-awesome ">
  <div id="wrap"> <!-- necessary for sticky footer. wrap all content except footer -->
    <div class="hidden-print fa5" id="banner">
  <div class="container">
    <div class="message-container">
      <div class="tagline">
        <strong>Font Awesome 4 is so 2017.</strong>  Upgrade to version 5 and get twice the icons. 
      </div>
      <div class="action">
        <a id="rotating-url" class="btn btn-primary btn-lg btn-block" href="https://fontawesome.com/?utm_source=v4_homepage&utm_medium=display&utm_campaign=fa5_released&utm_content=banner" target="_blank">
          Get the Latest &nbsp;<i class='fas fas-external-link'></i>
        </a>
      </div>
    </div>
  </div>
</div>

<div class="navbar navbar-inverse navbar-static-top hidden-print">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <i class="fa fa-bars fa-lg" aria-hidden="true" title="Toggle navigation"></i>
        <span class="sr-only">Toggle navigation</span>
      </button>
      <a class="navbar-brand" href="../"><i class="fa fa-font-awesome" aria-hidden="true"></i> Font Awesome</a>
    </div>

    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="hidden-sm "><a href="../">Home</a></li>
        <li class="hidden-sm">
          <a href="../whats-new/">What's New</a>
        </li>
        <li class="hidden-xs hidden-md hidden-lg">
          <a href="../whats-new/">New</a>
        </li>

        <li class="hidden-sm"><a href="../get-started/">Get Started</a></li>
        <li class="hidden-xs hidden-md hidden-lg">
          <a href="../get-started/">Start</a>
        </li>

        <li class="dropdown-split-left"><a href="../icons/">Icons</a></li>
        <li class="dropdown dropdown-split-right hidden-xs">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-caret-down" aria-hidden="true" title="Toggle dropdown menu"></i>
            <span class="sr-only">Toggle dropdown menu</span>
            <span class="toggle drop down"></span>
          </a>
          <ul class="dropdown-menu pull-right">
            <li><a href="../icons/"><i class="fa fa-flag fa-fw" aria-hidden="true"></i>&nbsp; All Icons</a></li>
            <li class="divider"></li>
            <li><a href="../icons/#new"><i class="fa fa-handshake-o fa-fw" aria-hidden="true"></i>&nbsp; New Icons in 4.7</a></li>
            <li><a href="../icons/#web-application"><i class="fa fa-camera-retro fa-fw" aria-hidden="true"></i>&nbsp; Web Application Icons</a></li>
            <li><a href="../icons/#accessibility"><i class="fa fa-universal-access fa-fw" aria-hidden="true"></i>&nbsp; Accessibility Icons</a></li>
            <li><a href="../icons/#hand"><i class="fa fa-hand-spock-o fa-fw" aria-hidden="true"></i>&nbsp; Hand Icons</a></li>
            <li><a href="../icons/#transportation"><i class="fa fa-ship fa-fw" aria-hidden="true"></i>&nbsp; Transportation Icons</a></li>
            <li><a href="../icons/#gender"><i class="fa fa-venus fa-fw" aria-hidden="true"></i>&nbsp; Gender Icons</a></li>
            <li><a href="../icons/#file-type"><i class="fa fa-file-image-o fa-fw" aria-hidden="true"></i>&nbsp; File Type Icons</a></li>
            <li><a href="../icons/#spinner"><i class="fa fa-spinner fa-fw" aria-hidden="true"></i>&nbsp; Spinner Icons</a></li>
            <li><a href="../icons/#form-control"><i class="fa fa-check-square fa-fw" aria-hidden="true"></i>&nbsp; Form Control Icons</a></li>
            <li><a href="../icons/#payment"><i class="fa fa-credit-card fa-fw" aria-hidden="true"></i>&nbsp; Payment Icons</a></li>
            <li><a href="../icons/#chart"><i class="fa fa-pie-chart fa-fw" aria-hidden="true"></i>&nbsp; Chart Icons</a></li>
            <li><a href="../icons/#currency"><i class="fa fa-won fa-fw" aria-hidden="true"></i>&nbsp; Currency Icons</a></li>
            <li><a href="../icons/#text-editor"><i class="fa fa-file-text-o fa-fw" aria-hidden="true"></i>&nbsp; Text Editor Icons</a></li>
            <li><a href="../icons/#directional"><i class="fa fa-arrow-right fa-fw" aria-hidden="true"></i>&nbsp; Directional Icons</a></li>
            <li><a href="../icons/#video-player"><i class="fa fa-play-circle fa-fw" aria-hidden="true"></i>&nbsp; Video Player Icons</a></li>
            <li><a href="../icons/#brand"><i class="fa fa-facebook-official fa-fw" aria-hidden="true"></i>&nbsp; Brand Icons</a></li>
            <li><a href="../icons/#medical"><i class="fa fa-medkit fa-fw" aria-hidden="true"></i>&nbsp; Medical Icons</a></li>
          </ul>
        </li>
        <li class="dropdown-split-left"><a href="../examples/">Examples</a></li>
        <li class="dropdown dropdown-split-right hidden-xs">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-caret-down" aria-hidden="true" title="Toggle dropdown menu"></i>
            <span class="sr-only">Toggle dropdown menu</span>
            <span class="toggle drop down"></span>
          </a>
          <ul class="dropdown-menu pull-right">
            <li><a href="../examples/">Examples</a></li>
            <li class="divider"></li>
            <li><a href="../examples/#basic">Basic Icons</a></li>
            <li><a href="../examples/#larger">Larger Icons</a></li>
            <li><a href="../examples/#fixed-width">Fixed Width Icons</a></li>
            <li><a href="../examples/#list">List Icons</a></li>
            <li><a href="../examples/#bordered-pulled">Bordered & Pulled Icons</a></li>
            <li><a href="../examples/#animated">Animated Icons</a></li>
            <li><a href="../examples/#accessible">Accessibility-Minded</a></li>
            <li><a href="../examples/#rotated-flipped">Rotated &amp; Flipped Icons</a></li>
            <li><a href="../examples/#stacked">Stacked Icons</a></li>
            <li><a href="../examples/#bootstrap">Bootstrap 3 Examples</a></li>
            <li><a href="../examples/#custom">Custom CSS</a></li>
          </ul>
        </li>
        <li class="hidden-sm"><a href="../accessibility/">Accessibility</a></li>
        <li class="hidden-xs hidden-md hidden-lg"><a href="../accessibility/"><i class="fa fa-universal-access"></i></a></li>
        <li><a href="../community/">Community</a></li>
        <li><a href="../license/">License</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://articles.fortawesome.com">Blog</a></li>
      </ul>
    </div>
  </div>
</div>


    <div class="jumbotron jumbotron-icon">
  <div class="container">
    <div class="info-icons">
      <i class="fa fa-user fa-6" aria-hidden="true"></i>
      <span class="sr-only">Example of user at 6x</span>&nbsp;&nbsp;
      <span class="hide-xs">
        <i class="fa fa-user fa-5" aria-hidden="true"></i>
        <span class="sr-only">Example of user at 5x</span>
        &nbsp;&nbsp;
        <span class="hide-sm">
          <i class="fa fa-user fa-4" aria-hidden="true"></i>
          <span class="sr-only">Example of user at 4x</span>
          &nbsp;&nbsp;
        </span>
        <i class="fa fa-user fa-3" aria-hidden="true"></i>
        <span class="sr-only">Example of user at 3x</span>
        &nbsp;&nbsp;
        <i class="fa fa-user fa-2" aria-hidden="true"></i>
        <span class="sr-only">Example of user at 2x</span>
        &nbsp;
      </span>
      <i class="fa fa-user fa-1" aria-hidden="true"></i>
      <span class="sr-only">Example of user</span>
    </div>
    <h1 class="info-class">
      fa-user
      <small>
        <i class="fa fa-user" aria-hidden="true"></i> &middot;
        Unicode: <span class="upper">f007</span> &middot;
        Created: v1.0 &middot;
        Categories:
        
          Web Application Icons
        
        
        
        
      </small>
    </h1>
  </div>
</div>

<div class="container">
  <section>
    <div class="row">
      <div class="col-md-9 col-sm-9">
        <p>After you get <a href="../get-started/">up and running</a>, you can place Font Awesome icons just about anywhere with the <code>&lt;i&gt;</code> tag:</p>
        <div class="well well-transparent">
          <div style="font-size: 24px; line-height: 1.5em;">
            <i class="fa fa-user" aria-hidden="true"></i><span class="sr-only">Example of user</span> fa-user
          </div>
        </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-user&quot;</span> <span class="na">aria-hidden=</span><span class="s">&quot;true&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
</code></pre></div>
        <p class="margin-bottom-lg">
          <small class="text-muted">Note: to improve <a href="../accessibility/">web accessibility</a>, we recommend using <strong>aria-hidden="true"</strong> to hide icons used purely for decoration.</small>
        </p>

        <div class="lead">
          <i class="fa fa-info-circle" aria-hidden"true"></i> Looking for more? Check out the <a href="../examples/">examples</a>.
        </div>
      </div>
      <div class="col-md-3 col-sm-3">
        <div class="vertical-ad"><script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1673&serve=C6AILKT&placement=fontawesome" id="_carbonads_js"></script>
</div>
      </div>
    </div>
  </section>
</div>

  </div>
  <footer id="footer" class="footer hidden-print">
  <div class="container text-center">
    <div>
      <i class="fa fa-flag" aria-hidden="true"></i> Font Awesome 4.7.0
      <span class="hide-xs">&middot;</span><br class="hide-sm hide-md hide-lg">
      Created by <a href="https://fontawesome.com">Font Awesome</a>
    </div>
    <div>
      Font Awesome licensed under <a href="http://scripts.sil.org/OFL">SIL OFL 1.1</a>
      <span class="hide-xs">&middot;</span><br class="hide-sm hide-md hide-lg">
      Code licensed under <a href="http://opensource.org/licenses/mit-license.html">MIT License</a>
      <span class="hide-xs hide-sm">&middot;</span><br class="hide-md hide-lg">
      Documentation licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>
    </div>
    <div>
      Thanks to <a href="http://tracking.maxcdn.com/c/148092/3982/378/"><i class="fa fa-maxcdn"></i> MaxCDN</a> for providing the excellent <a href="https://www.bootstrapcdn.com/fontawesome/">BootstrapCDN for Font Awesome</a>
    </div>
    <div class="project">
      <a href="https://github.com/FortAwesome/Font-Awesome">GitHub Project</a> &middot;
      <a href="https://github.com/FortAwesome/Font-Awesome/issues">Issues</a> &middot;
      <a href="/v3.2.1">Old 3.2.1 Docs</a>
    </div>
  </div>
</footer>

  <div class="modal" id="modal-fa5" tabindex="-1" role="dialog" aria-labelledby="modal-fa5-label">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-fa5">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i><span class="close"></span></button>
        <h3 class="modal-title" id="modal-fa5-label">Font Awesome 5 Released!</h3>
      </div>
      <div class="modal-body">
        <div class="row margin-bottom-lg margin-top">
          <div class="col-md-2 col-sm-2 col-xs-2 text-right padding-right-sm">
            <i class="fas fas-trophy-alt fas-3x fas-fw text-muted hidden-xs"></i>
            <i class="fas fas-trophy-alt fas-2x fas-fw text-muted hidden-sm hidden-md hidden-lg"></i>
          </div>
          <div class="col-md-9 col-sm-9 col-xs-9">
            <h4 class="page-header margin-top-none padding-bottom-sm margin-bottom-sm">More Icons</h4>
            <p>
              Get 1535 icons right now with FA Free, plus another 7020 icons with Pro, which also gets you another 53 icon category packs as we finish them!
            </p>
          </div>
        </div>
        <div class="row margin-bottom-lg">
          <div class="col-md-2 col-sm-2 col-xs-2 text-right padding-right-sm">
            <i class="fas fas-flask fas-3x fas-fw text-muted hidden-xs"></i>
            <i class="fas fas-flask fas-2x fas-fw text-muted hidden-sm hidden-md hidden-lg"></i>
          </div>
          <div class="col-md-9 col-sm-9 col-xs-9">
            <h4 class="page-header margin-top-none padding-bottom-sm margin-bottom-sm">All-New SVG</h4>
            <p>
              Our all-new SVG with JavaScript gives you all the power of SVG without the usual hassle.
            </p>
          </div>
        </div>
        <div class="row margin-bottom-lg">
          <div class="col-md-2 col-sm-2 col-xs-2 text-right padding-right-sm">
            <i class="fas fas-rocket fas-3x fas-fw text-muted hidden-xs"></i>
            <i class="fas fas-rocket fas-2x fas-fw text-muted hidden-sm hidden-md hidden-lg"></i>
          </div>
          <div class="col-md-9 col-sm-9 col-xs-10">
            <h4 class="page-header margin-top-none padding-bottom-sm margin-bottom-sm">Tons More</h4>
            <p>
              Ligatures for easier desktop use, shim for quick upgrades from 4, and more styles, icons, and tools with FA Pro.
            </p>
          </div>
        </div>

        <a target="_blank" href="https://fontawesome.com/?utm_source=font_awesome_homepage&utm_medium=display&utm_campaign=fa5_released&utm_content=auto_modal" class="btn btn-fa5 btn-lg btn-block">
          <h3 class="margin-top margin-bottom strong">
            Font Awesome 5 &nbsp;<i class="fas fas-external-link" aria-hidden="true"></i>
          </h3>
        </a>

      </div>
    </div>
  </div>
</div>

  <script src="https://platform.twitter.com/widgets.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/algoliasearch/3.13.1/algoliasearch.jquery.min.js" integrity="sha256-2MTQjOt4Q02v+W/QjgCO5yv+si9RAo/o/RGR5alVYzY=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/algoliasearch.helper/2.9.1/algoliasearch.helper.min.js" integrity="sha256-MhjLBzVVNkMEKnIE2ueYNb7QSj+oiSv4x89dlui09hg=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/underscorejs/1.8.3/underscore-min.js" integrity="sha256-obZACiHd7gkOk9iIL/pimWMTJ4W/pBsKu+oZnSeBIek=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/backbonejs/1.2.2/backbone-min.js" integrity="sha256-p6bkfFqmxtebrKOS+wyGi+Qf3d111eWUQP67keyXJ6Q=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/jsdelivr-rum/1.5/jsdelivr-rum.min.js" integrity="sha256-HlY2rbkgbiHhtilMXmQ86rjL/EIxGDtdg9GU9/T2ZxE=" crossorigin="anonymous"></script>
  <script src="../assets/js/site.js"></script>
  <script src="../assets/js/search.js"></script>
  <script src="../assets/js/monetization.js" type="text/javascript"></script>

  <!-- Facebook Pixel Code -->
  <script>
  !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
  n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
  document,'script','https://connect.facebook.net/en_US/fbevents.js');

  fbq('init', '590758314440297');
  fbq('track', "PageView");</script>
  <noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=590758314440297&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Facebook Pixel Code -->
  </body>
</html>

@endsection