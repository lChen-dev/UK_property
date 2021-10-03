<header role="banner" class="app-header is-logged-in fundawonen" data-test-header-logged-in="" data-app-header="">
    <div class="container">
        <div id="app-header-title" class="a11y-sr-only">Main menu</div>
        <nav role="navigation" aria-labelledby="app-header-title" class="app-header-nav fd-flex fd-justify-content-between">
            <a class="logo" rel="home" href="{{url('/')}}" style="margin:0;height: 60px;">
                <img alt="UK Property" src="{{asset('img/UKPC.jpeg')}}" style="height: 100%">
            </a>
            <ul class="app-header__menu fd-flex fd-m-none">
                <li class="app-header__menu--menu" data-app-header-menu="menu">
                    <a href="#" class="app-header__link app-header__menu-handle" aria-expanded="false" aria-controls="app-header__menu" data-app-header-menu-handle="">
                        <span class="icon icon-menu-white"></span>
                        <span class="anchor-text">Menu</span>
                    </a>
                    <div id="app-header__menu" class="app-header__submenu" data-app-header-submenu="">
                        <p class="h3 app-header__dialog-title app-header--show-mobile">
                            <span class="icon-menu"></span>Menu
                        </p>
                        <button class="app-header--show-mobile app-header__close-dialog" data-app-header-menu-close="">
                            <span class="button-text">Sluiten</span>
                            <span class="icon icon-close-grey" data-grunticon-embed=""></span>
                        </button>
                        <ul class="flat-list">
                            <li class="app-header__submenu--verkopen">
                                <p class="app-header__text fd-m-none fd-h4 fd-text--emphasis fd-p-horizontal-xl">Selling</p>
                            </li>


                            <li class="app-header__submenu--huisplaatsen">
                                    <a id="appheader-HuisPlaatsen-link" class="app-header__link" href="/en/huis-plaatsen/"><span class="icon-for-sale-blue"></span>List your house on funda</a>
                            </li>


                            <li class="app-header__submenu--makelaar">
                                    <a id="appheader-Makelaar-link" class="app-header__link" href="/en/makelaars/"><span class="icon-makelaar-blue"></span>Find an NVM agent</a>
                            </li>


                            <li class="app-header__submenu--verkooptips">
                                    <a id="appheader-Verkooptips-link" class="app-header__link" href="/meer-weten/verkoper/"><span class="icon-content-platform-blue"></span>This is how you sell your house</a>
                            </li>


                            <li class="app-header__submenu--waardecheck">
                                    <a id="appheader-Waardecheck-link" class="app-header__link" href="/en/woningwaarde/"><span class="icon-stats-good-blue"></span>What's the value of my house?</a>
                            </li>


                            <li class="app-header__submenu--kopen">
                                        <p class="app-header__text fd-m-none fd-h4 fd-text--emphasis fd-p-horizontal-xl">Buying</p>
                            </li>


                            <li class="app-header__submenu--maandlasten">
                                    <a id="appheader-Maandlasten-link" class="app-header__link" href="/en/hypotheek/maandlasten/ing/"><span class="icon-calculator-blue"></span>Calculate your monthly expenses</a>
                            </li>


                            <li class="app-header__submenu--kooptips">
                                    <a id="appheader-Kooptips-link" class="app-header__link" href="/meer-weten/"><span class="icon-content-platform-blue"></span>How to buy a house</a>
                            </li>


                            <li class="app-header__submenu--switchlanguage fd-border-light-2 fd-border-horizontal-remove fd-border-bottom-remove fd-m-top-xs fd-p-top-xs">
                                    <a id="appheader-SwitchLanguage-link" class="app-header__link" href="/en/language/switch/?returnUrl=%2fen%2f" hreflang="nl" rel="alternate" data-app-header-menu-translate="" data-app-header-menu-translate-url="/language/switch/?returnUrl="><span class="icon-international-blue"></span>Bekijk funda in het Nederlands</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="app-header__menu--account" data-app-header-menu="account">
                    <a href="#" class="app-header__link app-header__menu-handle" aria-expanded="false" aria-controls="app-header__account" data-app-header-menu-handle="">
                        <span class="icon icon-avatar-white"></span>
                        <span class="anchor-text">Account</span>
                    </a>
                    <div id="app-header__account" class="app-header__submenu" data-app-header-submenu="">
                        <p class="h3 app-header__dialog-title app-header--show-mobile">
                            <span class="icon-avatar"></span>Account
                        </p>
                        <button class="app-header--show-mobile app-header__close-dialog" data-app-header-menu-close="">
                            <span class="button-text">Sluiten</span>
                            <span class="icon icon-close-grey" data-grunticon-embed=""></span>
                        </button>
                        <ul class="flat-list">
                            <li class="">
                                    <a class="app-header__link" href="/en/mijn/accountgegevens/"><span class="icon-user-blue"></span>Profile</a>
                            </li>


                            <li class="app-header__submenu--savedhouses">
                                    <a id="appheader-SavedHouses-link" class="app-header__link" href="/en/mijn/bewaard/"><span class="icon-heart-blue"></span>Saved houses</a>
                            </li>


                            <li class="app-header__submenu--savedsearch">
                                    <a id="appheader-SavedSearch-link" class="app-header__link" href="/en/mijn/nieuw/"><span class="icon-alert-blue"></span>Saved search</a>
                            </li>


                            <li class="">
                                    <a class="app-header__link" href="/en/mijn/huis/service/waardecheck/resultaat/mijn-huis/"><span class="icon-mortgage-blue"></span>House value</a>
                            </li>


                            <li class="app-header__submenu--logout" data-user-logout="">
                                    <a id="appheader-logout-link" class="app-header__link" href="/en/mijn/logout/"><span class="icon-exit-blue"></span>Log out</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="app-header__menu--language" data-app-header-menu="language">
                    <a href="#" class="app-header__link app-header__menu-handle" aria-expanded="false" aria-controls="app-header__language" data-app-header-menu-handle="">
                        <span class="icon icon-international-white"></span>
                        <span class="anchor-text">en</span>
                    </a>
                    <div id="app-header__language" class="app-header__submenu" data-app-header-submenu="">
                        <p class="h3 app-header__dialog-title app-header--show-mobile">
                            <span class="icon-international"></span>Language Preference
                        </p>
                        <button class="app-header--show-mobile app-header__close-dialog" data-app-header-menu-close="">
                            <span class="button-text">Sluiten</span>
                            <span class="icon icon-close-grey" data-grunticon-embed=""></span>
                        </button>
                        <ul class="flat-list">
                            <li class="app-header__submenu--nederlands">
                                <a id="appheader-Nederlands-link" class="app-header__link" href="/en/language/switch/?returnUrl=%2fen%2f" hreflang="nl" rel="alternate" data-app-header-menu-translate="" data-app-header-menu-translate-url="/language/switch/?returnUrl="><span class="icon--blue"></span>Nederlands</a>
                            </li>
                            <li class="app-header__submenu--english">
                                <span class="app-header__link"><span class="icon-check-blue fd-m-right-xs"></span>English</span>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</header>