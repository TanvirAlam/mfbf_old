import axios from 'axios'

export default {
  state: {

  },
  getters: {

  },
  mutations: {

  },
  actions: {
    saveCategory(context, data) {
      return new Promise((resolve, reject) => {
        axios.post(`/api/category/store`, {
          name: data.query,
          group_name: data.groupName
        }).then(response => {
          resolve(response)
        }, error => {
          reject(error)
        })
      })
    },

    deleteCategory: ({}, {categoryId}) => {
      axios.delete(`/api/category/${categoryId}/delete`)
    },
  }
}
