<template>
    <div>
        <input type="text" placeholder="Serarch for income type" v-model="query" v-on:keyup="autoComplete()" class="form-control">
        <div class="panel-footer" v-if="results.length">
            <ul class="list-group">
                <li class="list-group-item" v-for="result in results">
                    {{ result.name }}
                </li>
            </ul>
        </div>
    </div>
</template>
<script>
  import axios from 'axios'

  export default{
    data(){
      return {
        query: '',
        results: []
      }
    },
    methods: {
      autoComplete(){
        this.results = [];
        if(this.query.length > 2){
          axios.get('/api/income/search',{params: {query: this.query}}).then(response => {
            console.log(response.data)
            this.results = response.data;
          });
        }
      }
    }
  }
</script>
