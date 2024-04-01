<header class="main-header">
    <!-- Header Lower -->
    <div class="header-lower">
        
        <div class="auto-container clearfix">
            <div class="inner-container clearfix">
                
                <div class="pull-left logo-box">
                    <div class="logo"><a href="/"><img src="{{ asset('template/images/giga_merah.png') }}" width="100px" alt="" title=""></a></div>
                </div>
                <div class="nav-outer clearfix">
                    
                    <!-- Mobile Navigation Toggler -->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                    <!-- Main Menu -->
                    <nav class="main-menu show navbar-expand-md d-md-none d-lg-none" >
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent" style="padding: 15px;">
                            <ul class="navigation clearfix">
                                
                                <li>
                                    <div class="btns-box" style="display:block; padding:0px">
                                        <a href="/" class="theme-btn btn-style-three"><span class="txt">Home</span></a>
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="btns-box" style="display:block; padding:0px">
                                        <a href="{{ route('poffice')}}" class="theme-btn btn-style-three"><span class="txt">Giga Office</span></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="btns-box" style="display:block; padding:0px">
                                        <a href="{{ route('pdedicated')}}" class="theme-btn btn-style-three"><span class="txt">Giga Dedicated</span></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="btns-box" style="display:block; padding:0px">
                                        <a href="{{ route('About.index')}}" class="theme-btn btn-style-three"><span class="txt">Tentang Kami</span></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="btns-box" style="display:block; padding:0px">
                                        <a href="{{ route('Contact.index')}}" class="theme-btn btn-style-three"><span class="txt">Kontak</span></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="btns-box" style="display:block; padding:0px">
                                        <a href="{{ route('pendaftaran.index')}}" class="theme-btn btn-style-three"><span class="txt">Registrasi</span></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        
                    </nav>
                    <!-- Main Menu End-->
                    
                    
                </div>
            </div>
            
        </div>
        <hr class="d-none d-md-block d-lg-block" style="margin: 0px;">
        <div class="auto-container clearfix d-none d-md-block d-lg-block">
            <div class="inner-container clearfix">
                
                <div class="nav-outer clearfix d-md-block d-lg-block">
                    
                    <!-- Mobile Navigation Toggler -->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                    <!-- Main Menu -->
                    <nav class="main-menu show navbar-expand-md" style="float: left !important;">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">

                                <li>
                                    <div class="btns-box" style="display:block; padding:0px;">
                                        <a href="/" class="theme-btn btn-style-three"><span class="txt">Home</span></a>
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="btns-box" style="display:block; padding:0px;">
                                        <a href="{{ route('poffice')}}" class="theme-btn btn-style-three"><span class="txt">Giga Office</span></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="btns-box" style="display:block; padding:0px;">
                                        <a href="{{ route('pdedicated')}}" class="theme-btn btn-style-three"><span class="txt">Giga Dedicated</span></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="btns-box" style="display:block; padding:0px;">
                                        <a href="{{ route('About.index')}}" class="theme-btn btn-style-three"><span class="txt">Tentang Kami</span></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="btns-box" style="display:block; padding:0px;">
                                        <a href="{{ route('Contact.index')}}" class="theme-btn btn-style-three"><span class="txt">Kontak</span></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="btns-box" style="display:block; padding:0px;">
                                        <a href="{{ route('pendaftaran.index')}}" class="theme-btn btn-style-three"><span class="txt">Registrasi</span></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        
                    </nav>
                    <!-- Main Menu End-->
                    
                    
                </div>
            </div>
            
        </div>

    </div>
    <!-- End Header Lower -->
    
    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!-- Logo -->
            <div class="logo pull-left">
                <a href="/" title=""><img src="{{ asset('template/images/giga_merah.png') }}" width="100px" alt="" title=""></a>
            </div>
            
            <!--Right Col-->
            <div class="pull-right">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav><!-- Main Menu End-->
                
                
            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-multiply"></span></div>
        
        <nav class="menu-box">
            <div class="nav-logo"><a href="/"><img src="{{ asset('template/images/giga_merah.png')}} " alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        </nav>
    </div><!-- End Mobile Menu -->

</header>