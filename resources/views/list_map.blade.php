<!DOCTYPE html>
<html>
<head prefix="og: http://ogp.me/ns#">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- OneTrust Cookies Consent Notice start -->
    <link rel="stylesheet" href="{{ asset('css/icons.data.svg.css') }}" media="all">
    <!-- OneTrust Cookies Consent Notice end -->
    <title>UK Property Community</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="UK Property Community">
    <meta name="google" content="nositelinkssearchbox">
    <meta name="format-detection" content="telephone=no">
    <!-- Load A/B Testing -->
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/index-fundawonen.css') }}" rel="stylesheet" type="text/css">
    @yield('css')
</head>
<body>
    <header class="app-header is-logged-in is-sticky fundawonen" data-app-header="" data-test-header-logged-in="" role="banner">
        <div class="container">
            <div class="a11y-sr-only" id="app-header-title">
                Main menu
            </div>
            <nav aria-labelledby="app-header-title" class="app-header-nav fd-flex fd-justify-content-between" role="navigation">
                <a class="logo" href="/en/" rel="home"><img alt="Funda" height="36" src="https://assets.fstatic.nl/master_3718/assets/components/logo/fundawonen-logo.svg" width="101"></a>
                <ul class="app-header__menu fd-flex fd-m-none">
                    <li class="app-header__menu--menu" data-app-header-menu="menu">
                        <a aria-controls="app-header__menu" aria-expanded="false" class="app-header__link app-header__menu-handle" data-app-header-menu-handle="" href="/en/navigation/menu/"><span class="icon icon-menu-white"></span> <span class="anchor-text">Menu</span></a>
                        <div class="app-header__submenu" data-app-header-submenu="" id="app-header__menu">
                            <p class="h3 app-header__dialog-title app-header--show-mobile"><span class="icon-menu"></span>Menu</p><button class="app-header--show-mobile app-header__close-dialog" data-app-header-menu-close=""><span class="button-text">Sluiten</span> <span class="icon icon-close-grey" data-grunticon-embed=""></span></button>
                            <ul class="flat-list">
                                <li class="app-header__submenu--verkopen">
                                    <p class="app-header__text fd-m-none fd-h4 fd-text--emphasis fd-p-horizontal-xl">Selling</p>
                                </li>
                                <li class="app-header__submenu--huisplaatsen">
                                    <a class="app-header__link" href="/en/huis-plaatsen/" id="appheader-HuisPlaatsen-link"><span class="icon-for-sale-blue"></span>List your house on funda</a>
                                </li>
                                <li class="app-header__submenu--makelaar">
                                    <a class="app-header__link" href="/en/makelaars/" id="appheader-Makelaar-link"><span class="icon-makelaar-blue"></span>Find an NVM agent</a>
                                </li>
                                <li class="app-header__submenu--verkooptips">
                                    <a class="app-header__link" href="/meer-weten/verkoper/" id="appheader-Verkooptips-link"><span class="icon-content-platform-blue"></span>This is how you sell your house</a>
                                </li>
                                <li class="app-header__submenu--waardecheck">
                                    <a class="app-header__link" href="/en/woningwaarde/" id="appheader-Waardecheck-link"><span class="icon-stats-good-blue"></span>What's the value of my house?</a>
                                </li>
                                <li class="app-header__submenu--kopen">
                                    <p class="app-header__text fd-m-none fd-h4 fd-text--emphasis fd-p-horizontal-xl">Buying</p>
                                </li>
                                <li class="app-header__submenu--maandlasten">
                                    <a class="app-header__link" href="/en/hypotheek/maandlasten/ing/" id="appheader-Maandlasten-link"><span class="icon-calculator-blue"></span>Calculate your monthly expenses</a>
                                </li>
                                <li class="app-header__submenu--kooptips">
                                    <a class="app-header__link" href="/meer-weten/" id="appheader-Kooptips-link"><span class="icon-content-platform-blue"></span>How to buy a house</a>
                                </li>
                                <li class="app-header__submenu--switchlanguage fd-border-light-2 fd-border-horizontal-remove fd-border-bottom-remove fd-m-top-xs fd-p-top-xs">
                                    <a class="app-header__link" data-app-header-menu-translate="" data-app-header-menu-translate-url="/language/switch/?returnUrl=" href="/en/language/switch/?returnUrl=%2fen%2fkaart%2fkoop%2fheel-nederland%2f" hreflang="nl" id="appheader-SwitchLanguage-link" rel="alternate"><span class="icon-international-blue"></span>Bekijk funda in het Nederlands</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="app-header__menu--account" data-app-header-menu="account">
                        <a aria-controls="app-header__account" aria-expanded="false" class="app-header__link app-header__menu-handle" data-app-header-menu-handle="" href="/en/navigation/account/"><span class="icon icon-avatar-white"></span> <span class="anchor-text">Account</span></a>
                        <div class="app-header__submenu" data-app-header-submenu="" id="app-header__account">
                            <p class="h3 app-header__dialog-title app-header--show-mobile"><span class="icon-avatar"></span>Account</p><button class="app-header--show-mobile app-header__close-dialog" data-app-header-menu-close=""><span class="button-text">Sluiten</span> <span class="icon icon-close-grey" data-grunticon-embed=""></span></button>
                            <ul class="flat-list">
                                <li class="">
                                    <a class="app-header__link" href="/en/mijn/accountgegevens/"><span class="icon-user-blue"></span>Profile</a>
                                </li>
                                <li class="app-header__submenu--savedhouses">
                                    <a class="app-header__link" href="/en/mijn/bewaard/" id="appheader-SavedHouses-link"><span class="icon-heart-blue"></span>Saved houses</a>
                                </li>
                                <li class="app-header__submenu--savedsearch">
                                    <a class="app-header__link" href="/en/mijn/nieuw/" id="appheader-SavedSearch-link"><span class="icon-alert-blue"></span>Saved search</a>
                                </li>
                                <li class="">
                                    <a class="app-header__link" href="/en/mijn/huis/service/waardecheck/resultaat/mijn-huis/"><span class="icon-mortgage-blue"></span>House value</a>
                                </li>
                                <li class="app-header__submenu--logout" data-user-logout="">
                                    <a class="app-header__link" href="/en/mijn/logout/" id="appheader-logout-link"><span class="icon-exit-blue"></span>Log out</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="app-header__menu--language" data-app-header-menu="language">
                        <a aria-controls="app-header__language" aria-expanded="false" class="app-header__link app-header__menu-handle" data-app-header-menu-handle="" href="/en/navigation/language/"><span class="icon icon-international-white"></span> <span class="anchor-text">en</span></a>
                        <div class="app-header__submenu" data-app-header-submenu="" id="app-header__language">
                            <p class="h3 app-header__dialog-title app-header--show-mobile"><span class="icon-international"></span>Language Preference</p><button class="app-header--show-mobile app-header__close-dialog" data-app-header-menu-close=""><span class="button-text">Sluiten</span> <span class="icon icon-close-grey" data-grunticon-embed=""></span></button>
                            <ul class="flat-list">
                                <li class="app-header__submenu--nederlands">
                                    <a class="app-header__link" data-app-header-menu-translate="" data-app-header-menu-translate-url="/language/switch/?returnUrl=" href="/en/language/switch/?returnUrl=%2fen%2fkaart%2fkoop%2fheel-nederland%2f" hreflang="nl" id="appheader-Nederlands-link" rel="alternate"><span class="icon--blue"></span>Nederlands</a>
                                </li>
                                <li class="app-header__submenu--english"><span class="app-header__link"><span class="icon-check-blue fd-m-right-xs"></span>English</span></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main id="content" role="main">
        <div class="zoek-op-kaart">
            <form data-instant-map-search="" method="post" novalidate="">
                <div class="search-sidebar fd-flex fd-flex-row fd-flex-wrap is-extendable" data-component="search-sidebar" data-search-sidebar="" id="filters">
                    <div class="mobile-search-sidebar-header fd-flex fd-align-items-center fd-bg-blue-5 fd-p-horizontal">
                        <h3 class="fd-m-none fd-m-top fd-m-bottom fd-flex-inline">Filters</h3><button class="button-tertiary close-search-sidebar" data-sidebar-handle="" type="button"><span class="icon-close-blue" data-grunticon-embed=""></span></button>
                    </div>
                    <div class="saved-search__notification--mobile" data-save-search-notification="">
                        <div class="notification notification-closable notification-success is-hidden" data-notification="">
                            <div class="notification-content">
                                <div class="notification-body">
                                    <div class="notification-icons">
                                        <span class="icon-success-green"></span>
                                    </div>
                                    <p data-text-container="">Your search has been saved. Under 'Account' you can find <a href="/en/mijn/nieuw/?Context=System.Web.HttpContextWrapper&amp;Request=System.Web.HttpRequestWrapper&amp;Response=System.Web.HttpResponseWrapper&amp;HasContext=True&amp;OnWWWSubDomain=True">new listings</a>.</p>
                                    <div class="notification-buttons">
                                        <button class="notification-close" data-notification-close=""><span class="a11y-sr-only">Close</span> <span class="icon-close-greyDark" data-grunticon-embed=""></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="notification notification-closable notification-error is-hidden" data-notification="">
                            <div class="notification-content">
                                <div class="notification-body">
                                    <div class="notification-icons">
                                        <span class="icon-error-red"></span>
                                    </div>
                                    <p data-text-container="">Oops! Unfortunately something went wrong. Your last changes to your saved search were not saved. Please try again later.</p>
                                    <div class="notification-buttons">
                                        <button class="notification-close" data-notification-close=""><span class="a11y-sr-only">Close</span> <span class="icon-close-greyDark" data-grunticon-embed=""></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><input name="filter_ZoekType" type="hidden" value="koop"> <input data-instant-search-output="previousState" name="previousState" type="hidden" value="eyJrYWFydC1hdXRvY29tcGxldGUtaWRlbnRpZmllciI6ImhlZWwtbmVkZXJsYW5kIn0="> <input data-instant-search-handle="" id="sidebar-autocomplete-identifier" name="kaart-autocomplete-identifier" type="hidden" value="no-update">
                    <div class="filter-reset fd-flex fd-align-items-center fd-p-horizontal fd-p-none--bp-l">
                        <div class="filter-count" data-component="filter-count" data-filter-count="" data-resettable="">
                            <span class="filter-count__number fd-bg-orange-1 fd-display-inline-block fd-m-right-2xs fd-text--center fd-color-white" data-filter-count-number="" data-test-filter-count-number="">0</span> <span data-filter-count-label="" data-filter-count-label-multiple="filters" data-filter-count-label-one="filter">filters</span>
                        </div><button class="filter-reset__button fd-p-none button-tertiary is-enhanced" data-filter-reset="" data-test-filter-reset-button="" disabled>Remove filters</button>
                    </div>
                    <div class="save-search-tooltip is-hidden fd-bg-blue-5 fd-p-xs" data-save-search-tooltip="">
                        <div>
                            <strong>Keep me updated</strong> <button class="fd-m-none fd-p-none" data-save-search-tooltip-close="" type="button"><span class="icon icon-close-blue" data-grunticon-embed=""></span></button>
                        </div>
                        <p class="fd-m-none">Save your search to receive updates on new search results via notifications.</p>
                    </div>
                    <div class="applied-filters" data-applied-filters="">
                        <legend class="a11y-sr-only">Active filters</legend>
                        <div class="applied-filter-list" data-applied-filter-list=""></div>
                        <script data-applied-filter-template="" type="template/html">
                            <button class="button-applied-filter"
                                    data-applied-filter-group-id="{filterGroupId}"
                                    data-applied-filter-group-name="{filterGroupName}"
                                    data-remove-applied-filter
                                    data-test-applied-filter
                            >
                                <span class="icon-close-blue" data-grunticon-embed>
                                    <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48"><symbol id="e" viewBox="0 -48 48 48" fill="#3888C5"><path fill="none" d="M0 0v-48h48V0z"></path></symbol><symbol id="f" viewBox="-0.0002 -48 48.0002 48.0002" fill="#3888C5"><defs fill="#3888C5"><path id="a" d="M48-48H0V0h48z" fill="#3888C5"></path></defs><clipPath id="b" fill="#3888C5"><use href="#a" overflow="visible" fill="#3888C5"></use><g clip-path="url(#b)" fill="#3888C5"><g fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"><path d="M2-48V0M4-48V0M6-48V0M8-48V0M10-48V0M12-48V0M14-48V0M16-48V0M18-48V0M20-48V0M22-48V0M24-48V0M26-48V0M28-48V0M30-48V0M32-48V0M34-48V0M36-48V0M38-48V0M40-48V0M42-48V0M44-48V0M46-48V0" fill="#3888C5"></path></g><g fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"><path d="M0-2h48M0-4h48M0-6h48M0-8h48M0-10h48M0-12h48M0-14h48M0-16h48M0-18h48M0-20h48M0-22h48M0-24h48M0-26h48M0-28h48M0-30h48M0-32h48M0-34h48M0-36h48M0-38h48M0-40h48M0-42h48M0-44h48M0-46h48" fill="#3888C5"></path></g><path d="M47.75-.25v-47.5H.25v47.5h47.5M48 0H0v-48h48V0z" fill="#3888C5"></path></g></clipPath></symbol><symbol id="g" viewBox="-0.0002 -48.0001 48.0002 48.0001" fill="#3888C5"><g opacity=".4" fill="#3888C5"><defs fill="#3888C5"><path id="c" opacity=".4" d="M0-48V0h48v-48z" fill="#3888C5"></path></defs><clipPath id="d" fill="#3888C5"><use href="#c" overflow="visible" fill="#3888C5"></use><path clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10" d="M24 0v-48M48-24H0M48-16H0M48-32H0M32-48V0M16-48V0M47.75-.25L.25-47.75M.25-.25l47.5-47.5M24-14c-5.522 0-10-4.477-10-10 0-5.522 4.478-10 10-10 5.523 0 10 4.478 10 10 0 5.523-4.477 10-10 10z"></path><path d="M24-4C12.946-4 4-12.947 4-24s8.946-20 20-20c11.053 0 20 8.947 20 20S35.052-4 24-4z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><path d="M40-42H8c-1.1 0-2 .9-2 2v32c0 1.1.9 2 2 2h32c1.1 0 2-.9 2-2v-32c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><path d="M38-44H10c-1.1 0-2 .9-2 2v36c0 1.1.9 2 2 2h28c1.1 0 2-.9 2-2v-36c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><g clip-path="url(#d)" fill="#3888C5"><path d="M47.75-.25v-47.5H.25v47.5h47.5M48 0H0v-48h48V0z" fill="#3888C5"></path></g><path d="M42-40H6c-1.1 0-2 .9-2 2v28c0 1.1.9 2 2 2h36c1.1 0 2-.9 2-2v-28c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path></clipPath></g></symbol><path d="M26.122 24l10.606-10.607a1.505 1.505 0 0 0 0-2.12 1.504 1.504 0 0 0-2.121 0L24 21.878 13.394 11.272c-.583-.583-1.538-.583-2.121 0s-.584 1.538 0 2.121L21.879 24 11.272 34.607c-.583.583-.583 1.538 0 2.12s1.539.584 2.122 0L24 26.122l10.607 10.607a1.504 1.504 0 0 0 2.121 0 1.505 1.505 0 0 0 0-2.121L26.122 24z" fill="#3888C5"></path></svg>
                                </span><span class="a11y-sr-only">Remove</span>
                                {combinedFilterName}
                            </button>
                        </script>
                    </div>
                    <div class="save-search-button fd-p-horizontal fd-p-top-xs fd-p-bottom fd-p-none--bp-l fd-p-top-xs--bp-l fd-p-bottom--bp-l" data-save-search-container="dialog">
                        <button class="fd-btn fd-btn--secondary fd-btn--block" data-is-user-logged-in="true" data-login-url="https://www.funda.nl/en/mijn/login/?ReturnUrl=%2Fen%2Fkaart%2Fkoop%2Fheel-nederland%2F" data-save-search-dialog-endpoint="/en/mijn/savedsearch/" data-save-search-handle="dialog" data-save-search-url="/en/mijn/savedsearch/?currentUrl=%2fkoop%2fheel-nederland%2f" data-should-trigger-save-button-dialog="false" data-track-click="Save Search Clicked"><span class="fd-btn__icon"><span class="icon-alert-blue" data-grunticon-embed=""></span></span> Save search</button>
                        <div class="save-search-container" data-save-search="dialog"></div>
                    </div>
                    <div class="search-sidebar-filters">
                        <div class="dynamic-filter">
                            <div class="filter-flyout filter-flyout-travel-time" data-filter-flyout="">
                                <button class="filter-flyout-button-open filter-flyout-button-open-with-preview button-tertiary" data-filter-open-flyout="" data-has-preview-filter="" type="button" style="display: block;"><span>Travel time</span> <span class="icon-open-flyout icon-arrow-right-blue" data-grunticon-embed=""></span>
                                <p class="filter-flyout-preview-options filter-flyout-preview-options-travel-time" data-filter-flyout-preview-options="" style="display: block;">Discover new places to live based on travel time.</p></button> 
                                <!--travel time tooltip last-->
                                <div class="search-map-travel-time-tips" data-popover-travel-time-tip="">
                                    <div class="popover has-left-triangle is-hidden" data-popover="travel-time-tip">
                                        <span class="popover__caret"></span>
                                        <p class="popover__text">Here you can hide travel time. <span class="travel-time-next-tip">Do not show these tips again.</span></p><button class="popover__close-button" data-popover-close="travel-time-tip"><span class="a11y-sr-only">Close</span> <span class="icon-close-blue" data-grunticon-embed=""></span></button>
                                    </div>
                                    <div class="mobile-triangle-last-tip is-hidden" data-tooltip-mobile-arrow=""></div>
                                </div><!-- /travel time tooltip last-->
                                <div class="filter-flyout-panel" data-filter-flyout-panel="">
                                    <span class="icon-close-flyout icon-close-blue" data-filter-close-flyout="" data-grunticon-embed=""><span class="a11y-kb-only">Close</span></span>
                                    <div class="filter-flyout-backdrop" data-filter-flyout-backdrop=""></div>
                                    <fieldset class="filter-flyout-fieldset" data-flyout-wrapper="" style="display: none;">
                                        <section class="travel-time-flyout-wrapper" data-travel-time-flyout-wrapper="" data-travel-time-flyout-wrapper-personal-places-endpoint="/search/personalplaces/list">
                                            <div data-travel-time-flyout-wrapper-save-location="">
                                                <h4>Save location</h4>
                                                <div class="white-bg is-hidden"></div>
                                                <div class="save-location-form" data-is-user-logged-in="true" data-location="Search" data-save-location-form="">
                                                    <input class="save-location-form__lat" data-save-location-lat-input="" id="save-location-lat" name="lat" type="hidden"> <input class="save-location-form__lng" data-save-location-lng-input="" id="save-location-lng" name="lng" type="hidden">
                                                    <div data-save-location-form-auto-suggest-wrapper="">
                                                        <div class="auto-suggest-locations" data-auto-suggest-locations="" data-coordinate-endpoint="/en/search/poi/coordinate/" data-suggest-endpoint="/en/search/poi/suggest/">
                                                            <div class="auto-suggest" data-travel-time-suggest="">
                                                                <div class="auto-suggest-input-container" data-travel-time-input-container="">
                                                                    <div class="clearable-textbox">
                                                                        <input data-clearable-textbox-input="" placeholder="Search for address" type="text"> <span class="icon main-icon icon-search-grey" data-clearable-textbox-main-icon="" data-grunticon-embed=""></span> <button class="clearable-textbox__clear is-hidden" data-clearable-textbox-clear="" tabindex="-1"><span class="icon icon-close-circle-grey" data-grunticon-embed=""></span></button>
                                                                    </div>
                                                                </div>
                                                                <div class="save-location-form-result-list is-hidden" data-save-location-form-result-list="">
                                                                    <ul class="list-result" data-save-location-form-result-list-target="" role="listbox" tabindex="-1"></ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="save-location-form-error is-hidden" data-save-location-address-error="">
                                                            Location is missing. Please, add a location.
                                                        </div>
                                                    </div>
                                                    <div class="label-wrapper">
                                                        <div class="input-wrapper" data-save-location-form-label-wrapper="">
                                                            <div class="clearable-textbox">
                                                                <input data-clearable-textbox-input="" placeholder="Description" type="text"> <span class="icon main-icon icon-promolabel-grey" data-clearable-textbox-main-icon="" data-grunticon-embed=""></span> <button class="clearable-textbox__clear is-hidden" data-clearable-textbox-clear="" tabindex="-1"><span class="icon icon-close-circle-grey" data-grunticon-embed=""></span></button>
                                                            </div>
                                                        </div>
                                                        <div class="form-message">
                                                            For example 'school', 'work' or 'daycare'.
                                                        </div>
                                                        <div class="save-location-form__form-actions">
                                                            <button class="save-location-form__button--cancel button-secondary" data-save-location-cancel-button="" type="button">Cancel</button> <button class="save-location-form__button--submit button-primary" data-save-location-submit-button="" type="submit">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span data-not-loggedin-state=""><a class="is-hidden" data-login-button="" href="#">Did you save locations before? Log in.</a></span>
                                                </div>
                                            </div>
                                            <div class="is-hidden" data-travel-time-flyout-wrapper-personal-places-list="">
                                                <h4>Travel time</h4>
                                                <div data-travel-time-flyout-wrapper-ppoi-list="">
                                                    <ul class="personal-places-list" data-personal-places-list=""></ul>
                                                </div>
                                                <div class="travel-time-new-poi" data-travel-time-flyout-wrapper-add-personal-place="">
                                                    <a><span class="icon-plus-blue" data-grunticon-embed=""></span> Add Location</a>
                                                </div>
                                            </div>
                                        </section>
                                    </fieldset>
                                </div>
                                <div class="filter-flyout-selected-options" data-flyout-selected-options="" style="margin-left: 2em">
                                </div>
                            </div>
                        </div>
                        <div class="dynamic-filter" data-instant-search-output="wijkNaamFilter"></div>
                        <fieldset class="search-price-toggle fd-p-horizontal fd-p-bottom fd-p-none--bp-l fd-p-top-xs--bp-l fd-p-bottom--bp-l regular__search-price-toggle" data-search-price-toggle="">
                            <legend class="search-price-toggle-legend">Price</legend>
                            <div class="search-price-toggle-target is-active" data-search-price-toggle-target="">
                                <fieldset class="range-filter" data-display-string="€ {value}" data-filter-name="" data-instant-search-range="" data-range-filter="" data-resettable="" data-thousand-separator=",">
                                    <div class="range-filter__input fd-m-bottom-xs" data-range-filter-min="">
                                        <!-- range-filter-selector component -->
                                        <div class="range-filter-selector" data-range-filter-selector="">
                                            <div class="range-filter-selector__preset" data-range-filter-selector-preset="">
                                                <label class="range-filter-selector__label" for="range-filter-selector-select-filter_koopprijsvan">From</label>
                                                <div class="custom-select">
                                                    <select class="range-filter-selector__select" data-instant-search-handle="" data-range-filter-selector-preset-select="" id="range-filter-selector-select-filter_koopprijsvan" name="filter_KoopprijsVan">
                                                        <option value="other">
                                                            Other
                                                        </option>
                                                        <option data-range-filter-selector-default-value="" selected value="0">
                                                            € 0
                                                        </option>
                                                        <option value="50000">
                                                            € 50,000
                                                        </option>
                                                        <option value="75000">
                                                            € 75,000
                                                        </option>
                                                        <option value="100000">
                                                            € 100,000
                                                        </option>
                                                        <option value="125000">
                                                            € 125,000
                                                        </option>
                                                        <option value="150000">
                                                            € 150,000
                                                        </option>
                                                        <option value="175000">
                                                            € 175,000
                                                        </option>
                                                        <option value="200000">
                                                            € 200,000
                                                        </option>
                                                        <option value="225000">
                                                            € 225,000
                                                        </option>
                                                        <option value="250000">
                                                            € 250,000
                                                        </option>
                                                        <option value="275000">
                                                            € 275,000
                                                        </option>
                                                        <option value="300000">
                                                            € 300,000
                                                        </option>
                                                        <option value="325000">
                                                            € 325,000
                                                        </option>
                                                        <option value="350000">
                                                            € 350,000
                                                        </option>
                                                        <option value="375000">
                                                            € 375,000
                                                        </option>
                                                        <option value="400000">
                                                            € 400,000
                                                        </option>
                                                        <option value="450000">
                                                            € 450,000
                                                        </option>
                                                        <option value="500000">
                                                            € 500,000
                                                        </option>
                                                        <option value="550000">
                                                            € 550,000
                                                        </option>
                                                        <option value="600000">
                                                            € 600,000
                                                        </option>
                                                        <option value="650000">
                                                            € 650,000
                                                        </option>
                                                        <option value="700000">
                                                            € 700,000
                                                        </option>
                                                        <option value="750000">
                                                            € 750,000
                                                        </option>
                                                        <option value="800000">
                                                            € 800,000
                                                        </option>
                                                        <option value="900000">
                                                            € 900,000
                                                        </option>
                                                        <option value="1000000">
                                                            € 1,000,000
                                                        </option>
                                                        <option value="1250000">
                                                            € 1,250,000
                                                        </option>
                                                        <option value="1500000">
                                                            € 1,500,000
                                                        </option>
                                                        <option value="2000000">
                                                            € 2,000,000
                                                        </option>
                                                        <option value="2500000">
                                                            € 2,500,000
                                                        </option>
                                                        <option value="3000000">
                                                            € 3,000,000
                                                        </option>
                                                        <option value="3500000">
                                                            € 3,500,000
                                                        </option>
                                                        <option value="4000000">
                                                            € 4,000,000
                                                        </option>
                                                        <option value="4500000">
                                                            € 4,500,000
                                                        </option>
                                                        <option value="5000000">
                                                            € 5,000,000
                                                        </option>
                                                    </select> <span class="icon-arrow-down-blue custom-select-icon"></span>
                                                </div>
                                            </div>
                                            <div class="range-filter-selector__custom is-inactive" data-range-filter-selector-custom="">
                                                <label class="range-filter-selector__label" for="range-filter-selector-custom-filter_koopprijsvan">From</label> <!-- input-number component -->
                                                <div class="input-number" data-display-string="{value}" data-input-number="" data-thousand-separator=",">
                                                    <input class="input-number__field fd-container-full fd-border-light-1" data-input-number-field="" data-price-selector-custom-input="" max="99999999" maxlength="10" min="0" name="filter_KoopprijsVan" step="0" type="number" value="">
                                                    <div class="input-number__mask" data-input-number-mask=""></div>
                                                </div><!-- /input-number component -->
                                                <span class="range-filter-selector__token">€</span> <button class="button-tertiary range-filter-selector__button-clear-value" data-range-filter-selector-clear-custom-value="" title="remove custom price range" type="button"><span class="icon-delete-greyLight" data-grunticon-embed=""></span><span class="a11y-sr-only">Remove price</span></button>
                                            </div>
                                        </div><!-- /range-filter-selector component -->
                                    </div>
                                    <div class="range-filter__input" data-range-filter-max="">
                                        <!-- range-filter-selector component -->
                                        <div class="range-filter-selector" data-range-filter-selector="">
                                            <div class="range-filter-selector__preset" data-range-filter-selector-preset="">
                                                <label class="range-filter-selector__label" for="range-filter-selector-select-filter_koopprijstot">To</label>
                                                <div class="custom-select">
                                                    <select class="range-filter-selector__select" data-instant-search-handle="" data-range-filter-selector-preset-select="" id="range-filter-selector-select-filter_koopprijstot" name="filter_KoopprijsTot">
                                                        <option value="other">
                                                            Other
                                                        </option>
                                                        <option value="50000">
                                                            € 50,000
                                                        </option>
                                                        <option value="75000">
                                                            € 75,000
                                                        </option>
                                                        <option value="100000">
                                                            € 100,000
                                                        </option>
                                                        <option value="125000">
                                                            € 125,000
                                                        </option>
                                                        <option value="150000">
                                                            € 150,000
                                                        </option>
                                                        <option value="175000">
                                                            € 175,000
                                                        </option>
                                                        <option value="200000">
                                                            € 200,000
                                                        </option>
                                                        <option value="225000">
                                                            € 225,000
                                                        </option>
                                                        <option value="250000">
                                                            € 250,000
                                                        </option>
                                                        <option value="275000">
                                                            € 275,000
                                                        </option>
                                                        <option value="300000">
                                                            € 300,000
                                                        </option>
                                                        <option value="325000">
                                                            € 325,000
                                                        </option>
                                                        <option value="350000">
                                                            € 350,000
                                                        </option>
                                                        <option value="375000">
                                                            € 375,000
                                                        </option>
                                                        <option value="400000">
                                                            € 400,000
                                                        </option>
                                                        <option value="450000">
                                                            € 450,000
                                                        </option>
                                                        <option value="500000">
                                                            € 500,000
                                                        </option>
                                                        <option value="550000">
                                                            € 550,000
                                                        </option>
                                                        <option value="600000">
                                                            € 600,000
                                                        </option>
                                                        <option value="650000">
                                                            € 650,000
                                                        </option>
                                                        <option value="700000">
                                                            € 700,000
                                                        </option>
                                                        <option value="750000">
                                                            € 750,000
                                                        </option>
                                                        <option value="800000">
                                                            € 800,000
                                                        </option>
                                                        <option value="900000">
                                                            € 900,000
                                                        </option>
                                                        <option value="1000000">
                                                            € 1,000,000
                                                        </option>
                                                        <option value="1250000">
                                                            € 1,250,000
                                                        </option>
                                                        <option value="1500000">
                                                            € 1,500,000
                                                        </option>
                                                        <option value="2000000">
                                                            € 2,000,000
                                                        </option>
                                                        <option value="2500000">
                                                            € 2,500,000
                                                        </option>
                                                        <option value="3000000">
                                                            € 3,000,000
                                                        </option>
                                                        <option value="3500000">
                                                            € 3,500,000
                                                        </option>
                                                        <option value="4000000">
                                                            € 4,000,000
                                                        </option>
                                                        <option value="4500000">
                                                            € 4,500,000
                                                        </option>
                                                        <option value="5000000">
                                                            € 5,000,000
                                                        </option>
                                                        <option data-range-filter-selector-default-value="" selected value="ignore_filter">
                                                            No limit
                                                        </option>
                                                    </select> <span class="icon-arrow-down-blue custom-select-icon"></span>
                                                </div>
                                            </div>
                                            <div class="range-filter-selector__custom is-inactive" data-range-filter-selector-custom="">
                                                <label class="range-filter-selector__label" for="range-filter-selector-custom-filter_koopprijstot">To</label> <!-- input-number component -->
                                                <div class="input-number" data-display-string="{value}" data-input-number="" data-thousand-separator=",">
                                                    <input class="input-number__field fd-container-full fd-border-light-1" data-input-number-field="" data-price-selector-custom-input="" max="99999999" maxlength="10" min="0" name="filter_KoopprijsTot" step="0" type="number" value="">
                                                    <div class="input-number__mask" data-input-number-mask=""></div>
                                                </div><!-- /input-number component -->
                                                <span class="range-filter-selector__token">€</span> <button class="button-tertiary range-filter-selector__button-clear-value" data-range-filter-selector-clear-custom-value="" title="remove custom price range" type="button"><span class="icon-delete-greyLight" data-grunticon-embed=""></span><span class="a11y-sr-only">Remove price</span></button>
                                            </div>
                                        </div><!-- /range-filter-selector component -->
                                    </div>
                                </fieldset>
                            </div>
                        </fieldset>
                        <div aria-expanded="false" class="radio-group is-expandible" data-component="radio-group" data-controller-uid="0" data-expandible="" data-filter-visibility="" data-nested-filter="" data-radio-group="SoortObject" data-radio-group-label="Property type" data-resettable="">
                            <fieldset class="radio-group__fieldset fd-p-none">
                                <legend class="radio-group-legend radio-group-row">Property type</legend>
                                <ul class="fd-p-none fd-list--none" data-radio-group-items="">
                                    <li class="radio-group-item radio-group-item-default">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input checked class="custom-radio" data-filter-visibility-invalid-filters="AanwezigheidVan-VoorzienVanElektra AanwezigheidVan-MetElektrischeDeur AanwezigheidVan-VoorzienVanWater AanwezigheidVan-VoorzienVanVerwarming AanwezigheidVan-MetVliering" data-instant-search-handle="" data-radio-group-default="" data-radio-group-input="" id="SoortObject-geen" name="filter_SoortObject" type="radio" value=""> <label class="radio-group-item-label label-text" for="SoortObject-geen"><span>Remove filter</span></label>
                                        </div>
                                    </li>
                                    <li class="radio-group-item" data-radio-group-item="">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input class="custom-radio" data-filter-visibility-invalid-filters="AanwezigheidVan-VoorzienVanElektra AanwezigheidVan-MetElektrischeDeur AanwezigheidVan-VoorzienVanWater AanwezigheidVan-VoorzienVanVerwarming AanwezigheidVan-MetVliering" data-instant-search-handle="" data-radio-group-input="" data-radio-group-option-name="House" id="SoortObject-Woonhuis" name="filter_SoortObject" type="radio" value="woonhuis"> <label class="radio-group-item-label label-text" for="SoortObject-Woonhuis"><span>House</span> <span class="a11y-sr-only">Results</span></label>
                                        </div><label class="radio-group-item-remove radio-group-row" for="SoortObject-geen" title="House"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>House</span></label>
                                        <div class="radio-group-nested-flyout">
                                            <div class="filter-flyout" data-filter-flyout="" data-resettable="" data-unique="Kindofhouse-Oftype">
                                                <button class="filter-flyout-button-open button-tertiary" data-filter-open-flyout="" data-has-preview-filter="" type="button"><span class="icon-open-flyout fd-icon icon-plus-blue" data-grunticon-embed=""></span> Specify</button>
                                                <div class="filter-flyout-panel" data-filter-flyout-panel="">
                                                    <span class="icon-close-flyout icon-close-blue" data-filter-close-flyout="" data-grunticon-embed=""><span class="a11y-kb-only">Close</span></span>
                                                    <div class="filter-flyout-backdrop" data-filter-flyout-backdrop=""></div>
                                                    <fieldset class="filter-flyout-fieldset">
                                                        <legend>Kind of house</legend> <input name="filter_WoningSoort" type="hidden" value="active">
                                                        <ul class="filter-flyout-options">
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Bungalow"><input class="custom-checkbox" data-filter-group-id="WoningSoort" data-filter-group-name="Kind of house" data-flyout-item="" data-instant-search-handle="" id="WoningSoort-Bungalow" name="filter_WoningSoort" type="checkbox" value="bungalow"> <label class="label-text filter-flyout-option-label" for="WoningSoort-Bungalow">Bungalow</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningSoort-Bungalow"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Single family property"><input class="custom-checkbox" data-filter-group-id="WoningSoort" data-filter-group-name="Kind of house" data-flyout-item="" data-instant-search-handle="" id="WoningSoort-Eengezinswoning" name="filter_WoningSoort" type="checkbox" value="eengezinswoning"> <label class="label-text filter-flyout-option-label" for="WoningSoort-Eengezinswoning">Single family property</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningSoort-Eengezinswoning"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Canalside property"><input class="custom-checkbox" data-filter-group-id="WoningSoort" data-filter-group-name="Kind of house" data-flyout-item="" data-instant-search-handle="" id="WoningSoort-Grachtenpand" name="filter_WoningSoort" type="checkbox" value="grachtenpand"> <label class="label-text filter-flyout-option-label" for="WoningSoort-Grachtenpand">Canalside property</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningSoort-Grachtenpand"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Town house"><input class="custom-checkbox" data-filter-group-id="WoningSoort" data-filter-group-name="Kind of house" data-flyout-item="" data-instant-search-handle="" id="WoningSoort-Herenhuis" name="filter_WoningSoort" type="checkbox" value="herenhuis"> <label class="label-text filter-flyout-option-label" for="WoningSoort-Herenhuis">Town house</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningSoort-Herenhuis"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Country estate"><input class="custom-checkbox" data-filter-group-id="WoningSoort" data-filter-group-name="Kind of house" data-flyout-item="" data-instant-search-handle="" id="WoningSoort-Landgoed" name="filter_WoningSoort" type="checkbox" value="landgoed"> <label class="label-text filter-flyout-option-label" for="WoningSoort-Landgoed">Country estate</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningSoort-Landgoed"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Country house"><input class="custom-checkbox" data-filter-group-id="WoningSoort" data-filter-group-name="Kind of house" data-flyout-item="" data-instant-search-handle="" id="WoningSoort-Landhuis" name="filter_WoningSoort" type="checkbox" value="landhuis"> <label class="label-text filter-flyout-option-label" for="WoningSoort-Landhuis">Country house</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningSoort-Landhuis"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Mobile home"><input class="custom-checkbox" data-filter-group-id="WoningSoort" data-filter-group-name="Kind of house" data-flyout-item="" data-instant-search-handle="" id="WoningSoort-Stacaravan" name="filter_WoningSoort" type="checkbox" value="stacaravan"> <label class="label-text filter-flyout-option-label" for="WoningSoort-Stacaravan">Mobile home</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningSoort-Stacaravan"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Villa"><input class="custom-checkbox" data-filter-group-id="WoningSoort" data-filter-group-name="Kind of house" data-flyout-item="" data-instant-search-handle="" id="WoningSoort-Villa" name="filter_WoningSoort" type="checkbox" value="villa"> <label class="label-text filter-flyout-option-label" for="WoningSoort-Villa">Villa</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningSoort-Villa"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Former farm"><input class="custom-checkbox" data-filter-group-id="WoningSoort" data-filter-group-name="Kind of house" data-flyout-item="" data-instant-search-handle="" id="WoningSoort-Woonboerderij" name="filter_WoningSoort" type="checkbox" value="woonboerderij"> <label class="label-text filter-flyout-option-label" for="WoningSoort-Woonboerderij">Former farm</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningSoort-Woonboerderij"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Houseboat"><input class="custom-checkbox" data-filter-group-id="WoningSoort" data-filter-group-name="Kind of house" data-flyout-item="" data-instant-search-handle="" id="WoningSoort-Woonboot" name="filter_WoningSoort" type="checkbox" value="woonboot"> <label class="label-text filter-flyout-option-label" for="WoningSoort-Woonboot">Houseboat</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningSoort-Woonboot"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Caravan"><input class="custom-checkbox" data-filter-group-id="WoningSoort" data-filter-group-name="Kind of house" data-flyout-item="" data-instant-search-handle="" id="WoningSoort-Woonwagen" name="filter_WoningSoort" type="checkbox" value="woonwagen"> <label class="label-text filter-flyout-option-label" for="WoningSoort-Woonwagen">Caravan</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningSoort-Woonwagen"><span class="a11y-sr-only">Results</span></span></li>
                                                        </ul>
                                                    </fieldset>
                                                    <fieldset class="filter-flyout-fieldset">
                                                        <legend>Of type</legend> <input name="filter_WoningType" type="hidden" value="active">
                                                        <ul class="filter-flyout-options">
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Double house"><input class="custom-checkbox" data-filter-group-id="WoningType" data-filter-group-name="Of type" data-flyout-item="" data-instant-search-handle="" id="WoningType-_2Onder1Kapwoning" name="filter_WoningType" type="checkbox" value="2-onder-1-kapwoning"> <label class="label-text filter-flyout-option-label" for="WoningType-_2Onder1Kapwoning">Double house</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningType-_2Onder1Kapwoning"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="End-of-terrace"><input class="custom-checkbox" data-filter-group-id="WoningType" data-filter-group-name="Of type" data-flyout-item="" data-instant-search-handle="" id="WoningType-Eindwoning" name="filter_WoningType" type="checkbox" value="eindwoning"> <label class="label-text filter-flyout-option-label" for="WoningType-Eindwoning">End-of-terrace</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningType-Eindwoning"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Link double house"><input class="custom-checkbox" data-filter-group-id="WoningType" data-filter-group-name="Of type" data-flyout-item="" data-instant-search-handle="" id="WoningType-Geschakelde2Onder1Kapwoning" name="filter_WoningType" type="checkbox" value="geschakelde 2-onder-1-kapwoning"> <label class="label-text filter-flyout-option-label" for="WoningType-Geschakelde2Onder1Kapwoning">Link double house</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningType-Geschakelde2Onder1Kapwoning"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Link detached house"><input class="custom-checkbox" data-filter-group-id="WoningType" data-filter-group-name="Of type" data-flyout-item="" data-instant-search-handle="" id="WoningType-GeschakeldeWoning" name="filter_WoningType" type="checkbox" value="geschakelde woning"> <label class="label-text filter-flyout-option-label" for="WoningType-GeschakeldeWoning">Link detached house</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningType-GeschakeldeWoning"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Semi-detached house"><input class="custom-checkbox" data-filter-group-id="WoningType" data-filter-group-name="Of type" data-flyout-item="" data-instant-search-handle="" id="WoningType-HalfvrijstaandeWoning" name="filter_WoningType" type="checkbox" value="halfvrijstaande woning"> <label class="label-text filter-flyout-option-label" for="WoningType-HalfvrijstaandeWoning">Semi-detached house</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningType-HalfvrijstaandeWoning"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Corner house"><input class="custom-checkbox" data-filter-group-id="WoningType" data-filter-group-name="Of type" data-flyout-item="" data-instant-search-handle="" id="WoningType-Hoekwoning" name="filter_WoningType" type="checkbox" value="hoekwoning"> <label class="label-text filter-flyout-option-label" for="WoningType-Hoekwoning">Corner house</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningType-Hoekwoning"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Terraced house"><input class="custom-checkbox" data-filter-group-id="WoningType" data-filter-group-name="Of type" data-flyout-item="" data-instant-search-handle="" id="WoningType-Tussenwoning" name="filter_WoningType" type="checkbox" value="tussenwoning"> <label class="label-text filter-flyout-option-label" for="WoningType-Tussenwoning">Terraced house</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningType-Tussenwoning"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Staggered house"><input class="custom-checkbox" data-filter-group-id="WoningType" data-filter-group-name="Of type" data-flyout-item="" data-instant-search-handle="" id="WoningType-VerspringendeWoning" name="filter_WoningType" type="checkbox" value="verspringende woning"> <label class="label-text filter-flyout-option-label" for="WoningType-VerspringendeWoning">Staggered house</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningType-VerspringendeWoning"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Detached house"><input class="custom-checkbox" data-filter-group-id="WoningType" data-filter-group-name="Of type" data-flyout-item="" data-instant-search-handle="" id="WoningType-VrijstaandeWoning" name="filter_WoningType" type="checkbox" value="vrijstaande woning"> <label class="label-text filter-flyout-option-label" for="WoningType-VrijstaandeWoning">Detached house</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningType-VrijstaandeWoning"><span class="a11y-sr-only">Results</span></span></li>
                                                        </ul>
                                                    </fieldset>
                                                </div>
                                                <ul class="filter-flyout-selected-options" data-flyout-selected-options=""></ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="radio-group-item" data-radio-group-item="">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input class="custom-radio" data-filter-visibility-invalid-filters="AanwezigheidVan-VoorzienVanElektra AanwezigheidVan-MetElektrischeDeur AanwezigheidVan-VoorzienVanWater AanwezigheidVan-VoorzienVanVerwarming AanwezigheidVan-MetVliering" data-instant-search-handle="" data-radio-group-input="" data-radio-group-option-name="Apartment" id="SoortObject-Appartement" name="filter_SoortObject" type="radio" value="appartement"> <label class="radio-group-item-label label-text" for="SoortObject-Appartement"><span>Apartment</span> <span class="a11y-sr-only">Results</span></label>
                                        </div><label class="radio-group-item-remove radio-group-row" for="SoortObject-geen" title="Apartment"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>Apartment</span></label>
                                        <div class="radio-group-nested-flyout">
                                            <div class="filter-flyout" data-filter-flyout="" data-resettable="" data-unique="Kindofapartment-Oftype">
                                                <button class="filter-flyout-button-open button-tertiary" data-filter-open-flyout="" data-has-preview-filter="" type="button"><span class="icon-open-flyout fd-icon icon-plus-blue" data-grunticon-embed=""></span> Specify</button>
                                                <div class="filter-flyout-panel" data-filter-flyout-panel="">
                                                    <span class="icon-close-flyout icon-close-blue" data-filter-close-flyout="" data-grunticon-embed=""><span class="a11y-kb-only">Close</span></span>
                                                    <div class="filter-flyout-backdrop" data-filter-flyout-backdrop=""></div>
                                                    <fieldset class="filter-flyout-fieldset">
                                                        <legend>Kind of apartment</legend> <input name="filter_SoortAppartementId" type="hidden" value="active">
                                                        <ul class="filter-flyout-options">
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Duplex appartment (ground + first floor)"><input class="custom-checkbox" data-filter-group-id="SoortAppartementId" data-filter-group-name="Kind of apartment" data-flyout-item="" data-instant-search-handle="" id="SoortAppartementId-BenedenEnBovenwoning" name="filter_SoortAppartementId" type="checkbox" value="beneden en bovenwoning"> <label class="label-text filter-flyout-option-label" for="SoortAppartementId-BenedenEnBovenwoning">Duplex appartment (ground + first floor)</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortAppartementId-BenedenEnBovenwoning"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Ground floor apartment"><input class="custom-checkbox" data-filter-group-id="SoortAppartementId" data-filter-group-name="Kind of apartment" data-flyout-item="" data-instant-search-handle="" id="SoortAppartementId-Benedenwoning" name="filter_SoortAppartementId" type="checkbox" value="benedenwoning"> <label class="label-text filter-flyout-option-label" for="SoortAppartementId-Benedenwoning">Ground floor apartment</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortAppartementId-Benedenwoning"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Upper-floor apartment"><input class="custom-checkbox" data-filter-group-id="SoortAppartementId" data-filter-group-name="Kind of apartment" data-flyout-item="" data-instant-search-handle="" id="SoortAppartementId-Bovenwoning" name="filter_SoortAppartementId" type="checkbox" value="bovenwoning"> <label class="label-text filter-flyout-option-label" for="SoortAppartementId-Bovenwoning">Upper-floor apartment</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortAppartementId-Bovenwoning"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Double ground floor apartment"><input class="custom-checkbox" data-filter-group-id="SoortAppartementId" data-filter-group-name="Kind of apartment" data-flyout-item="" data-instant-search-handle="" id="SoortAppartementId-DubbelBenedenhuis" name="filter_SoortAppartementId" type="checkbox" value="dubbel benedenhuis"> <label class="label-text filter-flyout-option-label" for="SoortAppartementId-DubbelBenedenhuis">Double ground floor apartment</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortAppartementId-DubbelBenedenhuis"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Apartment with external access"><input class="custom-checkbox" data-filter-group-id="SoortAppartementId" data-filter-group-name="Kind of apartment" data-flyout-item="" data-instant-search-handle="" id="SoortAppartementId-Galerijflat" name="filter_SoortAppartementId" type="checkbox" value="galerijflat"> <label class="label-text filter-flyout-option-label" for="SoortAppartementId-Galerijflat">Apartment with external access</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortAppartementId-Galerijflat"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Maisonnette"><input class="custom-checkbox" data-filter-group-id="SoortAppartementId" data-filter-group-name="Kind of apartment" data-flyout-item="" data-instant-search-handle="" id="SoortAppartementId-Maisonnette" name="filter_SoortAppartementId" type="checkbox" value="maisonnette"> <label class="label-text filter-flyout-option-label" for="SoortAppartementId-Maisonnette">Maisonnette</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortAppartementId-Maisonnette"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Penthouse"><input class="custom-checkbox" data-filter-group-id="SoortAppartementId" data-filter-group-name="Kind of apartment" data-flyout-item="" data-instant-search-handle="" id="SoortAppartementId-Penthouse" name="filter_SoortAppartementId" type="checkbox" value="penthouse"> <label class="label-text filter-flyout-option-label" for="SoortAppartementId-Penthouse">Penthouse</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortAppartementId-Penthouse"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Flat with porch"><input class="custom-checkbox" data-filter-group-id="SoortAppartementId" data-filter-group-name="Kind of apartment" data-flyout-item="" data-instant-search-handle="" id="SoortAppartementId-Portiekflat" name="filter_SoortAppartementId" type="checkbox" value="portiekflat"> <label class="label-text filter-flyout-option-label" for="SoortAppartementId-Portiekflat">Flat with porch</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortAppartementId-Portiekflat"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="House with porch"><input class="custom-checkbox" data-filter-group-id="SoortAppartementId" data-filter-group-name="Kind of apartment" data-flyout-item="" data-instant-search-handle="" id="SoortAppartementId-Portiekwoning" name="filter_SoortAppartementId" type="checkbox" value="portiekwoning"> <label class="label-text filter-flyout-option-label" for="SoortAppartementId-Portiekwoning">House with porch</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortAppartementId-Portiekwoning"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Student room"><input class="custom-checkbox" data-filter-group-id="SoortAppartementId" data-filter-group-name="Kind of apartment" data-flyout-item="" data-instant-search-handle="" id="SoortAppartementId-Studentenkamer" name="filter_SoortAppartementId" type="checkbox" value="studentenkamer"> <label class="label-text filter-flyout-option-label" for="SoortAppartementId-Studentenkamer">Student room</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortAppartementId-Studentenkamer"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Mezzanine"><input class="custom-checkbox" data-filter-group-id="SoortAppartementId" data-filter-group-name="Kind of apartment" data-flyout-item="" data-instant-search-handle="" id="SoortAppartementId-Tussenverdieping" name="filter_SoortAppartementId" type="checkbox" value="tussenverdieping"> <label class="label-text filter-flyout-option-label" for="SoortAppartementId-Tussenverdieping">Mezzanine</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortAppartementId-Tussenverdieping"><span class="a11y-sr-only">Results</span></span></li>
                                                        </ul>
                                                    </fieldset>
                                                    <fieldset class="filter-flyout-fieldset">
                                                        <legend>Of type</legend> <input name="filter_AppartementType" type="hidden" value="active">
                                                        <ul class="filter-flyout-options">
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Piano nobile"><input class="custom-checkbox" data-filter-group-id="AppartementType" data-filter-group-name="Of type" data-flyout-item="" data-instant-search-handle="" id="AppartementType-BelEtage" name="filter_AppartementType" type="checkbox" value="bel-etage"> <label class="label-text filter-flyout-option-label" for="AppartementType-BelEtage">Piano nobile</label> <span class="filter-flyout-option-count" data-instant-search-count="AppartementType-BelEtage"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Corridor flat"><input class="custom-checkbox" data-filter-group-id="AppartementType" data-filter-group-name="Of type" data-flyout-item="" data-instant-search-handle="" id="AppartementType-Corridorflat" name="filter_AppartementType" type="checkbox" value="corridorflat"> <label class="label-text filter-flyout-option-label" for="AppartementType-Corridorflat">Corridor flat</label> <span class="filter-flyout-option-count" data-instant-search-count="AppartementType-Corridorflat"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Duplex apartment (upper floors)"><input class="custom-checkbox" data-filter-group-id="AppartementType" data-filter-group-name="Of type" data-flyout-item="" data-instant-search-handle="" id="AppartementType-DubbelBovenhuis" name="filter_AppartementType" type="checkbox" value="dubbel bovenhuis"> <label class="label-text filter-flyout-option-label" for="AppartementType-DubbelBovenhuis">Duplex apartment (upper floors)</label> <span class="filter-flyout-option-count" data-instant-search-count="AppartementType-DubbelBovenhuis"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Service flat"><input class="custom-checkbox" data-filter-group-id="AppartementType" data-filter-group-name="Of type" data-flyout-item="" data-instant-search-handle="" id="AppartementType-ServiceFlat" name="filter_AppartementType" type="checkbox" value="service flat"> <label class="label-text filter-flyout-option-label" for="AppartementType-ServiceFlat">Service flat</label> <span class="filter-flyout-option-count" data-instant-search-count="AppartementType-ServiceFlat"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Basement"><input class="custom-checkbox" data-filter-group-id="AppartementType" data-filter-group-name="Of type" data-flyout-item="" data-instant-search-handle="" id="AppartementType-Souterrain" name="filter_AppartementType" type="checkbox" value="souterrain"> <label class="label-text filter-flyout-option-label" for="AppartementType-Souterrain">Basement</label> <span class="filter-flyout-option-count" data-instant-search-count="AppartementType-Souterrain"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Sheltered apartment"><input class="custom-checkbox" data-filter-group-id="AppartementType" data-filter-group-name="Of type" data-flyout-item="" data-instant-search-handle="" id="AppartementType-Verzorgingsflat" name="filter_AppartementType" type="checkbox" value="verzorgingsflat"> <label class="label-text filter-flyout-option-label" for="AppartementType-Verzorgingsflat">Sheltered apartment</label> <span class="filter-flyout-option-count" data-instant-search-count="AppartementType-Verzorgingsflat"><span class="a11y-sr-only">Results</span></span></li>
                                                        </ul>
                                                    </fieldset>
                                                </div>
                                                <ul class="filter-flyout-selected-options" data-flyout-selected-options=""></ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="radio-group-item is-expandible-item" data-radio-group-item="">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input class="custom-radio" data-filter-visibility-invalid-filters="AantalKamers AantalSlaapkamers WoonOppervlakte Ligging BouwPeriodeId Buitenruimte Toegankelijkheid GarageGroup SoortGarage AanwezigheidVan-CvKetel AanwezigheidVan-DuurzameEnergie AanwezigheidVan-Jacuzzi AanwezigheidVan-Kluswoning AanwezigheidVan-Lift AanwezigheidVan-LigZitbad AanwezigheidVan-MonumentaalPand AanwezigheidVan-OpenHaard AanwezigheidVan-Sauna AanwezigheidVan-SchuurBerging AanwezigheidVan-Stoomcabine AanwezigheidVan-Zwembad" data-instant-search-handle="" data-radio-group-input="" data-radio-group-option-name="Parking" id="SoortObject-Parkeergelegenheid" name="filter_SoortObject" type="radio" value="parkeergelegenheid"> <label class="radio-group-item-label label-text" for="SoortObject-Parkeergelegenheid"><span>Parking</span> <span class="a11y-sr-only">Results</span></label>
                                        </div><label class="radio-group-item-remove radio-group-row" for="SoortObject-geen" title="Parking"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>Parking</span></label>
                                        <div class="radio-group-nested-flyout">
                                            <div class="filter-flyout" data-filter-flyout="" data-resettable="" data-unique="Typeofparkingfacilities-Capacity">
                                                <button class="filter-flyout-button-open button-tertiary" data-filter-open-flyout="" data-has-preview-filter="" type="button"><span class="icon-open-flyout fd-icon icon-plus-blue" data-grunticon-embed=""></span> Specify</button>
                                                <div class="filter-flyout-panel" data-filter-flyout-panel="">
                                                    <span class="icon-close-flyout icon-close-blue" data-filter-close-flyout="" data-grunticon-embed=""><span class="a11y-kb-only">Close</span></span>
                                                    <div class="filter-flyout-backdrop" data-filter-flyout-backdrop=""></div>
                                                    <fieldset class="filter-flyout-fieldset">
                                                        <legend>Type of parking facilities</legend> <input name="filter_SoortParkeergelegenheidId" type="hidden" value="active">
                                                        <ul class="filter-flyout-options">
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Garage"><input class="custom-checkbox" data-filter-group-id="SoortParkeergelegenheidId" data-filter-group-name="Type of parking facilities" data-flyout-item="" data-instant-search-handle="" id="SoortParkeergelegenheidId-ParkeergelegenheidGarage" name="filter_SoortParkeergelegenheidId" type="checkbox" value="garage"> <label class="label-text filter-flyout-option-label" for="SoortParkeergelegenheidId-ParkeergelegenheidGarage">Garage</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortParkeergelegenheidId-ParkeergelegenheidGarage"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Integrated garage"><input class="custom-checkbox" data-filter-group-id="SoortParkeergelegenheidId" data-filter-group-name="Type of parking facilities" data-flyout-item="" data-instant-search-handle="" id="SoortParkeergelegenheidId-ParkeergelegenheidInpandigeGarage" name="filter_SoortParkeergelegenheidId" type="checkbox" value="inpandige garage"> <label class="label-text filter-flyout-option-label" for="SoortParkeergelegenheidId-ParkeergelegenheidInpandigeGarage">Integrated garage</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortParkeergelegenheidId-ParkeergelegenheidInpandigeGarage"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Underground car park"><input class="custom-checkbox" data-filter-group-id="SoortParkeergelegenheidId" data-filter-group-name="Type of parking facilities" data-flyout-item="" data-instant-search-handle="" id="SoortParkeergelegenheidId-ParkeergelegenheidParkeerkelder" name="filter_SoortParkeergelegenheidId" type="checkbox" value="parkeerkelder"> <label class="label-text filter-flyout-option-label" for="SoortParkeergelegenheidId-ParkeergelegenheidParkeerkelder">Underground car park</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortParkeergelegenheidId-ParkeergelegenheidParkeerkelder"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Parking space"><input class="custom-checkbox" data-filter-group-id="SoortParkeergelegenheidId" data-filter-group-name="Type of parking facilities" data-flyout-item="" data-instant-search-handle="" id="SoortParkeergelegenheidId-ParkeergelegenheidParkeerplaats" name="filter_SoortParkeergelegenheidId" type="checkbox" value="parkeerplaats"> <label class="label-text filter-flyout-option-label" for="SoortParkeergelegenheidId-ParkeergelegenheidParkeerplaats">Parking space</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortParkeergelegenheidId-ParkeergelegenheidParkeerplaats"><span class="a11y-sr-only">Results</span></span></li>
                                                        </ul>
                                                    </fieldset>
                                                    <fieldset class="filter-flyout-fieldset">
                                                        <legend>Capacity</legend>
                                                        <ul class="filter-flyout-options">
                                                            <li class="filter-flyout-option-default filter-flyout-option"><input checked class="custom-radio" data-instant-search-handle="" id="AutoCapaciteitParkeergelegenheid-geen" name="filter_AutoCapaciteitParkeergelegenheid" type="radio" value=""> <label class="label-text" for="AutoCapaciteitParkeergelegenheid-geen">Remove filter</label></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="1 car"><input class="custom-radio" data-filter-group-id="AutoCapaciteitParkeergelegenheid" data-filter-group-name="Capacity" data-flyout-item="" data-instant-search-handle="" id="AutoCapaciteitParkeergelegenheid-1" name="filter_AutoCapaciteitParkeergelegenheid" type="radio" value="1,1"> <label class="label-text filter-flyout-option-label" for="AutoCapaciteitParkeergelegenheid-1">1 car</label> <span class="filter-flyout-option-count" data-instant-search-count="AutoCapaciteitParkeergelegenheid-1"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="2+ cars"><input class="custom-radio" data-filter-group-id="AutoCapaciteitParkeergelegenheid" data-filter-group-name="Capacity" data-flyout-item="" data-instant-search-handle="" id="AutoCapaciteitParkeergelegenheid-2" name="filter_AutoCapaciteitParkeergelegenheid" type="radio" value="2"> <label class="label-text filter-flyout-option-label" for="AutoCapaciteitParkeergelegenheid-2">2+ cars</label> <span class="filter-flyout-option-count" data-instant-search-count="AutoCapaciteitParkeergelegenheid-2"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="3+ cars"><input class="custom-radio" data-filter-group-id="AutoCapaciteitParkeergelegenheid" data-filter-group-name="Capacity" data-flyout-item="" data-instant-search-handle="" id="AutoCapaciteitParkeergelegenheid-3" name="filter_AutoCapaciteitParkeergelegenheid" type="radio" value="3"> <label class="label-text filter-flyout-option-label" for="AutoCapaciteitParkeergelegenheid-3">3+ cars</label> <span class="filter-flyout-option-count" data-instant-search-count="AutoCapaciteitParkeergelegenheid-3"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="4+ cars"><input class="custom-radio" data-filter-group-id="AutoCapaciteitParkeergelegenheid" data-filter-group-name="Capacity" data-flyout-item="" data-instant-search-handle="" id="AutoCapaciteitParkeergelegenheid-4" name="filter_AutoCapaciteitParkeergelegenheid" type="radio" value="4"> <label class="label-text filter-flyout-option-label" for="AutoCapaciteitParkeergelegenheid-4">4+ cars</label> <span class="filter-flyout-option-count" data-instant-search-count="AutoCapaciteitParkeergelegenheid-4"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="5+ cars"><input class="custom-radio" data-filter-group-id="AutoCapaciteitParkeergelegenheid" data-filter-group-name="Capacity" data-flyout-item="" data-instant-search-handle="" id="AutoCapaciteitParkeergelegenheid-5" name="filter_AutoCapaciteitParkeergelegenheid" type="radio" value="5"> <label class="label-text filter-flyout-option-label" for="AutoCapaciteitParkeergelegenheid-5">5+ cars</label> <span class="filter-flyout-option-count" data-instant-search-count="AutoCapaciteitParkeergelegenheid-5"><span class="a11y-sr-only">Results</span></span></li>
                                                        </ul>
                                                    </fieldset>
                                                </div>
                                                <ul class="filter-flyout-selected-options" data-flyout-selected-options=""></ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="radio-group-item is-expandible-item" data-radio-group-item="">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input class="custom-radio" data-filter-visibility-invalid-filters="AantalKamers AantalSlaapkamers WoonOppervlakte Energielabel BouwPeriodeId Buitenruimte Toegankelijkheid OpenHuizen GarageGroup AanwezigheidVan" data-instant-search-handle="" data-radio-group-input="" data-radio-group-option-name="Land" id="SoortObject-Bouwgrond" name="filter_SoortObject" type="radio" value="bouwgrond"> <label class="radio-group-item-label label-text" for="SoortObject-Bouwgrond"><span>Land</span> <span class="a11y-sr-only">Results</span></label>
                                        </div><label class="radio-group-item-remove radio-group-row" for="SoortObject-geen" title="Land"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>Land</span></label>
                                        <div class="radio-group-nested-flyout">
                                            <div class="filter-flyout" data-filter-flyout="" data-resettable="" data-unique="Buildingplot">
                                                <button class="filter-flyout-button-open button-tertiary" data-filter-open-flyout="" data-has-preview-filter="" type="button"><span class="icon-open-flyout fd-icon icon-plus-blue" data-grunticon-embed=""></span> Specify</button>
                                                <div class="filter-flyout-panel" data-filter-flyout-panel="">
                                                    <span class="icon-close-flyout icon-close-blue" data-filter-close-flyout="" data-grunticon-embed=""><span class="a11y-kb-only">Close</span></span>
                                                    <div class="filter-flyout-backdrop" data-filter-flyout-backdrop=""></div>
                                                    <fieldset class="filter-flyout-fieldset">
                                                        <legend>Building plot</legend>
                                                        <ul class="filter-flyout-options">
                                                            <li class="filter-flyout-option-default filter-flyout-option"><input checked class="custom-radio" data-instant-search-handle="" id="IndBouwrijp-geen" name="filter_IndBouwrijp" type="radio" value=""> <label class="label-text" for="IndBouwrijp-geen">Remove filter</label></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Ready for construction"><input class="custom-radio" data-filter-group-id="IndBouwrijp" data-filter-group-name="Building plot" data-flyout-item="" data-instant-search-handle="" id="IndBouwrijp-Bouwrijp" name="filter_IndBouwrijp" type="radio" value="True"> <label class="label-text filter-flyout-option-label" for="IndBouwrijp-Bouwrijp">Ready for construction</label> <span class="filter-flyout-option-count" data-instant-search-count="IndBouwrijp-Bouwrijp"><span class="a11y-sr-only">Results</span></span></li>
                                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Not ready for construction"><input class="custom-radio" data-filter-group-id="IndBouwrijp" data-filter-group-name="Building plot" data-flyout-item="" data-instant-search-handle="" id="IndBouwrijp-NietBouwrijp" name="filter_IndBouwrijp" type="radio" value="False"> <label class="label-text filter-flyout-option-label" for="IndBouwrijp-NietBouwrijp">Not ready for construction</label> <span class="filter-flyout-option-count" data-instant-search-count="IndBouwrijp-NietBouwrijp"><span class="a11y-sr-only">Results</span></span></li>
                                                        </ul>
                                                    </fieldset>
                                                </div>
                                                <ul class="filter-flyout-selected-options" data-flyout-selected-options=""></ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="radio-group-item is-expandible-item" data-radio-group-item="">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input class="custom-radio" data-filter-visibility-invalid-filters="AantalKamers AantalSlaapkamers WoonOppervlakte Ligging BouwPeriodeId Buitenruimte Toegankelijkheid OpenHuizen GarageGroup ExtrasGroup AanwezigheidVan-CvKetel AanwezigheidVan-DuurzameEnergie AanwezigheidVan-Jacuzzi AanwezigheidVan-Kluswoning AanwezigheidVan-Lift AanwezigheidVan-LigZitbad AanwezigheidVan-MonumentaalPand AanwezigheidVan-OpenHaard AanwezigheidVan-Sauna AanwezigheidVan-SchuurBerging AanwezigheidVan-Stoomcabine AanwezigheidVan-Zwembad" data-instant-search-handle="" data-radio-group-input="" data-radio-group-option-name="Storage space" id="SoortObject-SoortOverig:Opslagruimte" name="filter_SoortObject" type="radio" value="SoortOverig:opslagruimte"> <label class="radio-group-item-label label-text" for="SoortObject-SoortOverig:Opslagruimte"><span>Storage space</span> <span class="a11y-sr-only">Results</span></label>
                                        </div><label class="radio-group-item-remove radio-group-row" for="SoortObject-geen" title="Storage space"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>Storage space</span></label>
                                    </li>
                                    <li class="radio-group-item is-expandible-item" data-radio-group-item="">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input class="custom-radio" data-filter-visibility-invalid-filters="AantalKamers AantalSlaapkamers WoonOppervlakte Ligging BouwPeriodeId Buitenruimte Toegankelijkheid OpenHuizen GarageGroup ExtrasGroup AanwezigheidVan-CvKetel AanwezigheidVan-DuurzameEnergie AanwezigheidVan-Jacuzzi AanwezigheidVan-Kluswoning AanwezigheidVan-Lift AanwezigheidVan-LigZitbad AanwezigheidVan-MonumentaalPand AanwezigheidVan-OpenHaard AanwezigheidVan-Sauna AanwezigheidVan-SchuurBerging AanwezigheidVan-Stoomcabine AanwezigheidVan-Zwembad" data-instant-search-handle="" data-radio-group-input="" data-radio-group-option-name="Storage" id="SoortObject-SoortOverig:Berging" name="filter_SoortObject" type="radio" value="SoortOverig:berging"> <label class="radio-group-item-label label-text" for="SoortObject-SoortOverig:Berging"><span>Storage</span> <span class="a11y-sr-only">Results</span></label>
                                        </div><label class="radio-group-item-remove radio-group-row" for="SoortObject-geen" title="Storage"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>Storage</span></label>
                                    </li>
                                    <li class="radio-group-item is-expandible-item" data-radio-group-item="">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input class="custom-radio" data-filter-visibility-invalid-filters="AantalKamers AantalSlaapkamers WoonOppervlakte Ligging BouwPeriodeId Buitenruimte Toegankelijkheid OpenHuizen GarageGroup ExtrasGroup AanwezigheidVan" data-instant-search-handle="" data-radio-group-input="" data-radio-group-option-name="Berth" id="SoortObject-SoortOverig:Ligplaats" name="filter_SoortObject" type="radio" value="SoortOverig:ligplaats"> <label class="radio-group-item-label label-text" for="SoortObject-SoortOverig:Ligplaats"><span>Berth</span> <span class="a11y-sr-only">Results</span></label>
                                        </div><label class="radio-group-item-remove radio-group-row" for="SoortObject-geen" title="Berth"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>Berth</span></label>
                                    </li>
                                    <li class="radio-group-item is-expandible-item" data-radio-group-item="">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input class="custom-radio" data-filter-visibility-invalid-filters="AantalKamers AantalSlaapkamers WoonOppervlakte Ligging BouwPeriodeId Buitenruimte Toegankelijkheid OpenHuizen GarageGroup ExtrasGroup AanwezigheidVan-CvKetel AanwezigheidVan-DuurzameEnergie AanwezigheidVan-Jacuzzi AanwezigheidVan-Kluswoning AanwezigheidVan-Lift AanwezigheidVan-LigZitbad AanwezigheidVan-MonumentaalPand AanwezigheidVan-OpenHaard AanwezigheidVan-Sauna AanwezigheidVan-SchuurBerging AanwezigheidVan-Stoomcabine AanwezigheidVan-Zwembad" data-instant-search-handle="" data-radio-group-input="" data-radio-group-option-name="Substructure" id="SoortObject-SoortOverig:Onderstuk" name="filter_SoortObject" type="radio" value="SoortOverig:onderstuk"> <label class="radio-group-item-label label-text" for="SoortObject-SoortOverig:Onderstuk"><span>Substructure</span> <span class="a11y-sr-only">Results</span></label>
                                        </div><label class="radio-group-item-remove radio-group-row" for="SoortObject-geen" title="Substructure"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>Substructure</span></label>
                                    </li>
                                </ul><button class="radio-group-expandible-button radio-group-expandible-more button-tertiary radio-group-row" data-expandible-handle="" type="button"><span class="radio-group-expandible-icon icon-plus-blue" data-grunticon-embed=""></span> All property types</button> <button class="radio-group-expandible-button radio-group-expandible-less button-tertiary radio-group-row" data-expandible-handle="" type="button"><span class="radio-group-expandible-icon icon-close-blue" data-grunticon-embed=""></span> Less property types</button>
                            </fieldset>
                        </div>
                        <div class="radio-group" data-component="radio-group" data-filter-visibility-target="PublicatieDatum" data-nested-filter="" data-radio-group="PublicatieDatum" data-radio-group-label="Days on funda" data-resettable="">
                            <fieldset class="radio-group__fieldset fd-p-none">
                                <legend class="radio-group-legend radio-group-row">Days on funda</legend>
                                <ul class="fd-p-none fd-list--none" data-radio-group-items="">
                                    <li class="radio-group-item radio-group-item-default">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input checked class="custom-radio" data-instant-search-handle="" data-radio-group-default="" data-radio-group-input="" id="PublicatieDatum-geen" name="filter_PublicatieDatum" type="radio" value=""> <label class="radio-group-item-label label-text" for="PublicatieDatum-geen"><span>Remove filter</span></label>
                                        </div>
                                    </li>
                                    <li class="radio-group-item" data-radio-group-item="">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input class="custom-radio" data-instant-search-handle="" data-radio-group-input="" data-radio-group-option-name="Today" id="PublicatieDatum-1" name="filter_PublicatieDatum" type="radio" value="1"> <label class="radio-group-item-label label-text" for="PublicatieDatum-1"><span>Today</span> <span class="a11y-sr-only">Results</span></label>
                                        </div><label class="radio-group-item-remove radio-group-row" for="PublicatieDatum-geen" title="Today"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>Today</span></label>
                                    </li>
                                    <li class="radio-group-item" data-radio-group-item="">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input class="custom-radio" data-instant-search-handle="" data-radio-group-input="" data-radio-group-option-name="Since 3 days" id="PublicatieDatum-3" name="filter_PublicatieDatum" type="radio" value="3"> <label class="radio-group-item-label label-text" for="PublicatieDatum-3"><span>Since 3 days</span> <span class="a11y-sr-only">Results</span></label>
                                        </div><label class="radio-group-item-remove radio-group-row" for="PublicatieDatum-geen" title="Since 3 days"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>Since 3 days</span></label>
                                    </li>
                                    <li class="radio-group-item" data-radio-group-item="">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input class="custom-radio" data-instant-search-handle="" data-radio-group-input="" data-radio-group-option-name="Since 5 days" id="PublicatieDatum-5" name="filter_PublicatieDatum" type="radio" value="5"> <label class="radio-group-item-label label-text" for="PublicatieDatum-5"><span>Since 5 days</span> <span class="a11y-sr-only">Results</span></label>
                                        </div><label class="radio-group-item-remove radio-group-row" for="PublicatieDatum-geen" title="Since 5 days"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>Since 5 days</span></label>
                                    </li>
                                    <li class="radio-group-item" data-radio-group-item="">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input class="custom-radio" data-instant-search-handle="" data-radio-group-input="" data-radio-group-option-name="Since 10 days" id="PublicatieDatum-10" name="filter_PublicatieDatum" type="radio" value="10"> <label class="radio-group-item-label label-text" for="PublicatieDatum-10"><span>Since 10 days</span> <span class="a11y-sr-only">Results</span></label>
                                        </div><label class="radio-group-item-remove radio-group-row" for="PublicatieDatum-geen" title="Since 10 days"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>Since 10 days</span></label>
                                    </li>
                                    <li class="radio-group-item" data-radio-group-item="">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input class="custom-radio" data-instant-search-handle="" data-radio-group-input="" data-radio-group-option-name="Since 30 days" id="PublicatieDatum-30" name="filter_PublicatieDatum" type="radio" value="30"> <label class="radio-group-item-label label-text" for="PublicatieDatum-30"><span>Since 30 days</span> <span class="a11y-sr-only">Results</span></label>
                                        </div><label class="radio-group-item-remove radio-group-row" for="PublicatieDatum-geen" title="Since 30 days"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>Since 30 days</span></label>
                                    </li>
                                </ul>
                            </fieldset>
                        </div>
                        <div class="radio-group" data-component="radio-group" data-filter-visibility="" data-nested-filter="" data-radio-group="ObjectBeschikbaarheid" data-radio-group-label="Status" data-resettable="">
                            <fieldset class="radio-group__fieldset fd-p-none">
                                <legend class="sidebar-info is-hidden fd-container-full" data-sidebar-info=""></legend>
                                <div class="info-message mobile-sidebar-info">
                                    <legend class="sidebar-info is-hidden fd-container-full" data-sidebar-info=""><i>Under negotiation</i> contains under offer, under option and sold under reservation.</legend>
                                </div><legend class="sidebar-info is-hidden fd-container-full" data-sidebar-info=""></legend> <legend class="radio-group-legend radio-group-row fd-p-right fd-container-full"></legend>
                                <div class="fd-display-inline-block">
                                    <legend class="radio-group-legend radio-group-row fd-p-right fd-container-full">Status</legend>
                                </div>
                                <div class="filter-status-info fd-display-inline-block" style="position: relative;">
                                    <legend class="radio-group-legend radio-group-row fd-p-right fd-container-full"><span class="icon-info-blue"></span></legend>
                                    <div class="info-message-floating is-hidden">
                                        <legend class="radio-group-legend radio-group-row fd-p-right fd-container-full"><i>Under negotiation</i> contains under offer, under option and sold under reservation.</legend>
                                    </div><legend class="radio-group-legend radio-group-row fd-p-right fd-container-full"></legend>
                                </div>
                                <ul class="fd-p-none fd-list--none" data-radio-group-items="">
                                    <li class="radio-group-item radio-group-item-default">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input checked class="custom-radio" data-filter-visibility-invalid-filters="-" data-instant-search-handle="" data-radio-group-default="" data-radio-group-input="" id="ObjectBeschikbaarheid-geen" name="filter_ObjectBeschikbaarheid" type="radio" value=""> <label class="radio-group-item-label label-text" for="ObjectBeschikbaarheid-geen"><span>Remove filter</span></label>
                                        </div>
                                    </li>
                                    <li class="radio-group-item" data-radio-group-item="">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input class="custom-radio" data-instant-search-handle="" data-radio-group-input="" data-radio-group-option-name="Available" id="ObjectBeschikbaarheid-Beschikbaar" name="filter_ObjectBeschikbaarheid" type="radio" value="beschikbaar"> <label class="radio-group-item-label label-text" for="ObjectBeschikbaarheid-Beschikbaar"><span>Available</span> <span class="a11y-sr-only">Results</span></label>
                                        </div><label class="radio-group-item-remove radio-group-row" for="ObjectBeschikbaarheid-geen" title="Available"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>Available</span></label>
                                    </li>
                                    <li class="radio-group-item" data-radio-group-item="">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input class="custom-radio" data-instant-search-handle="" data-radio-group-input="" data-radio-group-option-name="Under negotiation" id="ObjectBeschikbaarheid-Onderhandeling" name="filter_ObjectBeschikbaarheid" type="radio" value="onderhandeling"> <label class="radio-group-item-label label-text" for="ObjectBeschikbaarheid-Onderhandeling"><span>Under negotiation</span> <span class="a11y-sr-only">Results</span></label>
                                        </div><label class="radio-group-item-remove radio-group-row" for="ObjectBeschikbaarheid-geen" title="Under negotiation"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>Under negotiation</span></label>
                                    </li>
                                    <li class="radio-group-item" data-radio-group-item="">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input class="custom-radio" data-filter-visibility-invalid-filters="PublicatieDatum ExtrasGroup" data-instant-search-handle="" data-radio-group-input="" data-radio-group-option-name="Sold" id="ObjectBeschikbaarheid-verkocht" name="filter_ObjectBeschikbaarheid" type="radio" value="onbeschikbaar"> <label class="radio-group-item-label label-text" for="ObjectBeschikbaarheid-verkocht"><span>Sold</span> <span class="a11y-sr-only">Results</span></label>
                                        </div><label class="radio-group-item-remove radio-group-row" for="ObjectBeschikbaarheid-geen" title="Sold"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>Sold</span></label>
                                    </li>
                                </ul>
                            </fieldset>
                        </div>
                        <div class="radio-group with-range" data-component="radio-group" data-filter-visibility-target="WoonOppervlakte" data-nested-filter="" data-radio-group="WoonOppervlakte" data-radio-group-label="Floor area" data-resettable="">
                            <fieldset class="radio-group__fieldset fd-p-none">
                                <legend class="radio-group-legend radio-group-row">Floor area</legend>
                                <ul class="fd-p-none fd-list--none" data-radio-group-items="">
                                    <li class="radio-group-item radio-group-item-default">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input checked class="custom-radio" data-instant-search-handle="" data-radio-group-default="" data-radio-group-input="" id="WoonOppervlakte-geen" name="filter_WoonOppervlakte" type="radio" value=""> <label class="radio-group-item-label label-text" for="WoonOppervlakte-geen"><span>Remove filter</span></label>
                                        </div>
                                    </li>
                                    <li class="radio-group-item" data-radio-group-item="">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-groupname-to-filter="" data-radio-group-input="" data-radio-group-option-name="50 m² or more" id="WoonOppervlakte-50" name="filter_WoonOppervlakte" type="radio" value="50"> <label class="radio-group-item-label label-text" for="WoonOppervlakte-50"><span>50 m² or more</span> <span class="a11y-sr-only">Results</span></label>
                                        </div><label class="radio-group-item-remove radio-group-row" for="WoonOppervlakte-geen" title="50 m² or more"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>50 m² or more</span></label>
                                    </li>
                                    <li class="radio-group-item" data-radio-group-item="">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-groupname-to-filter="" data-radio-group-input="" data-radio-group-option-name="75 m² or more" id="WoonOppervlakte-75" name="filter_WoonOppervlakte" type="radio" value="75"> <label class="radio-group-item-label label-text" for="WoonOppervlakte-75"><span>75 m² or more</span> <span class="a11y-sr-only">Results</span></label>
                                        </div><label class="radio-group-item-remove radio-group-row" for="WoonOppervlakte-geen" title="75 m² or more"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>75 m² or more</span></label>
                                    </li>
                                    <li class="radio-group-item" data-radio-group-item="">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-groupname-to-filter="" data-radio-group-input="" data-radio-group-option-name="100 m² or more" id="WoonOppervlakte-100" name="filter_WoonOppervlakte" type="radio" value="100"> <label class="radio-group-item-label label-text" for="WoonOppervlakte-100"><span>100 m² or more</span> <span class="a11y-sr-only">Results</span></label>
                                        </div><label class="radio-group-item-remove radio-group-row" for="WoonOppervlakte-geen" title="100 m² or more"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>100 m² or more</span></label>
                                    </li>
                                    <li class="radio-group-item" data-radio-group-item="">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-groupname-to-filter="" data-radio-group-input="" data-radio-group-option-name="150 m² or more" id="WoonOppervlakte-150" name="filter_WoonOppervlakte" type="radio" value="150"> <label class="radio-group-item-label label-text" for="WoonOppervlakte-150"><span>150 m² or more</span> <span class="a11y-sr-only">Results</span></label>
                                        </div><label class="radio-group-item-remove radio-group-row" for="WoonOppervlakte-geen" title="150 m² or more"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>150 m² or more</span></label>
                                    </li>
                                    <li class="radio-group-item" data-radio-group-item="">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-groupname-to-filter="" data-radio-group-input="" data-radio-group-option-name="250 m² or more" id="WoonOppervlakte-250" name="filter_WoonOppervlakte" type="radio" value="250"> <label class="radio-group-item-label label-text" for="WoonOppervlakte-250"><span>250 m² or more</span> <span class="a11y-sr-only">Results</span></label>
                                        </div><label class="radio-group-item-remove radio-group-row" for="WoonOppervlakte-geen" title="250 m² or more"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>250 m² or more</span></label>
                                    </li>
                                    <li class="radio-group-item" data-radio-group-item="">
                                        <div class="filter-flyout" data-filter-flyout="" data-filter-flyout-range="" data-unique="Floorarea">
                                            <button class="filter-flyout-button-open button-tertiary" data-filter-open-flyout="" data-has-preview-filter="" type="button"><span class="icon-open-flyout fd-icon icon-plus-blue" data-grunticon-embed=""></span> Specify</button>
                                            <div class="filter-flyout-panel filter-flyout-panel-range" data-filter-flyout-panel="">
                                                <span class="icon-close-flyout icon-close-blue" data-filter-close-flyout="" data-grunticon-embed=""><span class="a11y-kb-only">Close</span></span>
                                                <div class="filter-flyout-backdrop" data-filter-flyout-backdrop=""></div>
                                                <fieldset class="filter-flyout-fieldset" data-component="range" data-range="">
                                                    <legend>Minimum to maximum floor area</legend> <input class="filter-flyout-range-input" data-range-input="" data-range-min="" id="WoonOppervlakte-range-min" min="0" name="filter_WoonOppervlakte-range-min" pattern="[0-9]*" placeholder="from" step="1" type="number"> <input class="filter-flyout-range-input" data-range-input="" data-range-max="" id="WoonOppervlakte-range-max" min="0" name="filter_WoonOppervlakte-range-max" pattern="[0-9]*" placeholder="to" step="1" type="number"> <button class="button-primary filter-flyout-range-submit" data-range-submit="" type="button">Specify</button>
                                                </fieldset>
                                            </div>
                                            <ul class="filter-flyout-selected-options" data-flyout-selected-options=""></ul>
                                        </div>
                                    </li>
                                </ul>
                            </fieldset>
                        </div>
                        <div class="radio-group with-range" data-component="radio-group" data-nested-filter="" data-radio-group="PerceelOppervlakte" data-radio-group-label="Plot area" data-resettable="">
                            <fieldset class="radio-group__fieldset fd-p-none">
                                <legend class="radio-group-legend radio-group-row">Plot area</legend>
                                <ul class="fd-p-none fd-list--none" data-radio-group-items="">
                                    <li class="radio-group-item radio-group-item-default">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input checked class="custom-radio" data-instant-search-handle="" data-radio-group-default="" data-radio-group-input="" id="PerceelOppervlakte-geen" name="filter_PerceelOppervlakte" type="radio" value=""> <label class="radio-group-item-label label-text" for="PerceelOppervlakte-geen"><span>Remove filter</span></label>
                                        </div>
                                    </li>
                                    <li class="radio-group-item" data-radio-group-item="">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-groupname-to-filter="" data-radio-group-input="" data-radio-group-option-name="250 m² or more" id="PerceelOppervlakte-250" name="filter_PerceelOppervlakte" type="radio" value="250"> <label class="radio-group-item-label label-text" for="PerceelOppervlakte-250"><span>250 m² or more</span> <span class="a11y-sr-only">Results</span></label>
                                        </div><label class="radio-group-item-remove radio-group-row" for="PerceelOppervlakte-geen" title="250 m² or more"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>250 m² or more</span></label>
                                    </li>
                                    <li class="radio-group-item" data-radio-group-item="">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-groupname-to-filter="" data-radio-group-input="" data-radio-group-option-name="500 m² or more" id="PerceelOppervlakte-500" name="filter_PerceelOppervlakte" type="radio" value="500"> <label class="radio-group-item-label label-text" for="PerceelOppervlakte-500"><span>500 m² or more</span> <span class="a11y-sr-only">Results</span></label>
                                        </div><label class="radio-group-item-remove radio-group-row" for="PerceelOppervlakte-geen" title="500 m² or more"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>500 m² or more</span></label>
                                    </li>
                                    <li class="radio-group-item" data-radio-group-item="">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-groupname-to-filter="" data-radio-group-input="" data-radio-group-option-name="1,000 m² or more" id="PerceelOppervlakte-1000" name="filter_PerceelOppervlakte" type="radio" value="1000"> <label class="radio-group-item-label label-text" for="PerceelOppervlakte-1000"><span>1,000 m² or more</span> <span class="a11y-sr-only">Results</span></label>
                                        </div><label class="radio-group-item-remove radio-group-row" for="PerceelOppervlakte-geen" title="1,000 m² or more"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>1,000 m² or more</span></label>
                                    </li>
                                    <li class="radio-group-item" data-radio-group-item="">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-groupname-to-filter="" data-radio-group-input="" data-radio-group-option-name="2,500 m² or more" id="PerceelOppervlakte-2500" name="filter_PerceelOppervlakte" type="radio" value="2500"> <label class="radio-group-item-label label-text" for="PerceelOppervlakte-2500"><span>2,500 m² or more</span> <span class="a11y-sr-only">Results</span></label>
                                        </div><label class="radio-group-item-remove radio-group-row" for="PerceelOppervlakte-geen" title="2,500 m² or more"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>2,500 m² or more</span></label>
                                    </li>
                                    <li class="radio-group-item" data-radio-group-item="">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-groupname-to-filter="" data-radio-group-input="" data-radio-group-option-name="5,000 m² or more" id="PerceelOppervlakte-5000" name="filter_PerceelOppervlakte" type="radio" value="5000"> <label class="radio-group-item-label label-text" for="PerceelOppervlakte-5000"><span>5,000 m² or more</span> <span class="a11y-sr-only">Results</span></label>
                                        </div><label class="radio-group-item-remove radio-group-row" for="PerceelOppervlakte-geen" title="5,000 m² or more"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>5,000 m² or more</span></label>
                                    </li>
                                    <li class="radio-group-item" data-radio-group-item="">
                                        <div class="filter-flyout" data-filter-flyout="" data-filter-flyout-range="" data-unique="Plotarea">
                                            <button class="filter-flyout-button-open button-tertiary" data-filter-open-flyout="" data-has-preview-filter="" type="button"><span class="icon-open-flyout fd-icon icon-plus-blue" data-grunticon-embed=""></span> Specify</button>
                                            <div class="filter-flyout-panel filter-flyout-panel-range" data-filter-flyout-panel="">
                                                <span class="icon-close-flyout icon-close-blue" data-filter-close-flyout="" data-grunticon-embed=""><span class="a11y-kb-only">Close</span></span>
                                                <div class="filter-flyout-backdrop" data-filter-flyout-backdrop=""></div>
                                                <fieldset class="filter-flyout-fieldset" data-component="range" data-range="">
                                                    <legend>Minimum to maximum plot area</legend> <input class="filter-flyout-range-input" data-range-input="" data-range-min="" id="PerceelOppervlakte-range-min" min="0" name="filter_PerceelOppervlakte-range-min" pattern="[0-9]*" placeholder="from" step="1" type="number"> <input class="filter-flyout-range-input" data-range-input="" data-range-max="" id="PerceelOppervlakte-range-max" min="0" name="filter_PerceelOppervlakte-range-max" pattern="[0-9]*" placeholder="to" step="1" type="number"> <button class="button-primary filter-flyout-range-submit" data-range-submit="" type="button">Specify</button>
                                                </fieldset>
                                            </div>
                                            <ul class="filter-flyout-selected-options" data-flyout-selected-options=""></ul>
                                        </div>
                                    </li>
                                </ul>
                            </fieldset>
                        </div>
                        <div class="radio-group with-range" data-component="radio-group" data-filter-visibility-target="AantalKamers" data-nested-filter="" data-radio-group="AantalKamers" data-radio-group-label="Number of rooms" data-resettable="">
                            <fieldset class="radio-group__fieldset fd-p-none">
                                <legend class="radio-group-legend radio-group-row">Number of rooms</legend>
                                <ul class="fd-p-none fd-list--none" data-radio-group-items="">
                                    <li class="radio-group-item radio-group-item-default">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input checked class="custom-radio" data-instant-search-handle="" data-radio-group-default="" data-radio-group-input="" id="AantalKamers-geen" name="filter_AantalKamers" type="radio" value=""> <label class="radio-group-item-label label-text" for="AantalKamers-geen"><span>Remove filter</span></label>
                                        </div>
                                    </li>
                                    <li class="radio-group-item" data-radio-group-item="">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-text-to-filter="rooms" data-radio-group-input="" data-radio-group-option-name="1 room" id="AantalKamers-1" name="filter_AantalKamers" type="radio" value="1,1"> <label class="radio-group-item-label label-text" for="AantalKamers-1"><span>1 room</span> <span class="a11y-sr-only">Results</span></label>
                                        </div><label class="radio-group-item-remove radio-group-row" for="AantalKamers-geen" title="1 room"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>1 room</span></label>
                                    </li>
                                    <li class="radio-group-item" data-radio-group-item="">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-text-to-filter="rooms" data-radio-group-input="" data-radio-group-option-name="2 or more" id="AantalKamers-2" name="filter_AantalKamers" type="radio" value="2"> <label class="radio-group-item-label label-text" for="AantalKamers-2"><span>2 or more</span> <span class="a11y-sr-only">Results</span></label>
                                        </div><label class="radio-group-item-remove radio-group-row" for="AantalKamers-geen" title="2 or more"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>2 or more</span></label>
                                    </li>
                                    <li class="radio-group-item" data-radio-group-item="">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-text-to-filter="rooms" data-radio-group-input="" data-radio-group-option-name="3 or more" id="AantalKamers-3" name="filter_AantalKamers" type="radio" value="3"> <label class="radio-group-item-label label-text" for="AantalKamers-3"><span>3 or more</span> <span class="a11y-sr-only">Results</span></label>
                                        </div><label class="radio-group-item-remove radio-group-row" for="AantalKamers-geen" title="3 or more"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>3 or more</span></label>
                                    </li>
                                    <li class="radio-group-item" data-radio-group-item="">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-text-to-filter="rooms" data-radio-group-input="" data-radio-group-option-name="4 or more" id="AantalKamers-4" name="filter_AantalKamers" type="radio" value="4"> <label class="radio-group-item-label label-text" for="AantalKamers-4"><span>4 or more</span> <span class="a11y-sr-only">Results</span></label>
                                        </div><label class="radio-group-item-remove radio-group-row" for="AantalKamers-geen" title="4 or more"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>4 or more</span></label>
                                    </li>
                                    <li class="radio-group-item" data-radio-group-item="">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-text-to-filter="rooms" data-radio-group-input="" data-radio-group-option-name="5 or more" id="AantalKamers-5" name="filter_AantalKamers" type="radio" value="5"> <label class="radio-group-item-label label-text" for="AantalKamers-5"><span>5 or more</span> <span class="a11y-sr-only">Results</span></label>
                                        </div><label class="radio-group-item-remove radio-group-row" for="AantalKamers-geen" title="5 or more"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>5 or more</span></label>
                                    </li>
                                    <li class="radio-group-item" data-radio-group-item="">
                                        <div class="filter-flyout" data-filter-flyout="" data-filter-flyout-range="" data-unique="Numberofrooms">
                                            <button class="filter-flyout-button-open button-tertiary" data-filter-open-flyout="" data-has-preview-filter="" type="button"><span class="icon-open-flyout fd-icon icon-plus-blue" data-grunticon-embed=""></span> Specify</button>
                                            <div class="filter-flyout-panel filter-flyout-panel-range" data-filter-flyout-panel="">
                                                <span class="icon-close-flyout icon-close-blue" data-filter-close-flyout="" data-grunticon-embed=""><span class="a11y-kb-only">Close</span></span>
                                                <div class="filter-flyout-backdrop" data-filter-flyout-backdrop=""></div>
                                                <fieldset class="filter-flyout-fieldset" data-component="range" data-range="">
                                                    <legend>Minimum to maximum number of rooms</legend> <input class="filter-flyout-range-input" data-range-input="" data-range-min="" id="AantalKamers-range-min" min="0" name="filter_AantalKamers-range-min" pattern="[0-9]*" placeholder="from" step="1" type="number"> <input class="filter-flyout-range-input" data-range-input="" data-range-max="" id="AantalKamers-range-max" min="0" name="filter_AantalKamers-range-max" pattern="[0-9]*" placeholder="to" step="1" type="number"> <button class="button-primary filter-flyout-range-submit" data-range-submit="" type="button">Specify</button>
                                                </fieldset>
                                            </div>
                                            <ul class="filter-flyout-selected-options" data-flyout-selected-options=""></ul>
                                        </div>
                                    </li>
                                </ul>
                            </fieldset>
                        </div>
                        <div class="radio-group" data-component="radio-group" data-filter-visibility-target="AantalSlaapkamers" data-nested-filter="" data-radio-group="AantalSlaapkamers" data-radio-group-label="Number of bedrooms" data-resettable="">
                            <fieldset class="radio-group__fieldset fd-p-none">
                                <legend class="radio-group-legend radio-group-row">Number of bedrooms</legend>
                                <ul class="fd-p-none fd-list--none" data-radio-group-items="">
                                    <li class="radio-group-item radio-group-item-default">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input checked class="custom-radio" data-instant-search-handle="" data-radio-group-default="" data-radio-group-input="" id="AantalSlaapkamers-geen" name="filter_AantalSlaapkamers" type="radio" value=""> <label class="radio-group-item-label label-text" for="AantalSlaapkamers-geen"><span>Remove filter</span></label>
                                        </div>
                                    </li>
                                    <li class="radio-group-item" data-radio-group-item="">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-text-to-filter="bedrooms" data-radio-group-input="" data-radio-group-option-name="1 bedroom" id="AantalSlaapkamers-1" name="filter_AantalSlaapkamers" type="radio" value="1,1"> <label class="radio-group-item-label label-text" for="AantalSlaapkamers-1"><span>1 bedroom</span> <span class="a11y-sr-only">Results</span></label>
                                        </div><label class="radio-group-item-remove radio-group-row" for="AantalSlaapkamers-geen" title="1 bedroom"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>1 bedroom</span></label>
                                    </li>
                                    <li class="radio-group-item" data-radio-group-item="">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-text-to-filter="bedrooms" data-radio-group-input="" data-radio-group-option-name="2 or more" id="AantalSlaapkamers-2" name="filter_AantalSlaapkamers" type="radio" value="2"> <label class="radio-group-item-label label-text" for="AantalSlaapkamers-2"><span>2 or more</span> <span class="a11y-sr-only">Results</span></label>
                                        </div><label class="radio-group-item-remove radio-group-row" for="AantalSlaapkamers-geen" title="2 or more"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>2 or more</span></label>
                                    </li>
                                    <li class="radio-group-item" data-radio-group-item="">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-text-to-filter="bedrooms" data-radio-group-input="" data-radio-group-option-name="3 or more" id="AantalSlaapkamers-3" name="filter_AantalSlaapkamers" type="radio" value="3"> <label class="radio-group-item-label label-text" for="AantalSlaapkamers-3"><span>3 or more</span> <span class="a11y-sr-only">Results</span></label>
                                        </div><label class="radio-group-item-remove radio-group-row" for="AantalSlaapkamers-geen" title="3 or more"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>3 or more</span></label>
                                    </li>
                                    <li class="radio-group-item" data-radio-group-item="">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-text-to-filter="bedrooms" data-radio-group-input="" data-radio-group-option-name="4 or more" id="AantalSlaapkamers-4" name="filter_AantalSlaapkamers" type="radio" value="4"> <label class="radio-group-item-label label-text" for="AantalSlaapkamers-4"><span>4 or more</span> <span class="a11y-sr-only">Results</span></label>
                                        </div><label class="radio-group-item-remove radio-group-row" for="AantalSlaapkamers-geen" title="4 or more"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>4 or more</span></label>
                                    </li>
                                    <li class="radio-group-item" data-radio-group-item="">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-text-to-filter="bedrooms" data-radio-group-input="" data-radio-group-option-name="5 or more" id="AantalSlaapkamers-5" name="filter_AantalSlaapkamers" type="radio" value="5"> <label class="radio-group-item-label label-text" for="AantalSlaapkamers-5"><span>5 or more</span> <span class="a11y-sr-only">Results</span></label>
                                        </div><label class="radio-group-item-remove radio-group-row" for="AantalSlaapkamers-geen" title="5 or more"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>5 or more</span></label>
                                    </li>
                                </ul>
                            </fieldset>
                        </div>
                        <fieldset class="search-filter-checkbox radio-group-fieldset" data-filter-group-id="Buitenruimte" data-nested-filter="">
                            <legend class="radio-group-legend radio-group-row w-full">Exterior space</legend>
                            <ul class="filter-checkbox-list" data-search-filter-checkbox="">
                                <li class="label-text filter-flyout-option-label"><input class="custom-checkbox" data-filter-checkbox-item="" data-filter-group-id="Buitenruimte" data-filter-group-name="Exterior space" data-resettable="" id="Buitenruimte-AanwezigheidVan:Balkon" name="filter_Buitenruimte" type="checkbox" value="AanwezigheidVan:balkon"> <label class="label-text filter-flyout-option-label" for="Buitenruimte-AanwezigheidVan:Balkon">Balcony</label></li>
                                <li class="label-text filter-flyout-option-label"><input class="custom-checkbox" data-filter-checkbox-item="" data-filter-group-id="Buitenruimte" data-filter-group-name="Exterior space" data-resettable="" id="Buitenruimte-AanwezigheidVan:Dakterras" name="filter_Buitenruimte" type="checkbox" value="AanwezigheidVan:dakterras"> <label class="label-text filter-flyout-option-label" for="Buitenruimte-AanwezigheidVan:Dakterras">Roof terrace</label></li>
                                <li class="label-text filter-flyout-option-label"><input class="custom-checkbox" data-filter-checkbox-item="" data-filter-group-id="Buitenruimte" data-filter-group-name="Exterior space" data-resettable="" id="Buitenruimte-AanwezigheidVan:Tuin" name="filter_Buitenruimte" type="checkbox" value="AanwezigheidVan:tuin"> <label class="label-text filter-flyout-option-label" for="Buitenruimte-AanwezigheidVan:Tuin">Garden</label></li>
                                <li style="list-style: none; display: inline">
                                    <div class="radio-group-nested-flyout is-hidden" data-checkbox-more-options="">
                                        <div class="filter-flyout" data-filter-flyout="" data-resettable="" data-unique="Gardenorientation-Gardenarea">
                                            <button class="filter-flyout-button-open button-tertiary" data-filter-open-flyout="" data-has-preview-filter="" type="button"><span class="icon-open-flyout fd-icon icon-plus-blue" data-grunticon-embed=""></span> Specify</button>
                                            <div class="filter-flyout-panel" data-filter-flyout-panel="">
                                                <span class="icon-close-flyout icon-close-blue" data-filter-close-flyout="" data-grunticon-embed=""><span class="a11y-kb-only">Close</span></span>
                                                <div class="filter-flyout-backdrop" data-filter-flyout-backdrop=""></div>
                                                <fieldset class="filter-flyout-fieldset">
                                                    <legend>Garden orientation</legend> <input name="filter_LiggingTuin" type="hidden" value="active">
                                                    <ul class="filter-flyout-options">
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="North"><input class="custom-checkbox" data-filter-flyout-add-groupname-to-filter="" data-filter-group-id="LiggingTuin" data-filter-group-name="Garden orientation" data-flyout-item="" data-instant-search-handle="" id="LiggingTuin-TuinOpNoorden" name="filter_LiggingTuin" type="checkbox" value="noord"> <label class="label-text filter-flyout-option-label" for="LiggingTuin-TuinOpNoorden">North</label> <span class="filter-flyout-option-count" data-instant-search-count="LiggingTuin-TuinOpNoorden"><span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="East"><input class="custom-checkbox" data-filter-flyout-add-groupname-to-filter="" data-filter-group-id="LiggingTuin" data-filter-group-name="Garden orientation" data-flyout-item="" data-instant-search-handle="" id="LiggingTuin-TuinOpOosten" name="filter_LiggingTuin" type="checkbox" value="oost"> <label class="label-text filter-flyout-option-label" for="LiggingTuin-TuinOpOosten">East</label> <span class="filter-flyout-option-count" data-instant-search-count="LiggingTuin-TuinOpOosten"><span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="West"><input class="custom-checkbox" data-filter-flyout-add-groupname-to-filter="" data-filter-group-id="LiggingTuin" data-filter-group-name="Garden orientation" data-flyout-item="" data-instant-search-handle="" id="LiggingTuin-TuinOpWesten" name="filter_LiggingTuin" type="checkbox" value="west"> <label class="label-text filter-flyout-option-label" for="LiggingTuin-TuinOpWesten">West</label> <span class="filter-flyout-option-count" data-instant-search-count="LiggingTuin-TuinOpWesten"><span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="South"><input class="custom-checkbox" data-filter-flyout-add-groupname-to-filter="" data-filter-group-id="LiggingTuin" data-filter-group-name="Garden orientation" data-flyout-item="" data-instant-search-handle="" id="LiggingTuin-TuinOpZuiden" name="filter_LiggingTuin" type="checkbox" value="zuid"> <label class="label-text filter-flyout-option-label" for="LiggingTuin-TuinOpZuiden">South</label> <span class="filter-flyout-option-count" data-instant-search-count="LiggingTuin-TuinOpZuiden"><span class="a11y-sr-only">Results</span></span></li>
                                                    </ul>
                                                </fieldset>
                                                <fieldset class="filter-flyout-fieldset">
                                                    <legend>Garden area</legend>
                                                    <ul class="filter-flyout-options">
                                                        <li class="filter-flyout-option-default filter-flyout-option"><input checked class="custom-radio" data-instant-search-handle="" id="Tuinoppervlakte-geen" name="filter_Tuinoppervlakte" type="radio" value=""> <label class="label-text" for="Tuinoppervlakte-geen">Remove filter</label></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="25+ m²"><input class="custom-radio" data-filter-flyout-add-groupname-to-filter="" data-filter-group-id="Tuinoppervlakte" data-filter-group-name="Garden area" data-flyout-item="" data-instant-search-handle="" id="Tuinoppervlakte-25" name="filter_Tuinoppervlakte" type="radio" value="25"> <label class="label-text filter-flyout-option-label" for="Tuinoppervlakte-25">25+ m²</label> <span class="filter-flyout-option-count" data-instant-search-count="Tuinoppervlakte-25"><span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="50+ m²"><input class="custom-radio" data-filter-flyout-add-groupname-to-filter="" data-filter-group-id="Tuinoppervlakte" data-filter-group-name="Garden area" data-flyout-item="" data-instant-search-handle="" id="Tuinoppervlakte-50" name="filter_Tuinoppervlakte" type="radio" value="50"> <label class="label-text filter-flyout-option-label" for="Tuinoppervlakte-50">50+ m²</label> <span class="filter-flyout-option-count" data-instant-search-count="Tuinoppervlakte-50"><span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="100+ m²"><input class="custom-radio" data-filter-flyout-add-groupname-to-filter="" data-filter-group-id="Tuinoppervlakte" data-filter-group-name="Garden area" data-flyout-item="" data-instant-search-handle="" id="Tuinoppervlakte-100" name="filter_Tuinoppervlakte" type="radio" value="100"> <label class="label-text filter-flyout-option-label" for="Tuinoppervlakte-100">100+ m²</label> <span class="filter-flyout-option-count" data-instant-search-count="Tuinoppervlakte-100"><span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="250+ m²"><input class="custom-radio" data-filter-flyout-add-groupname-to-filter="" data-filter-group-id="Tuinoppervlakte" data-filter-group-name="Garden area" data-flyout-item="" data-instant-search-handle="" id="Tuinoppervlakte-250" name="filter_Tuinoppervlakte" type="radio" value="250"> <label class="label-text filter-flyout-option-label" for="Tuinoppervlakte-250">250+ m²</label> <span class="filter-flyout-option-count" data-instant-search-count="Tuinoppervlakte-250"><span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="500+ m²"><input class="custom-radio" data-filter-flyout-add-groupname-to-filter="" data-filter-group-id="Tuinoppervlakte" data-filter-group-name="Garden area" data-flyout-item="" data-instant-search-handle="" id="Tuinoppervlakte-500" name="filter_Tuinoppervlakte" type="radio" value="500"> <label class="label-text filter-flyout-option-label" for="Tuinoppervlakte-500">500+ m²</label> <span class="filter-flyout-option-count" data-instant-search-count="Tuinoppervlakte-500"><span class="a11y-sr-only">Results</span></span></li>
                                                    </ul>
                                                </fieldset>
                                            </div>
                                            <ul class="filter-flyout-selected-options" data-flyout-selected-options=""></ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </fieldset>
                        <div class="dynamic-filter" data-instant-search-output="bouwPeriodeIdFilter">
                            <div class="filter-flyout" data-filter-flyout="" data-filter-visibility-target="BouwPeriodeId" data-resettable="" data-unique="Ageofproperty">
                                <button class="filter-flyout-button-open button-tertiary leading-normal filter-flyout-button-open-with-preview" data-filter-open-flyout="" data-has-preview-filter="" type="button">Age of property <span class="icon-open-flyout icon-arrow-right-blue absolute top-0 right-0 mr-0" data-grunticon-embed=""></span>
                                <p class="filter-flyout-preview-options mt-2 mb-0" data-filter-flyout-preview-options="">Before 1906, 1906-1930, 1931-1944</p></button>
                                <div class="filter-flyout-panel" data-filter-flyout-panel="">
                                    <span class="icon-close-flyout icon-close-blue" data-filter-close-flyout="" data-grunticon-embed=""><span class="a11y-kb-only">Close</span></span>
                                    <div class="filter-flyout-backdrop" data-filter-flyout-backdrop=""></div>
                                    <fieldset class="filter-flyout-fieldset">
                                        <legend>Age of property</legend> <input name="filter_BouwPeriodeId" type="hidden" value="active">
                                        <ul class="filter-flyout-options">
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Before 1906"><input class="custom-checkbox" data-filter-group-id="BouwPeriodeId" data-filter-group-name="Age of property" data-flyout-item="" data-instant-search-handle="" id="BouwPeriodeId-BouwperiodeVoor1906" name="filter_BouwPeriodeId" type="checkbox" value="voor 1906"> <label class="label-text filter-flyout-option-label" for="BouwPeriodeId-BouwperiodeVoor1906">Before 1906</label> <span class="filter-flyout-option-count" data-instant-search-count="BouwPeriodeId-BouwperiodeVoor1906"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="1906-1930"><input class="custom-checkbox" data-filter-group-id="BouwPeriodeId" data-filter-group-name="Age of property" data-flyout-item="" data-instant-search-handle="" id="BouwPeriodeId-Bouwperiode19061930" name="filter_BouwPeriodeId" type="checkbox" value="1906-1930"> <label class="label-text filter-flyout-option-label" for="BouwPeriodeId-Bouwperiode19061930">1906-1930</label> <span class="filter-flyout-option-count" data-instant-search-count="BouwPeriodeId-Bouwperiode19061930"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="1931-1944"><input class="custom-checkbox" data-filter-group-id="BouwPeriodeId" data-filter-group-name="Age of property" data-flyout-item="" data-instant-search-handle="" id="BouwPeriodeId-Bouwperiode19311944" name="filter_BouwPeriodeId" type="checkbox" value="1931-1944"> <label class="label-text filter-flyout-option-label" for="BouwPeriodeId-Bouwperiode19311944">1931-1944</label> <span class="filter-flyout-option-count" data-instant-search-count="BouwPeriodeId-Bouwperiode19311944"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="1945-1959"><input class="custom-checkbox" data-filter-group-id="BouwPeriodeId" data-filter-group-name="Age of property" data-flyout-item="" data-instant-search-handle="" id="BouwPeriodeId-Bouwperiode19451959" name="filter_BouwPeriodeId" type="checkbox" value="1945-1959"> <label class="label-text filter-flyout-option-label" for="BouwPeriodeId-Bouwperiode19451959">1945-1959</label> <span class="filter-flyout-option-count" data-instant-search-count="BouwPeriodeId-Bouwperiode19451959"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="1960-1970"><input class="custom-checkbox" data-filter-group-id="BouwPeriodeId" data-filter-group-name="Age of property" data-flyout-item="" data-instant-search-handle="" id="BouwPeriodeId-Bouwperiode19601970" name="filter_BouwPeriodeId" type="checkbox" value="1960-1970"> <label class="label-text filter-flyout-option-label" for="BouwPeriodeId-Bouwperiode19601970">1960-1970</label> <span class="filter-flyout-option-count" data-instant-search-count="BouwPeriodeId-Bouwperiode19601970"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="1971-1980"><input class="custom-checkbox" data-filter-group-id="BouwPeriodeId" data-filter-group-name="Age of property" data-flyout-item="" data-instant-search-handle="" id="BouwPeriodeId-Bouwperiode19711980" name="filter_BouwPeriodeId" type="checkbox" value="1971-1980"> <label class="label-text filter-flyout-option-label" for="BouwPeriodeId-Bouwperiode19711980">1971-1980</label> <span class="filter-flyout-option-count" data-instant-search-count="BouwPeriodeId-Bouwperiode19711980"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="1981-1990"><input class="custom-checkbox" data-filter-group-id="BouwPeriodeId" data-filter-group-name="Age of property" data-flyout-item="" data-instant-search-handle="" id="BouwPeriodeId-Bouwperiode19811990" name="filter_BouwPeriodeId" type="checkbox" value="1981-1990"> <label class="label-text filter-flyout-option-label" for="BouwPeriodeId-Bouwperiode19811990">1981-1990</label> <span class="filter-flyout-option-count" data-instant-search-count="BouwPeriodeId-Bouwperiode19811990"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="1991-2000"><input class="custom-checkbox" data-filter-group-id="BouwPeriodeId" data-filter-group-name="Age of property" data-flyout-item="" data-instant-search-handle="" id="BouwPeriodeId-Bouwperiode19912000" name="filter_BouwPeriodeId" type="checkbox" value="1991-2000"> <label class="label-text filter-flyout-option-label" for="BouwPeriodeId-Bouwperiode19912000">1991-2000</label> <span class="filter-flyout-option-count" data-instant-search-count="BouwPeriodeId-Bouwperiode19912000"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="2001-2010"><input class="custom-checkbox" data-filter-group-id="BouwPeriodeId" data-filter-group-name="Age of property" data-flyout-item="" data-instant-search-handle="" id="BouwPeriodeId-Bouwperiode20012010" name="filter_BouwPeriodeId" type="checkbox" value="2001-2010"> <label class="label-text filter-flyout-option-label" for="BouwPeriodeId-Bouwperiode20012010">2001-2010</label> <span class="filter-flyout-option-count" data-instant-search-count="BouwPeriodeId-Bouwperiode20012010"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="2011-2020"><input class="custom-checkbox" data-filter-group-id="BouwPeriodeId" data-filter-group-name="Age of property" data-flyout-item="" data-instant-search-handle="" id="BouwPeriodeId-Bouwperiode20112020" name="filter_BouwPeriodeId" type="checkbox" value="2011-2020"> <label class="label-text filter-flyout-option-label" for="BouwPeriodeId-Bouwperiode20112020">2011-2020</label> <span class="filter-flyout-option-count" data-instant-search-count="BouwPeriodeId-Bouwperiode20112020"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="After 2020"><input class="custom-checkbox" data-filter-group-id="BouwPeriodeId" data-filter-group-name="Age of property" data-flyout-item="" data-instant-search-handle="" id="BouwPeriodeId-BouwperiodeNa2020" name="filter_BouwPeriodeId" type="checkbox" value="na 2020"> <label class="label-text filter-flyout-option-label" for="BouwPeriodeId-BouwperiodeNa2020">After 2020</label> <span class="filter-flyout-option-count" data-instant-search-count="BouwPeriodeId-BouwperiodeNa2020"><span class="a11y-sr-only">Results</span></span></li>
                                        </ul>
                                    </fieldset>
                                </div>
                                <ul class="filter-flyout-selected-options" data-flyout-selected-options=""></ul>
                            </div>
                        </div>
                        <div class="dynamic-filter" data-instant-search-output="liggingFilter">
                            <div class="filter-flyout" data-filter-flyout="" data-filter-visibility-target="Ligging" data-resettable="" data-unique="Surrounding">
                                <button class="filter-flyout-button-open button-tertiary leading-normal filter-flyout-button-open-with-preview" data-filter-open-flyout="" data-has-preview-filter="" type="button">Surrounding <span class="icon-open-flyout icon-arrow-right-blue absolute top-0 right-0 mr-0" data-grunticon-embed=""></span>
                                <p class="filter-flyout-preview-options mt-2 mb-0" data-filter-flyout-preview-options="">At edge of wood, By water, In center</p></button>
                                <div class="filter-flyout-panel" data-filter-flyout-panel="">
                                    <span class="icon-close-flyout icon-close-blue" data-filter-close-flyout="" data-grunticon-embed=""><span class="a11y-kb-only">Close</span></span>
                                    <div class="filter-flyout-backdrop" data-filter-flyout-backdrop=""></div>
                                    <fieldset class="filter-flyout-fieldset">
                                        <legend>Surrounding</legend> <input name="filter_Ligging" type="hidden" value="active">
                                        <ul class="filter-flyout-options">
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="At edge of wood"><input class="custom-checkbox" data-filter-group-id="Ligging" data-filter-group-name="Surrounding" data-flyout-item="" data-instant-search-handle="" id="Ligging-AanBosrand" name="filter_Ligging" type="checkbox" value="aan bosrand"> <label class="label-text filter-flyout-option-label" for="Ligging-AanBosrand">At edge of wood</label> <span class="filter-flyout-option-count" data-instant-search-count="Ligging-AanBosrand"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="By water"><input class="custom-checkbox" data-filter-group-id="Ligging" data-filter-group-name="Surrounding" data-flyout-item="" data-instant-search-handle="" id="Ligging-AanWater" name="filter_Ligging" type="checkbox" value="aan water"> <label class="label-text filter-flyout-option-label" for="Ligging-AanWater">By water</label> <span class="filter-flyout-option-count" data-instant-search-count="Ligging-AanWater"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="In center"><input class="custom-checkbox" data-filter-group-id="Ligging" data-filter-group-name="Surrounding" data-flyout-item="" data-instant-search-handle="" id="Ligging-InCentrum" name="filter_Ligging" type="checkbox" value="in centrum"> <label class="label-text filter-flyout-option-label" for="Ligging-InCentrum">In center</label> <span class="filter-flyout-option-count" data-instant-search-count="Ligging-InCentrum"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="In green area"><input class="custom-checkbox" data-filter-group-id="Ligging" data-filter-group-name="Surrounding" data-flyout-item="" data-instant-search-handle="" id="Ligging-InBosrijkeOmgeving" name="filter_Ligging" type="checkbox" value="in bosrijke omgeving"> <label class="label-text filter-flyout-option-label" for="Ligging-InBosrijkeOmgeving">In green area</label> <span class="filter-flyout-option-count" data-instant-search-count="Ligging-InBosrijkeOmgeving"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="In residential district"><input class="custom-checkbox" data-filter-group-id="Ligging" data-filter-group-name="Surrounding" data-flyout-item="" data-instant-search-handle="" id="Ligging-InWoonwijk" name="filter_Ligging" type="checkbox" value="in woonwijk"> <label class="label-text filter-flyout-option-label" for="Ligging-InWoonwijk">In residential district</label> <span class="filter-flyout-option-count" data-instant-search-count="Ligging-InWoonwijk"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="On busy road"><input class="custom-checkbox" data-filter-group-id="Ligging" data-filter-group-name="Surrounding" data-flyout-item="" data-instant-search-handle="" id="Ligging-AanDrukkeWeg" name="filter_Ligging" type="checkbox" value="aan drukke weg"> <label class="label-text filter-flyout-option-label" for="Ligging-AanDrukkeWeg">On busy road</label> <span class="filter-flyout-option-count" data-instant-search-count="Ligging-AanDrukkeWeg"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="On navigable waterway"><input class="custom-checkbox" data-filter-group-id="Ligging" data-filter-group-name="Surrounding" data-flyout-item="" data-instant-search-handle="" id="Ligging-AanVaarwater" name="filter_Ligging" type="checkbox" value="aan vaarwater"> <label class="label-text filter-flyout-option-label" for="Ligging-AanVaarwater">On navigable waterway</label> <span class="filter-flyout-option-count" data-instant-search-count="Ligging-AanVaarwater"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="On quiet road"><input class="custom-checkbox" data-filter-group-id="Ligging" data-filter-group-name="Surrounding" data-flyout-item="" data-instant-search-handle="" id="Ligging-AanRustigeWeg" name="filter_Ligging" type="checkbox" value="aan rustige weg"> <label class="label-text filter-flyout-option-label" for="Ligging-AanRustigeWeg">On quiet road</label> <span class="filter-flyout-option-count" data-instant-search-count="Ligging-AanRustigeWeg"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Open position"><input class="custom-checkbox" data-filter-group-id="Ligging" data-filter-group-name="Surrounding" data-flyout-item="" data-instant-search-handle="" id="Ligging-OpenLigging" name="filter_Ligging" type="checkbox" value="open ligging"> <label class="label-text filter-flyout-option-label" for="Ligging-OpenLigging">Open position</label> <span class="filter-flyout-option-count" data-instant-search-count="Ligging-OpenLigging"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Outside built-up area"><input class="custom-checkbox" data-filter-group-id="Ligging" data-filter-group-name="Surrounding" data-flyout-item="" data-instant-search-handle="" id="Ligging-BuitenBebouwdeKom" name="filter_Ligging" type="checkbox" value="buiten bebouwde kom"> <label class="label-text filter-flyout-option-label" for="Ligging-BuitenBebouwdeKom">Outside built-up area</label> <span class="filter-flyout-option-count" data-instant-search-count="Ligging-BuitenBebouwdeKom"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Overlooking park"><input class="custom-checkbox" data-filter-group-id="Ligging" data-filter-group-name="Surrounding" data-flyout-item="" data-instant-search-handle="" id="Ligging-AanPark" name="filter_Ligging" type="checkbox" value="aan park"> <label class="label-text filter-flyout-option-label" for="Ligging-AanPark">Overlooking park</label> <span class="filter-flyout-option-count" data-instant-search-count="Ligging-AanPark"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Rural"><input class="custom-checkbox" data-filter-group-id="Ligging" data-filter-group-name="Surrounding" data-flyout-item="" data-instant-search-handle="" id="Ligging-LandelijkGelegen" name="filter_Ligging" type="checkbox" value="landelijk gelegen"> <label class="label-text filter-flyout-option-label" for="Ligging-LandelijkGelegen">Rural</label> <span class="filter-flyout-option-count" data-instant-search-count="Ligging-LandelijkGelegen"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Sheltered position"><input class="custom-checkbox" data-filter-group-id="Ligging" data-filter-group-name="Surrounding" data-flyout-item="" data-instant-search-handle="" id="Ligging-BeschutteLigging" name="filter_Ligging" type="checkbox" value="beschutte ligging"> <label class="label-text filter-flyout-option-label" for="Ligging-BeschutteLigging">Sheltered position</label> <span class="filter-flyout-option-count" data-instant-search-count="Ligging-BeschutteLigging"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Unobstructed view"><input class="custom-checkbox" data-filter-group-id="Ligging" data-filter-group-name="Surrounding" data-flyout-item="" data-instant-search-handle="" id="Ligging-VrijUitzicht" name="filter_Ligging" type="checkbox" value="vrij uitzicht"> <label class="label-text filter-flyout-option-label" for="Ligging-VrijUitzicht">Unobstructed view</label> <span class="filter-flyout-option-count" data-instant-search-count="Ligging-VrijUitzicht"><span class="a11y-sr-only">Results</span></span></li>
                                        </ul>
                                    </fieldset>
                                </div>
                                <ul class="filter-flyout-selected-options" data-flyout-selected-options=""></ul>
                            </div>
                        </div>
                        <div class="radio-group" data-component="radio-group" data-nested-filter="" data-radio-group="BouwvormId" data-radio-group-label="Type of construction" data-resettable="">
                            <fieldset class="radio-group__fieldset fd-p-none">
                                <legend class="radio-group-legend radio-group-row">Type of construction</legend>
                                <ul class="fd-p-none fd-list--none" data-radio-group-items="">
                                    <li class="radio-group-item radio-group-item-default">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input checked class="custom-radio" data-instant-search-handle="" data-radio-group-default="" data-radio-group-input="" id="BouwvormId-geen" name="filter_BouwvormId" type="radio" value=""> <label class="radio-group-item-label label-text" for="BouwvormId-geen"><span>Remove filter</span></label>
                                        </div>
                                    </li>
                                    <li class="radio-group-item" data-radio-group-item="">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input class="custom-radio" data-instant-search-handle="" data-radio-group-input="" data-radio-group-option-name="Resale" id="BouwvormId-BestaandeBouw" name="filter_BouwvormId" type="radio" value="bestaande bouw"> <label class="radio-group-item-label label-text" for="BouwvormId-BestaandeBouw"><span>Resale</span> <span class="a11y-sr-only">Results</span></label>
                                        </div><label class="radio-group-item-remove radio-group-row" for="BouwvormId-geen" title="Resale"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>Resale</span></label>
                                    </li>
                                    <li class="radio-group-item" data-radio-group-item="">
                                        <div class="radio-group-item-input radio-group-row">
                                            <input class="custom-radio" data-instant-search-handle="" data-radio-group-input="" data-radio-group-option-name="New" id="BouwvormId-Nieuwbouw" name="filter_BouwvormId" type="radio" value="nieuwbouw"> <label class="radio-group-item-label label-text" for="BouwvormId-Nieuwbouw"><span>New</span> <span class="a11y-sr-only">Results</span></label>
                                        </div><label class="radio-group-item-remove radio-group-row" for="BouwvormId-geen" title="New"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>New</span></label>
                                    </li>
                                </ul>
                            </fieldset>
                        </div>
                        <div class="dynamic-filter" data-instant-search-output="garageGroupFilter">
                            <div class="filter-flyout" data-filter-flyout="" data-filter-visibility-target="GarageGroup" data-resettable="" data-unique="Typeofgarage-Capacity">
                                <button class="filter-flyout-button-open button-tertiary leading-normal filter-flyout-button-open-with-preview" data-filter-open-flyout="" data-has-preview-filter="" type="button">Garage <span class="icon-open-flyout icon-arrow-right-blue absolute top-0 right-0 mr-0" data-grunticon-embed=""></span>
                                <p class="filter-flyout-preview-options mt-2 mb-0" data-filter-flyout-preview-options="">Type of garage, Capacity</p></button>
                                <div class="filter-flyout-panel" data-filter-flyout-panel="">
                                    <span class="icon-close-flyout icon-close-blue" data-filter-close-flyout="" data-grunticon-embed=""><span class="a11y-kb-only">Close</span></span>
                                    <div class="filter-flyout-backdrop" data-filter-flyout-backdrop=""></div>
                                    <fieldset class="filter-flyout-fieldset">
                                        <legend>Type of garage</legend> <input name="filter_SoortGarage" type="hidden" value="active">
                                        <ul class="filter-flyout-options">
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Garage"><input class="custom-checkbox" data-filter-group-id="SoortGarage" data-filter-group-name="Type of garage" data-flyout-item="" data-instant-search-handle="" id="SoortGarage-Garage" name="filter_SoortGarage" type="checkbox" value="elke-soort-garage"> <label class="label-text filter-flyout-option-label" for="SoortGarage-Garage">Garage</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortGarage-Garage"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Lean-to"><input class="custom-checkbox" data-filter-flyout-add-groupname-to-filter="" data-filter-group-id="SoortGarage" data-filter-group-name="Type of garage" data-flyout-item="" data-instant-search-handle="" id="SoortGarage-AangebouwdeGarage" name="filter_SoortGarage" type="checkbox" value="aangebouwd"> <label class="label-text filter-flyout-option-label" for="SoortGarage-AangebouwdeGarage">Lean-to</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortGarage-AangebouwdeGarage"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Lock-up garage"><input class="custom-checkbox" data-filter-group-id="SoortGarage" data-filter-group-name="Type of garage" data-flyout-item="" data-instant-search-handle="" id="SoortGarage-Garagebox" name="filter_SoortGarage" type="checkbox" value="garagebox"> <label class="label-text filter-flyout-option-label" for="SoortGarage-Garagebox">Lock-up garage</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortGarage-Garagebox"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Garage + Carport"><input class="custom-checkbox" data-filter-group-id="SoortGarage" data-filter-group-name="Type of garage" data-flyout-item="" data-instant-search-handle="" id="SoortGarage-GarageCarport" name="filter_SoortGarage" type="checkbox" value="garagemetcarport"> <label class="label-text filter-flyout-option-label" for="SoortGarage-GarageCarport">Garage + Carport</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortGarage-GarageCarport"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Built-in"><input class="custom-checkbox" data-filter-flyout-add-groupname-to-filter="" data-filter-group-id="SoortGarage" data-filter-group-name="Type of garage" data-flyout-item="" data-instant-search-handle="" id="SoortGarage-InpandigeGarage" name="filter_SoortGarage" type="checkbox" value="inpandig"> <label class="label-text filter-flyout-option-label" for="SoortGarage-InpandigeGarage">Built-in</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortGarage-InpandigeGarage"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Underground car park"><input class="custom-checkbox" data-filter-group-id="SoortGarage" data-filter-group-name="Type of garage" data-flyout-item="" data-instant-search-handle="" id="SoortGarage-Parkeerkelder" name="filter_SoortGarage" type="checkbox" value="parkeerkelder"> <label class="label-text filter-flyout-option-label" for="SoortGarage-Parkeerkelder">Underground car park</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortGarage-Parkeerkelder"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Basement"><input class="custom-checkbox" data-filter-flyout-add-groupname-to-filter="" data-filter-group-id="SoortGarage" data-filter-group-name="Type of garage" data-flyout-item="" data-instant-search-handle="" id="SoortGarage-GarageSouterrain" name="filter_SoortGarage" type="checkbox" value="souterrain"> <label class="label-text filter-flyout-option-label" for="SoortGarage-GarageSouterrain">Basement</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortGarage-GarageSouterrain"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Detached"><input class="custom-checkbox" data-filter-flyout-add-groupname-to-filter="" data-filter-group-id="SoortGarage" data-filter-group-name="Type of garage" data-flyout-item="" data-instant-search-handle="" id="SoortGarage-VrijstaandeGarage" name="filter_SoortGarage" type="checkbox" value="vrijstaand"> <label class="label-text filter-flyout-option-label" for="SoortGarage-VrijstaandeGarage">Detached</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortGarage-VrijstaandeGarage"><span class="a11y-sr-only">Results</span></span></li>
                                        </ul>
                                    </fieldset>
                                    <fieldset class="filter-flyout-fieldset">
                                        <legend>Capacity</legend>
                                        <ul class="filter-flyout-options">
                                            <li class="filter-flyout-option-default filter-flyout-option"><input checked class="custom-radio" data-instant-search-handle="" id="AutoCapaciteitGarage-geen" name="filter_AutoCapaciteitGarage" type="radio" value=""> <label class="label-text" for="AutoCapaciteitGarage-geen">Remove filter</label></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="1 car"><input class="custom-radio" data-filter-group-id="AutoCapaciteitGarage" data-filter-group-name="Capacity" data-flyout-item="" data-instant-search-handle="" id="AutoCapaciteitGarage-1" name="filter_AutoCapaciteitGarage" type="radio" value="1,1"> <label class="label-text filter-flyout-option-label" for="AutoCapaciteitGarage-1">1 car</label> <span class="filter-flyout-option-count" data-instant-search-count="AutoCapaciteitGarage-1"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="2+ car"><input class="custom-radio" data-filter-group-id="AutoCapaciteitGarage" data-filter-group-name="Capacity" data-flyout-item="" data-instant-search-handle="" id="AutoCapaciteitGarage-2" name="filter_AutoCapaciteitGarage" type="radio" value="2"> <label class="label-text filter-flyout-option-label" for="AutoCapaciteitGarage-2">2+ car</label> <span class="filter-flyout-option-count" data-instant-search-count="AutoCapaciteitGarage-2"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="3+ car"><input class="custom-radio" data-filter-group-id="AutoCapaciteitGarage" data-filter-group-name="Capacity" data-flyout-item="" data-instant-search-handle="" id="AutoCapaciteitGarage-3" name="filter_AutoCapaciteitGarage" type="radio" value="3"> <label class="label-text filter-flyout-option-label" for="AutoCapaciteitGarage-3">3+ car</label> <span class="filter-flyout-option-count" data-instant-search-count="AutoCapaciteitGarage-3"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="4+ car"><input class="custom-radio" data-filter-group-id="AutoCapaciteitGarage" data-filter-group-name="Capacity" data-flyout-item="" data-instant-search-handle="" id="AutoCapaciteitGarage-4" name="filter_AutoCapaciteitGarage" type="radio" value="4"> <label class="label-text filter-flyout-option-label" for="AutoCapaciteitGarage-4">4+ car</label> <span class="filter-flyout-option-count" data-instant-search-count="AutoCapaciteitGarage-4"><span class="a11y-sr-only">Results</span></span></li>
                                        </ul>
                                    </fieldset>
                                </div>
                                <ul class="filter-flyout-selected-options" data-flyout-selected-options=""></ul>
                            </div>
                        </div>
                        <div class="dynamic-filter" data-instant-search-output="aanwezigheidVanFilter">
                            <div class="filter-flyout" data-filter-flyout="" data-filter-visibility-target="AanwezigheidVan" data-resettable="" data-unique="Comeswith">
                                <button class="filter-flyout-button-open button-tertiary leading-normal filter-flyout-button-open-with-preview" data-filter-open-flyout="" data-has-preview-filter="" type="button">Comes with <span class="icon-open-flyout icon-arrow-right-blue absolute top-0 right-0 mr-0" data-grunticon-embed=""></span>
                                <p class="filter-flyout-preview-options mt-2 mb-0" data-filter-flyout-preview-options="">Bathtub, Central heating boiler, Commercial space</p></button>
                                <div class="filter-flyout-panel" data-filter-flyout-panel="">
                                    <span class="icon-close-flyout icon-close-blue" data-filter-close-flyout="" data-grunticon-embed=""><span class="a11y-kb-only">Close</span></span>
                                    <div class="filter-flyout-backdrop" data-filter-flyout-backdrop=""></div>
                                    <fieldset class="filter-flyout-fieldset">
                                        <legend>Comes with</legend> <input name="filter_AanwezigheidVan" type="hidden" value="active">
                                        <ul class="filter-flyout-options">
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Bathtub" data-filter-visibility-target="AanwezigheidVan-LigZitbad"><input class="custom-checkbox" data-filter-group-id="AanwezigheidVan" data-filter-group-name="Comes with" data-flyout-item="" data-instant-search-handle="" id="AanwezigheidVan-LigZitbad" name="filter_AanwezigheidVan" type="checkbox" value="zit/ligbad"> <label class="label-text filter-flyout-option-label" for="AanwezigheidVan-LigZitbad">Bathtub</label> <span class="filter-flyout-option-count" data-instant-search-count="AanwezigheidVan-LigZitbad"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Central heating boiler" data-filter-visibility-target="AanwezigheidVan-CvKetel"><input class="custom-checkbox" data-filter-group-id="AanwezigheidVan" data-filter-group-name="Comes with" data-flyout-item="" data-instant-search-handle="" id="AanwezigheidVan-CvKetel" name="filter_AanwezigheidVan" type="checkbox" value="c.v.-ketel"> <label class="label-text filter-flyout-option-label" for="AanwezigheidVan-CvKetel">Central heating boiler</label> <span class="filter-flyout-option-count" data-instant-search-count="AanwezigheidVan-CvKetel"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Commercial space"><input class="custom-checkbox" data-filter-group-id="AanwezigheidVan" data-filter-group-name="Comes with" data-flyout-item="" data-instant-search-handle="" id="AanwezigheidVan-Bedrijfsruimte" name="filter_AanwezigheidVan" type="checkbox" value="bedrijfsruimte"> <label class="label-text filter-flyout-option-label" for="AanwezigheidVan-Bedrijfsruimte">Commercial space</label> <span class="filter-flyout-option-count" data-instant-search-count="AanwezigheidVan-Bedrijfsruimte"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option is-disabled" data-filter-flyout-option-label="Electric door" data-filter-visibility-target="AanwezigheidVan-MetElektrischeDeur"><input class="custom-checkbox" data-filter-group-id="AanwezigheidVan" data-filter-group-name="Comes with" data-flyout-item="" data-instant-search-handle="" id="AanwezigheidVan-MetElektrischeDeur" name="filter_AanwezigheidVan" type="checkbox" value="met elektrische deur"> <label class="label-text filter-flyout-option-label" for="AanwezigheidVan-MetElektrischeDeur">Electric door</label> <span class="filter-flyout-option-count" data-instant-search-count="AanwezigheidVan-MetElektrischeDeur"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option is-disabled" data-filter-flyout-option-label="Electricity" data-filter-visibility-target="AanwezigheidVan-VoorzienVanElektra"><input class="custom-checkbox" data-filter-group-id="AanwezigheidVan" data-filter-group-name="Comes with" data-flyout-item="" data-instant-search-handle="" id="AanwezigheidVan-VoorzienVanElektra" name="filter_AanwezigheidVan" type="checkbox" value="voorzien van elektra"> <label class="label-text filter-flyout-option-label" for="AanwezigheidVan-VoorzienVanElektra">Electricity</label> <span class="filter-flyout-option-count" data-instant-search-count="AanwezigheidVan-VoorzienVanElektra"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Elevator" data-filter-visibility-target="AanwezigheidVan-Lift"><input class="custom-checkbox" data-filter-group-id="AanwezigheidVan" data-filter-group-name="Comes with" data-flyout-item="" data-instant-search-handle="" id="AanwezigheidVan-Lift" name="filter_AanwezigheidVan" type="checkbox" value="lift"> <label class="label-text filter-flyout-option-label" for="AanwezigheidVan-Lift">Elevator</label> <span class="filter-flyout-option-count" data-instant-search-count="AanwezigheidVan-Lift"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Fixer-upper" data-filter-visibility-target="AanwezigheidVan-Kluswoning"><input class="custom-checkbox" data-filter-group-id="AanwezigheidVan" data-filter-group-name="Comes with" data-flyout-item="" data-instant-search-handle="" id="AanwezigheidVan-Kluswoning" name="filter_AanwezigheidVan" type="checkbox" value="kluswoning"> <label class="label-text filter-flyout-option-label" for="AanwezigheidVan-Kluswoning">Fixer-upper</label> <span class="filter-flyout-option-count" data-instant-search-count="AanwezigheidVan-Kluswoning"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option is-disabled" data-filter-flyout-option-label="Heating" data-filter-visibility-target="AanwezigheidVan-VoorzienVanVerwarming"><input class="custom-checkbox" data-filter-group-id="AanwezigheidVan" data-filter-group-name="Comes with" data-flyout-item="" data-instant-search-handle="" id="AanwezigheidVan-VoorzienVanVerwarming" name="filter_AanwezigheidVan" type="checkbox" value="voorzien van verwarming"> <label class="label-text filter-flyout-option-label" for="AanwezigheidVan-VoorzienVanVerwarming">Heating</label> <span class="filter-flyout-option-count" data-instant-search-count="AanwezigheidVan-VoorzienVanVerwarming"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Jacuzzi" data-filter-visibility-target="AanwezigheidVan-Jacuzzi"><input class="custom-checkbox" data-filter-group-id="AanwezigheidVan" data-filter-group-name="Comes with" data-flyout-item="" data-instant-search-handle="" id="AanwezigheidVan-Jacuzzi" name="filter_AanwezigheidVan" type="checkbox" value="jacuzzi"> <label class="label-text filter-flyout-option-label" for="AanwezigheidVan-Jacuzzi">Jacuzzi</label> <span class="filter-flyout-option-count" data-instant-search-count="AanwezigheidVan-Jacuzzi"><span class="a11y-sr-only">Results</span></span></li>
                                        </ul>
                                        <ul class="filter-flyout-options">
                                            <li class="filter-flyout-option is-disabled" data-filter-flyout-option-label="Loft" data-filter-visibility-target="AanwezigheidVan-MetVliering"><input class="custom-checkbox" data-filter-group-id="AanwezigheidVan" data-filter-group-name="Comes with" data-flyout-item="" data-instant-search-handle="" id="AanwezigheidVan-MetVliering" name="filter_AanwezigheidVan" type="checkbox" value="met vliering"> <label class="label-text filter-flyout-option-label" for="AanwezigheidVan-MetVliering">Loft</label> <span class="filter-flyout-option-count" data-instant-search-count="AanwezigheidVan-MetVliering"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Monumental building" data-filter-visibility-target="AanwezigheidVan-MonumentaalPand"><input class="custom-checkbox" data-filter-group-id="AanwezigheidVan" data-filter-group-name="Comes with" data-flyout-item="" data-instant-search-handle="" id="AanwezigheidVan-MonumentaalPand" name="filter_AanwezigheidVan" type="checkbox" value="monumentaal pand"> <label class="label-text filter-flyout-option-label" for="AanwezigheidVan-MonumentaalPand">Monumental building</label> <span class="filter-flyout-option-count" data-instant-search-count="AanwezigheidVan-MonumentaalPand"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Open fireplace" data-filter-visibility-target="AanwezigheidVan-OpenHaard"><input class="custom-checkbox" data-filter-group-id="AanwezigheidVan" data-filter-group-name="Comes with" data-flyout-item="" data-instant-search-handle="" id="AanwezigheidVan-OpenHaard" name="filter_AanwezigheidVan" type="checkbox" value="open haard"> <label class="label-text filter-flyout-option-label" for="AanwezigheidVan-OpenHaard">Open fireplace</label> <span class="filter-flyout-option-count" data-instant-search-count="AanwezigheidVan-OpenHaard"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Renewable energy" data-filter-visibility-target="AanwezigheidVan-DuurzameEnergie"><input class="custom-checkbox" data-filter-group-id="AanwezigheidVan" data-filter-group-name="Comes with" data-flyout-item="" data-instant-search-handle="" id="AanwezigheidVan-DuurzameEnergie" name="filter_AanwezigheidVan" type="checkbox" value="DuurzameEnergie"> <label class="label-text filter-flyout-option-label" for="AanwezigheidVan-DuurzameEnergie">Renewable energy</label> <span class="filter-flyout-option-count" data-instant-search-count="AanwezigheidVan-DuurzameEnergie"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option is-disabled" data-filter-flyout-option-label="Running water" data-filter-visibility-target="AanwezigheidVan-VoorzienVanWater"><input class="custom-checkbox" data-filter-group-id="AanwezigheidVan" data-filter-group-name="Comes with" data-flyout-item="" data-instant-search-handle="" id="AanwezigheidVan-VoorzienVanWater" name="filter_AanwezigheidVan" type="checkbox" value="voorzien van water"> <label class="label-text filter-flyout-option-label" for="AanwezigheidVan-VoorzienVanWater">Running water</label> <span class="filter-flyout-option-count" data-instant-search-count="AanwezigheidVan-VoorzienVanWater"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Sauna" data-filter-visibility-target="AanwezigheidVan-Sauna"><input class="custom-checkbox" data-filter-group-id="AanwezigheidVan" data-filter-group-name="Comes with" data-flyout-item="" data-instant-search-handle="" id="AanwezigheidVan-Sauna" name="filter_AanwezigheidVan" type="checkbox" value="sauna"> <label class="label-text filter-flyout-option-label" for="AanwezigheidVan-Sauna">Sauna</label> <span class="filter-flyout-option-count" data-instant-search-count="AanwezigheidVan-Sauna"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Shed/storage" data-filter-visibility-target="AanwezigheidVan-SchuurBerging"><input class="custom-checkbox" data-filter-group-id="AanwezigheidVan" data-filter-group-name="Comes with" data-flyout-item="" data-instant-search-handle="" id="AanwezigheidVan-SchuurBerging" name="filter_AanwezigheidVan" type="checkbox" value="berging"> <label class="label-text filter-flyout-option-label" for="AanwezigheidVan-SchuurBerging">Shed/storage</label> <span class="filter-flyout-option-count" data-instant-search-count="AanwezigheidVan-SchuurBerging"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Steam cabin" data-filter-visibility-target="AanwezigheidVan-Stoomcabine"><input class="custom-checkbox" data-filter-group-id="AanwezigheidVan" data-filter-group-name="Comes with" data-flyout-item="" data-instant-search-handle="" id="AanwezigheidVan-Stoomcabine" name="filter_AanwezigheidVan" type="checkbox" value="stoomcabine"> <label class="label-text filter-flyout-option-label" for="AanwezigheidVan-Stoomcabine">Steam cabin</label> <span class="filter-flyout-option-count" data-instant-search-count="AanwezigheidVan-Stoomcabine"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Swimming pool" data-filter-visibility-target="AanwezigheidVan-Zwembad"><input class="custom-checkbox" data-filter-group-id="AanwezigheidVan" data-filter-group-name="Comes with" data-flyout-item="" data-instant-search-handle="" id="AanwezigheidVan-Zwembad" name="filter_AanwezigheidVan" type="checkbox" value="zwembad"> <label class="label-text filter-flyout-option-label" for="AanwezigheidVan-Zwembad">Swimming pool</label> <span class="filter-flyout-option-count" data-instant-search-count="AanwezigheidVan-Zwembad"><span class="a11y-sr-only">Results</span></span></li>
                                        </ul>
                                    </fieldset>
                                </div>
                                <ul class="filter-flyout-selected-options" data-flyout-selected-options=""></ul>
                            </div>
                        </div>
                        <div class="dynamic-filter" data-instant-search-output="toegankelijkheidFilter">
                            <div class="filter-flyout" data-filter-flyout="" data-filter-visibility-target="Toegankelijkheid" data-resettable="" data-unique="Accessibility">
                                <button class="filter-flyout-button-open button-tertiary leading-normal filter-flyout-button-open-with-preview" data-filter-open-flyout="" data-has-preview-filter="" type="button">Accessibility <span class="icon-open-flyout icon-arrow-right-blue absolute top-0 right-0 mr-0" data-grunticon-embed=""></span>
                                <p class="filter-flyout-preview-options mt-2 mb-0" data-filter-flyout-preview-options="">Adapted home, Disabled home, Elderly home</p></button>
                                <div class="filter-flyout-panel" data-filter-flyout-panel="">
                                    <span class="icon-close-flyout icon-close-blue" data-filter-close-flyout="" data-grunticon-embed=""><span class="a11y-kb-only">Close</span></span>
                                    <div class="filter-flyout-backdrop" data-filter-flyout-backdrop=""></div>
                                    <fieldset class="filter-flyout-fieldset">
                                        <legend>Accessibility</legend> <input name="filter_Toegankelijkheid" type="hidden" value="active">
                                        <ul class="filter-flyout-options">
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Adapted home"><input class="custom-checkbox" data-filter-group-id="Toegankelijkheid" data-filter-group-name="Accessibility" data-flyout-item="" data-instant-search-handle="" id="Toegankelijkheid-AangepasteWoning" name="filter_Toegankelijkheid" type="checkbox" value="aangepastewoning"> <label class="label-text filter-flyout-option-label" for="Toegankelijkheid-AangepasteWoning">Adapted home</label> <span class="filter-flyout-option-count" data-instant-search-count="Toegankelijkheid-AangepasteWoning"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Disabled home"><input class="custom-checkbox" data-filter-group-id="Toegankelijkheid" data-filter-group-name="Accessibility" data-flyout-item="" data-instant-search-handle="" id="Toegankelijkheid-Gehandicaptenwoning" name="filter_Toegankelijkheid" type="checkbox" value="gehandicaptenwoning"> <label class="label-text filter-flyout-option-label" for="Toegankelijkheid-Gehandicaptenwoning">Disabled home</label> <span class="filter-flyout-option-count" data-instant-search-count="Toegankelijkheid-Gehandicaptenwoning"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Elderly home"><input class="custom-checkbox" data-filter-group-id="Toegankelijkheid" data-filter-group-name="Accessibility" data-flyout-item="" data-instant-search-handle="" id="Toegankelijkheid-Seniorenwoning" name="filter_Toegankelijkheid" type="checkbox" value="seniorenwoning"> <label class="label-text filter-flyout-option-label" for="Toegankelijkheid-Seniorenwoning">Elderly home</label> <span class="filter-flyout-option-count" data-instant-search-count="Toegankelijkheid-Seniorenwoning"><span class="a11y-sr-only">Results</span></span></li>
                                        </ul>
                                    </fieldset>
                                </div>
                                <ul class="filter-flyout-selected-options" data-flyout-selected-options=""></ul>
                            </div>
                        </div>
                        <div class="dynamic-filter" data-instant-search-output="energielabelFilter">
                            <div class="filter-flyout" data-filter-flyout="" data-filter-visibility-target="Energielabel" data-resettable="" data-unique="Energylabel">
                                <button class="filter-flyout-button-open button-tertiary leading-normal filter-flyout-button-open-with-preview" data-filter-open-flyout="" data-has-preview-filter="" type="button">Energy label <span class="icon-open-flyout icon-arrow-right-blue absolute top-0 right-0 mr-0" data-grunticon-embed=""></span>
                                <p class="filter-flyout-preview-options mt-2 mb-0" data-filter-flyout-preview-options="">A-label, B-label, C-label</p></button>
                                <div class="filter-flyout-panel" data-filter-flyout-panel="">
                                    <span class="icon-close-flyout icon-close-blue" data-filter-close-flyout="" data-grunticon-embed=""><span class="a11y-kb-only">Close</span></span>
                                    <div class="filter-flyout-backdrop" data-filter-flyout-backdrop=""></div>
                                    <fieldset class="filter-flyout-fieldset">
                                        <legend>Energy label</legend> <input name="filter_Energielabel" type="hidden" value="active">
                                        <ul class="filter-flyout-options">
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="A-label"><input class="custom-checkbox" data-filter-group-id="Energielabel" data-filter-group-name="Energy label" data-flyout-item="" data-instant-search-handle="" id="Energielabel-EnergielabelA" name="filter_Energielabel" type="checkbox" value="A"> <label class="label-text filter-flyout-option-label" for="Energielabel-EnergielabelA">A-label</label> <span class="filter-flyout-option-count" data-instant-search-count="Energielabel-EnergielabelA"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="B-label"><input class="custom-checkbox" data-filter-group-id="Energielabel" data-filter-group-name="Energy label" data-flyout-item="" data-instant-search-handle="" id="Energielabel-EnergielabelB" name="filter_Energielabel" type="checkbox" value="B"> <label class="label-text filter-flyout-option-label" for="Energielabel-EnergielabelB">B-label</label> <span class="filter-flyout-option-count" data-instant-search-count="Energielabel-EnergielabelB"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="C-label"><input class="custom-checkbox" data-filter-group-id="Energielabel" data-filter-group-name="Energy label" data-flyout-item="" data-instant-search-handle="" id="Energielabel-EnergielabelC" name="filter_Energielabel" type="checkbox" value="C"> <label class="label-text filter-flyout-option-label" for="Energielabel-EnergielabelC">C-label</label> <span class="filter-flyout-option-count" data-instant-search-count="Energielabel-EnergielabelC"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="D-label"><input class="custom-checkbox" data-filter-group-id="Energielabel" data-filter-group-name="Energy label" data-flyout-item="" data-instant-search-handle="" id="Energielabel-EnergielabelD" name="filter_Energielabel" type="checkbox" value="D"> <label class="label-text filter-flyout-option-label" for="Energielabel-EnergielabelD">D-label</label> <span class="filter-flyout-option-count" data-instant-search-count="Energielabel-EnergielabelD"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="E-label"><input class="custom-checkbox" data-filter-group-id="Energielabel" data-filter-group-name="Energy label" data-flyout-item="" data-instant-search-handle="" id="Energielabel-EnergielabelE" name="filter_Energielabel" type="checkbox" value="E"> <label class="label-text filter-flyout-option-label" for="Energielabel-EnergielabelE">E-label</label> <span class="filter-flyout-option-count" data-instant-search-count="Energielabel-EnergielabelE"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="F-label"><input class="custom-checkbox" data-filter-group-id="Energielabel" data-filter-group-name="Energy label" data-flyout-item="" data-instant-search-handle="" id="Energielabel-EnergielabelF" name="filter_Energielabel" type="checkbox" value="F"> <label class="label-text filter-flyout-option-label" for="Energielabel-EnergielabelF">F-label</label> <span class="filter-flyout-option-count" data-instant-search-count="Energielabel-EnergielabelF"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="G-label"><input class="custom-checkbox" data-filter-group-id="Energielabel" data-filter-group-name="Energy label" data-flyout-item="" data-instant-search-handle="" id="Energielabel-EnergielabelG" name="filter_Energielabel" type="checkbox" value="G"> <label class="label-text filter-flyout-option-label" for="Energielabel-EnergielabelG">G-label</label> <span class="filter-flyout-option-count" data-instant-search-count="Energielabel-EnergielabelG"><span class="a11y-sr-only">Results</span></span></li>
                                        </ul>
                                    </fieldset>
                                </div>
                                <ul class="filter-flyout-selected-options" data-flyout-selected-options=""></ul>
                            </div>
                        </div><input checked="checked" id="ZoekType-Koop" name="filter_ZoekType" type="hidden" value="koop">
                        <div class="dynamic-filter" data-instant-search-output="extrasGroupFilter">
                            <div class="filter-flyout" data-filter-flyout="" data-filter-visibility-target="ExtrasGroup" data-resettable="" data-unique="Highlighted-Openhouse-Auction-Virtualopenhouse">
                                <button class="filter-flyout-button-open button-tertiary leading-normal filter-flyout-button-open-with-preview" data-filter-open-flyout="" data-has-preview-filter="" type="button">Extras <span class="icon-open-flyout icon-arrow-right-blue absolute top-0 right-0 mr-0" data-grunticon-embed=""></span>
                                <p class="filter-flyout-preview-options mt-2 mb-0" data-filter-flyout-preview-options="">Highlighted, Open house, Auction, Virtual open house</p></button>
                                <div class="filter-flyout-panel" data-filter-flyout-panel="">
                                    <span class="icon-close-flyout icon-close-blue" data-filter-close-flyout="" data-grunticon-embed=""><span class="a11y-kb-only">Close</span></span>
                                    <div class="filter-flyout-backdrop" data-filter-flyout-backdrop=""></div>
                                    <fieldset class="filter-flyout-fieldset">
                                        <legend>Highlighted</legend> <input name="filter_IndicatiePDF" type="hidden" value="active">
                                        <ul class="filter-flyout-options">
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Featured residential properties"><input class="custom-checkbox" data-filter-group-id="IndicatiePDF" data-filter-group-name="Highlighted" data-flyout-item="" data-instant-search-handle="" id="IndicatiePDF-Inbeeld" name="filter_IndicatiePDF" type="checkbox" value="Inbeeld"> <label class="label-text filter-flyout-option-label" for="IndicatiePDF-Inbeeld">Featured residential properties</label> <span class="filter-flyout-option-count" data-instant-search-count="IndicatiePDF-Inbeeld"><span class="a11y-sr-only">Results</span></span></li>
                                        </ul>
                                    </fieldset>
                                    <fieldset class="filter-flyout-fieldset">
                                        <legend>Open house</legend>
                                        <ul class="filter-flyout-options">
                                            <li class="filter-flyout-option-default filter-flyout-option"><input checked class="custom-radio" data-instant-search-handle="" id="OpenHuizen-geen" name="filter_OpenHuizen" type="radio" value=""> <label class="label-text" for="OpenHuizen-geen">Remove filter</label></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="All open houses"><input class="custom-radio" data-filter-group-id="OpenHuizen" data-filter-group-name="Open house" data-flyout-item="" data-instant-search-handle="" id="OpenHuizen-OpenHuis" name="filter_OpenHuizen" type="radio" value="OpenHuis"> <label class="label-text filter-flyout-option-label" for="OpenHuizen-OpenHuis">All open houses</label> <span class="filter-flyout-option-count" data-instant-search-count="OpenHuizen-OpenHuis"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Next weekend"><input class="custom-radio" data-filter-flyout-add-groupname-to-filter="" data-filter-flyout-add-groupname-to-label="" data-filter-group-id="OpenHuizen" data-filter-group-name="Open house" data-flyout-item="" data-instant-search-handle="" id="OpenHuizen-OpenHuisWeekend" name="filter_OpenHuizen" type="radio" value="OpenHuisWeekend"> <label class="label-text filter-flyout-option-label" for="OpenHuizen-OpenHuisWeekend">Next weekend</label> <span class="filter-flyout-option-count" data-instant-search-count="OpenHuizen-OpenHuisWeekend"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Today"><input class="custom-radio" data-filter-flyout-add-groupname-to-filter="" data-filter-flyout-add-groupname-to-label="" data-filter-group-id="OpenHuizen" data-filter-group-name="Open house" data-flyout-item="" data-instant-search-handle="" id="OpenHuizen-OpenHuisVandaag" name="filter_OpenHuizen" type="radio" value="OpenHuisVandaag"> <label class="label-text filter-flyout-option-label" for="OpenHuizen-OpenHuisVandaag">Today</label> <span class="filter-flyout-option-count" data-instant-search-count="OpenHuizen-OpenHuisVandaag"><span class="a11y-sr-only">Results</span></span></li>
                                        </ul>
                                    </fieldset>
                                    <fieldset class="filter-flyout-fieldset">
                                        <legend>Auction</legend>
                                        <ul class="filter-flyout-options">
                                            <li class="filter-flyout-option-default filter-flyout-option"><input checked class="custom-radio" data-instant-search-handle="" id="VeilingDatum-geen" name="filter_VeilingDatum" type="radio" value=""> <label class="label-text" for="VeilingDatum-geen">Remove filter</label></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="All auctions"><input class="custom-radio" data-filter-group-id="VeilingDatum" data-filter-group-name="Auction" data-flyout-item="" data-instant-search-handle="" id="VeilingDatum-AlleVeilingen" name="filter_VeilingDatum" type="radio" value="AlleVeilingen"> <label class="label-text filter-flyout-option-label" for="VeilingDatum-AlleVeilingen">All auctions</label> <span class="filter-flyout-option-count" data-instant-search-count="VeilingDatum-AlleVeilingen"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Today"><input class="custom-radio" data-filter-flyout-add-groupname-to-filter="" data-filter-flyout-add-groupname-to-label="" data-filter-group-id="VeilingDatum" data-filter-group-name="Auction" data-flyout-item="" data-instant-search-handle="" id="VeilingDatum-Vandaag" name="filter_VeilingDatum" type="radio" value="Vandaag"> <label class="label-text filter-flyout-option-label" for="VeilingDatum-Vandaag">Today</label> <span class="filter-flyout-option-count" data-instant-search-count="VeilingDatum-Vandaag"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Next week"><input class="custom-radio" data-filter-flyout-add-groupname-to-filter="" data-filter-flyout-add-groupname-to-label="" data-filter-group-id="VeilingDatum" data-filter-group-name="Auction" data-flyout-item="" data-instant-search-handle="" id="VeilingDatum-KomendeWeek" name="filter_VeilingDatum" type="radio" value="KomendeWeek"> <label class="label-text filter-flyout-option-label" for="VeilingDatum-KomendeWeek">Next week</label> <span class="filter-flyout-option-count" data-instant-search-count="VeilingDatum-KomendeWeek"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Next month"><input class="custom-radio" data-filter-flyout-add-groupname-to-filter="" data-filter-flyout-add-groupname-to-label="" data-filter-group-id="VeilingDatum" data-filter-group-name="Auction" data-flyout-item="" data-instant-search-handle="" id="VeilingDatum-KomendeMaand" name="filter_VeilingDatum" type="radio" value="KomendeMaand"> <label class="label-text filter-flyout-option-label" for="VeilingDatum-KomendeMaand">Next month</label> <span class="filter-flyout-option-count" data-instant-search-count="VeilingDatum-KomendeMaand"><span class="a11y-sr-only">Results</span></span></li>
                                        </ul>
                                    </fieldset>
                                    <fieldset class="filter-flyout-fieldset">
                                        <legend>Virtual open house</legend>
                                        <ul class="filter-flyout-options">
                                            <li class="filter-flyout-option-default filter-flyout-option"><input checked class="custom-radio" data-instant-search-handle="" id="VirtueleOpenHuizen-geen" name="filter_VirtueleOpenHuizen" type="radio" value=""> <label class="label-text" for="VirtueleOpenHuizen-geen">Remove filter</label></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="All virtual open houses"><input class="custom-radio" data-filter-group-id="VirtueleOpenHuizen" data-filter-group-name="Virtual open house" data-flyout-item="" data-instant-search-handle="" id="VirtueleOpenHuizen-VirtueelOpenHuis" name="filter_VirtueleOpenHuizen" type="radio" value="VirtueelOpenHuis"> <label class="label-text filter-flyout-option-label" for="VirtueleOpenHuizen-VirtueelOpenHuis">All virtual open houses</label> <span class="filter-flyout-option-count" data-instant-search-count="VirtueleOpenHuizen-VirtueelOpenHuis"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Within a week"><input class="custom-radio" data-filter-flyout-add-groupname-to-filter="" data-filter-flyout-add-groupname-to-label="" data-filter-group-id="VirtueleOpenHuizen" data-filter-group-name="Virtual open house" data-flyout-item="" data-instant-search-handle="" id="VirtueleOpenHuizen-VirtueelOpenHuisWeek" name="filter_VirtueleOpenHuizen" type="radio" value="VirtueelOpenHuisWeek"> <label class="label-text filter-flyout-option-label" for="VirtueleOpenHuizen-VirtueelOpenHuisWeek">Within a week</label> <span class="filter-flyout-option-count" data-instant-search-count="VirtueleOpenHuizen-VirtueelOpenHuisWeek"><span class="a11y-sr-only">Results</span></span></li>
                                            <li class="filter-flyout-option" data-filter-flyout-option-label="Today"><input class="custom-radio" data-filter-flyout-add-groupname-to-filter="" data-filter-flyout-add-groupname-to-label="" data-filter-group-id="VirtueleOpenHuizen" data-filter-group-name="Virtual open house" data-flyout-item="" data-instant-search-handle="" id="VirtueleOpenHuizen-VirtueelOpenHuisVandaag" name="filter_VirtueleOpenHuizen" type="radio" value="VirtueelOpenHuisVandaag"> <label class="label-text filter-flyout-option-label" for="VirtueleOpenHuizen-VirtueelOpenHuisVandaag">Today</label> <span class="filter-flyout-option-count" data-instant-search-count="VirtueleOpenHuizen-VirtueelOpenHuisVandaag"><span class="a11y-sr-only">Results</span></span></li>
                                        </ul>
                                    </fieldset>
                                </div>
                                <ul class="filter-flyout-selected-options" data-flyout-selected-options=""></ul>
                            </div>
                        </div>
                    </div>
                    <fieldset class="free-text-search fd-container-full" data-free-text-search-name="Search in description" data-free-text-search-type="" data-resettable="">
                        <legend>Search in description</legend>
                        <div class="free-text-search-name-input-wrapper">
                            <input class="fd-input" data-free-text-search-name-input="" placeholder="Ground floor or basement" type="text"> <button class="free-text-search-name-clear" data-free-text-search-name-clear-handle="" type="button"><span class="icon-delete-greyLight"></span><span class="a11y-sr-only">Remove</span></button>
                        </div>
                        <div class="free-text-search-wrapper" data-free-text-search-wrapper=""></div>
                    </fieldset><!--(Sticky) Filter Close-->
                     <button class="mobile-search-close-flyout fd-p-left-xs fd-bg-blue-5 fd-text--left" data-search-close-flyout="" type="button"><span class="icon-arrow-left-blue fd-m-none" data-grunticon-embed=""></span> Back</button> <button class="mobile-search-sticky-close-flyout fd-btn fd-btn--secondary" data-search-close-flyout="" type="button"><span class="icon-arrow-left-blue" data-grunticon-embed=""></span> Back</button> <!--(Sticky) Filter Submit-->
                     <button class="mobile-search-sticky-button fd-btn fd-btn--primary" data-sidebar-handle="" type="submit">Show results</button>
                </div>
                <div class="zoek-op-kaart__content">
        <div class="zoek-op-kaart__map">
            <!-- search-map component -->
            <div class="search-map">
                <div class="travel-time-polygon__loading-overlay is-hidden" data-travel-time-polygon-loading-overlay="">
                    <div class="app-spinner keyframe-animation-supported" data-travel-time-spinner=""><svg class="svg-circular" viewbox="0 0 48 48">
                    <circle class="path" cx="24" cy="24" fill="none" r="20" stroke-dasharray="89,200" stroke-dashoffset="-124" stroke-width="3"></circle></svg> <img class="gif-circular" src="https://assets.fstatic.nl/master_3718/assets/components/app-spinner/spinner.gif"></div>
                </div><!-- map component -->
                <div class="map map-full-viewport is-loaded" data-map="" data-map-full-viewport="" data-saved-objects-url="/mijn/favorites/kaart/saved-objects/list/" data-search-map="" data-test-map="" style="height: 702px;">
                    <div class="map__type-select">
                        <input checked class="search-map-type-select-radio" data-search-map-type-select="" id="search-map-type-default" name="search-map-type-control" type="radio" value="default"> <label class="search-map-type-select-label" for="search-map-type-default">Map</label> <input class="search-map-type-select-radio" data-search-map-type-select="" id="search-map-type-satellite" name="search-map-type-control" type="radio" value="satellite"> <label class="search-map-type-select-label" for="search-map-type-satellite">Satellite</label>
                    </div>
                    <div class="map__zoom-controls">
                        <button class="map__zoom-control zoom-plus" data-map-zoom-zoomin=""><span class="icon icon-plus-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Zoom in</span></button> <button class="map__zoom-control zoom-minus" data-map-zoom-zoomout=""><span class="icon icon-minus-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Zoom out</span></button>
                    </div>
                    <div class="object-map-gps-controls" data-component="object-map-gps-controls" data-search-map-gps-controls="search-map">
                        <button class="object-map-gps-control__button object-map-gps-control__button--center-location" data-search-map-gps-controls-center=""><span class="object-map-gps-control__button-icon icon-current-location-greyLight" data-grunticon-embed=""></span> <span class="object-map-gps-control__button-icon icon-current-location-blue" data-grunticon-embed=""></span> <span class="object-map-gps-control__button-icon icon-current-location-active-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Gecentreerd</span></button>
                    </div>
                </div><!-- /map component -->
                <!-- search-map-infowindow component -->
                <div class="search-map-infowindow" data-search-map-infowindow="" data-search-map-infowindow-object-url="/en/search/kaartinfowindow/?id={objectId}&amp;zo={searchQuery}">
                    <div class="search-map-infowindow__navigation" data-search-map-infowindow-navigation="">
                        <button class="search-map-infowindow__previous-button" data-search-map-infowindow-previous=""><span class="icon-arrow-left-white" data-grunticon-embed=""></span><span class="a11y-sr-only">Previous</span></button>
                        <div class="search-map-infowindow__position" data-search-map-infowindow-position="" data-search-map-infowindow-separator="from"></div><button class="search-map-infowindow__next-button" data-search-map-infowindow-next=""><span class="icon-arrow-right-white" data-grunticon-embed=""></span><span class="a11y-sr-only">Next</span></button>
                    </div>
                    <div class="search-map-infowindow__list" data-search-map-infowindow-list=""></div>
                    <div class="search-map-infowindow__close">
                        <button class="search-map-infowindow__close-button" data-close-infowindow="" tabindex="0"><span class="icon icon-close-white" data-grunticon-embed=""></span> <span class="a11y-sr-only">Close</span></button>
                    </div>
                </div><!-- /search-map-infowindow component -->
                <!-- search-map-content component -->
                <div class="search-map-content" data-component="search-map-content" data-search-map-content="" data-search-map-content-url="/search/kaart/coordinates/?id={locationId}">
                    <fieldset class="search-map-content__location">
                        <legend class="a11y-sr-only">Location</legend>
                        <div class="autocomplete" data-autocomplete="" data-autocomplete-context="search-kaart" data-autocomplete-is-async="" data-search-results-handle="location" data-thousand-separator="," data-track-component-selector="input[name=searchType]:checked" data-track-component-value="area">
                            <input data-autocomplete-url="" data-partial-page-update-output="autocompleteUrl" type="hidden" value="https://zb.funda.info/suggest/?query={queryPlaceholder}&amp;max=7&amp;type=koop&amp;areatype=&amp;currentIdentifiers={identifierPlaceholder}&amp;timestamp="> <input data-autocomplete-alt-url="" data-partial-page-update-output="autocompleteAltUrl" type="hidden" value="https://zb.funda.info/suggest/alternatives/?query={queryPlaceholder}&amp;max=7&amp;type=koop&amp;areatype=&amp;currentIdentifiers={identifierPlaceholder}&amp;timestamp="> <input aria-autocomplete="list" aria-expanded="true" aria-owns="autocomplete-list" autocomplete="off" class="autocomplete-input fd-input" data-autocomplete-input="" data-autocomplete-minlength="2" data-autocomplete-niveau-id="" data-autocomplete-parent-id="" data-instant-search-output="zoekboxTextValue" id="autocomplete-input" name="filter_location" placeholder="City, neighborhood, address, etc." role="combobox" spellcheck="false" type="search" value=""> <button class="autocomplete-clear fd-m-right-none" data-autocomplete-clear="" type="button"><span class="icon-delete-small-greyDark" data-grunticon-embed=""></span> <span class="a11y-sr-only">Clear</span></button> <button class="autocomplete-plus is-hidden" data-autocomplete-plus="" id="plus-test" tabindex="-1" type="button"><span class="icon-plus-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Plus</span></button>
                            <div class="autocomplete-plus-button-hidden" data-autocomplete-hidden-div-plus-icon=""></div><input autocomplete="off" data-autocomplete-output="" data-instant-search-output="zoekboxHiddenValue" name="autocomplete-identifier" type="hidden" value="">
                            <div class="autocomplete-list-outer" data-autocomplete-suggestions="">
                                <span class="autocomplete__notification--suggestion fd-m-none fd-p-right fd-p-left fd-p-top-xs fd-p-bottom-xs fd-color-dark-2"></span>
                                <p class="fd-m-none"><span class="autocomplete__notification--suggestion fd-m-none fd-p-right fd-p-left fd-p-top-xs fd-p-bottom-xs fd-color-dark-2"><span class="icon icon-not-found-house-grey fd-icon--xl fd-m-right-xs"></span>Maybe you mean...</span></p><span class="autocomplete__notification--error fd-flex fd-m-none fd-p-right fd-p-left fd-p-top-xs fd-p-bottom-xs fd-color-dark-2"><span class="fd-m-none fd-flex"><span class="icon icon-not-found-house-grey fd-icon--xl fd-m-right-xs"></span></span></span>
                                <p class="fd-m-none">No results, try something else...</p>
                                <div class="autocomplete-list fd-border-top-remove" data-autocomplete-list="" id="autocomplete-list" role="listbox" style="margin-left: 2em">
                                    <script data-autocomplete-item-template="" type="template/html">
                                           <li role="option"
                                               id="{id}"
                                               data-autocomplete-list-item
                                               data-autocomplete-identifier="{identifier}"
                                               data-autocomplete-parent-id="{parentId}"
                                               data-autocomplete-niveau-id="{niveauId}"
                                               data-autocomplete-display-value="{displayValue}"
                                               class="fd-flex fd-align-items-center fd-border-top-light-2">
                                               <div class="autocomplete-list-suggestion-icon fd-align-items-center fd-p-left fd-p-right-xs fd-icon fd-flex fd-align-items-center">
                                                   <span class="icon icon-location-pin-blue fd-icon--xl"></span>
                                               </div>
                                               <span class="autocomplete-match">
                                                   <span data-autocomplete-match>{label}</span>
                                                   <span class="autocomplete-description">{description}</span>
                                               </span>

                                               <div class="autocomplete-count">{count}</div>
                                           </li>
                                    </script>
                                </div>
                            </div>
                        </div><button class="button-primary search-map-content__submit-location" data-search-map-content-submit-location=""><span class="icon-search-white"></span> <span class="a11y-sr-only">Search</span></button>
                    </fieldset>
                    <fieldset class="travel-mode-toggle-zok-wrapper">
                        <div class="travel-mode-toggle-wrapper is-hidden" data-travel-mode-toggle-zok-wrapper="">
                            <ul class="travel-mode-toggle" data-travel-mode-toggle-modality="" role="listbox">
                                <li class="travel-mode-toggle-modality" data-item-key="modality" data-item-value="close" data-travel-mode-toggle-item="" role="button" tabindex="0"><span class="" data-travel-mode-toggle-close="">Car</span></li>
                                <li class="travel-mode-toggle-modality is-active" data-item-key="modality" data-item-value="car" data-travel-mode-toggle-item="" role="button"><span>Car</span></li>
                                <li class="travel-mode-toggle-modality" data-item-key="modality" data-item-value="transit" data-travel-mode-toggle-item="" role="button"><span>Transit</span></li>
                                <li class="travel-mode-toggle-modality" data-item-key="modality" data-item-value="bike" data-travel-mode-toggle-item="" role="button"><span>Bike</span></li>
                            </ul><!--travel time tooltip 1-->
                            <div class="travel-time-tips first-tip" data-popover-travel-time-tip="1">
                                <div class="popover has-top-triangle is-hidden" data-popover="travel-time-tip">
                                    <span class="popover__caret"></span>
                                    <p class="popover__text">Select your preferred way of travel. <span class="travel-time-next-tip" data-travel-time-next-tip="1">Next tip.</span></p><button class="popover__close-button" data-popover-close="travel-time-tip"><span class="a11y-sr-only">Close</span> <span class="icon-close-blue" data-grunticon-embed=""></span></button>
                                </div>
                                <div class="mobile-triangle-first-tip is-hidden" data-tooltip-mobile-arrow=""></div>
                            </div><!-- /travel time tooltip 1-->
                            <ul class="travel-mode-toggle travel-mode-toggle-list-travel-time" data-travel-mode-toggle-travel-time="" role="listbox">
                                <li class="travel-mode-toggle-travel-time" data-item-key="travelTime" data-item-value="close" data-travel-mode-toggle-item="" role="button" tabindex="0"><span class="" data-travel-mode-toggle-close="">30 min.</span></li>
                                <li class="travel-mode-toggle-travel-time" data-item-key="travelTime" data-item-value="10" data-travel-mode-toggle-item="" role="button"><span>10 min.</span></li>
                                <li class="travel-mode-toggle-travel-time is-active" data-item-key="travelTime" data-item-value="30" data-travel-mode-toggle-item="" role="button"><span>30 min.</span></li>
                                <li class="travel-mode-toggle-travel-time" data-item-key="travelTime" data-item-value="60" data-travel-mode-toggle-item="" role="button"><span>60 min.</span></li>
                            </ul><!--travel time tooltip 2-->
                            <div class="travel-time-tips second-tip" data-popover-travel-time-tip="2">
                                <div class="popover has-top-triangle is-hidden" data-popover="travel-time-tip">
                                    <span class="popover__caret"></span>
                                    <p class="popover__text">Select the maximum time you want to travel. <span class="travel-time-next-tip" data-travel-time-next-tip="2">Next tip.</span></p><button class="popover__close-button" data-popover-close="travel-time-tip"><span class="a11y-sr-only">Close</span> <span class="icon-close-blue" data-grunticon-embed=""></span></button>
                                </div>
                                <div class="mobile-triangle-second-tip is-hidden" data-tooltip-mobile-arrow=""></div>
                            </div><!-- /travel time tooltip 2-->
                        </div>
                    </fieldset>
                    <fieldset class="search-map-content__navigation">
                        <button class="button-tertiary search-map-content__filter-button" data-sidebar-handle="" type="button">
                        <div class="filter-count" data-component="filter-count" data-filter-count="" data-resettable="">
                            <span class="filter-count__number fd-bg-orange-1 fd-display-inline-block fd-m-right-2xs fd-text--center fd-color-white" data-filter-count-number="" data-test-filter-count-number="">1</span> <span data-filter-count-label="" data-filter-count-label-multiple="filters" data-filter-count-label-one="filter">filter</span>
                        </div></button>
                        <div data-instant-search-output="contentToggle">
                            <div class="search-content-toggle">
                                <a class="search-content-toggle__view-type" data-test-list-button="" href="{{url('list')}}"><span class="icon icon-list-grey"></span> List</a> <a class="search-content-toggle__view-type is-active" data-test-map-button="" href="{{url('list_map')}}"><span class="icon icon-location-blue"></span> Map</a> <a class="search-content-toggle__view-type map-options" data-map-options=""><span class="icon icon-plus-blue" data-grunticon-embed=""></span> Kaartopties</a>
                                <div class="map__type-select is-hidden" data-map-type-select-top="">
                                    <input checked class="search-map-type-select-radio" data-search-map-type-select="" id="search-map-type-default-top" name="search-map-type-control-top" type="radio" value="default"> <label class="search-map-type-select-label" for="search-map-type-default-top">Kaart</label> <input class="search-map-type-select-radio" data-search-map-type-select="" id="search-map-type-satellite-top" name="search-map-type-control-top" type="radio" value="satellite"> <label class="search-map-type-select-label" for="search-map-type-satellite-top">Satelliet</label>
                                </div>
                            </div>
                        </div>
                    </fieldset><!--travel time tooltip last-->
                    <div class="mobile-search-map-travel-time-tips last-tip" data-popover-travel-time-tip="">
                        <div class="popover has-left-triangle is-hidden" data-popover="travel-time-tip">
                            <span class="popover__caret"></span>
                            <p class="popover__text">Here you can hide travel time. <span class="travel-time-next-tip">Do not show these tips again.</span></p><button class="popover__close-button" data-popover-close="travel-time-tip"><span class="a11y-sr-only">Close</span> <span class="icon-close-blue" data-grunticon-embed=""></span></button>
                        </div>
                        <div class="mobile-triangle-last-tip is-hidden" data-tooltip-mobile-arrow=""></div>
                    </div><!-- /travel time tooltip last-->
                </div><!-- /search-map-content component -->
                <div class="search-map-error-notification">
                    <div class="general-error" data-general-error="">
                        <div class="notification notification-closable notification-error is-hidden" data-notification="">
                            <div class="notification-content">
                                <div class="notification-body">
                                    <div class="notification-icons">
                                        <span class="icon-error-red"></span>
                                    </div>
                                    <p data-text-container="">Your current location could not be determined. Please, try again later.</p>
                                    <div class="notification-buttons">
                                        <button class="notification-close" data-notification-close=""><span class="a11y-sr-only">Close</span> <span class="icon-close-greyDark" data-grunticon-embed=""></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="access-denied-error" data-access-denied-error="">
                        <div class="notification notification-closable notification-error is-hidden" data-notification="">
                            <div class="notification-content">
                                <div class="notification-body">
                                    <div class="notification-icons">
                                        <span class="icon-error-red"></span>
                                    </div>
                                    <p data-text-container="">In order to show your current location, update your browser's location settings.</p>
                                    <div class="notification-buttons">
                                        <button class="notification-close" data-notification-close=""><span class="a11y-sr-only">Close</span> <span class="icon-close-greyDark" data-grunticon-embed=""></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="search-map-polygon-error is-hidden" data-search-map-polygon-error="">
                    <div class="notification notification-closable notification-error" data-notification="">
                        <div class="notification-content">
                            <div class="notification-body">
                                <div class="notification-icons">
                                    <span class="icon-error-red"></span>
                                </div>
                                <p data-text-container="">Unable to load travel time. Please, try again or reload the page.&nbsp;</p>
                                <div class="notification-buttons">
                                    <button class="notification-close" data-notification-close=""><span class="a11y-sr-only">Close</span> <span class="icon-close-greyDark" data-grunticon-embed=""></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="zoek-op-kaart__skyscraper">
                <aside class="advertisement dfp-display-blocked hidden" data-advertisement-adunit-path="/7276/funda.koop/zoekopkaart/web/skyscraper1_koop_zoekopkaart_web_r0" data-advertisement-lok="15001" data-advertisement-size-default="[ 0, 0 ]" data-advertisement-size-mapping="[[[1280, 680],[[120, 600],[160, 600]]],[[760, 0],[]]]" data-advertisements="" data-advertisements-async="true" data-advertisements-event-trigger="" data-advertisements-lazy-refresh-interval="60" data-advertisements-lazy-type="scroll" data-advertisements-render-margin="20" data-test-advertisement="" id="ad_3c2e106f-0cb2-409a-99d2-4d416cfb4f54"></aside>
            </div>
        </div>
    </div>
            </form>
        </div>
    </main>
</body>
</html>