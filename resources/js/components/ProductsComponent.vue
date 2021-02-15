<template>
  <div>
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2>Products</h2>
              <p>Browse through our wide range of quality products</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="cat_product_area section_gap">
      <div class="container">
        <div class="row flex-row-reverse">
          <div class="col-lg-12">
            <div class="product_top_bar">
              <div class="left_dorp">
                <select v-model="productType" class="sorting">
                  <option value="all">All</option>
                  <option
                    :value="type.name"
                    v-for="type in types"
                    :key="type.name"
                  >
                    {{ type.name }}
                  </option>
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
                      <a :href="getLink(product)" class="d-block">
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
        </div>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  props: ["allProducts", "types"],
  data() {
    return {
      products: [],
      productType: "all",
    };
  },
  computed: {
    imgLink() {
      return "/storage/portfolios/" + this.al;
    },
  },
  watch: {
    productType() {
      if (this.productType === "all") {
        this.products = this.allProducts;
        return;
      }
      this.products = this.allProducts.filter(
        (prod) => prod.type.name == this.productType
      );
    },
  },
  mounted() {
    this.products = this.allProducts;
  },
  methods: {
    getLink(product) {
      return "/products-list/" + product.id;
    },
    getPic(product) {
      return "/storage/portfolios/" + product.image;
    },
  },
};
</script>