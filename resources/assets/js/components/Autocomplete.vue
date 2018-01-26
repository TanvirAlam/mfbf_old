<template>
    <div>
        <div class="field">
            <input type="text"
                   v-bind:placeholder="placeholder"
                   v-model="query"
                   v-on:keyup="autoComplete()"
                   class="form-control">
            <span class="is-pulled-right newCategorySave" v-if="results.length == 0 && this.query">
                <a class="button is-success is-small" @click="saveCategory(this.query)">
                    <span class="icon is-small">
                        <icon class="fa fa-floppy-o"></icon>
                    </span>
                </a>
            </span>
            <div v-if="results.length == 0 && this.query" class="block">
              <span class="tag">
                  <i class="fa fa-exclamation-triangle"></i>
                  <p class="help is-danger">Please enter only income categories</p>
              </span>
            </div>
        </div>
        <div class="panel-footer" v-if="results.length">
            <ul class="list-group">
                <li class="list-group-item" v-for="result in results" @click="select(result)">
                    {{ result.name }}
                    <a class="button is-success is-small is-pulled-right" @click="deleteCategory(this.query)">
                        <span class="icon is-small">
                            <icon class="fa fa-trash"></icon>
                        </span>
                    </a>
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

    props: [
      'placeholder',
      'name'
    ],

    methods: {
      autoComplete(){
        this.results = [];
        if(this.query.length > 1){
          axios.get('/api/income/search',{params: {query: this.query}}).then(response => {
            console.log(response.data)
            this.results = response.data;
          });
        }
      },
      input: function(){
        this.selected = null
      },
      select: function(result){
        this.query = result.name
      },
      saveCategory(){
        this.$store.dispatch('saveCategory', {
          query: this.query
        })
        this.autoComplete()
      },
      deleteCategory(){
        this.$store.dispatch('deleteCategory', {
          query: this.query
        })
        this.autoComplete()
      }
    }
  }
</script>
<style>
    .newCategorySave {
        margin-top: -32px;
        padding: 0px 5px;
    }

    .list-group {
        width: 100%;
    }
    .list-group li {
        position: relative;
        left: 0;
        right: 0;
        margin-top: -15px;
        list-style: none;
        transition: all 0.3s ease-out;
        padding: 20px 0px 0px 0px;
        font-size: 12px;
        font-weight: bold;
    }

    .list-group li:hover {
        color: #761c19;
        background-color: #00A5E3;
    }

</style>
