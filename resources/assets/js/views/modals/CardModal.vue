<template>
    <card-modal :visible="visible" @close="close" :title="title" transition="zoom">
        <div class="content has-text-centered">
            <img src="img/Under_construction.JPG" alt="User Image" class="img-circle">
        </div>
    </card-modal>
</template>

<script>
  import { CardModal } from 'vue-bulma-modal'

  export default {
    components: {
      CardModal
    },

    props: {
      visible: Boolean,
      title: String,
      url: String
    },

    methods: {
      open (url) {
        window.open(url)
      },

      close () {
        this.$emit('close')
      }
    }
  }
</script>
