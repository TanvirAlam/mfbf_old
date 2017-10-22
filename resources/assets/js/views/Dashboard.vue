<template>
    <div class="tile is-ancestor">
        <div class="tile is-vertical is-8 topbox">
            <div class="tile is-parent">
                <article class="tile is-child box">
                    <div class="level-left topbox">
                        <nav class="level">
                            <div class="level-left">
                                <figure class="image is-32x32">
                                    <img src="img/avatar1.png" alt="User Image" class="img-circle">
                                </figure>
                                <a class="level-item" @click="openModalCard()">
                                    <span class="icon is-small"><i class="fa fa-cogs"></i></span>
                                </a>
                                <a class="level-item" @click="logout">
                                    <span class="icon is-small"><i class="fa fa-sign-out"></i></span>
                                </a>
                                <label class="label">Showing:</label>
                                <p class="control">
                                  <span class="select">
                                    <select>
                                      <option>Last 7 days</option>
                                      <option>Last 31 days</option>
                                      <option>Last 12 months</option>
                                      <option>Custom date range</option>
                                      <option>Week</option>
                                      <option>Month</option>
                                      <option>Year</option>
                                    </select>
                                  </span>
                                </p>
                            </div>

                        </nav>

                    </div>

                    <small> @tanvir.alam.shawn</small>
                </article>
            </div>
            <div class="tile is-horizontal">
                <div class="tile is-parent">
                    <article class="tile is-child box">
                        <div class="level-left">
                            <figure class="image is-32x32">
                                <img src="img/income.png" alt="User Image" class="income-color">
                            </figure>
                            <h4 class="title income-color">Income</h4>
                        </div>
                        <table class="table is-narrow">
                            <thead>
                            <tr>
                                <th class="level-right income-color">
                                    <a>
                                        <span class="icon is-small">
                                            <i class="fa fa-step-backward"></i>
                                        </span>
                                    </a>
                                    FEB-2017</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <h8 class="amount income income-color">
                                        <span class="icon is-medium">
                                            <i class="fa fa-plus-circle"></i>
                                        </span>
                                        30,000 </h8>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="level-right">
                            <a class="button is-success" @click="openModalCard()">
                                <span class="icon is-32x32">
                                  <i class="fa fa-plus"></i>
                                </span>
                            </a>
                            <a class="button is-success" @click="openModalCard()">
                                <span class="icon is-32x32">
                                  <i class="fa fa-plus"></i>
                                </span>
                            </a>
                            <a class="button is-success" @click="openModalCard()">
                                <span class="icon is-32x32">
                                  <i class="fa fa-plus"></i>
                                </span>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="tile is-parent">
                    <article class="tile is-child box">
                        <div class="level-left">
                            <figure class="image is-32x32">
                                <img src="img/expense.png" alt="User Image" class="expense-color">
                            </figure>
                            <h4 class="title expense-color">Expense</h4>
                        </div>
                        <table class="table is-narrow">
                            <thead>
                            <tr>
                                <th class="level-right expense-color">
                                    <a>
                                        <span class="icon is-small">
                                            <i class="fa fa-step-backward"></i>
                                        </span>
                                    </a>
                                    FEB-2017</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="amount expense expense-color">
                                    <span class="icon is-medium">
                                            <i class="fa fa-minus-circle"></i>
                                    </span>
                                    30,000 </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="level-right">
                            <a class="button is-success" @click="openModalCard()">
                                <span class="icon is-32x32">
                                  <i class="fa fa-plus"></i>
                                </span>
                            </a>
                            <a class="button is-success" @click="openModalCard()">
                                <span class="icon is-32x32">
                                  <i class="fa fa-plus"></i>
                                </span>
                            </a>
                            <a class="button is-success" @click="openModalCard()">
                                <span class="icon is-32x32">
                                  <i class="fa fa-plus"></i>
                                </span>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="tile is-parent">
                    <article class="tile is-child box">
                        <div class="level-left">
                            <figure class="image is-32x32">
                                <img src="img/savings.png" alt="User Image" class="savings-color">
                            </figure>
                            <h4 class="title savings-color">Savings</h4>
                        </div>
                        <table class="table is-narrow">
                            <thead>
                            <tr>
                                <th class="level-right savings-color">
                                    <a>
                                        <span class="icon is-small">
                                            <i class="fa fa-step-backward"></i>
                                        </span>
                                    </a>
                                    FEB-2017</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="amount savings savings-color">
                                    <span class="icon is-medium">
                                            <i class="fa fa-plus-circle"></i>
                                    </span>
                                    30,000 </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="level-right">
                            <a class="button is-success" @click="openModalCard()">
                                <span class="icon is-32x32">
                                  <i class="fa fa-plus"></i>
                                </span>
                            </a>
                            <a class="button is-success" @click="openModalCard()">
                                <span class="icon is-32x32">
                                  <i class="fa fa-plus"></i>
                                </span>
                            </a>
                            <a class="button is-success" @click="openModalCard()">
                                <span class="icon is-32x32">
                                  <i class="fa fa-plus"></i>
                                </span>
                            </a>
                        </div>
                    </article>
                </div>
            </div>
            <div class="tile is-horizontal">
                <div class="tile is-parent">
                    <article class="tile is-child box">
                        <div class="level-left">
                            <figure class="image is-32x32">
                                <img src="img/transaction.png" alt="User Image" class="img-savings">
                            </figure>
                            <h4 class="title">Transactions</h4>
                        </div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Amount</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <tr class="expense-color">
                                <td>Nordea Buligaurden</td>
                                <td>
                                    <img src="img/rent.png" alt="User Image">
                                    Housing (Rent)
                                </td>
                                <td>
                                    <span class="icon is-small">
                                            <i class="fa fa-minus-circle"></i>
                                    </span>
                                    6,500 DKK
                                </td>
                                <td>
                                    <a><img src="img/expense.png" alt="User Image"></a>
                                </td>
                                <td>
                                    <a><img src="img/move_expense.png" alt="User Image"></a>
                                </td>
                            </tr>
                            <tr class="income-color">
                                <td>Company X salary</td>
                                <td>
                                    <img src="img/monthly_pay.png" alt="User Image">
                                    Income (General - Income)
                                </td>
                                <td>
                                    <span class="icon is-small">
                                            <i class="fa fa-plus-circle"></i>
                                    </span>
                                    6,500 DKK
                                </td>
                                <td>
                                    <a><img src="img/income.png" alt="User Image"></a>
                                </td>
                                <td></td>
                            </tr>
                            <tr class="expense-color">
                                <td>Kwickly payment</td>
                                <td>
                                    <img src="img/groceries.png" alt="User Image">
                                    Food & Drinks (Groceries)
                                </td>
                                <td>
                                    <span class="icon is-small">
                                            <i class="fa fa-minus-circle"></i>
                                    </span>
                                    6,500 DKK
                                </td>
                                <td>
                                    <a><img src="img/expense.png" alt="User Image"></a>
                                </td>
                                <td>
                                    <a><img src="img/move_expense.png" alt="User Image"></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="level-right">
                            <a class="button is-success" @click="openModalCard()">
                                <span class="icon is-32x32">
                                  <i class="fa fa-plus"></i>
                                </span>
                            </a>
                            <a class="button is-success" @click="openModalCard()">
                                <span class="icon is-32x32">
                                  <i class="fa fa-plus"></i>
                                </span>
                            </a>
                            <a class="button is-success" @click="openModalCard()">
                                <span class="icon is-32x32">
                                  <i class="fa fa-plus"></i>
                                </span>
                            </a>
                        </div>

                    </article>
                </div>
            </div>
            <div class="tile is-parent">
                <article class="tile is-child box">
                    <div class="tabs is-left">
                        <ul>
                            <li class="is-active">
                                <a>
                                    <span class="icon is-small"><i class="fa fa-th-list"></i></span>
                                    <span>Catagories</span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <span class="icon is-small"><i class="fa fa-line-chart"></i></span>
                                    <span>Forecast</span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <span class="icon is-small"><i class="fa fa-film"></i></span>
                                    <span>Reports</span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <span class="icon is-small"><i class="fa fa-calendar-o"></i></span>
                                    <span>Calender</span>
                                </a>
                            </li>
                        </ul>
                    </div>
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
  import Datepicker from 'vue-bulma-datepicker'

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
    components: {
      Datepicker
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

    img {
        width: 30px;
        height: 25px;
        padding-right: 2px;
    }

    .content h4 {
         margin-bottom: 0;
    }

    .income {
        font-size: xx-large;
    }

    .expense {
        font-size: xx-large;
    }

    .savings {
        font-size: xx-large;
    }

    .income-color {
        -webkit-filter: opacity(.5) drop-shadow(0 0 0 green);
    }

    .expense-color {
        -webkit-filter: opacity(.5) drop-shadow(0 0 0 red);
    }

    .savings-color {
        -webkit-filter: opacity(.5) drop-shadow(0 0 0 blue);
    }

    .amount::after {
        content:"DKK";
    }

</style>
