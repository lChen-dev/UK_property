@extends('master')
@section('content')
    <div class="home-search" data-page-viewed="Homepage Viewed">
        <div data-notification-status="" data-funda-status-domain="status.funda.nl" data-notification-status-area="home"></div>
        <div class="search-banner" data-component="search-banner" style="background-image: url(https://assets.fstatic.nl/master_3714/assets/components/search-banner/images/boerderij-silhouet.svg)">
            <span class="search-banner-overlay search-banner-overlay-left" style="background-image: url(https://assets.fstatic.nl/master_3714/assets/components/search-banner/images/boerderij-links.svg)">
            </span>
            <div class="search-banner-overlay search-banner-overlay-middle">
                <p class="search-banner-tagline h1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                    That Frisian farm you've been dreaming of for years
                </font></font></p>
            </div>
            <span class="search-banner-overlay search-banner-overlay-right" style="background-image: url(https://assets.fstatic.nl/master_3714/assets/components/search-banner/images/boerderij-rechts.svg)">
            </span>
        </div>
        <div class="search-block has-price-range fd-m-auto" data-component="search-block" data-search-block="" data-gtm-vis-first-on-screen-1273266_1113="537" data-gtm-vis-total-visible-time-1273266_1113="100" data-gtm-vis-has-fired-1273266_1113="1">
            <form action="{{ url('list') }}" class="search-block__form" method="POST" data-search-block-form="" novalidate="">
                @csrf
                <nav class="search-block__navigation fd-p-top-l fd-p-right-xs--bp-m fd-p-left-xs--bp-m fd-bg-orange-2">
                    <ul class="search-block__navigation-items fd-color-white fd-p-none fd-list--none fd-display-inline-block">
                        <li class="is-active fd-display-inline-block">
                            <a class="search-block__navigation-item  fd-display-inline-block fd-m-bottom-xs fd-border-radius fd-color-white fd-text--emphasis" href="">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Buy</font>
                                </font>
                            </a>
                        </li>
                        <li class="fd-display-inline-block">
                            <a class="search-block__navigation-item  fd-display-inline-block fd-m-bottom-xs fd-border-radius fd-color-white fd-text--emphasis" href="">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Rent</font>
                                </font>
                            </a>
                        </li>
                        <li class="search-block__expandible fd-display-inline-block is-expandible" data-expandible="" aria-expanded="false" data-controller-uid="0">
                            <button class="search-block__button-expand fd-border-remove fd-bg-transparent fd-va--middle fd-m-bottom-3xs" type="button" data-expandible-handle="">Meer 
                                <span class="a11y-sr-only">soorten aanbod</span>
                                <span class="icon-arrow-down-white"></span>
                            </button>
                            <ul class="search-block__expandible-items fd-color-white fd-p-none fd-list--none fd-display-inline-block">
                                <li class="fd-display-inline-block">
                                    <a class="search-block__navigation-item fd-display-inline-block fd-m-bottom-xs fd-border-radius fd-color-white fd-text--emphasis" href="">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">New construction</font>
                                        </font>
                                    </a>
                                </li>
                                <li class="fd-display-inline-block">
                                    <a class="search-block__navigation-item fd-display-inline-block fd-m-bottom-xs fd-border-radius fd-color-white fd-text--emphasis" href=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Recreation</font></font></a>
                                </li>
                                <li class="fd-display-inline-block">
                                    <a class="search-block__navigation-item fd-display-inline-block fd-m-bottom-xs fd-border-radius fd-color-white fd-text--emphasis" href=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Europe</font></font></a>
                                </li>
                                <li class="fd-display-inline-block">
                                    <a class="search-block__navigation-item fd-display-inline-block fd-m-bottom-xs fd-border-radius fd-color-white fd-text--emphasis" href="" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Business space</font></font></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div class="search-block__body fd-p-top-s fd-p-horizontal fd-p-bottom-l fd-p-horizontal-xl--bp-m fd-p-bottom--bp-m fd-bg-orange-2">
                    <div class="search-block__form-row">
                        <input id="SoortAanbod" name="SoortAanbod" type="hidden" value="koop">
                        <input id="PreviousState" name="PreviousState" type="hidden" value="eyJhdXRvY29tcGxldGUtaWRlbnRpZmllciI6ImhlZWwtbmVkZXJsYW5kIn0=">
                        <fieldset class="search-block__location-filters">
                            <div class="autocomplete" data-autocomplete="" data-thousand-separator="." data-autocomplete-context="search-home" data-track-component-selector="input[name=searchType]:checked" data-track-component-value="area" data-search-results-handle="location">
                                <input type="hidden" data-autocomplete-url="" data-partial-page-update-output="autocompleteUrl" value="https://zb.funda.info/suggest/?query={queryPlaceholder}&amp;max=7&amp;type=koop&amp;areatype=&amp;currentIdentifiers={identifierPlaceholder}&amp;timestamp=">
                                <input type="hidden" data-autocomplete-alt-url="" data-partial-page-update-output="autocompleteAltUrl" value="https://zb.funda.info/suggest/alternatives/?query={queryPlaceholder}&amp;max=7&amp;type=koop&amp;areatype=&amp;currentIdentifiers={identifierPlaceholder}&amp;timestamp=">

                                <input type="search" name="filter_location" id="autocomplete-input" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="autocomplete-list" class="autocomplete-input fd-input" data-autocomplete-input="" data-autocomplete-minlength="2" value="" placeholder="City, neighborhood, address, etc." data-autocomplete-niveau-id="" data-autocomplete-parent-id="" data-instant-search-output="zoekboxTextValue">

                                <button type="button" class="autocomplete-clear fd-m-right-none" data-autocomplete-clear="">
                                    <span class="icon-delete-small-greyDark" data-grunticon-embed=""></span>
                                    <span class="a11y-sr-only">Wissen</span>
                                </button>

                                <button type="button" class="autocomplete-plus is-hidden" tabindex="-1" id="plus-test" data-autocomplete-plus="">
                                    <span class="icon-plus-blue" data-grunticon-embed=""></span>
                                    <span class="a11y-sr-only">Plus</span>
                                </button>

                                <div class="autocomplete-plus-button-hidden" data-autocomplete-hidden-div-plus-icon=""></div>

                                <input type="hidden" name="autocomplete-identifier" data-instant-search-output="zoekboxHiddenValue" data-autocomplete-output="" value="heel-nederland" autocomplete="off">

                                <div data-autocomplete-suggestions="" class="autocomplete-list-outer">
                                     <span class="autocomplete__notification--suggestion fd-m-none fd-p-right fd-p-left fd-p-top-xs fd-p-bottom-xs fd-color-dark-2">
                                        <p class="fd-m-none">
                                            <span class="icon icon-not-found-house-grey fd-icon--xl fd-m-right-xs"></span>Bedoel je misschien...
                                        </p>
                                    </span>
                                    <span class="autocomplete__notification--error fd-flex fd-m-none fd-p-right fd-p-left fd-p-top-xs fd-p-bottom-xs fd-color-dark-2">
                                        <span class="fd-m-none fd-flex">
                                            <span class="icon icon-not-found-house-grey fd-icon--xl fd-m-right-xs"></span>
                                            <p class="fd-m-none">Geen resultaten, probeer wat anders...</p>
                                        </span>
                                    </span>

                                    <ul role="listbox" id="autocomplete-list" class="autocomplete-list fd-border-top-remove" data-autocomplete-list="">
                                        <script type="template/html" data-autocomplete-item-template="">
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
                                    </ul>
                                </div>
                            </div>
                            <div class="radius-filter custom-select" data-input-radius="">
                                <label for="Straal" class="a11y-sr-only">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">[Ray]</font>
                                    </font>
                                </label>
                                <select name="filter_Straal" id="Straal" autocomplete="off">
                                    <option value="0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+ 0 km</font></font></option>
                                    <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+ 1 km</font></font></option>
                                    <option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+ 2 km</font></font></option>
                                    <option value="5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+ 5 km</font></font></option>
                                    <option value="10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+ 10 km</font></font></option>
                                    <option value="15"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+ 15 km</font></font></option>
                                    <option value="30"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+ 30 km</font></font></option>
                                    <option value="50"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+ 50 km</font></font></option>
                                    <option value="100"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+ 100 km</font></font></option>
                                </select>
                                <span class="icon-arrow-down-blue custom-select-icon" data-grunticon-embed=""></span>
                            </div>    
                        </fieldset>
                        <fieldset class="range-filter" data-thousand-separator="." data-display-string="€ {value}" data-range-filter="" data-resettable="" data-filter-name="Prijs" data-instant-search-range="">
                            <div class="range-filter__input  fd-m-bottom-fd" data-range-filter-min="">
                                <!-- range-filter-selector component -->
                                <div class="range-filter-selector" data-range-filter-selector="">
                                    <div class="range-filter-selector__preset" data-range-filter-selector-preset="">
                                        <label for="range-filter-selector-select-filter_koopprijsvan" class="range-filter-selector__label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">By</font></font></label>
                                        <div class="custom-select">
                                            <select class="range-filter-selector__select" id="range-filter-selector-select-filter_koopprijsvan" name="filter_KoopprijsVan" data-range-filter-selector-preset-select="" autocomplete="off" data-instant-search-handle="">
                                                    <option value="other"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Different</font></font></option>
                                                    <option selected="" data-range-filter-selector-default-value="" value="0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€0</font></font></option>
                                                    <option value="50000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€50,000</font></font></option>
                                                    <option value="75000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€ 75,000</font></font></option>
                                                    <option value="100000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€100,000</font></font></option>
                                                    <option value="125000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€125,000</font></font></option>
                                                    <option value="150000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€150,000</font></font></option>
                                                    <option value="175000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€175,000</font></font></option>
                                                    <option value="200000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€200,000</font></font></option>
                                                    <option value="225000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€225,000</font></font></option>
                                                    <option value="250000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€250,000</font></font></option>
                                                    <option value="275000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€275,000</font></font></option>
                                                    <option value="300000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€300,000</font></font></option>
                                                    <option value="325000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€325,000</font></font></option>
                                                    <option value="350000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€350.000</font></font></option>
                                                    <option value="375000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€375,000</font></font></option>
                                                    <option value="400000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€400,000</font></font></option>
                                                    <option value="450000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€450.000</font></font></option>
                                                    <option value="500000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€500,000</font></font></option>
                                                    <option value="550000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€550.000</font></font></option>
                                                    <option value="600000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€600,000</font></font></option>
                                                    <option value="650000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€650,000</font></font></option>
                                                    <option value="700000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€700,000</font></font></option>
                                                    <option value="750000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€750,000</font></font></option>
                                                    <option value="800000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€800,000</font></font></option>
                                                    <option value="900000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€900,000</font></font></option>
                                                    <option value="1000000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€1,000,000</font></font></option>
                                                    <option value="1250000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€1,250,000</font></font></option>
                                                    <option value="1500000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€1,500,000</font></font></option>
                                                    <option value="2000000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€2,000,000</font></font></option>
                                                    <option value="2500000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€2,500,000</font></font></option>
                                                    <option value="3000000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€3,000,000</font></font></option>
                                                    <option value="3500000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€ 3,500,000</font></font></option>
                                                    <option value="4000000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€4,000,000</font></font></option>
                                                    <option value="4500000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€4,500,000</font></font></option>
                                                    <option value="5000000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€5,000,000</font></font></option>
                                            </select>
                                            <span class="icon-arrow-down-blue custom-select-icon"></span>
                                        </div>
                                    </div>
                                    <div class="range-filter-selector__custom is-inactive" data-range-filter-selector-custom="">
                                        <label for="range-filter-selector-custom-filter_koopprijsvan" class="range-filter-selector__label">Van</label>
                                        <!-- input-number component -->
                                        <div class="input-number " data-input-number="" data-thousand-separator="." data-display-string="{value}">
                                            <input type="number" class="input-number__field fd-container-full fd-border-light-1" name="filter_KoopprijsVan" data-input-number-field="" data-price-selector-custom-input="" value="" step="0" min="0" max="99999999" maxlength="10" inputmode="numeric">
                                            <div class="input-number__mask" data-input-number-mask=""></div>
                                        </div>
                                        <!-- /input-number component -->
                                        <span class="range-filter-selector__token">€</span>
                                        <button type="button" class="button-tertiary range-filter-selector__button-clear-value" title="verwijderen aangepaste prijsklasse" data-range-filter-selector-clear-custom-value="">
                                            <span class="icon-delete-greyLight" data-grunticon-embed=""></span><span class="a11y-sr-only">Verwijder prijs</span>
                                        </button>
                                    </div>
                                </div>
                                <!-- /range-filter-selector component -->
                            </div>
                            <div class="range-filter__input" data-range-filter-max="">
                                <!-- range-filter-selector component -->
                                <div class="range-filter-selector" data-range-filter-selector="">
                                    <div class="range-filter-selector__preset" data-range-filter-selector-preset="">
                                        <label for="range-filter-selector-select-filter_koopprijstot" class="range-filter-selector__label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Until</font></font>
                                        </label>
                                        <div class="custom-select">
                                            <select class="range-filter-selector__select" id="range-filter-selector-select-filter_koopprijstot" name="filter_KoopprijsTot" data-range-filter-selector-preset-select="" autocomplete="off" data-instant-search-handle="">
                                                    <option value="other"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Different</font></font></option>
                                                    <option value="50000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€50,000</font></font></option>
                                                    <option value="75000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€ 75,000</font></font></option>
                                                    <option value="100000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€100,000</font></font></option>
                                                    <option value="125000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€125,000</font></font></option>
                                                    <option value="150000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€150,000</font></font></option>
                                                    <option value="175000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€175,000</font></font></option>
                                                    <option value="200000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€200,000</font></font></option>
                                                    <option value="225000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€225,000</font></font></option>
                                                    <option value="250000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€250,000</font></font></option>
                                                    <option value="275000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€275,000</font></font></option>
                                                    <option value="300000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€300,000</font></font></option>
                                                    <option value="325000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€325,000</font></font></option>
                                                    <option value="350000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€350.000</font></font></option>
                                                    <option value="375000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€375,000</font></font></option>
                                                    <option value="400000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€400,000</font></font></option>
                                                    <option value="450000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€450.000</font></font></option>
                                                    <option value="500000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€500,000</font></font></option>
                                                    <option value="550000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€550.000</font></font></option>
                                                    <option value="600000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€600,000</font></font></option>
                                                    <option value="650000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€650,000</font></font></option>
                                                    <option value="700000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€700,000</font></font></option>
                                                    <option value="750000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€750,000</font></font></option>
                                                    <option value="800000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€800,000</font></font></option>
                                                    <option value="900000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€900,000</font></font></option>
                                                    <option value="1000000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€1,000,000</font></font></option>
                                                    <option value="1250000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€1,250,000</font></font></option>
                                                    <option value="1500000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€1,500,000</font></font></option>
                                                    <option value="2000000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€2,000,000</font></font></option>
                                                    <option value="2500000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€2,500,000</font></font></option>
                                                    <option value="3000000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€3,000,000</font></font></option>
                                                    <option value="3500000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€ 3,500,000</font></font></option>
                                                    <option value="4000000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€4,000,000</font></font></option>
                                                    <option value="4500000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€4,500,000</font></font></option>
                                                    <option value="5000000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">€5,000,000</font></font></option>
                                                    <option selected="" data-range-filter-selector-default-value="" value="ignore_filter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">No maximum</font></font></option>
                                            </select>
                                            <span class="icon-arrow-down-blue custom-select-icon"></span>
                                        </div>
                                    </div>
                                    <div class="range-filter-selector__custom is-inactive" data-range-filter-selector-custom="">
                                        <label for="range-filter-selector-custom-filter_koopprijstot" class="range-filter-selector__label">Tot</label>
                                        <!-- input-number component -->
                                        <div class="input-number " data-input-number="" data-thousand-separator="." data-display-string="{value}">
                                            <input type="number" class="input-number__field fd-container-full fd-border-light-1" name="filter_KoopprijsTot" data-input-number-field="" data-price-selector-custom-input="" value="" step="0" min="0" max="99999999" maxlength="10" inputmode="numeric">
                                            <div class="input-number__mask" data-input-number-mask=""></div>
                                        </div>
                                        <!-- /input-number component -->
                                        <span class="range-filter-selector__token">€</span>
                                        <button type="button" class="button-tertiary range-filter-selector__button-clear-value" title="verwijderen aangepaste prijsklasse" data-range-filter-selector-clear-custom-value="">
                                            <span class="icon-delete-greyLight" data-grunticon-embed=""></span><span class="a11y-sr-only">Verwijder prijs</span>
                                        </button>
                                    </div>
                                </div>
                                <!-- /range-filter-selector component -->
                            </div>
                        </fieldset>
                        <div class="search-block__submit fd-text--right">
                            <button class="fd-btn fd-btn--block fd-btn--primary-alt" data-test-search-button="" type="submit">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Search</font>
                                </font>
                            </button>
                        </div>
                    </div>
                    <div class="search-block__last-query">
                        <span class="search-block__last-query-label">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Last search: </font>
                            </font>
                        </span>
                        <a class="link-alternative" href="https://www.funda.nl/koop/heel-nederland/">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Netherlands</font>
                            </font>
                            <span class="icon-arrow-right-white"></span>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="search-block__links container">
            <a href="https://www.funda.nl/makelaars/" class="search-block__links__link search-block__links__agents truncate">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">
                        Find an NVM broker
                    </font>
                </font>
            </a>
            <a href="https://www.funda.nl/kaart/koop/heel-nederland/" class="search-block__links__link search-block__links__map truncate">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">
                        Search on the map
                    </font>
                </font>
            </a>
            <a href="https://www.funda.nl/woningwaarde/" class="search-block__links__link search-block__links__value truncate"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Do the Value Check
            </font></font></a>
    </div>

    <div class="home-content container">
        <div class="flex justify-center mt-10 home-billboard">
            <aside class="advertisement dfp-display-blocked hidden" data-advertisements="" data-advertisements-async="true" id="ad_9ba1e71c-7b76-4660-ab29-15df348dd334" data-advertisements-lazy-type="scroll" data-advertisements-event-trigger="" data-advertisements-render-margin="5" data-advertisement-adunit-path="/7276/funda.koop/homepage/web/billboard1_koop_homepage_web_r0" data-advertisement-size-mapping="[[[1020, 0],[[970, 250]]],[[760, 0],[[728, 90]]],[[0, 0],[[320, 240],[300, 250]]]]" data-advertisement-size-default="[ 0, 0 ]" data-advertisement-lok="1002" data-test-advertisement="">
            </aside>
        </div>
        <div class="content-platform-banner-wrapper" data-gtm-vis-first-on-screen-1273266_1113="1647" data-gtm-vis-total-visible-time-1273266_1113="100" data-gtm-vis-has-fired-1273266_1113="1">
            <div class="double">
                <section class="featured-objects has-two-objects" data-featured-objects="" data-component="featured-objects">
                    <h2>
                        <a href="https://www.funda.nl/koop/heel-nederland/inbeeld/">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Home in pictures</font>
                            </font>
                        </a>
                    </h2>
                    <div class="carousel" data-carousel="" data-component="carousel">
                        <button class="carousel-next-button slick-arrow slick-hidden" data-carousel-next="" style="" aria-disabled="true" tabindex="-1">
                            <span class="icon-arrow-right-blue" data-grunticon-embed=""></span><span class="a11y-sr-only">Volgende</span>
                        </button>
                        <div data-carousel-list="" class="carousel-list slick-initialized slick-slider is-enhanced">  
                            <div aria-live="polite" class="slick-list draggable">
                                <div class="slick-track" style="opacity: 1; width: 1008px; transform: translate3d(0px, 0px, 0px);" role="listbox">
                                    <div class="slick-slide slick-current slick-active" style="width: 312px;" tabindex="-1" role="option" aria-describedby="slick-slide00" data-slick-index="0" aria-hidden="false">
                                        <a href="https://www.funda.nl/koop/deventer/huis-42429347-achter-de-muren-zandpoort-12/?navigateSource=inbeeld" data-object-url-tracking="inbeeld" data-track-click="Featured Listing Clicked" data-track-props="{&quot;global_id&quot;:6074984,&quot;placement&quot;:&quot;homepage_featured_listings&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" tabindex="0">
                                            <img alt="Achter de Muren Zandpoort 12" class="featured-home-image" sizes="(min-width:500px) calc(.5*(100vw-3.5rem)),(min-width:760px) calc(.333*(100vw-5rem)),calc(100vw-2rem)" src="./assets/499_360x240.jpg" srcset="https://cloud.funda.nl/valentina_media/149/492/499_360x240.jpg 360w,https://cloud.funda.nl/valentina_media/149/492/499_180x120.jpg 180w,https://cloud.funda.nl/valentina_media/149/492/499_720x480.jpg 720w">
                                            <p>Achter de Muren Zandpoort 12</p>
                                        </a>
                                        <p>
                                            7411 GE Deventer

                                        </p>
                                        <p>
                                            € 660.000 k.k.
                                        </p>
                                        <a href="https://www.funda.nl/makelaars/deventer/1220-binnen-makelaars-en-taxateurs/" tabindex="0">Binnen Makelaars &amp; Taxateurs</a>
                                    </div>
                                    <div class="slick-slide slick-active" style="width: 312px;" tabindex="-1" role="option" aria-describedby="slick-slide01" data-slick-index="1" aria-hidden="false">
                                        <a href="https://www.funda.nl/koop/twello/huis-41390971-veenhuisweg-47/?navigateSource=inbeeld" data-object-url-tracking="inbeeld" data-track-click="Featured Listing Clicked" data-track-props="{&quot;global_id&quot;:5945518,&quot;placement&quot;:&quot;homepage_featured_listings&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" tabindex="0">
                                            <img alt="Veenhuisweg 47" class="featured-home-image" sizes="(min-width:500px) calc(.5*(100vw-3.5rem)),(min-width:760px) calc(.333*(100vw-5rem)),calc(100vw-2rem)" src="./assets/727_360x240.jpg" srcset="https://cloud.funda.nl/valentina_media/142/650/727_360x240.jpg 360w,https://cloud.funda.nl/valentina_media/142/650/727_180x120.jpg 180w,https://cloud.funda.nl/valentina_media/142/650/727_720x480.jpg 720w">
                                            <p>Veenhuisweg 47</p>
                                        </a>
                                        <p>
                                            7391 TR Twello

                                        </p>
                                        <p>
                                            € 1.275.000 k.k.
                                        </p>
                                        <a href="https://www.funda.nl/makelaars/twello/3144-van-den-belt-makelaars/" tabindex="0">Van den Belt Makelaars</a>
                                    </div>
                                    <div class="slick-slide slick-active" style="width: 312px;" tabindex="-1" role="option" aria-describedby="slick-slide02" data-slick-index="2" aria-hidden="false">
                                        <a href="https://www.funda.nl/koop/heerewaarden/huis-88910408-hogestraat-38/?navigateSource=inbeeld" data-object-url-tracking="inbeeld" data-track-click="Featured Listing Clicked" data-track-props="{&quot;global_id&quot;:6101409,&quot;placement&quot;:&quot;homepage_featured_listings&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" tabindex="0">
                                            <img alt="Hogestraat 38" class="featured-home-image" sizes="(min-width:500px) calc(.5*(100vw-3.5rem)),(min-width:760px) calc(.333*(100vw-5rem)),calc(100vw-2rem)" src="./assets/895_360x240.jpg" srcset="https://cloud.funda.nl/valentina_media/149/635/895_360x240.jpg 360w,https://cloud.funda.nl/valentina_media/149/635/895_180x120.jpg 180w,https://cloud.funda.nl/valentina_media/149/635/895_720x480.jpg 720w">
                                            <p>Hogestraat 38</p>
                                        </a>
                                        <p>
                                            6624 BB Heerewaarden

                                        </p>
                                        <p>
                                            € 300.000 k.k.
                                        </p>
                                        <a href="https://www.funda.nl/makelaars/nederhemert/60429-gerard-vos-makelaardij-en-taxaties/" tabindex="0">Gerard Vos Makelaardij en Taxaties</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="has-carousel">
                        <li>
                            <a href="https://www.funda.nl/koop/deventer/huis-42429347-achter-de-muren-zandpoort-12/?navigateSource=inbeeld" data-object-url-tracking="inbeeld" data-track-click="Featured Listing Clicked" data-track-props="{&quot;global_id&quot;:6074984,&quot;placement&quot;:&quot;homepage_featured_listings&quot;,&quot;funda_user_id&quot;:&quot;&quot;}">
                                <img alt="Behind the Walls Zandpoort 12" class="featured-home-image" sizes="(min-width:500px) calc(.5*(100vw-3.5rem)),(min-width:760px) calc(.333*(100vw-5rem)),calc(100vw-2rem)" src="./assets/499_360x240.jpg" srcset="https://cloud.funda.nl/valentina_media/149/492/499_360x240.jpg 360w,https://cloud.funda.nl/valentina_media/149/492/499_180x120.jpg 180w,https://cloud.funda.nl/valentina_media/149/492/499_720x480.jpg 720w">
                                <p>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Behind the Walls Zandpoort 12</font>
                                    </font>
                                </p>
                            </a>
                            <p>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        7411 GE Deventer
                                    </font>
                                </font>
                            </p>
                            <p>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        € 660,000 kk
                                    </font>
                                </font>
                            </p>
                            <a href="https://www.funda.nl/makelaars/deventer/1220-binnen-makelaars-en-taxateurs/">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Inside Brokers &amp; Appraisers</font>
                                </font>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.funda.nl/koop/twello/huis-41390971-veenhuisweg-47/?navigateSource=inbeeld" data-object-url-tracking="inbeeld" data-track-click="Featured Listing Clicked" data-track-props="{&quot;global_id&quot;:5945518,&quot;placement&quot;:&quot;homepage_featured_listings&quot;,&quot;funda_user_id&quot;:&quot;&quot;}">
                                <img alt="47 Veenhuisweg" class="featured-home-image" sizes="(min-width:500px) calc(.5*(100vw-3.5rem)),(min-width:760px) calc(.333*(100vw-5rem)),calc(100vw-2rem)" src="./assets/727_360x240.jpg" srcset="https://cloud.funda.nl/valentina_media/142/650/727_360x240.jpg 360w,https://cloud.funda.nl/valentina_media/142/650/727_180x120.jpg 180w,https://cloud.funda.nl/valentina_media/142/650/727_720x480.jpg 720w">
                                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">47 Veenhuisweg</font></font></p>
                            </a>
                            <p>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        7391 TR Twello
                                    </font>
                                </font>
                            </p>
                            <p>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        € 1,275,000 kk
                                    </font>
                                </font>
                            </p>
                            <a href="https://www.funda.nl/makelaars/twello/3144-van-den-belt-makelaars/">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Van den Belt brokers</font>
                                </font>
                            </a>
                        </li>
                    </ul>
                </section>
            </div>
            <div class="single">
                <section class="content-platform-banner" data-component="content-platform-banner" data-content-platform-banner="">
                    <a href="https://www.funda.nl/meer-weten" class="fd-flex fd-flex-column">
                        <h2>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Do you have a question?</font>
                            </font>
                        </h2>
                        <img src="{{ asset('img/wij_helpen_je_met.jpg') }}" alt="Do you have a question?">
                        <p>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Looking for an answer to all your questions about buying or selling a home?</font>
                            </font>
                        </p>
                        <p>
                            <span class="link-primary">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Knowing more </font>
                                </font>
                                <span class="icon-arrow-right-blue"></span>
                            </span>
                        </p>
                    </a>
                </section>
            </div>
        </div>
        <div class="home-inspiration-and-ad" data-gtm-vis-first-on-screen-1273266_1113="2050" data-gtm-vis-total-visible-time-1273266_1113="100" data-gtm-vis-has-fired-1273266_1113="1">
            <div class="inspiration-banner inspiration-banner__alt">
                <a href="https://www.funda.nl/funda-index/funda-index/" style="background-image: url(https://www.funda-consument.kpnis.nl/upload/bfa3de61-2526-464d-bf94-e0d43a1ec838_funda-index-homepage-image.jpg)">
                    <div class="inspiration-banner-body">
                        <p class="inspiration-banner-title h2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Want to know what's going on in the housing market?</font></font></p>
                        <p class="inspiration-banner-anchor-hint"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">View the funda Index</font></font></p>
                    </div>
                </a>
            </div>
        </div>
        <section class="featured-articles" data-featured-articles="" data-gtm-vis-first-on-screen-1273266_1113="2310" data-gtm-vis-total-visible-time-1273266_1113="100" data-gtm-vis-has-fired-1273266_1113="1">
            <h2>
                <a href="https://www.funda.nl/meer-weten/">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Prepare yourself with these stories and tips</font>
                    </font>
                </a>
            </h2>
            <a href="https://www.funda.nl/meer-weten/prinsjesdag-2021-wat-gebeurt-er-met-de-huizenmarkt" class="featured-articles__hero trafficdriver-home-featuredarticle" style="background-image: url(&#39;https://www.funda-consument.kpnis.nl/upload_mm/0/6/1/cid4026_Prinsjesdag-2021-belangrijkste-veranderingen-voor-kopers-en-verkopers_HEADER_648x348.jpg&#39;)">
                <p class="h2">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Prinsjesdag 2021: what will happen to the housing market?</font>
                    </font>
                </p>
                <p>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">The measures announced on Budget Day have not yet caused major changes in the housing market. </font>
                        <font style="vertical-align: inherit;">But there are bright spots.</font>
                    </font>
                </p>
                <p>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Read the article </font>
                    </font>
                    <span class="icon-arrow-right-white"></span>
                </p>
            </a>
            <ul>
                <li>
                    <a href="https://www.funda.nl/meer-weten/5-woonvragen-om-te-stellen-tijdens-de-nvm-open-huizen-dag" class="trafficdriver-home-featuredarticle featuredarticle-1">
                        <img src="{{ asset('img/cid4013_Open-Huizen-Dag-2021-plan-een-vrijblijvend-gesprek-met-een-makelaar_HEADER_80x56.jpg') }}" width="80" height="65" alt="">
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5 housing questions to ask during the NVM Open House Day</font></font></p>
                    </a>
                </li>
                <li>
                    <a href="https://www.funda.nl/meer-weten/twijfels-of-je-makelaar-in-jouw-belang-handelt-dit-kun-je-doen" class="trafficdriver-home-featuredarticle featuredarticle-2">
                        <img src="{{ asset('img/cid3785_Twijfels-of-je-makelaar-in-jouw-belang-handelt-Dit-kun-je-doen_HEADER_80x56.jpg') }}" width="80" height="65" alt="">
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Doubts whether your broker is acting in your interest? </font><font style="vertical-align: inherit;">You can do this</font></font></p>
                    </a>
                </li>
                <li>
                    <a href="https://www.funda.nl/meer-weten/slim-gebruikmaken-van-de-overwaarde" class="trafficdriver-home-featuredarticle featuredarticle-3">
                        <img src="{{ asset('img/cid2590_Slim-gebruik-maken-va-de-overwaarde_HEADER_80x56.jpg') }}" width="80" height="65" alt="">
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Smart use of the equity</font></font></p>
                    </a>
                </li>
                <li>
                    <a href="https://www.funda.nl/meer-weten/eerst-oude-huis-verkopen-bleek-gouden-greep" class="trafficdriver-home-featuredarticle featuredarticle-4">
                        <img src="{{ asset('img/cid4014_Interview-testimonial-doorstromer-Nina_HEADER_80x56.jpg') }}" width="80" height="65" alt="">
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">First selling old house turned out to be a golden grip</font></font></p>
                    </a>
                </li>
                <li>
                    <a href="https://www.funda.nl/meer-weten/video-hoe-breng-je-een-bod-uit-op-een-huis" class="trafficdriver-home-featuredarticle featuredarticle-5">
                        <img src="{{ asset('img/cid3579_hoe-breng-je-een-bod-uit_HEADER_80x56.jpg') }}" width="80" height="65" alt="">
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Video: how to make an offer on a house</font></font></p>
                    </a>
                </li>
            </ul>
        </section>
        <aside class="home-banners" data-component="home-banners" data-gtm-vis-first-on-screen-1273266_1113="2393" data-gtm-vis-total-visible-time-1273266_1113="100" data-gtm-vis-has-fired-1273266_1113="1">
            <a href="https://www.fundainbusiness.nl/" class="fib-banner" aria-labelledby="house-banners-fib-label">
                <img alt="funda in business" src="{{ asset('img/fundainbusiness-logo.svg') }}" id="house-banners-fib-label">
                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Office space, retail property, logistics complex or business space? </font><font style="vertical-align: inherit;">Find it via funda in business</font></font></p>
                <span class="button button-transparent"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">View the offer</font></font></span>
            </a><a href="https://www.funda.nl/verkopen/" class="house-banner" aria-labelledby="verkopen-banners-label">
                <img alt="A &#39;for sale&#39; sign" src="{{ asset('img/funda-listing-sign.svg') }}">
                <p id="verkopen-banners-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Are you planning to sell your house?</font></font></p>
                <span class="button button-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">All about selling</font></font></span>
            </a>
        </aside>
    </div>
@endsection
@section('footer')
@include('footer')
@endsection