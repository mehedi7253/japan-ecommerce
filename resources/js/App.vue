<template>
  <div v-if="!isSettingsLoading">
    <header>
      <div class="main-menu-area">
        <div class="container-fluid">
          <div class="d-flex align-items-center">
            <div class="left-header">
              
              <a href="">
                <img
                  src="/theme/img/website-logo.png"
                  class="logo d-none d-md-inline-block"
                />
              </a>
            </div>

            <div class="search-area flex-grow-1">
              <div class="home-search">
                <input
                  type="text"
                  name="search"
                  id="search"
                  @keyup="searchProduct($event)"
                  :value="keyword"
                  autocomplete="off"
                  placeholder="Search Products"
                />
                <button type="button" class="search-btn d-none d-md-block">
                  <i class="icofont-search"></i>
                </button>
              </div>
            </div>

            <!-- google translator start -->
            <!-- <div><GoogleTrans /></div> -->
            <!-- google translator End -->

            <div class="right-header ml-lg-2">
              <div class="menu-extra float-right d-none d-lg-inline-block">
                <ul>
                  <li v-if="isLoggedIn">
                    <router-link :to="{ name: 'profile' }"
                      ><i class="icofont-ui-user"></i>
                      {{ user.name }}</router-link
                    >
                  </li>

                  <li v-if="isLoggedIn">
                    <a href="#" @click="logout" class="btn-signin"
                      ><i class="icofont-exit"></i> {{ $lang["Logout"] }}</a
                    >
                  </li>

                  <li v-if="!isLoggedIn">
                    <router-link
                      :to="{ name: 'register' }"
                      exact
                      class="btn-signup"
                      ><i class="icofont-user-alt-7"></i>
                      {{ $lang["Sign Up"] }}</router-link
                    >
                  </li>

                  <li v-if="!isLoggedIn">
                    <router-link
                      :to="{ name: 'login' }"
                      exact
                      class="btn-signin"
                      ><i class="icofont-sign-in"></i>
                      {{ $lang["Sign In"] }}</router-link
                    >
                  </li>
                </ul>
              </div>
              <router-link
                class="btn btn-action btn-sm d-lg-none ml-2"
                :to="{ name: 'profile' }"
                ><i class="icofont-ui-user"></i
              ></router-link>
            </div>
          </div>
        </div>

      <nav class="navbar navbar-expand-lg navbar-light " style="margin-top: 1%; margin-bottom:-1%; position: sticky; background-color: #FCB800;">
        <span id="sidebarToggle">
            <div class="lines">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div>
        </span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <router-link
                  class="nav-link"
                  v-on:click.native="triggerNav"
                  :to="{ name: 'home' }"
                  exact
                > Home </router-link>
              </li>
            <li class="nav-item dropdown dropdown-hover position-static">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                data-mdb-toggle="dropdown" aria-expanded="false">
                Shop
              </a>
              <div class="dropdown-menu w-100 mt-0" aria-labelledby="navbarDropdown" style="border-top-left-radius: 0;
              border-top-right-radius: 0;  ">
                <div class="sub-menu">
                  <div class="">
                    <div class="row my-4">
                      
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <div class="list-group list-group-flush">
                          <h5>Cooking</h5>
                         <a>
                          <router-link :to="'/category/basmati-rice'" >
                            Basmoti Rice
                          </router-link>
                         </a>
                         <a>
                          <router-link :to="'/category/flour-atta'" >
                           Flour (Atta)
                          </router-link>
                         </a>
                         
                        </div>
                      </div>
                      

                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <div class="list-group list-group-flush">
                          <h5>Meat & Fish</h5>
                         <a>
                          <router-link :to="'/category/Beef'" >
                           Meat
                          </router-link>
                         </a>
                         <a>
                          <router-link :to="'/category/Chicken'" >
                           Chicken
                          </router-link>
                         </a>
                         
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <div class="list-group list-group-flush">
                          <h5>Beauty & Helth</h5>
                         <a>
                          <router-link :to="'/category/bath-soap'" >
                             Bath & Soap
                          </router-link>
                         </a>
                         <a>
                          <router-link :to="'/category/mens-care'" >
                           Mens Care
                          </router-link>
                         </a>
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <div class="list-group list-group-flush">
                          <h5>Fruits & Vegetables</h5>
                         <a>
                          <router-link :to="'/category/fruits'" >
                            Fruits
                          </router-link>
                         </a>
                         <a>
                          <router-link :to="'/category/vegetables'" >
                           Vegetables
                          </router-link>
                         </a>
                        </div>
                      </div>

                  
                    </div>
                </div>
                </div>
              </div>
            </li>
            <li class="nav-item">
                <router-link
                class="nav-link"
                v-on:click.native="triggerNav"
                :to="{ name: 'home' }"
                exact
              > Categories </router-link>
            </li>
            <li class="nav-item" v-for="p in pages" :key="p.id">
               <router-link
                class="nav-link"
                  :to="{ name: 'page', params: { slug: p.slug } }"
                >
                  {{ p.title }}
                </router-link>
            </li>
            
          </ul>
        </div>
      </nav>

      </div>
      
    </header>
    <div>
      
    </div>
    
    <ShoppingCart />

    <div id="content-area" class="mobile-nav">
      <Sidebar />
      <div id="content">
        <event-hub></event-hub>
        <div class="main-content">
          <router-view></router-view>
        </div>
        <Footer></Footer>
      </div>
    </div>
  </div>
</template>

<script>
import EventHub from "./components/EventHub.vue";
import Footer from "./components/Footer.vue";
import ShoppingCart from "./components/ShoppingCart.vue";
import Sidebar from "./components/Sidebar.vue";

export default {
  name: "App",
  components: {
    EventHub,
    Sidebar,
    ShoppingCart,
    Footer,
  },
  computed: {
    isLoggedIn: function () {
      return this.$store.getters["auth/isLoggedIn"];
    },
    user: function () {
      return this.$store.getters["auth/user"];
    },
    keyword: function () {
      return this.$store.getters["search/keyword"];
    },
    isSettingsLoading: function () {
      return this.$store.getters["settings/loading"];
    },
     settings: function () {
      return this.$store.getters["settings/settings"];
    },
    pages: function () {
      return this.$store.getters["settings/pages"];
    },
  },
  methods: {
    logout: function () {
      this.$store.dispatch("auth/logout").then(() => {
        this.$router.push("/login");
      });
    },
    searchProduct: function ($event) {
      const keyword = $event.target.value;
      this.$store.dispatch("search/setKeyword", keyword);
    },
  },
  created: function () {
    //this.$store.dispatch("settings/getSettings");
    this.$store.dispatch("category/fetchCategories");

    this.$http.interceptors.response.use(
      (response) => {
        return response;
      },
      (error) => {
        if (
          error.response.status === 401 &&
          error.response.config &&
          !error.response.config.__isRetryRequest
        ) {
          this.$store.dispatch("auth/logout").then(() => {
            if (this.$route.meta.requiresAuth) {
              this.$router.push("/login");
            }
          });
        }
        return Promise.reject(error);
      }
    );

    const token = localStorage.getItem("token");
    if (token) {
      this.$store.dispatch("auth/getProfile");
    }
  },
  watch: {
    keyword: function () {
      this.$store.dispatch("search/search");
      document.getElementById("search").focus();
      if (this.$route.name !== "searchProducts") {
        this.$router.push({ name: "searchProducts" });
      }

      if (this.keyword == "") {
        if (this.$route.name !== "home") {
          this.$router.push({ name: "home" });
        }
      }
    },
  },
};


</script>
