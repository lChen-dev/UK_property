@extends('master')
@section('content')
    <dialog data-component="dialog" data-dialog="user-form" data-isuserloggedinurl="/en/mijn/account/isuserloggedin/">
        <div class="dialog-container">
            <div class="dialog-content">
                <button class="dialog-close-button" data-dialog-close=""><span class="button-text">Close</span> <span class="icon icon-close" data-grunticon-embed=""></span></button>
                <div data-dialog-body=""></div>
                <div class="app-spinner" data-dialog-spinner=""><svg class="svg-circular" viewbox="0 0 48 48">
                <circle class="path" cx="24" cy="24" fill="none" r="20" stroke-dasharray="89,200" stroke-dashoffset="-124" stroke-width="3"></circle></svg> <img class="gif-circular" src="https://assets.fstatic.nl/master_3718/assets/components/app-spinner/spinner.gif"></div>
            </div>
        </div>
    </dialog>
    <dialog data-component="dialog" data-dialog="save-search-form" data-isuserloggedinurl="/en/mijn/account/isuserloggedin/">
        <div class="dialog-container">
            <div class="dialog-content">
                <button class="dialog-close-button" data-dialog-close=""><span class="button-text">Close</span> <span class="icon icon-close" data-grunticon-embed=""></span></button>
                <div data-dialog-body=""></div>
                <div class="app-spinner" data-dialog-spinner=""><svg class="svg-circular" viewbox="0 0 48 48">
                <circle class="path" cx="24" cy="24" fill="none" r="20" stroke-dasharray="89,200" stroke-dashoffset="-124" stroke-width="3"></circle></svg> <img class="gif-circular" src="https://assets.fstatic.nl/master_3718/assets/components/app-spinner/spinner.gif"></div>
            </div>
        </div>
    </dialog>
    <form class="search results-has-advertisement" data-instant-search="" data-page-viewed="Listing Results Viewed" data-search-results="" method="post" novalidate="">
        <input data-instant-search-output="previousState" name="previousState" type="hidden" value="eyJhdXRvY29tcGxldGUtaWRlbnRpZmllciI6ImhlZWwtbmVkZXJsYW5kIiwiZmlsdGVyX2xvY2F0aW9uIjoiTmVkZXJsYW5kIiwiZmlsdGVyX1dpamtOYWFtIjoiYWN0aXZlIn0=">
        <div class="search-header">
            <div class="search-header-top">
                <div class="search-header-top-inner">
                    <fieldset class="search-header-fieldset-location has-radius" data-search-header-selector="">
                        <legend class="a11y-sr-only">City, neighborhood, address, etc.</legend>
                        <div class="autocomplete" data-autocomplete="" data-autocomplete-context="search-searchresults" data-autocomplete-is-async="" data-search-results-handle="location" data-thousand-separator="," data-track-component-selector="input[name=searchType]:checked" data-track-component-value="area">
                            <input data-autocomplete-url="" data-partial-page-update-output="autocompleteUrl" type="hidden" value="https://zb.funda.info/suggest/?query={queryPlaceholder}&amp;max=7&amp;type=koop&amp;areatype=&amp;currentIdentifiers={identifierPlaceholder}&amp;timestamp="> <input data-autocomplete-alt-url="" data-partial-page-update-output="autocompleteAltUrl" type="hidden" value="https://zb.funda.info/suggest/alternatives/?query={queryPlaceholder}&amp;max=7&amp;type=koop&amp;areatype=&amp;currentIdentifiers={identifierPlaceholder}&amp;timestamp="> <input aria-autocomplete="list" aria-expanded="true" aria-owns="autocomplete-list" autocomplete="off" class="autocomplete-input fd-input" data-autocomplete-input="" data-autocomplete-minlength="2" data-autocomplete-niveau-id="" data-autocomplete-parent-id="" data-instant-search-output="zoekboxTextValue" id="autocomplete-input" name="filter_location" placeholder="City, neighborhood, address, etc." role="combobox" spellcheck="false" type="search" value="Nederland"> <button class="autocomplete-clear fd-m-right-none" data-autocomplete-clear="" type="button"><span class="icon-delete-small-greyDark" data-grunticon-embed=""></span> <span class="a11y-sr-only">Clear</span></button> <button class="autocomplete-plus is-hidden" data-autocomplete-plus="" id="plus-test" tabindex="-1" type="button"><span class="icon-plus-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Plus</span></button>
                            <div class="autocomplete-plus-button-hidden" data-autocomplete-hidden-div-plus-icon="">
                                Nederland
                            </div><input autocomplete="off" data-autocomplete-output="" data-instant-search-output="zoekboxHiddenValue" name="autocomplete-identifier" type="hidden" value="heel-nederland">
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
                        </div>
                        <div class="radius-filter custom-select" data-input-radius="">
                            <label class="a11y-sr-only" for="Straal">[Straal]</label> <select id="Straal" name="filter_Straal">
                                <option selected value="0">
                                    + 0 km
                                </option>
                                <option value="1">
                                    + 1 km
                                </option>
                                <option value="2">
                                    + 2 km
                                </option>
                                <option value="5">
                                    + 5 km
                                </option>
                                <option value="10">
                                    + 10 km
                                </option>
                                <option value="15">
                                    + 15 km
                                </option>
                                <option value="30">
                                    + 30 km
                                </option>
                                <option value="50">
                                    + 50 km
                                </option>
                                <option value="100">
                                    + 100 km
                                </option>
                            </select> <span class="icon-arrow-down-blue custom-select-icon" data-grunticon-embed=""></span>
                        </div>
                    </fieldset><button class="search-header-submit button-primary" type="submit"><span class="icon-search-white"></span> <span class="search-header-submit-label">Search</span></button>
                </div>
            </div>
        </div><input name="filter_ZoekType" type="hidden" value="koop">
        <div class="saved-search__notification--desktop fd-m-bottom-xl" data-save-search-notification="">
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
        </div>
        <div class="container search-main">
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
                </div><input name="filter_ZoekType" type="hidden" value="koop">
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
                </div>
                <div class="save-search-button fd-p-horizontal fd-p-top-xs fd-p-bottom fd-p-none--bp-l fd-p-top-xs--bp-l fd-p-bottom--bp-l" data-save-search-container="dialog">
                    <button class="fd-btn fd-btn--secondary fd-btn--block" data-is-user-logged-in="true" data-login-url="https://www.funda.nl/en/mijn/login/?ReturnUrl=%2Fen%2Fkoop%2Fheel-nederland%2F" data-save-search-dialog-endpoint="/en/mijn/savedsearch/" data-save-search-handle="dialog" data-save-search-url="/en/mijn/savedsearch/?currentUrl=%2fkoop%2fheel-nederland%2f" data-should-trigger-save-button-dialog="false" data-track-click="Save Search Clicked"><span class="fd-btn__icon"><span class="icon-alert-blue" data-grunticon-embed=""></span></span> Save search</button>
                    <div class="save-search-container" data-save-search="dialog"></div>
                </div>
                <div class="search-sidebar-filters">
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
                                        <input class="custom-radio" data-filter-visibility-invalid-filters="AanwezigheidVan-VoorzienVanElektra AanwezigheidVan-MetElektrischeDeur AanwezigheidVan-VoorzienVanWater AanwezigheidVan-VoorzienVanVerwarming AanwezigheidVan-MetVliering" data-instant-search-handle="" data-radio-group-input="" data-radio-group-option-name="House" id="SoortObject-Woonhuis" name="filter_SoortObject" type="radio" value="woonhuis"> <label class="radio-group-item-label label-text" for="SoortObject-Woonhuis"><span>House</span> <span class="radio-group-item-count fd-color-light-1" data-instant-search-count="SoortObject-Woonhuis">32,210</span> <span class="a11y-sr-only">Results</span></label>
                                    </div><label class="radio-group-item-remove radio-group-row" for="SoortObject-geen" title="House"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>House</span></label>
                                    <div class="radio-group-nested-flyout">
                                        <div class="filter-flyout" data-filter-flyout="" data-resettable="" data-unique="Kindofhouse-Oftype">
                                            <button class="filter-flyout-button-open button-tertiary" data-filter-open-flyout="" data-has-preview-filter="" type="button"><span class="icon-open-flyout fd-icon icon-plus-blue" data-grunticon-embed=""></span>Specify</button>
                                            <div class="filter-flyout-panel" data-filter-flyout-panel="">
                                                <span class="icon-close-flyout icon-close-blue" data-filter-close-flyout="" data-grunticon-embed=""><span class="a11y-kb-only">Close</span></span>
                                                <div class="filter-flyout-backdrop" data-filter-flyout-backdrop=""></div>
                                                <fieldset class="filter-flyout-fieldset">
                                                    <legend>Kind of house</legend> <input name="filter_WoningSoort" type="hidden" value="active">
                                                    <ul class="filter-flyout-options">
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Bungalow"><input class="custom-checkbox" data-filter-group-id="WoningSoort" data-filter-group-name="Kind of house" data-flyout-item="" data-instant-search-handle="" id="WoningSoort-Bungalow" name="filter_WoningSoort" type="checkbox" value="bungalow"> <label class="label-text filter-flyout-option-label" for="WoningSoort-Bungalow">Bungalow</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningSoort-Bungalow">857 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Single family property"><input class="custom-checkbox" data-filter-group-id="WoningSoort" data-filter-group-name="Kind of house" data-flyout-item="" data-instant-search-handle="" id="WoningSoort-Eengezinswoning" name="filter_WoningSoort" type="checkbox" value="eengezinswoning"> <label class="label-text filter-flyout-option-label" for="WoningSoort-Eengezinswoning">Single family property</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningSoort-Eengezinswoning">25,561 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Canalside property"><input class="custom-checkbox" data-filter-group-id="WoningSoort" data-filter-group-name="Kind of house" data-flyout-item="" data-instant-search-handle="" id="WoningSoort-Grachtenpand" name="filter_WoningSoort" type="checkbox" value="grachtenpand"> <label class="label-text filter-flyout-option-label" for="WoningSoort-Grachtenpand">Canalside property</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningSoort-Grachtenpand">95 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Town house"><input class="custom-checkbox" data-filter-group-id="WoningSoort" data-filter-group-name="Kind of house" data-flyout-item="" data-instant-search-handle="" id="WoningSoort-Herenhuis" name="filter_WoningSoort" type="checkbox" value="herenhuis"> <label class="label-text filter-flyout-option-label" for="WoningSoort-Herenhuis">Town house</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningSoort-Herenhuis">2,176 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Country estate"><input class="custom-checkbox" data-filter-group-id="WoningSoort" data-filter-group-name="Kind of house" data-flyout-item="" data-instant-search-handle="" id="WoningSoort-Landgoed" name="filter_WoningSoort" type="checkbox" value="landgoed"> <label class="label-text filter-flyout-option-label" for="WoningSoort-Landgoed">Country estate</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningSoort-Landgoed">52 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Country house"><input class="custom-checkbox" data-filter-group-id="WoningSoort" data-filter-group-name="Kind of house" data-flyout-item="" data-instant-search-handle="" id="WoningSoort-Landhuis" name="filter_WoningSoort" type="checkbox" value="landhuis"> <label class="label-text filter-flyout-option-label" for="WoningSoort-Landhuis">Country house</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningSoort-Landhuis">359 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Mobile home"><input class="custom-checkbox" data-filter-group-id="WoningSoort" data-filter-group-name="Kind of house" data-flyout-item="" data-instant-search-handle="" id="WoningSoort-Stacaravan" name="filter_WoningSoort" type="checkbox" value="stacaravan"> <label class="label-text filter-flyout-option-label" for="WoningSoort-Stacaravan">Mobile home</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningSoort-Stacaravan">1 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Villa"><input class="custom-checkbox" data-filter-group-id="WoningSoort" data-filter-group-name="Kind of house" data-flyout-item="" data-instant-search-handle="" id="WoningSoort-Villa" name="filter_WoningSoort" type="checkbox" value="villa"> <label class="label-text filter-flyout-option-label" for="WoningSoort-Villa">Villa</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningSoort-Villa">2,183 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Former farm"><input class="custom-checkbox" data-filter-group-id="WoningSoort" data-filter-group-name="Kind of house" data-flyout-item="" data-instant-search-handle="" id="WoningSoort-Woonboerderij" name="filter_WoningSoort" type="checkbox" value="woonboerderij"> <label class="label-text filter-flyout-option-label" for="WoningSoort-Woonboerderij">Former farm</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningSoort-Woonboerderij">844 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Houseboat"><input class="custom-checkbox" data-filter-group-id="WoningSoort" data-filter-group-name="Kind of house" data-flyout-item="" data-instant-search-handle="" id="WoningSoort-Woonboot" name="filter_WoningSoort" type="checkbox" value="woonboot"> <label class="label-text filter-flyout-option-label" for="WoningSoort-Woonboot">Houseboat</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningSoort-Woonboot">82 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option has-no-results" data-filter-flyout-option-label="Caravan"><input class="custom-checkbox" data-filter-group-id="WoningSoort" data-filter-group-name="Kind of house" data-flyout-item="" data-instant-search-handle="" id="WoningSoort-Woonwagen" name="filter_WoningSoort" type="checkbox" value="woonwagen"> <label class="label-text filter-flyout-option-label" for="WoningSoort-Woonwagen">Caravan</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningSoort-Woonwagen">0 <span class="a11y-sr-only">Results</span></span></li>
                                                    </ul>
                                                </fieldset>
                                                <fieldset class="filter-flyout-fieldset">
                                                    <legend>Of type</legend> <input name="filter_WoningType" type="hidden" value="active">
                                                    <ul class="filter-flyout-options">
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Double house"><input class="custom-checkbox" data-filter-group-id="WoningType" data-filter-group-name="Of type" data-flyout-item="" data-instant-search-handle="" id="WoningType-_2Onder1Kapwoning" name="filter_WoningType" type="checkbox" value="2-onder-1-kapwoning"> <label class="label-text filter-flyout-option-label" for="WoningType-_2Onder1Kapwoning">Double house</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningType-_2Onder1Kapwoning">5,266 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="End-of-terrace"><input class="custom-checkbox" data-filter-group-id="WoningType" data-filter-group-name="Of type" data-flyout-item="" data-instant-search-handle="" id="WoningType-Eindwoning" name="filter_WoningType" type="checkbox" value="eindwoning"> <label class="label-text filter-flyout-option-label" for="WoningType-Eindwoning">End-of-terrace</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningType-Eindwoning">684 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Link double house"><input class="custom-checkbox" data-filter-group-id="WoningType" data-filter-group-name="Of type" data-flyout-item="" data-instant-search-handle="" id="WoningType-Geschakelde2Onder1Kapwoning" name="filter_WoningType" type="checkbox" value="geschakelde 2-onder-1-kapwoning"> <label class="label-text filter-flyout-option-label" for="WoningType-Geschakelde2Onder1Kapwoning">Link double house</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningType-Geschakelde2Onder1Kapwoning">540 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Link detached house"><input class="custom-checkbox" data-filter-group-id="WoningType" data-filter-group-name="Of type" data-flyout-item="" data-instant-search-handle="" id="WoningType-GeschakeldeWoning" name="filter_WoningType" type="checkbox" value="geschakelde woning"> <label class="label-text filter-flyout-option-label" for="WoningType-GeschakeldeWoning">Link detached house</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningType-GeschakeldeWoning">1,289 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Semi-detached house"><input class="custom-checkbox" data-filter-group-id="WoningType" data-filter-group-name="Of type" data-flyout-item="" data-instant-search-handle="" id="WoningType-HalfvrijstaandeWoning" name="filter_WoningType" type="checkbox" value="halfvrijstaande woning"> <label class="label-text filter-flyout-option-label" for="WoningType-HalfvrijstaandeWoning">Semi-detached house</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningType-HalfvrijstaandeWoning">987 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Corner house"><input class="custom-checkbox" data-filter-group-id="WoningType" data-filter-group-name="Of type" data-flyout-item="" data-instant-search-handle="" id="WoningType-Hoekwoning" name="filter_WoningType" type="checkbox" value="hoekwoning"> <label class="label-text filter-flyout-option-label" for="WoningType-Hoekwoning">Corner house</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningType-Hoekwoning">3,984 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Terraced house"><input class="custom-checkbox" data-filter-group-id="WoningType" data-filter-group-name="Of type" data-flyout-item="" data-instant-search-handle="" id="WoningType-Tussenwoning" name="filter_WoningType" type="checkbox" value="tussenwoning"> <label class="label-text filter-flyout-option-label" for="WoningType-Tussenwoning">Terraced house</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningType-Tussenwoning">11,071 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option has-no-results" data-filter-flyout-option-label="Staggered house"><input class="custom-checkbox" data-filter-group-id="WoningType" data-filter-group-name="Of type" data-flyout-item="" data-instant-search-handle="" id="WoningType-VerspringendeWoning" name="filter_WoningType" type="checkbox" value="verspringende woning"> <label class="label-text filter-flyout-option-label" for="WoningType-VerspringendeWoning">Staggered house</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningType-VerspringendeWoning">0 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Detached house"><input class="custom-checkbox" data-filter-group-id="WoningType" data-filter-group-name="Of type" data-flyout-item="" data-instant-search-handle="" id="WoningType-VrijstaandeWoning" name="filter_WoningType" type="checkbox" value="vrijstaande woning"> <label class="label-text filter-flyout-option-label" for="WoningType-VrijstaandeWoning">Detached house</label> <span class="filter-flyout-option-count" data-instant-search-count="WoningType-VrijstaandeWoning">8,367 <span class="a11y-sr-only">Results</span></span></li>
                                                    </ul>
                                                </fieldset>
                                            </div>
                                            <ul class="filter-flyout-selected-options" data-flyout-selected-options=""></ul>
                                            <script data-filter-flyout-selected-option-template="" type="template/html">
                                            <li data-flyout-selected-option data-filter-id="<%- id %>" data-filter-group-id="<%- groupId %>">
                                            <label class="filter-flyout-selected-option button-tertiary" title="<%- label %>">
                                                <span class="icon-close-blue" data-grunticon-embed>
                                                    <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48"><symbol id="e" viewBox="0 -48 48 48" fill="#3888C5"><path fill="none" d="M0 0v-48h48V0z"></path></symbol><symbol id="f" viewBox="-0.0002 -48 48.0002 48.0002" fill="#3888C5"><defs fill="#3888C5"><path id="a" d="M48-48H0V0h48z" fill="#3888C5"></path></defs><clipPath id="b" fill="#3888C5"><use href="#a" overflow="visible" fill="#3888C5"></use><g clip-path="url(#b)" fill="#3888C5"><g fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"><path d="M2-48V0M4-48V0M6-48V0M8-48V0M10-48V0M12-48V0M14-48V0M16-48V0M18-48V0M20-48V0M22-48V0M24-48V0M26-48V0M28-48V0M30-48V0M32-48V0M34-48V0M36-48V0M38-48V0M40-48V0M42-48V0M44-48V0M46-48V0" fill="#3888C5"></path></g><g fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"><path d="M0-2h48M0-4h48M0-6h48M0-8h48M0-10h48M0-12h48M0-14h48M0-16h48M0-18h48M0-20h48M0-22h48M0-24h48M0-26h48M0-28h48M0-30h48M0-32h48M0-34h48M0-36h48M0-38h48M0-40h48M0-42h48M0-44h48M0-46h48" fill="#3888C5"></path></g><path d="M47.75-.25v-47.5H.25v47.5h47.5M48 0H0v-48h48V0z" fill="#3888C5"></path></g></clipPath></symbol><symbol id="g" viewBox="-0.0002 -48.0001 48.0002 48.0001" fill="#3888C5"><g opacity=".4" fill="#3888C5"><defs fill="#3888C5"><path id="c" opacity=".4" d="M0-48V0h48v-48z" fill="#3888C5"></path></defs><clipPath id="d" fill="#3888C5"><use href="#c" overflow="visible" fill="#3888C5"></use><path clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10" d="M24 0v-48M48-24H0M48-16H0M48-32H0M32-48V0M16-48V0M47.75-.25L.25-47.75M.25-.25l47.5-47.5M24-14c-5.522 0-10-4.477-10-10 0-5.522 4.478-10 10-10 5.523 0 10 4.478 10 10 0 5.523-4.477 10-10 10z"></path><path d="M24-4C12.946-4 4-12.947 4-24s8.946-20 20-20c11.053 0 20 8.947 20 20S35.052-4 24-4z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><path d="M40-42H8c-1.1 0-2 .9-2 2v32c0 1.1.9 2 2 2h32c1.1 0 2-.9 2-2v-32c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><path d="M38-44H10c-1.1 0-2 .9-2 2v36c0 1.1.9 2 2 2h28c1.1 0 2-.9 2-2v-36c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><g clip-path="url(#d)" fill="#3888C5"><path d="M47.75-.25v-47.5H.25v47.5h47.5M48 0H0v-48h48V0z" fill="#3888C5"></path></g><path d="M42-40H6c-1.1 0-2 .9-2 2v28c0 1.1.9 2 2 2h36c1.1 0 2-.9 2-2v-28c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path></clipPath></g></symbol><path d="M26.122 24l10.606-10.607a1.505 1.505 0 0 0 0-2.12 1.504 1.504 0 0 0-2.121 0L24 21.878 13.394 11.272c-.583-.583-1.538-.583-2.121 0s-.584 1.538 0 2.121L21.879 24 11.272 34.607c-.583.583-.583 1.538 0 2.12s1.539.584 2.122 0L24 26.122l10.607 10.607a1.504 1.504 0 0 0 2.121 0 1.505 1.505 0 0 0 0-2.121L26.122 24z" fill="#3888C5"></path></svg>
                                                </span> <%- label %>
                                            </label>
                                            </li>
                                            </script>
                                        </div>
                                    </div>
                                </li>
                                <li class="radio-group-item" data-radio-group-item="">
                                    <div class="radio-group-item-input radio-group-row">
                                        <input class="custom-radio" data-filter-visibility-invalid-filters="AanwezigheidVan-VoorzienVanElektra AanwezigheidVan-MetElektrischeDeur AanwezigheidVan-VoorzienVanWater AanwezigheidVan-VoorzienVanVerwarming AanwezigheidVan-MetVliering" data-instant-search-handle="" data-radio-group-input="" data-radio-group-option-name="Apartment" id="SoortObject-Appartement" name="filter_SoortObject" type="radio" value="appartement"> <label class="radio-group-item-label label-text" for="SoortObject-Appartement"><span>Apartment</span> <span class="radio-group-item-count fd-color-light-1" data-instant-search-count="SoortObject-Appartement">16,628</span> <span class="a11y-sr-only">Results</span></label>
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
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Duplex appartment (ground + first floor)"><input class="custom-checkbox" data-filter-group-id="SoortAppartementId" data-filter-group-name="Kind of apartment" data-flyout-item="" data-instant-search-handle="" id="SoortAppartementId-BenedenEnBovenwoning" name="filter_SoortAppartementId" type="checkbox" value="beneden en bovenwoning"> <label class="label-text filter-flyout-option-label" for="SoortAppartementId-BenedenEnBovenwoning">Duplex appartment (ground + first floor)</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortAppartementId-BenedenEnBovenwoning">204 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Ground floor apartment"><input class="custom-checkbox" data-filter-group-id="SoortAppartementId" data-filter-group-name="Kind of apartment" data-flyout-item="" data-instant-search-handle="" id="SoortAppartementId-Benedenwoning" name="filter_SoortAppartementId" type="checkbox" value="benedenwoning"> <label class="label-text filter-flyout-option-label" for="SoortAppartementId-Benedenwoning">Ground floor apartment</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortAppartementId-Benedenwoning">1,549 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Upper-floor apartment"><input class="custom-checkbox" data-filter-group-id="SoortAppartementId" data-filter-group-name="Kind of apartment" data-flyout-item="" data-instant-search-handle="" id="SoortAppartementId-Bovenwoning" name="filter_SoortAppartementId" type="checkbox" value="bovenwoning"> <label class="label-text filter-flyout-option-label" for="SoortAppartementId-Bovenwoning">Upper-floor apartment</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortAppartementId-Bovenwoning">3,252 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Double ground floor apartment"><input class="custom-checkbox" data-filter-group-id="SoortAppartementId" data-filter-group-name="Kind of apartment" data-flyout-item="" data-instant-search-handle="" id="SoortAppartementId-DubbelBenedenhuis" name="filter_SoortAppartementId" type="checkbox" value="dubbel benedenhuis"> <label class="label-text filter-flyout-option-label" for="SoortAppartementId-DubbelBenedenhuis">Double ground floor apartment</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortAppartementId-DubbelBenedenhuis">94 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Apartment with external access"><input class="custom-checkbox" data-filter-group-id="SoortAppartementId" data-filter-group-name="Kind of apartment" data-flyout-item="" data-instant-search-handle="" id="SoortAppartementId-Galerijflat" name="filter_SoortAppartementId" type="checkbox" value="galerijflat"> <label class="label-text filter-flyout-option-label" for="SoortAppartementId-Galerijflat">Apartment with external access</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortAppartementId-Galerijflat">2,463 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Maisonnette"><input class="custom-checkbox" data-filter-group-id="SoortAppartementId" data-filter-group-name="Kind of apartment" data-flyout-item="" data-instant-search-handle="" id="SoortAppartementId-Maisonnette" name="filter_SoortAppartementId" type="checkbox" value="maisonnette"> <label class="label-text filter-flyout-option-label" for="SoortAppartementId-Maisonnette">Maisonnette</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortAppartementId-Maisonnette">1,081 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Penthouse"><input class="custom-checkbox" data-filter-group-id="SoortAppartementId" data-filter-group-name="Kind of apartment" data-flyout-item="" data-instant-search-handle="" id="SoortAppartementId-Penthouse" name="filter_SoortAppartementId" type="checkbox" value="penthouse"> <label class="label-text filter-flyout-option-label" for="SoortAppartementId-Penthouse">Penthouse</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortAppartementId-Penthouse">818 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Flat with porch"><input class="custom-checkbox" data-filter-group-id="SoortAppartementId" data-filter-group-name="Kind of apartment" data-flyout-item="" data-instant-search-handle="" id="SoortAppartementId-Portiekflat" name="filter_SoortAppartementId" type="checkbox" value="portiekflat"> <label class="label-text filter-flyout-option-label" for="SoortAppartementId-Portiekflat">Flat with porch</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortAppartementId-Portiekflat">6,209 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="House with porch"><input class="custom-checkbox" data-filter-group-id="SoortAppartementId" data-filter-group-name="Kind of apartment" data-flyout-item="" data-instant-search-handle="" id="SoortAppartementId-Portiekwoning" name="filter_SoortAppartementId" type="checkbox" value="portiekwoning"> <label class="label-text filter-flyout-option-label" for="SoortAppartementId-Portiekwoning">House with porch</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortAppartementId-Portiekwoning">496 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option has-no-results" data-filter-flyout-option-label="Student room"><input class="custom-checkbox" data-filter-group-id="SoortAppartementId" data-filter-group-name="Kind of apartment" data-flyout-item="" data-instant-search-handle="" id="SoortAppartementId-Studentenkamer" name="filter_SoortAppartementId" type="checkbox" value="studentenkamer"> <label class="label-text filter-flyout-option-label" for="SoortAppartementId-Studentenkamer">Student room</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortAppartementId-Studentenkamer">0 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Mezzanine"><input class="custom-checkbox" data-filter-group-id="SoortAppartementId" data-filter-group-name="Kind of apartment" data-flyout-item="" data-instant-search-handle="" id="SoortAppartementId-Tussenverdieping" name="filter_SoortAppartementId" type="checkbox" value="tussenverdieping"> <label class="label-text filter-flyout-option-label" for="SoortAppartementId-Tussenverdieping">Mezzanine</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortAppartementId-Tussenverdieping">462 <span class="a11y-sr-only">Results</span></span></li>
                                                    </ul>
                                                </fieldset>
                                                <fieldset class="filter-flyout-fieldset">
                                                    <legend>Of type</legend> <input name="filter_AppartementType" type="hidden" value="active">
                                                    <ul class="filter-flyout-options">
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Piano nobile"><input class="custom-checkbox" data-filter-group-id="AppartementType" data-filter-group-name="Of type" data-flyout-item="" data-instant-search-handle="" id="AppartementType-BelEtage" name="filter_AppartementType" type="checkbox" value="bel-etage"> <label class="label-text filter-flyout-option-label" for="AppartementType-BelEtage">Piano nobile</label> <span class="filter-flyout-option-count" data-instant-search-count="AppartementType-BelEtage">33 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Corridor flat"><input class="custom-checkbox" data-filter-group-id="AppartementType" data-filter-group-name="Of type" data-flyout-item="" data-instant-search-handle="" id="AppartementType-Corridorflat" name="filter_AppartementType" type="checkbox" value="corridorflat"> <label class="label-text filter-flyout-option-label" for="AppartementType-Corridorflat">Corridor flat</label> <span class="filter-flyout-option-count" data-instant-search-count="AppartementType-Corridorflat">120 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Duplex apartment (upper floors)"><input class="custom-checkbox" data-filter-group-id="AppartementType" data-filter-group-name="Of type" data-flyout-item="" data-instant-search-handle="" id="AppartementType-DubbelBovenhuis" name="filter_AppartementType" type="checkbox" value="dubbel bovenhuis"> <label class="label-text filter-flyout-option-label" for="AppartementType-DubbelBovenhuis">Duplex apartment (upper floors)</label> <span class="filter-flyout-option-count" data-instant-search-count="AppartementType-DubbelBovenhuis">367 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Service flat"><input class="custom-checkbox" data-filter-group-id="AppartementType" data-filter-group-name="Of type" data-flyout-item="" data-instant-search-handle="" id="AppartementType-ServiceFlat" name="filter_AppartementType" type="checkbox" value="service flat"> <label class="label-text filter-flyout-option-label" for="AppartementType-ServiceFlat">Service flat</label> <span class="filter-flyout-option-count" data-instant-search-count="AppartementType-ServiceFlat">74 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Basement"><input class="custom-checkbox" data-filter-group-id="AppartementType" data-filter-group-name="Of type" data-flyout-item="" data-instant-search-handle="" id="AppartementType-Souterrain" name="filter_AppartementType" type="checkbox" value="souterrain"> <label class="label-text filter-flyout-option-label" for="AppartementType-Souterrain">Basement</label> <span class="filter-flyout-option-count" data-instant-search-count="AppartementType-Souterrain">11 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Sheltered apartment"><input class="custom-checkbox" data-filter-group-id="AppartementType" data-filter-group-name="Of type" data-flyout-item="" data-instant-search-handle="" id="AppartementType-Verzorgingsflat" name="filter_AppartementType" type="checkbox" value="verzorgingsflat"> <label class="label-text filter-flyout-option-label" for="AppartementType-Verzorgingsflat">Sheltered apartment</label> <span class="filter-flyout-option-count" data-instant-search-count="AppartementType-Verzorgingsflat">2 <span class="a11y-sr-only">Results</span></span></li>
                                                    </ul>
                                                </fieldset>
                                            </div>
                                            <ul class="filter-flyout-selected-options" data-flyout-selected-options=""></ul>
                                            <script data-filter-flyout-selected-option-template="" type="template/html">
                                            <li data-flyout-selected-option data-filter-id="<%- id %>" data-filter-group-id="<%- groupId %>">
                                            <label class="filter-flyout-selected-option button-tertiary" title="<%- label %>">
                                                <span class="icon-close-blue" data-grunticon-embed>
                                                    <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48"><symbol id="e" viewBox="0 -48 48 48" fill="#3888C5"><path fill="none" d="M0 0v-48h48V0z"></path></symbol><symbol id="f" viewBox="-0.0002 -48 48.0002 48.0002" fill="#3888C5"><defs fill="#3888C5"><path id="a" d="M48-48H0V0h48z" fill="#3888C5"></path></defs><clipPath id="b" fill="#3888C5"><use href="#a" overflow="visible" fill="#3888C5"></use><g clip-path="url(#b)" fill="#3888C5"><g fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"><path d="M2-48V0M4-48V0M6-48V0M8-48V0M10-48V0M12-48V0M14-48V0M16-48V0M18-48V0M20-48V0M22-48V0M24-48V0M26-48V0M28-48V0M30-48V0M32-48V0M34-48V0M36-48V0M38-48V0M40-48V0M42-48V0M44-48V0M46-48V0" fill="#3888C5"></path></g><g fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"><path d="M0-2h48M0-4h48M0-6h48M0-8h48M0-10h48M0-12h48M0-14h48M0-16h48M0-18h48M0-20h48M0-22h48M0-24h48M0-26h48M0-28h48M0-30h48M0-32h48M0-34h48M0-36h48M0-38h48M0-40h48M0-42h48M0-44h48M0-46h48" fill="#3888C5"></path></g><path d="M47.75-.25v-47.5H.25v47.5h47.5M48 0H0v-48h48V0z" fill="#3888C5"></path></g></clipPath></symbol><symbol id="g" viewBox="-0.0002 -48.0001 48.0002 48.0001" fill="#3888C5"><g opacity=".4" fill="#3888C5"><defs fill="#3888C5"><path id="c" opacity=".4" d="M0-48V0h48v-48z" fill="#3888C5"></path></defs><clipPath id="d" fill="#3888C5"><use href="#c" overflow="visible" fill="#3888C5"></use><path clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10" d="M24 0v-48M48-24H0M48-16H0M48-32H0M32-48V0M16-48V0M47.75-.25L.25-47.75M.25-.25l47.5-47.5M24-14c-5.522 0-10-4.477-10-10 0-5.522 4.478-10 10-10 5.523 0 10 4.478 10 10 0 5.523-4.477 10-10 10z"></path><path d="M24-4C12.946-4 4-12.947 4-24s8.946-20 20-20c11.053 0 20 8.947 20 20S35.052-4 24-4z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><path d="M40-42H8c-1.1 0-2 .9-2 2v32c0 1.1.9 2 2 2h32c1.1 0 2-.9 2-2v-32c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><path d="M38-44H10c-1.1 0-2 .9-2 2v36c0 1.1.9 2 2 2h28c1.1 0 2-.9 2-2v-36c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><g clip-path="url(#d)" fill="#3888C5"><path d="M47.75-.25v-47.5H.25v47.5h47.5M48 0H0v-48h48V0z" fill="#3888C5"></path></g><path d="M42-40H6c-1.1 0-2 .9-2 2v28c0 1.1.9 2 2 2h36c1.1 0 2-.9 2-2v-28c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path></clipPath></g></symbol><path d="M26.122 24l10.606-10.607a1.505 1.505 0 0 0 0-2.12 1.504 1.504 0 0 0-2.121 0L24 21.878 13.394 11.272c-.583-.583-1.538-.583-2.121 0s-.584 1.538 0 2.121L21.879 24 11.272 34.607c-.583.583-.583 1.538 0 2.12s1.539.584 2.122 0L24 26.122l10.607 10.607a1.504 1.504 0 0 0 2.121 0 1.505 1.505 0 0 0 0-2.121L26.122 24z" fill="#3888C5"></path></svg>
                                                </span> <%- label %>
                                            </label>
                                            </li>
                                            </script>
                                        </div>
                                    </div>
                                </li>
                                <li class="radio-group-item is-expandible-item" data-radio-group-item="">
                                    <div class="radio-group-item-input radio-group-row">
                                        <input class="custom-radio" data-filter-visibility-invalid-filters="AantalKamers AantalSlaapkamers WoonOppervlakte Ligging BouwPeriodeId Buitenruimte Toegankelijkheid GarageGroup SoortGarage AanwezigheidVan-CvKetel AanwezigheidVan-DuurzameEnergie AanwezigheidVan-Jacuzzi AanwezigheidVan-Kluswoning AanwezigheidVan-Lift AanwezigheidVan-LigZitbad AanwezigheidVan-MonumentaalPand AanwezigheidVan-OpenHaard AanwezigheidVan-Sauna AanwezigheidVan-SchuurBerging AanwezigheidVan-Stoomcabine AanwezigheidVan-Zwembad" data-instant-search-handle="" data-radio-group-input="" data-radio-group-option-name="Parking" id="SoortObject-Parkeergelegenheid" name="filter_SoortObject" type="radio" value="parkeergelegenheid"> <label class="radio-group-item-label label-text" for="SoortObject-Parkeergelegenheid"><span>Parking</span> <span class="radio-group-item-count fd-color-light-1" data-instant-search-count="SoortObject-Parkeergelegenheid">306</span> <span class="a11y-sr-only">Results</span></label>
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
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Garage"><input class="custom-checkbox" data-filter-group-id="SoortParkeergelegenheidId" data-filter-group-name="Type of parking facilities" data-flyout-item="" data-instant-search-handle="" id="SoortParkeergelegenheidId-ParkeergelegenheidGarage" name="filter_SoortParkeergelegenheidId" type="checkbox" value="garage"> <label class="label-text filter-flyout-option-label" for="SoortParkeergelegenheidId-ParkeergelegenheidGarage">Garage</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortParkeergelegenheidId-ParkeergelegenheidGarage">123 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Integrated garage"><input class="custom-checkbox" data-filter-group-id="SoortParkeergelegenheidId" data-filter-group-name="Type of parking facilities" data-flyout-item="" data-instant-search-handle="" id="SoortParkeergelegenheidId-ParkeergelegenheidInpandigeGarage" name="filter_SoortParkeergelegenheidId" type="checkbox" value="inpandige garage"> <label class="label-text filter-flyout-option-label" for="SoortParkeergelegenheidId-ParkeergelegenheidInpandigeGarage">Integrated garage</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortParkeergelegenheidId-ParkeergelegenheidInpandigeGarage">9 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Underground car park"><input class="custom-checkbox" data-filter-group-id="SoortParkeergelegenheidId" data-filter-group-name="Type of parking facilities" data-flyout-item="" data-instant-search-handle="" id="SoortParkeergelegenheidId-ParkeergelegenheidParkeerkelder" name="filter_SoortParkeergelegenheidId" type="checkbox" value="parkeerkelder"> <label class="label-text filter-flyout-option-label" for="SoortParkeergelegenheidId-ParkeergelegenheidParkeerkelder">Underground car park</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortParkeergelegenheidId-ParkeergelegenheidParkeerkelder">38 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Parking space"><input class="custom-checkbox" data-filter-group-id="SoortParkeergelegenheidId" data-filter-group-name="Type of parking facilities" data-flyout-item="" data-instant-search-handle="" id="SoortParkeergelegenheidId-ParkeergelegenheidParkeerplaats" name="filter_SoortParkeergelegenheidId" type="checkbox" value="parkeerplaats"> <label class="label-text filter-flyout-option-label" for="SoortParkeergelegenheidId-ParkeergelegenheidParkeerplaats">Parking space</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortParkeergelegenheidId-ParkeergelegenheidParkeerplaats">136 <span class="a11y-sr-only">Results</span></span></li>
                                                    </ul>
                                                </fieldset>
                                                <fieldset class="filter-flyout-fieldset">
                                                    <legend>Capacity</legend>
                                                    <ul class="filter-flyout-options">
                                                        <li class="filter-flyout-option-default filter-flyout-option"><input checked class="custom-radio" data-instant-search-handle="" id="AutoCapaciteitParkeergelegenheid-geen" name="filter_AutoCapaciteitParkeergelegenheid" type="radio" value=""> <label class="label-text" for="AutoCapaciteitParkeergelegenheid-geen">Remove filter</label></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="1 car"><input class="custom-radio" data-filter-group-id="AutoCapaciteitParkeergelegenheid" data-filter-group-name="Capacity" data-flyout-item="" data-instant-search-handle="" id="AutoCapaciteitParkeergelegenheid-1" name="filter_AutoCapaciteitParkeergelegenheid" type="radio" value="1,1"> <label class="label-text filter-flyout-option-label" for="AutoCapaciteitParkeergelegenheid-1">1 car</label> <span class="filter-flyout-option-count" data-instant-search-count="AutoCapaciteitParkeergelegenheid-1">213 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="2+ cars"><input class="custom-radio" data-filter-group-id="AutoCapaciteitParkeergelegenheid" data-filter-group-name="Capacity" data-flyout-item="" data-instant-search-handle="" id="AutoCapaciteitParkeergelegenheid-2" name="filter_AutoCapaciteitParkeergelegenheid" type="radio" value="2"> <label class="label-text filter-flyout-option-label" for="AutoCapaciteitParkeergelegenheid-2">2+ cars</label> <span class="filter-flyout-option-count" data-instant-search-count="AutoCapaciteitParkeergelegenheid-2">19 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="3+ cars"><input class="custom-radio" data-filter-group-id="AutoCapaciteitParkeergelegenheid" data-filter-group-name="Capacity" data-flyout-item="" data-instant-search-handle="" id="AutoCapaciteitParkeergelegenheid-3" name="filter_AutoCapaciteitParkeergelegenheid" type="radio" value="3"> <label class="label-text filter-flyout-option-label" for="AutoCapaciteitParkeergelegenheid-3">3+ cars</label> <span class="filter-flyout-option-count" data-instant-search-count="AutoCapaciteitParkeergelegenheid-3">11 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="4+ cars"><input class="custom-radio" data-filter-group-id="AutoCapaciteitParkeergelegenheid" data-filter-group-name="Capacity" data-flyout-item="" data-instant-search-handle="" id="AutoCapaciteitParkeergelegenheid-4" name="filter_AutoCapaciteitParkeergelegenheid" type="radio" value="4"> <label class="label-text filter-flyout-option-label" for="AutoCapaciteitParkeergelegenheid-4">4+ cars</label> <span class="filter-flyout-option-count" data-instant-search-count="AutoCapaciteitParkeergelegenheid-4">11 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="5+ cars"><input class="custom-radio" data-filter-group-id="AutoCapaciteitParkeergelegenheid" data-filter-group-name="Capacity" data-flyout-item="" data-instant-search-handle="" id="AutoCapaciteitParkeergelegenheid-5" name="filter_AutoCapaciteitParkeergelegenheid" type="radio" value="5"> <label class="label-text filter-flyout-option-label" for="AutoCapaciteitParkeergelegenheid-5">5+ cars</label> <span class="filter-flyout-option-count" data-instant-search-count="AutoCapaciteitParkeergelegenheid-5">9 <span class="a11y-sr-only">Results</span></span></li>
                                                    </ul>
                                                </fieldset>
                                            </div>
                                            <ul class="filter-flyout-selected-options" data-flyout-selected-options=""></ul>
                                            <script data-filter-flyout-selected-option-template="" type="template/html">
                                            <li data-flyout-selected-option data-filter-id="<%- id %>" data-filter-group-id="<%- groupId %>">
                                            <label class="filter-flyout-selected-option button-tertiary" title="<%- label %>">
                                                <span class="icon-close-blue" data-grunticon-embed>
                                                    <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48"><symbol id="e" viewBox="0 -48 48 48" fill="#3888C5"><path fill="none" d="M0 0v-48h48V0z"></path></symbol><symbol id="f" viewBox="-0.0002 -48 48.0002 48.0002" fill="#3888C5"><defs fill="#3888C5"><path id="a" d="M48-48H0V0h48z" fill="#3888C5"></path></defs><clipPath id="b" fill="#3888C5"><use href="#a" overflow="visible" fill="#3888C5"></use><g clip-path="url(#b)" fill="#3888C5"><g fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"><path d="M2-48V0M4-48V0M6-48V0M8-48V0M10-48V0M12-48V0M14-48V0M16-48V0M18-48V0M20-48V0M22-48V0M24-48V0M26-48V0M28-48V0M30-48V0M32-48V0M34-48V0M36-48V0M38-48V0M40-48V0M42-48V0M44-48V0M46-48V0" fill="#3888C5"></path></g><g fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"><path d="M0-2h48M0-4h48M0-6h48M0-8h48M0-10h48M0-12h48M0-14h48M0-16h48M0-18h48M0-20h48M0-22h48M0-24h48M0-26h48M0-28h48M0-30h48M0-32h48M0-34h48M0-36h48M0-38h48M0-40h48M0-42h48M0-44h48M0-46h48" fill="#3888C5"></path></g><path d="M47.75-.25v-47.5H.25v47.5h47.5M48 0H0v-48h48V0z" fill="#3888C5"></path></g></clipPath></symbol><symbol id="g" viewBox="-0.0002 -48.0001 48.0002 48.0001" fill="#3888C5"><g opacity=".4" fill="#3888C5"><defs fill="#3888C5"><path id="c" opacity=".4" d="M0-48V0h48v-48z" fill="#3888C5"></path></defs><clipPath id="d" fill="#3888C5"><use href="#c" overflow="visible" fill="#3888C5"></use><path clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10" d="M24 0v-48M48-24H0M48-16H0M48-32H0M32-48V0M16-48V0M47.75-.25L.25-47.75M.25-.25l47.5-47.5M24-14c-5.522 0-10-4.477-10-10 0-5.522 4.478-10 10-10 5.523 0 10 4.478 10 10 0 5.523-4.477 10-10 10z"></path><path d="M24-4C12.946-4 4-12.947 4-24s8.946-20 20-20c11.053 0 20 8.947 20 20S35.052-4 24-4z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><path d="M40-42H8c-1.1 0-2 .9-2 2v32c0 1.1.9 2 2 2h32c1.1 0 2-.9 2-2v-32c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><path d="M38-44H10c-1.1 0-2 .9-2 2v36c0 1.1.9 2 2 2h28c1.1 0 2-.9 2-2v-36c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><g clip-path="url(#d)" fill="#3888C5"><path d="M47.75-.25v-47.5H.25v47.5h47.5M48 0H0v-48h48V0z" fill="#3888C5"></path></g><path d="M42-40H6c-1.1 0-2 .9-2 2v28c0 1.1.9 2 2 2h36c1.1 0 2-.9 2-2v-28c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path></clipPath></g></symbol><path d="M26.122 24l10.606-10.607a1.505 1.505 0 0 0 0-2.12 1.504 1.504 0 0 0-2.121 0L24 21.878 13.394 11.272c-.583-.583-1.538-.583-2.121 0s-.584 1.538 0 2.121L21.879 24 11.272 34.607c-.583.583-.583 1.538 0 2.12s1.539.584 2.122 0L24 26.122l10.607 10.607a1.504 1.504 0 0 0 2.121 0 1.505 1.505 0 0 0 0-2.121L26.122 24z" fill="#3888C5"></path></svg>
                                                </span> <%- label %>
                                            </label>
                                            </li>
                                            </script>
                                        </div>
                                    </div>
                                </li>
                                <li class="radio-group-item is-expandible-item" data-radio-group-item="">
                                    <div class="radio-group-item-input radio-group-row">
                                        <input class="custom-radio" data-filter-visibility-invalid-filters="AantalKamers AantalSlaapkamers WoonOppervlakte Energielabel BouwPeriodeId Buitenruimte Toegankelijkheid OpenHuizen GarageGroup AanwezigheidVan" data-instant-search-handle="" data-radio-group-input="" data-radio-group-option-name="Land" id="SoortObject-Bouwgrond" name="filter_SoortObject" type="radio" value="bouwgrond"> <label class="radio-group-item-label label-text" for="SoortObject-Bouwgrond"><span>Land</span> <span class="radio-group-item-count fd-color-light-1" data-instant-search-count="SoortObject-Bouwgrond">1,454</span> <span class="a11y-sr-only">Results</span></label>
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
                                                        <li class="filter-flyout-option has-no-results" data-filter-flyout-option-label="Ready for construction"><input class="custom-radio" data-filter-group-id="IndBouwrijp" data-filter-group-name="Building plot" data-flyout-item="" data-instant-search-handle="" id="IndBouwrijp-Bouwrijp" name="filter_IndBouwrijp" type="radio" value="True"> <label class="label-text filter-flyout-option-label" for="IndBouwrijp-Bouwrijp">Ready for construction</label> <span class="filter-flyout-option-count" data-instant-search-count="IndBouwrijp-Bouwrijp">0 <span class="a11y-sr-only">Results</span></span></li>
                                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Not ready for construction"><input class="custom-radio" data-filter-group-id="IndBouwrijp" data-filter-group-name="Building plot" data-flyout-item="" data-instant-search-handle="" id="IndBouwrijp-NietBouwrijp" name="filter_IndBouwrijp" type="radio" value="False"> <label class="label-text filter-flyout-option-label" for="IndBouwrijp-NietBouwrijp">Not ready for construction</label> <span class="filter-flyout-option-count" data-instant-search-count="IndBouwrijp-NietBouwrijp">50,675 <span class="a11y-sr-only">Results</span></span></li>
                                                    </ul>
                                                </fieldset>
                                            </div>
                                            <ul class="filter-flyout-selected-options" data-flyout-selected-options=""></ul>
                                            <script data-filter-flyout-selected-option-template="" type="template/html">
                                            <li data-flyout-selected-option data-filter-id="<%- id %>" data-filter-group-id="<%- groupId %>">
                                            <label class="filter-flyout-selected-option button-tertiary" title="<%- label %>">
                                                <span class="icon-close-blue" data-grunticon-embed>
                                                    <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48"><symbol id="e" viewBox="0 -48 48 48" fill="#3888C5"><path fill="none" d="M0 0v-48h48V0z"></path></symbol><symbol id="f" viewBox="-0.0002 -48 48.0002 48.0002" fill="#3888C5"><defs fill="#3888C5"><path id="a" d="M48-48H0V0h48z" fill="#3888C5"></path></defs><clipPath id="b" fill="#3888C5"><use href="#a" overflow="visible" fill="#3888C5"></use><g clip-path="url(#b)" fill="#3888C5"><g fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"><path d="M2-48V0M4-48V0M6-48V0M8-48V0M10-48V0M12-48V0M14-48V0M16-48V0M18-48V0M20-48V0M22-48V0M24-48V0M26-48V0M28-48V0M30-48V0M32-48V0M34-48V0M36-48V0M38-48V0M40-48V0M42-48V0M44-48V0M46-48V0" fill="#3888C5"></path></g><g fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"><path d="M0-2h48M0-4h48M0-6h48M0-8h48M0-10h48M0-12h48M0-14h48M0-16h48M0-18h48M0-20h48M0-22h48M0-24h48M0-26h48M0-28h48M0-30h48M0-32h48M0-34h48M0-36h48M0-38h48M0-40h48M0-42h48M0-44h48M0-46h48" fill="#3888C5"></path></g><path d="M47.75-.25v-47.5H.25v47.5h47.5M48 0H0v-48h48V0z" fill="#3888C5"></path></g></clipPath></symbol><symbol id="g" viewBox="-0.0002 -48.0001 48.0002 48.0001" fill="#3888C5"><g opacity=".4" fill="#3888C5"><defs fill="#3888C5"><path id="c" opacity=".4" d="M0-48V0h48v-48z" fill="#3888C5"></path></defs><clipPath id="d" fill="#3888C5"><use href="#c" overflow="visible" fill="#3888C5"></use><path clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10" d="M24 0v-48M48-24H0M48-16H0M48-32H0M32-48V0M16-48V0M47.75-.25L.25-47.75M.25-.25l47.5-47.5M24-14c-5.522 0-10-4.477-10-10 0-5.522 4.478-10 10-10 5.523 0 10 4.478 10 10 0 5.523-4.477 10-10 10z"></path><path d="M24-4C12.946-4 4-12.947 4-24s8.946-20 20-20c11.053 0 20 8.947 20 20S35.052-4 24-4z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><path d="M40-42H8c-1.1 0-2 .9-2 2v32c0 1.1.9 2 2 2h32c1.1 0 2-.9 2-2v-32c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><path d="M38-44H10c-1.1 0-2 .9-2 2v36c0 1.1.9 2 2 2h28c1.1 0 2-.9 2-2v-36c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><g clip-path="url(#d)" fill="#3888C5"><path d="M47.75-.25v-47.5H.25v47.5h47.5M48 0H0v-48h48V0z" fill="#3888C5"></path></g><path d="M42-40H6c-1.1 0-2 .9-2 2v28c0 1.1.9 2 2 2h36c1.1 0 2-.9 2-2v-28c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path></clipPath></g></symbol><path d="M26.122 24l10.606-10.607a1.505 1.505 0 0 0 0-2.12 1.504 1.504 0 0 0-2.121 0L24 21.878 13.394 11.272c-.583-.583-1.538-.583-2.121 0s-.584 1.538 0 2.121L21.879 24 11.272 34.607c-.583.583-.583 1.538 0 2.12s1.539.584 2.122 0L24 26.122l10.607 10.607a1.504 1.504 0 0 0 2.121 0 1.505 1.505 0 0 0 0-2.121L26.122 24z" fill="#3888C5"></path></svg>
                                                </span> <%- label %>
                                            </label>
                                            </li>
                                            </script>
                                        </div>
                                    </div>
                                </li>
                                <li class="radio-group-item is-expandible-item" data-radio-group-item="">
                                    <div class="radio-group-item-input radio-group-row">
                                        <input class="custom-radio" data-filter-visibility-invalid-filters="AantalKamers AantalSlaapkamers WoonOppervlakte Ligging BouwPeriodeId Buitenruimte Toegankelijkheid OpenHuizen GarageGroup ExtrasGroup AanwezigheidVan-CvKetel AanwezigheidVan-DuurzameEnergie AanwezigheidVan-Jacuzzi AanwezigheidVan-Kluswoning AanwezigheidVan-Lift AanwezigheidVan-LigZitbad AanwezigheidVan-MonumentaalPand AanwezigheidVan-OpenHaard AanwezigheidVan-Sauna AanwezigheidVan-SchuurBerging AanwezigheidVan-Stoomcabine AanwezigheidVan-Zwembad" data-instant-search-handle="" data-radio-group-input="" data-radio-group-option-name="Storage space" id="SoortObject-SoortOverig:Opslagruimte" name="filter_SoortObject" type="radio" value="SoortOverig:opslagruimte"> <label class="radio-group-item-label label-text" for="SoortObject-SoortOverig:Opslagruimte"><span>Storage space</span> <span class="radio-group-item-count fd-color-light-1" data-instant-search-count="SoortObject-SoortOverig:Opslagruimte">37</span> <span class="a11y-sr-only">Results</span></label>
                                    </div><label class="radio-group-item-remove radio-group-row" for="SoortObject-geen" title="Storage space"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>Storage space</span></label>
                                </li>
                                <li class="radio-group-item is-expandible-item" data-radio-group-item="">
                                    <div class="radio-group-item-input radio-group-row">
                                        <input class="custom-radio" data-filter-visibility-invalid-filters="AantalKamers AantalSlaapkamers WoonOppervlakte Ligging BouwPeriodeId Buitenruimte Toegankelijkheid OpenHuizen GarageGroup ExtrasGroup AanwezigheidVan-CvKetel AanwezigheidVan-DuurzameEnergie AanwezigheidVan-Jacuzzi AanwezigheidVan-Kluswoning AanwezigheidVan-Lift AanwezigheidVan-LigZitbad AanwezigheidVan-MonumentaalPand AanwezigheidVan-OpenHaard AanwezigheidVan-Sauna AanwezigheidVan-SchuurBerging AanwezigheidVan-Stoomcabine AanwezigheidVan-Zwembad" data-instant-search-handle="" data-radio-group-input="" data-radio-group-option-name="Storage" id="SoortObject-SoortOverig:Berging" name="filter_SoortObject" type="radio" value="SoortOverig:berging"> <label class="radio-group-item-label label-text" for="SoortObject-SoortOverig:Berging"><span>Storage</span> <span class="radio-group-item-count fd-color-light-1" data-instant-search-count="SoortObject-SoortOverig:Berging">8</span> <span class="a11y-sr-only">Results</span></label>
                                    </div><label class="radio-group-item-remove radio-group-row" for="SoortObject-geen" title="Storage"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>Storage</span></label>
                                </li>
                                <li class="radio-group-item is-expandible-item" data-radio-group-item="">
                                    <div class="radio-group-item-input radio-group-row">
                                        <input class="custom-radio" data-filter-visibility-invalid-filters="AantalKamers AantalSlaapkamers WoonOppervlakte Ligging BouwPeriodeId Buitenruimte Toegankelijkheid OpenHuizen GarageGroup ExtrasGroup AanwezigheidVan" data-instant-search-handle="" data-radio-group-input="" data-radio-group-option-name="Berth" id="SoortObject-SoortOverig:Ligplaats" name="filter_SoortObject" type="radio" value="SoortOverig:ligplaats"> <label class="radio-group-item-label label-text" for="SoortObject-SoortOverig:Ligplaats"><span>Berth</span> <span class="radio-group-item-count fd-color-light-1" data-instant-search-count="SoortObject-SoortOverig:Ligplaats">19</span> <span class="a11y-sr-only">Results</span></label>
                                    </div><label class="radio-group-item-remove radio-group-row" for="SoortObject-geen" title="Berth"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>Berth</span></label>
                                </li>
                                <li class="radio-group-item is-expandible-item" data-radio-group-item="">
                                    <div class="radio-group-item-input radio-group-row">
                                        <input class="custom-radio" data-filter-visibility-invalid-filters="AantalKamers AantalSlaapkamers WoonOppervlakte Ligging BouwPeriodeId Buitenruimte Toegankelijkheid OpenHuizen GarageGroup ExtrasGroup AanwezigheidVan-CvKetel AanwezigheidVan-DuurzameEnergie AanwezigheidVan-Jacuzzi AanwezigheidVan-Kluswoning AanwezigheidVan-Lift AanwezigheidVan-LigZitbad AanwezigheidVan-MonumentaalPand AanwezigheidVan-OpenHaard AanwezigheidVan-Sauna AanwezigheidVan-SchuurBerging AanwezigheidVan-Stoomcabine AanwezigheidVan-Zwembad" data-instant-search-handle="" data-radio-group-input="" data-radio-group-option-name="Substructure" id="SoortObject-SoortOverig:Onderstuk" name="filter_SoortObject" type="radio" value="SoortOverig:onderstuk"> <label class="radio-group-item-label label-text" for="SoortObject-SoortOverig:Onderstuk"><span>Substructure</span> <span class="radio-group-item-count fd-color-light-1" data-instant-search-count="SoortObject-SoortOverig:Onderstuk">13</span> <span class="a11y-sr-only">Results</span></label>
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
                                        <input class="custom-radio" data-instant-search-handle="" data-radio-group-input="" data-radio-group-option-name="Today" id="PublicatieDatum-1" name="filter_PublicatieDatum" type="radio" value="1"> <label class="radio-group-item-label label-text" for="PublicatieDatum-1"><span>Today</span> <span class="radio-group-item-count fd-color-light-1" data-instant-search-count="PublicatieDatum-1">451</span> <span class="a11y-sr-only">Results</span></label>
                                    </div><label class="radio-group-item-remove radio-group-row" for="PublicatieDatum-geen" title="Today"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>Today</span></label>
                                </li>
                                <li class="radio-group-item" data-radio-group-item="">
                                    <div class="radio-group-item-input radio-group-row">
                                        <input class="custom-radio" data-instant-search-handle="" data-radio-group-input="" data-radio-group-option-name="Since 3 days" id="PublicatieDatum-3" name="filter_PublicatieDatum" type="radio" value="3"> <label class="radio-group-item-label label-text" for="PublicatieDatum-3"><span>Since 3 days</span> <span class="radio-group-item-count fd-color-light-1" data-instant-search-count="PublicatieDatum-3">2,509</span> <span class="a11y-sr-only">Results</span></label>
                                    </div><label class="radio-group-item-remove radio-group-row" for="PublicatieDatum-geen" title="Since 3 days"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>Since 3 days</span></label>
                                </li>
                                <li class="radio-group-item" data-radio-group-item="">
                                    <div class="radio-group-item-input radio-group-row">
                                        <input class="custom-radio" data-instant-search-handle="" data-radio-group-input="" data-radio-group-option-name="Since 5 days" id="PublicatieDatum-5" name="filter_PublicatieDatum" type="radio" value="5"> <label class="radio-group-item-label label-text" for="PublicatieDatum-5"><span>Since 5 days</span> <span class="radio-group-item-count fd-color-light-1" data-instant-search-count="PublicatieDatum-5">4,030</span> <span class="a11y-sr-only">Results</span></label>
                                    </div><label class="radio-group-item-remove radio-group-row" for="PublicatieDatum-geen" title="Since 5 days"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>Since 5 days</span></label>
                                </li>
                                <li class="radio-group-item" data-radio-group-item="">
                                    <div class="radio-group-item-input radio-group-row">
                                        <input class="custom-radio" data-instant-search-handle="" data-radio-group-input="" data-radio-group-option-name="Since 10 days" id="PublicatieDatum-10" name="filter_PublicatieDatum" type="radio" value="10"> <label class="radio-group-item-label label-text" for="PublicatieDatum-10"><span>Since 10 days</span> <span class="radio-group-item-count fd-color-light-1" data-instant-search-count="PublicatieDatum-10">6,968</span> <span class="a11y-sr-only">Results</span></label>
                                    </div><label class="radio-group-item-remove radio-group-row" for="PublicatieDatum-geen" title="Since 10 days"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>Since 10 days</span></label>
                                </li>
                                <li class="radio-group-item" data-radio-group-item="">
                                    <div class="radio-group-item-input radio-group-row">
                                        <input class="custom-radio" data-instant-search-handle="" data-radio-group-input="" data-radio-group-option-name="Since 30 days" id="PublicatieDatum-30" name="filter_PublicatieDatum" type="radio" value="30"> <label class="radio-group-item-label label-text" for="PublicatieDatum-30"><span>Since 30 days</span> <span class="radio-group-item-count fd-color-light-1" data-instant-search-count="PublicatieDatum-30">19,216</span> <span class="a11y-sr-only">Results</span></label>
                                    </div><label class="radio-group-item-remove radio-group-row" for="PublicatieDatum-geen" title="Since 30 days"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>Since 30 days</span></label>
                                </li>
                            </ul>
                        </fieldset>
                    </div>
                    <aside class="fd-container-full" data-vue-container="">
                        <div class="status-filter fd-m-bottom" data-filter-visibility="" data-filter-visibility-invalid-filters="">
                            <div class="search-filters-radio-button-filter-wrapper">
                                <fieldset class="app-search-sidebar-filter">
                                    <legend class="mobile-sidebar-info fd-container-full is-hidden"></legend>
                                    <div class="info-message">
                                        <legend class="mobile-sidebar-info fd-container-full is-hidden"><i>Under negotiation</i> contains under offer, under option and sold under reservation.</legend>
                                    </div><legend class="filter-header fd-m-bottom-xs fd-p-right fd-p-left fd-container-full"></legend>
                                    <div class="fd-display-inline-block">
                                        <legend class="filter-header fd-m-bottom-xs fd-p-right fd-p-left fd-container-full">Status</legend>
                                    </div><legend class="filter-header fd-m-bottom-xs fd-p-right fd-p-left fd-container-full"></legend>
                                    <div class="search-filters-tooltip app-tooltip filter-status-info fd-display-inline-block">
                                        <legend class="filter-header fd-m-bottom-xs fd-p-right fd-p-left fd-container-full"></legend>
                                        <div class="icon-info-blue" title="+ Info">
                                            <legend class="filter-header fd-m-bottom-xs fd-p-right fd-p-left fd-container-full"><!----></legend>
                                        </div>
                                    </div>
                                    <div class="search-filters-radio-button-list">
                                        <ul class="fd-m-none fd-p-none">
                                            <li class="fd-m-bottom-xs radio-group-item-input radio-group-row"><input class="custom-radio" id="ObjectBeschikbaarheid-Beschikbaar" type="radio" value="beschikbaar"> <label class="label-text" for="ObjectBeschikbaarheid-Beschikbaar"><span>Available</span></label> <span class="count">22,574</span></li>
                                            <li class="fd-m-bottom-xs radio-group-item-input radio-group-row"><input class="custom-radio" id="ObjectBeschikbaarheid-Onderhandeling" type="radio" value="onderhandeling"> <label class="label-text" for="ObjectBeschikbaarheid-Onderhandeling"><span>Under negotiation</span></label> <span class="count">28,101</span></li>
                                            <li class="fd-m-bottom-xs radio-group-item-input radio-group-row"><input class="custom-radio" data-filter-visibility-invalid-filters="PublicatieDatum ExtrasGroup" id="ObjectBeschikbaarheid-verkocht" type="radio" value="onbeschikbaar"> <label class="label-text" for="ObjectBeschikbaarheid-verkocht"><span>Sold</span></label> <span class="count">212,213</span></li>
                                        </ul>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </aside>
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
                                        <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-groupname-to-filter="" data-radio-group-input="" data-radio-group-option-name="50 m² or more" id="WoonOppervlakte-50" name="filter_WoonOppervlakte" type="radio" value="50"> <label class="radio-group-item-label label-text" for="WoonOppervlakte-50"><span>50 m² or more</span> <span class="radio-group-item-count fd-color-light-1" data-instant-search-count="WoonOppervlakte-50">47,983</span> <span class="a11y-sr-only">Results</span></label>
                                    </div><label class="radio-group-item-remove radio-group-row" for="WoonOppervlakte-geen" title="50 m² or more"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>50 m² or more</span></label>
                                </li>
                                <li class="radio-group-item" data-radio-group-item="">
                                    <div class="radio-group-item-input radio-group-row">
                                        <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-groupname-to-filter="" data-radio-group-input="" data-radio-group-option-name="75 m² or more" id="WoonOppervlakte-75" name="filter_WoonOppervlakte" type="radio" value="75"> <label class="radio-group-item-label label-text" for="WoonOppervlakte-75"><span>75 m² or more</span> <span class="radio-group-item-count fd-color-light-1" data-instant-search-count="WoonOppervlakte-75">43,377</span> <span class="a11y-sr-only">Results</span></label>
                                    </div><label class="radio-group-item-remove radio-group-row" for="WoonOppervlakte-geen" title="75 m² or more"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>75 m² or more</span></label>
                                </li>
                                <li class="radio-group-item" data-radio-group-item="">
                                    <div class="radio-group-item-input radio-group-row">
                                        <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-groupname-to-filter="" data-radio-group-input="" data-radio-group-option-name="100 m² or more" id="WoonOppervlakte-100" name="filter_WoonOppervlakte" type="radio" value="100"> <label class="radio-group-item-label label-text" for="WoonOppervlakte-100"><span>100 m² or more</span> <span class="radio-group-item-count fd-color-light-1" data-instant-search-count="WoonOppervlakte-100">33,910</span> <span class="a11y-sr-only">Results</span></label>
                                    </div><label class="radio-group-item-remove radio-group-row" for="WoonOppervlakte-geen" title="100 m² or more"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>100 m² or more</span></label>
                                </li>
                                <li class="radio-group-item" data-radio-group-item="">
                                    <div class="radio-group-item-input radio-group-row">
                                        <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-groupname-to-filter="" data-radio-group-input="" data-radio-group-option-name="150 m² or more" id="WoonOppervlakte-150" name="filter_WoonOppervlakte" type="radio" value="150"> <label class="radio-group-item-label label-text" for="WoonOppervlakte-150"><span>150 m² or more</span> <span class="radio-group-item-count fd-color-light-1" data-instant-search-count="WoonOppervlakte-150">12,570</span> <span class="a11y-sr-only">Results</span></label>
                                    </div><label class="radio-group-item-remove radio-group-row" for="WoonOppervlakte-geen" title="150 m² or more"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>150 m² or more</span></label>
                                </li>
                                <li class="radio-group-item" data-radio-group-item="">
                                    <div class="radio-group-item-input radio-group-row">
                                        <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-groupname-to-filter="" data-radio-group-input="" data-radio-group-option-name="250 m² or more" id="WoonOppervlakte-250" name="filter_WoonOppervlakte" type="radio" value="250"> <label class="radio-group-item-label label-text" for="WoonOppervlakte-250"><span>250 m² or more</span> <span class="radio-group-item-count fd-color-light-1" data-instant-search-count="WoonOppervlakte-250">2,579</span> <span class="a11y-sr-only">Results</span></label>
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
                                        <script data-filter-flyout-selected-option-template="" type="template/html">
                                        <li data-flyout-selected-option data-filter-id="<%- id %>" data-filter-group-id="<%- groupId %>">
                                         <label class="filter-flyout-selected-option button-tertiary" title="<%- label %>">
                                             <span class="icon-close-blue" data-grunticon-embed>
                                                 <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48"><symbol id="e" viewBox="0 -48 48 48" fill="#3888C5"><path fill="none" d="M0 0v-48h48V0z"></path></symbol><symbol id="f" viewBox="-0.0002 -48 48.0002 48.0002" fill="#3888C5"><defs fill="#3888C5"><path id="a" d="M48-48H0V0h48z" fill="#3888C5"></path></defs><clipPath id="b" fill="#3888C5"><use href="#a" overflow="visible" fill="#3888C5"></use><g clip-path="url(#b)" fill="#3888C5"><g fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"><path d="M2-48V0M4-48V0M6-48V0M8-48V0M10-48V0M12-48V0M14-48V0M16-48V0M18-48V0M20-48V0M22-48V0M24-48V0M26-48V0M28-48V0M30-48V0M32-48V0M34-48V0M36-48V0M38-48V0M40-48V0M42-48V0M44-48V0M46-48V0" fill="#3888C5"></path></g><g fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"><path d="M0-2h48M0-4h48M0-6h48M0-8h48M0-10h48M0-12h48M0-14h48M0-16h48M0-18h48M0-20h48M0-22h48M0-24h48M0-26h48M0-28h48M0-30h48M0-32h48M0-34h48M0-36h48M0-38h48M0-40h48M0-42h48M0-44h48M0-46h48" fill="#3888C5"></path></g><path d="M47.75-.25v-47.5H.25v47.5h47.5M48 0H0v-48h48V0z" fill="#3888C5"></path></g></clipPath></symbol><symbol id="g" viewBox="-0.0002 -48.0001 48.0002 48.0001" fill="#3888C5"><g opacity=".4" fill="#3888C5"><defs fill="#3888C5"><path id="c" opacity=".4" d="M0-48V0h48v-48z" fill="#3888C5"></path></defs><clipPath id="d" fill="#3888C5"><use href="#c" overflow="visible" fill="#3888C5"></use><path clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10" d="M24 0v-48M48-24H0M48-16H0M48-32H0M32-48V0M16-48V0M47.75-.25L.25-47.75M.25-.25l47.5-47.5M24-14c-5.522 0-10-4.477-10-10 0-5.522 4.478-10 10-10 5.523 0 10 4.478 10 10 0 5.523-4.477 10-10 10z"></path><path d="M24-4C12.946-4 4-12.947 4-24s8.946-20 20-20c11.053 0 20 8.947 20 20S35.052-4 24-4z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><path d="M40-42H8c-1.1 0-2 .9-2 2v32c0 1.1.9 2 2 2h32c1.1 0 2-.9 2-2v-32c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><path d="M38-44H10c-1.1 0-2 .9-2 2v36c0 1.1.9 2 2 2h28c1.1 0 2-.9 2-2v-36c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><g clip-path="url(#d)" fill="#3888C5"><path d="M47.75-.25v-47.5H.25v47.5h47.5M48 0H0v-48h48V0z" fill="#3888C5"></path></g><path d="M42-40H6c-1.1 0-2 .9-2 2v28c0 1.1.9 2 2 2h36c1.1 0 2-.9 2-2v-28c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path></clipPath></g></symbol><path d="M26.122 24l10.606-10.607a1.505 1.505 0 0 0 0-2.12 1.504 1.504 0 0 0-2.121 0L24 21.878 13.394 11.272c-.583-.583-1.538-.583-2.121 0s-.584 1.538 0 2.121L21.879 24 11.272 34.607c-.583.583-.583 1.538 0 2.12s1.539.584 2.122 0L24 26.122l10.607 10.607a1.504 1.504 0 0 0 2.121 0 1.505 1.505 0 0 0 0-2.121L26.122 24z" fill="#3888C5"></path></svg>
                                             </span> <%- label %>
                                         </label>
                                        </li>
                                        </script>
                                    </div>
                                </li>
                            </ul>
                        </fieldset>
                        <script data-range-template="" data-range-unit-type="m² (floor area)" data-thousand-separator="," type="template/html">
                                 <li class="radio-group-item is-checked" data-radio-group-item data-radio-group-range>
                                     <input type="radio" checked="checked" class="custom-radio" name="filter_WoonOppervlakte" value="">
                                     <label class="radio-group-item-remove radio-group-row" for="WoonOppervlakte-geen">
                                         <span class="icon-close-blue" data-grunticon-embed></span><span class="a11y-sr-only">Remove</span>
                                         {min} - {max} m&#178;
                                     </label>
                                 </li>
                        </script>
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
                                        <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-groupname-to-filter="" data-radio-group-input="" data-radio-group-option-name="250 m² or more" id="PerceelOppervlakte-250" name="filter_PerceelOppervlakte" type="radio" value="250"> <label class="radio-group-item-label label-text" for="PerceelOppervlakte-250"><span>250 m² or more</span> <span class="radio-group-item-count fd-color-light-1" data-instant-search-count="PerceelOppervlakte-250">14,777</span> <span class="a11y-sr-only">Results</span></label>
                                    </div><label class="radio-group-item-remove radio-group-row" for="PerceelOppervlakte-geen" title="250 m² or more"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>250 m² or more</span></label>
                                </li>
                                <li class="radio-group-item" data-radio-group-item="">
                                    <div class="radio-group-item-input radio-group-row">
                                        <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-groupname-to-filter="" data-radio-group-input="" data-radio-group-option-name="500 m² or more" id="PerceelOppervlakte-500" name="filter_PerceelOppervlakte" type="radio" value="500"> <label class="radio-group-item-label label-text" for="PerceelOppervlakte-500"><span>500 m² or more</span> <span class="radio-group-item-count fd-color-light-1" data-instant-search-count="PerceelOppervlakte-500">7,725</span> <span class="a11y-sr-only">Results</span></label>
                                    </div><label class="radio-group-item-remove radio-group-row" for="PerceelOppervlakte-geen" title="500 m² or more"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>500 m² or more</span></label>
                                </li>
                                <li class="radio-group-item" data-radio-group-item="">
                                    <div class="radio-group-item-input radio-group-row">
                                        <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-groupname-to-filter="" data-radio-group-input="" data-radio-group-option-name="1,000 m² or more" id="PerceelOppervlakte-1000" name="filter_PerceelOppervlakte" type="radio" value="1000"> <label class="radio-group-item-label label-text" for="PerceelOppervlakte-1000"><span>1,000 m² or more</span> <span class="radio-group-item-count fd-color-light-1" data-instant-search-count="PerceelOppervlakte-1000">4,006</span> <span class="a11y-sr-only">Results</span></label>
                                    </div><label class="radio-group-item-remove radio-group-row" for="PerceelOppervlakte-geen" title="1,000 m² or more"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>1,000 m² or more</span></label>
                                </li>
                                <li class="radio-group-item" data-radio-group-item="">
                                    <div class="radio-group-item-input radio-group-row">
                                        <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-groupname-to-filter="" data-radio-group-input="" data-radio-group-option-name="2,500 m² or more" id="PerceelOppervlakte-2500" name="filter_PerceelOppervlakte" type="radio" value="2500"> <label class="radio-group-item-label label-text" for="PerceelOppervlakte-2500"><span>2,500 m² or more</span> <span class="radio-group-item-count fd-color-light-1" data-instant-search-count="PerceelOppervlakte-2500">1,847</span> <span class="a11y-sr-only">Results</span></label>
                                    </div><label class="radio-group-item-remove radio-group-row" for="PerceelOppervlakte-geen" title="2,500 m² or more"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>2,500 m² or more</span></label>
                                </li>
                                <li class="radio-group-item" data-radio-group-item="">
                                    <div class="radio-group-item-input radio-group-row">
                                        <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-groupname-to-filter="" data-radio-group-input="" data-radio-group-option-name="5,000 m² or more" id="PerceelOppervlakte-5000" name="filter_PerceelOppervlakte" type="radio" value="5000"> <label class="radio-group-item-label label-text" for="PerceelOppervlakte-5000"><span>5,000 m² or more</span> <span class="radio-group-item-count fd-color-light-1" data-instant-search-count="PerceelOppervlakte-5000">1,097</span> <span class="a11y-sr-only">Results</span></label>
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
                                        <script data-filter-flyout-selected-option-template="" type="template/html">
                                        <li data-flyout-selected-option data-filter-id="<%- id %>" data-filter-group-id="<%- groupId %>">
                                         <label class="filter-flyout-selected-option button-tertiary" title="<%- label %>">
                                             <span class="icon-close-blue" data-grunticon-embed>
                                                 <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48"><symbol id="e" viewBox="0 -48 48 48" fill="#3888C5"><path fill="none" d="M0 0v-48h48V0z"></path></symbol><symbol id="f" viewBox="-0.0002 -48 48.0002 48.0002" fill="#3888C5"><defs fill="#3888C5"><path id="a" d="M48-48H0V0h48z" fill="#3888C5"></path></defs><clipPath id="b" fill="#3888C5"><use href="#a" overflow="visible" fill="#3888C5"></use><g clip-path="url(#b)" fill="#3888C5"><g fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"><path d="M2-48V0M4-48V0M6-48V0M8-48V0M10-48V0M12-48V0M14-48V0M16-48V0M18-48V0M20-48V0M22-48V0M24-48V0M26-48V0M28-48V0M30-48V0M32-48V0M34-48V0M36-48V0M38-48V0M40-48V0M42-48V0M44-48V0M46-48V0" fill="#3888C5"></path></g><g fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"><path d="M0-2h48M0-4h48M0-6h48M0-8h48M0-10h48M0-12h48M0-14h48M0-16h48M0-18h48M0-20h48M0-22h48M0-24h48M0-26h48M0-28h48M0-30h48M0-32h48M0-34h48M0-36h48M0-38h48M0-40h48M0-42h48M0-44h48M0-46h48" fill="#3888C5"></path></g><path d="M47.75-.25v-47.5H.25v47.5h47.5M48 0H0v-48h48V0z" fill="#3888C5"></path></g></clipPath></symbol><symbol id="g" viewBox="-0.0002 -48.0001 48.0002 48.0001" fill="#3888C5"><g opacity=".4" fill="#3888C5"><defs fill="#3888C5"><path id="c" opacity=".4" d="M0-48V0h48v-48z" fill="#3888C5"></path></defs><clipPath id="d" fill="#3888C5"><use href="#c" overflow="visible" fill="#3888C5"></use><path clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10" d="M24 0v-48M48-24H0M48-16H0M48-32H0M32-48V0M16-48V0M47.75-.25L.25-47.75M.25-.25l47.5-47.5M24-14c-5.522 0-10-4.477-10-10 0-5.522 4.478-10 10-10 5.523 0 10 4.478 10 10 0 5.523-4.477 10-10 10z"></path><path d="M24-4C12.946-4 4-12.947 4-24s8.946-20 20-20c11.053 0 20 8.947 20 20S35.052-4 24-4z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><path d="M40-42H8c-1.1 0-2 .9-2 2v32c0 1.1.9 2 2 2h32c1.1 0 2-.9 2-2v-32c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><path d="M38-44H10c-1.1 0-2 .9-2 2v36c0 1.1.9 2 2 2h28c1.1 0 2-.9 2-2v-36c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><g clip-path="url(#d)" fill="#3888C5"><path d="M47.75-.25v-47.5H.25v47.5h47.5M48 0H0v-48h48V0z" fill="#3888C5"></path></g><path d="M42-40H6c-1.1 0-2 .9-2 2v28c0 1.1.9 2 2 2h36c1.1 0 2-.9 2-2v-28c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path></clipPath></g></symbol><path d="M26.122 24l10.606-10.607a1.505 1.505 0 0 0 0-2.12 1.504 1.504 0 0 0-2.121 0L24 21.878 13.394 11.272c-.583-.583-1.538-.583-2.121 0s-.584 1.538 0 2.121L21.879 24 11.272 34.607c-.583.583-.583 1.538 0 2.12s1.539.584 2.122 0L24 26.122l10.607 10.607a1.504 1.504 0 0 0 2.121 0 1.505 1.505 0 0 0 0-2.121L26.122 24z" fill="#3888C5"></path></svg>
                                             </span> <%- label %>
                                         </label>
                                        </li>
                                        </script>
                                    </div>
                                </li>
                            </ul>
                        </fieldset>
                        <script data-range-template="" data-range-unit-type="m² (plot area)" data-thousand-separator="," type="template/html">
                                 <li class="radio-group-item is-checked" data-radio-group-item data-radio-group-range>
                                     <input type="radio" checked="checked" class="custom-radio" name="filter_PerceelOppervlakte" value="">
                                     <label class="radio-group-item-remove radio-group-row" for="PerceelOppervlakte-geen">
                                         <span class="icon-close-blue" data-grunticon-embed></span><span class="a11y-sr-only">Remove</span>
                                         {min} - {max} m&#178;
                                     </label>
                                 </li>
                        </script>
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
                                        <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-text-to-filter="rooms" data-radio-group-input="" data-radio-group-option-name="1 room" id="AantalKamers-1" name="filter_AantalKamers" type="radio" value="1,1"> <label class="radio-group-item-label label-text" for="AantalKamers-1"><span>1 room</span> <span class="radio-group-item-count fd-color-light-1" data-instant-search-count="AantalKamers-1">752</span> <span class="a11y-sr-only">Results</span></label>
                                    </div><label class="radio-group-item-remove radio-group-row" for="AantalKamers-geen" title="1 room"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>1 room</span></label>
                                </li>
                                <li class="radio-group-item" data-radio-group-item="">
                                    <div class="radio-group-item-input radio-group-row">
                                        <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-text-to-filter="rooms" data-radio-group-input="" data-radio-group-option-name="2 or more" id="AantalKamers-2" name="filter_AantalKamers" type="radio" value="2"> <label class="radio-group-item-label label-text" for="AantalKamers-2"><span>2 or more</span> <span class="radio-group-item-count fd-color-light-1" data-instant-search-count="AantalKamers-2">48,086</span> <span class="a11y-sr-only">Results</span></label>
                                    </div><label class="radio-group-item-remove radio-group-row" for="AantalKamers-geen" title="2 or more"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>2 or more</span></label>
                                </li>
                                <li class="radio-group-item" data-radio-group-item="">
                                    <div class="radio-group-item-input radio-group-row">
                                        <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-text-to-filter="rooms" data-radio-group-input="" data-radio-group-option-name="3 or more" id="AantalKamers-3" name="filter_AantalKamers" type="radio" value="3"> <label class="radio-group-item-label label-text" for="AantalKamers-3"><span>3 or more</span> <span class="radio-group-item-count fd-color-light-1" data-instant-search-count="AantalKamers-3">45,457</span> <span class="a11y-sr-only">Results</span></label>
                                    </div><label class="radio-group-item-remove radio-group-row" for="AantalKamers-geen" title="3 or more"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>3 or more</span></label>
                                </li>
                                <li class="radio-group-item" data-radio-group-item="">
                                    <div class="radio-group-item-input radio-group-row">
                                        <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-text-to-filter="rooms" data-radio-group-input="" data-radio-group-option-name="4 or more" id="AantalKamers-4" name="filter_AantalKamers" type="radio" value="4"> <label class="radio-group-item-label label-text" for="AantalKamers-4"><span>4 or more</span> <span class="radio-group-item-count fd-color-light-1" data-instant-search-count="AantalKamers-4">35,466</span> <span class="a11y-sr-only">Results</span></label>
                                    </div><label class="radio-group-item-remove radio-group-row" for="AantalKamers-geen" title="4 or more"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>4 or more</span></label>
                                </li>
                                <li class="radio-group-item" data-radio-group-item="">
                                    <div class="radio-group-item-input radio-group-row">
                                        <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-text-to-filter="rooms" data-radio-group-input="" data-radio-group-option-name="5 or more" id="AantalKamers-5" name="filter_AantalKamers" type="radio" value="5"> <label class="radio-group-item-label label-text" for="AantalKamers-5"><span>5 or more</span> <span class="radio-group-item-count fd-color-light-1" data-instant-search-count="AantalKamers-5">24,454</span> <span class="a11y-sr-only">Results</span></label>
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
                                        <script data-filter-flyout-selected-option-template="" type="template/html">
                                        <li data-flyout-selected-option data-filter-id="<%- id %>" data-filter-group-id="<%- groupId %>">
                                         <label class="filter-flyout-selected-option button-tertiary" title="<%- label %>">
                                             <span class="icon-close-blue" data-grunticon-embed>
                                                 <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48"><symbol id="e" viewBox="0 -48 48 48" fill="#3888C5"><path fill="none" d="M0 0v-48h48V0z"></path></symbol><symbol id="f" viewBox="-0.0002 -48 48.0002 48.0002" fill="#3888C5"><defs fill="#3888C5"><path id="a" d="M48-48H0V0h48z" fill="#3888C5"></path></defs><clipPath id="b" fill="#3888C5"><use href="#a" overflow="visible" fill="#3888C5"></use><g clip-path="url(#b)" fill="#3888C5"><g fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"><path d="M2-48V0M4-48V0M6-48V0M8-48V0M10-48V0M12-48V0M14-48V0M16-48V0M18-48V0M20-48V0M22-48V0M24-48V0M26-48V0M28-48V0M30-48V0M32-48V0M34-48V0M36-48V0M38-48V0M40-48V0M42-48V0M44-48V0M46-48V0" fill="#3888C5"></path></g><g fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"><path d="M0-2h48M0-4h48M0-6h48M0-8h48M0-10h48M0-12h48M0-14h48M0-16h48M0-18h48M0-20h48M0-22h48M0-24h48M0-26h48M0-28h48M0-30h48M0-32h48M0-34h48M0-36h48M0-38h48M0-40h48M0-42h48M0-44h48M0-46h48" fill="#3888C5"></path></g><path d="M47.75-.25v-47.5H.25v47.5h47.5M48 0H0v-48h48V0z" fill="#3888C5"></path></g></clipPath></symbol><symbol id="g" viewBox="-0.0002 -48.0001 48.0002 48.0001" fill="#3888C5"><g opacity=".4" fill="#3888C5"><defs fill="#3888C5"><path id="c" opacity=".4" d="M0-48V0h48v-48z" fill="#3888C5"></path></defs><clipPath id="d" fill="#3888C5"><use href="#c" overflow="visible" fill="#3888C5"></use><path clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10" d="M24 0v-48M48-24H0M48-16H0M48-32H0M32-48V0M16-48V0M47.75-.25L.25-47.75M.25-.25l47.5-47.5M24-14c-5.522 0-10-4.477-10-10 0-5.522 4.478-10 10-10 5.523 0 10 4.478 10 10 0 5.523-4.477 10-10 10z"></path><path d="M24-4C12.946-4 4-12.947 4-24s8.946-20 20-20c11.053 0 20 8.947 20 20S35.052-4 24-4z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><path d="M40-42H8c-1.1 0-2 .9-2 2v32c0 1.1.9 2 2 2h32c1.1 0 2-.9 2-2v-32c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><path d="M38-44H10c-1.1 0-2 .9-2 2v36c0 1.1.9 2 2 2h28c1.1 0 2-.9 2-2v-36c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><g clip-path="url(#d)" fill="#3888C5"><path d="M47.75-.25v-47.5H.25v47.5h47.5M48 0H0v-48h48V0z" fill="#3888C5"></path></g><path d="M42-40H6c-1.1 0-2 .9-2 2v28c0 1.1.9 2 2 2h36c1.1 0 2-.9 2-2v-28c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path></clipPath></g></symbol><path d="M26.122 24l10.606-10.607a1.505 1.505 0 0 0 0-2.12 1.504 1.504 0 0 0-2.121 0L24 21.878 13.394 11.272c-.583-.583-1.538-.583-2.121 0s-.584 1.538 0 2.121L21.879 24 11.272 34.607c-.583.583-.583 1.538 0 2.12s1.539.584 2.122 0L24 26.122l10.607 10.607a1.504 1.504 0 0 0 2.121 0 1.505 1.505 0 0 0 0-2.121L26.122 24z" fill="#3888C5"></path></svg>
                                             </span> <%- label %>
                                         </label>
                                        </li>
                                        </script>
                                    </div>
                                </li>
                            </ul>
                        </fieldset>
                        <script data-range-template="" data-range-unit-type="rooms" data-thousand-separator="," type="template/html">
                                 <li class="radio-group-item is-checked" data-radio-group-item data-radio-group-range>
                                     <input type="radio" checked="checked" class="custom-radio" name="filter_AantalKamers" value="">
                                     <label class="radio-group-item-remove radio-group-row" for="AantalKamers-geen">
                                         <span class="icon-close-blue" data-grunticon-embed></span><span class="a11y-sr-only">Remove</span>
                                         {min} - {max} rooms
                                     </label>
                                 </li>
                        </script>
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
                                        <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-text-to-filter="bedrooms" data-radio-group-input="" data-radio-group-option-name="1 bedroom" id="AantalSlaapkamers-1" name="filter_AantalSlaapkamers" type="radio" value="1,1"> <label class="radio-group-item-label label-text" for="AantalSlaapkamers-1"><span>1 bedroom</span> <span class="radio-group-item-count fd-color-light-1" data-instant-search-count="AantalSlaapkamers-1">3,072</span> <span class="a11y-sr-only">Results</span></label>
                                    </div><label class="radio-group-item-remove radio-group-row" for="AantalSlaapkamers-geen" title="1 bedroom"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>1 bedroom</span></label>
                                </li>
                                <li class="radio-group-item" data-radio-group-item="">
                                    <div class="radio-group-item-input radio-group-row">
                                        <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-text-to-filter="bedrooms" data-radio-group-input="" data-radio-group-option-name="2 or more" id="AantalSlaapkamers-2" name="filter_AantalSlaapkamers" type="radio" value="2"> <label class="radio-group-item-label label-text" for="AantalSlaapkamers-2"><span>2 or more</span> <span class="radio-group-item-count fd-color-light-1" data-instant-search-count="AantalSlaapkamers-2">44,157</span> <span class="a11y-sr-only">Results</span></label>
                                    </div><label class="radio-group-item-remove radio-group-row" for="AantalSlaapkamers-geen" title="2 or more"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>2 or more</span></label>
                                </li>
                                <li class="radio-group-item" data-radio-group-item="">
                                    <div class="radio-group-item-input radio-group-row">
                                        <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-text-to-filter="bedrooms" data-radio-group-input="" data-radio-group-option-name="3 or more" id="AantalSlaapkamers-3" name="filter_AantalSlaapkamers" type="radio" value="3"> <label class="radio-group-item-label label-text" for="AantalSlaapkamers-3"><span>3 or more</span> <span class="radio-group-item-count fd-color-light-1" data-instant-search-count="AantalSlaapkamers-3">32,862</span> <span class="a11y-sr-only">Results</span></label>
                                    </div><label class="radio-group-item-remove radio-group-row" for="AantalSlaapkamers-geen" title="3 or more"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>3 or more</span></label>
                                </li>
                                <li class="radio-group-item" data-radio-group-item="">
                                    <div class="radio-group-item-input radio-group-row">
                                        <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-text-to-filter="bedrooms" data-radio-group-input="" data-radio-group-option-name="4 or more" id="AantalSlaapkamers-4" name="filter_AantalSlaapkamers" type="radio" value="4"> <label class="radio-group-item-label label-text" for="AantalSlaapkamers-4"><span>4 or more</span> <span class="radio-group-item-count fd-color-light-1" data-instant-search-count="AantalSlaapkamers-4">17,278</span> <span class="a11y-sr-only">Results</span></label>
                                    </div><label class="radio-group-item-remove radio-group-row" for="AantalSlaapkamers-geen" title="4 or more"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>4 or more</span></label>
                                </li>
                                <li class="radio-group-item" data-radio-group-item="">
                                    <div class="radio-group-item-input radio-group-row">
                                        <input class="custom-radio" data-instant-search-handle="" data-radio-group-add-text-to-filter="bedrooms" data-radio-group-input="" data-radio-group-option-name="5 or more" id="AantalSlaapkamers-5" name="filter_AantalSlaapkamers" type="radio" value="5"> <label class="radio-group-item-label label-text" for="AantalSlaapkamers-5"><span>5 or more</span> <span class="radio-group-item-count fd-color-light-1" data-instant-search-count="AantalSlaapkamers-5">5,604</span> <span class="a11y-sr-only">Results</span></label>
                                    </div><label class="radio-group-item-remove radio-group-row" for="AantalSlaapkamers-geen" title="5 or more"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>5 or more</span></label>
                                </li>
                            </ul>
                        </fieldset>
                    </div>
                    <fieldset class="search-filter-checkbox radio-group-fieldset" data-filter-group-id="Buitenruimte" data-nested-filter="">
                        <legend class="radio-group-legend radio-group-row w-full">Exterior space</legend>
                        <ul class="filter-checkbox-list" data-search-filter-checkbox="">
                            <li class="label-text filter-flyout-option-label"><input class="custom-checkbox" data-filter-checkbox-item="" data-filter-group-id="Buitenruimte" data-filter-group-name="Exterior space" data-resettable="" id="Buitenruimte-AanwezigheidVan:Balkon" name="filter_Buitenruimte" type="checkbox" value="AanwezigheidVan:balkon"> <label class="label-text filter-flyout-option-label" for="Buitenruimte-AanwezigheidVan:Balkon">Balcony</label> <span class="filter-flyout-option-count" data-instant-search-count="Buitenruimte-AanwezigheidVan:Balkon">10,976</span> <span class="a11y-sr-only">Results</span></li>
                            <li class="label-text filter-flyout-option-label"><input class="custom-checkbox" data-filter-checkbox-item="" data-filter-group-id="Buitenruimte" data-filter-group-name="Exterior space" data-resettable="" id="Buitenruimte-AanwezigheidVan:Dakterras" name="filter_Buitenruimte" type="checkbox" value="AanwezigheidVan:dakterras"> <label class="label-text filter-flyout-option-label" for="Buitenruimte-AanwezigheidVan:Dakterras">Roof terrace</label> <span class="filter-flyout-option-count" data-instant-search-count="Buitenruimte-AanwezigheidVan:Dakterras">3,160</span> <span class="a11y-sr-only">Results</span></li>
                            <li class="label-text filter-flyout-option-label"><input class="custom-checkbox" data-filter-checkbox-item="" data-filter-group-id="Buitenruimte" data-filter-group-name="Exterior space" data-resettable="" id="Buitenruimte-AanwezigheidVan:Tuin" name="filter_Buitenruimte" type="checkbox" value="AanwezigheidVan:tuin"> <label class="label-text filter-flyout-option-label" for="Buitenruimte-AanwezigheidVan:Tuin">Garden</label> <span class="filter-flyout-option-count" data-instant-search-count="Buitenruimte-AanwezigheidVan:Tuin">30,963</span> <span class="a11y-sr-only">Results</span></li>
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
                                                    <li class="filter-flyout-option" data-filter-flyout-option-label="North"><input class="custom-checkbox" data-filter-flyout-add-groupname-to-filter="" data-filter-group-id="LiggingTuin" data-filter-group-name="Garden orientation" data-flyout-item="" data-instant-search-handle="" id="LiggingTuin-TuinOpNoorden" name="filter_LiggingTuin" type="checkbox" value="noord"> <label class="label-text filter-flyout-option-label" for="LiggingTuin-TuinOpNoorden">North</label> <span class="filter-flyout-option-count" data-instant-search-count="LiggingTuin-TuinOpNoorden">6,471 <span class="a11y-sr-only">Results</span></span></li>
                                                    <li class="filter-flyout-option" data-filter-flyout-option-label="East"><input class="custom-checkbox" data-filter-flyout-add-groupname-to-filter="" data-filter-group-id="LiggingTuin" data-filter-group-name="Garden orientation" data-flyout-item="" data-instant-search-handle="" id="LiggingTuin-TuinOpOosten" name="filter_LiggingTuin" type="checkbox" value="oost"> <label class="label-text filter-flyout-option-label" for="LiggingTuin-TuinOpOosten">East</label> <span class="filter-flyout-option-count" data-instant-search-count="LiggingTuin-TuinOpOosten">7,929 <span class="a11y-sr-only">Results</span></span></li>
                                                    <li class="filter-flyout-option" data-filter-flyout-option-label="West"><input class="custom-checkbox" data-filter-flyout-add-groupname-to-filter="" data-filter-group-id="LiggingTuin" data-filter-group-name="Garden orientation" data-flyout-item="" data-instant-search-handle="" id="LiggingTuin-TuinOpWesten" name="filter_LiggingTuin" type="checkbox" value="west"> <label class="label-text filter-flyout-option-label" for="LiggingTuin-TuinOpWesten">West</label> <span class="filter-flyout-option-count" data-instant-search-count="LiggingTuin-TuinOpWesten">8,794 <span class="a11y-sr-only">Results</span></span></li>
                                                    <li class="filter-flyout-option" data-filter-flyout-option-label="South"><input class="custom-checkbox" data-filter-flyout-add-groupname-to-filter="" data-filter-group-id="LiggingTuin" data-filter-group-name="Garden orientation" data-flyout-item="" data-instant-search-handle="" id="LiggingTuin-TuinOpZuiden" name="filter_LiggingTuin" type="checkbox" value="zuid"> <label class="label-text filter-flyout-option-label" for="LiggingTuin-TuinOpZuiden">South</label> <span class="filter-flyout-option-count" data-instant-search-count="LiggingTuin-TuinOpZuiden">10,205 <span class="a11y-sr-only">Results</span></span></li>
                                                </ul>
                                            </fieldset>
                                            <fieldset class="filter-flyout-fieldset">
                                                <legend>Garden area</legend>
                                                <ul class="filter-flyout-options">
                                                    <li class="filter-flyout-option-default filter-flyout-option"><input checked class="custom-radio" data-instant-search-handle="" id="Tuinoppervlakte-geen" name="filter_Tuinoppervlakte" type="radio" value=""> <label class="label-text" for="Tuinoppervlakte-geen">Remove filter</label></li>
                                                    <li class="filter-flyout-option" data-filter-flyout-option-label="25+ m²"><input class="custom-radio" data-filter-flyout-add-groupname-to-filter="" data-filter-group-id="Tuinoppervlakte" data-filter-group-name="Garden area" data-flyout-item="" data-instant-search-handle="" id="Tuinoppervlakte-25" name="filter_Tuinoppervlakte" type="radio" value="25"> <label class="label-text filter-flyout-option-label" for="Tuinoppervlakte-25">25+ m²</label> <span class="filter-flyout-option-count" data-instant-search-count="Tuinoppervlakte-25">20,706 <span class="a11y-sr-only">Results</span></span></li>
                                                    <li class="filter-flyout-option" data-filter-flyout-option-label="50+ m²"><input class="custom-radio" data-filter-flyout-add-groupname-to-filter="" data-filter-group-id="Tuinoppervlakte" data-filter-group-name="Garden area" data-flyout-item="" data-instant-search-handle="" id="Tuinoppervlakte-50" name="filter_Tuinoppervlakte" type="radio" value="50"> <label class="label-text filter-flyout-option-label" for="Tuinoppervlakte-50">50+ m²</label> <span class="filter-flyout-option-count" data-instant-search-count="Tuinoppervlakte-50">16,532 <span class="a11y-sr-only">Results</span></span></li>
                                                    <li class="filter-flyout-option" data-filter-flyout-option-label="100+ m²"><input class="custom-radio" data-filter-flyout-add-groupname-to-filter="" data-filter-group-id="Tuinoppervlakte" data-filter-group-name="Garden area" data-flyout-item="" data-instant-search-handle="" id="Tuinoppervlakte-100" name="filter_Tuinoppervlakte" type="radio" value="100"> <label class="label-text filter-flyout-option-label" for="Tuinoppervlakte-100">100+ m²</label> <span class="filter-flyout-option-count" data-instant-search-count="Tuinoppervlakte-100">7,190 <span class="a11y-sr-only">Results</span></span></li>
                                                    <li class="filter-flyout-option" data-filter-flyout-option-label="250+ m²"><input class="custom-radio" data-filter-flyout-add-groupname-to-filter="" data-filter-group-id="Tuinoppervlakte" data-filter-group-name="Garden area" data-flyout-item="" data-instant-search-handle="" id="Tuinoppervlakte-250" name="filter_Tuinoppervlakte" type="radio" value="250"> <label class="label-text filter-flyout-option-label" for="Tuinoppervlakte-250">250+ m²</label> <span class="filter-flyout-option-count" data-instant-search-count="Tuinoppervlakte-250">2,001 <span class="a11y-sr-only">Results</span></span></li>
                                                    <li class="filter-flyout-option" data-filter-flyout-option-label="500+ m²"><input class="custom-radio" data-filter-flyout-add-groupname-to-filter="" data-filter-group-id="Tuinoppervlakte" data-filter-group-name="Garden area" data-flyout-item="" data-instant-search-handle="" id="Tuinoppervlakte-500" name="filter_Tuinoppervlakte" type="radio" value="500"> <label class="label-text filter-flyout-option-label" for="Tuinoppervlakte-500">500+ m²</label> <span class="filter-flyout-option-count" data-instant-search-count="Tuinoppervlakte-500">795 <span class="a11y-sr-only">Results</span></span></li>
                                                </ul>
                                            </fieldset>
                                        </div>
                                        <ul class="filter-flyout-selected-options" data-flyout-selected-options=""></ul>
                                        <script data-filter-flyout-selected-option-template="" type="template/html">
                                        <li data-flyout-selected-option data-filter-id="<%- id %>" data-filter-group-id="<%- groupId %>">
                                         <label class="filter-flyout-selected-option button-tertiary" title="<%- label %>">
                                             <span class="icon-close-blue" data-grunticon-embed>
                                                 <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48"><symbol id="e" viewBox="0 -48 48 48" fill="#3888C5"><path fill="none" d="M0 0v-48h48V0z"></path></symbol><symbol id="f" viewBox="-0.0002 -48 48.0002 48.0002" fill="#3888C5"><defs fill="#3888C5"><path id="a" d="M48-48H0V0h48z" fill="#3888C5"></path></defs><clipPath id="b" fill="#3888C5"><use href="#a" overflow="visible" fill="#3888C5"></use><g clip-path="url(#b)" fill="#3888C5"><g fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"><path d="M2-48V0M4-48V0M6-48V0M8-48V0M10-48V0M12-48V0M14-48V0M16-48V0M18-48V0M20-48V0M22-48V0M24-48V0M26-48V0M28-48V0M30-48V0M32-48V0M34-48V0M36-48V0M38-48V0M40-48V0M42-48V0M44-48V0M46-48V0" fill="#3888C5"></path></g><g fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"><path d="M0-2h48M0-4h48M0-6h48M0-8h48M0-10h48M0-12h48M0-14h48M0-16h48M0-18h48M0-20h48M0-22h48M0-24h48M0-26h48M0-28h48M0-30h48M0-32h48M0-34h48M0-36h48M0-38h48M0-40h48M0-42h48M0-44h48M0-46h48" fill="#3888C5"></path></g><path d="M47.75-.25v-47.5H.25v47.5h47.5M48 0H0v-48h48V0z" fill="#3888C5"></path></g></clipPath></symbol><symbol id="g" viewBox="-0.0002 -48.0001 48.0002 48.0001" fill="#3888C5"><g opacity=".4" fill="#3888C5"><defs fill="#3888C5"><path id="c" opacity=".4" d="M0-48V0h48v-48z" fill="#3888C5"></path></defs><clipPath id="d" fill="#3888C5"><use href="#c" overflow="visible" fill="#3888C5"></use><path clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10" d="M24 0v-48M48-24H0M48-16H0M48-32H0M32-48V0M16-48V0M47.75-.25L.25-47.75M.25-.25l47.5-47.5M24-14c-5.522 0-10-4.477-10-10 0-5.522 4.478-10 10-10 5.523 0 10 4.478 10 10 0 5.523-4.477 10-10 10z"></path><path d="M24-4C12.946-4 4-12.947 4-24s8.946-20 20-20c11.053 0 20 8.947 20 20S35.052-4 24-4z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><path d="M40-42H8c-1.1 0-2 .9-2 2v32c0 1.1.9 2 2 2h32c1.1 0 2-.9 2-2v-32c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><path d="M38-44H10c-1.1 0-2 .9-2 2v36c0 1.1.9 2 2 2h28c1.1 0 2-.9 2-2v-36c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><g clip-path="url(#d)" fill="#3888C5"><path d="M47.75-.25v-47.5H.25v47.5h47.5M48 0H0v-48h48V0z" fill="#3888C5"></path></g><path d="M42-40H6c-1.1 0-2 .9-2 2v28c0 1.1.9 2 2 2h36c1.1 0 2-.9 2-2v-28c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path></clipPath></g></symbol><path d="M26.122 24l10.606-10.607a1.505 1.505 0 0 0 0-2.12 1.504 1.504 0 0 0-2.121 0L24 21.878 13.394 11.272c-.583-.583-1.538-.583-2.121 0s-.584 1.538 0 2.121L21.879 24 11.272 34.607c-.583.583-.583 1.538 0 2.12s1.539.584 2.122 0L24 26.122l10.607 10.607a1.504 1.504 0 0 0 2.121 0 1.505 1.505 0 0 0 0-2.121L26.122 24z" fill="#3888C5"></path></svg>
                                             </span> <%- label %>
                                         </label>
                                        </li>
                                        </script>
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
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Before 1906"><input class="custom-checkbox" data-filter-group-id="BouwPeriodeId" data-filter-group-name="Age of property" data-flyout-item="" data-instant-search-handle="" id="BouwPeriodeId-BouwperiodeVoor1906" name="filter_BouwPeriodeId" type="checkbox" value="voor 1906"> <label class="label-text filter-flyout-option-label" for="BouwPeriodeId-BouwperiodeVoor1906">Before 1906</label> <span class="filter-flyout-option-count" data-instant-search-count="BouwPeriodeId-BouwperiodeVoor1906">2,848 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="1906-1930"><input class="custom-checkbox" data-filter-group-id="BouwPeriodeId" data-filter-group-name="Age of property" data-flyout-item="" data-instant-search-handle="" id="BouwPeriodeId-Bouwperiode19061930" name="filter_BouwPeriodeId" type="checkbox" value="1906-1930"> <label class="label-text filter-flyout-option-label" for="BouwPeriodeId-Bouwperiode19061930">1906-1930</label> <span class="filter-flyout-option-count" data-instant-search-count="BouwPeriodeId-Bouwperiode19061930">3,992 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="1931-1944"><input class="custom-checkbox" data-filter-group-id="BouwPeriodeId" data-filter-group-name="Age of property" data-flyout-item="" data-instant-search-handle="" id="BouwPeriodeId-Bouwperiode19311944" name="filter_BouwPeriodeId" type="checkbox" value="1931-1944"> <label class="label-text filter-flyout-option-label" for="BouwPeriodeId-Bouwperiode19311944">1931-1944</label> <span class="filter-flyout-option-count" data-instant-search-count="BouwPeriodeId-Bouwperiode19311944">2,384 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="1945-1959"><input class="custom-checkbox" data-filter-group-id="BouwPeriodeId" data-filter-group-name="Age of property" data-flyout-item="" data-instant-search-handle="" id="BouwPeriodeId-Bouwperiode19451959" name="filter_BouwPeriodeId" type="checkbox" value="1945-1959"> <label class="label-text filter-flyout-option-label" for="BouwPeriodeId-Bouwperiode19451959">1945-1959</label> <span class="filter-flyout-option-count" data-instant-search-count="BouwPeriodeId-Bouwperiode19451959">2,543 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="1960-1970"><input class="custom-checkbox" data-filter-group-id="BouwPeriodeId" data-filter-group-name="Age of property" data-flyout-item="" data-instant-search-handle="" id="BouwPeriodeId-Bouwperiode19601970" name="filter_BouwPeriodeId" type="checkbox" value="1960-1970"> <label class="label-text filter-flyout-option-label" for="BouwPeriodeId-Bouwperiode19601970">1960-1970</label> <span class="filter-flyout-option-count" data-instant-search-count="BouwPeriodeId-Bouwperiode19601970">4,523 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="1971-1980"><input class="custom-checkbox" data-filter-group-id="BouwPeriodeId" data-filter-group-name="Age of property" data-flyout-item="" data-instant-search-handle="" id="BouwPeriodeId-Bouwperiode19711980" name="filter_BouwPeriodeId" type="checkbox" value="1971-1980"> <label class="label-text filter-flyout-option-label" for="BouwPeriodeId-Bouwperiode19711980">1971-1980</label> <span class="filter-flyout-option-count" data-instant-search-count="BouwPeriodeId-Bouwperiode19711980">4,624 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="1981-1990"><input class="custom-checkbox" data-filter-group-id="BouwPeriodeId" data-filter-group-name="Age of property" data-flyout-item="" data-instant-search-handle="" id="BouwPeriodeId-Bouwperiode19811990" name="filter_BouwPeriodeId" type="checkbox" value="1981-1990"> <label class="label-text filter-flyout-option-label" for="BouwPeriodeId-Bouwperiode19811990">1981-1990</label> <span class="filter-flyout-option-count" data-instant-search-count="BouwPeriodeId-Bouwperiode19811990">3,465 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="1991-2000"><input class="custom-checkbox" data-filter-group-id="BouwPeriodeId" data-filter-group-name="Age of property" data-flyout-item="" data-instant-search-handle="" id="BouwPeriodeId-Bouwperiode19912000" name="filter_BouwPeriodeId" type="checkbox" value="1991-2000"> <label class="label-text filter-flyout-option-label" for="BouwPeriodeId-Bouwperiode19912000">1991-2000</label> <span class="filter-flyout-option-count" data-instant-search-count="BouwPeriodeId-Bouwperiode19912000">3,830 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="2001-2010"><input class="custom-checkbox" data-filter-group-id="BouwPeriodeId" data-filter-group-name="Age of property" data-flyout-item="" data-instant-search-handle="" id="BouwPeriodeId-Bouwperiode20012010" name="filter_BouwPeriodeId" type="checkbox" value="2001-2010"> <label class="label-text filter-flyout-option-label" for="BouwPeriodeId-Bouwperiode20012010">2001-2010</label> <span class="filter-flyout-option-count" data-instant-search-count="BouwPeriodeId-Bouwperiode20012010">3,843 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="2011-2020"><input class="custom-checkbox" data-filter-group-id="BouwPeriodeId" data-filter-group-name="Age of property" data-flyout-item="" data-instant-search-handle="" id="BouwPeriodeId-Bouwperiode20112020" name="filter_BouwPeriodeId" type="checkbox" value="2011-2020"> <label class="label-text filter-flyout-option-label" for="BouwPeriodeId-Bouwperiode20112020">2011-2020</label> <span class="filter-flyout-option-count" data-instant-search-count="BouwPeriodeId-Bouwperiode20112020">2,836 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="After 2020"><input class="custom-checkbox" data-filter-group-id="BouwPeriodeId" data-filter-group-name="Age of property" data-flyout-item="" data-instant-search-handle="" id="BouwPeriodeId-BouwperiodeNa2020" name="filter_BouwPeriodeId" type="checkbox" value="na 2020"> <label class="label-text filter-flyout-option-label" for="BouwPeriodeId-BouwperiodeNa2020">After 2020</label> <span class="filter-flyout-option-count" data-instant-search-count="BouwPeriodeId-BouwperiodeNa2020">13,950 <span class="a11y-sr-only">Results</span></span></li>
                                    </ul>
                                </fieldset>
                            </div>
                            <ul class="filter-flyout-selected-options" data-flyout-selected-options=""></ul>
                            <script data-filter-flyout-selected-option-template="" type="template/html">
                            <li data-flyout-selected-option data-filter-id="<%- id %>" data-filter-group-id="<%- groupId %>">
                                <label class="filter-flyout-selected-option button-tertiary" title="<%- label %>">
                                    <span class="icon-close-blue" data-grunticon-embed>
                                        <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48"><symbol id="e" viewBox="0 -48 48 48" fill="#3888C5"><path fill="none" d="M0 0v-48h48V0z"></path></symbol><symbol id="f" viewBox="-0.0002 -48 48.0002 48.0002" fill="#3888C5"><defs fill="#3888C5"><path id="a" d="M48-48H0V0h48z" fill="#3888C5"></path></defs><clipPath id="b" fill="#3888C5"><use href="#a" overflow="visible" fill="#3888C5"></use><g clip-path="url(#b)" fill="#3888C5"><g fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"><path d="M2-48V0M4-48V0M6-48V0M8-48V0M10-48V0M12-48V0M14-48V0M16-48V0M18-48V0M20-48V0M22-48V0M24-48V0M26-48V0M28-48V0M30-48V0M32-48V0M34-48V0M36-48V0M38-48V0M40-48V0M42-48V0M44-48V0M46-48V0" fill="#3888C5"></path></g><g fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"><path d="M0-2h48M0-4h48M0-6h48M0-8h48M0-10h48M0-12h48M0-14h48M0-16h48M0-18h48M0-20h48M0-22h48M0-24h48M0-26h48M0-28h48M0-30h48M0-32h48M0-34h48M0-36h48M0-38h48M0-40h48M0-42h48M0-44h48M0-46h48" fill="#3888C5"></path></g><path d="M47.75-.25v-47.5H.25v47.5h47.5M48 0H0v-48h48V0z" fill="#3888C5"></path></g></clipPath></symbol><symbol id="g" viewBox="-0.0002 -48.0001 48.0002 48.0001" fill="#3888C5"><g opacity=".4" fill="#3888C5"><defs fill="#3888C5"><path id="c" opacity=".4" d="M0-48V0h48v-48z" fill="#3888C5"></path></defs><clipPath id="d" fill="#3888C5"><use href="#c" overflow="visible" fill="#3888C5"></use><path clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10" d="M24 0v-48M48-24H0M48-16H0M48-32H0M32-48V0M16-48V0M47.75-.25L.25-47.75M.25-.25l47.5-47.5M24-14c-5.522 0-10-4.477-10-10 0-5.522 4.478-10 10-10 5.523 0 10 4.478 10 10 0 5.523-4.477 10-10 10z"></path><path d="M24-4C12.946-4 4-12.947 4-24s8.946-20 20-20c11.053 0 20 8.947 20 20S35.052-4 24-4z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><path d="M40-42H8c-1.1 0-2 .9-2 2v32c0 1.1.9 2 2 2h32c1.1 0 2-.9 2-2v-32c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><path d="M38-44H10c-1.1 0-2 .9-2 2v36c0 1.1.9 2 2 2h28c1.1 0 2-.9 2-2v-36c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><g clip-path="url(#d)" fill="#3888C5"><path d="M47.75-.25v-47.5H.25v47.5h47.5M48 0H0v-48h48V0z" fill="#3888C5"></path></g><path d="M42-40H6c-1.1 0-2 .9-2 2v28c0 1.1.9 2 2 2h36c1.1 0 2-.9 2-2v-28c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path></clipPath></g></symbol><path d="M26.122 24l10.606-10.607a1.505 1.505 0 0 0 0-2.12 1.504 1.504 0 0 0-2.121 0L24 21.878 13.394 11.272c-.583-.583-1.538-.583-2.121 0s-.584 1.538 0 2.121L21.879 24 11.272 34.607c-.583.583-.583 1.538 0 2.12s1.539.584 2.122 0L24 26.122l10.607 10.607a1.504 1.504 0 0 0 2.121 0 1.505 1.505 0 0 0 0-2.121L26.122 24z" fill="#3888C5"></path></svg>
                                    </span> <%- label %>
                                </label>
                            </li>
                            </script>
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
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="At edge of wood"><input class="custom-checkbox" data-filter-group-id="Ligging" data-filter-group-name="Surrounding" data-flyout-item="" data-instant-search-handle="" id="Ligging-AanBosrand" name="filter_Ligging" type="checkbox" value="aan bosrand"> <label class="label-text filter-flyout-option-label" for="Ligging-AanBosrand">At edge of wood</label> <span class="filter-flyout-option-count" data-instant-search-count="Ligging-AanBosrand">1,257 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="By water"><input class="custom-checkbox" data-filter-group-id="Ligging" data-filter-group-name="Surrounding" data-flyout-item="" data-instant-search-handle="" id="Ligging-AanWater" name="filter_Ligging" type="checkbox" value="aan water"> <label class="label-text filter-flyout-option-label" for="Ligging-AanWater">By water</label> <span class="filter-flyout-option-count" data-instant-search-count="Ligging-AanWater">4,554 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="In center"><input class="custom-checkbox" data-filter-group-id="Ligging" data-filter-group-name="Surrounding" data-flyout-item="" data-instant-search-handle="" id="Ligging-InCentrum" name="filter_Ligging" type="checkbox" value="in centrum"> <label class="label-text filter-flyout-option-label" for="Ligging-InCentrum">In center</label> <span class="filter-flyout-option-count" data-instant-search-count="Ligging-InCentrum">8,165 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="In green area"><input class="custom-checkbox" data-filter-group-id="Ligging" data-filter-group-name="Surrounding" data-flyout-item="" data-instant-search-handle="" id="Ligging-InBosrijkeOmgeving" name="filter_Ligging" type="checkbox" value="in bosrijke omgeving"> <label class="label-text filter-flyout-option-label" for="Ligging-InBosrijkeOmgeving">In green area</label> <span class="filter-flyout-option-count" data-instant-search-count="Ligging-InBosrijkeOmgeving">2,984 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="In residential district"><input class="custom-checkbox" data-filter-group-id="Ligging" data-filter-group-name="Surrounding" data-flyout-item="" data-instant-search-handle="" id="Ligging-InWoonwijk" name="filter_Ligging" type="checkbox" value="in woonwijk"> <label class="label-text filter-flyout-option-label" for="Ligging-InWoonwijk">In residential district</label> <span class="filter-flyout-option-count" data-instant-search-count="Ligging-InWoonwijk">28,769 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="On busy road"><input class="custom-checkbox" data-filter-group-id="Ligging" data-filter-group-name="Surrounding" data-flyout-item="" data-instant-search-handle="" id="Ligging-AanDrukkeWeg" name="filter_Ligging" type="checkbox" value="aan drukke weg"> <label class="label-text filter-flyout-option-label" for="Ligging-AanDrukkeWeg">On busy road</label> <span class="filter-flyout-option-count" data-instant-search-count="Ligging-AanDrukkeWeg">1,055 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="On navigable waterway"><input class="custom-checkbox" data-filter-group-id="Ligging" data-filter-group-name="Surrounding" data-flyout-item="" data-instant-search-handle="" id="Ligging-AanVaarwater" name="filter_Ligging" type="checkbox" value="aan vaarwater"> <label class="label-text filter-flyout-option-label" for="Ligging-AanVaarwater">On navigable waterway</label> <span class="filter-flyout-option-count" data-instant-search-count="Ligging-AanVaarwater">1,843 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="On quiet road"><input class="custom-checkbox" data-filter-group-id="Ligging" data-filter-group-name="Surrounding" data-flyout-item="" data-instant-search-handle="" id="Ligging-AanRustigeWeg" name="filter_Ligging" type="checkbox" value="aan rustige weg"> <label class="label-text filter-flyout-option-label" for="Ligging-AanRustigeWeg">On quiet road</label> <span class="filter-flyout-option-count" data-instant-search-count="Ligging-AanRustigeWeg">18,599 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Open position"><input class="custom-checkbox" data-filter-group-id="Ligging" data-filter-group-name="Surrounding" data-flyout-item="" data-instant-search-handle="" id="Ligging-OpenLigging" name="filter_Ligging" type="checkbox" value="open ligging"> <label class="label-text filter-flyout-option-label" for="Ligging-OpenLigging">Open position</label> <span class="filter-flyout-option-count" data-instant-search-count="Ligging-OpenLigging">2,178 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Outside built-up area"><input class="custom-checkbox" data-filter-group-id="Ligging" data-filter-group-name="Surrounding" data-flyout-item="" data-instant-search-handle="" id="Ligging-BuitenBebouwdeKom" name="filter_Ligging" type="checkbox" value="buiten bebouwde kom"> <label class="label-text filter-flyout-option-label" for="Ligging-BuitenBebouwdeKom">Outside built-up area</label> <span class="filter-flyout-option-count" data-instant-search-count="Ligging-BuitenBebouwdeKom">1,186 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Overlooking park"><input class="custom-checkbox" data-filter-group-id="Ligging" data-filter-group-name="Surrounding" data-flyout-item="" data-instant-search-handle="" id="Ligging-AanPark" name="filter_Ligging" type="checkbox" value="aan park"> <label class="label-text filter-flyout-option-label" for="Ligging-AanPark">Overlooking park</label> <span class="filter-flyout-option-count" data-instant-search-count="Ligging-AanPark">2,650 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Rural"><input class="custom-checkbox" data-filter-group-id="Ligging" data-filter-group-name="Surrounding" data-flyout-item="" data-instant-search-handle="" id="Ligging-LandelijkGelegen" name="filter_Ligging" type="checkbox" value="landelijk gelegen"> <label class="label-text filter-flyout-option-label" for="Ligging-LandelijkGelegen">Rural</label> <span class="filter-flyout-option-count" data-instant-search-count="Ligging-LandelijkGelegen">2,227 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Sheltered position"><input class="custom-checkbox" data-filter-group-id="Ligging" data-filter-group-name="Surrounding" data-flyout-item="" data-instant-search-handle="" id="Ligging-BeschutteLigging" name="filter_Ligging" type="checkbox" value="beschutte ligging"> <label class="label-text filter-flyout-option-label" for="Ligging-BeschutteLigging">Sheltered position</label> <span class="filter-flyout-option-count" data-instant-search-count="Ligging-BeschutteLigging">3,645 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Unobstructed view"><input class="custom-checkbox" data-filter-group-id="Ligging" data-filter-group-name="Surrounding" data-flyout-item="" data-instant-search-handle="" id="Ligging-VrijUitzicht" name="filter_Ligging" type="checkbox" value="vrij uitzicht"> <label class="label-text filter-flyout-option-label" for="Ligging-VrijUitzicht">Unobstructed view</label> <span class="filter-flyout-option-count" data-instant-search-count="Ligging-VrijUitzicht">10,546 <span class="a11y-sr-only">Results</span></span></li>
                                    </ul>
                                </fieldset>
                            </div>
                            <ul class="filter-flyout-selected-options" data-flyout-selected-options=""></ul>
                            <script data-filter-flyout-selected-option-template="" type="template/html">
                            <li data-flyout-selected-option data-filter-id="<%- id %>" data-filter-group-id="<%- groupId %>">
                                <label class="filter-flyout-selected-option button-tertiary" title="<%- label %>">
                                    <span class="icon-close-blue" data-grunticon-embed>
                                        <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48"><symbol id="e" viewBox="0 -48 48 48" fill="#3888C5"><path fill="none" d="M0 0v-48h48V0z"></path></symbol><symbol id="f" viewBox="-0.0002 -48 48.0002 48.0002" fill="#3888C5"><defs fill="#3888C5"><path id="a" d="M48-48H0V0h48z" fill="#3888C5"></path></defs><clipPath id="b" fill="#3888C5"><use href="#a" overflow="visible" fill="#3888C5"></use><g clip-path="url(#b)" fill="#3888C5"><g fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"><path d="M2-48V0M4-48V0M6-48V0M8-48V0M10-48V0M12-48V0M14-48V0M16-48V0M18-48V0M20-48V0M22-48V0M24-48V0M26-48V0M28-48V0M30-48V0M32-48V0M34-48V0M36-48V0M38-48V0M40-48V0M42-48V0M44-48V0M46-48V0" fill="#3888C5"></path></g><g fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"><path d="M0-2h48M0-4h48M0-6h48M0-8h48M0-10h48M0-12h48M0-14h48M0-16h48M0-18h48M0-20h48M0-22h48M0-24h48M0-26h48M0-28h48M0-30h48M0-32h48M0-34h48M0-36h48M0-38h48M0-40h48M0-42h48M0-44h48M0-46h48" fill="#3888C5"></path></g><path d="M47.75-.25v-47.5H.25v47.5h47.5M48 0H0v-48h48V0z" fill="#3888C5"></path></g></clipPath></symbol><symbol id="g" viewBox="-0.0002 -48.0001 48.0002 48.0001" fill="#3888C5"><g opacity=".4" fill="#3888C5"><defs fill="#3888C5"><path id="c" opacity=".4" d="M0-48V0h48v-48z" fill="#3888C5"></path></defs><clipPath id="d" fill="#3888C5"><use href="#c" overflow="visible" fill="#3888C5"></use><path clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10" d="M24 0v-48M48-24H0M48-16H0M48-32H0M32-48V0M16-48V0M47.75-.25L.25-47.75M.25-.25l47.5-47.5M24-14c-5.522 0-10-4.477-10-10 0-5.522 4.478-10 10-10 5.523 0 10 4.478 10 10 0 5.523-4.477 10-10 10z"></path><path d="M24-4C12.946-4 4-12.947 4-24s8.946-20 20-20c11.053 0 20 8.947 20 20S35.052-4 24-4z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><path d="M40-42H8c-1.1 0-2 .9-2 2v32c0 1.1.9 2 2 2h32c1.1 0 2-.9 2-2v-32c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><path d="M38-44H10c-1.1 0-2 .9-2 2v36c0 1.1.9 2 2 2h28c1.1 0 2-.9 2-2v-36c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><g clip-path="url(#d)" fill="#3888C5"><path d="M47.75-.25v-47.5H.25v47.5h47.5M48 0H0v-48h48V0z" fill="#3888C5"></path></g><path d="M42-40H6c-1.1 0-2 .9-2 2v28c0 1.1.9 2 2 2h36c1.1 0 2-.9 2-2v-28c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path></clipPath></g></symbol><path d="M26.122 24l10.606-10.607a1.505 1.505 0 0 0 0-2.12 1.504 1.504 0 0 0-2.121 0L24 21.878 13.394 11.272c-.583-.583-1.538-.583-2.121 0s-.584 1.538 0 2.121L21.879 24 11.272 34.607c-.583.583-.583 1.538 0 2.12s1.539.584 2.122 0L24 26.122l10.607 10.607a1.504 1.504 0 0 0 2.121 0 1.505 1.505 0 0 0 0-2.121L26.122 24z" fill="#3888C5"></path></svg>
                                    </span> <%- label %>
                                </label>
                            </li>
                            </script>
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
                                        <input class="custom-radio" data-instant-search-handle="" data-radio-group-input="" data-radio-group-option-name="Resale" id="BouwvormId-BestaandeBouw" name="filter_BouwvormId" type="radio" value="bestaande bouw"> <label class="radio-group-item-label label-text" for="BouwvormId-BestaandeBouw"><span>Resale</span> <span class="radio-group-item-count fd-color-light-1" data-instant-search-count="BouwvormId-BestaandeBouw">34,528</span> <span class="a11y-sr-only">Results</span></label>
                                    </div><label class="radio-group-item-remove radio-group-row" for="BouwvormId-geen" title="Resale"><span class="icon-close-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Remove</span> <span>Resale</span></label>
                                </li>
                                <li class="radio-group-item" data-radio-group-item="">
                                    <div class="radio-group-item-input radio-group-row">
                                        <input class="custom-radio" data-instant-search-handle="" data-radio-group-input="" data-radio-group-option-name="New" id="BouwvormId-Nieuwbouw" name="filter_BouwvormId" type="radio" value="nieuwbouw"> <label class="radio-group-item-label label-text" for="BouwvormId-Nieuwbouw"><span>New</span> <span class="radio-group-item-count fd-color-light-1" data-instant-search-count="BouwvormId-Nieuwbouw">14,693</span> <span class="a11y-sr-only">Results</span></label>
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
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Garage"><input class="custom-checkbox" data-filter-group-id="SoortGarage" data-filter-group-name="Type of garage" data-flyout-item="" data-instant-search-handle="" id="SoortGarage-Garage" name="filter_SoortGarage" type="checkbox" value="elke-soort-garage"> <label class="label-text filter-flyout-option-label" for="SoortGarage-Garage">Garage</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortGarage-Garage">14,313 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Lean-to"><input class="custom-checkbox" data-filter-flyout-add-groupname-to-filter="" data-filter-group-id="SoortGarage" data-filter-group-name="Type of garage" data-flyout-item="" data-instant-search-handle="" id="SoortGarage-AangebouwdeGarage" name="filter_SoortGarage" type="checkbox" value="aangebouwd"> <label class="label-text filter-flyout-option-label" for="SoortGarage-AangebouwdeGarage">Lean-to</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortGarage-AangebouwdeGarage">4,421 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Lock-up garage"><input class="custom-checkbox" data-filter-group-id="SoortGarage" data-filter-group-name="Type of garage" data-flyout-item="" data-instant-search-handle="" id="SoortGarage-Garagebox" name="filter_SoortGarage" type="checkbox" value="garagebox"> <label class="label-text filter-flyout-option-label" for="SoortGarage-Garagebox">Lock-up garage</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortGarage-Garagebox">523 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Garage + Carport"><input class="custom-checkbox" data-filter-group-id="SoortGarage" data-filter-group-name="Type of garage" data-flyout-item="" data-instant-search-handle="" id="SoortGarage-GarageCarport" name="filter_SoortGarage" type="checkbox" value="garagemetcarport"> <label class="label-text filter-flyout-option-label" for="SoortGarage-GarageCarport">Garage + Carport</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortGarage-GarageCarport">236 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Built-in"><input class="custom-checkbox" data-filter-flyout-add-groupname-to-filter="" data-filter-group-id="SoortGarage" data-filter-group-name="Type of garage" data-flyout-item="" data-instant-search-handle="" id="SoortGarage-InpandigeGarage" name="filter_SoortGarage" type="checkbox" value="inpandig"> <label class="label-text filter-flyout-option-label" for="SoortGarage-InpandigeGarage">Built-in</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortGarage-InpandigeGarage">3,019 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Underground car park"><input class="custom-checkbox" data-filter-group-id="SoortGarage" data-filter-group-name="Type of garage" data-flyout-item="" data-instant-search-handle="" id="SoortGarage-Parkeerkelder" name="filter_SoortGarage" type="checkbox" value="parkeerkelder"> <label class="label-text filter-flyout-option-label" for="SoortGarage-Parkeerkelder">Underground car park</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortGarage-Parkeerkelder">2,800 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Basement"><input class="custom-checkbox" data-filter-flyout-add-groupname-to-filter="" data-filter-group-id="SoortGarage" data-filter-group-name="Type of garage" data-flyout-item="" data-instant-search-handle="" id="SoortGarage-GarageSouterrain" name="filter_SoortGarage" type="checkbox" value="souterrain"> <label class="label-text filter-flyout-option-label" for="SoortGarage-GarageSouterrain">Basement</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortGarage-GarageSouterrain">121 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Detached"><input class="custom-checkbox" data-filter-flyout-add-groupname-to-filter="" data-filter-group-id="SoortGarage" data-filter-group-name="Type of garage" data-flyout-item="" data-instant-search-handle="" id="SoortGarage-VrijstaandeGarage" name="filter_SoortGarage" type="checkbox" value="vrijstaand"> <label class="label-text filter-flyout-option-label" for="SoortGarage-VrijstaandeGarage">Detached</label> <span class="filter-flyout-option-count" data-instant-search-count="SoortGarage-VrijstaandeGarage">4,076 <span class="a11y-sr-only">Results</span></span></li>
                                    </ul>
                                </fieldset>
                                <fieldset class="filter-flyout-fieldset">
                                    <legend>Capacity</legend>
                                    <ul class="filter-flyout-options">
                                        <li class="filter-flyout-option-default filter-flyout-option"><input checked class="custom-radio" data-instant-search-handle="" id="AutoCapaciteitGarage-geen" name="filter_AutoCapaciteitGarage" type="radio" value=""> <label class="label-text" for="AutoCapaciteitGarage-geen">Remove filter</label></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="1 car"><input class="custom-radio" data-filter-group-id="AutoCapaciteitGarage" data-filter-group-name="Capacity" data-flyout-item="" data-instant-search-handle="" id="AutoCapaciteitGarage-1" name="filter_AutoCapaciteitGarage" type="radio" value="1,1"> <label class="label-text filter-flyout-option-label" for="AutoCapaciteitGarage-1">1 car</label> <span class="filter-flyout-option-count" data-instant-search-count="AutoCapaciteitGarage-1">9,278 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="2+ car"><input class="custom-radio" data-filter-group-id="AutoCapaciteitGarage" data-filter-group-name="Capacity" data-flyout-item="" data-instant-search-handle="" id="AutoCapaciteitGarage-2" name="filter_AutoCapaciteitGarage" type="radio" value="2"> <label class="label-text filter-flyout-option-label" for="AutoCapaciteitGarage-2">2+ car</label> <span class="filter-flyout-option-count" data-instant-search-count="AutoCapaciteitGarage-2">2,509 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="3+ car"><input class="custom-radio" data-filter-group-id="AutoCapaciteitGarage" data-filter-group-name="Capacity" data-flyout-item="" data-instant-search-handle="" id="AutoCapaciteitGarage-3" name="filter_AutoCapaciteitGarage" type="radio" value="3"> <label class="label-text filter-flyout-option-label" for="AutoCapaciteitGarage-3">3+ car</label> <span class="filter-flyout-option-count" data-instant-search-count="AutoCapaciteitGarage-3">811 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="4+ car"><input class="custom-radio" data-filter-group-id="AutoCapaciteitGarage" data-filter-group-name="Capacity" data-flyout-item="" data-instant-search-handle="" id="AutoCapaciteitGarage-4" name="filter_AutoCapaciteitGarage" type="radio" value="4"> <label class="label-text filter-flyout-option-label" for="AutoCapaciteitGarage-4">4+ car</label> <span class="filter-flyout-option-count" data-instant-search-count="AutoCapaciteitGarage-4">541 <span class="a11y-sr-only">Results</span></span></li>
                                    </ul>
                                </fieldset>
                            </div>
                            <ul class="filter-flyout-selected-options" data-flyout-selected-options=""></ul>
                            <script data-filter-flyout-selected-option-template="" type="template/html">
                            <li data-flyout-selected-option data-filter-id="<%- id %>" data-filter-group-id="<%- groupId %>">
                                <label class="filter-flyout-selected-option button-tertiary" title="<%- label %>">
                                    <span class="icon-close-blue" data-grunticon-embed>
                                        <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48"><symbol id="e" viewBox="0 -48 48 48" fill="#3888C5"><path fill="none" d="M0 0v-48h48V0z"></path></symbol><symbol id="f" viewBox="-0.0002 -48 48.0002 48.0002" fill="#3888C5"><defs fill="#3888C5"><path id="a" d="M48-48H0V0h48z" fill="#3888C5"></path></defs><clipPath id="b" fill="#3888C5"><use href="#a" overflow="visible" fill="#3888C5"></use><g clip-path="url(#b)" fill="#3888C5"><g fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"><path d="M2-48V0M4-48V0M6-48V0M8-48V0M10-48V0M12-48V0M14-48V0M16-48V0M18-48V0M20-48V0M22-48V0M24-48V0M26-48V0M28-48V0M30-48V0M32-48V0M34-48V0M36-48V0M38-48V0M40-48V0M42-48V0M44-48V0M46-48V0" fill="#3888C5"></path></g><g fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"><path d="M0-2h48M0-4h48M0-6h48M0-8h48M0-10h48M0-12h48M0-14h48M0-16h48M0-18h48M0-20h48M0-22h48M0-24h48M0-26h48M0-28h48M0-30h48M0-32h48M0-34h48M0-36h48M0-38h48M0-40h48M0-42h48M0-44h48M0-46h48" fill="#3888C5"></path></g><path d="M47.75-.25v-47.5H.25v47.5h47.5M48 0H0v-48h48V0z" fill="#3888C5"></path></g></clipPath></symbol><symbol id="g" viewBox="-0.0002 -48.0001 48.0002 48.0001" fill="#3888C5"><g opacity=".4" fill="#3888C5"><defs fill="#3888C5"><path id="c" opacity=".4" d="M0-48V0h48v-48z" fill="#3888C5"></path></defs><clipPath id="d" fill="#3888C5"><use href="#c" overflow="visible" fill="#3888C5"></use><path clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10" d="M24 0v-48M48-24H0M48-16H0M48-32H0M32-48V0M16-48V0M47.75-.25L.25-47.75M.25-.25l47.5-47.5M24-14c-5.522 0-10-4.477-10-10 0-5.522 4.478-10 10-10 5.523 0 10 4.478 10 10 0 5.523-4.477 10-10 10z"></path><path d="M24-4C12.946-4 4-12.947 4-24s8.946-20 20-20c11.053 0 20 8.947 20 20S35.052-4 24-4z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><path d="M40-42H8c-1.1 0-2 .9-2 2v32c0 1.1.9 2 2 2h32c1.1 0 2-.9 2-2v-32c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><path d="M38-44H10c-1.1 0-2 .9-2 2v36c0 1.1.9 2 2 2h28c1.1 0 2-.9 2-2v-36c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><g clip-path="url(#d)" fill="#3888C5"><path d="M47.75-.25v-47.5H.25v47.5h47.5M48 0H0v-48h48V0z" fill="#3888C5"></path></g><path d="M42-40H6c-1.1 0-2 .9-2 2v28c0 1.1.9 2 2 2h36c1.1 0 2-.9 2-2v-28c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path></clipPath></g></symbol><path d="M26.122 24l10.606-10.607a1.505 1.505 0 0 0 0-2.12 1.504 1.504 0 0 0-2.121 0L24 21.878 13.394 11.272c-.583-.583-1.538-.583-2.121 0s-.584 1.538 0 2.121L21.879 24 11.272 34.607c-.583.583-.583 1.538 0 2.12s1.539.584 2.122 0L24 26.122l10.607 10.607a1.504 1.504 0 0 0 2.121 0 1.505 1.505 0 0 0 0-2.121L26.122 24z" fill="#3888C5"></path></svg>
                                    </span> <%- label %>
                                </label>
                            </li>
                            </script>
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
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Bathtub" data-filter-visibility-target="AanwezigheidVan-LigZitbad"><input class="custom-checkbox" data-filter-group-id="AanwezigheidVan" data-filter-group-name="Comes with" data-flyout-item="" data-instant-search-handle="" id="AanwezigheidVan-LigZitbad" name="filter_AanwezigheidVan" type="checkbox" value="zit/ligbad"> <label class="label-text filter-flyout-option-label" for="AanwezigheidVan-LigZitbad">Bathtub</label> <span class="filter-flyout-option-count" data-instant-search-count="AanwezigheidVan-LigZitbad">15,815 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Central heating boiler" data-filter-visibility-target="AanwezigheidVan-CvKetel"><input class="custom-checkbox" data-filter-group-id="AanwezigheidVan" data-filter-group-name="Comes with" data-flyout-item="" data-instant-search-handle="" id="AanwezigheidVan-CvKetel" name="filter_AanwezigheidVan" type="checkbox" value="c.v.-ketel"> <label class="label-text filter-flyout-option-label" for="AanwezigheidVan-CvKetel">Central heating boiler</label> <span class="filter-flyout-option-count" data-instant-search-count="AanwezigheidVan-CvKetel">27,659 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Commercial space"><input class="custom-checkbox" data-filter-group-id="AanwezigheidVan" data-filter-group-name="Comes with" data-flyout-item="" data-instant-search-handle="" id="AanwezigheidVan-Bedrijfsruimte" name="filter_AanwezigheidVan" type="checkbox" value="bedrijfsruimte"> <label class="label-text filter-flyout-option-label" for="AanwezigheidVan-Bedrijfsruimte">Commercial space</label> <span class="filter-flyout-option-count" data-instant-search-count="AanwezigheidVan-Bedrijfsruimte">361 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option is-disabled" data-filter-flyout-option-label="Electric door" data-filter-visibility-target="AanwezigheidVan-MetElektrischeDeur"><input class="custom-checkbox" data-filter-group-id="AanwezigheidVan" data-filter-group-name="Comes with" data-flyout-item="" data-instant-search-handle="" id="AanwezigheidVan-MetElektrischeDeur" name="filter_AanwezigheidVan" type="checkbox" value="met elektrische deur"> <label class="label-text filter-flyout-option-label" for="AanwezigheidVan-MetElektrischeDeur">Electric door</label> <span class="filter-flyout-option-count" data-instant-search-count="AanwezigheidVan-MetElektrischeDeur">45 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option is-disabled" data-filter-flyout-option-label="Electricity" data-filter-visibility-target="AanwezigheidVan-VoorzienVanElektra"><input class="custom-checkbox" data-filter-group-id="AanwezigheidVan" data-filter-group-name="Comes with" data-flyout-item="" data-instant-search-handle="" id="AanwezigheidVan-VoorzienVanElektra" name="filter_AanwezigheidVan" type="checkbox" value="voorzien van elektra"> <label class="label-text filter-flyout-option-label" for="AanwezigheidVan-VoorzienVanElektra">Electricity</label> <span class="filter-flyout-option-count" data-instant-search-count="AanwezigheidVan-VoorzienVanElektra">75 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Elevator" data-filter-visibility-target="AanwezigheidVan-Lift"><input class="custom-checkbox" data-filter-group-id="AanwezigheidVan" data-filter-group-name="Comes with" data-flyout-item="" data-instant-search-handle="" id="AanwezigheidVan-Lift" name="filter_AanwezigheidVan" type="checkbox" value="lift"> <label class="label-text filter-flyout-option-label" for="AanwezigheidVan-Lift">Elevator</label> <span class="filter-flyout-option-count" data-instant-search-count="AanwezigheidVan-Lift">6,150 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Fixer-upper" data-filter-visibility-target="AanwezigheidVan-Kluswoning"><input class="custom-checkbox" data-filter-group-id="AanwezigheidVan" data-filter-group-name="Comes with" data-flyout-item="" data-instant-search-handle="" id="AanwezigheidVan-Kluswoning" name="filter_AanwezigheidVan" type="checkbox" value="kluswoning"> <label class="label-text filter-flyout-option-label" for="AanwezigheidVan-Kluswoning">Fixer-upper</label> <span class="filter-flyout-option-count" data-instant-search-count="AanwezigheidVan-Kluswoning">592 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option is-disabled" data-filter-flyout-option-label="Heating" data-filter-visibility-target="AanwezigheidVan-VoorzienVanVerwarming"><input class="custom-checkbox" data-filter-group-id="AanwezigheidVan" data-filter-group-name="Comes with" data-flyout-item="" data-instant-search-handle="" id="AanwezigheidVan-VoorzienVanVerwarming" name="filter_AanwezigheidVan" type="checkbox" value="voorzien van verwarming"> <label class="label-text filter-flyout-option-label" for="AanwezigheidVan-VoorzienVanVerwarming">Heating</label> <span class="filter-flyout-option-count" data-instant-search-count="AanwezigheidVan-VoorzienVanVerwarming">12 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Jacuzzi" data-filter-visibility-target="AanwezigheidVan-Jacuzzi"><input class="custom-checkbox" data-filter-group-id="AanwezigheidVan" data-filter-group-name="Comes with" data-flyout-item="" data-instant-search-handle="" id="AanwezigheidVan-Jacuzzi" name="filter_AanwezigheidVan" type="checkbox" value="jacuzzi"> <label class="label-text filter-flyout-option-label" for="AanwezigheidVan-Jacuzzi">Jacuzzi</label> <span class="filter-flyout-option-count" data-instant-search-count="AanwezigheidVan-Jacuzzi">493 <span class="a11y-sr-only">Results</span></span></li>
                                    </ul>
                                    <ul class="filter-flyout-options">
                                        <li class="filter-flyout-option is-disabled" data-filter-flyout-option-label="Loft" data-filter-visibility-target="AanwezigheidVan-MetVliering"><input class="custom-checkbox" data-filter-group-id="AanwezigheidVan" data-filter-group-name="Comes with" data-flyout-item="" data-instant-search-handle="" id="AanwezigheidVan-MetVliering" name="filter_AanwezigheidVan" type="checkbox" value="met vliering"> <label class="label-text filter-flyout-option-label" for="AanwezigheidVan-MetVliering">Loft</label> <span class="filter-flyout-option-count" data-instant-search-count="AanwezigheidVan-MetVliering">4 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Monumental building" data-filter-visibility-target="AanwezigheidVan-MonumentaalPand"><input class="custom-checkbox" data-filter-group-id="AanwezigheidVan" data-filter-group-name="Comes with" data-flyout-item="" data-instant-search-handle="" id="AanwezigheidVan-MonumentaalPand" name="filter_AanwezigheidVan" type="checkbox" value="monumentaal pand"> <label class="label-text filter-flyout-option-label" for="AanwezigheidVan-MonumentaalPand">Monumental building</label> <span class="filter-flyout-option-count" data-instant-search-count="AanwezigheidVan-MonumentaalPand">1,231 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Open fireplace" data-filter-visibility-target="AanwezigheidVan-OpenHaard"><input class="custom-checkbox" data-filter-group-id="AanwezigheidVan" data-filter-group-name="Comes with" data-flyout-item="" data-instant-search-handle="" id="AanwezigheidVan-OpenHaard" name="filter_AanwezigheidVan" type="checkbox" value="open haard"> <label class="label-text filter-flyout-option-label" for="AanwezigheidVan-OpenHaard">Open fireplace</label> <span class="filter-flyout-option-count" data-instant-search-count="AanwezigheidVan-OpenHaard">1,477 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Renewable energy" data-filter-visibility-target="AanwezigheidVan-DuurzameEnergie"><input class="custom-checkbox" data-filter-group-id="AanwezigheidVan" data-filter-group-name="Comes with" data-flyout-item="" data-instant-search-handle="" id="AanwezigheidVan-DuurzameEnergie" name="filter_AanwezigheidVan" type="checkbox" value="DuurzameEnergie"> <label class="label-text filter-flyout-option-label" for="AanwezigheidVan-DuurzameEnergie">Renewable energy</label> <span class="filter-flyout-option-count" data-instant-search-count="AanwezigheidVan-DuurzameEnergie">9,454 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option is-disabled" data-filter-flyout-option-label="Running water" data-filter-visibility-target="AanwezigheidVan-VoorzienVanWater"><input class="custom-checkbox" data-filter-group-id="AanwezigheidVan" data-filter-group-name="Comes with" data-flyout-item="" data-instant-search-handle="" id="AanwezigheidVan-VoorzienVanWater" name="filter_AanwezigheidVan" type="checkbox" value="voorzien van water"> <label class="label-text filter-flyout-option-label" for="AanwezigheidVan-VoorzienVanWater">Running water</label> <span class="filter-flyout-option-count" data-instant-search-count="AanwezigheidVan-VoorzienVanWater">30 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Sauna" data-filter-visibility-target="AanwezigheidVan-Sauna"><input class="custom-checkbox" data-filter-group-id="AanwezigheidVan" data-filter-group-name="Comes with" data-flyout-item="" data-instant-search-handle="" id="AanwezigheidVan-Sauna" name="filter_AanwezigheidVan" type="checkbox" value="sauna"> <label class="label-text filter-flyout-option-label" for="AanwezigheidVan-Sauna">Sauna</label> <span class="filter-flyout-option-count" data-instant-search-count="AanwezigheidVan-Sauna">594 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Shed/storage" data-filter-visibility-target="AanwezigheidVan-SchuurBerging"><input class="custom-checkbox" data-filter-group-id="AanwezigheidVan" data-filter-group-name="Comes with" data-flyout-item="" data-instant-search-handle="" id="AanwezigheidVan-SchuurBerging" name="filter_AanwezigheidVan" type="checkbox" value="berging"> <label class="label-text filter-flyout-option-label" for="AanwezigheidVan-SchuurBerging">Shed/storage</label> <span class="filter-flyout-option-count" data-instant-search-count="AanwezigheidVan-SchuurBerging">31,047 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Steam cabin" data-filter-visibility-target="AanwezigheidVan-Stoomcabine"><input class="custom-checkbox" data-filter-group-id="AanwezigheidVan" data-filter-group-name="Comes with" data-flyout-item="" data-instant-search-handle="" id="AanwezigheidVan-Stoomcabine" name="filter_AanwezigheidVan" type="checkbox" value="stoomcabine"> <label class="label-text filter-flyout-option-label" for="AanwezigheidVan-Stoomcabine">Steam cabin</label> <span class="filter-flyout-option-count" data-instant-search-count="AanwezigheidVan-Stoomcabine">360 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Swimming pool" data-filter-visibility-target="AanwezigheidVan-Zwembad"><input class="custom-checkbox" data-filter-group-id="AanwezigheidVan" data-filter-group-name="Comes with" data-flyout-item="" data-instant-search-handle="" id="AanwezigheidVan-Zwembad" name="filter_AanwezigheidVan" type="checkbox" value="zwembad"> <label class="label-text filter-flyout-option-label" for="AanwezigheidVan-Zwembad">Swimming pool</label> <span class="filter-flyout-option-count" data-instant-search-count="AanwezigheidVan-Zwembad">539 <span class="a11y-sr-only">Results</span></span></li>
                                    </ul>
                                </fieldset>
                            </div>
                            <ul class="filter-flyout-selected-options" data-flyout-selected-options=""></ul>
                            <script data-filter-flyout-selected-option-template="" type="template/html">
                            <li data-flyout-selected-option data-filter-id="<%- id %>" data-filter-group-id="<%- groupId %>">
                                <label class="filter-flyout-selected-option button-tertiary" title="<%- label %>">
                                    <span class="icon-close-blue" data-grunticon-embed>
                                        <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48"><symbol id="e" viewBox="0 -48 48 48" fill="#3888C5"><path fill="none" d="M0 0v-48h48V0z"></path></symbol><symbol id="f" viewBox="-0.0002 -48 48.0002 48.0002" fill="#3888C5"><defs fill="#3888C5"><path id="a" d="M48-48H0V0h48z" fill="#3888C5"></path></defs><clipPath id="b" fill="#3888C5"><use href="#a" overflow="visible" fill="#3888C5"></use><g clip-path="url(#b)" fill="#3888C5"><g fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"><path d="M2-48V0M4-48V0M6-48V0M8-48V0M10-48V0M12-48V0M14-48V0M16-48V0M18-48V0M20-48V0M22-48V0M24-48V0M26-48V0M28-48V0M30-48V0M32-48V0M34-48V0M36-48V0M38-48V0M40-48V0M42-48V0M44-48V0M46-48V0" fill="#3888C5"></path></g><g fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"><path d="M0-2h48M0-4h48M0-6h48M0-8h48M0-10h48M0-12h48M0-14h48M0-16h48M0-18h48M0-20h48M0-22h48M0-24h48M0-26h48M0-28h48M0-30h48M0-32h48M0-34h48M0-36h48M0-38h48M0-40h48M0-42h48M0-44h48M0-46h48" fill="#3888C5"></path></g><path d="M47.75-.25v-47.5H.25v47.5h47.5M48 0H0v-48h48V0z" fill="#3888C5"></path></g></clipPath></symbol><symbol id="g" viewBox="-0.0002 -48.0001 48.0002 48.0001" fill="#3888C5"><g opacity=".4" fill="#3888C5"><defs fill="#3888C5"><path id="c" opacity=".4" d="M0-48V0h48v-48z" fill="#3888C5"></path></defs><clipPath id="d" fill="#3888C5"><use href="#c" overflow="visible" fill="#3888C5"></use><path clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10" d="M24 0v-48M48-24H0M48-16H0M48-32H0M32-48V0M16-48V0M47.75-.25L.25-47.75M.25-.25l47.5-47.5M24-14c-5.522 0-10-4.477-10-10 0-5.522 4.478-10 10-10 5.523 0 10 4.478 10 10 0 5.523-4.477 10-10 10z"></path><path d="M24-4C12.946-4 4-12.947 4-24s8.946-20 20-20c11.053 0 20 8.947 20 20S35.052-4 24-4z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><path d="M40-42H8c-1.1 0-2 .9-2 2v32c0 1.1.9 2 2 2h32c1.1 0 2-.9 2-2v-32c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><path d="M38-44H10c-1.1 0-2 .9-2 2v36c0 1.1.9 2 2 2h28c1.1 0 2-.9 2-2v-36c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><g clip-path="url(#d)" fill="#3888C5"><path d="M47.75-.25v-47.5H.25v47.5h47.5M48 0H0v-48h48V0z" fill="#3888C5"></path></g><path d="M42-40H6c-1.1 0-2 .9-2 2v28c0 1.1.9 2 2 2h36c1.1 0 2-.9 2-2v-28c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path></clipPath></g></symbol><path d="M26.122 24l10.606-10.607a1.505 1.505 0 0 0 0-2.12 1.504 1.504 0 0 0-2.121 0L24 21.878 13.394 11.272c-.583-.583-1.538-.583-2.121 0s-.584 1.538 0 2.121L21.879 24 11.272 34.607c-.583.583-.583 1.538 0 2.12s1.539.584 2.122 0L24 26.122l10.607 10.607a1.504 1.504 0 0 0 2.121 0 1.505 1.505 0 0 0 0-2.121L26.122 24z" fill="#3888C5"></path></svg>
                                    </span> <%- label %>
                                </label>
                            </li>
                            </script>
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
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Adapted home"><input class="custom-checkbox" data-filter-group-id="Toegankelijkheid" data-filter-group-name="Accessibility" data-flyout-item="" data-instant-search-handle="" id="Toegankelijkheid-AangepasteWoning" name="filter_Toegankelijkheid" type="checkbox" value="aangepastewoning"> <label class="label-text filter-flyout-option-label" for="Toegankelijkheid-AangepasteWoning">Adapted home</label> <span class="filter-flyout-option-count" data-instant-search-count="Toegankelijkheid-AangepasteWoning">57 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Disabled home"><input class="custom-checkbox" data-filter-group-id="Toegankelijkheid" data-filter-group-name="Accessibility" data-flyout-item="" data-instant-search-handle="" id="Toegankelijkheid-Gehandicaptenwoning" name="filter_Toegankelijkheid" type="checkbox" value="gehandicaptenwoning"> <label class="label-text filter-flyout-option-label" for="Toegankelijkheid-Gehandicaptenwoning">Disabled home</label> <span class="filter-flyout-option-count" data-instant-search-count="Toegankelijkheid-Gehandicaptenwoning">1,491 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Elderly home"><input class="custom-checkbox" data-filter-group-id="Toegankelijkheid" data-filter-group-name="Accessibility" data-flyout-item="" data-instant-search-handle="" id="Toegankelijkheid-Seniorenwoning" name="filter_Toegankelijkheid" type="checkbox" value="seniorenwoning"> <label class="label-text filter-flyout-option-label" for="Toegankelijkheid-Seniorenwoning">Elderly home</label> <span class="filter-flyout-option-count" data-instant-search-count="Toegankelijkheid-Seniorenwoning">1,973 <span class="a11y-sr-only">Results</span></span></li>
                                    </ul>
                                </fieldset>
                            </div>
                            <ul class="filter-flyout-selected-options" data-flyout-selected-options=""></ul>
                            <script data-filter-flyout-selected-option-template="" type="template/html">
                            <li data-flyout-selected-option data-filter-id="<%- id %>" data-filter-group-id="<%- groupId %>">
                                <label class="filter-flyout-selected-option button-tertiary" title="<%- label %>">
                                    <span class="icon-close-blue" data-grunticon-embed>
                                        <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48"><symbol id="e" viewBox="0 -48 48 48" fill="#3888C5"><path fill="none" d="M0 0v-48h48V0z"></path></symbol><symbol id="f" viewBox="-0.0002 -48 48.0002 48.0002" fill="#3888C5"><defs fill="#3888C5"><path id="a" d="M48-48H0V0h48z" fill="#3888C5"></path></defs><clipPath id="b" fill="#3888C5"><use href="#a" overflow="visible" fill="#3888C5"></use><g clip-path="url(#b)" fill="#3888C5"><g fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"><path d="M2-48V0M4-48V0M6-48V0M8-48V0M10-48V0M12-48V0M14-48V0M16-48V0M18-48V0M20-48V0M22-48V0M24-48V0M26-48V0M28-48V0M30-48V0M32-48V0M34-48V0M36-48V0M38-48V0M40-48V0M42-48V0M44-48V0M46-48V0" fill="#3888C5"></path></g><g fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"><path d="M0-2h48M0-4h48M0-6h48M0-8h48M0-10h48M0-12h48M0-14h48M0-16h48M0-18h48M0-20h48M0-22h48M0-24h48M0-26h48M0-28h48M0-30h48M0-32h48M0-34h48M0-36h48M0-38h48M0-40h48M0-42h48M0-44h48M0-46h48" fill="#3888C5"></path></g><path d="M47.75-.25v-47.5H.25v47.5h47.5M48 0H0v-48h48V0z" fill="#3888C5"></path></g></clipPath></symbol><symbol id="g" viewBox="-0.0002 -48.0001 48.0002 48.0001" fill="#3888C5"><g opacity=".4" fill="#3888C5"><defs fill="#3888C5"><path id="c" opacity=".4" d="M0-48V0h48v-48z" fill="#3888C5"></path></defs><clipPath id="d" fill="#3888C5"><use href="#c" overflow="visible" fill="#3888C5"></use><path clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10" d="M24 0v-48M48-24H0M48-16H0M48-32H0M32-48V0M16-48V0M47.75-.25L.25-47.75M.25-.25l47.5-47.5M24-14c-5.522 0-10-4.477-10-10 0-5.522 4.478-10 10-10 5.523 0 10 4.478 10 10 0 5.523-4.477 10-10 10z"></path><path d="M24-4C12.946-4 4-12.947 4-24s8.946-20 20-20c11.053 0 20 8.947 20 20S35.052-4 24-4z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><path d="M40-42H8c-1.1 0-2 .9-2 2v32c0 1.1.9 2 2 2h32c1.1 0 2-.9 2-2v-32c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><path d="M38-44H10c-1.1 0-2 .9-2 2v36c0 1.1.9 2 2 2h28c1.1 0 2-.9 2-2v-36c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><g clip-path="url(#d)" fill="#3888C5"><path d="M47.75-.25v-47.5H.25v47.5h47.5M48 0H0v-48h48V0z" fill="#3888C5"></path></g><path d="M42-40H6c-1.1 0-2 .9-2 2v28c0 1.1.9 2 2 2h36c1.1 0 2-.9 2-2v-28c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path></clipPath></g></symbol><path d="M26.122 24l10.606-10.607a1.505 1.505 0 0 0 0-2.12 1.504 1.504 0 0 0-2.121 0L24 21.878 13.394 11.272c-.583-.583-1.538-.583-2.121 0s-.584 1.538 0 2.121L21.879 24 11.272 34.607c-.583.583-.583 1.538 0 2.12s1.539.584 2.122 0L24 26.122l10.607 10.607a1.504 1.504 0 0 0 2.121 0 1.505 1.505 0 0 0 0-2.121L26.122 24z" fill="#3888C5"></path></svg>
                                    </span> <%- label %>
                                </label>
                            </li>
                            </script>
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
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="A-label"><input class="custom-checkbox" data-filter-group-id="Energielabel" data-filter-group-name="Energy label" data-flyout-item="" data-instant-search-handle="" id="Energielabel-EnergielabelA" name="filter_Energielabel" type="checkbox" value="A"> <label class="label-text filter-flyout-option-label" for="Energielabel-EnergielabelA">A-label</label> <span class="filter-flyout-option-count" data-instant-search-count="Energielabel-EnergielabelA">6,539 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="B-label"><input class="custom-checkbox" data-filter-group-id="Energielabel" data-filter-group-name="Energy label" data-flyout-item="" data-instant-search-handle="" id="Energielabel-EnergielabelB" name="filter_Energielabel" type="checkbox" value="B"> <label class="label-text filter-flyout-option-label" for="Energielabel-EnergielabelB">B-label</label> <span class="filter-flyout-option-count" data-instant-search-count="Energielabel-EnergielabelB">3,206 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="C-label"><input class="custom-checkbox" data-filter-group-id="Energielabel" data-filter-group-name="Energy label" data-flyout-item="" data-instant-search-handle="" id="Energielabel-EnergielabelC" name="filter_Energielabel" type="checkbox" value="C"> <label class="label-text filter-flyout-option-label" for="Energielabel-EnergielabelC">C-label</label> <span class="filter-flyout-option-count" data-instant-search-count="Energielabel-EnergielabelC">5,245 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="D-label"><input class="custom-checkbox" data-filter-group-id="Energielabel" data-filter-group-name="Energy label" data-flyout-item="" data-instant-search-handle="" id="Energielabel-EnergielabelD" name="filter_Energielabel" type="checkbox" value="D"> <label class="label-text filter-flyout-option-label" for="Energielabel-EnergielabelD">D-label</label> <span class="filter-flyout-option-count" data-instant-search-count="Energielabel-EnergielabelD">2,673 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="E-label"><input class="custom-checkbox" data-filter-group-id="Energielabel" data-filter-group-name="Energy label" data-flyout-item="" data-instant-search-handle="" id="Energielabel-EnergielabelE" name="filter_Energielabel" type="checkbox" value="E"> <label class="label-text filter-flyout-option-label" for="Energielabel-EnergielabelE">E-label</label> <span class="filter-flyout-option-count" data-instant-search-count="Energielabel-EnergielabelE">1,881 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="F-label"><input class="custom-checkbox" data-filter-group-id="Energielabel" data-filter-group-name="Energy label" data-flyout-item="" data-instant-search-handle="" id="Energielabel-EnergielabelF" name="filter_Energielabel" type="checkbox" value="F"> <label class="label-text filter-flyout-option-label" for="Energielabel-EnergielabelF">F-label</label> <span class="filter-flyout-option-count" data-instant-search-count="Energielabel-EnergielabelF">1,219 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="G-label"><input class="custom-checkbox" data-filter-group-id="Energielabel" data-filter-group-name="Energy label" data-flyout-item="" data-instant-search-handle="" id="Energielabel-EnergielabelG" name="filter_Energielabel" type="checkbox" value="G"> <label class="label-text filter-flyout-option-label" for="Energielabel-EnergielabelG">G-label</label> <span class="filter-flyout-option-count" data-instant-search-count="Energielabel-EnergielabelG">1,141 <span class="a11y-sr-only">Results</span></span></li>
                                    </ul>
                                </fieldset>
                            </div>
                            <ul class="filter-flyout-selected-options" data-flyout-selected-options=""></ul>
                            <script data-filter-flyout-selected-option-template="" type="template/html">
                            <li data-flyout-selected-option data-filter-id="<%- id %>" data-filter-group-id="<%- groupId %>">
                                <label class="filter-flyout-selected-option button-tertiary" title="<%- label %>">
                                    <span class="icon-close-blue" data-grunticon-embed>
                                        <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48"><symbol id="e" viewBox="0 -48 48 48" fill="#3888C5"><path fill="none" d="M0 0v-48h48V0z"></path></symbol><symbol id="f" viewBox="-0.0002 -48 48.0002 48.0002" fill="#3888C5"><defs fill="#3888C5"><path id="a" d="M48-48H0V0h48z" fill="#3888C5"></path></defs><clipPath id="b" fill="#3888C5"><use href="#a" overflow="visible" fill="#3888C5"></use><g clip-path="url(#b)" fill="#3888C5"><g fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"><path d="M2-48V0M4-48V0M6-48V0M8-48V0M10-48V0M12-48V0M14-48V0M16-48V0M18-48V0M20-48V0M22-48V0M24-48V0M26-48V0M28-48V0M30-48V0M32-48V0M34-48V0M36-48V0M38-48V0M40-48V0M42-48V0M44-48V0M46-48V0" fill="#3888C5"></path></g><g fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"><path d="M0-2h48M0-4h48M0-6h48M0-8h48M0-10h48M0-12h48M0-14h48M0-16h48M0-18h48M0-20h48M0-22h48M0-24h48M0-26h48M0-28h48M0-30h48M0-32h48M0-34h48M0-36h48M0-38h48M0-40h48M0-42h48M0-44h48M0-46h48" fill="#3888C5"></path></g><path d="M47.75-.25v-47.5H.25v47.5h47.5M48 0H0v-48h48V0z" fill="#3888C5"></path></g></clipPath></symbol><symbol id="g" viewBox="-0.0002 -48.0001 48.0002 48.0001" fill="#3888C5"><g opacity=".4" fill="#3888C5"><defs fill="#3888C5"><path id="c" opacity=".4" d="M0-48V0h48v-48z" fill="#3888C5"></path></defs><clipPath id="d" fill="#3888C5"><use href="#c" overflow="visible" fill="#3888C5"></use><path clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10" d="M24 0v-48M48-24H0M48-16H0M48-32H0M32-48V0M16-48V0M47.75-.25L.25-47.75M.25-.25l47.5-47.5M24-14c-5.522 0-10-4.477-10-10 0-5.522 4.478-10 10-10 5.523 0 10 4.478 10 10 0 5.523-4.477 10-10 10z"></path><path d="M24-4C12.946-4 4-12.947 4-24s8.946-20 20-20c11.053 0 20 8.947 20 20S35.052-4 24-4z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><path d="M40-42H8c-1.1 0-2 .9-2 2v32c0 1.1.9 2 2 2h32c1.1 0 2-.9 2-2v-32c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><path d="M38-44H10c-1.1 0-2 .9-2 2v36c0 1.1.9 2 2 2h28c1.1 0 2-.9 2-2v-36c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><g clip-path="url(#d)" fill="#3888C5"><path d="M47.75-.25v-47.5H.25v47.5h47.5M48 0H0v-48h48V0z" fill="#3888C5"></path></g><path d="M42-40H6c-1.1 0-2 .9-2 2v28c0 1.1.9 2 2 2h36c1.1 0 2-.9 2-2v-28c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path></clipPath></g></symbol><path d="M26.122 24l10.606-10.607a1.505 1.505 0 0 0 0-2.12 1.504 1.504 0 0 0-2.121 0L24 21.878 13.394 11.272c-.583-.583-1.538-.583-2.121 0s-.584 1.538 0 2.121L21.879 24 11.272 34.607c-.583.583-.583 1.538 0 2.12s1.539.584 2.122 0L24 26.122l10.607 10.607a1.504 1.504 0 0 0 2.121 0 1.505 1.505 0 0 0 0-2.121L26.122 24z" fill="#3888C5"></path></svg>
                                    </span> <%- label %>
                                </label>
                            </li>
                            </script>
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
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Featured residential properties"><input class="custom-checkbox" data-filter-group-id="IndicatiePDF" data-filter-group-name="Highlighted" data-flyout-item="" data-instant-search-handle="" id="IndicatiePDF-Inbeeld" name="filter_IndicatiePDF" type="checkbox" value="Inbeeld"> <label class="label-text filter-flyout-option-label" for="IndicatiePDF-Inbeeld">Featured residential properties</label> <span class="filter-flyout-option-count" data-instant-search-count="IndicatiePDF-Inbeeld">125 <span class="a11y-sr-only">Results</span></span></li>
                                    </ul>
                                </fieldset>
                                <fieldset class="filter-flyout-fieldset">
                                    <legend>Open house</legend>
                                    <ul class="filter-flyout-options">
                                        <li class="filter-flyout-option-default filter-flyout-option"><input checked class="custom-radio" data-instant-search-handle="" id="OpenHuizen-geen" name="filter_OpenHuizen" type="radio" value=""> <label class="label-text" for="OpenHuizen-geen">Remove filter</label></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="All open houses"><input class="custom-radio" data-filter-group-id="OpenHuizen" data-filter-group-name="Open house" data-flyout-item="" data-instant-search-handle="" id="OpenHuizen-OpenHuis" name="filter_OpenHuizen" type="radio" value="OpenHuis"> <label class="label-text filter-flyout-option-label" for="OpenHuizen-OpenHuis">All open houses</label> <span class="filter-flyout-option-count" data-instant-search-count="OpenHuizen-OpenHuis">188 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Next weekend"><input class="custom-radio" data-filter-flyout-add-groupname-to-filter="" data-filter-flyout-add-groupname-to-label="" data-filter-group-id="OpenHuizen" data-filter-group-name="Open house" data-flyout-item="" data-instant-search-handle="" id="OpenHuizen-OpenHuisWeekend" name="filter_OpenHuizen" type="radio" value="OpenHuisWeekend"> <label class="label-text filter-flyout-option-label" for="OpenHuizen-OpenHuisWeekend">Next weekend</label> <span class="filter-flyout-option-count" data-instant-search-count="OpenHuizen-OpenHuisWeekend">95 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Today"><input class="custom-radio" data-filter-flyout-add-groupname-to-filter="" data-filter-flyout-add-groupname-to-label="" data-filter-group-id="OpenHuizen" data-filter-group-name="Open house" data-flyout-item="" data-instant-search-handle="" id="OpenHuizen-OpenHuisVandaag" name="filter_OpenHuizen" type="radio" value="OpenHuisVandaag"> <label class="label-text filter-flyout-option-label" for="OpenHuizen-OpenHuisVandaag">Today</label> <span class="filter-flyout-option-count" data-instant-search-count="OpenHuizen-OpenHuisVandaag">95 <span class="a11y-sr-only">Results</span></span></li>
                                    </ul>
                                </fieldset>
                                <fieldset class="filter-flyout-fieldset">
                                    <legend>Auction</legend>
                                    <ul class="filter-flyout-options">
                                        <li class="filter-flyout-option-default filter-flyout-option"><input checked class="custom-radio" data-instant-search-handle="" id="VeilingDatum-geen" name="filter_VeilingDatum" type="radio" value=""> <label class="label-text" for="VeilingDatum-geen">Remove filter</label></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="All auctions"><input class="custom-radio" data-filter-group-id="VeilingDatum" data-filter-group-name="Auction" data-flyout-item="" data-instant-search-handle="" id="VeilingDatum-AlleVeilingen" name="filter_VeilingDatum" type="radio" value="AlleVeilingen"> <label class="label-text filter-flyout-option-label" for="VeilingDatum-AlleVeilingen">All auctions</label> <span class="filter-flyout-option-count" data-instant-search-count="VeilingDatum-AlleVeilingen">26 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Today"><input class="custom-radio" data-filter-flyout-add-groupname-to-filter="" data-filter-flyout-add-groupname-to-label="" data-filter-group-id="VeilingDatum" data-filter-group-name="Auction" data-flyout-item="" data-instant-search-handle="" id="VeilingDatum-Vandaag" name="filter_VeilingDatum" type="radio" value="Vandaag"> <label class="label-text filter-flyout-option-label" for="VeilingDatum-Vandaag">Today</label> <span class="filter-flyout-option-count" data-instant-search-count="VeilingDatum-Vandaag">1 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Next week"><input class="custom-radio" data-filter-flyout-add-groupname-to-filter="" data-filter-flyout-add-groupname-to-label="" data-filter-group-id="VeilingDatum" data-filter-group-name="Auction" data-flyout-item="" data-instant-search-handle="" id="VeilingDatum-KomendeWeek" name="filter_VeilingDatum" type="radio" value="KomendeWeek"> <label class="label-text filter-flyout-option-label" for="VeilingDatum-KomendeWeek">Next week</label> <span class="filter-flyout-option-count" data-instant-search-count="VeilingDatum-KomendeWeek">5 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Next month"><input class="custom-radio" data-filter-flyout-add-groupname-to-filter="" data-filter-flyout-add-groupname-to-label="" data-filter-group-id="VeilingDatum" data-filter-group-name="Auction" data-flyout-item="" data-instant-search-handle="" id="VeilingDatum-KomendeMaand" name="filter_VeilingDatum" type="radio" value="KomendeMaand"> <label class="label-text filter-flyout-option-label" for="VeilingDatum-KomendeMaand">Next month</label> <span class="filter-flyout-option-count" data-instant-search-count="VeilingDatum-KomendeMaand">23 <span class="a11y-sr-only">Results</span></span></li>
                                    </ul>
                                </fieldset>
                                <fieldset class="filter-flyout-fieldset">
                                    <legend>Virtual open house</legend>
                                    <ul class="filter-flyout-options">
                                        <li class="filter-flyout-option-default filter-flyout-option"><input checked class="custom-radio" data-instant-search-handle="" id="VirtueleOpenHuizen-geen" name="filter_VirtueleOpenHuizen" type="radio" value=""> <label class="label-text" for="VirtueleOpenHuizen-geen">Remove filter</label></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="All virtual open houses"><input class="custom-radio" data-filter-group-id="VirtueleOpenHuizen" data-filter-group-name="Virtual open house" data-flyout-item="" data-instant-search-handle="" id="VirtueleOpenHuizen-VirtueelOpenHuis" name="filter_VirtueleOpenHuizen" type="radio" value="VirtueelOpenHuis"> <label class="label-text filter-flyout-option-label" for="VirtueleOpenHuizen-VirtueelOpenHuis">All virtual open houses</label> <span class="filter-flyout-option-count" data-instant-search-count="VirtueleOpenHuizen-VirtueelOpenHuis">14 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Within a week"><input class="custom-radio" data-filter-flyout-add-groupname-to-filter="" data-filter-flyout-add-groupname-to-label="" data-filter-group-id="VirtueleOpenHuizen" data-filter-group-name="Virtual open house" data-flyout-item="" data-instant-search-handle="" id="VirtueleOpenHuizen-VirtueelOpenHuisWeek" name="filter_VirtueleOpenHuizen" type="radio" value="VirtueelOpenHuisWeek"> <label class="label-text filter-flyout-option-label" for="VirtueleOpenHuizen-VirtueelOpenHuisWeek">Within a week</label> <span class="filter-flyout-option-count" data-instant-search-count="VirtueleOpenHuizen-VirtueelOpenHuisWeek">13 <span class="a11y-sr-only">Results</span></span></li>
                                        <li class="filter-flyout-option" data-filter-flyout-option-label="Today"><input class="custom-radio" data-filter-flyout-add-groupname-to-filter="" data-filter-flyout-add-groupname-to-label="" data-filter-group-id="VirtueleOpenHuizen" data-filter-group-name="Virtual open house" data-flyout-item="" data-instant-search-handle="" id="VirtueleOpenHuizen-VirtueelOpenHuisVandaag" name="filter_VirtueleOpenHuizen" type="radio" value="VirtueelOpenHuisVandaag"> <label class="label-text filter-flyout-option-label" for="VirtueleOpenHuizen-VirtueelOpenHuisVandaag">Today</label> <span class="filter-flyout-option-count" data-instant-search-count="VirtueleOpenHuizen-VirtueelOpenHuisVandaag">5 <span class="a11y-sr-only">Results</span></span></li>
                                    </ul>
                                </fieldset>
                            </div>
                            <ul class="filter-flyout-selected-options" data-flyout-selected-options=""></ul>
                            <script data-filter-flyout-selected-option-template="" type="template/html">
                            <li data-flyout-selected-option data-filter-id="<%- id %>" data-filter-group-id="<%- groupId %>">
                                <label class="filter-flyout-selected-option button-tertiary" title="<%- label %>">
                                    <span class="icon-close-blue" data-grunticon-embed>
                                        <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48"><symbol id="e" viewBox="0 -48 48 48" fill="#3888C5"><path fill="none" d="M0 0v-48h48V0z"></path></symbol><symbol id="f" viewBox="-0.0002 -48 48.0002 48.0002" fill="#3888C5"><defs fill="#3888C5"><path id="a" d="M48-48H0V0h48z" fill="#3888C5"></path></defs><clipPath id="b" fill="#3888C5"><use href="#a" overflow="visible" fill="#3888C5"></use><g clip-path="url(#b)" fill="#3888C5"><g fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"><path d="M2-48V0M4-48V0M6-48V0M8-48V0M10-48V0M12-48V0M14-48V0M16-48V0M18-48V0M20-48V0M22-48V0M24-48V0M26-48V0M28-48V0M30-48V0M32-48V0M34-48V0M36-48V0M38-48V0M40-48V0M42-48V0M44-48V0M46-48V0" fill="#3888C5"></path></g><g fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"><path d="M0-2h48M0-4h48M0-6h48M0-8h48M0-10h48M0-12h48M0-14h48M0-16h48M0-18h48M0-20h48M0-22h48M0-24h48M0-26h48M0-28h48M0-30h48M0-32h48M0-34h48M0-36h48M0-38h48M0-40h48M0-42h48M0-44h48M0-46h48" fill="#3888C5"></path></g><path d="M47.75-.25v-47.5H.25v47.5h47.5M48 0H0v-48h48V0z" fill="#3888C5"></path></g></clipPath></symbol><symbol id="g" viewBox="-0.0002 -48.0001 48.0002 48.0001" fill="#3888C5"><g opacity=".4" fill="#3888C5"><defs fill="#3888C5"><path id="c" opacity=".4" d="M0-48V0h48v-48z" fill="#3888C5"></path></defs><clipPath id="d" fill="#3888C5"><use href="#c" overflow="visible" fill="#3888C5"></use><path clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10" d="M24 0v-48M48-24H0M48-16H0M48-32H0M32-48V0M16-48V0M47.75-.25L.25-47.75M.25-.25l47.5-47.5M24-14c-5.522 0-10-4.477-10-10 0-5.522 4.478-10 10-10 5.523 0 10 4.478 10 10 0 5.523-4.477 10-10 10z"></path><path d="M24-4C12.946-4 4-12.947 4-24s8.946-20 20-20c11.053 0 20 8.947 20 20S35.052-4 24-4z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><path d="M40-42H8c-1.1 0-2 .9-2 2v32c0 1.1.9 2 2 2h32c1.1 0 2-.9 2-2v-32c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><path d="M38-44H10c-1.1 0-2 .9-2 2v36c0 1.1.9 2 2 2h28c1.1 0 2-.9 2-2v-36c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><g clip-path="url(#d)" fill="#3888C5"><path d="M47.75-.25v-47.5H.25v47.5h47.5M48 0H0v-48h48V0z" fill="#3888C5"></path></g><path d="M42-40H6c-1.1 0-2 .9-2 2v28c0 1.1.9 2 2 2h36c1.1 0 2-.9 2-2v-28c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path></clipPath></g></symbol><path d="M26.122 24l10.606-10.607a1.505 1.505 0 0 0 0-2.12 1.504 1.504 0 0 0-2.121 0L24 21.878 13.394 11.272c-.583-.583-1.538-.583-2.121 0s-.584 1.538 0 2.121L21.879 24 11.272 34.607c-.583.583-.583 1.538 0 2.12s1.539.584 2.122 0L24 26.122l10.607 10.607a1.504 1.504 0 0 0 2.121 0 1.505 1.505 0 0 0 0-2.121L26.122 24z" fill="#3888C5"></path></svg>
                                    </span> <%- label %>
                                </label>
                            </li>
                            </script>
                        </div>
                    </div>
                </div>
                <fieldset class="free-text-search fd-container-full" data-free-text-search-name="Search in description" data-free-text-search-type="" data-resettable="">
                    <legend>Search in description</legend>
                    <div class="free-text-search-name-input-wrapper">
                        <input class="fd-input" data-free-text-search-name-input="" placeholder="Ground floor or basement" type="text"> <button class="free-text-search-name-clear" data-free-text-search-name-clear-handle="" type="button"><span class="icon-delete-greyLight"></span><span class="a11y-sr-only">Remove</span></button>
                    </div>
                    <div class="free-text-search-wrapper" data-free-text-search-wrapper=""></div>
                    <script data-free-text-search-selected-option-template="" type="template/html">
                          <button data-free-text-search-applied-filter-button class="button-applied-filter button-applied-filter-free-text-search">
                              <span class="icon-close-blue" data-grunticon-embed>
                                  <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48"><symbol id="e" viewBox="0 -48 48 48" fill="#3888C5"><path fill="none" d="M0 0v-48h48V0z"></path></symbol><symbol id="f" viewBox="-0.0002 -48 48.0002 48.0002" fill="#3888C5"><defs fill="#3888C5"><path id="a" d="M48-48H0V0h48z" fill="#3888C5"></path></defs><clipPath id="b" fill="#3888C5"><use href="#a" overflow="visible" fill="#3888C5"></use><g clip-path="url(#b)" fill="#3888C5"><g fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"><path d="M2-48V0M4-48V0M6-48V0M8-48V0M10-48V0M12-48V0M14-48V0M16-48V0M18-48V0M20-48V0M22-48V0M24-48V0M26-48V0M28-48V0M30-48V0M32-48V0M34-48V0M36-48V0M38-48V0M40-48V0M42-48V0M44-48V0M46-48V0" fill="#3888C5"></path></g><g fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"><path d="M0-2h48M0-4h48M0-6h48M0-8h48M0-10h48M0-12h48M0-14h48M0-16h48M0-18h48M0-20h48M0-22h48M0-24h48M0-26h48M0-28h48M0-30h48M0-32h48M0-34h48M0-36h48M0-38h48M0-40h48M0-42h48M0-44h48M0-46h48" fill="#3888C5"></path></g><path d="M47.75-.25v-47.5H.25v47.5h47.5M48 0H0v-48h48V0z" fill="#3888C5"></path></g></clipPath></symbol><symbol id="g" viewBox="-0.0002 -48.0001 48.0002 48.0001" fill="#3888C5"><g opacity=".4" fill="#3888C5"><defs fill="#3888C5"><path id="c" opacity=".4" d="M0-48V0h48v-48z" fill="#3888C5"></path></defs><clipPath id="d" fill="#3888C5"><use href="#c" overflow="visible" fill="#3888C5"></use><path clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10" d="M24 0v-48M48-24H0M48-16H0M48-32H0M32-48V0M16-48V0M47.75-.25L.25-47.75M.25-.25l47.5-47.5M24-14c-5.522 0-10-4.477-10-10 0-5.522 4.478-10 10-10 5.523 0 10 4.478 10 10 0 5.523-4.477 10-10 10z"></path><path d="M24-4C12.946-4 4-12.947 4-24s8.946-20 20-20c11.053 0 20 8.947 20 20S35.052-4 24-4z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><path d="M40-42H8c-1.1 0-2 .9-2 2v32c0 1.1.9 2 2 2h32c1.1 0 2-.9 2-2v-32c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><path d="M38-44H10c-1.1 0-2 .9-2 2v36c0 1.1.9 2 2 2h28c1.1 0 2-.9 2-2v-36c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path><g clip-path="url(#d)" fill="#3888C5"><path d="M47.75-.25v-47.5H.25v47.5h47.5M48 0H0v-48h48V0z" fill="#3888C5"></path></g><path d="M42-40H6c-1.1 0-2 .9-2 2v28c0 1.1.9 2 2 2h36c1.1 0 2-.9 2-2v-28c0-1.1-.9-2-2-2z" clip-path="url(#d)" fill="none" stroke="#3888C5" stroke-width=".25" stroke-miterlimit="10"></path></clipPath></g></symbol><path d="M26.122 24l10.606-10.607a1.505 1.505 0 0 0 0-2.12 1.504 1.504 0 0 0-2.121 0L24 21.878 13.394 11.272c-.583-.583-1.538-.583-2.121 0s-.584 1.538 0 2.121L21.879 24 11.272 34.607c-.583.583-.583 1.538 0 2.12s1.539.584 2.122 0L24 26.122l10.607 10.607a1.504 1.504 0 0 0 2.121 0 1.505 1.505 0 0 0 0-2.121L26.122 24z" fill="#3888C5"></path></svg>
                              </span>
                              <%- label %>
                              <input type="hidden" id="<%- id %>" name="filter_FreeTextField" value="<%- label %>" />
                          </button>
                    </script>
                </fieldset><!--(Sticky) Filter Close-->
                 <button class="mobile-search-close-flyout fd-p-left-xs fd-bg-blue-5 fd-text--left" data-search-close-flyout="" type="button"><span class="icon-arrow-left-blue fd-m-none" data-grunticon-embed=""></span> Back</button> <button class="mobile-search-sticky-close-flyout fd-btn fd-btn--secondary" data-search-close-flyout="" type="button"><span data-instant-search-output="searchButtonTotal">50,675 homes for sale</span></button> <!--(Sticky) Filter Submit-->
                 <button class="mobile-search-sticky-button fd-btn fd-btn--primary" data-sidebar-handle="" type="submit">Show <span data-instant-search-output="searchButtonTotal">50,675 homes for sale</span></button>
            </div>
            <div class="search-content" data-search-content="search-content">
                <div class="search-content-header">
                    <div class="search-content-description fd-flex">
                        <h1 class="search-output-result-count fd-m-none fd-m-bottom-s fd-flex fd-flex-column"><span data-instant-search-output="total">50,675 homes for sale</span></h1>
                        <div class="search-output-result-channel-context" data-instant-search-output="labelContext">
                            <h1 class="search-output-result-count fd-m-none fd-m-bottom-s fd-flex fd-flex-column">in Nederland</h1>
                        </div><button class="search-content-header-button-filters button-tertiary" data-sidebar-handle="" type="button">
                        <div class="filter-count" data-component="filter-count" data-filter-count="" data-resettable="">
                            <span class="filter-count__number fd-bg-orange-1 fd-display-inline-block fd-m-right-2xs fd-text--center fd-color-white" data-filter-count-number="" data-test-filter-count-number="">0</span> <span data-filter-count-label="" data-filter-count-label-multiple="filters" data-filter-count-label-one="filter">filters</span>
                        </div></button> <a class="search-content-header-anchor-filters" href="#filters">
                        <div class="filter-count" data-component="filter-count" data-filter-count="" data-resettable="">
                            <span class="filter-count__number fd-bg-orange-1 fd-display-inline-block fd-m-right-2xs fd-text--center fd-color-white" data-filter-count-number="" data-test-filter-count-number="">0</span> <span data-filter-count-label="" data-filter-count-label-multiple="filters" data-filter-count-label-one="filter">filters</span>
                        </div></a>
                    </div>
                    <div class="search-content-header-bottom fd-flex fd-p-top-xs fd-p-bottom-xs" data-instant-search-output="subheader">
                        <div class="fd-form-control">
                            <div class="fd-select fd-form-control__input fd-form-control__input--suffix">
                                <select class="fd-input" data-instant-search-handle="" id="sort" name="sort">
                                    <option selected value="sorteer-relevantie_Descending">
                                        Relevance ↓
                                    </option>
                                    <option value="sorteer-datum_Descending">
                                        Date
                                    </option>
                                    <option value="sorteer-prijs_Ascending">
                                        Asking price
                                    </option>
                                    <option value="sorteer-woonopp_Descending">
                                        Floor area
                                    </option>
                                    <option value="sorteer-perceelopp_Descending">
                                        Lot size
                                    </option>
                                    <option value="sorteer-kamers_Descending">
                                        Rooms
                                    </option>
                                    <option value="sorteer-plaats_Ascending">
                                        Town/city
                                    </option>
                                    <option value="sorteer-postcode_Ascending">
                                        Zip code
                                    </option>
                                    <option value="sorteer-adres_Ascending">
                                        Address
                                    </option>
                                </select>
                                <div class="fd-form-control__adornment fd-color-blue-1">
                                    <svg class="fd-icon" viewbox="0 0 48 48">
                                    <path d="M35.66 18.83a1.5 1.5 0 0 0-2.12 0L24 28.37l-9.54-9.54A1.5 1.5 0 0 0 12.34 21l10.57 10.53a1.52 1.52 0 0 0 2.13 0L35.66 21a1.5 1.5 0 0 0 0-2.17z" data-name="Arrow Down"></path></svg>
                                </div>
                            </div>
                        </div>
                        <div class="search-content-toggle">
                            <a class="search-content-toggle__view-type is-active" data-test-list-button="" href="{{url('list')}}"><span class="icon icon-list-blue"></span> List</a> <a class="search-content-toggle__view-type" data-test-map-button="" href="{{url('list_map')}}"><span class="icon icon-location-grey"></span> Map</a> <a class="search-content-toggle__view-type map-options" data-map-options=""><span class="icon icon-plus-blue" data-grunticon-embed=""></span> Kaartopties</a>
                            <div class="map__type-select" data-map-type-select-top="">
                                <input checked class="search-map-type-select-radio" data-search-map-type-select="" id="search-map-type-default-top" name="search-map-type-control-top" type="radio" value="default"> <label class="search-map-type-select-label" for="search-map-type-default-top">Kaart</label> <input class="search-map-type-select-radio" data-search-map-type-select="" id="search-map-type-satellite-top" name="search-map-type-control-top" type="radio" value="satellite"> <label class="search-map-type-select-label" for="search-map-type-satellite-top">Satelliet</label>
                            </div>
                        </div>
                    </div>
                </div><!-- search-results-loading component -->
                <div class="search-results_loading fd-text--center" data-search-results-loading="">
                    <div class="app-spinner" data-search-results-spinner=""><svg class="svg-circular" viewbox="0 0 48 48">
                    <circle class="path" cx="24" cy="24" fill="none" r="20" stroke-dasharray="89,200" stroke-dashoffset="-124" stroke-width="3"></circle></svg> <img class="gif-circular" src="https://assets.fstatic.nl/master_3718/assets/components/app-spinner/spinner.gif"></div>
                </div><!-- /search-results-loading component -->
                <!-- Results -->
                <div class="search-content-output" data-instant-search-output="results">
                    <script data-advertisement-targeting="" type="application/ld+json">
                      {"cat42":"1","taal":"en","loggedin":"true","cat24":"0","cat28":"0","cat33":"koop","bedrijfsruimte":"false","tuin":"false","dakterras":"false","balkon":"false","soortaanbieding":"koop","soortaanbod":"koop","energiezuinig":"false","kluswoning":"false","beschikbaarheid":"beschikbaaronderhandeling","environment":"production"}
                    </script>
                    <ul class="top-position has-three" data-top-position="">
                        <li class="top-position-item-container">
                            <div class="top-position-item">
                                <a class="top-position-object-link top-position-object is-backgroundcover" data-object-url-tracking="toppositie" data-track-click="Featured Listing Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6100383,&quot;placement&quot;:&quot;listing_results_top_position&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}" title="Helmersstraat 21"><img alt="Helmersstraat 21" sizes="(min-width: 500px) 228px, calc(100vw - 2rem)" src="https://cloud.funda.nl/valentina_media/149/579/748_720x480.jpg" srcset="https://cloud.funda.nl/valentina_media/149/579/748_360x240.jpg 360w, https://cloud.funda.nl/valentina_media/149/579/748_180x120.jpg 180w, https://cloud.funda.nl/valentina_media/149/579/748_720x480.jpg 720w">
                                <h2 class="top-position-object-details"><span class="top-position-object-title">Helmersstraat 21</span> <span class="top-position-object-description">Rotterdam, € 400,000 k.k.</span></h2></a> <a class="top-position-makelaar" href="/en/makelaars/rotterdam/15322-lokkerbol-nvm-makelaardij-rotterdam/">Featured by Lokkerbol NVM Makelaardij Rotterdam</a>
                            </div>
                        </li>
                        <li class="top-position-item-container">
                            <div class="top-position-item">
                                <a class="top-position-object-link top-position-object is-backgroundcover" data-object-url-tracking="toppositie" data-top-position-item="/en/toppositie/view/koop/6032322/13069/" data-track-click="Featured Listing Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6032322,&quot;placement&quot;:&quot;listing_results_top_position&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}" title="Klepperheide (Bouwnr. 10)"><img alt="Klepperheide (Bouwnr. 10)" sizes="(min-width: 500px) 228px, calc(100vw - 2rem)" src="https://cloud.funda.nl/valentina_media/145/719/341_720x480.jpg" srcset="https://cloud.funda.nl/valentina_media/145/719/341_360x240.jpg 360w, https://cloud.funda.nl/valentina_media/145/719/341_180x120.jpg 180w, https://cloud.funda.nl/valentina_media/145/719/341_720x480.jpg 720w">
                                <h2 class="top-position-object-details"><span class="top-position-object-title">Klepperheide (Bouwnr. 10)</span> <span class="top-position-object-description">Druten, € 240,000 v.o.n.</span></h2></a> <a class="top-position-makelaar" href="/en/makelaars/wijchen/13069-driessen-makelaardij/">Featured by Driessen Makelaardij</a>
                            </div>
                        </li>
                        <li class="top-position-item-container">
                            <div class="top-position-item">
                                <a class="top-position-object-link top-position-object is-backgroundcover" data-object-url-tracking="toppositie" data-top-position-item="/en/toppositie/view/koop/6083481/80337/" data-track-click="Featured Listing Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6083481,&quot;placement&quot;:&quot;listing_results_top_position&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}" title="Beerze 4"><img alt="Beerze 4" sizes="(min-width: 500px) 228px, calc(100vw - 2rem)" src="https://cloud.funda.nl/valentina_media/148/593/721_720x480.jpg" srcset="https://cloud.funda.nl/valentina_media/148/593/721_360x240.jpg 360w, https://cloud.funda.nl/valentina_media/148/593/721_180x120.jpg 180w, https://cloud.funda.nl/valentina_media/148/593/721_720x480.jpg 720w">
                                <h2 class="top-position-object-details"><span class="top-position-object-title">Beerze 4</span> <span class="top-position-object-description">Kaatsheuvel, € 350,000 k.k.</span></h2></a> <a class="top-position-makelaar" href="/en/makelaars/tilburg/80337-huisadviseur/">Featured by Huisadviseur</a>
                            </div>
                        </li>
                    </ul>
                    <script data-tracking-properties="" type="application/ld+json">
                    {"listings":[{"global_id":6100383,"display_order":0,"placement":"listing_results_top_position","status":"beschikbaar"},{"global_id":6032322,"display_order":1,"placement":"listing_results_top_position","status":"beschikbaar"},{"global_id":6083481,"display_order":2,"placement":"listing_results_top_position","status":"beschikbaar"}],"funda_user_id":""}
                    </script>
                    <ol class="search-results" data-component="search-results" data-search-results-lists="" start="1">
                        <li class="search-result" data-global-id="6107187" data-listing-type="regular" data-search-result-listing="" data-test-search-result-item="">
                            <div class="search-result-main">
                                <div class="search-result-thumbnail-container">
                                    <div class="search-result__header-labels-col">
                                        <ul class="labels search-result__header-labels">
                                            <li class="label label-nieuw">New</li>
                                        </ul>
                                    </div>
                                    <div class="search-result-media">
                                        <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42552540" data-track-click="Listing Results Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6107187,&quot;navigation_trigger&quot;:&quot;listing_results_listing&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                        <div class="search-result-image">
                                            <img alt="Hoofdstraat 22" sizes="(min-width: 500px) 228px, calc(100vw - 2rem)" src="https://cloud.funda.nl/valentina_media/149/892/606_720x480.jpg" srcset="https://cloud.funda.nl/valentina_media/149/892/606_360x240.jpg 360w, https://cloud.funda.nl/valentina_media/149/892/606_180x120.jpg 180w, https://cloud.funda.nl/valentina_media/149/892/606_720x480.jpg 720w">
                                            <div class="search-result-media-icons">
                                                <span class="search-result-media-icon icon-floorplan-white" title="Floorplan available"></span> <span class="search-result-media-icon icon-360-white" title="360° photos available"></span> <span class="search-result-media-icon icon-video-white" title="Video available"></span>
                                            </div>
                                        </div></a>
                                    </div>
                                </div>
                                <div class="search-result-content">
                                    <div class="search-result-content-inner">
                                        <div class="search-result__header fd-flex fd-m-bottom-2xs fd-p-top-2xs--bp-s" data-test-search-result-header="">
                                            <div class="search-result__header-title-col">
                                                <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42552540" data-track-click="Listing Results Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6107187,&quot;navigation_trigger&quot;:&quot;listing_results_listing&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                                <h2 class="search-result__header-title fd-m-none" data-test-search-result-header-title="">Hoofdstraat 22</h2></a> <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42552540" data-track-click="Listing Results Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6107187,&quot;navigation_trigger&quot;:&quot;listing_results_listing&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                                <h4 class="search-result__header-subtitle fd-m-none" data-test-search-result-header-subtitle="">8376 HA Ossenzijl</h4></a>
                                            </div>
                                            <div class="user-save-object" data-controller-uid="5" data-is-user-logged-in="true" data-listing-tracking-properties="{&quot;global_id&quot;:6107187,&quot;listing_offering_type&quot;:&quot;koop&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" data-save-object="" data-save-object-tinyid="42552540">
                                                <button class="user-save-object__handle user-save-object__handle--add fd-p-none fd-m-none" data-save-object-add-url="/en/mijn/objectactions/saveobject/?internalId=fe9b9b4b-2d0f-4f9e-a714-8e3f44ae7aba&amp;tinyId=42552540&amp;trackingListingOfferingType=koop&amp;trackingSiteSection=listings&amp;trackingPageType=listing_results&amp;trackingNavigationTrigger=listing_results_listing" data-save-object-handle="add"><span class="user-save-object__handle-icon icon-heart-blue" data-grunticon-embed=""></span></button> <button class="user-save-object__handle user-save-object__handle--remove fd-p-none fd-m-none" data-save-object-handle="remove" data-save-object-remove-url="/en/mijn/objectactions/removesavedobject/?internalId=fe9b9b4b-2d0f-4f9e-a714-8e3f44ae7aba&amp;tinyId=42552540&amp;trackingListingOfferingType=koop&amp;trackingSiteSection=listings&amp;trackingPageType=listing_results&amp;trackingNavigationTrigger=listing_results_listing"><span class="user-save-object__handle-icon icon-heart-filled-red" data-grunticon-embed=""></span></button>
                                            </div>
                                        </div>
                                        <div class="search-result-info search-result-info-price">
                                            <span class="search-result-price">€ 400,000 k.k.</span>
                                        </div>
                                        <div class="search-result-info">
                                            <ul class="search-result-kenmerken">
                                                <li><span title="Living area">147 m²</span> / <span title="Plot size">275 m²</span></li>
                                                <li>7 rooms</li>
                                            </ul>
                                        </div><a class="search-result-makelaar" href="/en/makelaars/meppel/4246-hup-en-fidom-garantiemakelaars/"><span class="search-result-makelaar-icon icon-logo-nvm"></span> <span class="search-result-makelaar-name">Hup &amp; Fidom Garantiemakelaars</span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="search-result" data-global-id="6107183" data-listing-type="regular" data-search-result-listing="" data-test-search-result-item="">
                            <div class="search-result-main">
                                <div class="search-result-thumbnail-container">
                                    <div class="search-result__header-labels-col">
                                        <ul class="labels search-result__header-labels">
                                            <li class="label label-nieuw">New</li>
                                        </ul>
                                    </div>
                                    <div class="search-result-media">
                                        <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42552546" data-track-click="Listing Results Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6107183,&quot;navigation_trigger&quot;:&quot;listing_results_listing&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                        <div class="search-result-image">
                                            <img alt="Roerstraat 16" sizes="(min-width: 500px) 228px, calc(100vw - 2rem)" src="https://cloud.funda.nl/valentina_media/149/892/264_720x480.jpg" srcset="https://cloud.funda.nl/valentina_media/149/892/264_360x240.jpg 360w, https://cloud.funda.nl/valentina_media/149/892/264_180x120.jpg 180w, https://cloud.funda.nl/valentina_media/149/892/264_720x480.jpg 720w">
                                            <div class="search-result-media-icons">
                                                <span class="search-result-media-icon icon-floorplan-white" title="Floorplan available"></span> <span class="search-result-media-icon icon-360-white" title="360° photos available"></span> <span class="search-result-media-icon icon-video-white" title="Video available"></span>
                                            </div>
                                        </div></a>
                                    </div>
                                </div>
                                <div class="search-result-content">
                                    <div class="search-result-content-inner">
                                        <div class="search-result__header fd-flex fd-m-bottom-2xs fd-p-top-2xs--bp-s" data-test-search-result-header="">
                                            <div class="search-result__header-title-col">
                                                <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42552546" data-track-click="Listing Results Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6107183,&quot;navigation_trigger&quot;:&quot;listing_results_listing&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                                <h2 class="search-result__header-title fd-m-none" data-test-search-result-header-title="">Roerstraat 16</h2></a> <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42552546" data-track-click="Listing Results Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6107183,&quot;navigation_trigger&quot;:&quot;listing_results_listing&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                                <h4 class="search-result__header-subtitle fd-m-none" data-test-search-result-header-subtitle="">4535 GM Terneuzen</h4></a>
                                            </div>
                                            <div class="user-save-object" data-controller-uid="6" data-is-user-logged-in="true" data-listing-tracking-properties="{&quot;global_id&quot;:6107183,&quot;listing_offering_type&quot;:&quot;koop&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" data-save-object="" data-save-object-tinyid="42552546">
                                                <button class="user-save-object__handle user-save-object__handle--add fd-p-none fd-m-none" data-save-object-add-url="/en/mijn/objectactions/saveobject/?internalId=454859f1-5c2f-48c1-b53f-113af945e3ce&amp;tinyId=42552546&amp;trackingListingOfferingType=koop&amp;trackingSiteSection=listings&amp;trackingPageType=listing_results&amp;trackingNavigationTrigger=listing_results_listing" data-save-object-handle="add"><span class="user-save-object__handle-icon icon-heart-blue" data-grunticon-embed=""></span></button> <button class="user-save-object__handle user-save-object__handle--remove fd-p-none fd-m-none" data-save-object-handle="remove" data-save-object-remove-url="/en/mijn/objectactions/removesavedobject/?internalId=454859f1-5c2f-48c1-b53f-113af945e3ce&amp;tinyId=42552546&amp;trackingListingOfferingType=koop&amp;trackingSiteSection=listings&amp;trackingPageType=listing_results&amp;trackingNavigationTrigger=listing_results_listing"><span class="user-save-object__handle-icon icon-heart-filled-red" data-grunticon-embed=""></span></button>
                                            </div>
                                        </div>
                                        <div class="search-result-info search-result-info-price">
                                            <span class="search-result-price">€ 275,000 k.k.</span>
                                        </div>
                                        <div class="search-result-info">
                                            <ul class="search-result-kenmerken">
                                                <li><span title="Living area">149 m²</span> / <span title="Plot size">242 m²</span></li>
                                                <li>6 rooms</li>
                                            </ul>
                                        </div><a class="search-result-makelaar" href="/en/makelaars/westdorpe/20133-um-zeeland-uw-makelaar-in-zeeland/"><span class="search-result-makelaar-icon icon-logo-nvm"></span> <span class="search-result-makelaar-name">UM ZEELAND, Uw makelaar in Zeeland</span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="search-result promo" data-global-id="6107177" data-listing-type="promo" data-search-result-listing="">
                            <div class="search-result-main-promo">
                                <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42552530" data-track-click="Featured Listing Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6107177,&quot;placement&quot;:&quot;listing_results_promo&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                <div class="search-promolabel-new">
                                    <div>
                                        <div class="label label-blikvanger">
                                            Eyecatcher
                                        </div>Vrijstaand woonhuis met stenen garage en maar liefst 24 zonnepanelen!
                                    </div>
                                </div></a>
                                <div class="search-result-media-promo">
                                    <div class="search-result-image-promo">
                                        <div class="promo-thumbnail">
                                            <div class="search-result__header-labels-col">
                                                <ul class="labels search-result__header-labels">
                                                    <li class="label label-nieuw">New</li>
                                                </ul>
                                            </div><a data-object-url-tracking="resultlist" data-search-result-item-anchor="42552530" data-track-click="Featured Listing Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6107177,&quot;placement&quot;:&quot;listing_results_promo&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}"><img alt="Hibiscusstraat 16" sizes="" src="https://cloud.funda.nl/valentina_media/149/892/039_720x480.jpg" srcset="https://cloud.funda.nl/valentina_media/149/892/039_360x240.jpg 360w, https://cloud.funda.nl/valentina_media/149/892/039_180x120.jpg 180w, https://cloud.funda.nl/valentina_media/149/892/039_720x480.jpg 720w"></a>
                                        </div>
                                        <div class="promo-thumbnail">
                                            <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42552530" data-track-click="Featured Listing Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6107177,&quot;placement&quot;:&quot;listing_results_promo&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}"><img alt="Hibiscusstraat 16" sizes="" src="https://cloud.funda.nl/valentina_media/149/892/038_720x480.jpg" srcset="https://cloud.funda.nl/valentina_media/149/892/038_360x240.jpg 360w, https://cloud.funda.nl/valentina_media/149/892/038_180x120.jpg 180w, https://cloud.funda.nl/valentina_media/149/892/038_720x480.jpg 720w"></a>
                                        </div>
                                        <div class="promo-thumbnail">
                                            <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42552530" data-track-click="Featured Listing Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6107177,&quot;placement&quot;:&quot;listing_results_promo&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}"><img alt="Hibiscusstraat 16" sizes="" src="https://cloud.funda.nl/valentina_media/149/892/040_720x480.jpg" srcset="https://cloud.funda.nl/valentina_media/149/892/040_360x240.jpg 360w, https://cloud.funda.nl/valentina_media/149/892/040_180x120.jpg 180w, https://cloud.funda.nl/valentina_media/149/892/040_720x480.jpg 720w"></a>
                                        </div><a data-object-url-tracking="resultlist" data-search-result-item-anchor="42552530" data-track-click="Featured Listing Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6107177,&quot;placement&quot;:&quot;listing_results_promo&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">}
                                        <div class="search-result-media-icons">
                                            <span class="search-result-media-icon icon-floorplan-white" title="Floorplan available"></span> <span class="search-result-media-icon icon-360-white" title="360° photos available"></span> <span class="search-result-media-icon icon-video-white" title="Video available"></span>
                                        </div>if (Model.HasLink) {</a>
                                    </div>
                                </div>
                                <div class="search-result-content-promo">
                                    <div class="search-result-content-inner">
                                        <div class="search-result-content-makelaar-logo">
                                            <a class="fd-flex" href="/en/makelaars/delfzijl/9194-brandsma-de-jong-makelaars-en-taxateurs/"><img alt="Brandsma | De Jong makelaars &amp; taxateurs" class="search-result-makelaar-logo-big" onerror="this.onerror=null; this.src='https://assets.fstatic.nl/master_3718' + '/assets/components/agents-nearby/no-logo.svg';" src="https://cloud.funda.nl/valentina_media/141/911/095_720x720.jpg"></a>
                                        </div>
                                        <div class="search-result-content-info">
                                            <div class="search-result-content-info--object">
                                                <div class="search-result__header fd-flex fd-m-bottom-2xs fd-p-top-2xs--bp-s" data-test-search-result-header="">
                                                    <div class="search-result__header-title-col">
                                                        <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42552530" data-track-click="Featured Listing Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6107177,&quot;placement&quot;:&quot;listing_results_promo&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                                        <h2 class="search-result__header-title fd-m-none" data-test-search-result-header-title="">Hibiscusstraat 16</h2></a> <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42552530" data-track-click="Featured Listing Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6107177,&quot;placement&quot;:&quot;listing_results_promo&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                                        <h4 class="search-result__header-subtitle fd-m-none" data-test-search-result-header-subtitle="">9945 VB Wagenborgen</h4></a>
                                                    </div>
                                                    <div class="user-save-object" data-controller-uid="7" data-is-user-logged-in="true" data-listing-tracking-properties="{&quot;global_id&quot;:6107177,&quot;listing_offering_type&quot;:&quot;koop&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" data-save-object="" data-save-object-tinyid="42552530">
                                                        <button class="user-save-object__handle user-save-object__handle--add fd-p-none fd-m-none" data-save-object-add-url="/en/mijn/objectactions/saveobject/?internalId=0a62b744-9aae-4778-99ae-6f8db1d53e5f&amp;tinyId=42552530&amp;trackingListingOfferingType=koop&amp;trackingSiteSection=listings&amp;trackingPageType=listing_results&amp;trackingNavigationTrigger=listing_results_listing" data-save-object-handle="add"><span class="user-save-object__handle-icon icon-heart-blue" data-grunticon-embed=""></span></button> <button class="user-save-object__handle user-save-object__handle--remove fd-p-none fd-m-none" data-save-object-handle="remove" data-save-object-remove-url="/en/mijn/objectactions/removesavedobject/?internalId=0a62b744-9aae-4778-99ae-6f8db1d53e5f&amp;tinyId=42552530&amp;trackingListingOfferingType=koop&amp;trackingSiteSection=listings&amp;trackingPageType=listing_results&amp;trackingNavigationTrigger=listing_results_listing"><span class="user-save-object__handle-icon icon-heart-filled-red" data-grunticon-embed=""></span></button>
                                                    </div>
                                                </div>
                                                <div class="search-result-info search-result-info-price">
                                                    <span class="search-result-price">€ 300,000 k.k.</span>
                                                </div>
                                                <div class="search-result-info">
                                                    <ul class="search-result-kenmerken">
                                                        <li><span title="Living area">116 m²</span> / <span title="Plot size">720 m²</span></li>
                                                        <li>4 rooms</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="search-result-content-info--makelaar">
                                                <a class="search-result-makelaar promo fd-flex" href="/en/makelaars/delfzijl/9194-brandsma-de-jong-makelaars-en-taxateurs/"><img alt="Brandsma | De Jong makelaars &amp; taxateurs" class="search-result-makelaar-logo-small" src="https://cloud.funda.nl/valentina_media/141/911/095_720x720.jpg"> <span class="search-result-makelaar-name">Brandsma | De Jong makelaars &amp; taxateurs</span> <span class="search-result-makelaar-icon icon-logo-nvm"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ol>
                    <div class="search-ad" data-resultlist-ad="2001" data-test-search-ad="">
                        <aside class="advertisement dfp-display-blocked hidden" data-advertisement-adunit-path="/7276/funda.koop/resultaatlijst/web/leaderboard1_koop_resultaatlijst_web_r0" data-advertisement-lok="2001" data-advertisement-size-default="[ 0, 0 ]" data-advertisement-size-mapping="[[[760, 0],[[728, 90],&quot;fluid&quot;]],[[320, 0],[[320, 50],[320, 100],[300, 250],[320, 240],&quot;fluid&quot;]],[[0, 0],[]]]" data-advertisements="" data-advertisements-async="true" data-advertisements-event-trigger="" data-advertisements-lazy-type="scroll" data-advertisements-render-margin="25" data-test-advertisement="" id="ad_e704b359-ec56-4479-b865-6b775ae62a40"></aside>
                    </div>
                    <ol class="search-results" data-component="search-results" data-search-results-lists="" start="4">
                        <li class="search-result promo" data-global-id="6107172" data-listing-type="promo" data-search-result-listing="">
                            <div class="search-result-main-promo">
                                <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42552535" data-track-click="Featured Listing Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6107172,&quot;placement&quot;:&quot;listing_results_promo&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                <div class="search-promolabel-new">
                                    <div>
                                        <div class="label label-blikvanger">
                                            Eyecatcher
                                        </div>Heerlijke, eigentijdse starterswoning met dito tuin en vrij uitzicht!
                                    </div>
                                </div></a>
                                <div class="search-result-media-promo">
                                    <div class="search-result-image-promo">
                                        <div class="promo-thumbnail">
                                            <div class="search-result__header-labels-col">
                                                <ul class="labels search-result__header-labels">
                                                    <li class="label label-nieuw">New</li>
                                                </ul>
                                            </div><a data-object-url-tracking="resultlist" data-search-result-item-anchor="42552535" data-track-click="Featured Listing Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6107172,&quot;placement&quot;:&quot;listing_results_promo&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}"><img alt="Botterlaan 30" sizes="" src="https://cloud.funda.nl/valentina_media/149/891/781_720x480.jpg" srcset="https://cloud.funda.nl/valentina_media/149/891/781_360x240.jpg 360w, https://cloud.funda.nl/valentina_media/149/891/781_180x120.jpg 180w, https://cloud.funda.nl/valentina_media/149/891/781_720x480.jpg 720w"></a>
                                        </div>
                                        <div class="promo-thumbnail">
                                            <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42552535" data-track-click="Featured Listing Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6107172,&quot;placement&quot;:&quot;listing_results_promo&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}"><img alt="Botterlaan 30" sizes="" src="https://cloud.funda.nl/valentina_media/149/891/782_720x480.jpg" srcset="https://cloud.funda.nl/valentina_media/149/891/782_360x240.jpg 360w, https://cloud.funda.nl/valentina_media/149/891/782_180x120.jpg 180w, https://cloud.funda.nl/valentina_media/149/891/782_720x480.jpg 720w"></a>
                                        </div>
                                        <div class="promo-thumbnail">
                                            <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42552535" data-track-click="Featured Listing Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6107172,&quot;placement&quot;:&quot;listing_results_promo&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}"><img alt="Botterlaan 30" sizes="" src="https://cloud.funda.nl/valentina_media/149/891/785_720x480.jpg" srcset="https://cloud.funda.nl/valentina_media/149/891/785_360x240.jpg 360w, https://cloud.funda.nl/valentina_media/149/891/785_180x120.jpg 180w, https://cloud.funda.nl/valentina_media/149/891/785_720x480.jpg 720w"></a>
                                        </div><a data-object-url-tracking="resultlist" data-search-result-item-anchor="42552535" data-track-click="Featured Listing Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6107172,&quot;placement&quot;:&quot;listing_results_promo&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">}
                                        <div class="search-result-media-icons">
                                            <span class="search-result-media-icon icon-floorplan-white" title="Floorplan available"></span> <span class="search-result-media-icon icon-360-white" title="360° photos available"></span> <span class="search-result-media-icon icon-video-white" title="Video available"></span>
                                        </div>if (Model.HasLink) {</a>
                                    </div>
                                </div>
                                <div class="search-result-content-promo">
                                    <div class="search-result-content-inner">
                                        <div class="search-result-content-makelaar-logo">
                                            <a class="fd-flex" href="/en/makelaars/delfzijl/9194-brandsma-de-jong-makelaars-en-taxateurs/"><img alt="Brandsma | De Jong makelaars &amp; taxateurs" class="search-result-makelaar-logo-big" onerror="this.onerror=null; this.src='https://assets.fstatic.nl/master_3718' + '/assets/components/agents-nearby/no-logo.svg';" src="https://cloud.funda.nl/valentina_media/141/911/095_720x720.jpg"></a>
                                        </div>
                                        <div class="search-result-content-info">
                                            <div class="search-result-content-info--object">
                                                <div class="search-result__header fd-flex fd-m-bottom-2xs fd-p-top-2xs--bp-s" data-test-search-result-header="">
                                                    <div class="search-result__header-title-col">
                                                        <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42552535" data-track-click="Featured Listing Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6107172,&quot;placement&quot;:&quot;listing_results_promo&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                                        <h2 class="search-result__header-title fd-m-none" data-test-search-result-header-title="">Botterlaan 30</h2></a> <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42552535" data-track-click="Featured Listing Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6107172,&quot;placement&quot;:&quot;listing_results_promo&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                                        <h4 class="search-result__header-subtitle fd-m-none" data-test-search-result-header-subtitle="">9934 EZ Delfzijl</h4></a>
                                                    </div>
                                                    <div class="user-save-object" data-controller-uid="8" data-is-user-logged-in="true" data-listing-tracking-properties="{&quot;global_id&quot;:6107172,&quot;listing_offering_type&quot;:&quot;koop&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" data-save-object="" data-save-object-tinyid="42552535">
                                                        <button class="user-save-object__handle user-save-object__handle--add fd-p-none fd-m-none" data-save-object-add-url="/en/mijn/objectactions/saveobject/?internalId=d8915eda-b701-4971-b7a3-c794caae7dde&amp;tinyId=42552535&amp;trackingListingOfferingType=koop&amp;trackingSiteSection=listings&amp;trackingPageType=listing_results&amp;trackingNavigationTrigger=listing_results_listing" data-save-object-handle="add"><span class="user-save-object__handle-icon icon-heart-blue" data-grunticon-embed=""></span></button> <button class="user-save-object__handle user-save-object__handle--remove fd-p-none fd-m-none" data-save-object-handle="remove" data-save-object-remove-url="/en/mijn/objectactions/removesavedobject/?internalId=d8915eda-b701-4971-b7a3-c794caae7dde&amp;tinyId=42552535&amp;trackingListingOfferingType=koop&amp;trackingSiteSection=listings&amp;trackingPageType=listing_results&amp;trackingNavigationTrigger=listing_results_listing"><span class="user-save-object__handle-icon icon-heart-filled-red" data-grunticon-embed=""></span></button>
                                                    </div>
                                                </div>
                                                <div class="search-result-info search-result-info-price">
                                                    <span class="search-result-price">€ 150,000 k.k.</span>
                                                </div>
                                                <div class="search-result-info">
                                                    <ul class="search-result-kenmerken">
                                                        <li><span title="Living area">90 m²</span> / <span title="Plot size">248 m²</span></li>
                                                        <li>4 rooms</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="search-result-content-info--makelaar">
                                                <a class="search-result-makelaar promo fd-flex" href="/en/makelaars/delfzijl/9194-brandsma-de-jong-makelaars-en-taxateurs/"><img alt="Brandsma | De Jong makelaars &amp; taxateurs" class="search-result-makelaar-logo-small" src="https://cloud.funda.nl/valentina_media/141/911/095_720x720.jpg"> <span class="search-result-makelaar-name">Brandsma | De Jong makelaars &amp; taxateurs</span> <span class="search-result-makelaar-icon icon-logo-nvm"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="search-result" data-global-id="6107157" data-listing-type="regular" data-search-result-listing="" data-test-search-result-item="">
                            <div class="search-result-main">
                                <div class="search-result-thumbnail-container">
                                    <div class="search-result__header-labels-col">
                                        <ul class="labels search-result__header-labels">
                                            <li class="label label-nieuw">New</li>
                                        </ul>
                                    </div>
                                    <div class="search-result-media">
                                        <a data-object-url-tracking="resultlist" data-search-result-item-anchor="88916156" data-track-click="Listing Results Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6107157,&quot;navigation_trigger&quot;:&quot;listing_results_listing&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                        <div class="search-result-image">
                                            <img alt="Zandstraat 17" sizes="(min-width: 500px) 228px, calc(100vw - 2rem)" src="https://cloud.funda.nl/valentina_media/149/891/170_720x480.jpg" srcset="https://cloud.funda.nl/valentina_media/149/891/170_360x240.jpg 360w, https://cloud.funda.nl/valentina_media/149/891/170_180x120.jpg 180w, https://cloud.funda.nl/valentina_media/149/891/170_720x480.jpg 720w">
                                            <div class="search-result-media-icons">
                                                <span class="search-result-media-icon icon-floorplan-white" title="Floorplan available"></span> <span class="search-result-media-icon icon-360-white" title="360° photos available"></span> <span class="search-result-media-icon icon-video-white" title="Video available"></span>
                                            </div>
                                        </div></a>
                                    </div>
                                </div>
                                <div class="search-result-content">
                                    <div class="search-result-content-inner">
                                        <div class="search-result__header fd-flex fd-m-bottom-2xs fd-p-top-2xs--bp-s" data-test-search-result-header="">
                                            <div class="search-result__header-title-col">
                                                <a data-object-url-tracking="resultlist" data-search-result-item-anchor="88916156" data-track-click="Listing Results Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6107157,&quot;navigation_trigger&quot;:&quot;listing_results_listing&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                                <h2 class="search-result__header-title fd-m-none" data-test-search-result-header-title="">Zandstraat 17</h2></a> <a data-object-url-tracking="resultlist" data-search-result-item-anchor="88916156" data-track-click="Listing Results Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6107157,&quot;navigation_trigger&quot;:&quot;listing_results_listing&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                                <h4 class="search-result__header-subtitle fd-m-none" data-test-search-result-header-subtitle="">4184 EE Opijnen</h4></a>
                                            </div>
                                            <div class="user-save-object" data-controller-uid="9" data-is-user-logged-in="true" data-listing-tracking-properties="{&quot;global_id&quot;:6107157,&quot;listing_offering_type&quot;:&quot;koop&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" data-save-object="" data-save-object-tinyid="88916156">
                                                <button class="user-save-object__handle user-save-object__handle--add fd-p-none fd-m-none" data-save-object-add-url="/en/mijn/objectactions/saveobject/?internalId=bed25a5c-792a-4ab4-87d1-7ffc6bfb9fed&amp;tinyId=88916156&amp;trackingListingOfferingType=koop&amp;trackingSiteSection=listings&amp;trackingPageType=listing_results&amp;trackingNavigationTrigger=listing_results_listing" data-save-object-handle="add"><span class="user-save-object__handle-icon icon-heart-blue" data-grunticon-embed=""></span></button> <button class="user-save-object__handle user-save-object__handle--remove fd-p-none fd-m-none" data-save-object-handle="remove" data-save-object-remove-url="/en/mijn/objectactions/removesavedobject/?internalId=bed25a5c-792a-4ab4-87d1-7ffc6bfb9fed&amp;tinyId=88916156&amp;trackingListingOfferingType=koop&amp;trackingSiteSection=listings&amp;trackingPageType=listing_results&amp;trackingNavigationTrigger=listing_results_listing"><span class="user-save-object__handle-icon icon-heart-filled-red" data-grunticon-embed=""></span></button>
                                            </div>
                                        </div>
                                        <div class="search-result-info search-result-info-price">
                                            <span class="search-result-price">€ 575,000 k.k.</span>
                                        </div>
                                        <div class="search-result-info">
                                            <ul class="search-result-kenmerken">
                                                <li><span title="Living area">136 m²</span> / <span title="Plot size">735 m²</span></li>
                                                <li>5 rooms</li>
                                            </ul>
                                        </div><a class="search-result-makelaar" href="/en/makelaars/ochten/63347-makelaardij-stenfert/"><span class="search-result-makelaar-icon icon-logo-vbo"></span> <span class="search-result-makelaar-name">Makelaardij Stenfert</span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="search-result promo" data-global-id="6107143" data-listing-type="promo" data-search-result-listing="">
                            <div class="search-result-main-promo">
                                <a data-object-url-tracking="resultlist" data-search-result-item-anchor="88916142" data-track-click="Featured Listing Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6107143,&quot;placement&quot;:&quot;listing_results_promo&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                <div class="search-promolabel-new">
                                    <div>
                                        <div class="label label-blikvanger">
                                            Eyecatcher
                                        </div>Woonkeuken, dakkapel, diepe tuin en grote schuur achter de tuin.
                                    </div>
                                </div></a>
                                <div class="search-result-media-promo">
                                    <div class="search-result-image-promo">
                                        <div class="promo-thumbnail">
                                            <div class="search-result__header-labels-col">
                                                <ul class="labels search-result__header-labels">
                                                    <li class="label label-nieuw">New</li>
                                                </ul>
                                            </div><a data-object-url-tracking="resultlist" data-search-result-item-anchor="88916142" data-track-click="Featured Listing Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6107143,&quot;placement&quot;:&quot;listing_results_promo&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}"><img alt="Jonkhof 10" sizes="" src="https://cloud.funda.nl/valentina_media/149/890/040_720x480.jpg" srcset="https://cloud.funda.nl/valentina_media/149/890/040_360x240.jpg 360w, https://cloud.funda.nl/valentina_media/149/890/040_180x120.jpg 180w, https://cloud.funda.nl/valentina_media/149/890/040_720x480.jpg 720w"></a>
                                        </div>
                                        <div class="promo-thumbnail">
                                            <a data-object-url-tracking="resultlist" data-search-result-item-anchor="88916142" data-track-click="Featured Listing Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6107143,&quot;placement&quot;:&quot;listing_results_promo&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}"><img alt="Jonkhof 10" sizes="" src="https://cloud.funda.nl/valentina_media/149/890/038_720x480.jpg" srcset="https://cloud.funda.nl/valentina_media/149/890/038_360x240.jpg 360w, https://cloud.funda.nl/valentina_media/149/890/038_180x120.jpg 180w, https://cloud.funda.nl/valentina_media/149/890/038_720x480.jpg 720w"></a>
                                        </div>
                                        <div class="promo-thumbnail">
                                            <a data-object-url-tracking="resultlist" data-search-result-item-anchor="88916142" data-track-click="Featured Listing Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6107143,&quot;placement&quot;:&quot;listing_results_promo&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}"><img alt="Jonkhof 10" sizes="" src="https://cloud.funda.nl/valentina_media/149/890/039_720x480.jpg" srcset="https://cloud.funda.nl/valentina_media/149/890/039_360x240.jpg 360w, https://cloud.funda.nl/valentina_media/149/890/039_180x120.jpg 180w, https://cloud.funda.nl/valentina_media/149/890/039_720x480.jpg 720w"></a>
                                        </div><a data-object-url-tracking="resultlist" data-search-result-item-anchor="88916142" data-track-click="Featured Listing Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6107143,&quot;placement&quot;:&quot;listing_results_promo&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">}
                                        <div class="search-result-media-icons">
                                            <span class="search-result-media-icon icon-floorplan-white" title="Floorplan available"></span> <span class="search-result-media-icon icon-360-white" title="360° photos available"></span> <span class="search-result-media-icon icon-video-white" title="Video available"></span>
                                        </div>if (Model.HasLink) {</a>
                                    </div>
                                </div>
                                <div class="search-result-content-promo">
                                    <div class="search-result-content-inner">
                                        <div class="search-result-content-makelaar-logo">
                                            <a class="fd-flex" href="/en/makelaars/den-bosch/63284-bighelaardij-bv/"><img alt="Bighelaardij B.V." class="search-result-makelaar-logo-big" onerror="this.onerror=null; this.src='https://assets.fstatic.nl/master_3718' + '/assets/components/agents-nearby/no-logo.svg';" src="https://cloud.funda.nl/valentina_media/105/606/403_logogroot.png"></a>
                                        </div>
                                        <div class="search-result-content-info">
                                            <div class="search-result-content-info--object">
                                                <div class="search-result__header fd-flex fd-m-bottom-2xs fd-p-top-2xs--bp-s" data-test-search-result-header="">
                                                    <div class="search-result__header-title-col">
                                                        <a data-object-url-tracking="resultlist" data-search-result-item-anchor="88916142" data-track-click="Featured Listing Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6107143,&quot;placement&quot;:&quot;listing_results_promo&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                                        <h2 class="search-result__header-title fd-m-none" data-test-search-result-header-title="">Jonkhof 10</h2></a> <a data-object-url-tracking="resultlist" data-search-result-item-anchor="88916142" data-track-click="Featured Listing Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6107143,&quot;placement&quot;:&quot;listing_results_promo&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                                        <h4 class="search-result__header-subtitle fd-m-none" data-test-search-result-header-subtitle="">5237 PE Den Bosch</h4></a>
                                                    </div>
                                                    <div class="user-save-object" data-controller-uid="10" data-is-user-logged-in="true" data-listing-tracking-properties="{&quot;global_id&quot;:6107143,&quot;listing_offering_type&quot;:&quot;koop&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" data-save-object="" data-save-object-tinyid="88916142">
                                                        <button class="user-save-object__handle user-save-object__handle--add fd-p-none fd-m-none" data-save-object-add-url="/en/mijn/objectactions/saveobject/?internalId=8f8e2727-d526-4309-8e9a-b575b5369145&amp;tinyId=88916142&amp;trackingListingOfferingType=koop&amp;trackingSiteSection=listings&amp;trackingPageType=listing_results&amp;trackingNavigationTrigger=listing_results_listing" data-save-object-handle="add"><span class="user-save-object__handle-icon icon-heart-blue" data-grunticon-embed=""></span></button> <button class="user-save-object__handle user-save-object__handle--remove fd-p-none fd-m-none" data-save-object-handle="remove" data-save-object-remove-url="/en/mijn/objectactions/removesavedobject/?internalId=8f8e2727-d526-4309-8e9a-b575b5369145&amp;tinyId=88916142&amp;trackingListingOfferingType=koop&amp;trackingSiteSection=listings&amp;trackingPageType=listing_results&amp;trackingNavigationTrigger=listing_results_listing"><span class="user-save-object__handle-icon icon-heart-filled-red" data-grunticon-embed=""></span></button>
                                                    </div>
                                                </div>
                                                <div class="search-result-info search-result-info-price">
                                                    <span class="search-result-price">€ 485,000 k.k.</span>
                                                </div>
                                                <div class="search-result-info">
                                                    <ul class="search-result-kenmerken">
                                                        <li><span title="Living area">123 m²</span> / <span title="Plot size">228 m²</span></li>
                                                        <li>5 rooms</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="search-result-content-info--makelaar">
                                                <a class="search-result-makelaar promo fd-flex" href="/en/makelaars/den-bosch/63284-bighelaardij-bv/"><img alt="Bighelaardij B.V." class="search-result-makelaar-logo-small" src="https://cloud.funda.nl/valentina_media/105/606/403_logogroot.png"> <span class="search-result-makelaar-name">Bighelaardij B.V.</span> <span class="search-result-makelaar-icon icon-logo-vbo"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="search-result" data-global-id="6107121" data-listing-type="regular" data-search-result-listing="" data-test-search-result-item="">
                            <div class="search-result-main">
                                <div class="search-result-thumbnail-container">
                                    <div class="search-result__header-labels-col">
                                        <ul class="labels search-result__header-labels">
                                            <li class="label label-nieuw">New</li>
                                        </ul>
                                    </div>
                                    <div class="search-result-media">
                                        <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42552584" data-track-click="Listing Results Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6107121,&quot;navigation_trigger&quot;:&quot;listing_results_listing&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                        <div class="search-result-image">
                                            <img alt="Steenkreek 27" sizes="(min-width: 500px) 228px, calc(100vw - 2rem)" src="https://cloud.funda.nl/valentina_media/149/889/078_720x480.jpg" srcset="https://cloud.funda.nl/valentina_media/149/889/078_360x240.jpg 360w, https://cloud.funda.nl/valentina_media/149/889/078_180x120.jpg 180w, https://cloud.funda.nl/valentina_media/149/889/078_720x480.jpg 720w">
                                            <div class="search-result-media-icons">
                                                <span class="search-result-media-icon icon-floorplan-white" title="Floorplan available"></span> <span class="search-result-media-icon icon-360-white" title="360° photos available"></span> <span class="search-result-media-icon icon-video-white" title="Video available"></span>
                                            </div>
                                        </div></a>
                                    </div>
                                </div>
                                <div class="search-result-content">
                                    <div class="search-result-content-inner">
                                        <div class="search-result__header fd-flex fd-m-bottom-2xs fd-p-top-2xs--bp-s" data-test-search-result-header="">
                                            <div class="search-result__header-title-col">
                                                <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42552584" data-track-click="Listing Results Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6107121,&quot;navigation_trigger&quot;:&quot;listing_results_listing&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                                <h2 class="search-result__header-title fd-m-none" data-test-search-result-header-title="">Steenkreek 27</h2></a> <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42552584" data-track-click="Listing Results Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6107121,&quot;navigation_trigger&quot;:&quot;listing_results_listing&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                                <h4 class="search-result__header-subtitle fd-m-none" data-test-search-result-header-subtitle="">3253 EG Ouddorp</h4></a>
                                            </div>
                                            <div class="user-save-object" data-controller-uid="11" data-is-user-logged-in="true" data-listing-tracking-properties="{&quot;global_id&quot;:6107121,&quot;listing_offering_type&quot;:&quot;koop&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" data-save-object="" data-save-object-tinyid="42552584">
                                                <button class="user-save-object__handle user-save-object__handle--add fd-p-none fd-m-none" data-save-object-add-url="/en/mijn/objectactions/saveobject/?internalId=4a853d79-ceb0-4c45-9f4c-815735a5b0cd&amp;tinyId=42552584&amp;trackingListingOfferingType=koop&amp;trackingSiteSection=listings&amp;trackingPageType=listing_results&amp;trackingNavigationTrigger=listing_results_listing" data-save-object-handle="add"><span class="user-save-object__handle-icon icon-heart-blue" data-grunticon-embed=""></span></button> <button class="user-save-object__handle user-save-object__handle--remove fd-p-none fd-m-none" data-save-object-handle="remove" data-save-object-remove-url="/en/mijn/objectactions/removesavedobject/?internalId=4a853d79-ceb0-4c45-9f4c-815735a5b0cd&amp;tinyId=42552584&amp;trackingListingOfferingType=koop&amp;trackingSiteSection=listings&amp;trackingPageType=listing_results&amp;trackingNavigationTrigger=listing_results_listing"><span class="user-save-object__handle-icon icon-heart-filled-red" data-grunticon-embed=""></span></button>
                                            </div>
                                        </div>
                                        <div class="search-result-info search-result-info-price">
                                            <span class="search-result-price">€ 595,000 k.k.</span>
                                        </div>
                                        <div class="search-result-info">
                                            <ul class="search-result-kenmerken">
                                                <li><span title="Living area">123 m²</span> / <span title="Plot size">510 m²</span></li>
                                                <li>4 rooms</li>
                                            </ul>
                                        </div><a class="search-result-makelaar" href="/en/koop/ouddorp/huis-42552584-steenkreek-27/"><span class="search-result-makelaar-icon icon-logo-nvm"></span> <span class="search-result-makelaar-name">More than one real estate agent involved</span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="search-result" data-global-id="6107084" data-listing-type="regular" data-search-result-listing="" data-test-search-result-item="">
                            <div class="search-result-main">
                                <div class="search-result-thumbnail-container">
                                    <div class="search-result__header-labels-col">
                                        <ul class="labels search-result__header-labels">
                                            <li class="label label-nieuw">New</li>
                                        </ul>
                                    </div>
                                    <div class="search-result-media">
                                        <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42552447" data-track-click="Listing Results Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6107084,&quot;navigation_trigger&quot;:&quot;listing_results_listing&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                        <div class="search-result-image">
                                            <img alt="Sportlaan 3" sizes="(min-width: 500px) 228px, calc(100vw - 2rem)" src="https://cloud.funda.nl/valentina_media/149/887/723_720x480.jpg" srcset="https://cloud.funda.nl/valentina_media/149/887/723_360x240.jpg 360w, https://cloud.funda.nl/valentina_media/149/887/723_180x120.jpg 180w, https://cloud.funda.nl/valentina_media/149/887/723_720x480.jpg 720w">
                                            <div class="search-result-media-icons">
                                                <span class="search-result-media-icon icon-floorplan-white" title="Floorplan available"></span> <span class="search-result-media-icon icon-360-white" title="360° photos available"></span> <span class="search-result-media-icon icon-video-white" title="Video available"></span>
                                            </div>
                                        </div></a>
                                    </div>
                                </div>
                                <div class="search-result-content">
                                    <div class="search-result-content-inner">
                                        <div class="search-result__header fd-flex fd-m-bottom-2xs fd-p-top-2xs--bp-s" data-test-search-result-header="">
                                            <div class="search-result__header-title-col">
                                                <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42552447" data-track-click="Listing Results Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6107084,&quot;navigation_trigger&quot;:&quot;listing_results_listing&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                                <h2 class="search-result__header-title fd-m-none" data-test-search-result-header-title="">Sportlaan 3</h2></a> <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42552447" data-track-click="Listing Results Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6107084,&quot;navigation_trigger&quot;:&quot;listing_results_listing&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                                <h4 class="search-result__header-subtitle fd-m-none" data-test-search-result-header-subtitle="">1701 GN Heerhugowaard</h4></a>
                                            </div>
                                            <div class="user-save-object" data-controller-uid="12" data-is-user-logged-in="true" data-listing-tracking-properties="{&quot;global_id&quot;:6107084,&quot;listing_offering_type&quot;:&quot;koop&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" data-save-object="" data-save-object-tinyid="42552447">
                                                <button class="user-save-object__handle user-save-object__handle--add fd-p-none fd-m-none" data-save-object-add-url="/en/mijn/objectactions/saveobject/?internalId=8b9bf917-fcf6-47c5-8bb1-b9d02318a604&amp;tinyId=42552447&amp;trackingListingOfferingType=koop&amp;trackingSiteSection=listings&amp;trackingPageType=listing_results&amp;trackingNavigationTrigger=listing_results_listing" data-save-object-handle="add"><span class="user-save-object__handle-icon icon-heart-blue" data-grunticon-embed=""></span></button> <button class="user-save-object__handle user-save-object__handle--remove fd-p-none fd-m-none" data-save-object-handle="remove" data-save-object-remove-url="/en/mijn/objectactions/removesavedobject/?internalId=8b9bf917-fcf6-47c5-8bb1-b9d02318a604&amp;tinyId=42552447&amp;trackingListingOfferingType=koop&amp;trackingSiteSection=listings&amp;trackingPageType=listing_results&amp;trackingNavigationTrigger=listing_results_listing"><span class="user-save-object__handle-icon icon-heart-filled-red" data-grunticon-embed=""></span></button>
                                            </div>
                                        </div>
                                        <div class="search-result-info search-result-info-price">
                                            <span class="search-result-price">€ 699,000 k.k.</span>
                                        </div>
                                        <div class="search-result-info">
                                            <ul class="search-result-kenmerken">
                                                <li><span title="Living area">186 m²</span> / <span title="Plot size">330 m²</span></li>
                                                <li>8 rooms</li>
                                            </ul>
                                        </div><a class="search-result-makelaar" href="/en/makelaars/heerhugowaard/12120-vlieg-makelaars-heerhugowaard-og/"><span class="search-result-makelaar-icon icon-logo-nvm"></span> <span class="search-result-makelaar-name">VLIEG Makelaars Heerhugowaard OG</span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="search-result" data-global-id="6107027" data-listing-type="regular" data-search-result-listing="" data-test-search-result-item="">
                            <div class="search-result-main">
                                <div class="search-result-thumbnail-container">
                                    <div class="search-result__header-labels-col">
                                        <ul class="labels search-result__header-labels">
                                            <li class="label label-nieuw">New</li>
                                        </ul>
                                    </div>
                                    <div class="search-result-media">
                                        <a data-object-url-tracking="resultlist" data-search-result-item-anchor="88916026" data-track-click="Listing Results Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6107027,&quot;navigation_trigger&quot;:&quot;listing_results_listing&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                        <div class="search-result-image">
                                            <img alt="Dokter Diamantlaan 102" sizes="(min-width: 500px) 228px, calc(100vw - 2rem)" src="https://cloud.funda.nl/valentina_media/149/884/596_720x480.jpg" srcset="https://cloud.funda.nl/valentina_media/149/884/596_360x240.jpg 360w, https://cloud.funda.nl/valentina_media/149/884/596_180x120.jpg 180w, https://cloud.funda.nl/valentina_media/149/884/596_720x480.jpg 720w">
                                            <div class="search-result-media-icons">
                                                <span class="search-result-media-icon icon-floorplan-white" title="Floorplan available"></span> <span class="search-result-media-icon icon-360-white" title="360° photos available"></span> <span class="search-result-media-icon icon-video-white" title="Video available"></span>
                                            </div>
                                        </div></a>
                                    </div>
                                </div>
                                <div class="search-result-content">
                                    <div class="search-result-content-inner">
                                        <div class="search-result__header fd-flex fd-m-bottom-2xs fd-p-top-2xs--bp-s" data-test-search-result-header="">
                                            <div class="search-result__header-title-col">
                                                <a data-object-url-tracking="resultlist" data-search-result-item-anchor="88916026" data-track-click="Listing Results Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6107027,&quot;navigation_trigger&quot;:&quot;listing_results_listing&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                                <h2 class="search-result__header-title fd-m-none" data-test-search-result-header-title="">Dokter Diamantlaan 102</h2></a> <a data-object-url-tracking="resultlist" data-search-result-item-anchor="88916026" data-track-click="Listing Results Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6107027,&quot;navigation_trigger&quot;:&quot;listing_results_listing&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                                <h4 class="search-result__header-subtitle fd-m-none" data-test-search-result-header-subtitle="">3151 MB Hoek van Holland</h4></a>
                                            </div>
                                            <div class="user-save-object" data-controller-uid="13" data-is-user-logged-in="true" data-listing-tracking-properties="{&quot;global_id&quot;:6107027,&quot;listing_offering_type&quot;:&quot;koop&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" data-save-object="" data-save-object-tinyid="88916026">
                                                <button class="user-save-object__handle user-save-object__handle--add fd-p-none fd-m-none" data-save-object-add-url="/en/mijn/objectactions/saveobject/?internalId=b82e729f-804f-444c-9120-31a3688d25d3&amp;tinyId=88916026&amp;trackingListingOfferingType=koop&amp;trackingSiteSection=listings&amp;trackingPageType=listing_results&amp;trackingNavigationTrigger=listing_results_listing" data-save-object-handle="add"><span class="user-save-object__handle-icon icon-heart-blue" data-grunticon-embed=""></span></button> <button class="user-save-object__handle user-save-object__handle--remove fd-p-none fd-m-none" data-save-object-handle="remove" data-save-object-remove-url="/en/mijn/objectactions/removesavedobject/?internalId=b82e729f-804f-444c-9120-31a3688d25d3&amp;tinyId=88916026&amp;trackingListingOfferingType=koop&amp;trackingSiteSection=listings&amp;trackingPageType=listing_results&amp;trackingNavigationTrigger=listing_results_listing"><span class="user-save-object__handle-icon icon-heart-filled-red" data-grunticon-embed=""></span></button>
                                            </div>
                                        </div>
                                        <div class="search-result-info search-result-info-price">
                                            <span class="search-result-price">€ 475,000 k.k.</span>
                                        </div>
                                        <div class="search-result-info">
                                            <ul class="search-result-kenmerken">
                                                <li><span title="Living area">117 m²</span> / <span title="Plot size">192 m²</span></li>
                                                <li>4 rooms</li>
                                            </ul>
                                        </div><a class="search-result-makelaar" href="/en/makelaars/hoek-van-holland/62504-woonvreugde/"><span class="search-result-makelaar-icon icon-logo-vbo"></span> <span class="search-result-makelaar-name">Woonvreugde</span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ol>
                    <div class="search-ad" data-resultlist-ad="2002" data-test-search-ad="">
                        <aside class="advertisement dfp-display-blocked hidden" data-advertisement-adunit-path="/7276/funda.koop/resultaatlijst/web/leaderboard2_koop_resultaatlijst_web_r0" data-advertisement-lok="2002" data-advertisement-size-default="[ 0, 0 ]" data-advertisement-size-mapping="[[[1020, 0],[]],[[760, 0],[[728, 90]]],[[320, 0],[[320, 50],[320, 100],[300, 250],[320, 240]]],[[0, 0],[]]]" data-advertisements="" data-advertisements-async="true" data-advertisements-event-trigger="" data-advertisements-lazy-type="scroll" data-advertisements-render-margin="25" data-test-advertisement="" id="ad_9996df48-2c0d-4908-b6c5-c3ad3f4510c6"></aside>
                    </div>
                    <ol class="search-results" data-component="search-results" data-search-results-lists="" start="10">
                        <li class="search-result" data-global-id="6106993" data-listing-type="regular" data-search-result-listing="" data-test-search-result-item="">
                            <div class="search-result-main">
                                <div class="search-result-thumbnail-container">
                                    <div class="search-result__header-labels-col">
                                        <ul class="labels search-result__header-labels">
                                            <li class="label label-nieuw">New</li>
                                        </ul>
                                    </div>
                                    <div class="search-result-media">
                                        <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42551356" data-track-click="Listing Results Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6106993,&quot;navigation_trigger&quot;:&quot;listing_results_listing&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                        <div class="search-result-image">
                                            <img alt="Groenewoud 15" sizes="(min-width: 500px) 228px, calc(100vw - 2rem)" src="https://cloud.funda.nl/valentina_media/149/884/285_720x480.jpg" srcset="https://cloud.funda.nl/valentina_media/149/884/285_360x240.jpg 360w, https://cloud.funda.nl/valentina_media/149/884/285_180x120.jpg 180w, https://cloud.funda.nl/valentina_media/149/884/285_720x480.jpg 720w">
                                            <div class="search-result-media-icons">
                                                <span class="search-result-media-icon icon-floorplan-white" title="Floorplan available"></span> <span class="search-result-media-icon icon-360-white" title="360° photos available"></span> <span class="search-result-media-icon icon-video-white" title="Video available"></span>
                                            </div>
                                        </div></a>
                                    </div>
                                </div>
                                <div class="search-result-content">
                                    <div class="search-result-content-inner">
                                        <div class="search-result__header fd-flex fd-m-bottom-2xs fd-p-top-2xs--bp-s" data-test-search-result-header="">
                                            <div class="search-result__header-title-col">
                                                <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42551356" data-track-click="Listing Results Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6106993,&quot;navigation_trigger&quot;:&quot;listing_results_listing&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                                <h2 class="search-result__header-title fd-m-none" data-test-search-result-header-title="">Groenewoud 15</h2></a> <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42551356" data-track-click="Listing Results Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6106993,&quot;navigation_trigger&quot;:&quot;listing_results_listing&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                                <h4 class="search-result__header-subtitle fd-m-none" data-test-search-result-header-subtitle="">5751 CR Deurne</h4></a>
                                            </div>
                                            <div class="user-save-object" data-controller-uid="14" data-is-user-logged-in="true" data-listing-tracking-properties="{&quot;global_id&quot;:6106993,&quot;listing_offering_type&quot;:&quot;koop&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" data-save-object="" data-save-object-tinyid="42551356">
                                                <button class="user-save-object__handle user-save-object__handle--add fd-p-none fd-m-none" data-save-object-add-url="/en/mijn/objectactions/saveobject/?internalId=d7945038-e0c9-4238-a5ad-7b3404703728&amp;tinyId=42551356&amp;trackingListingOfferingType=koop&amp;trackingSiteSection=listings&amp;trackingPageType=listing_results&amp;trackingNavigationTrigger=listing_results_listing" data-save-object-handle="add"><span class="user-save-object__handle-icon icon-heart-blue" data-grunticon-embed=""></span></button> <button class="user-save-object__handle user-save-object__handle--remove fd-p-none fd-m-none" data-save-object-handle="remove" data-save-object-remove-url="/en/mijn/objectactions/removesavedobject/?internalId=d7945038-e0c9-4238-a5ad-7b3404703728&amp;tinyId=42551356&amp;trackingListingOfferingType=koop&amp;trackingSiteSection=listings&amp;trackingPageType=listing_results&amp;trackingNavigationTrigger=listing_results_listing"><span class="user-save-object__handle-icon icon-heart-filled-red" data-grunticon-embed=""></span></button>
                                            </div>
                                        </div>
                                        <div class="search-result-info search-result-info-price">
                                            <span class="search-result-price">€ 299,000 k.k.</span>
                                        </div>
                                        <div class="search-result-info">
                                            <ul class="search-result-kenmerken">
                                                <li><span title="Living area">123 m²</span> / <span title="Plot size">176 m²</span></li>
                                                <li>5 rooms</li>
                                            </ul>
                                        </div><a class="search-result-makelaar" href="/en/makelaars/deurne/14268-van-santvoort-makelaars-bv/"><span class="search-result-makelaar-icon icon-logo-nvm"></span> <span class="search-result-makelaar-name">Van Santvoort Makelaars b.v.</span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="search-result" data-global-id="6106984" data-listing-type="regular" data-search-result-listing="" data-test-search-result-item="">
                            <div class="search-result-main">
                                <div class="search-result-thumbnail-container">
                                    <div class="search-result__header-labels-col">
                                        <ul class="labels search-result__header-labels">
                                            <li class="label label-nieuw">New</li>
                                        </ul>
                                    </div>
                                    <div class="search-result-media">
                                        <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42551347" data-track-click="Listing Results Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6106984,&quot;navigation_trigger&quot;:&quot;listing_results_listing&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                        <div class="search-result-image">
                                            <img alt="Voorbancken 14" sizes="(min-width: 500px) 228px, calc(100vw - 2rem)" src="https://cloud.funda.nl/valentina_media/149/883/931_720x480.jpg" srcset="https://cloud.funda.nl/valentina_media/149/883/931_360x240.jpg 360w, https://cloud.funda.nl/valentina_media/149/883/931_180x120.jpg 180w, https://cloud.funda.nl/valentina_media/149/883/931_720x480.jpg 720w">
                                            <div class="search-result-media-icons">
                                                <span class="search-result-media-icon icon-floorplan-white" title="Floorplan available"></span> <span class="search-result-media-icon icon-360-white" title="360° photos available"></span> <span class="search-result-media-icon icon-video-white" title="Video available"></span>
                                            </div>
                                        </div></a>
                                    </div>
                                </div>
                                <div class="search-result-content">
                                    <div class="search-result-content-inner">
                                        <div class="search-result__header fd-flex fd-m-bottom-2xs fd-p-top-2xs--bp-s" data-test-search-result-header="">
                                            <div class="search-result__header-title-col">
                                                <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42551347" data-track-click="Listing Results Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6106984,&quot;navigation_trigger&quot;:&quot;listing_results_listing&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                                <h2 class="search-result__header-title fd-m-none" data-test-search-result-header-title="">Voorbancken 14</h2></a> <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42551347" data-track-click="Listing Results Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6106984,&quot;navigation_trigger&quot;:&quot;listing_results_listing&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                                <h4 class="search-result__header-subtitle fd-m-none" data-test-search-result-header-subtitle="">3645 GV Vinkeveen</h4></a>
                                            </div>
                                            <div class="user-save-object" data-controller-uid="15" data-is-user-logged-in="true" data-listing-tracking-properties="{&quot;global_id&quot;:6106984,&quot;listing_offering_type&quot;:&quot;koop&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" data-save-object="" data-save-object-tinyid="42551347">
                                                <button class="user-save-object__handle user-save-object__handle--add fd-p-none fd-m-none" data-save-object-add-url="/en/mijn/objectactions/saveobject/?internalId=f400da41-f340-425f-bd0a-84e37577d846&amp;tinyId=42551347&amp;trackingListingOfferingType=koop&amp;trackingSiteSection=listings&amp;trackingPageType=listing_results&amp;trackingNavigationTrigger=listing_results_listing" data-save-object-handle="add"><span class="user-save-object__handle-icon icon-heart-blue" data-grunticon-embed=""></span></button> <button class="user-save-object__handle user-save-object__handle--remove fd-p-none fd-m-none" data-save-object-handle="remove" data-save-object-remove-url="/en/mijn/objectactions/removesavedobject/?internalId=f400da41-f340-425f-bd0a-84e37577d846&amp;tinyId=42551347&amp;trackingListingOfferingType=koop&amp;trackingSiteSection=listings&amp;trackingPageType=listing_results&amp;trackingNavigationTrigger=listing_results_listing"><span class="user-save-object__handle-icon icon-heart-filled-red" data-grunticon-embed=""></span></button>
                                            </div>
                                        </div>
                                        <div class="search-result-info search-result-info-price">
                                            <span class="search-result-price">€ 1,050,000 k.k.</span>
                                        </div>
                                        <div class="search-result-info">
                                            <ul class="search-result-kenmerken">
                                                <li><span title="Living area">227 m²</span> / <span title="Plot size">2,060 m²</span></li>
                                                <li>5 rooms</li>
                                            </ul>
                                        </div><a class="search-result-makelaar" href="/en/makelaars/mijdrecht/17340-vida-makelaars-og/"><span class="search-result-makelaar-icon icon-logo-nvm"></span> <span class="search-result-makelaar-name">Vida makelaars og</span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="search-result" data-global-id="6106941" data-listing-type="regular" data-search-result-listing="" data-test-search-result-item="">
                            <div class="search-result-main">
                                <div class="search-result-thumbnail-container">
                                    <div class="search-result__header-labels-col">
                                        <ul class="labels search-result__header-labels">
                                            <li class="label label-nieuw">New</li>
                                        </ul>
                                    </div>
                                    <div class="search-result-media">
                                        <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42551304" data-track-click="Listing Results Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6106941,&quot;navigation_trigger&quot;:&quot;listing_results_listing&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                        <div class="search-result-image">
                                            <img alt="Warenargaarde 608" sizes="(min-width: 500px) 228px, calc(100vw - 2rem)" src="https://cloud.funda.nl/valentina_media/149/882/286_720x480.jpg" srcset="https://cloud.funda.nl/valentina_media/149/882/286_360x240.jpg 360w, https://cloud.funda.nl/valentina_media/149/882/286_180x120.jpg 180w, https://cloud.funda.nl/valentina_media/149/882/286_720x480.jpg 720w">
                                            <div class="search-result-media-icons">
                                                <span class="search-result-media-icon icon-floorplan-white" title="Floorplan available"></span> <span class="search-result-media-icon icon-360-white" title="360° photos available"></span> <span class="search-result-media-icon icon-video-white" title="Video available"></span>
                                            </div>
                                        </div></a>
                                    </div>
                                </div>
                                <div class="search-result-content">
                                    <div class="search-result-content-inner">
                                        <div class="search-result__header fd-flex fd-m-bottom-2xs fd-p-top-2xs--bp-s" data-test-search-result-header="">
                                            <div class="search-result__header-title-col">
                                                <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42551304" data-track-click="Listing Results Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6106941,&quot;navigation_trigger&quot;:&quot;listing_results_listing&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="https://www.funda.nl/en/koop/apeldoorn/huis-42551304-warenargaarde-608/?navigateSource=resultlist">
                                                <h2 class="search-result__header-title fd-m-none" data-test-search-result-header-title="">Warenargaarde 608</h2></a> <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42551304" data-track-click="Listing Results Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6106941,&quot;navigation_trigger&quot;:&quot;listing_results_listing&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                                <h4 class="search-result__header-subtitle fd-m-none" data-test-search-result-header-subtitle="">7329 GM Apeldoorn</h4></a>
                                            </div>
                                            <div class="user-save-object" data-controller-uid="16" data-is-user-logged-in="true" data-listing-tracking-properties="{&quot;global_id&quot;:6106941,&quot;listing_offering_type&quot;:&quot;koop&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" data-save-object="" data-save-object-tinyid="42551304">
                                                <button class="user-save-object__handle user-save-object__handle--add fd-p-none fd-m-none" data-save-object-add-url="/en/mijn/objectactions/saveobject/?internalId=cb1f2f19-06e4-42fd-80e8-23d357ae80ce&amp;tinyId=42551304&amp;trackingListingOfferingType=koop&amp;trackingSiteSection=listings&amp;trackingPageType=listing_results&amp;trackingNavigationTrigger=listing_results_listing" data-save-object-handle="add"><span class="user-save-object__handle-icon icon-heart-blue" data-grunticon-embed=""></span></button> <button class="user-save-object__handle user-save-object__handle--remove fd-p-none fd-m-none" data-save-object-handle="remove" data-save-object-remove-url="/en/mijn/objectactions/removesavedobject/?internalId=cb1f2f19-06e4-42fd-80e8-23d357ae80ce&amp;tinyId=42551304&amp;trackingListingOfferingType=koop&amp;trackingSiteSection=listings&amp;trackingPageType=listing_results&amp;trackingNavigationTrigger=listing_results_listing"><span class="user-save-object__handle-icon icon-heart-filled-red" data-grunticon-embed=""></span></button>
                                            </div>
                                        </div>
                                        <div class="search-result-info search-result-info-price">
                                            <span class="search-result-price">€ 325,000 k.k.</span>
                                        </div>
                                        <div class="search-result-info">
                                            <ul class="search-result-kenmerken">
                                                <li><span title="Living area">116 m²</span> / <span title="Plot size">115 m²</span></li>
                                                <li>5 rooms</li>
                                            </ul>
                                        </div><a class="search-result-makelaar" href="/en/makelaars/apeldoorn/1123-mennink-makelaars/"><span class="search-result-makelaar-icon icon-logo-nvm"></span> <span class="search-result-makelaar-name">Mennink Makelaars</span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="search-result" data-global-id="6106931" data-listing-type="regular" data-search-result-listing="" data-test-search-result-item="">
                            <div class="search-result-main">
                                <div class="search-result-thumbnail-container">
                                    <div class="search-result__header-labels-col">
                                        <ul class="labels search-result__header-labels">
                                            <li class="label label-nieuw">New</li>
                                        </ul>
                                    </div>
                                    <div class="search-result-media">
                                        <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42551394" data-track-click="Listing Results Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6106931,&quot;navigation_trigger&quot;:&quot;listing_results_listing&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                        <div class="search-result-image">
                                            <img alt="Hof van Orléans 12" sizes="(min-width: 500px) 228px, calc(100vw - 2rem)" src="https://cloud.funda.nl/valentina_media/149/882/273_720x480.jpg" srcset="https://cloud.funda.nl/valentina_media/149/882/273_360x240.jpg 360w, https://cloud.funda.nl/valentina_media/149/882/273_180x120.jpg 180w, https://cloud.funda.nl/valentina_media/149/882/273_720x480.jpg 720w">
                                            <div class="search-result-media-icons">
                                                <span class="search-result-media-icon icon-floorplan-white" title="Floorplan available"></span> <span class="search-result-media-icon icon-360-white" title="360° photos available"></span> <span class="search-result-media-icon icon-video-white" title="Video available"></span>
                                            </div>
                                        </div></a>
                                    </div>
                                </div>
                                <div class="search-result-content">
                                    <div class="search-result-content-inner">
                                        <div class="search-result__header fd-flex fd-m-bottom-2xs fd-p-top-2xs--bp-s" data-test-search-result-header="">
                                            <div class="search-result__header-title-col">
                                                <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42551394" data-track-click="Listing Results Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6106931,&quot;navigation_trigger&quot;:&quot;listing_results_listing&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                                <h2 class="search-result__header-title fd-m-none" data-test-search-result-header-title="">Hof van Orléans 12</h2></a> <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42551394" data-track-click="Listing Results Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6106931,&quot;navigation_trigger&quot;:&quot;listing_results_listing&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                                <h4 class="search-result__header-subtitle fd-m-none" data-test-search-result-header-subtitle="">7007 JA Doetinchem</h4></a>
                                            </div>
                                            <div class="user-save-object" data-controller-uid="17" data-is-user-logged-in="true" data-listing-tracking-properties="{&quot;global_id&quot;:6106931,&quot;listing_offering_type&quot;:&quot;koop&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" data-save-object="" data-save-object-tinyid="42551394">
                                                <button class="user-save-object__handle user-save-object__handle--add fd-p-none fd-m-none" data-save-object-add-url="/en/mijn/objectactions/saveobject/?internalId=bc081ca8-5391-4283-a6b7-de3ff1959b0a&amp;tinyId=42551394&amp;trackingListingOfferingType=koop&amp;trackingSiteSection=listings&amp;trackingPageType=listing_results&amp;trackingNavigationTrigger=listing_results_listing" data-save-object-handle="add"><span class="user-save-object__handle-icon icon-heart-blue" data-grunticon-embed=""></span></button> <button class="user-save-object__handle user-save-object__handle--remove fd-p-none fd-m-none" data-save-object-handle="remove" data-save-object-remove-url="/en/mijn/objectactions/removesavedobject/?internalId=bc081ca8-5391-4283-a6b7-de3ff1959b0a&amp;tinyId=42551394&amp;trackingListingOfferingType=koop&amp;trackingSiteSection=listings&amp;trackingPageType=listing_results&amp;trackingNavigationTrigger=listing_results_listing"><span class="user-save-object__handle-icon icon-heart-filled-red" data-grunticon-embed=""></span></button>
                                            </div>
                                        </div>
                                        <div class="search-result-info search-result-info-price">
                                            <span class="search-result-price">€ 539,000 k.k.</span>
                                        </div>
                                        <div class="search-result-info">
                                            <ul class="search-result-kenmerken">
                                                <li><span title="Living area">168 m²</span> / <span title="Plot size">438 m²</span></li>
                                                <li>7 rooms</li>
                                            </ul>
                                        </div><a class="search-result-makelaar" href="/en/makelaars/doetinchem/2249-heilbron-makelaardij/"><span class="search-result-makelaar-icon icon-logo-nvm"></span> <span class="search-result-makelaar-name">Heilbron Makelaardij</span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="search-result" data-global-id="6106929" data-listing-type="regular" data-search-result-listing="" data-test-search-result-item="">
                            <div class="search-result-main">
                                <div class="search-result-thumbnail-container">
                                    <div class="search-result__header-labels-col">
                                        <ul class="labels search-result__header-labels">
                                            <li class="label label-nieuw">New</li>
                                        </ul>
                                    </div>
                                    <div class="search-result-media">
                                        <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42551382" data-track-click="Listing Results Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6106929,&quot;navigation_trigger&quot;:&quot;listing_results_listing&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                        <div class="search-result-image">
                                            <img alt="Michiel de Ruyterstraat 9" sizes="(min-width: 500px) 228px, calc(100vw - 2rem)" src="https://cloud.funda.nl/valentina_media/149/882/492_720x480.jpg" srcset="https://cloud.funda.nl/valentina_media/149/882/492_360x240.jpg 360w, https://cloud.funda.nl/valentina_media/149/882/492_180x120.jpg 180w, https://cloud.funda.nl/valentina_media/149/882/492_720x480.jpg 720w">
                                            <div class="search-result-media-icons">
                                                <span class="search-result-media-icon icon-floorplan-white" title="Floorplan available"></span> <span class="search-result-media-icon icon-360-white" title="360° photos available"></span> <span class="search-result-media-icon icon-video-white" title="Video available"></span>
                                            </div>
                                        </div></a>
                                    </div>
                                </div>
                                <div class="search-result-content">
                                    <div class="search-result-content-inner">
                                        <div class="search-result__header fd-flex fd-m-bottom-2xs fd-p-top-2xs--bp-s" data-test-search-result-header="">
                                            <div class="search-result__header-title-col">
                                                <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42551382" data-track-click="Listing Results Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6106929,&quot;navigation_trigger&quot;:&quot;listing_results_listing&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                                <h2 class="search-result__header-title fd-m-none" data-test-search-result-header-title="">Michiel de Ruyterstraat 9</h2></a> <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42551382" data-track-click="Listing Results Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6106929,&quot;navigation_trigger&quot;:&quot;listing_results_listing&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                                <h4 class="search-result__header-subtitle fd-m-none" data-test-search-result-header-subtitle="">5831 KE Boxmeer</h4></a>
                                            </div>
                                            <div class="user-save-object" data-controller-uid="18" data-is-user-logged-in="true" data-listing-tracking-properties="{&quot;global_id&quot;:6106929,&quot;listing_offering_type&quot;:&quot;koop&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" data-save-object="" data-save-object-tinyid="42551382">
                                                <button class="user-save-object__handle user-save-object__handle--add fd-p-none fd-m-none" data-save-object-add-url="/en/mijn/objectactions/saveobject/?internalId=42e20a39-746d-4a2c-a552-ecc350ff5baf&amp;tinyId=42551382&amp;trackingListingOfferingType=koop&amp;trackingSiteSection=listings&amp;trackingPageType=listing_results&amp;trackingNavigationTrigger=listing_results_listing" data-save-object-handle="add"><span class="user-save-object__handle-icon icon-heart-blue" data-grunticon-embed=""></span></button> <button class="user-save-object__handle user-save-object__handle--remove fd-p-none fd-m-none" data-save-object-handle="remove" data-save-object-remove-url="/en/mijn/objectactions/removesavedobject/?internalId=42e20a39-746d-4a2c-a552-ecc350ff5baf&amp;tinyId=42551382&amp;trackingListingOfferingType=koop&amp;trackingSiteSection=listings&amp;trackingPageType=listing_results&amp;trackingNavigationTrigger=listing_results_listing"><span class="user-save-object__handle-icon icon-heart-filled-red" data-grunticon-embed=""></span></button>
                                            </div>
                                        </div>
                                        <div class="search-result-info search-result-info-price">
                                            <span class="search-result-price">€ 399,000 k.k.</span>
                                        </div>
                                        <div class="search-result-info">
                                            <ul class="search-result-kenmerken">
                                                <li><span title="Living area">189 m²</span> / <span title="Plot size">248 m²</span></li>
                                                <li>5 rooms</li>
                                            </ul>
                                        </div><a class="search-result-makelaar" href="/en/makelaars/boxmeer/13132-mvs-makelaardij/"><span class="search-result-makelaar-icon icon-logo-nvm"></span> <span class="search-result-makelaar-name">MVS makelaardij</span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="search-result" data-global-id="6106919" data-listing-type="regular" data-search-result-listing="" data-search-scroll-notify-target="" data-test-search-result-item="">
                            <div class="search-result-main">
                                <div class="search-result-thumbnail-container">
                                    <div class="search-result__header-labels-col">
                                        <ul class="labels search-result__header-labels">
                                            <li class="label label-nieuw">New</li>
                                        </ul>
                                    </div>
                                    <div class="search-result-media">
                                        <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42551372" data-track-click="Listing Results Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6106919,&quot;navigation_trigger&quot;:&quot;listing_results_listing&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                        <div class="search-result-image">
                                            <img alt="Hof van Versailles 41" sizes="(min-width: 500px) 228px, calc(100vw - 2rem)" src="https://cloud.funda.nl/valentina_media/149/882/180_720x480.jpg" srcset="https://cloud.funda.nl/valentina_media/149/882/180_360x240.jpg 360w, https://cloud.funda.nl/valentina_media/149/882/180_180x120.jpg 180w, https://cloud.funda.nl/valentina_media/149/882/180_720x480.jpg 720w">
                                            <div class="search-result-media-icons">
                                                <span class="search-result-media-icon icon-floorplan-white" title="Floorplan available"></span> <span class="search-result-media-icon icon-360-white" title="360° photos available"></span> <span class="search-result-media-icon icon-video-white" title="Video available"></span>
                                            </div>
                                        </div></a>
                                    </div>
                                </div>
                                <div class="search-result-content">
                                    <div class="search-result-content-inner">
                                        <div class="search-result__header fd-flex fd-m-bottom-2xs fd-p-top-2xs--bp-s" data-test-search-result-header="">
                                            <div class="search-result__header-title-col">
                                                <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42551372" data-track-click="Listing Results Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6106919,&quot;navigation_trigger&quot;:&quot;listing_results_listing&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                                <h2 class="search-result__header-title fd-m-none" data-test-search-result-header-title="">Hof van Versailles 41</h2></a> <a data-object-url-tracking="resultlist" data-search-result-item-anchor="42551372" data-track-click="Listing Results Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6106919,&quot;navigation_trigger&quot;:&quot;listing_results_listing&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="{{url('detail')}}">
                                                <h4 class="search-result__header-subtitle fd-m-none" data-test-search-result-header-subtitle="">1064 NX Amsterdam</h4></a>
                                            </div>
                                            <div class="user-save-object" data-controller-uid="19" data-is-user-logged-in="true" data-listing-tracking-properties="{&quot;global_id&quot;:6106919,&quot;listing_offering_type&quot;:&quot;koop&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" data-save-object="" data-save-object-tinyid="42551372">
                                                <button class="user-save-object__handle user-save-object__handle--add fd-p-none fd-m-none" data-save-object-add-url="/en/mijn/objectactions/saveobject/?internalId=5c7df5b2-8380-4376-a25a-c0d31d4f5718&amp;tinyId=42551372&amp;trackingListingOfferingType=koop&amp;trackingSiteSection=listings&amp;trackingPageType=listing_results&amp;trackingNavigationTrigger=listing_results_listing" data-save-object-handle="add"><span class="user-save-object__handle-icon icon-heart-blue" data-grunticon-embed=""></span></button> <button class="user-save-object__handle user-save-object__handle--remove fd-p-none fd-m-none" data-save-object-handle="remove" data-save-object-remove-url="/en/mijn/objectactions/removesavedobject/?internalId=5c7df5b2-8380-4376-a25a-c0d31d4f5718&amp;tinyId=42551372&amp;trackingListingOfferingType=koop&amp;trackingSiteSection=listings&amp;trackingPageType=listing_results&amp;trackingNavigationTrigger=listing_results_listing"><span class="user-save-object__handle-icon icon-heart-filled-red" data-grunticon-embed=""></span></button>
                                            </div>
                                        </div>
                                        <div class="search-result-info search-result-info-price">
                                            <span class="search-result-price">€ 750,000 k.k.</span>
                                        </div>
                                        <div class="search-result-info">
                                            <ul class="search-result-kenmerken">
                                                <li><span title="Living area">154 m²</span> / <span title="Plot size">123 m²</span></li>
                                                <li>7 rooms</li>
                                            </ul>
                                        </div><a class="search-result-makelaar" href="/en/makelaars/amsterdam/24770-makelaar-bert/"><span class="search-result-makelaar-icon icon-logo-nvm"></span> <span class="search-result-makelaar-name">MAKELAAR BERT</span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ol>
                    <div class="save-search-cta fd-m-horizontal-none--bp-m fd-m-bottom fd-p fd-p-vertical-xl--bp-m fd-p-right-xl--bp-m fd-p-left-none--bp-m fd-bg-blue-5">
                        <div class="fd-flex fd-flex-column--bp-m fd-align-items-center">
                            <svg class="save-search-cta__icon" viewbox="0 0 72 72" xmlns="http://www.w3.org/2000/svg">
                            <g fill="none" fill-rule="evenodd">
                                <circle cx="37.5" cy="36" fill="#FFF" r="27"></circle>
                                <path d="M30.689 7.588l.08 3.082a5.748 5.748 0 01-1.408 3.926 7.378 7.378 0 00-1.819 5.057c.114 4.375 3.745 7.83 8.11 7.715l2.935-.077a3.85 3.85 0 003.742-3.953l-.466-17.85a3.446 3.446 0 00-3.531-3.36l-2.537.067a5.251 5.251 0 00-5.106 5.393" fill="#53241B"></path>
                                <path d="M51.857 21.964l-.141-1.003a1.207 1.207 0 011.025-1.364l1.358-.192a1.71 1.71 0 011.932 1.46 1.713 1.713 0 01-1.455 1.936l-1.359.191a1.206 1.206 0 01-1.36-1.028" fill="#FFC101"></path>
                                <path d="M51.994 23.822l-1.8-1.359L51.8 20.33l1.799 1.358z" fill="#FFC101"></path>
                                <path d="M58.88 17.82l-3.536 4.705c-.381.507-1.1.608-1.606.226l-1.82-1.375a1.152 1.152 0 01-.226-1.61l3.536-4.704a1.145 1.145 0 011.606-.226l1.82 1.375c.506.382.607 1.103.226 1.61" fill="#53241B"></path>
                                <path d="M55.02 22.212l-2.932-2.215 3.533-4.7 2.933 2.215z" fill="#F5F9FB"></path>
                                <path d="M58.083 18.138l-2.932-2.215.47-.626 2.933 2.215z" fill="#FDCC2E"></path>
                                <path d="M56 19.851l-1.938-1.464 1.159-1.542 1.939 1.465z" fill="#6DCBF7"></path>
                                <path d="M59.623 11.633h-5.031a1.193 1.193 0 01-1.192-1.195V5.394c0-.66.534-1.194 1.192-1.194h5.031c.658 0 1.192.535 1.192 1.194v5.044c0 .66-.534 1.195-1.192 1.195" fill="#F7A100"></path>
                                <path d="M55.968 11.423l.88 1.384c.12.19.398.19.519 0l.88-1.384h-2.279z" fill="#F7A100"></path>
                                <path d="M57.128 9.965a.329.329 0 00.31-.22h.338a.657.657 0 01-1.295 0h.338c.046.132.17.22.31.22m0-3.734a.987.987 0 00-.987.989v.616a.33.33 0 01-.164.285.989.989 0 00-.487.966h3.274a.989.989 0 00-.486-.964.33.33 0 01-.165-.286V7.22a.987.987 0 00-.986-.989m0-.33c.726 0 1.315.59 1.315 1.319v.617c.55.316.794.981.58 1.58h-3.79a1.313 1.313 0 01.58-1.58V7.22c0-.728.59-1.318 1.315-1.318" fill="#FFF"></path>
                                <path d="M53.546 18.822l-1.087.153-.111.015-.122.018-.012.015c-.316.077-.6.254-.797.517l-.246.327c-.225.3-.322.677-.27 1.048l.072.512.093.31a.786.786 0 00.271.393.614.614 0 00.863-.112l.074-.096c.534-.697.27-1.386.048-1.755l1.385-.195a.58.58 0 00-.161-1.15" fill="#FFC101"></path>
                                <path d="M44.194 29.31l-5.982-6.199 2.616-2.773 4.936 4.862 4.787-4.033 2.56 3.053-6.208 5.229a1.982 1.982 0 01-2.71-.14z" fill="#00B6EC"></path>
                                <path d="M43.396 70.678h-2.913l-4.435-28.053h5.342z" fill="#F97D00"></path>
                                <path d="M46.215 71.955h-5.532l-.268-1.716 5.8.002a.856.856 0 010 1.714" fill="#00B6EC"></path>
                                <path d="M28.204 46.936a.543.543 0 00.52-.7l-1.733-5.723a.543.543 0 10-1.037.315l1.732 5.723a.543.543 0 00.518.385" fill="#7C90A6"></path>
                                <path d="M45.853 59.22c0-6.01 4.864-10.883 10.86-10.883 5.994 0 10.856 4.872 10.856 10.884 0 6.01-4.862 10.884-10.856 10.884-5.996 0-10.86-4.875-10.86-10.884m-1.846 0c0 7.031 5.69 12.732 12.706 12.732 7.013 0 12.7-5.701 12.7-12.732 0-7.033-5.687-12.733-12.7-12.733-7.016 0-12.706 5.7-12.706 12.733M5.004 59.22c0-6.01 4.864-10.883 10.86-10.883 5.995 0 10.857 4.872 10.857 10.884 0 6.01-4.862 10.884-10.857 10.884-5.996 0-10.86-4.875-10.86-10.884m-1.842 0c0 7.031 5.685 12.732 12.702 12.732 7.013 0 12.7-5.701 12.7-12.732 0-7.033-5.687-12.733-12.7-12.733-7.017 0-12.702 5.7-12.702 12.733" fill="#00A8E8"></path>
                                <path d="M15.864 46.488l-3.847.595-2.123.897 4.877 6.232a4.6 4.6 0 003.623 1.767h9.536l-.592-2.22-2.723-3.763-4.516-2.78-4.235-.728z" fill="#00A8E8"></path>
                                <path d="M48.833 41.29c.4 0 .749.274.843.664.01.04.994 4.072 2.689 9.46.69 2.197 2.582 4.373 3.963 5.963.347.398.661.76.918 1.078a.87.87 0 01-.125 1.222.864.864 0 01-1.22-.125c-.247-.304-.548-.65-.88-1.033-1.482-1.705-3.512-4.04-4.311-6.581-.616-1.96-1.14-3.744-1.558-5.226l-14.889 14.65a.865.865 0 01-1.421-.32l-6.796-18.583a.866.866 0 01.814-1.168l1.242 1.738 5.906 16.149 14.615-14.382c-.202-.75-.359-1.35-.465-1.767" fill="#53241B"></path>
                                <path d="M33.657 61.506a.651.651 0 00.06-1.3L16.719 58.6l10.683-16.08a.65.65 0 10-1.083-.722L15.033 58.786a.653.653 0 00.48 1.01l18.082 1.706a.52.52 0 00.062.003" fill="#53241B"></path>
                                <path d="M34.141 64.252l-18.247-2.546a2.43 2.43 0 01-2.139-2.414 2.429 2.429 0 012.426-2.432H34.58c2.044 0 3.7 1.66 3.7 3.709a3.703 3.703 0 01-4.138 3.683" fill="#53241B"></path>
                                <path d="M28.747 59.789a.567.567 0 01-.567-.568c0-6.809-5.525-12.348-12.317-12.348-6.793 0-12.318 5.54-12.318 12.348a.567.567 0 11-1.133 0c0-7.435 6.034-13.483 13.45-13.483 7.417 0 13.451 6.048 13.451 13.483a.567.567 0 01-.566.568M28.102 43.029l-.555-1.375s-.113-.396-.686-.364l-.287.87 1.528 1.03v-.161zM30.879 54.173v-1.661c3.84 0 7.486-1.464 10.263-4.124l7.05-6.75 1.145 1.201-7.05 6.75a16.424 16.424 0 01-11.408 4.584M53.539 41.591h-1.607a1.766 1.766 0 01-1.764-1.768c0-.977.79-1.768 1.764-1.768h1.607v3.536z" fill="#53241B"></path>
                                <path d="M51.317 39.858a.573.573 0 00-.812 0l-1.71 1.793c.205.354.379.646.518 1.03l2.004-2.009a.577.577 0 000-.814M23.092 47.967a.563.563 0 01-.403-.168l-1.63-1.653a.751.751 0 00-.539-.232H8.827a.567.567 0 010-1.135H20.52c.506 0 .998.209 1.35.574L23.494 47a.569.569 0 01-.403.967" fill="#53241B"></path>
                                <path d="M30.29 37.538h-7.695c-.672 0-1.217.547-1.217 1.22v.813c0 .891.721 1.614 1.61 1.614h.778c.743 0 1.475-.189 2.125-.549l1.564-.864c.238-.132.506-.201.778-.201h1.458c.648 0 1.174-.527 1.174-1.177v-.28a.575.575 0 00-.574-.576" fill="#F97D00"></path>
                                <path d="M43.637 59.789a.567.567 0 01-.567-.568c0-7.54 6.12-13.674 13.64-13.674a.567.567 0 010 1.136c-6.896 0-12.507 5.625-12.507 12.538a.567.567 0 01-.566.568" fill="#53241B"></path>
                                <path d="M31.284 70.678h3.156l1.522-28.053h-5.134z" fill="#F7A100"></path>
                                <path d="M35.372 71.955h-4.088v-1.714h4.088a.856.856 0 010 1.714" fill="#00B6EC"></path>
                                <path d="M49.185 44.21a.829.829 0 01-.823-.666l-.837-4.174a.828.828 0 111.624-.327l.838 4.174a.83.83 0 01-.802.994" fill="#53241B"></path>
                                <path d="M42.972 41.83c.04 4.541-.183 4.199-.183 4.199a1.175 1.175 0 01-1.163 1.125l-10.548.093A1.169 1.169 0 0129.9 46.15s-.282-1.09-.312-4.473c-.011-1.343.078-3.115.22-5.05v-.007c.028-.366.056-.738.087-1.114a6.464 6.464 0 011.774-3.5 6.458 6.458 0 014.57-1.944c3.44-.03 6.28 2.63 6.527 6.02l.015.346a.698.698 0 01.003.078c.104 2.191.177 4.121.188 5.322" fill="#00B6EC"></path>
                                <path d="M42.782 36.394a6.493 6.493 0 01-1.78 4.649 6.459 6.459 0 01-4.536 2.023 6.456 6.456 0 01-4.636-1.782 6.493 6.493 0 01-2.02-4.542v-.007c.021-.367.043-.74.068-1.116.392-6.148 1.2-13.32 1.2-13.32a3.032 3.032 0 012.952-2.82l4.598-.12c.11-.003.219-.002.324.01a2.6 2.6 0 01.69.136c.115.031.224.08.33.13.052.021.106.05.158.077.04.024.084.047.126.073a3.03 3.03 0 011.486 2.407s.62 7.74 1.015 13.778l.02.346a.83.83 0 01.005.078" fill="#00B6EC"></path>
                                <path d="M42.757 35.97l.02.346a6.613 6.613 0 01-.005.641l-12.945.113a6.636 6.636 0 01-.018-.328v-.007c.022-.367.044-.74.069-1.116.02-.318.041-.639.064-.961l.046-.646.015-.216 12.6-.111c.053.775.105 1.543.154 2.285zm-.374-5.365l-12.132.105c.115-1.342.235-2.63.347-3.776l11.505-.101c.087 1.15.183 2.438.28 3.772zM42.972 41.83c.005.564.006 1.053.003 1.477l-13.344.118a51.141 51.141 0 01-.043-1.747 37.68 37.68 0 01.022-1.53l13.32-.115c.023.698.037 1.307.042 1.796z" fill="#39C4EF"></path>
                                <path d="M47.947 39.43l-.869-3.68a1.577 1.577 0 011.157-1.9l1.36-.301a.519.519 0 00.418-.475.52.52 0 00-.326-.542.527.527 0 00-.205-.041h-.002l-8.97.02-.003-1.057 8.97-.02c.225-.008.421.04.618.124.651.274 1.03.906.968 1.61a1.565 1.565 0 01-1.239 1.412l-1.35.3a.517.517 0 00-.37.624l.869 3.684-1.026.243z" fill="#6DCBF7"></path>
                                <path d="M49.185 44.21a.829.829 0 01-.823-.666l-.837-4.174a.828.828 0 111.624-.327l.838 4.174a.83.83 0 01-.802.994" fill="#53241B"></path>
                                <path d="M43.466 32.907h-.004l-2.96-.02a.905.905 0 01-.897-.91.904.904 0 01.904-.9h.003l2.96.018a.905.905 0 01-.006 1.812" fill="#F97D00"></path>
                                <path d="M40.988 33.697h-.866a1.834 1.834 0 01-1.831-1.836c0-1.014.82-1.836 1.831-1.836h.866c1.012 0 1.832.822 1.832 1.836 0 1.014-.82 1.836-1.832 1.836" fill="#FFC101"></path>
                                <path d="M29.849 34.016a1.987 1.987 0 01-1.603-.813 1.998 1.998 0 01-.284-1.81l3.316-9.99 3.774 1.258-2.428 7.316 6.307-.115.073 3.987-9.119.167h-.036" fill="#00B6EC"></path>
                                <path d="M38.404 22.221c-1.576.041-3.513-1.184-4.35-2.733.075-.007.15-.014.224-.016l4.1-.108c.125-.003.344.001.573.005.24.014.47.063.69.137.116.032.226.079.332.13.571 1.302-.222 2.55-1.57 2.585" fill="#FFC101"></path>
                                <path d="M36.843 21.028a2.17 2.17 0 01-2.224-2.116l-.08-3.083a2.171 2.171 0 012.11-2.23 2.17 2.17 0 012.225 2.116l.08 3.083a2.171 2.171 0 01-2.11 2.23" fill="#FFC101"></path>
                                <path d="M34.608 15.22a2.17 2.17 0 012.041-1.62 2.17 2.17 0 012.225 2.115l.078 3.016a5.929 5.929 0 01-4.344-3.511z" fill="#FFB200"></path>
                                <path d="M45.04 7.351l-.135 1.889-.22 3.022a5.93 5.93 0 01-6.333 5.492c-3.26-.238-5.712-3.081-5.474-6.349l.354-4.91a6.21 6.21 0 01.255-1.309c.27-.157.534-.318.804-.465 1.766-.929 3.082-.634 4.854-.042.652.217 1.294.424 1.936.612 1.288.385 2.57.685 3.916.805.055.407.076.83.043 1.255" fill="#FFC101"></path>
                                <path d="M44.901 9.293c-3.601-.2-5.72-2.28-5.72-2.28l2.531-1.54c1.078.296 2.159.523 3.285.623.055.407.076.83.043 1.255l-.135 1.889-.004.053z" fill="#FFB200"></path>
                                <path d="M39.663 12.692c.143 1.028.83 1.816 1.726 1.862.897.045 1.727-.663 2.051-1.669l-3.777-.193z" fill="#FFF"></path>
                                <path d="M38.502 5.073c.25 9.555-4.132 5.596-3.909 14.164l-2.655.056.297-10.99a4.567 4.567 0 014.44-4.69l.284-.007a1.506 1.506 0 011.543 1.467" fill="#53241B"></path>
                                <path d="M36.9 1.191c1.855-1.263 4.04-1.508 6.083-.798C46.657 1.669 47.435 3.922 47.3 5a3.88 3.88 0 01-.058.337c-.332 1.515-1.712 2.51-3.117 2.397l-2.79-.12c-.742-.053-1.822-.269-2.845-.622-1.634-.564-2.75-2.083-2.846-3.812-.05-.887.554-1.511 1.257-1.99" fill="#53241B"></path>
                            </g></svg>
                            <p class="save-search-cta_text--mobile fd-m-vertical-none fd-p-left fd-text--emphasis">Always be the first to know about the newest listings?</p>
                        </div>
                        <div class="fd-p-left-xl--bp-m">
                            <p class="fd-completely-hidden fd-display-block--bp-m fd-m-vertical-none fd-text--emphasis">Always be the first to know about the newest listings?</p><button class="save-search-cta__button fd-btn fd-btn--secondary fd-btn--block fd-m-top" data-is-user-logged-in="true" data-login-url="https://www.funda.nl/en/mijn/login/?ReturnUrl=%2Fen%2Fkoop%2Fheel-nederland%2F" data-save-search-dialog-endpoint="/en/mijn/savedsearch/" data-save-search-handle="dialog" data-save-search-url="/en/mijn/savedsearch/?currentUrl=%2fkoop%2fheel-nederland%2f" data-should-trigger-save-button-dialog="false" data-track-click="Save Search Clicked"><span class="fd-btn__icon"><span class="icon-alert-blue" data-grunticon-embed=""></span></span> Save search</button>
                        </div>
                    </div>
                    <script data-tracking-properties="" type="application/ld+json">
                    {"search_offering_type":"koop","search_locations":[{"location":"Nederland","location_type":"land"}],"search_radius":"0","filters":[{"key":"vindbaarpublic","value":"true"},{"key":"zoektype","value":"koop"},{"key":"iskoop","value":"true"},{"key":"objectbeschikbaarheid","value":"beschikbaar_onderhandeling"}],"results_total":50675,"listings":[{"global_id":6107187,"display_order":0,"placement":"listing_results_normal","status":"beschikbaar"},{"global_id":6107183,"display_order":1,"placement":"listing_results_normal","status":"beschikbaar"},{"global_id":6107177,"display_order":2,"placement":"listing_results_promo","status":"beschikbaar"},{"global_id":6107172,"display_order":3,"placement":"listing_results_promo","status":"beschikbaar"},{"global_id":6107157,"display_order":4,"placement":"listing_results_normal","status":"beschikbaar"},{"global_id":6107143,"display_order":5,"placement":"listing_results_promo","status":"beschikbaar"},{"global_id":6107121,"display_order":6,"placement":"listing_results_normal","status":"beschikbaar"},{"global_id":6107084,"display_order":7,"placement":"listing_results_normal","status":"beschikbaar"},{"global_id":6107027,"display_order":8,"placement":"listing_results_normal","status":"beschikbaar"},{"global_id":6106993,"display_order":9,"placement":"listing_results_normal","status":"beschikbaar"},{"global_id":6106984,"display_order":10,"placement":"listing_results_normal","status":"beschikbaar"},{"global_id":6106941,"display_order":11,"placement":"listing_results_normal","status":"beschikbaar"},{"global_id":6106931,"display_order":12,"placement":"listing_results_normal","status":"beschikbaar"},{"global_id":6106929,"display_order":13,"placement":"listing_results_normal","status":"beschikbaar"},{"global_id":6106919,"display_order":14,"placement":"listing_results_normal","status":"beschikbaar"}],"page_no":1,"full_path":"/en/koop/heel-nederland/","full_url":"http://beta.funda.nl/en/koop/heel-nederland/","funda_user_id":""}
                    </script> 
                    <script type="application/ld+json">
                    {
                    "@context": "http://schema.org",
                    "@type": ["ItemList", "WebPage"],
                    "name": "Homes for sale Nederland - Houses for sale in Nederland [funda]",
                    "url": "https://www.funda.nl/en/koop/heel-nederland/",
                    "itemListOrder": "https://schema.org/ItemListUnordered",
                    "itemListElement": [
                    { "@type": "ListItem", "position": "1", "url": "https://www.funda.nl/en/koop/ossenzijl/huis-42552540-hoofdstraat-22/" },
                    { "@type": "ListItem", "position": "2", "url": "https://www.funda.nl/en/koop/terneuzen/huis-42552546-roerstraat-16/" },
                    { "@type": "ListItem", "position": "3", "url": "https://www.funda.nl/en/koop/wagenborgen/huis-42552530-hibiscusstraat-16/" },
                    { "@type": "ListItem", "position": "4", "url": "https://www.funda.nl/en/koop/delfzijl/huis-42552535-botterlaan-30/" },
                    { "@type": "ListItem", "position": "5", "url": "https://www.funda.nl/en/koop/opijnen/huis-88916156-zandstraat-17/" },
                    { "@type": "ListItem", "position": "6", "url": "https://www.funda.nl/en/koop/den-bosch/huis-88916142-jonkhof-10/" },
                    { "@type": "ListItem", "position": "7", "url": "https://www.funda.nl/en/koop/ouddorp/huis-42552584-steenkreek-27/" },
                    { "@type": "ListItem", "position": "8", "url": "https://www.funda.nl/en/koop/heerhugowaard/huis-42552447-sportlaan-3/" },
                    { "@type": "ListItem", "position": "9", "url": "https://www.funda.nl/en/koop/hoek-van-holland/huis-88916026-dokter-diamantlaan-102/" },
                    { "@type": "ListItem", "position": "10", "url": "https://www.funda.nl/en/koop/deurne/huis-42551356-groenewoud-15/" },
                    { "@type": "ListItem", "position": "11", "url": "https://www.funda.nl/en/koop/vinkeveen/huis-42551347-voorbancken-14/" },
                    { "@type": "ListItem", "position": "12", "url": "https://www.funda.nl/en/koop/apeldoorn/huis-42551304-warenargaarde-608/" },
                    { "@type": "ListItem", "position": "13", "url": "https://www.funda.nl/en/koop/doetinchem/huis-42551394-hof-van-orleans-12/" },
                    { "@type": "ListItem", "position": "14", "url": "https://www.funda.nl/en/koop/boxmeer/huis-42551382-michiel-de-ruyterstraat-9/" },
                    { "@type": "ListItem", "position": "15", "url": "https://www.funda.nl/en/koop/amsterdam/huis-42551372-hof-van-versailles-41/" }]
                    }
                    </script>
                </div>
                <div data-instant-search-output="makelaarads">
                    <span class="makelaarads-feed-async" data-makelaarads-feed-async="" data-makelaarads-feed-async-url="https://dondraper.funda.io/api/makelaarads/getmakelaarads/?makelaaradunitid=funda-wonen&amp;searchArea=Nederland&amp;geogebiedtype=8&amp;geogebiedtypenaam=land"></span>
                </div><!-- Scroll up notification -->
                <div class="search-scroll-notify" data-component="search-scroll-notify" data-search-scroll-notify="">
                    <div class="search-scroll-notify-notification" data-search-scroll-notification="">
                        <h3 data-instant-search-output="total">50,675 homes for sale</h3><a class="search-scroll-notify-anchor" href="#content">↑ To top of page</a>
                    </div>
                </div><!-- Pager -->
                <nav class="pagination">
                    <div aria-label="pagination" class="py-8 border-t border-b border-light-2" data-component="pagination" data-instant-search-output="pagination" data-pagination="">
                        <input data-pagination-input="" name="pagination-page-number-next" type="hidden" value="1">
                        <div class="pagination-pages">
                            <a data-pagination-page="1" href="/en/koop/heel-nederland/"><span>Page</span> 1</a> <a data-pagination-page="2" href="/en/koop/heel-nederland/p2/"><span>Page</span> 2</a> <a data-pagination-page="3" href="/en/koop/heel-nederland/p3/"><span>Page</span> 3</a> <a data-pagination-page="4" href="/en/koop/heel-nederland/p4/"><span>Page</span> 4</a> <a data-pagination-page="5" href="/en/koop/heel-nederland/p5/"><span>Page</span> 5</a> <a data-pagination-page="6" href="/en/koop/heel-nederland/p6/"><span>Page</span> 6</a> <a data-pagination-page="7" href="/en/koop/heel-nederland/p7/"><span>Page</span> 7</a>
                            <p class="pagination-label">from</p><a data-pagination-page="2633" href="/en/koop/heel-nederland/p2633/"><span>Page</span> 2,633</a>
                        </div><a data-pagination-page="2" href="/en/koop/heel-nederland/p2/" rel="next">Next <span class="icon-arrow-right-blue" data-grunticon-embed=""></span></a>
                    </div>
                </nav>
                <div class="agents-nearby max-w-screen-lg m-auto clear-both">
                    <div data-agents-nearby="">
                        <input data-instant-search-output="geo" type="hidden">
                        <section class="mb-6">
                            <h4 class="text-base pt-6 pb-3">Agents active in Nederland</h4>
                            <section class="grid grid-cols-2 gap-x-6">
                                <a class="" href="http://www.amstelmakelaardij.nl/" rel="nofollow" target="_blank">
                                <div>
                                    <div class=" flex-1 border border-light-2 rounded sm:mr-6 last:m-0 cursor-pointer h-full flex flex-col bg-white">
                                        <header class="pt-5 pr-5 pl-6 h-24 flex justify-between" style="background-color: rgb(242, 242, 242);">
                                            <div class=" flex items-center justify-center rounded bg-white border border-light-1 shadow w-23 h-23 md:w-24 md:h-24"><img alt="Amstel Makelaardij o.g." class="object-contain rounded-sm w-21 md:w-22 max-h-21 md:max-h-22" src="https://cloud.funda.nl/valentina_media/147/372/121_720x720.jpg"></div><svg height="24" role="img" viewbox="0 0 48 48" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.626 35l5.452 5.342v-5.184H18V44h-.64l-5.439-5.368v5.21H10V35h.626zm10.546 0l2.342 5.357L25.842 35H28l-4.174 9h-.639L19 35h2.172zm8.44 0l3.888 4.781L37.387 35H38v9h-1.88v-4.714l-2.313 2.786h-.614l-2.312-2.786V44H29v-9h.613zm6.34-31C37.084 4 38 4.901 38 6.012v24.873C38 31.5 37.491 32 36.865 32h-6.24a1.125 1.125 0 01-1.135-1.115v-8.541c0-1.269 1.046-2.297 2.336-2.297h.233c2.11 0 3.823-1.682 3.823-3.758 0-2.077-1.712-3.759-3.823-3.759-2.11 0-3.822 1.682-3.822 3.759l.013 14.596c0 .616-.508 1.115-1.136 1.115h-6.229a1.125 1.125 0 01-1.135-1.115l.013-14.596c0-2.077-1.71-3.759-3.822-3.759-2.111 0-3.823 1.682-3.823 3.759 0 2.076 1.712 3.758 3.823 3.758h.233c1.29 0 2.336 1.028 2.336 2.297v8.54c0 .617-.508 1.116-1.135 1.116h-6.24A1.125 1.125 0 0110 30.885V6.012C10 4.902 10.917 4 12.047 4l8.415.01c1.647 0 2.982 1.313 2.982 2.931l-.151.049c-1.741.327-3.056 1.832-3.056 3.639 0 1.98 1.58 3.597 3.568 3.7l.195.004.195-.005c1.988-.102 3.568-1.72 3.568-3.7 0-1.806-1.316-3.311-3.056-3.638l-.152-.049c0-1.618 1.336-2.931 2.982-2.931L35.953 4z" fill="#005AD2"></path></svg> <!----> <!----> <!---->
                                        </header>
                                        <div class="p-6 pt-7 flex flex-col h-full">
                                            <h4 class="m-0">Amstel Makelaardij o.g.</h4>
                                            <div class="text-dark-2">
                                                <span class="font-extrabold fd-color-green-1" itemprop="ratingValue">9.4</span> <span class="fd-color-dark-2">( <span itemprop="reviewCount">48</span> reviews)</span>
                                                <meta content="1" itemprop="worstRating">
                                                <meta content="10" itemprop="bestRating">
                                            </div>
                                            <p class="text-dark-2 my-1"><span class="block">Voor al uw aankoopadvies</span> <span class="block">van Uithoorn tot en met A'dam</span></p><span class="mt-auto">amstelmakelaardij.nl <svg class="ml-2 relative" height="24" role="img" style="bottom: 0.15rem;" viewbox="0 0 48 48" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M39 10.55A1.5 1.5 0 0037.55 9h-11a1.5 1.5 0 000 3h7.38L21 24.92A1.51 1.51 0 0021 27a1.5 1.5 0 002.12 0L36 14.17v7.38a1.5 1.5 0 103 0v-11z"></path>
                                            <path d="M35.55 27a1.51 1.51 0 00-1.5 1.5V36H12V14h7.5a1.5 1.5 0 000-3h-9A1.5 1.5 0 009 12.55v25a1.5 1.5 0 001.5 1.5h25a1.51 1.51 0 001.5-1.5v-9A1.51 1.51 0 0035.55 27z"></path></svg></span>
                                        </div>
                                    </div>
                                </div></a><a class="" href="http://www.krabben.nl/" rel="nofollow" target="_blank">
                                <div>
                                    <div class=" flex-1 border border-light-2 rounded sm:mr-6 last:m-0 cursor-pointer h-full flex flex-col bg-white">
                                        <header class="pt-5 pr-5 pl-6 h-24 flex justify-between" style="background-color: rgb(242, 242, 242);">
                                            <div class=" flex items-center justify-center rounded bg-white border border-light-1 shadow w-23 h-23 md:w-24 md:h-24"><img alt="Van der Krabben makelaardij Oss BV" class="object-contain rounded-sm w-21 md:w-22 max-h-21 md:max-h-22" src="https://cloud.funda.nl/valentina_media/140/905/587_720x720.jpg"></div><svg height="24" role="img" viewbox="0 0 48 48" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.626 35l5.452 5.342v-5.184H18V44h-.64l-5.439-5.368v5.21H10V35h.626zm10.546 0l2.342 5.357L25.842 35H28l-4.174 9h-.639L19 35h2.172zm8.44 0l3.888 4.781L37.387 35H38v9h-1.88v-4.714l-2.313 2.786h-.614l-2.312-2.786V44H29v-9h.613zm6.34-31C37.084 4 38 4.901 38 6.012v24.873C38 31.5 37.491 32 36.865 32h-6.24a1.125 1.125 0 01-1.135-1.115v-8.541c0-1.269 1.046-2.297 2.336-2.297h.233c2.11 0 3.823-1.682 3.823-3.758 0-2.077-1.712-3.759-3.823-3.759-2.11 0-3.822 1.682-3.822 3.759l.013 14.596c0 .616-.508 1.115-1.136 1.115h-6.229a1.125 1.125 0 01-1.135-1.115l.013-14.596c0-2.077-1.71-3.759-3.822-3.759-2.111 0-3.823 1.682-3.823 3.759 0 2.076 1.712 3.758 3.823 3.758h.233c1.29 0 2.336 1.028 2.336 2.297v8.54c0 .617-.508 1.116-1.135 1.116h-6.24A1.125 1.125 0 0110 30.885V6.012C10 4.902 10.917 4 12.047 4l8.415.01c1.647 0 2.982 1.313 2.982 2.931l-.151.049c-1.741.327-3.056 1.832-3.056 3.639 0 1.98 1.58 3.597 3.568 3.7l.195.004.195-.005c1.988-.102 3.568-1.72 3.568-3.7 0-1.806-1.316-3.311-3.056-3.638l-.152-.049c0-1.618 1.336-2.931 2.982-2.931L35.953 4z" fill="#005AD2"></path></svg> <!----> <!----> <!---->
                                        </header>
                                        <div class="p-6 pt-7 flex flex-col h-full">
                                            <h4 class="m-0">Van der Krabben makelaardij Oss BV</h4>
                                            <div class="text-dark-2">
                                                <span class="font-extrabold fd-color-green-1" itemprop="ratingValue">9.1</span> <span class="fd-color-dark-2">( <span itemprop="reviewCount">78</span> reviews)</span>
                                                <meta content="1" itemprop="worstRating">
                                                <meta content="10" itemprop="bestRating">
                                            </div>
                                            <p class="text-dark-2 my-1"><span class="block">veelzijdigste en meest ervaren</span> <span class="block">makelaar in deze regio?</span></p><span class="mt-auto">krabben.nl <svg class="ml-2 relative" height="24" role="img" style="bottom: 0.15rem;" viewbox="0 0 48 48" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M39 10.55A1.5 1.5 0 0037.55 9h-11a1.5 1.5 0 000 3h7.38L21 24.92A1.51 1.51 0 0021 27a1.5 1.5 0 002.12 0L36 14.17v7.38a1.5 1.5 0 103 0v-11z"></path>
                                            <path d="M35.55 27a1.51 1.51 0 00-1.5 1.5V36H12V14h7.5a1.5 1.5 0 000-3h-9A1.5 1.5 0 009 12.55v25a1.5 1.5 0 001.5 1.5h25a1.51 1.51 0 001.5-1.5v-9A1.51 1.51 0 0035.55 27z"></path></svg></span>
                                        </div>
                                    </div>
                                </div></a>
                            </section>
                        </section>
                    </div>
                </div>
                <script data-i18n="" type="application/json">
                {
                   "AgentNearby": "Agents active in"
                }
                </script>
                <div class="local-insights-search-entrypoint" data-instant-search-output="localInsights" data-related-search=""></div>
            </div>
            <div class="search-sticky-ad">
                <aside class="advertisement dfp-display-blocked hidden" data-advertisement-adunit-path="/7276/funda.koop/resultaatlijst/web/halfpage1_koop_resultaatlijst_web_r0" data-advertisement-lok="2004" data-advertisement-size-default="[ 0, 0 ]" data-advertisement-size-mapping="[[[1616, 0],[[300, 600]]],[[1336, 0],[[160, 600]]],[[1256, 0],[[120, 600]]],[[0, 0],[]]]" data-advertisements="" data-advertisements-async="true" data-advertisements-event-trigger="" data-advertisements-lazy-type="scroll" data-advertisements-render-margin="25" data-test-advertisement="" id="ad_f6581b88-1223-4815-b615-a49f3b585945"></aside>
            </div>
        </div>
        <div class="container">
            <div class="float-right mb-4 search-billboard" data-resultlist-ad="2003" data-test-search-ad="">
                <aside class="advertisement dfp-display-blocked hidden" data-advertisement-adunit-path="/7276/funda.koop/resultaatlijst/web/billboard1_koop_resultaatlijst_web_r0" data-advertisement-lok="2003" data-advertisement-size-default="[ 0, 0 ]" data-advertisement-size-mapping="[[[1020, 0],[[970, 250]]],[[0, 0],[]]]" data-advertisements="" data-advertisements-async="true" data-advertisements-event-trigger="" data-advertisements-lazy-type="scroll" data-advertisements-render-margin="25" data-test-advertisement="" id="ad_14956bfb-ce23-483b-a9f2-88df890da7e4"></aside>
            </div>
            <div class="related-search" data-instant-search-output="relatedSearch" data-related-search="">
                <div class="related-search__label">
                    <h2>Homes for sale in Nederland</h2>
                    <p>Searching for houses for sale in Nederland? On funda you find a wide range of properties for sale/rent in Nederland now.</p>
                </div>
                <div class="md:grid md:grid-cols-2 md:gap-6">
                    <div class="mb-6">
                        <h2 class="fd-text-size fd-m-none fd-m-bottom-xs">Residential property types in the Netherlands</h2>
                        <ul class="fd-m-none fd-p-none fd-list--none fd-p-top-xs">
                            <li class="related-search__list-item">
                                <a class="fd-display-block" href="/en/koop/heel-nederland/">Houses for sale in the Netherlands</a>
                            </li>
                            <li class="related-search__list-item">
                                <a class="fd-display-block" href="/en/koop/heel-nederland/appartement/">Apartments for sale in the Netherlands</a>
                            </li>
                            <li class="related-search__list-item">
                                <a class="fd-display-block" href="/en/koop/heel-nederland/nieuwbouw/">Newly built residential properties for for sale in the Netherlands</a>
                            </li>
                            <li class="related-search__list-item">
                                <a class="fd-display-block" href="/en/koop/heel-nederland/verkocht/">Sold homes in the Netherlands</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="fd-text-size fd-m-none fd-m-bottom-xs">Real estate agents in Nederland</h2>
                        <ul class="fd-m-none fd-p-none fd-list--none fd-p-top-xs">
                            <li class="related-search__list-item">
                                <a class="fd-display-block" href="/en/makelaars/">Buying agents in Nederland</a>
                            </li>
                            <li class="related-search__list-item">
                                <a class="fd-display-block" href="/en/makelaars/">Selling agents in Nederland</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@section('footer')
@include('footer')
@endsection