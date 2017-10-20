<template>
    <div class="tile is-ancestor">
        <div class="tile is-vertical is-8 topbox">
            <div class="level-left topbox">
                <figure class="image is-32x32">
                    <img src="img/avatar1.png" alt="User Image" class="img-circle">
                </figure>
                <a class="level-item" @click="openModalCard()">
                    <span class="icon is-small"><i class="fa fa-cogs"></i></span>
                </a>
                <a class="level-item" @click="logout">
                    <span class="icon is-small"><i class="fa fa-sign-out"></i></span>
                </a>
            </div>
            <div class="tile is-horizontal">
                <div class="tile is-parent">
                    <article class="tile is-child box">
                        <p>Month wise Current Bank Balance with flip card pie chart or bar chart</p>
                    </article>
                </div>
                <div class="tile is-parent">
                    <article class="tile is-child box">
                        <p>Month wise total expense and flip card with bar chart</p>
                    </article>
                </div>
                <div class="tile is-parent">
                    <article class="tile is-child box">
                        <p>Total saving and flip card chart with detail savings</p>
                    </article>
                </div>
                <div class="tile is-parent">
                    <article class="tile is-child box">
                        <p>Here we show my Current Bank Balance with flip card pie chart or bar chart</p>
                    </article>
                </div>
            </div>
            <div class="tile is-horizontal">
                <div class="tile is-parent">
                    <article class="tile is-child box">
                        <p>Month wise Current Bank Balance with flip card pie chart or bar chart</p>
                    </article>
                </div>
                <div class="tile is-parent">
                    <article class="tile is-child box">
                        <p>Month wise total expense and flip card with bar chart</p>
                    </article>
                </div>
                <div class="tile is-parent">
                    <article class="tile is-child box">
                        <p>Total saving and flip card chart with detail savings</p>
                    </article>
                </div>
                <div class="tile is-parent">
                    <article class="tile is-child box">
                        <p>Here we show my Current Bank Balance with flip card pie chart or bar chart</p>
                    </article>
                </div>
            </div>
            <div class="tile is-parent">
                <article class="tile is-child box">
                    <p>Tab system here</p>
                </article>
            </div>

        </div>
        <div class="tile is-parent">
            <article class="tile is-child box">
                <p>Timeline with information on my spending, need a cool design for this</p>
            </article>
        </div>
    </div>
</template>

<script>
  import Vue from 'vue'
  import CardModal from './modals/CardModal'

  const CardModalComponent = Vue.extend(CardModal)

  const openCardModal = (propsData = {
    visible: true
  }) => {
    return new CardModalComponent({
      el: document.createElement('div'),
      propsData
    })
  }

  export default {
    name: 'sidebar',
    props: {
      show: Boolean
    },
    data () {
      return {
        cardModal: null
      }
    },

    methods: {
      logout () {
        this.$store.dispatch('logout').then(() => {
          this.$router.push({
            name: 'auth.login'
          })
        })
      },

      openModalCard () {
        const cardModal = this.cardModal || (this.cardModal = openCardModal({
          title: 'Settings',
          url: ''
        }))
        cardModal.$children[0].active()
      }
    },
  }

</script>

<style lang="scss">
    @import '~bulma/sass/utilities/variables';
    @import '~bulma/sass/utilities/mixins';

    .topbox {
        padding: 0px 10px;
    }
</style>
