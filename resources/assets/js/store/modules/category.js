import axios from 'axios'

export default {
  state: {
    categories: []
  },
  getters: {
    categories: state => state.categories
  },
  mutations: {
    LOAD_CATEGORIES (state, data) {
      state.categories = data
    }
  },
  actions: {
    saveCategory: ({}, {query, groupName}) => {
      axios.post(`/api/category/store`, {
        name: query,
        group_name: groupName
      })
    },

    deleteCategory: ({}, {query, groupName}) => {
      axios.post(`/api/category/delete`, {
        name: query,
        group_name: groupName
      })
    },

    searchCategory: ({commit}, {query, groupName}) => {

      axios.get('/api/category/search', {
        params: {
          query: query,
          group_name: groupName
        }
      }).then(response => {
        commit('LOAD_CATEGORIES', response.data)
      })
    },
  }
}
