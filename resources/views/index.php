<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: MetronicProduct Version: 8.2.5
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
  <!--begin::Head-->
  <head>
    <title>
      Metronic - The World's #1 Selling Bootstrap Admin Template by KeenThemes
    </title>
    <meta charset="utf-8" />
    <meta
      name="description"
      content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free."
    />
    <meta
      name="keywords"
      content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta
      property="og:title"
      content="Metronic - The World's #1 Selling Bootstrap Admin Template by KeenThemes"
    />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Metronic by Keenthemes" />
    <link rel="canonical" href="http://index.html" />
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"
    />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link
      href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="assets/plugins/custom/datatables/datatables.bundle.css"
      rel="stylesheet"
      type="text/css"
    />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link
      href="assets/plugins/global/plugins.bundle.css"
      rel="stylesheet"
      type="text/css"
    />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <script>
      // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
    </script>
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body
    id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled"
  >
    <!--begin::Theme mode setup on page load-->
    <script>
      var defaultThemeMode = "dark";
      var themeMode;
      if (document.documentElement) {
        if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
          themeMode =
            document.documentElement.getAttribute("data-bs-theme-mode");
        } else {
          if (localStorage.getItem("data-bs-theme") !== null) {
            themeMode = localStorage.getItem("data-bs-theme");
          } else {
            themeMode = defaultThemeMode;
          }
        }
        if (themeMode === "system") {
          themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches
            ? "dark"
            : "light";
        }
        document.documentElement.setAttribute("data-bs-theme", themeMode);
      }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
      <!--begin::Page-->
      <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Aside-->
        <div
          id="kt_aside"
          class="aside"
          data-kt-drawer="true"
          data-kt-drawer-name="aside"
          data-kt-drawer-activate="{default: true, lg: false}"
          data-kt-drawer-overlay="true"
          data-kt-drawer-width="auto"
          data-kt-drawer-direction="start"
          data-kt-drawer-toggle="#kt_aside_toggle"
        >
          <!--begin::Logo-->
          <div
            class="aside-logo flex-column-auto pt-10 pt-lg-20"
            id="kt_aside_logo"
          >
            <a href="index.html">
              <img
                alt="Logo"
                src="assets/media/logos/demo9.svg"
                class="h-40px"
              />
            </a>
          </div>
          <!--end::Logo-->
          <!--begin::Nav-->
          <div
            class="aside-menu flex-column-fluid pt-0 pb-7 py-lg-10"
            id="kt_aside_menu"
          >
            <!--begin::Aside menu-->
            <div
              id="kt_aside_menu_wrapper"
              class="w-100 hover-scroll-y scroll-lg-ms d-flex"
              data-kt-scroll="true"
              data-kt-scroll-activate="{default: false, lg: trur}"
              data-kt-scroll-height="auto"
              data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
              data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu"
              data-kt-scroll-offset="0"
            >
              <div
                id="kt_aside_menu"
                class="alg-main-navigation-container menu menu-column menu-title-gray-600 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-icon-gray-500 menu-arrow-gray-500 fw-semibold fs-6 my-auto"
                data-kt-menu="true"
              >
                <!--begin:Menu item-->
                <div class="menu-item py-2" data-panel="panel1">
                  <!--begin:Menu link-->
                  <span
                    class="menu-link menu-center alg-main-navigation"
                    data-panel="panel1"
                  >
                    <span class="menu-icon me-0">
                      <i class="ki-duotone ki-home-2 fs-2x">
                        <span class="path1"></span>
                        <span class="path2"></span>
                      </i>
                    </span>
                  </span>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item  | "here" "show" -->
                <div class="menu-item py-2" data-panel="panel2">
                  <!--begin:Menu link-->
                  <span
                    class="menu-link menu-center alg-main-navigation"
                    data-panel="panel2"
                  >
                    <span class="menu-icon me-0">
                      <i class="ki-duotone ki-notification-status fs-2x">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                      </i>
                    </span>
                  </span>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item py-2" data-panel="panel3">
                  <!--begin:Menu link-->
                  <span
                    class="menu-link menu-center alg-main-navigation"
                    data-panel="panel3"
                  >
                    <span class="menu-icon me-0">
                      <i class="ki-duotone ki-abstract-35 fs-2x">
                        <span class="path1"></span>
                        <span class="path2"></span>
                      </i>
                    </span>
                  </span>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item py-2" data-panel="panel4">
                  <!--begin:Menu link-->
                  <span
                    class="menu-link menu-center alg-main-navigation"
                    data-panel="panel4"
                  >
                    <span class="menu-icon me-0">
                      <i class="ki-duotone ki-abstract-26 fs-2x">
                        <span class="path1"></span>
                        <span class="path2"></span>
                      </i>
                    </span>
                  </span>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item py-2" data-panel="panel5">
                  <!--begin:Menu link-->
                  <span
                    class="menu-link menu-center alg-main-navigation"
                    data-panel="panel5"
                  >
                    <span class="menu-icon me-0">
                      <i class="ki-duotone ki-briefcase fs-2x">
                        <span class="path1"></span>
                        <span class="path2"></span>
                      </i>
                    </span>
                  </span>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
              </div>
            </div>
            <!--end::Aside menu-->
          </div>
          <!--end::Nav-->
          <!--begin::Footer-->
          <div
            class="aside-footer flex-column-auto pb-5 pb-lg-10"
            id="kt_aside_footer"
          >
            <!--begin::Menu-->
            <div
              class="d-flex flex-center w-100 scroll-px"
              data-bs-toggle="tooltip"
              data-bs-placement="right"
              data-bs-dismiss="click"
              title="Quick actions"
            >
              <button
                type="button"
                class="btn btn-custom"
                data-kt-menu-trigger="click"
                data-kt-menu-overflow="true"
                data-kt-menu-placement="top-start"
              >
                <i class="ki-duotone ki-entrance-left fs-2x">
                  <span class="path1"></span>
                  <span class="path2"></span>
                </i>
              </button>
              <!--begin::Menu 2-->
              <div
                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                data-kt-menu="true"
              >
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                  <div
                    class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4"
                  >
                    Quick Actions
                  </div>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu separator-->
                <div class="separator mb-3 opacity-75"></div>
                <!--end::Menu separator-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                  <a href="#" class="menu-link px-3">New Ticket</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                  <a href="#" class="menu-link px-3">New Customer</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div
                  class="menu-item px-3"
                  data-kt-menu-trigger="hover"
                  data-kt-menu-placement="right-start"
                >
                  <!--begin::Menu item-->
                  <a href="#" class="menu-link px-3">
                    <span class="menu-title">New Group</span>
                    <span class="menu-arrow"></span>
                  </a>
                  <!--end::Menu item-->
                  <!--begin::Menu sub-->
                  <div class="menu-sub menu-sub-dropdown w-175px py-4">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                      <a href="#" class="menu-link px-3">Admin Group</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                      <a href="#" class="menu-link px-3">Staff Group</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                      <a href="#" class="menu-link px-3">Member Group</a>
                    </div>
                    <!--end::Menu item-->
                  </div>
                  <!--end::Menu sub-->
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                  <a href="#" class="menu-link px-3">New Contact</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu separator-->
                <div class="separator mt-3 opacity-75"></div>
                <!--end::Menu separator-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                  <div class="menu-content px-3 py-3">
                    <a class="btn btn-primary btn-sm px-4" href="#"
                      >Generate Reports</a
                    >
                  </div>
                </div>
                <!--end::Menu item-->
              </div>
              <!--end::Menu 2-->
            </div>
            <!--end::Menu-->
          </div>
          <!--end::Footer-->
        </div>
        <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
          <!--begin::Header tablet and mobile-->
          <div class="header-mobile py-3">
            <!--begin::Container-->
            <div class="container d-flex flex-stack">
              <!--begin::Mobile logo-->
              <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                <a href="index.html">
                  <img
                    alt="Logo"
                    src="assets/media/logos/demo9.svg"
                    class="h-35px"
                  />
                </a>
              </div>
              <!--end::Mobile logo-->
              <!--begin::Aside toggle-->
              <button
                class="btn btn-icon btn-active-color-primary me-n4"
                id="kt_aside_toggle"
              >
                <i class="ki-duotone ki-abstract-14 fs-2x">
                  <span class="path1"></span>
                  <span class="path2"></span>
                </i>
              </button>
              <!--end::Aside toggle-->
            </div>
            <!--end::Container-->
          </div>
          <!--end::Header tablet and mobile-->
          <!--begin::Header-->
          <div
            id="kt_header"
            class="header py-6 py-lg-0"
            data-kt-sticky="true"
            data-kt-sticky-name="header"
            data-kt-sticky-offset="{lg: '300px'}"
          >
            <!--begin::Container-->
            <div class="header-container container-xxl">
              <!--begin::Page title-->
              <div
                class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-20 py-3 py-lg-0 me-3"
              >
                <!--begin::Heading-->
                <h1 class="d-flex flex-column text-gray-900 fw-bold my-1">
                  <span class="text-white fs-1">Dashboard</span>
                  <small class="text-gray-600 fs-6 fw-normal pt-2"
                    >Good Morning User!</small
                  >
                </h1>
                <!--end::Heading-->
              </div>
              <!--end::Page title=-->
              <!--begin::Wrapper-->
              <div class="d-flex align-items-center flex-wrap">
                <!--begin::Search-->
                <div class="header-search py-3 py-lg-0 me-3">
                  <!--begin::Search-->
                  <div
                    id="kt_header_search"
                    class="header-search d-flex align-items-center w-lg-250px"
                    data-kt-search-keypress="true"
                    data-kt-search-min-length="2"
                    data-kt-search-enter="enter"
                    data-kt-search-layout="menu"
                    data-kt-search-responsive="false"
                    data-kt-menu-trigger="auto"
                    data-kt-menu-permanent="true"
                    data-kt-menu-placement="bottom-end"
                  >
                    <!--begin::Tablet and mobile search toggle-->
                    <div
                      data-kt-search-element="toggle"
                      class="search-toggle-mobile d-flex d-lg-none align-items-center"
                    >
                      <div class="d-flex">
                        <i class="ki-duotone ki-magnifier fs-1">
                          <span class="path1"></span>
                          <span class="path2"></span>
                        </i>
                      </div>
                    </div>
                    <!--end::Tablet and mobile search toggle-->
                    <!--begin::Form-->
                    <form
                      data-kt-search-element="form"
                      class="w-100 position-relative"
                      autocomplete="off"
                    >
                      <!--begin::Hidden input(Added to disable form autocomplete)-->
                      <input type="hidden" />
                      <!--end::Hidden input-->
                      <!--begin::Icon-->
                      <i
                        class="ki-duotone ki-magnifier fs-2 search-icon position-absolute top-50 translate-middle-y ms-4"
                      >
                        <span class="path1"></span>
                        <span class="path2"></span>
                      </i>
                      <!--end::Icon-->
                      <!--begin::Input-->
                      <input
                        type="text"
                        class="form-control custom-form-control ps-13"
                        name="search"
                        value=""
                        placeholder="Find Goods"
                        data-kt-search-element="input"
                      />
                      <!--end::Input-->
                      <!--begin::Spinner-->
                      <span
                        class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                        data-kt-search-element="spinner"
                      >
                        <span
                          class="spinner-border h-15px w-15px align-middle text-gray-500"
                        ></span>
                      </span>
                      <!--end::Spinner-->
                      <!--begin::Reset-->
                      <span
                        class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4"
                        data-kt-search-element="clear"
                      >
                        <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
                          <span class="path1"></span>
                          <span class="path2"></span>
                        </i>
                      </span>
                      <!--end::Reset-->
                    </form>
                    <!--end::Form-->
                    <!--begin::Menu-->
                    <div
                      data-kt-search-element="content"
                      class="menu menu-sub menu-sub-dropdown py-7 px-7 overflow-hidden w-300px w-md-350px"
                    >
                      <!--begin::Wrapper-->
                      <div data-kt-search-element="wrapper">
                        <!--begin::Recently viewed-->
                        <div data-kt-search-element="results" class="d-none">
                          <!--begin::Items-->
                          <div class="scroll-y mh-200px mh-lg-350px">
                            <!--begin::Category title-->
                            <h3
                              class="fs-5 text-muted m-0 pb-5"
                              data-kt-search-element="category-title"
                            >
                              Users
                            </h3>
                            <!--end::Category title-->
                            <!--begin::Item-->
                            <a
                              href="#"
                              class="d-flex text-gray-900 text-hover-primary align-items-center mb-5"
                            >
                              <!--begin::Symbol-->
                              <div class="symbol symbol-40px me-4">
                                <img
                                  src="assets/media/avatars/300-6.jpg"
                                  alt=""
                                />
                              </div>
                              <!--end::Symbol-->
                              <!--begin::Title-->
                              <div
                                class="d-flex flex-column justify-content-start fw-semibold"
                              >
                                <span class="fs-6 fw-semibold"
                                  >Karina Clark</span
                                >
                                <span class="fs-7 fw-semibold text-muted"
                                  >Marketing Manager</span
                                >
                              </div>
                              <!--end::Title-->
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <a
                              href="#"
                              class="d-flex text-gray-900 text-hover-primary align-items-center mb-5"
                            >
                              <!--begin::Symbol-->
                              <div class="symbol symbol-40px me-4">
                                <img
                                  src="assets/media/avatars/300-2.jpg"
                                  alt=""
                                />
                              </div>
                              <!--end::Symbol-->
                              <!--begin::Title-->
                              <div
                                class="d-flex flex-column justify-content-start fw-semibold"
                              >
                                <span class="fs-6 fw-semibold"
                                  >Olivia Bold</span
                                >
                                <span class="fs-7 fw-semibold text-muted"
                                  >Software Engineer</span
                                >
                              </div>
                              <!--end::Title-->
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <a
                              href="#"
                              class="d-flex text-gray-900 text-hover-primary align-items-center mb-5"
                            >
                              <!--begin::Symbol-->
                              <div class="symbol symbol-40px me-4">
                                <img
                                  src="assets/media/avatars/300-9.jpg"
                                  alt=""
                                />
                              </div>
                              <!--end::Symbol-->
                              <!--begin::Title-->
                              <div
                                class="d-flex flex-column justify-content-start fw-semibold"
                              >
                                <span class="fs-6 fw-semibold">Ana Clark</span>
                                <span class="fs-7 fw-semibold text-muted"
                                  >UI/UX Designer</span
                                >
                              </div>
                              <!--end::Title-->
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <a
                              href="#"
                              class="d-flex text-gray-900 text-hover-primary align-items-center mb-5"
                            >
                              <!--begin::Symbol-->
                              <div class="symbol symbol-40px me-4">
                                <img
                                  src="assets/media/avatars/300-14.jpg"
                                  alt=""
                                />
                              </div>
                              <!--end::Symbol-->
                              <!--begin::Title-->
                              <div
                                class="d-flex flex-column justify-content-start fw-semibold"
                              >
                                <span class="fs-6 fw-semibold"
                                  >Nick Pitola</span
                                >
                                <span class="fs-7 fw-semibold text-muted"
                                  >Art Director</span
                                >
                              </div>
                              <!--end::Title-->
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <a
                              href="#"
                              class="d-flex text-gray-900 text-hover-primary align-items-center mb-5"
                            >
                              <!--begin::Symbol-->
                              <div class="symbol symbol-40px me-4">
                                <img
                                  src="assets/media/avatars/300-11.jpg"
                                  alt=""
                                />
                              </div>
                              <!--end::Symbol-->
                              <!--begin::Title-->
                              <div
                                class="d-flex flex-column justify-content-start fw-semibold"
                              >
                                <span class="fs-6 fw-semibold"
                                  >Edward Kulnic</span
                                >
                                <span class="fs-7 fw-semibold text-muted"
                                  >System Administrator</span
                                >
                              </div>
                              <!--end::Title-->
                            </a>
                            <!--end::Item-->
                            <!--begin::Category title-->
                            <h3
                              class="fs-5 text-muted m-0 pt-5 pb-5"
                              data-kt-search-element="category-title"
                            >
                              Customers
                            </h3>
                            <!--end::Category title-->
                            <!--begin::Item-->
                            <a
                              href="#"
                              class="d-flex text-gray-900 text-hover-primary align-items-center mb-5"
                            >
                              <!--begin::Symbol-->
                              <div class="symbol symbol-40px me-4">
                                <span class="symbol-label bg-light">
                                  <img
                                    class="w-20px h-20px"
                                    src="assets/media/svg/brand-logos/volicity-9.svg"
                                    alt=""
                                  />
                                </span>
                              </div>
                              <!--end::Symbol-->
                              <!--begin::Title-->
                              <div
                                class="d-flex flex-column justify-content-start fw-semibold"
                              >
                                <span class="fs-6 fw-semibold"
                                  >Company Rbranding</span
                                >
                                <span class="fs-7 fw-semibold text-muted"
                                  >UI Design</span
                                >
                              </div>
                              <!--end::Title-->
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <a
                              href="#"
                              class="d-flex text-gray-900 text-hover-primary align-items-center mb-5"
                            >
                              <!--begin::Symbol-->
                              <div class="symbol symbol-40px me-4">
                                <span class="symbol-label bg-light">
                                  <img
                                    class="w-20px h-20px"
                                    src="assets/media/svg/brand-logos/tvit.svg"
                                    alt=""
                                  />
                                </span>
                              </div>
                              <!--end::Symbol-->
                              <!--begin::Title-->
                              <div
                                class="d-flex flex-column justify-content-start fw-semibold"
                              >
                                <span class="fs-6 fw-semibold"
                                  >Company Re-branding</span
                                >
                                <span class="fs-7 fw-semibold text-muted"
                                  >Web Development</span
                                >
                              </div>
                              <!--end::Title-->
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <a
                              href="#"
                              class="d-flex text-gray-900 text-hover-primary align-items-center mb-5"
                            >
                              <!--begin::Symbol-->
                              <div class="symbol symbol-40px me-4">
                                <span class="symbol-label bg-light">
                                  <img
                                    class="w-20px h-20px"
                                    src="assets/media/svg/misc/infography.svg"
                                    alt=""
                                  />
                                </span>
                              </div>
                              <!--end::Symbol-->
                              <!--begin::Title-->
                              <div
                                class="d-flex flex-column justify-content-start fw-semibold"
                              >
                                <span class="fs-6 fw-semibold"
                                  >Business Analytics App</span
                                >
                                <span class="fs-7 fw-semibold text-muted"
                                  >Administration</span
                                >
                              </div>
                              <!--end::Title-->
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <a
                              href="#"
                              class="d-flex text-gray-900 text-hover-primary align-items-center mb-5"
                            >
                              <!--begin::Symbol-->
                              <div class="symbol symbol-40px me-4">
                                <span class="symbol-label bg-light">
                                  <img
                                    class="w-20px h-20px"
                                    src="assets/media/svg/brand-logos/leaf.svg"
                                    alt=""
                                  />
                                </span>
                              </div>
                              <!--end::Symbol-->
                              <!--begin::Title-->
                              <div
                                class="d-flex flex-column justify-content-start fw-semibold"
                              >
                                <span class="fs-6 fw-semibold"
                                  >EcoLeaf App Launch</span
                                >
                                <span class="fs-7 fw-semibold text-muted"
                                  >Marketing</span
                                >
                              </div>
                              <!--end::Title-->
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <a
                              href="#"
                              class="d-flex text-gray-900 text-hover-primary align-items-center mb-5"
                            >
                              <!--begin::Symbol-->
                              <div class="symbol symbol-40px me-4">
                                <span class="symbol-label bg-light">
                                  <img
                                    class="w-20px h-20px"
                                    src="assets/media/svg/brand-logos/tower.svg"
                                    alt=""
                                  />
                                </span>
                              </div>
                              <!--end::Symbol-->
                              <!--begin::Title-->
                              <div
                                class="d-flex flex-column justify-content-start fw-semibold"
                              >
                                <span class="fs-6 fw-semibold"
                                  >Tower Group Website</span
                                >
                                <span class="fs-7 fw-semibold text-muted"
                                  >Google Adwords</span
                                >
                              </div>
                              <!--end::Title-->
                            </a>
                            <!--end::Item-->
                            <!--begin::Category title-->
                            <h3
                              class="fs-5 text-muted m-0 pt-5 pb-5"
                              data-kt-search-element="category-title"
                            >
                              Projects
                            </h3>
                            <!--end::Category title-->
                            <!--begin::Item-->
                            <a
                              href="#"
                              class="d-flex text-gray-900 text-hover-primary align-items-center mb-5"
                            >
                              <!--begin::Symbol-->
                              <div class="symbol symbol-40px me-4">
                                <span class="symbol-label bg-light">
                                  <i
                                    class="ki-duotone ki-notepad fs-2 text-primary"
                                  >
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                  </i>
                                </span>
                              </div>
                              <!--end::Symbol-->
                              <!--begin::Title-->
                              <div class="d-flex flex-column">
                                <span class="fs-6 fw-semibold"
                                  >Si-Fi Project by AU Themes</span
                                >
                                <span class="fs-7 fw-semibold text-muted"
                                  >#45670</span
                                >
                              </div>
                              <!--end::Title-->
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <a
                              href="#"
                              class="d-flex text-gray-900 text-hover-primary align-items-center mb-5"
                            >
                              <!--begin::Symbol-->
                              <div class="symbol symbol-40px me-4">
                                <span class="symbol-label bg-light">
                                  <i
                                    class="ki-duotone ki-frame fs-2 text-primary"
                                  >
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                  </i>
                                </span>
                              </div>
                              <!--end::Symbol-->
                              <!--begin::Title-->
                              <div class="d-flex flex-column">
                                <span class="fs-6 fw-semibold"
                                  >Shopix Mobile App Planning</span
                                >
                                <span class="fs-7 fw-semibold text-muted"
                                  >#45690</span
                                >
                              </div>
                              <!--end::Title-->
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <a
                              href="#"
                              class="d-flex text-gray-900 text-hover-primary align-items-center mb-5"
                            >
                              <!--begin::Symbol-->
                              <div class="symbol symbol-40px me-4">
                                <span class="symbol-label bg-light">
                                  <i
                                    class="ki-duotone ki-message-text-2 fs-2 text-primary"
                                  >
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                  </i>
                                </span>
                              </div>
                              <!--end::Symbol-->
                              <!--begin::Title-->
                              <div class="d-flex flex-column">
                                <span class="fs-6 fw-semibold"
                                  >Finance Monitoring SAAS Discussion</span
                                >
                                <span class="fs-7 fw-semibold text-muted"
                                  >#21090</span
                                >
                              </div>
                              <!--end::Title-->
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <a
                              href="#"
                              class="d-flex text-gray-900 text-hover-primary align-items-center mb-5"
                            >
                              <!--begin::Symbol-->
                              <div class="symbol symbol-40px me-4">
                                <span class="symbol-label bg-light">
                                  <i
                                    class="ki-duotone ki-profile-circle fs-2 text-primary"
                                  >
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                  </i>
                                </span>
                              </div>
                              <!--end::Symbol-->
                              <!--begin::Title-->
                              <div class="d-flex flex-column">
                                <span class="fs-6 fw-semibold"
                                  >Dashboard Analitics Launch</span
                                >
                                <span class="fs-7 fw-semibold text-muted"
                                  >#34560</span
                                >
                              </div>
                              <!--end::Title-->
                            </a>
                            <!--end::Item-->
                          </div>
                          <!--end::Items-->
                        </div>
                        <!--end::Recently viewed-->
                        <!--begin::Recently viewed-->
                        <div class="" data-kt-search-element="main">
                          <!--begin::Heading-->
                          <div class="d-flex flex-stack fw-semibold mb-4">
                            <!--begin::Label-->
                            <span class="text-muted fs-6 me-2"
                              >Recently Searched:</span
                            >
                            <!--end::Label-->
                            <!--begin::Toolbar-->
                            <div
                              class="d-flex"
                              data-kt-search-element="toolbar"
                            >
                              <!--begin::Preferences toggle-->
                              <div
                                data-kt-search-element="preferences-show"
                                class="btn btn-icon w-20px btn-sm btn-active-color-primary me-2 data-bs-toggle="
                                title="Show search preferences"
                              >
                                <i class="ki-duotone ki-setting-2 fs-2">
                                  <span class="path1"></span>
                                  <span class="path2"></span>
                                </i>
                              </div>
                              <!--end::Preferences toggle-->
                              <!--begin::Advanced search toggle-->
                              <div
                                data-kt-search-element="advanced-options-form-show"
                                class="btn btn-icon w-20px btn-sm btn-active-color-primary me-n1"
                                data-bs-toggle="tooltip"
                                title="Show more search options"
                              >
                                <i class="ki-duotone ki-down fs-2"></i>
                              </div>
                              <!--end::Advanced search toggle-->
                            </div>
                            <!--end::Toolbar-->
                          </div>
                          <!--end::Heading-->
                          <!--begin::Items-->
                          <div class="scroll-y mh-200px mh-lg-325px">
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-5">
                              <!--begin::Symbol-->
                              <div class="symbol symbol-40px me-4">
                                <span class="symbol-label bg-light">
                                  <i
                                    class="ki-duotone ki-laptop fs-2 text-primary"
                                  >
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                  </i>
                                </span>
                              </div>
                              <!--end::Symbol-->
                              <!--begin::Title-->
                              <div class="d-flex flex-column">
                                <a
                                  href="#"
                                  class="fs-6 text-gray-800 text-hover-primary fw-semibold"
                                  >BoomApp by Keenthemes</a
                                >
                                <span class="fs-7 text-muted fw-semibold"
                                  >#45789</span
                                >
                              </div>
                              <!--end::Title-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-5">
                              <!--begin::Symbol-->
                              <div class="symbol symbol-40px me-4">
                                <span class="symbol-label bg-light">
                                  <i
                                    class="ki-duotone ki-chart-simple fs-2 text-primary"
                                  >
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                  </i>
                                </span>
                              </div>
                              <!--end::Symbol-->
                              <!--begin::Title-->
                              <div class="d-flex flex-column">
                                <a
                                  href="#"
                                  class="fs-6 text-gray-800 text-hover-primary fw-semibold"
                                  >"Kept API Project Meeting</a
                                >
                                <span class="fs-7 text-muted fw-semibold"
                                  >#84050</span
                                >
                              </div>
                              <!--end::Title-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-5">
                              <!--begin::Symbol-->
                              <div class="symbol symbol-40px me-4">
                                <span class="symbol-label bg-light">
                                  <i
                                    class="ki-duotone ki-chart fs-2 text-primary"
                                  >
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                  </i>
                                </span>
                              </div>
                              <!--end::Symbol-->
                              <!--begin::Title-->
                              <div class="d-flex flex-column">
                                <a
                                  href="#"
                                  class="fs-6 text-gray-800 text-hover-primary fw-semibold"
                                  >"KPI Monitoring App Launch</a
                                >
                                <span class="fs-7 text-muted fw-semibold"
                                  >#84250</span
                                >
                              </div>
                              <!--end::Title-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-5">
                              <!--begin::Symbol-->
                              <div class="symbol symbol-40px me-4">
                                <span class="symbol-label bg-light">
                                  <i
                                    class="ki-duotone ki-chart-line-down fs-2 text-primary"
                                  >
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                  </i>
                                </span>
                              </div>
                              <!--end::Symbol-->
                              <!--begin::Title-->
                              <div class="d-flex flex-column">
                                <a
                                  href="#"
                                  class="fs-6 text-gray-800 text-hover-primary fw-semibold"
                                  >Project Reference FAQ</a
                                >
                                <span class="fs-7 text-muted fw-semibold"
                                  >#67945</span
                                >
                              </div>
                              <!--end::Title-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-5">
                              <!--begin::Symbol-->
                              <div class="symbol symbol-40px me-4">
                                <span class="symbol-label bg-light">
                                  <i
                                    class="ki-duotone ki-sms fs-2 text-primary"
                                  >
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                  </i>
                                </span>
                              </div>
                              <!--end::Symbol-->
                              <!--begin::Title-->
                              <div class="d-flex flex-column">
                                <a
                                  href="#"
                                  class="fs-6 text-gray-800 text-hover-primary fw-semibold"
                                  >"FitPro App Development</a
                                >
                                <span class="fs-7 text-muted fw-semibold"
                                  >#84250</span
                                >
                              </div>
                              <!--end::Title-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-5">
                              <!--begin::Symbol-->
                              <div class="symbol symbol-40px me-4">
                                <span class="symbol-label bg-light">
                                  <i
                                    class="ki-duotone ki-bank fs-2 text-primary"
                                  >
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                  </i>
                                </span>
                              </div>
                              <!--end::Symbol-->
                              <!--begin::Title-->
                              <div class="d-flex flex-column">
                                <a
                                  href="#"
                                  class="fs-6 text-gray-800 text-hover-primary fw-semibold"
                                  >Shopix Mobile App</a
                                >
                                <span class="fs-7 text-muted fw-semibold"
                                  >#45690</span
                                >
                              </div>
                              <!--end::Title-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-5">
                              <!--begin::Symbol-->
                              <div class="symbol symbol-40px me-4">
                                <span class="symbol-label bg-light">
                                  <i
                                    class="ki-duotone ki-chart-line-down fs-2 text-primary"
                                  >
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                  </i>
                                </span>
                              </div>
                              <!--end::Symbol-->
                              <!--begin::Title-->
                              <div class="d-flex flex-column">
                                <a
                                  href="#"
                                  class="fs-6 text-gray-800 text-hover-primary fw-semibold"
                                  >"Landing UI Design" Launch</a
                                >
                                <span class="fs-7 text-muted fw-semibold"
                                  >#24005</span
                                >
                              </div>
                              <!--end::Title-->
                            </div>
                            <!--end::Item-->
                          </div>
                          <!--end::Items-->
                        </div>
                        <!--end::Recently viewed-->
                        <!--begin::Empty-->
                        <div
                          data-kt-search-element="empty"
                          class="text-center d-none"
                        >
                          <!--begin::Icon-->
                          <div class="pt-10 pb-10">
                            <i
                              class="ki-duotone ki-search-list fs-4x opacity-50"
                            >
                              <span class="path1"></span>
                              <span class="path2"></span>
                              <span class="path3"></span>
                            </i>
                          </div>
                          <!--end::Icon-->
                          <!--begin::Message-->
                          <div class="pb-15 fw-semibold">
                            <h3 class="text-gray-600 fs-5 mb-2">
                              No result found
                            </h3>
                            <div class="text-muted fs-7">
                              Please try again with a different query
                            </div>
                          </div>
                          <!--end::Message-->
                        </div>
                        <!--end::Empty-->
                      </div>
                      <!--end::Wrapper-->
                      <!--begin::Preferences-->
                      <form
                        data-kt-search-element="advanced-options-form"
                        class="pt-1 d-none"
                      >
                        <!--begin::Heading-->
                        <h3 class="fw-semibold text-gray-900 mb-7">
                          Advanced Search
                        </h3>
                        <!--end::Heading-->
                        <!--begin::Input group-->
                        <div class="mb-5">
                          <input
                            type="text"
                            class="form-control form-control-sm form-control-solid"
                            placeholder="Contains the word"
                            name="query"
                          />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-5">
                          <!--begin::Radio group-->
                          <div class="nav-group nav-group-fluid">
                            <!--begin::Option-->
                            <label>
                              <input
                                type="radio"
                                class="btn-check"
                                name="type"
                                value="has"
                                checked="checked"
                              />
                              <span
                                class="btn btn-sm btn-color-muted btn-active btn-active-primary"
                                >All</span
                              >
                            </label>
                            <!--end::Option-->
                            <!--begin::Option-->
                            <label>
                              <input
                                type="radio"
                                class="btn-check"
                                name="type"
                                value="users"
                              />
                              <span
                                class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4"
                                >Users</span
                              >
                            </label>
                            <!--end::Option-->
                            <!--begin::Option-->
                            <label>
                              <input
                                type="radio"
                                class="btn-check"
                                name="type"
                                value="orders"
                              />
                              <span
                                class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4"
                                >Orders</span
                              >
                            </label>
                            <!--end::Option-->
                            <!--begin::Option-->
                            <label>
                              <input
                                type="radio"
                                class="btn-check"
                                name="type"
                                value="projects"
                              />
                              <span
                                class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4"
                                >Projects</span
                              >
                            </label>
                            <!--end::Option-->
                          </div>
                          <!--end::Radio group-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-5">
                          <input
                            type="text"
                            name="assignedto"
                            class="form-control form-control-sm form-control-solid"
                            placeholder="Assigned to"
                            value=""
                          />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-5">
                          <input
                            type="text"
                            name="collaborators"
                            class="form-control form-control-sm form-control-solid"
                            placeholder="Collaborators"
                            value=""
                          />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-5">
                          <!--begin::Radio group-->
                          <div class="nav-group nav-group-fluid">
                            <!--begin::Option-->
                            <label>
                              <input
                                type="radio"
                                class="btn-check"
                                name="attachment"
                                value="has"
                                checked="checked"
                              />
                              <span
                                class="btn btn-sm btn-color-muted btn-active btn-active-primary"
                                >Has attachment</span
                              >
                            </label>
                            <!--end::Option-->
                            <!--begin::Option-->
                            <label>
                              <input
                                type="radio"
                                class="btn-check"
                                name="attachment"
                                value="any"
                              />
                              <span
                                class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4"
                                >Any</span
                              >
                            </label>
                            <!--end::Option-->
                          </div>
                          <!--end::Radio group-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-5">
                          <select
                            name="timezone"
                            aria-label="Select a Timezone"
                            data-control="select2"
                            data-dropdown-parent="#kt_header_search"
                            data-placeholder="date_period"
                            class="form-select form-select-sm form-select-solid"
                          >
                            <option value="next">Within the next</option>
                            <option value="last">Within the last</option>
                            <option value="between">Between</option>
                            <option value="on">On</option>
                          </select>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-8">
                          <!--begin::Col-->
                          <div class="col-6">
                            <input
                              type="number"
                              name="date_number"
                              class="form-control form-control-sm form-control-solid"
                              placeholder="Lenght"
                              value=""
                            />
                          </div>
                          <!--end::Col-->
                          <!--begin::Col-->
                          <div class="col-6">
                            <select
                              name="date_typer"
                              aria-label="Select a Timezone"
                              data-control="select2"
                              data-dropdown-parent="#kt_header_search"
                              data-placeholder="Period"
                              class="form-select form-select-sm form-select-solid"
                            >
                              <option value="days">Days</option>
                              <option value="weeks">Weeks</option>
                              <option value="months">Months</option>
                              <option value="years">Years</option>
                            </select>
                          </div>
                          <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="d-flex justify-content-end">
                          <button
                            type="reset"
                            class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2"
                            data-kt-search-element="advanced-options-form-cancel"
                          >
                            Cancel
                          </button>
                          <a
                            href="utilities/search/horizontal.html"
                            class="btn btn-sm fw-bold btn-primary"
                            data-kt-search-element="advanced-options-form-search"
                            >Search</a
                          >
                        </div>
                        <!--end::Actions-->
                      </form>
                      <!--end::Preferences-->
                      <!--begin::Preferences-->
                      <form
                        data-kt-search-element="preferences"
                        class="pt-1 d-none"
                      >
                        <!--begin::Heading-->
                        <h3 class="fw-semibold text-gray-900 mb-7">
                          Search Preferences
                        </h3>
                        <!--end::Heading-->
                        <!--begin::Input group-->
                        <div class="pb-4 border-bottom">
                          <label
                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack"
                          >
                            <span
                              class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2"
                              >Projects</span
                            >
                            <input
                              class="form-check-input"
                              type="checkbox"
                              value="1"
                              checked="checked"
                            />
                          </label>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="py-4 border-bottom">
                          <label
                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack"
                          >
                            <span
                              class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2"
                              >Targets</span
                            >
                            <input
                              class="form-check-input"
                              type="checkbox"
                              value="1"
                              checked="checked"
                            />
                          </label>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="py-4 border-bottom">
                          <label
                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack"
                          >
                            <span
                              class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2"
                              >Affiliate Programs</span
                            >
                            <input
                              class="form-check-input"
                              type="checkbox"
                              value="1"
                            />
                          </label>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="py-4 border-bottom">
                          <label
                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack"
                          >
                            <span
                              class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2"
                              >Referrals</span
                            >
                            <input
                              class="form-check-input"
                              type="checkbox"
                              value="1"
                              checked="checked"
                            />
                          </label>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="py-4 border-bottom">
                          <label
                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack"
                          >
                            <span
                              class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2"
                              >Users</span
                            >
                            <input
                              class="form-check-input"
                              type="checkbox"
                              value="1"
                            />
                          </label>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="d-flex justify-content-end pt-7">
                          <button
                            type="reset"
                            class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2"
                            data-kt-search-element="preferences-dismiss"
                          >
                            Cancel
                          </button>
                          <button
                            type="submit"
                            class="btn btn-sm fw-bold btn-primary"
                          >
                            Save Changes
                          </button>
                        </div>
                        <!--end::Actions-->
                      </form>
                      <!--end::Preferences-->
                    </div>
                    <!--end::Menu-->
                  </div>
                  <!--end::Search-->
                </div>
                <!--end::Search-->
                <!--begin::Action-->
                <div class="d-flex align-items-center py-3 py-lg-0">
                  <!--begin::Item-->
                  <div class="me-3">
                    <a
                      href="#"
                      class="btn btn-icon btn-custom btn-active-color-primary position-relative"
                      data-kt-menu-trigger="click"
                      data-kt-menu-attach="parent"
                      data-kt-menu-placement="bottom-end"
                    >
                      <i class="ki-duotone ki-notification-bing fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                      </i>
                      <span
                        class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"
                      ></span>
                    </a>
                    <!--begin::Menu-->
                    <div
                      class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px"
                      data-kt-menu="true"
                      id="kt_menu_notifications"
                    >
                      <!--begin::Heading-->
                      <div
                        class="d-flex flex-column bgi-no-repeat rounded-top"
                        style="
                          background-image: url('assets/media/misc/menu-header-bg.jpg');
                        "
                      >
                        <!--begin::Title-->
                        <h3 class="text-white fw-semibold px-9 mt-10 mb-6">
                          Notifications
                          <span class="fs-8 opacity-75 ps-3">24 reports</span>
                        </h3>
                        <!--end::Title-->
                        <!--begin::Tabs-->
                        <ul
                          class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9"
                        >
                          <li class="nav-item">
                            <a
                              class="nav-link text-white opacity-75 opacity-state-100 pb-4"
                              data-bs-toggle="tab"
                              href="#kt_topbar_notifications_1"
                              >Alerts</a
                            >
                          </li>
                          <li class="nav-item">
                            <a
                              class="nav-link text-white opacity-75 opacity-state-100 pb-4 active"
                              data-bs-toggle="tab"
                              href="#kt_topbar_notifications_2"
                              >Updates</a
                            >
                          </li>
                          <li class="nav-item">
                            <a
                              class="nav-link text-white opacity-75 opacity-state-100 pb-4"
                              data-bs-toggle="tab"
                              href="#kt_topbar_notifications_3"
                              >Logs</a
                            >
                          </li>
                        </ul>
                        <!--end::Tabs-->
                      </div>
                      <!--end::Heading-->
                      <!--begin::Tab content-->
                      <div class="tab-content">
                        <!--begin::Tab panel-->
                        <div
                          class="tab-pane fade"
                          id="kt_topbar_notifications_1"
                          role="tabpanel"
                        >
                          <!--begin::Items-->
                          <div class="scroll-y mh-325px my-5 px-8">
                            <!--begin::Item-->
                            <div class="d-flex flex-stack py-4">
                              <!--begin::Section-->
                              <div class="d-flex align-items-center">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-35px me-4">
                                  <span class="symbol-label bg-light-primary">
                                    <i
                                      class="ki-duotone ki-abstract-28 fs-2 text-primary"
                                    >
                                      <span class="path1"></span>
                                      <span class="path2"></span>
                                    </i>
                                  </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="mb-0 me-2">
                                  <a
                                    href="#"
                                    class="fs-6 text-gray-800 text-hover-primary fw-bold"
                                    >Project Alice</a
                                  >
                                  <div class="text-gray-500 fs-7">
                                    Phase 1 development
                                  </div>
                                </div>
                                <!--end::Title-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Label-->
                              <span class="badge badge-light fs-8">1 hr</span>
                              <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack py-4">
                              <!--begin::Section-->
                              <div class="d-flex align-items-center">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-35px me-4">
                                  <span class="symbol-label bg-light-danger">
                                    <i
                                      class="ki-duotone ki-information fs-2 text-danger"
                                    >
                                      <span class="path1"></span>
                                      <span class="path2"></span>
                                      <span class="path3"></span>
                                    </i>
                                  </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="mb-0 me-2">
                                  <a
                                    href="#"
                                    class="fs-6 text-gray-800 text-hover-primary fw-bold"
                                    >HR Confidential</a
                                  >
                                  <div class="text-gray-500 fs-7">
                                    Confidential staff documents
                                  </div>
                                </div>
                                <!--end::Title-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Label-->
                              <span class="badge badge-light fs-8">2 hrs</span>
                              <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack py-4">
                              <!--begin::Section-->
                              <div class="d-flex align-items-center">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-35px me-4">
                                  <span class="symbol-label bg-light-warning">
                                    <i
                                      class="ki-duotone ki-briefcase fs-2 text-warning"
                                    >
                                      <span class="path1"></span>
                                      <span class="path2"></span>
                                    </i>
                                  </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="mb-0 me-2">
                                  <a
                                    href="#"
                                    class="fs-6 text-gray-800 text-hover-primary fw-bold"
                                    >Company HR</a
                                  >
                                  <div class="text-gray-500 fs-7">
                                    Corporeate staff profiles
                                  </div>
                                </div>
                                <!--end::Title-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Label-->
                              <span class="badge badge-light fs-8">5 hrs</span>
                              <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack py-4">
                              <!--begin::Section-->
                              <div class="d-flex align-items-center">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-35px me-4">
                                  <span class="symbol-label bg-light-success">
                                    <i
                                      class="ki-duotone ki-abstract-12 fs-2 text-success"
                                    >
                                      <span class="path1"></span>
                                      <span class="path2"></span>
                                    </i>
                                  </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="mb-0 me-2">
                                  <a
                                    href="#"
                                    class="fs-6 text-gray-800 text-hover-primary fw-bold"
                                    >Project Redux</a
                                  >
                                  <div class="text-gray-500 fs-7">
                                    New frontend admin theme
                                  </div>
                                </div>
                                <!--end::Title-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Label-->
                              <span class="badge badge-light fs-8">2 days</span>
                              <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack py-4">
                              <!--begin::Section-->
                              <div class="d-flex align-items-center">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-35px me-4">
                                  <span class="symbol-label bg-light-primary">
                                    <i
                                      class="ki-duotone ki-colors-square fs-2 text-primary"
                                    >
                                      <span class="path1"></span>
                                      <span class="path2"></span>
                                      <span class="path3"></span>
                                      <span class="path4"></span>
                                    </i>
                                  </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="mb-0 me-2">
                                  <a
                                    href="#"
                                    class="fs-6 text-gray-800 text-hover-primary fw-bold"
                                    >Project Breafing</a
                                  >
                                  <div class="text-gray-500 fs-7">
                                    Product launch status update
                                  </div>
                                </div>
                                <!--end::Title-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Label-->
                              <span class="badge badge-light fs-8">21 Jan</span>
                              <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack py-4">
                              <!--begin::Section-->
                              <div class="d-flex align-items-center">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-35px me-4">
                                  <span class="symbol-label bg-light-info">
                                    <i
                                      class="ki-duotone ki-picture fs-2 text-info"
                                    ></i>
                                  </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="mb-0 me-2">
                                  <a
                                    href="#"
                                    class="fs-6 text-gray-800 text-hover-primary fw-bold"
                                    >Banner Assets</a
                                  >
                                  <div class="text-gray-500 fs-7">
                                    Collection of banner images
                                  </div>
                                </div>
                                <!--end::Title-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Label-->
                              <span class="badge badge-light fs-8">21 Jan</span>
                              <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack py-4">
                              <!--begin::Section-->
                              <div class="d-flex align-items-center">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-35px me-4">
                                  <span class="symbol-label bg-light-warning">
                                    <i
                                      class="ki-duotone ki-color-swatch fs-2 text-warning"
                                    >
                                      <span class="path1"></span>
                                      <span class="path2"></span>
                                      <span class="path3"></span>
                                      <span class="path4"></span>
                                      <span class="path5"></span>
                                      <span class="path6"></span>
                                      <span class="path7"></span>
                                      <span class="path8"></span>
                                      <span class="path9"></span>
                                      <span class="path10"></span>
                                      <span class="path11"></span>
                                      <span class="path12"></span>
                                      <span class="path13"></span>
                                      <span class="path14"></span>
                                      <span class="path15"></span>
                                      <span class="path16"></span>
                                      <span class="path17"></span>
                                      <span class="path18"></span>
                                      <span class="path19"></span>
                                      <span class="path20"></span>
                                      <span class="path21"></span>
                                    </i>
                                  </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="mb-0 me-2">
                                  <a
                                    href="#"
                                    class="fs-6 text-gray-800 text-hover-primary fw-bold"
                                    >Icon Assets</a
                                  >
                                  <div class="text-gray-500 fs-7">
                                    Collection of SVG icons
                                  </div>
                                </div>
                                <!--end::Title-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Label-->
                              <span class="badge badge-light fs-8"
                                >20 March</span
                              >
                              <!--end::Label-->
                            </div>
                            <!--end::Item-->
                          </div>
                          <!--end::Items-->
                          <!--begin::View more-->
                          <div class="py-3 text-center border-top">
                            <a
                              href="pages/user-profile/activity.html"
                              class="btn btn-color-gray-600 btn-active-color-primary"
                              >View All
                              <i class="ki-duotone ki-arrow-right fs-5">
                                <span class="path1"></span>
                                <span class="path2"></span> </i
                            ></a>
                          </div>
                          <!--end::View more-->
                        </div>
                        <!--end::Tab panel-->
                        <!--begin::Tab panel-->
                        <div
                          class="tab-pane fade show active"
                          id="kt_topbar_notifications_2"
                          role="tabpanel"
                        >
                          <!--begin::Wrapper-->
                          <div class="d-flex flex-column px-9">
                            <!--begin::Section-->
                            <div class="pt-10 pb-0">
                              <!--begin::Title-->
                              <h3 class="text-gray-900 text-center fw-bold">
                                Get Pro Access
                              </h3>
                              <!--end::Title-->
                              <!--begin::Text-->
                              <div
                                class="text-center text-gray-600 fw-semibold pt-1"
                              >
                                Outlines keep you honest. They stoping you from
                                amazing poorly about drive
                              </div>
                              <!--end::Text-->
                              <!--begin::Action-->
                              <div class="text-center mt-5 mb-9">
                                <a
                                  href="#"
                                  class="btn btn-sm btn-primary px-6"
                                  data-bs-toggle="modal"
                                  data-bs-target="#kt_modal_upgrade_plan"
                                  >Upgrade</a
                                >
                              </div>
                              <!--end::Action-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Illustration-->
                            <div class="text-center px-4">
                              <img
                                class="mw-100 mh-200px"
                                alt="image"
                                src="assets/media/illustrations/sigma-1/1.png"
                              />
                            </div>
                            <!--end::Illustration-->
                          </div>
                          <!--end::Wrapper-->
                        </div>
                        <!--end::Tab panel-->
                        <!--begin::Tab panel-->
                        <div
                          class="tab-pane fade"
                          id="kt_topbar_notifications_3"
                          role="tabpanel"
                        >
                          <!--begin::Items-->
                          <div class="scroll-y mh-325px my-5 px-8">
                            <!--begin::Item-->
                            <div class="d-flex flex-stack py-4">
                              <!--begin::Section-->
                              <div class="d-flex align-items-center me-2">
                                <!--begin::Code-->
                                <span
                                  class="w-70px badge badge-light-success me-4"
                                  >200 OK</span
                                >
                                <!--end::Code-->
                                <!--begin::Title-->
                                <a
                                  href="#"
                                  class="text-gray-800 text-hover-primary fw-semibold"
                                  >New order</a
                                >
                                <!--end::Title-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Label-->
                              <span class="badge badge-light fs-8"
                                >Just now</span
                              >
                              <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack py-4">
                              <!--begin::Section-->
                              <div class="d-flex align-items-center me-2">
                                <!--begin::Code-->
                                <span
                                  class="w-70px badge badge-light-danger me-4"
                                  >500 ERR</span
                                >
                                <!--end::Code-->
                                <!--begin::Title-->
                                <a
                                  href="#"
                                  class="text-gray-800 text-hover-primary fw-semibold"
                                  >New customer</a
                                >
                                <!--end::Title-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Label-->
                              <span class="badge badge-light fs-8">2 hrs</span>
                              <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack py-4">
                              <!--begin::Section-->
                              <div class="d-flex align-items-center me-2">
                                <!--begin::Code-->
                                <span
                                  class="w-70px badge badge-light-success me-4"
                                  >200 OK</span
                                >
                                <!--end::Code-->
                                <!--begin::Title-->
                                <a
                                  href="#"
                                  class="text-gray-800 text-hover-primary fw-semibold"
                                  >Payment process</a
                                >
                                <!--end::Title-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Label-->
                              <span class="badge badge-light fs-8">5 hrs</span>
                              <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack py-4">
                              <!--begin::Section-->
                              <div class="d-flex align-items-center me-2">
                                <!--begin::Code-->
                                <span
                                  class="w-70px badge badge-light-warning me-4"
                                  >300 WRN</span
                                >
                                <!--end::Code-->
                                <!--begin::Title-->
                                <a
                                  href="#"
                                  class="text-gray-800 text-hover-primary fw-semibold"
                                  >Search query</a
                                >
                                <!--end::Title-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Label-->
                              <span class="badge badge-light fs-8">2 days</span>
                              <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack py-4">
                              <!--begin::Section-->
                              <div class="d-flex align-items-center me-2">
                                <!--begin::Code-->
                                <span
                                  class="w-70px badge badge-light-success me-4"
                                  >200 OK</span
                                >
                                <!--end::Code-->
                                <!--begin::Title-->
                                <a
                                  href="#"
                                  class="text-gray-800 text-hover-primary fw-semibold"
                                  >API connection</a
                                >
                                <!--end::Title-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Label-->
                              <span class="badge badge-light fs-8">1 week</span>
                              <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack py-4">
                              <!--begin::Section-->
                              <div class="d-flex align-items-center me-2">
                                <!--begin::Code-->
                                <span
                                  class="w-70px badge badge-light-success me-4"
                                  >200 OK</span
                                >
                                <!--end::Code-->
                                <!--begin::Title-->
                                <a
                                  href="#"
                                  class="text-gray-800 text-hover-primary fw-semibold"
                                  >Database restore</a
                                >
                                <!--end::Title-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Label-->
                              <span class="badge badge-light fs-8">Mar 5</span>
                              <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack py-4">
                              <!--begin::Section-->
                              <div class="d-flex align-items-center me-2">
                                <!--begin::Code-->
                                <span
                                  class="w-70px badge badge-light-warning me-4"
                                  >300 WRN</span
                                >
                                <!--end::Code-->
                                <!--begin::Title-->
                                <a
                                  href="#"
                                  class="text-gray-800 text-hover-primary fw-semibold"
                                  >System update</a
                                >
                                <!--end::Title-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Label-->
                              <span class="badge badge-light fs-8">May 15</span>
                              <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack py-4">
                              <!--begin::Section-->
                              <div class="d-flex align-items-center me-2">
                                <!--begin::Code-->
                                <span
                                  class="w-70px badge badge-light-warning me-4"
                                  >300 WRN</span
                                >
                                <!--end::Code-->
                                <!--begin::Title-->
                                <a
                                  href="#"
                                  class="text-gray-800 text-hover-primary fw-semibold"
                                  >Server OS update</a
                                >
                                <!--end::Title-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Label-->
                              <span class="badge badge-light fs-8">Apr 3</span>
                              <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack py-4">
                              <!--begin::Section-->
                              <div class="d-flex align-items-center me-2">
                                <!--begin::Code-->
                                <span
                                  class="w-70px badge badge-light-warning me-4"
                                  >300 WRN</span
                                >
                                <!--end::Code-->
                                <!--begin::Title-->
                                <a
                                  href="#"
                                  class="text-gray-800 text-hover-primary fw-semibold"
                                  >API rollback</a
                                >
                                <!--end::Title-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Label-->
                              <span class="badge badge-light fs-8">Jun 30</span>
                              <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack py-4">
                              <!--begin::Section-->
                              <div class="d-flex align-items-center me-2">
                                <!--begin::Code-->
                                <span
                                  class="w-70px badge badge-light-danger me-4"
                                  >500 ERR</span
                                >
                                <!--end::Code-->
                                <!--begin::Title-->
                                <a
                                  href="#"
                                  class="text-gray-800 text-hover-primary fw-semibold"
                                  >Refund process</a
                                >
                                <!--end::Title-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Label-->
                              <span class="badge badge-light fs-8">Jul 10</span>
                              <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack py-4">
                              <!--begin::Section-->
                              <div class="d-flex align-items-center me-2">
                                <!--begin::Code-->
                                <span
                                  class="w-70px badge badge-light-danger me-4"
                                  >500 ERR</span
                                >
                                <!--end::Code-->
                                <!--begin::Title-->
                                <a
                                  href="#"
                                  class="text-gray-800 text-hover-primary fw-semibold"
                                  >Withdrawal process</a
                                >
                                <!--end::Title-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Label-->
                              <span class="badge badge-light fs-8">Sep 10</span>
                              <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack py-4">
                              <!--begin::Section-->
                              <div class="d-flex align-items-center me-2">
                                <!--begin::Code-->
                                <span
                                  class="w-70px badge badge-light-danger me-4"
                                  >500 ERR</span
                                >
                                <!--end::Code-->
                                <!--begin::Title-->
                                <a
                                  href="#"
                                  class="text-gray-800 text-hover-primary fw-semibold"
                                  >Mail tasks</a
                                >
                                <!--end::Title-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Label-->
                              <span class="badge badge-light fs-8">Dec 10</span>
                              <!--end::Label-->
                            </div>
                            <!--end::Item-->
                          </div>
                          <!--end::Items-->
                          <!--begin::View more-->
                          <div class="py-3 text-center border-top">
                            <a
                              href="pages/user-profile/activity.html"
                              class="btn btn-color-gray-600 btn-active-color-primary"
                              >View All
                              <i class="ki-duotone ki-arrow-right fs-5">
                                <span class="path1"></span>
                                <span class="path2"></span> </i
                            ></a>
                          </div>
                          <!--end::View more-->
                        </div>
                        <!--end::Tab panel-->
                      </div>
                      <!--end::Tab content-->
                    </div>
                    <!--end::Menu-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="me-3">
                    <a
                      href="#"
                      class="btn btn-icon btn-custom btn-active-color-primary"
                      data-kt-menu-trigger="click"
                      data-kt-menu-attach="parent"
                      data-kt-menu-placement="bottom-end"
                    >
                      <i class="ki-duotone ki-user fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                      </i>
                    </a>
                    <!--begin::User account menu-->
                    <div
                      class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                      data-kt-menu="true"
                    >
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <div
                          class="menu-content d-flex align-items-center px-3"
                        >
                          <!--begin::Avatar-->
                          <div class="symbol symbol-50px me-5">
                            <img
                              alt="Logo"
                              src="assets/media/avatars/300-1.jpg"
                            />
                          </div>
                          <!--end::Avatar-->
                          <!--begin::Username-->
                          <div class="d-flex flex-column">
                            <div class="fw-bold d-flex align-items-center fs-5">
                              Max Smith
                              <span
                                class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2"
                                >Pro</span
                              >
                            </div>
                            <a
                              href="#"
                              class="fw-semibold text-muted text-hover-primary fs-7"
                              >max@kt.com</a
                            >
                          </div>
                          <!--end::Username-->
                        </div>
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu separator-->
                      <div class="separator my-2"></div>
                      <!--end::Menu separator-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-5">
                        <a href="account/overview.html" class="menu-link px-5"
                          >My Profile</a
                        >
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-5">
                        <a
                          href="apps/projects/list.html"
                          class="menu-link px-5"
                        >
                          <span class="menu-text">My Projects</span>
                          <span class="menu-badge">
                            <span
                              class="badge badge-light-danger badge-circle fw-bold fs-7"
                              >3</span
                            >
                          </span>
                        </a>
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu item-->
                      <div
                        class="menu-item px-5"
                        data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                        data-kt-menu-placement="right-start"
                        data-kt-menu-offset="-15px, 0"
                      >
                        <a href="#" class="menu-link px-5">
                          <span class="menu-title">My Subscription</span>
                          <span class="menu-arrow"></span>
                        </a>
                        <!--begin::Menu sub-->
                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                          <!--begin::Menu item-->
                          <div class="menu-item px-3">
                            <a
                              href="account/referrals.html"
                              class="menu-link px-5"
                              >Referrals</a
                            >
                          </div>
                          <!--end::Menu item-->
                          <!--begin::Menu item-->
                          <div class="menu-item px-3">
                            <a
                              href="account/billing.html"
                              class="menu-link px-5"
                              >Billing</a
                            >
                          </div>
                          <!--end::Menu item-->
                          <!--begin::Menu item-->
                          <div class="menu-item px-3">
                            <a
                              href="account/statements.html"
                              class="menu-link px-5"
                              >Payments</a
                            >
                          </div>
                          <!--end::Menu item-->
                          <!--begin::Menu item-->
                          <div class="menu-item px-3">
                            <a
                              href="account/statements.html"
                              class="menu-link d-flex flex-stack px-5"
                              >Statements
                              <span
                                class="ms-2 lh-0"
                                data-bs-toggle="tooltip"
                                title="View your statements"
                              >
                                <i class="ki-duotone ki-information-5 fs-5">
                                  <span class="path1"></span>
                                  <span class="path2"></span>
                                  <span class="path3"></span>
                                </i> </span
                            ></a>
                          </div>
                          <!--end::Menu item-->
                          <!--begin::Menu separator-->
                          <div class="separator my-2"></div>
                          <!--end::Menu separator-->
                          <!--begin::Menu item-->
                          <div class="menu-item px-3">
                            <div class="menu-content px-3">
                              <label
                                class="form-check form-switch form-check-custom form-check-solid"
                              >
                                <input
                                  class="form-check-input w-30px h-20px"
                                  type="checkbox"
                                  value="1"
                                  checked="checked"
                                  name="notifications"
                                />
                                <span class="form-check-label text-muted fs-7"
                                  >Notifications</span
                                >
                              </label>
                            </div>
                          </div>
                          <!--end::Menu item-->
                        </div>
                        <!--end::Menu sub-->
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-5">
                        <a href="account/statements.html" class="menu-link px-5"
                          >My Statements</a
                        >
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu separator-->
                      <div class="separator my-2"></div>
                      <!--end::Menu separator-->
                      <!--begin::Menu item-->
                      <div
                        class="menu-item px-5"
                        data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                        data-kt-menu-placement="right-start"
                        data-kt-menu-offset="-15px, 0"
                      >
                        <a href="#" class="menu-link px-5">
                          <span class="menu-title position-relative"
                            >Language
                            <span
                              class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0"
                              >English
                              <img
                                class="w-15px h-15px rounded-1 ms-2"
                                src="assets/media/flags/united-states.svg"
                                alt="" /></span
                          ></span>
                        </a>
                        <!--begin::Menu sub-->
                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                          <!--begin::Menu item-->
                          <div class="menu-item px-3">
                            <a
                              href="account/settings.html"
                              class="menu-link d-flex px-5 active"
                            >
                              <span class="symbol symbol-20px me-4">
                                <img
                                  class="rounded-1"
                                  src="assets/media/flags/united-states.svg"
                                  alt=""
                                /> </span
                              >English</a
                            >
                          </div>
                          <!--end::Menu item-->
                          <!--begin::Menu item-->
                          <div class="menu-item px-3">
                            <a
                              href="account/settings.html"
                              class="menu-link d-flex px-5"
                            >
                              <span class="symbol symbol-20px me-4">
                                <img
                                  class="rounded-1"
                                  src="assets/media/flags/spain.svg"
                                  alt=""
                                /> </span
                              >Spanish</a
                            >
                          </div>
                          <!--end::Menu item-->
                          <!--begin::Menu item-->
                          <div class="menu-item px-3">
                            <a
                              href="account/settings.html"
                              class="menu-link d-flex px-5"
                            >
                              <span class="symbol symbol-20px me-4">
                                <img
                                  class="rounded-1"
                                  src="assets/media/flags/germany.svg"
                                  alt=""
                                /> </span
                              >German</a
                            >
                          </div>
                          <!--end::Menu item-->
                          <!--begin::Menu item-->
                          <div class="menu-item px-3">
                            <a
                              href="account/settings.html"
                              class="menu-link d-flex px-5"
                            >
                              <span class="symbol symbol-20px me-4">
                                <img
                                  class="rounded-1"
                                  src="assets/media/flags/japan.svg"
                                  alt=""
                                /> </span
                              >Japanese</a
                            >
                          </div>
                          <!--end::Menu item-->
                          <!--begin::Menu item-->
                          <div class="menu-item px-3">
                            <a
                              href="account/settings.html"
                              class="menu-link d-flex px-5"
                            >
                              <span class="symbol symbol-20px me-4">
                                <img
                                  class="rounded-1"
                                  src="assets/media/flags/france.svg"
                                  alt=""
                                /> </span
                              >French</a
                            >
                          </div>
                          <!--end::Menu item-->
                        </div>
                        <!--end::Menu sub-->
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-5 my-1">
                        <a href="account/settings.html" class="menu-link px-5"
                          >Account Settings</a
                        >
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-5">
                        <a
                          href="authentication/layouts/corporate/sign-in.html"
                          class="menu-link px-5"
                          >Sign Out</a
                        >
                      </div>
                      <!--end::Menu item-->
                    </div>
                    <!--end::User account menu-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Theme mode-->
                  <div class="d-flex align-items-center me-3">
                    <!--begin::Menu toggle-->
                    <a
                      href="#"
                      class="btn btn-icon btn-custom btn-active-color-primary"
                      data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                      data-kt-menu-attach="parent"
                      data-kt-menu-placement="bottom-end"
                    >
                      <i class="ki-duotone ki-night-day theme-light-show fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                        <span class="path5"></span>
                        <span class="path6"></span>
                        <span class="path7"></span>
                        <span class="path8"></span>
                        <span class="path9"></span>
                        <span class="path10"></span>
                      </i>
                      <i class="ki-duotone ki-moon theme-dark-show fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                      </i>
                    </a>
                    <!--begin::Menu toggle-->
                    <!--begin::Menu-->
                    <div
                      class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                      data-kt-menu="true"
                      data-kt-element="theme-mode-menu"
                    >
                      <!--begin::Menu item-->
                      <div class="menu-item px-3 my-0">
                        <a
                          href="#"
                          class="menu-link px-3 py-2"
                          data-kt-element="mode"
                          data-kt-value="light"
                        >
                          <span class="menu-icon" data-kt-element="icon">
                            <i class="ki-duotone ki-night-day fs-2">
                              <span class="path1"></span>
                              <span class="path2"></span>
                              <span class="path3"></span>
                              <span class="path4"></span>
                              <span class="path5"></span>
                              <span class="path6"></span>
                              <span class="path7"></span>
                              <span class="path8"></span>
                              <span class="path9"></span>
                              <span class="path10"></span>
                            </i>
                          </span>
                          <span class="menu-title">Light</span>
                        </a>
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-3 my-0">
                        <a
                          href="#"
                          class="menu-link px-3 py-2"
                          data-kt-element="mode"
                          data-kt-value="dark"
                        >
                          <span class="menu-icon" data-kt-element="icon">
                            <i class="ki-duotone ki-moon fs-2">
                              <span class="path1"></span>
                              <span class="path2"></span>
                            </i>
                          </span>
                          <span class="menu-title">Dark</span>
                        </a>
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-3 my-0">
                        <a
                          href="#"
                          class="menu-link px-3 py-2"
                          data-kt-element="mode"
                          data-kt-value="system"
                        >
                          <span class="menu-icon" data-kt-element="icon">
                            <i class="ki-duotone ki-screen fs-2">
                              <span class="path1"></span>
                              <span class="path2"></span>
                              <span class="path3"></span>
                              <span class="path4"></span>
                            </i>
                          </span>
                          <span class="menu-title">System</span>
                        </a>
                      </div>
                      <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                  </div>
                  <!--end::Theme mode-->
                </div>
                <!--end::Action-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Container-->
            <div class="header-offset"></div>
          </div>
          <!--end::Header-->
          <!--begin::Content-->
          <div
            class="content d-flex flex-column flex-column-fluid"
            id="kt_content"
          >
            <!--begin::Container-->
            <div class="container-xxl" id="kt_content_container">
              <!--begin::Row-->
              <div class="row g-5 g-xl-8 fw-bold alg-panel-container"></div>
              <!--end::Row-->
            </div>
            <!--end::Container-->
          </div>
          <!--end::Content-->
          <!--begin::Footer-->
          <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
            <!--begin::Container-->
            <div
              class="container-fluid d-flex justify-content-center flex-column flex-md-row flex-stack"
            >
              All Right Reserved | 2024
            </div>
            <!--end::Container-->
          </div>
          <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
      </div>
      <!--end::Page-->
    </div>
    <!--end::Root-->
    <!--begin::Drawers-->
    <!--begin::Activities drawer-->
    <div
      id="kt_activities"
      class="bg-body"
      data-kt-drawer="true"
      data-kt-drawer-name="activities"
      data-kt-drawer-activate="true"
      data-kt-drawer-overlay="true"
      data-kt-drawer-width="{default:'300px', 'lg': '900px'}"
      data-kt-drawer-direction="end"
      data-kt-drawer-toggle="#kt_activities_toggle"
      data-kt-drawer-close="#kt_activities_close"
    >
      <div class="card shadow-none border-0 rounded-0">
        <!--begin::Header-->
        <div class="card-header" id="kt_activities_header">
          <h3 class="card-title fw-bold text-gray-900">Activity Logs</h3>
          <div class="card-toolbar">
            <button
              type="button"
              class="btn btn-sm btn-icon btn-active-light-primary me-n5"
              id="kt_activities_close"
            >
              <i class="ki-duotone ki-cross fs-1">
                <span class="path1"></span>
                <span class="path2"></span>
              </i>
            </button>
          </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body position-relative" id="kt_activities_body">
          <!--begin::Content-->
          <div
            id="kt_activities_scroll"
            class="position-relative scroll-y me-n5 pe-5"
            data-kt-scroll="true"
            data-kt-scroll-height="auto"
            data-kt-scroll-wrappers="#kt_activities_body"
            data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer"
            data-kt-scroll-offset="5px"
          >
            <!--begin::Timeline items-->
            <div class="timeline timeline-border-dashed">
              <!--begin::Timeline item-->
              <div class="timeline-item">
                <!--begin::Timeline line-->
                <div class="timeline-line"></div>
                <!--end::Timeline line-->
                <!--begin::Timeline icon-->
                <div class="timeline-icon">
                  <i class="ki-duotone ki-message-text-2 fs-2 text-gray-500">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                  </i>
                </div>
                <!--end::Timeline icon-->
                <!--begin::Timeline content-->
                <div class="timeline-content mb-10 mt-n1">
                  <!--begin::Timeline heading-->
                  <div class="pe-3 mb-5">
                    <!--begin::Title-->
                    <div class="fs-5 fw-semibold mb-2">
                      There are 2 new tasks for you in “AirPlus Mobile App”
                      project:
                    </div>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="d-flex align-items-center mt-1 fs-6">
                      <!--begin::Info-->
                      <div class="text-muted me-2 fs-7">
                        Added at 4:23 PM by
                      </div>
                      <!--end::Info-->
                      <!--begin::User-->
                      <div
                        class="symbol symbol-circle symbol-25px"
                        data-bs-toggle="tooltip"
                        data-bs-boundary="window"
                        data-bs-placement="top"
                        title="Nina Nilson"
                      >
                        <img src="assets/media/avatars/300-14.jpg" alt="img" />
                      </div>
                      <!--end::User-->
                    </div>
                    <!--end::Description-->
                  </div>
                  <!--end::Timeline heading-->
                  <!--begin::Timeline details-->
                  <div class="overflow-auto pb-5">
                    <!--begin::Record-->
                    <div
                      class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5"
                    >
                      <!--begin::Title-->
                      <a
                        href="apps/projects/project.html"
                        class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px"
                        >Meeting with customer</a
                      >
                      <!--end::Title-->
                      <!--begin::Label-->
                      <div class="min-w-175px pe-2">
                        <span class="badge badge-light text-muted"
                          >Application Design</span
                        >
                      </div>
                      <!--end::Label-->
                      <!--begin::Users-->
                      <div
                        class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2"
                      >
                        <!--begin::User-->
                        <div class="symbol symbol-circle symbol-25px">
                          <img src="assets/media/avatars/300-2.jpg" alt="img" />
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="symbol symbol-circle symbol-25px">
                          <img
                            src="assets/media/avatars/300-14.jpg"
                            alt="img"
                          />
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="symbol symbol-circle symbol-25px">
                          <div
                            class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary"
                          >
                            A
                          </div>
                        </div>
                        <!--end::User-->
                      </div>
                      <!--end::Users-->
                      <!--begin::Progress-->
                      <div class="min-w-125px pe-2">
                        <span class="badge badge-light-primary"
                          >In Progress</span
                        >
                      </div>
                      <!--end::Progress-->
                      <!--begin::Action-->
                      <a
                        href="apps/projects/project.html"
                        class="btn btn-sm btn-light btn-active-light-primary"
                        >View</a
                      >
                      <!--end::Action-->
                    </div>
                    <!--end::Record-->
                    <!--begin::Record-->
                    <div
                      class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0"
                    >
                      <!--begin::Title-->
                      <a
                        href="apps/projects/project.html"
                        class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px"
                        >Project Delivery Preparation</a
                      >
                      <!--end::Title-->
                      <!--begin::Label-->
                      <div class="min-w-175px">
                        <span class="badge badge-light text-muted"
                          >CRM System Development</span
                        >
                      </div>
                      <!--end::Label-->
                      <!--begin::Users-->
                      <div
                        class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px"
                      >
                        <!--begin::User-->
                        <div class="symbol symbol-circle symbol-25px">
                          <img
                            src="assets/media/avatars/300-20.jpg"
                            alt="img"
                          />
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="symbol symbol-circle symbol-25px">
                          <div
                            class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary"
                          >
                            B
                          </div>
                        </div>
                        <!--end::User-->
                      </div>
                      <!--end::Users-->
                      <!--begin::Progress-->
                      <div class="min-w-125px">
                        <span class="badge badge-light-success">Completed</span>
                      </div>
                      <!--end::Progress-->
                      <!--begin::Action-->
                      <a
                        href="apps/projects/project.html"
                        class="btn btn-sm btn-light btn-active-light-primary"
                        >View</a
                      >
                      <!--end::Action-->
                    </div>
                    <!--end::Record-->
                  </div>
                  <!--end::Timeline details-->
                </div>
                <!--end::Timeline content-->
              </div>
              <!--end::Timeline item-->
              <!--begin::Timeline item-->
              <div class="timeline-item">
                <!--begin::Timeline line-->
                <div class="timeline-line"></div>
                <!--end::Timeline line-->
                <!--begin::Timeline icon-->
                <div class="timeline-icon me-4">
                  <i class="ki-duotone ki-flag fs-2 text-gray-500">
                    <span class="path1"></span>
                    <span class="path2"></span>
                  </i>
                </div>
                <!--end::Timeline icon-->
                <!--begin::Timeline content-->
                <div class="timeline-content mb-10 mt-n2">
                  <!--begin::Timeline heading-->
                  <div class="overflow-auto pe-3">
                    <!--begin::Title-->
                    <div class="fs-5 fw-semibold mb-2">
                      Invitation for crafting engaging designs that speak human
                      workshop
                    </div>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="d-flex align-items-center mt-1 fs-6">
                      <!--begin::Info-->
                      <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                      <!--end::Info-->
                      <!--begin::User-->
                      <div
                        class="symbol symbol-circle symbol-25px"
                        data-bs-toggle="tooltip"
                        data-bs-boundary="window"
                        data-bs-placement="top"
                        title="Alan Nilson"
                      >
                        <img src="assets/media/avatars/300-1.jpg" alt="img" />
                      </div>
                      <!--end::User-->
                    </div>
                    <!--end::Description-->
                  </div>
                  <!--end::Timeline heading-->
                </div>
                <!--end::Timeline content-->
              </div>
              <!--end::Timeline item-->
              <!--begin::Timeline item-->
              <div class="timeline-item">
                <!--begin::Timeline line-->
                <div class="timeline-line"></div>
                <!--end::Timeline line-->
                <!--begin::Timeline icon-->
                <div class="timeline-icon">
                  <i class="ki-duotone ki-disconnect fs-2 text-gray-500">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                    <span class="path5"></span>
                  </i>
                </div>
                <!--end::Timeline icon-->
                <!--begin::Timeline content-->
                <div class="timeline-content mb-10 mt-n1">
                  <!--begin::Timeline heading-->
                  <div class="mb-5 pe-3">
                    <!--begin::Title-->
                    <a
                      href="#"
                      class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2"
                      >3 New Incoming Project Files:</a
                    >
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="d-flex align-items-center mt-1 fs-6">
                      <!--begin::Info-->
                      <div class="text-muted me-2 fs-7">
                        Sent at 10:30 PM by
                      </div>
                      <!--end::Info-->
                      <!--begin::User-->
                      <div
                        class="symbol symbol-circle symbol-25px"
                        data-bs-toggle="tooltip"
                        data-bs-boundary="window"
                        data-bs-placement="top"
                        title="Jan Hummer"
                      >
                        <img src="assets/media/avatars/300-23.jpg" alt="img" />
                      </div>
                      <!--end::User-->
                    </div>
                    <!--end::Description-->
                  </div>
                  <!--end::Timeline heading-->
                  <!--begin::Timeline details-->
                  <div class="overflow-auto pb-5">
                    <div
                      class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5"
                    >
                      <!--begin::Item-->
                      <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                        <!--begin::Icon-->
                        <img
                          alt=""
                          class="w-30px me-3"
                          src="assets/media/svg/files/pdf.svg"
                        />
                        <!--end::Icon-->
                        <!--begin::Info-->
                        <div class="ms-1 fw-semibold">
                          <!--begin::Desc-->
                          <a
                            href="apps/projects/project.html"
                            class="fs-6 text-hover-primary fw-bold"
                            >Finance KPI App Guidelines</a
                          >
                          <!--end::Desc-->
                          <!--begin::Number-->
                          <div class="text-gray-500">1.9mb</div>
                          <!--end::Number-->
                        </div>
                        <!--begin::Info-->
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                        <!--begin::Icon-->
                        <img
                          alt="apps/projects/project.html"
                          class="w-30px me-3"
                          src="assets/media/svg/files/doc.svg"
                        />
                        <!--end::Icon-->
                        <!--begin::Info-->
                        <div class="ms-1 fw-semibold">
                          <!--begin::Desc-->
                          <a href="#" class="fs-6 text-hover-primary fw-bold"
                            >Client UAT Testing Results</a
                          >
                          <!--end::Desc-->
                          <!--begin::Number-->
                          <div class="text-gray-500">18kb</div>
                          <!--end::Number-->
                        </div>
                        <!--end::Info-->
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex flex-aligns-center">
                        <!--begin::Icon-->
                        <img
                          alt="apps/projects/project.html"
                          class="w-30px me-3"
                          src="assets/media/svg/files/css.svg"
                        />
                        <!--end::Icon-->
                        <!--begin::Info-->
                        <div class="ms-1 fw-semibold">
                          <!--begin::Desc-->
                          <a href="#" class="fs-6 text-hover-primary fw-bold"
                            >Finance Reports</a
                          >
                          <!--end::Desc-->
                          <!--begin::Number-->
                          <div class="text-gray-500">20mb</div>
                          <!--end::Number-->
                        </div>
                        <!--end::Icon-->
                      </div>
                      <!--end::Item-->
                    </div>
                  </div>
                  <!--end::Timeline details-->
                </div>
                <!--end::Timeline content-->
              </div>
              <!--end::Timeline item-->
              <!--begin::Timeline item-->
              <div class="timeline-item">
                <!--begin::Timeline line-->
                <div class="timeline-line"></div>
                <!--end::Timeline line-->
                <!--begin::Timeline icon-->
                <div class="timeline-icon">
                  <i class="ki-duotone ki-abstract-26 fs-2 text-gray-500">
                    <span class="path1"></span>
                    <span class="path2"></span>
                  </i>
                </div>
                <!--end::Timeline icon-->
                <!--begin::Timeline content-->
                <div class="timeline-content mb-10 mt-n1">
                  <!--begin::Timeline heading-->
                  <div class="pe-3 mb-5">
                    <!--begin::Title-->
                    <div class="fs-5 fw-semibold mb-2">
                      Task
                      <a href="#" class="text-primary fw-bold me-1">#45890</a
                      >merged with
                      <a href="#" class="text-primary fw-bold me-1">#45890</a>in
                      “Ads Pro Admin Dashboard project:
                    </div>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="d-flex align-items-center mt-1 fs-6">
                      <!--begin::Info-->
                      <div class="text-muted me-2 fs-7">
                        Initiated at 4:23 PM by
                      </div>
                      <!--end::Info-->
                      <!--begin::User-->
                      <div
                        class="symbol symbol-circle symbol-25px"
                        data-bs-toggle="tooltip"
                        data-bs-boundary="window"
                        data-bs-placement="top"
                        title="Nina Nilson"
                      >
                        <img src="assets/media/avatars/300-14.jpg" alt="img" />
                      </div>
                      <!--end::User-->
                    </div>
                    <!--end::Description-->
                  </div>
                  <!--end::Timeline heading-->
                </div>
                <!--end::Timeline content-->
              </div>
              <!--end::Timeline item-->
              <!--begin::Timeline item-->
              <div class="timeline-item">
                <!--begin::Timeline line-->
                <div class="timeline-line"></div>
                <!--end::Timeline line-->
                <!--begin::Timeline icon-->
                <div class="timeline-icon">
                  <i class="ki-duotone ki-pencil fs-2 text-gray-500">
                    <span class="path1"></span>
                    <span class="path2"></span>
                  </i>
                </div>
                <!--end::Timeline icon-->
                <!--begin::Timeline content-->
                <div class="timeline-content mb-10 mt-n1">
                  <!--begin::Timeline heading-->
                  <div class="pe-3 mb-5">
                    <!--begin::Title-->
                    <div class="fs-5 fw-semibold mb-2">
                      3 new application design concepts added:
                    </div>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="d-flex align-items-center mt-1 fs-6">
                      <!--begin::Info-->
                      <div class="text-muted me-2 fs-7">
                        Created at 4:23 PM by
                      </div>
                      <!--end::Info-->
                      <!--begin::User-->
                      <div
                        class="symbol symbol-circle symbol-25px"
                        data-bs-toggle="tooltip"
                        data-bs-boundary="window"
                        data-bs-placement="top"
                        title="Marcus Dotson"
                      >
                        <img src="assets/media/avatars/300-2.jpg" alt="img" />
                      </div>
                      <!--end::User-->
                    </div>
                    <!--end::Description-->
                  </div>
                  <!--end::Timeline heading-->
                  <!--begin::Timeline details-->
                  <div class="overflow-auto pb-5">
                    <div
                      class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7"
                    >
                      <!--begin::Item-->
                      <div class="overlay me-10">
                        <!--begin::Image-->
                        <div class="overlay-wrapper">
                          <img
                            alt="img"
                            class="rounded w-150px"
                            src="assets/media/stock/600x400/img-29.jpg"
                          />
                        </div>
                        <!--end::Image-->
                        <!--begin::Link-->
                        <div
                          class="overlay-layer bg-dark bg-opacity-10 rounded"
                        >
                          <a href="#" class="btn btn-sm btn-primary btn-shadow"
                            >Explore</a
                          >
                        </div>
                        <!--end::Link-->
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="overlay me-10">
                        <!--begin::Image-->
                        <div class="overlay-wrapper">
                          <img
                            alt="img"
                            class="rounded w-150px"
                            src="assets/media/stock/600x400/img-31.jpg"
                          />
                        </div>
                        <!--end::Image-->
                        <!--begin::Link-->
                        <div
                          class="overlay-layer bg-dark bg-opacity-10 rounded"
                        >
                          <a href="#" class="btn btn-sm btn-primary btn-shadow"
                            >Explore</a
                          >
                        </div>
                        <!--end::Link-->
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="overlay">
                        <!--begin::Image-->
                        <div class="overlay-wrapper">
                          <img
                            alt="img"
                            class="rounded w-150px"
                            src="assets/media/stock/600x400/img-40.jpg"
                          />
                        </div>
                        <!--end::Image-->
                        <!--begin::Link-->
                        <div
                          class="overlay-layer bg-dark bg-opacity-10 rounded"
                        >
                          <a href="#" class="btn btn-sm btn-primary btn-shadow"
                            >Explore</a
                          >
                        </div>
                        <!--end::Link-->
                      </div>
                      <!--end::Item-->
                    </div>
                  </div>
                  <!--end::Timeline details-->
                </div>
                <!--end::Timeline content-->
              </div>
              <!--end::Timeline item-->
              <!--begin::Timeline item-->
              <div class="timeline-item">
                <!--begin::Timeline line-->
                <div class="timeline-line"></div>
                <!--end::Timeline line-->
                <!--begin::Timeline icon-->
                <div class="timeline-icon">
                  <i class="ki-duotone ki-sms fs-2 text-gray-500">
                    <span class="path1"></span>
                    <span class="path2"></span>
                  </i>
                </div>
                <!--end::Timeline icon-->
                <!--begin::Timeline content-->
                <div class="timeline-content mb-10 mt-n1">
                  <!--begin::Timeline heading-->
                  <div class="pe-3 mb-5">
                    <!--begin::Title-->
                    <div class="fs-5 fw-semibold mb-2">
                      New case
                      <a href="#" class="text-primary fw-bold me-1">#67890</a>is
                      assigned to you in Multi-platform Database Design project
                    </div>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="overflow-auto pb-5">
                      <!--begin::Wrapper-->
                      <div class="d-flex align-items-center mt-1 fs-6">
                        <!--begin::Info-->
                        <div class="text-muted me-2 fs-7">
                          Added at 4:23 PM by
                        </div>
                        <!--end::Info-->
                        <!--begin::User-->
                        <a href="#" class="text-primary fw-bold me-1"
                          >Alice Tan</a
                        >
                        <!--end::User-->
                      </div>
                      <!--end::Wrapper-->
                    </div>
                    <!--end::Description-->
                  </div>
                  <!--end::Timeline heading-->
                </div>
                <!--end::Timeline content-->
              </div>
              <!--end::Timeline item-->
              <!--begin::Timeline item-->
              <div class="timeline-item">
                <!--begin::Timeline line-->
                <div class="timeline-line"></div>
                <!--end::Timeline line-->
                <!--begin::Timeline icon-->
                <div class="timeline-icon">
                  <i class="ki-duotone ki-pencil fs-2 text-gray-500">
                    <span class="path1"></span>
                    <span class="path2"></span>
                  </i>
                </div>
                <!--end::Timeline icon-->
                <!--begin::Timeline content-->
                <div class="timeline-content mb-10 mt-n1">
                  <!--begin::Timeline heading-->
                  <div class="pe-3 mb-5">
                    <!--begin::Title-->
                    <div class="fs-5 fw-semibold mb-2">
                      You have received a new order:
                    </div>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="d-flex align-items-center mt-1 fs-6">
                      <!--begin::Info-->
                      <div class="text-muted me-2 fs-7">
                        Placed at 5:05 AM by
                      </div>
                      <!--end::Info-->
                      <!--begin::User-->
                      <div
                        class="symbol symbol-circle symbol-25px"
                        data-bs-toggle="tooltip"
                        data-bs-boundary="window"
                        data-bs-placement="top"
                        title="Robert Rich"
                      >
                        <img src="assets/media/avatars/300-4.jpg" alt="img" />
                      </div>
                      <!--end::User-->
                    </div>
                    <!--end::Description-->
                  </div>
                  <!--end::Timeline heading-->
                  <!--begin::Timeline details-->
                  <div class="overflow-auto pb-5">
                    <!--begin::Notice-->
                    <div
                      class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6"
                    >
                      <!--begin::Icon-->
                      <i
                        class="ki-duotone ki-devices-2 fs-2tx text-primary me-4"
                      >
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                      </i>
                      <!--end::Icon-->
                      <!--begin::Wrapper-->
                      <div
                        class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap"
                      >
                        <!--begin::Content-->
                        <div class="mb-3 mb-md-0 fw-semibold">
                          <h4 class="text-gray-900 fw-bold">
                            Database Backup Process Completed!
                          </h4>
                          <div class="fs-6 text-gray-700 pe-7">
                            Login into Admin Dashboard to make sure the data
                            integrity is OK
                          </div>
                        </div>
                        <!--end::Content-->
                        <!--begin::Action-->
                        <a
                          href="#"
                          class="btn btn-primary px-6 align-self-center text-nowrap"
                          >Proceed</a
                        >
                        <!--end::Action-->
                      </div>
                      <!--end::Wrapper-->
                    </div>
                    <!--end::Notice-->
                  </div>
                  <!--end::Timeline details-->
                </div>
                <!--end::Timeline content-->
              </div>
              <!--end::Timeline item-->
              <!--begin::Timeline item-->
              <div class="timeline-item">
                <!--begin::Timeline line-->
                <div class="timeline-line"></div>
                <!--end::Timeline line-->
                <!--begin::Timeline icon-->
                <div class="timeline-icon">
                  <i class="ki-duotone ki-basket fs-2 text-gray-500">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                  </i>
                </div>
                <!--end::Timeline icon-->
                <!--begin::Timeline content-->
                <div class="timeline-content mt-n1">
                  <!--begin::Timeline heading-->
                  <div class="pe-3 mb-5">
                    <!--begin::Title-->
                    <div class="fs-5 fw-semibold mb-2">
                      New order
                      <a href="#" class="text-primary fw-bold me-1">#67890</a>is
                      placed for Workshow Planning & Budget Estimation
                    </div>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="d-flex align-items-center mt-1 fs-6">
                      <!--begin::Info-->
                      <div class="text-muted me-2 fs-7">
                        Placed at 4:23 PM by
                      </div>
                      <!--end::Info-->
                      <!--begin::User-->
                      <a href="#" class="text-primary fw-bold me-1"
                        >Jimmy Bold</a
                      >
                      <!--end::User-->
                    </div>
                    <!--end::Description-->
                  </div>
                  <!--end::Timeline heading-->
                </div>
                <!--end::Timeline content-->
              </div>
              <!--end::Timeline item-->
            </div>
            <!--end::Timeline items-->
          </div>
          <!--end::Content-->
        </div>
        <!--end::Body-->
        <!--begin::Footer-->
        <div class="card-footer py-5 text-center" id="kt_activities_footer">
          <a
            href="pages/user-profile/activity.html"
            class="btn btn-bg-body text-primary"
            >View All Activities
            <i class="ki-duotone ki-arrow-right fs-3 text-primary">
              <span class="path1"></span>
              <span class="path2"></span> </i
          ></a>
        </div>
        <!--end::Footer-->
      </div>
    </div>
    <!--end::Activities drawer-->
    <!--begin::Chat drawer-->
    <div
      id="kt_drawer_chat"
      class="bg-body"
      data-kt-drawer="true"
      data-kt-drawer-name="chat"
      data-kt-drawer-activate="true"
      data-kt-drawer-overlay="true"
      data-kt-drawer-width="{default:'300px', 'md': '500px'}"
      data-kt-drawer-direction="end"
      data-kt-drawer-toggle="#kt_drawer_chat_toggle"
      data-kt-drawer-close="#kt_drawer_chat_close"
    >
      <!--begin::Messenger-->
      <div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">
        <!--begin::Card header-->
        <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
          <!--begin::Title-->
          <div class="card-title">
            <!--begin::User-->
            <div class="d-flex justify-content-center flex-column me-3">
              <a
                href="#"
                class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1"
                >Brian Cox</a
              >
              <!--begin::Info-->
              <div class="mb-0 lh-1">
                <span
                  class="badge badge-success badge-circle w-10px h-10px me-1"
                ></span>
                <span class="fs-7 fw-semibold text-muted">Active</span>
              </div>
              <!--end::Info-->
            </div>
            <!--end::User-->
          </div>
          <!--end::Title-->
          <!--begin::Card toolbar-->
          <div class="card-toolbar">
            <!--begin::Menu-->
            <div class="me-0">
              <button
                class="btn btn-sm btn-icon btn-active-color-primary"
                data-kt-menu-trigger="click"
                data-kt-menu-placement="bottom-end"
              >
                <i class="ki-duotone ki-dots-square fs-2">
                  <span class="path1"></span>
                  <span class="path2"></span>
                  <span class="path3"></span>
                  <span class="path4"></span>
                </i>
              </button>
              <!--begin::Menu 3-->
              <div
                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                data-kt-menu="true"
              >
                <!--begin::Heading-->
                <div class="menu-item px-3">
                  <div
                    class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase"
                  >
                    Contacts
                  </div>
                </div>
                <!--end::Heading-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                  <a
                    href="#"
                    class="menu-link px-3"
                    data-bs-toggle="modal"
                    data-bs-target="#kt_modal_users_search"
                    >Add Contact</a
                  >
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                  <a
                    href="#"
                    class="menu-link flex-stack px-3"
                    data-bs-toggle="modal"
                    data-bs-target="#kt_modal_invite_friends"
                    >Invite Contacts
                    <span
                      class="ms-2"
                      data-bs-toggle="tooltip"
                      title="Specify a contact email to send an invitation"
                    >
                      <i class="ki-duotone ki-information fs-7">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                      </i> </span
                  ></a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div
                  class="menu-item px-3"
                  data-kt-menu-trigger="hover"
                  data-kt-menu-placement="right-start"
                >
                  <a href="#" class="menu-link px-3">
                    <span class="menu-title">Groups</span>
                    <span class="menu-arrow"></span>
                  </a>
                  <!--begin::Menu sub-->
                  <div class="menu-sub menu-sub-dropdown w-175px py-4">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                      <a
                        href="#"
                        class="menu-link px-3"
                        data-bs-toggle="tooltip"
                        title="Coming soon"
                        >Create Group</a
                      >
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                      <a
                        href="#"
                        class="menu-link px-3"
                        data-bs-toggle="tooltip"
                        title="Coming soon"
                        >Invite Members</a
                      >
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                      <a
                        href="#"
                        class="menu-link px-3"
                        data-bs-toggle="tooltip"
                        title="Coming soon"
                        >Settings</a
                      >
                    </div>
                    <!--end::Menu item-->
                  </div>
                  <!--end::Menu sub-->
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3 my-1">
                  <a
                    href="#"
                    class="menu-link px-3"
                    data-bs-toggle="tooltip"
                    title="Coming soon"
                    >Settings</a
                  >
                </div>
                <!--end::Menu item-->
              </div>
              <!--end::Menu 3-->
            </div>
            <!--end::Menu-->
            <!--begin::Close-->
            <div
              class="btn btn-sm btn-icon btn-active-color-primary"
              id="kt_drawer_chat_close"
            >
              <i class="ki-duotone ki-cross-square fs-2">
                <span class="path1"></span>
                <span class="path2"></span>
              </i>
            </div>
            <!--end::Close-->
          </div>
          <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body" id="kt_drawer_chat_messenger_body">
          <!--begin::Messages-->
          <div
            class="scroll-y me-n5 pe-5"
            data-kt-element="messages"
            data-kt-scroll="true"
            data-kt-scroll-activate="true"
            data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
            data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body"
            data-kt-scroll-offset="0px"
          >
            <!--begin::Message(in)-->
            <div class="d-flex justify-content-start mb-10">
              <!--begin::Wrapper-->
              <div class="d-flex flex-column align-items-start">
                <!--begin::User-->
                <div class="d-flex align-items-center mb-2">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-3">
                    <a
                      href="#"
                      class="fs-5 fw-bold text-gray-900 text-hover-primary me-1"
                      >Brian Cox</a
                    >
                    <span class="text-muted fs-7 mb-1">2 mins</span>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::User-->
                <!--begin::Text-->
                <div
                  class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                  data-kt-element="message-text"
                >
                  How likely are you to recommend our company to your friends
                  and family ?
                </div>
                <!--end::Text-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Message(in)-->
            <!--begin::Message(out)-->
            <div class="d-flex justify-content-end mb-10">
              <!--begin::Wrapper-->
              <div class="d-flex flex-column align-items-end">
                <!--begin::User-->
                <div class="d-flex align-items-center mb-2">
                  <!--begin::Details-->
                  <div class="me-3">
                    <span class="text-muted fs-7 mb-1">5 mins</span>
                    <a
                      href="#"
                      class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1"
                      >You</a
                    >
                  </div>
                  <!--end::Details-->
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                  </div>
                  <!--end::Avatar-->
                </div>
                <!--end::User-->
                <!--begin::Text-->
                <div
                  class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end"
                  data-kt-element="message-text"
                >
                  Hey there, we’re just writing to let you know that you’ve been
                  subscribed to a repository on GitHub.
                </div>
                <!--end::Text-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Message(out)-->
            <!--begin::Message(in)-->
            <div class="d-flex justify-content-start mb-10">
              <!--begin::Wrapper-->
              <div class="d-flex flex-column align-items-start">
                <!--begin::User-->
                <div class="d-flex align-items-center mb-2">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-3">
                    <a
                      href="#"
                      class="fs-5 fw-bold text-gray-900 text-hover-primary me-1"
                      >Brian Cox</a
                    >
                    <span class="text-muted fs-7 mb-1">1 Hour</span>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::User-->
                <!--begin::Text-->
                <div
                  class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                  data-kt-element="message-text"
                >
                  Ok, Understood!
                </div>
                <!--end::Text-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Message(in)-->
            <!--begin::Message(out)-->
            <div class="d-flex justify-content-end mb-10">
              <!--begin::Wrapper-->
              <div class="d-flex flex-column align-items-end">
                <!--begin::User-->
                <div class="d-flex align-items-center mb-2">
                  <!--begin::Details-->
                  <div class="me-3">
                    <span class="text-muted fs-7 mb-1">2 Hours</span>
                    <a
                      href="#"
                      class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1"
                      >You</a
                    >
                  </div>
                  <!--end::Details-->
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                  </div>
                  <!--end::Avatar-->
                </div>
                <!--end::User-->
                <!--begin::Text-->
                <div
                  class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end"
                  data-kt-element="message-text"
                >
                  You’ll receive notifications for all issues, pull requests!
                </div>
                <!--end::Text-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Message(out)-->
            <!--begin::Message(in)-->
            <div class="d-flex justify-content-start mb-10">
              <!--begin::Wrapper-->
              <div class="d-flex flex-column align-items-start">
                <!--begin::User-->
                <div class="d-flex align-items-center mb-2">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-3">
                    <a
                      href="#"
                      class="fs-5 fw-bold text-gray-900 text-hover-primary me-1"
                      >Brian Cox</a
                    >
                    <span class="text-muted fs-7 mb-1">3 Hours</span>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::User-->
                <!--begin::Text-->
                <div
                  class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                  data-kt-element="message-text"
                >
                  You can unwatch this repository immediately by clicking here:
                  <a href="https://keenthemes.com">Keenthemes.com</a>
                </div>
                <!--end::Text-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Message(in)-->
            <!--begin::Message(out)-->
            <div class="d-flex justify-content-end mb-10">
              <!--begin::Wrapper-->
              <div class="d-flex flex-column align-items-end">
                <!--begin::User-->
                <div class="d-flex align-items-center mb-2">
                  <!--begin::Details-->
                  <div class="me-3">
                    <span class="text-muted fs-7 mb-1">4 Hours</span>
                    <a
                      href="#"
                      class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1"
                      >You</a
                    >
                  </div>
                  <!--end::Details-->
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                  </div>
                  <!--end::Avatar-->
                </div>
                <!--end::User-->
                <!--begin::Text-->
                <div
                  class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end"
                  data-kt-element="message-text"
                >
                  Most purchased Business courses during this sale!
                </div>
                <!--end::Text-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Message(out)-->
            <!--begin::Message(in)-->
            <div class="d-flex justify-content-start mb-10">
              <!--begin::Wrapper-->
              <div class="d-flex flex-column align-items-start">
                <!--begin::User-->
                <div class="d-flex align-items-center mb-2">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-3">
                    <a
                      href="#"
                      class="fs-5 fw-bold text-gray-900 text-hover-primary me-1"
                      >Brian Cox</a
                    >
                    <span class="text-muted fs-7 mb-1">5 Hours</span>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::User-->
                <!--begin::Text-->
                <div
                  class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                  data-kt-element="message-text"
                >
                  Company BBQ to celebrate the last quater achievements and
                  goals. Food and drinks provided
                </div>
                <!--end::Text-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Message(in)-->
            <!--begin::Message(template for out)-->
            <div
              class="d-flex justify-content-end mb-10 d-none"
              data-kt-element="template-out"
            >
              <!--begin::Wrapper-->
              <div class="d-flex flex-column align-items-end">
                <!--begin::User-->
                <div class="d-flex align-items-center mb-2">
                  <!--begin::Details-->
                  <div class="me-3">
                    <span class="text-muted fs-7 mb-1">Just now</span>
                    <a
                      href="#"
                      class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1"
                      >You</a
                    >
                  </div>
                  <!--end::Details-->
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                  </div>
                  <!--end::Avatar-->
                </div>
                <!--end::User-->
                <!--begin::Text-->
                <div
                  class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end"
                  data-kt-element="message-text"
                ></div>
                <!--end::Text-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Message(template for out)-->
            <!--begin::Message(template for in)-->
            <div
              class="d-flex justify-content-start mb-10 d-none"
              data-kt-element="template-in"
            >
              <!--begin::Wrapper-->
              <div class="d-flex flex-column align-items-start">
                <!--begin::User-->
                <div class="d-flex align-items-center mb-2">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-3">
                    <a
                      href="#"
                      class="fs-5 fw-bold text-gray-900 text-hover-primary me-1"
                      >Brian Cox</a
                    >
                    <span class="text-muted fs-7 mb-1">Just now</span>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::User-->
                <!--begin::Text-->
                <div
                  class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                  data-kt-element="message-text"
                >
                  Right before vacation season we have the next Big Deal for
                  you.
                </div>
                <!--end::Text-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Message(template for in)-->
          </div>
          <!--end::Messages-->
        </div>
        <!--end::Card body-->
        <!--begin::Card footer-->
        <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
          <!--begin::Input-->
          <textarea
            class="form-control form-control-flush mb-3"
            rows="1"
            data-kt-element="input"
            placeholder="Type a message"
          ></textarea>
          <!--end::Input-->
          <!--begin:Toolbar-->
          <div class="d-flex flex-stack">
            <!--begin::Actions-->
            <div class="d-flex align-items-center me-2">
              <button
                class="btn btn-sm btn-icon btn-active-light-primary me-1"
                type="button"
                data-bs-toggle="tooltip"
                title="Coming soon"
              >
                <i class="ki-duotone ki-paper-clip fs-3"></i>
              </button>
              <button
                class="btn btn-sm btn-icon btn-active-light-primary me-1"
                type="button"
                data-bs-toggle="tooltip"
                title="Coming soon"
              >
                <i class="ki-duotone ki-cloud-add fs-3">
                  <span class="path1"></span>
                  <span class="path2"></span>
                </i>
              </button>
            </div>
            <!--end::Actions-->
            <!--begin::Send-->
            <button
              class="btn btn-primary"
              type="button"
              data-kt-element="send"
            >
              Send
            </button>
            <!--end::Send-->
          </div>
          <!--end::Toolbar-->
        </div>
        <!--end::Card footer-->
      </div>
      <!--end::Messenger-->
    </div>
    <!--end::Chat drawer-->
    <!--begin::Chat drawer-->
    <div
      id="kt_shopping_cart"
      class="bg-body"
      data-kt-drawer="true"
      data-kt-drawer-name="cart"
      data-kt-drawer-activate="true"
      data-kt-drawer-overlay="true"
      data-kt-drawer-width="{default:'300px', 'md': '500px'}"
      data-kt-drawer-direction="end"
      data-kt-drawer-toggle="#kt_drawer_shopping_cart_toggle"
      data-kt-drawer-close="#kt_drawer_shopping_cart_close"
    >
      <!--begin::Messenger-->
      <div class="card card-flush w-100 rounded-0">
        <!--begin::Card header-->
        <div class="card-header">
          <!--begin::Title-->
          <h3 class="card-title text-gray-900 fw-bold">Shopping Cart</h3>
          <!--end::Title-->
          <!--begin::Card toolbar-->
          <div class="card-toolbar">
            <!--begin::Close-->
            <div
              class="btn btn-sm btn-icon btn-active-light-primary"
              id="kt_drawer_shopping_cart_close"
            >
              <i class="ki-duotone ki-cross fs-2">
                <span class="path1"></span>
                <span class="path2"></span>
              </i>
            </div>
            <!--end::Close-->
          </div>
          <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body hover-scroll-overlay-y h-400px pt-5">
          <!--begin::Item-->
          <div class="d-flex flex-stack">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column me-3">
              <!--begin::Section-->
              <div class="mb-3">
                <a
                  href="apps/ecommerce/sales/details.html"
                  class="text-gray-800 text-hover-primary fs-4 fw-bold"
                  >Iblender</a
                >
                <span class="text-gray-500 fw-semibold d-block"
                  >The best kitchen gadget in 2022</span
                >
              </div>
              <!--end::Section-->
              <!--begin::Section-->
              <div class="d-flex align-items-center">
                <span class="fw-bold text-gray-800 fs-5">$ 350</span>
                <span class="text-muted mx-2">for</span>
                <span class="fw-bold text-gray-800 fs-5 me-3">5</span>
                <a
                  href="#"
                  class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2"
                >
                  <i class="ki-duotone ki-minus fs-4"></i>
                </a>
                <a
                  href="#"
                  class="btn btn-sm btn-light-success btn-icon w-25px h-25px"
                >
                  <i class="ki-duotone ki-plus fs-4"></i>
                </a>
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Pic-->
            <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
              <img src="assets/media/stock/600x400/img-1.jpg" alt="" />
            </div>
            <!--end::Pic-->
          </div>
          <!--end::Item-->
          <!--begin::Separator-->
          <div class="separator separator-dashed my-6"></div>
          <!--end::Separator-->
          <!--begin::Item-->
          <div class="d-flex flex-stack">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column me-3">
              <!--begin::Section-->
              <div class="mb-3">
                <a
                  href="apps/ecommerce/sales/details.html"
                  class="text-gray-800 text-hover-primary fs-4 fw-bold"
                  >SmartCleaner</a
                >
                <span class="text-gray-500 fw-semibold d-block"
                  >Smart tool for cooking</span
                >
              </div>
              <!--end::Section-->
              <!--begin::Section-->
              <div class="d-flex align-items-center">
                <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                <span class="text-muted mx-2">for</span>
                <span class="fw-bold text-gray-800 fs-5 me-3">4</span>
                <a
                  href="#"
                  class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2"
                >
                  <i class="ki-duotone ki-minus fs-4"></i>
                </a>
                <a
                  href="#"
                  class="btn btn-sm btn-light-success btn-icon w-25px h-25px"
                >
                  <i class="ki-duotone ki-plus fs-4"></i>
                </a>
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Pic-->
            <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
              <img src="assets/media/stock/600x400/img-3.jpg" alt="" />
            </div>
            <!--end::Pic-->
          </div>
          <!--end::Item-->
          <!--begin::Separator-->
          <div class="separator separator-dashed my-6"></div>
          <!--end::Separator-->
          <!--begin::Item-->
          <div class="d-flex flex-stack">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column me-3">
              <!--begin::Section-->
              <div class="mb-3">
                <a
                  href="apps/ecommerce/sales/details.html"
                  class="text-gray-800 text-hover-primary fs-4 fw-bold"
                  >CameraMaxr</a
                >
                <span class="text-gray-500 fw-semibold d-block"
                  >Professional camera for edge</span
                >
              </div>
              <!--end::Section-->
              <!--begin::Section-->
              <div class="d-flex align-items-center">
                <span class="fw-bold text-gray-800 fs-5">$ 150</span>
                <span class="text-muted mx-2">for</span>
                <span class="fw-bold text-gray-800 fs-5 me-3">3</span>
                <a
                  href="#"
                  class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2"
                >
                  <i class="ki-duotone ki-minus fs-4"></i>
                </a>
                <a
                  href="#"
                  class="btn btn-sm btn-light-success btn-icon w-25px h-25px"
                >
                  <i class="ki-duotone ki-plus fs-4"></i>
                </a>
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Pic-->
            <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
              <img src="assets/media/stock/600x400/img-8.jpg" alt="" />
            </div>
            <!--end::Pic-->
          </div>
          <!--end::Item-->
          <!--begin::Separator-->
          <div class="separator separator-dashed my-6"></div>
          <!--end::Separator-->
          <!--begin::Item-->
          <div class="d-flex flex-stack">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column me-3">
              <!--begin::Section-->
              <div class="mb-3">
                <a
                  href="apps/ecommerce/sales/details.html"
                  class="text-gray-800 text-hover-primary fs-4 fw-bold"
                  >$D Printer</a
                >
                <span class="text-gray-500 fw-semibold d-block"
                  >Manfactoring unique objekts</span
                >
              </div>
              <!--end::Section-->
              <!--begin::Section-->
              <div class="d-flex align-items-center">
                <span class="fw-bold text-gray-800 fs-5">$ 1450</span>
                <span class="text-muted mx-2">for</span>
                <span class="fw-bold text-gray-800 fs-5 me-3">7</span>
                <a
                  href="#"
                  class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2"
                >
                  <i class="ki-duotone ki-minus fs-4"></i>
                </a>
                <a
                  href="#"
                  class="btn btn-sm btn-light-success btn-icon w-25px h-25px"
                >
                  <i class="ki-duotone ki-plus fs-4"></i>
                </a>
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Pic-->
            <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
              <img src="assets/media/stock/600x400/img-26.jpg" alt="" />
            </div>
            <!--end::Pic-->
          </div>
          <!--end::Item-->
          <!--begin::Separator-->
          <div class="separator separator-dashed my-6"></div>
          <!--end::Separator-->
          <!--begin::Item-->
          <div class="d-flex flex-stack">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column me-3">
              <!--begin::Section-->
              <div class="mb-3">
                <a
                  href="apps/ecommerce/sales/details.html"
                  class="text-gray-800 text-hover-primary fs-4 fw-bold"
                  >MotionWire</a
                >
                <span class="text-gray-500 fw-semibold d-block"
                  >Perfect animation tool</span
                >
              </div>
              <!--end::Section-->
              <!--begin::Section-->
              <div class="d-flex align-items-center">
                <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                <span class="text-muted mx-2">for</span>
                <span class="fw-bold text-gray-800 fs-5 me-3">7</span>
                <a
                  href="#"
                  class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2"
                >
                  <i class="ki-duotone ki-minus fs-4"></i>
                </a>
                <a
                  href="#"
                  class="btn btn-sm btn-light-success btn-icon w-25px h-25px"
                >
                  <i class="ki-duotone ki-plus fs-4"></i>
                </a>
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Pic-->
            <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
              <img src="assets/media/stock/600x400/img-21.jpg" alt="" />
            </div>
            <!--end::Pic-->
          </div>
          <!--end::Item-->
          <!--begin::Separator-->
          <div class="separator separator-dashed my-6"></div>
          <!--end::Separator-->
          <!--begin::Item-->
          <div class="d-flex flex-stack">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column me-3">
              <!--begin::Section-->
              <div class="mb-3">
                <a
                  href="apps/ecommerce/sales/details.html"
                  class="text-gray-800 text-hover-primary fs-4 fw-bold"
                  >Samsung</a
                >
                <span class="text-gray-500 fw-semibold d-block"
                  >Profile info,Timeline etc</span
                >
              </div>
              <!--end::Section-->
              <!--begin::Section-->
              <div class="d-flex align-items-center">
                <span class="fw-bold text-gray-800 fs-5">$ 720</span>
                <span class="text-muted mx-2">for</span>
                <span class="fw-bold text-gray-800 fs-5 me-3">6</span>
                <a
                  href="#"
                  class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2"
                >
                  <i class="ki-duotone ki-minus fs-4"></i>
                </a>
                <a
                  href="#"
                  class="btn btn-sm btn-light-success btn-icon w-25px h-25px"
                >
                  <i class="ki-duotone ki-plus fs-4"></i>
                </a>
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Pic-->
            <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
              <img src="assets/media/stock/600x400/img-34.jpg" alt="" />
            </div>
            <!--end::Pic-->
          </div>
          <!--end::Item-->
          <!--begin::Separator-->
          <div class="separator separator-dashed my-6"></div>
          <!--end::Separator-->
          <!--begin::Item-->
          <div class="d-flex flex-stack">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column me-3">
              <!--begin::Section-->
              <div class="mb-3">
                <a
                  href="apps/ecommerce/sales/details.html"
                  class="text-gray-800 text-hover-primary fs-4 fw-bold"
                  >$D Printer</a
                >
                <span class="text-gray-500 fw-semibold d-block"
                  >Manfactoring unique objekts</span
                >
              </div>
              <!--end::Section-->
              <!--begin::Section-->
              <div class="d-flex align-items-center">
                <span class="fw-bold text-gray-800 fs-5">$ 430</span>
                <span class="text-muted mx-2">for</span>
                <span class="fw-bold text-gray-800 fs-5 me-3">8</span>
                <a
                  href="#"
                  class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2"
                >
                  <i class="ki-duotone ki-minus fs-4"></i>
                </a>
                <a
                  href="#"
                  class="btn btn-sm btn-light-success btn-icon w-25px h-25px"
                >
                  <i class="ki-duotone ki-plus fs-4"></i>
                </a>
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Pic-->
            <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
              <img src="assets/media/stock/600x400/img-27.jpg" alt="" />
            </div>
            <!--end::Pic-->
          </div>
          <!--end::Item-->
        </div>
        <!--end::Card body-->
        <!--begin::Card footer-->
        <div class="card-footer">
          <!--begin::Item-->
          <div class="d-flex flex-stack">
            <span class="fw-bold text-gray-600">Total</span>
            <span class="text-gray-800 fw-bolder fs-5">$ 1840.00</span>
          </div>
          <!--end::Item-->
          <!--begin::Item-->
          <div class="d-flex flex-stack">
            <span class="fw-bold text-gray-600">Sub total</span>
            <span class="text-primary fw-bolder fs-5">$ 246.35</span>
          </div>
          <!--end::Item-->
          <!--end::Action-->
          <div class="d-flex justify-content-end mt-9">
            <a href="#" class="btn btn-primary d-flex justify-content-end"
              >Pleace Order</a
            >
          </div>
          <!--end::Action-->
        </div>
        <!--end::Card footer-->
      </div>
      <!--end::Messenger-->
    </div>
    <!--end::Chat drawer-->
    <!--end::Drawers-->
    <!--end::Main-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
      <i class="ki-duotone ki-arrow-up">
        <span class="path1"></span>
        <span class="path2"></span>
      </i>
    </div>
    <!--end::Scrolltop-->

    <!--begin::Javascript-->
    <script>
      var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="assets/js/widgets.bundle.js"></script>
    <script src="assets/js/custom/widgets.js"></script>
    <script src="assets/js/custom/apps/chat/chat.js"></script>
    <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="assets/js/custom/utilities/modals/users-search.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
  </body>
  <!--end::Body-->
</html>
