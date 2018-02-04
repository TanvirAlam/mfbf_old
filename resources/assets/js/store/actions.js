import axios from 'axios'

export default {
  register: ({ commit }, { email, password, passwordConfirmation }) => {
    axios.post(`/api/register`, {
        email,
        password: password,
        password_confirmation: passwordConfirmation
    })
      .then(
        ({ data }) => {
          console.log(data)
        },
        (error) => {
          console.log(error)
        }
      )
  },

  saveCategory: ({ commit }, {query, groupName}) => {
    console.log(query)
    axios.post(`/api/category/store`, {
      name: query,
      group_name: groupName
    })
  },

  deleteCategory: ({ commit }, {query, groupName}) => {
    console.log(query)
    axios.post(`/api/category/delete`, {
      name: query,
      group_name: groupName
    })
  },

  fetchUser: ({ commit }) => {
    const user = axios.get('/api/user')

    //console.log(user)
    if (user) {
      commit('FETCH_USER_SUCCESS', user)
    } else {
      commit('FETCH_USER_FAILURE')
    }
  },

  saveToken ({ commit }, payload) {
    commit('SAVE_TOKEN', payload)
  },

  logout: ({ commit }) => {
    commit('LOGOUT')
  }
}
