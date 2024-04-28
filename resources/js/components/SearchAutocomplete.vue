<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
	  
        <div class="card">
          <div class="autocomplete">
            <input type="text" v-model="search" @input="onChange" />
            <ul v-show="isOpen" class="autocomplete-results">
             
			    <li
			  
                v-for="(result, i) in results"
                :key="i"
                class="autocomplete-result"
              >
			
                {{ result.airport_name  }}
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "SearchAutocomplete",
  /*
  props: {
    items: {
      type: Array,
      required: false,
      default: () => [],
    },
  },
  */
  data() {
    return {
      search: "",
      results: [],
      isOpen: false,
	 
    };
  },
  
  methods: {
    async filterResults() {
	
			 
		 
		
	  var res = await axios(
	  {
		  method:'get',
		  url:   'api/search',
		  params:{search:'m'}
	  }
	)
	  console.log(res.data);
	 this.results = res.data.filter(
        (item) => item.airport_name .toLowerCase().indexOf(this.search.toLowerCase()) > -1,
      );
	  
    },
    onChange() {
      this.filterResults();
      this.isOpen = true;
    },

  
  },
};
</script>
