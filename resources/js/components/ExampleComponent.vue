<template>
  <div id="app">
  
    <SearchAutocomplete/>
  </div>
</template>

<script>
import SearchAutocomplete from './SearchAutocomplete.vue'
import axios from "axios";
export default {
  name: 'ExampleComponent',
    data() {
    return {
      
      results: [],
      
    };
  },
  mounted() {
    this.get_result();
  },
  components: {
    SearchAutocomplete
  },
  methods: {
    get_result: function (e) {
      axios.get("api/search").then((response) => {
		  //console.log(response.data);
		  this.results = response.data;
        //alert(response.data);
      });
    },
  }
}
</script>