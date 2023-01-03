<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Venus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
<link href="{{asset('/Venus/main.css')}}" rel="stylesheet"></head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div >
                <div class="logo-src"></div>


                <div >

<img width="42" class="rounded-circle" src="data:image/png;base64,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" alt="">
</div>

                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                    <ul class="header-menu nav">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-database"> </i>
                                Statistics
                            </a>
                        </li>
                        <li class="btn-group nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-edit"></i>
                                Projects
                            </a>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-cog"></i>
                                Settings
                            </a>
                        </li>
                    </ul>        </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">User Account</button>
                                            <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                            <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                            <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        Lucia Pinto
                                    </div>
                                    <div class="widget-subheading">
                                        VP People Manager
                                    </div>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                        <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>        </div>
            </div>
        </div>        <div class="ui-theme-settings">
            <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
                <i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
            </button>
            <div class="theme-settings__inner">
                <div class="scrollbar-container">
                    <div class="theme-settings__options-wrapper">
                        <h3 class="themeoptions-heading">Layout Options
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-header">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Header
                                                </div>
                                                <div class="widget-subheading">Makes the header top fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-sidebar">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Sidebar
                                                </div>
                                                <div class="widget-subheading">Makes the sidebar left fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-footer">
                                                    <div class="switch-animate switch-off">
                                                        <input type="checkbox" data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Footer
                                                </div>
                                                <div class="widget-subheading">Makes the app footer bottom fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>
                                Header Options
                            </div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-header-cs-class" data-class="">
                                Restore Default
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Choose Color Scheme
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div class="swatch-holder bg-primary switch-header-cs-class" data-class="bg-primary header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-secondary switch-header-cs-class" data-class="bg-secondary header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-success switch-header-cs-class" data-class="bg-success header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-info switch-header-cs-class" data-class="bg-info header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-warning switch-header-cs-class" data-class="bg-warning header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-danger switch-header-cs-class" data-class="bg-danger header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-light switch-header-cs-class" data-class="bg-light header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-dark switch-header-cs-class" data-class="bg-dark header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-focus switch-header-cs-class" data-class="bg-focus header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-alternate switch-header-cs-class" data-class="bg-alternate header-text-light">
                                        </div>
                                        <div class="divider">
                                        </div>
                                        <div class="swatch-holder bg-vicious-stance switch-header-cs-class" data-class="bg-vicious-stance header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-midnight-bloom switch-header-cs-class" data-class="bg-midnight-bloom header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-night-sky switch-header-cs-class" data-class="bg-night-sky header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-slick-carbon switch-header-cs-class" data-class="bg-slick-carbon header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-asteroid switch-header-cs-class" data-class="bg-asteroid header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-royal switch-header-cs-class" data-class="bg-royal header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-warm-flame switch-header-cs-class" data-class="bg-warm-flame header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-night-fade switch-header-cs-class" data-class="bg-night-fade header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-sunny-morning switch-header-cs-class" data-class="bg-sunny-morning header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-tempting-azure switch-header-cs-class" data-class="bg-tempting-azure header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-amy-crisp switch-header-cs-class" data-class="bg-amy-crisp header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-heavy-rain switch-header-cs-class" data-class="bg-heavy-rain header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-mean-fruit switch-header-cs-class" data-class="bg-mean-fruit header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-malibu-beach switch-header-cs-class" data-class="bg-malibu-beach header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-deep-blue switch-header-cs-class" data-class="bg-deep-blue header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-ripe-malin switch-header-cs-class" data-class="bg-ripe-malin header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-arielle-smile switch-header-cs-class" data-class="bg-arielle-smile header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-plum-plate switch-header-cs-class" data-class="bg-plum-plate header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-fisher switch-header-cs-class" data-class="bg-happy-fisher header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-happy-itmeo switch-header-cs-class" data-class="bg-happy-itmeo header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-mixed-hopes switch-header-cs-class" data-class="bg-mixed-hopes header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-strong-bliss switch-header-cs-class" data-class="bg-strong-bliss header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-grow-early switch-header-cs-class" data-class="bg-grow-early header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-love-kiss switch-header-cs-class" data-class="bg-love-kiss header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-premium-dark switch-header-cs-class" data-class="bg-premium-dark header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-green switch-header-cs-class" data-class="bg-happy-green header-text-light">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>Sidebar Options</div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-sidebar-cs-class" data-class="">
                                Restore Default
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Choose Color Scheme
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div class="swatch-holder bg-primary switch-sidebar-cs-class" data-class="bg-primary sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-secondary switch-sidebar-cs-class" data-class="bg-secondary sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-success switch-sidebar-cs-class" data-class="bg-success sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-info switch-sidebar-cs-class" data-class="bg-info sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-warning switch-sidebar-cs-class" data-class="bg-warning sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-danger switch-sidebar-cs-class" data-class="bg-danger sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-light switch-sidebar-cs-class" data-class="bg-light sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-dark switch-sidebar-cs-class" data-class="bg-dark sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-focus switch-sidebar-cs-class" data-class="bg-focus sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-alternate switch-sidebar-cs-class" data-class="bg-alternate sidebar-text-light">
                                        </div>
                                        <div class="divider">
                                        </div>
                                        <div class="swatch-holder bg-vicious-stance switch-sidebar-cs-class" data-class="bg-vicious-stance sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-midnight-bloom switch-sidebar-cs-class" data-class="bg-midnight-bloom sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-night-sky switch-sidebar-cs-class" data-class="bg-night-sky sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-slick-carbon switch-sidebar-cs-class" data-class="bg-slick-carbon sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-asteroid switch-sidebar-cs-class" data-class="bg-asteroid sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-royal switch-sidebar-cs-class" data-class="bg-royal sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-warm-flame switch-sidebar-cs-class" data-class="bg-warm-flame sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-night-fade switch-sidebar-cs-class" data-class="bg-night-fade sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-sunny-morning switch-sidebar-cs-class" data-class="bg-sunny-morning sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-tempting-azure switch-sidebar-cs-class" data-class="bg-tempting-azure sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-amy-crisp switch-sidebar-cs-class" data-class="bg-amy-crisp sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-heavy-rain switch-sidebar-cs-class" data-class="bg-heavy-rain sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-mean-fruit switch-sidebar-cs-class" data-class="bg-mean-fruit sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-malibu-beach switch-sidebar-cs-class" data-class="bg-malibu-beach sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-deep-blue switch-sidebar-cs-class" data-class="bg-deep-blue sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-ripe-malin switch-sidebar-cs-class" data-class="bg-ripe-malin sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-arielle-smile switch-sidebar-cs-class" data-class="bg-arielle-smile sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-plum-plate switch-sidebar-cs-class" data-class="bg-plum-plate sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-fisher switch-sidebar-cs-class" data-class="bg-happy-fisher sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-happy-itmeo switch-sidebar-cs-class" data-class="bg-happy-itmeo sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-mixed-hopes switch-sidebar-cs-class" data-class="bg-mixed-hopes sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-strong-bliss switch-sidebar-cs-class" data-class="bg-strong-bliss sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-grow-early switch-sidebar-cs-class" data-class="bg-grow-early sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-love-kiss switch-sidebar-cs-class" data-class="bg-love-kiss sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-premium-dark switch-sidebar-cs-class" data-class="bg-premium-dark sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-green switch-sidebar-cs-class" data-class="bg-happy-green sidebar-text-light">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>Main Content Options</div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto active btn btn-focus btn-sm">Restore Default
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Page Section Tabs
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div role="group" class="mt-2 btn-group">
                                            <button type="button" class="btn-wide btn-shadow btn-primary btn btn-secondary switch-theme-class" data-class="body-tabs-line">
                                                Line
                                            </button>
                                            <button type="button" class="btn-wide btn-shadow btn-primary active btn btn-secondary switch-theme-class" data-class="body-tabs-shadow">
                                                Shadow
                                            </button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>        <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Dashboards</li>
                                <li>
                                    <a href="index.html" class="mm-active">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        Dashboard Example 1
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">UI Components</li>
                                <li
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                >
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        Elements
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                    >
                                        <li>
                                            <a href="elements-buttons-standard.html">
                                                <i class="metismenu-icon"></i>
                                                Buttons
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-dropdowns.html">
                                                <i class="metismenu-icon">
                                                </i>Dropdowns
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-icons.html">
                                                <i class="metismenu-icon">
                                                </i>Icons
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-badges-labels.html">
                                                <i class="metismenu-icon">
                                                </i>Badges
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-cards.html">
                                                <i class="metismenu-icon">
                                                </i>Cards
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-list-group.html">
                                                <i class="metismenu-icon">
                                                </i>List Groups
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-navigation.html">
                                                <i class="metismenu-icon">
                                                </i>Navigation Menus
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-utilities.html">
                                                <i class="metismenu-icon">
                                                </i>Utilities
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                >
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-car"></i>
                                        Components
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                    >
                                        <li>
                                            <a href="components-tabs.html">
                                                <i class="metismenu-icon">
                                                </i>Tabs
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-accordions.html">
                                                <i class="metismenu-icon">
                                                </i>Accordions
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-notifications.html">
                                                <i class="metismenu-icon">
                                                </i>Notifications
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-modals.html">
                                                <i class="metismenu-icon">
                                                </i>Modals
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-progress-bar.html">
                                                <i class="metismenu-icon">
                                                </i>Progress Bar
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-tooltips-popovers.html">
                                                <i class="metismenu-icon">
                                                </i>Tooltips &amp; Popovers
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-carousel.html">
                                                <i class="metismenu-icon">
                                                </i>Carousel
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-calendar.html">
                                                <i class="metismenu-icon">
                                                </i>Calendar
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-pagination.html">
                                                <i class="metismenu-icon">
                                                </i>Pagination
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-scrollable-elements.html">
                                                <i class="metismenu-icon">
                                                </i>Scrollable
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-maps.html">
                                                <i class="metismenu-icon">
                                                </i>Maps
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li  >
                                    <a href="tables-regular.html">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                        Tables
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Widgets</li>
                                <li>
                                    <a href="dashboard-boxes.html">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                        Dashboard Boxes
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Forms</li>
                                <li>
                                    <a href="forms-controls.html">
                                        <i class="metismenu-icon pe-7s-mouse">
                                        </i>Forms Controls
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-layouts.html">
                                        <i class="metismenu-icon pe-7s-eyedropper">
                                        </i>Forms Layouts
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-validation.html">
                                        <i class="metismenu-icon pe-7s-pendrive">
                                        </i>Forms Validation
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Charts</li>
                                <li>
                                    <a href="charts-chartjs.html">
                                        <i class="metismenu-icon pe-7s-graph2">
                                        </i>ChartJS
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">PRO Version</li>
                                <li>
                                    <a href="https://dashboardpack.com/theme-details/architectui-dashboard-html-pro/" target="_blank">
                                        <i class="metismenu-icon pe-7s-graph2">
                                        </i>
                                        Upgrade to PRO
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>    <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        
										<img width="42" class="rounded-circle" src="data:image/png;base64,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" alt="">
                                    </div>
                                    <div>Venus Dashboard
                                        <div class="page-title-subheading">Panel de control- Registro de Vulneraciones.
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                        <i class="fa fa-star"></i>
                                    </button>
                                    <div class="d-inline-block dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-business-time fa-w-20"></i>
                                            </span>
                                            Buttons
                                        </button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span>
                                                            Inbox
                                                        </span>
                                                        <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-book"></i>
                                                        <span>
                                                            Book
                                                        </span>
                                                        <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-picture"></i>
                                                        <span>
                                                            Picture
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a disabled href="javascript:void(0);" class="nav-link disabled">
                                                        <i class="nav-link-icon lnr-file-empty"></i>
                                                        <span>
                                                            File Disabled
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>    </div>
                        </div>            <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-midnight-bloom">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Niñez y Adolecencia</div>
                                            <div class="widget-subheading">Registros históricos</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>389</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-arielle-smile">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Adultos Mayores</div>
                                            <div class="widget-subheading">Registros históricos</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>568</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-grow-early">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Intrafamiliar</div>
                                            <div class="widget-subheading">Registros históricos</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>298</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-premium-dark">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Products Sold</div>
                                            <div class="widget-subheading">Revenue streams</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-warning"><span>$14M</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Grupo 4</div>
                                                <div class="widget-subheading">Registros históricos</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-success">1896</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Grupo 5</div>
                                                <div class="widget-subheading">Registros históricos</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-warning">679</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Grupo 6</div>
                                                <div class="widget-subheading">registros históricos</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger">89</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Income</div>
                                                <div class="widget-subheading">Expected totals</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-focus">$147</div>
                                            </div>
                                        </div>
                                        <div class="widget-progress-wrapper">
                                            <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width: 54%;"></div>
                                            </div>
                                            <div class="progress-sub-label">
                                                <div class="sub-label-left">Expenses</div>
                                                <div class="sub-label-right">100%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
						


						



                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">Nñez y Adolecencia
                                        <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                                <button class="active btn btn-focus">Última semana</button>
                                                <button class="btn btn-focus">Todos</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>Fecha del registro</th>
												<th class="text-center">Tipo de vulneración</th>
												<th class="text-center">Parroqia</th>
												<th class="text-center">Instancia actual</th>
                                                <th class="text-center">Estado</th>
                                                <th class="text-center">Información</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="text-center text-muted">#345</td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">
                                                                    <img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">20/07/2020</div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
												<td class="text-center">Violencia</td>
												<td class="text-center">Parroquia 1</td>
												<td class="text-center">DINAPEN</td>
                                                <td class="text-center">
                                                    <div class="badge badge-warning">Pendiente</div>
                                                </td>
                                                <td class="text-center">
                                                <a href="/formvenus" class="nav-link">
                                                <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Detalles</button>
                                            </a>

                                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center text-muted">#347</td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">
                                                                    <img width="40" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">25/07/2020</div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
												<td class="text-center">Mendicidad</td>
												<td class="text-center">Parroquia 2</td>
												<td class="text-center">MIES</td>
                                                <td class="text-center">
                                                    <div class="badge badge-success">Atendido</div>
                                                </td>
                                                <td class="text-center">
                                                <a href="/formvenus" class="nav-link">
                                                <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Detalles</button>
                                            </a>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center text-muted">#321</td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">
                                                                    <img width="40" class="rounded-circle" src="assets/images/avatars/2.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">28/07/2020</div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
												<td class="text-center">Trabajo Infantil</td>
												<td class="text-center">Parroquia 3</td>
												<td class="text-center">COPRODER</td>
                                                <td class="text-center">
                                                    <div class="badge badge-danger">Sin atender</div>
                                                </td>
                                                <td class="text-center">
                                                <a href="/formvenus" class="nav-link">
                                                <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Detalles</button>
                                            </a>

                                                </td>
                                            </tr>
                                           
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="d-block text-center card-footer">
                                        <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                        <button class="btn-wide btn btn-success">Save</button>
                                    </div>
                                </div>
                            </div>
						</div>
						



						<div class="row">
                            <div class="col-md-12 col-lg-6">
                                <div class="mb-3 card">
                                    <div class="card-header-tab card-header-tab-animation card-header">
                                        <div class="card-header-title">
                                            <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                                            Detalle de Estado por mes
                                        </div>
                                       
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="tabs-eg-77">
                                                <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                                                    <div class="widget-chat-wrapper-outer">
                                                        <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                                            <canvas id="canvas"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
							</div>
							
							<div class="col-md-12 col-lg-6">
                                <div class="mb-3 card">
                                    <div class="card-header-tab card-header-tab-animation card-header">
                                        <div class="card-header-title">
                                            <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                                           Tipo de vulneración
                                        </div>
                                       
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="tabs-eg-77">
                                                <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                                                    <div class="widget-chat-wrapper-outer">
                                                        <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
														<canvas id="doughnut-chart"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>



                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="card-shadow-danger mb-3 widget-chart widget-chart2 text-left card">
                                    <div class="widget-content">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left pr-2 fsize-1">
                                                    <div class="widget-numbers mt-0 fsize-3 text-danger">71%</div>
                                                </div>
                                                <div class="widget-content-right w-100">
                                                    <div class="progress-bar-xs progress">
                                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100" style="width: 71%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left fsize-1">
                                                <div class="text-muted opacity-6">Sin atender</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card-shadow-success mb-3 widget-chart widget-chart2 text-left card">
                                    <div class="widget-content">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left pr-2 fsize-1">
                                                    <div class="widget-numbers mt-0 fsize-3 text-success">54%</div>
                                                </div>
                                                <div class="widget-content-right w-100">
                                                    <div class="progress-bar-xs progress">
                                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width: 54%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left fsize-1">
                                                <div class="text-muted opacity-6">Atendido</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card-shadow-warning mb-3 widget-chart widget-chart2 text-left card">
                                    <div class="widget-content">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left pr-2 fsize-1">
                                                    <div class="widget-numbers mt-0 fsize-3 text-warning">32%</div>
                                                </div>
                                                <div class="widget-content-right w-100">
                                                    <div class="progress-bar-xs progress">
                                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="width: 32%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left fsize-1">
                                                <div class="text-muted opacity-6">Pendiente</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-left card">
                                    <div class="widget-content">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left pr-2 fsize-1">
                                                    <div class="widget-numbers mt-0 fsize-3 text-info">89%</div>
                                                </div>
                                                <div class="widget-content-right w-100">
                                                    <div class="progress-bar-xs progress">
                                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left fsize-1">
                                                <div class="text-muted opacity-6">Redireccionado</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner">
                                <div class="app-footer-left">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 1
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 2
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="app-footer-right">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 3
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                <div class="badge badge-success mr-1 ml-0">
                                                    <small>NEW</small>
                                                </div>
                                                Footer Link 4
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>    </div>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
<script type="text/javascript" src="{{asset('/Venus/assets/scripts/main.js')}}"></script></body>
</html>
