<template>
  <section class="cat_product_area section_gap">
    <div class="container">
      <div class="row flex-row-reverse">
        <div class="col-lg-12">
          <div class="product_top_bar">
            <div class="left_dorp">
              <select class="sorting">
                <option value="1">Default sorting</option>
                <option value="2">Default sorting 01</option>
                <option value="4">Default sorting 02</option>
              </select>
            </div>
          </div>

          <div class="latest_product_inner">
            <div class="row">
              <div
                class="col-lg-4 col-md-6"
                v-for="product in products"
                :key="product.id"
              >
                <div class="single-product">
                  <div class="product-img">
                    <img
                      style="height: 260px"
                      class="img-fluid card-img"
                      :src="getPic(product)"
                      alt=""
                    />
                  </div>
                  <div class="product-btm">
                    <a href="#" class="d-block">
                      <h4>{{ product.header }}</h4>
                    </a>
                    <div class="mt-3">
                      <span class="mr-4">KES {{ product.price }}</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- <div class="col-lg-3">
          <div class="left_sidebar_area">
            <aside class="left_widgets p_filter_widgets">
              <div class="l_w_title">
                <h3>Categories</h3>
              </div>
              <div class="widgets_inner">
                <ul class="list">
                  <li>
                    <a href="#">Frozen Fish</a>
                  </li>
                  <li>
                    <a href="#">Dried Fish</a>
                  </li>
                  <li>
                    <a href="#">Fresh Fish</a>
                  </li>
                  <li>
                    <a href="#">Meat Alternatives</a>
                  </li>
                  <li>
                    <a href="#">Fresh Fish</a>
                  </li>
                  <li>
                    <a href="#">Meat Alternatives</a>
                  </li>
                  <li>
                    <a href="#">Meat</a>
                  </li>
                </ul>
              </div>
            </aside>
          </div>
        </div> -->
      </div>
    </div>
  </section>
</template>

<script>
export default {
  props: ["allProducts"],
  data() {
    return {
      products: [],
    };
  },
  computed: {
    imgLink() {
      return "/storage/portfolios/" + this.al;
    },
  },
  mounted() {
    this.products = this.allProducts;
  },
  methods: {
    getPic(product) {
      return "/storage/portfolios/" + product.image;
    },
  },
};
</script>