<template>
    <div>
        <div class="field">
            <input type="text"
                   v-bind:placeholder="placeholder"
                   v-bind:groupName="groupName"
                   v-model="searchQuery"
                   v-on:keyup="autoComplete()"
                   class="form-control">
                <span class="is-pulled-right newCategorySave" v-if="results.length == 0 && this.searchQuery">
                    <a class="button is-success is-small" @click="saveCategory(this.searchQuery)">
                        <span class="icon is-small">
                            <icon class="fa fa-floppy-o"></icon>
                        </span>
                    </a>
                </span>
                <div v-if="results.length == 0 && this.searchQuery" class="block">
                  <span class="tag">
                      <i class="fa fa-exclamation-triangle"></i>
                      <p class="help is-danger">Please enter only {{ groupName }} categories</p>
                  </span>
                </div>
        </div>
        <div class="panel-footer" v-if="results.length">
            <ul class="list-group">
                <li class="list-group-item" v-for="result in results" @click="select(result)">
                    {{ result.name }}
                    <a class="button is-success is-small is-pulled-right" @click="deleteCategory(this.searchQuery)">
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
        searchQuery: '',
        results: []
      }
    },
    props: [
      'placeholder',
      'name',
      'groupName'
    ],
    methods: {
      autoComplete(){
        this.results = [];
        if(this.searchQuery.length > 1){
          this.$store.dispatch('searchCategory', {
            query: this.searchQuery,
            groupName: this.groupName
          }).then(response => {
            this.results = this.$store.state.category.categories
          })

        }
      },
      select: function(result){
        this.searchQuery = result.name
        this.autoComplete()
      },
      saveCategory(){
        this.$store.dispatch('saveCategory', {
          query: this.searchQuery,
          groupName: this.groupName
        }).then(response => {
          this.autoComplete()
        })
      },
      deleteCategory(){
        this.$store.dispatch('deleteCategory', {
          query: this.searchQuery,
          groupName: this.groupName
        }).then(response => {
          this.autoComplete()
        })
      }
    }
  }
</script>
<style scoped>

    .newCategorySave {
        margin-top: -32px;
        padding: 0px 5px;
    }

    .list-group {
        list-style: none;
        padding: 5px 0px 0px 0px;
        margin-left: 0px;
    }

    .list-group li:hover {
        color: #ffffff;
        background-color: #00A5E3;
    }

    .list-group-item {
        left: 100px;
        padding: 0px 0px 3px 5px;
    }
/*
    .list-group li {
        position: relative;
        left: 0;
        right: 0;
        margin-top: -15px;
        list-style: none;
        transition: all 0.3s ease-out;
        padding: 20px 0px 0px 0px;
        font-weight: bold;
    }
*/

</style>
