<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Example Component</div>

          <div class="card-body">
            I'm an example component.
            <select v-model="selected" @change="doThis">
              <option disabled value="">Please select one</option>
              <option>A</option>
              <option>B</option>
              <option>C</option>
            </select>
            <span>Selected: {{ selected }}</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      selected: null,
    };
  },
  mounted() {
    console.log("Component mounted.");
  },
  methods: {
    doThis() {
      console.log("Here");
      console.log(this.selected);
    },
  },
};
</script>
