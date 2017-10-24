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
                                <a class="level-item" @click="logout">
                                    <img src="img/logout.png" class="logout">
                                </a>
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
                    <div class="level-left">
                        <a>
                            <span class="icon is-small">
                                <i class="fa fa-step-backward"></i>
                            </span>
                        </a>
                        FEB-2017
                    </div>
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
                                    <div class="amount income income-color">
                                        <span class="icon is-medium">
                                            <i class="fa fa-plus-circle"></i>
                                        </span>
                                        30,000 </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="level-right income-color">
                            <a @click="openModalCard()">
                                <img src="img/graph.png" class="graph">
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
                        <div class="level-right expense-color">
                            <a @click="openModalCard()">
                                <img src="img/graph.png" class="graph">
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
                        <div class="level-right savings-color">
                            <a @click="openModalCard()">
                                <img src="img/graph.png" class="graph">
                            </a>
                            <a @click="openModalCard()">
                                <img src="img/add.png" class="graph">
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
                                <img src="img/transactions.png" alt="User Image" class="img-savings">
                            </figure>
                            <h4 class="title">Transactions</h4>
                        </div>
                        <div class="level-right">
                            <a>
                                <span class="icon is-small">
                                    <i class="fa fa-step-backward"></i>
                                </span>
                            </a>
                            FEB-2017
                        </div>
                        <p class="control">
                          <span class="select">
                            <select>
                              <option>Account 1</option>
                              <option>Account 2</option>
                            </select>
                          </span>
                        </p>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Amount</th>
                                <th></th>
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
                                <td>
                                    <a><img src="img/edit.png" alt="User Image"></a>
                                    <a><img src="img/delete.png" alt="User Image"></a>
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
                                <td>
                                    <a><img src="img/edit.png" alt="User Image"></a>
                                    <a><img src="img/delete.png" alt="User Image"></a>
                                </td>
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
                                <td>
                                    <a><img src="img/edit.png" alt="User Image"></a>
                                    <a><img src="img/delete.png" alt="User Image"></a>
                                </td>
                            </tr>
                            <tr class="expense-color">
                                <td>H&M shopping</td>
                                <td>
                                    <img src="img/cloths.png" alt="User Image">
                                    Shopping (Clothes & shoes)
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
                                <td>
                                    <a><img src="img/edit.png" alt="User Image"></a>
                                    <a><img src="img/delete.png" alt="User Image"></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="pagination_mfbf">
                            <nav class="pagination is-centered is-small" role="navigation" aria-label="pagination">
                                <a class="pagination-previous">Previous</a>
                                <a class="pagination-next">Next page</a>
                                <ul class="pagination-list">
                                    <li><a class="pagination-link" aria-label="Goto page 1">1</a></li>
                                    <li><span class="pagination-ellipsis">&hellip;</span></li>
                                    <li><a class="pagination-link" aria-label="Goto page 45">45</a></li>
                                    <li><a class="pagination-link is-current" aria-label="Page 46" aria-current="page">46</a></li>
                                    <li><a class="pagination-link" aria-label="Goto page 47">47</a></li>
                                    <li><span class="pagination-ellipsis">&hellip;</span></li>
                                    <li><a class="pagination-link" aria-label="Goto page 86">86</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="level-right savings-color">
                            <a @click="openModalCard()">
                                <img src="img/csv.png" class="graph">
                            </a>
                            <a @click="openModalCard()">
                                <img src="img/bank.png" class="graph">
                            </a>
                            <a @click="openModalCard()">
                                <img src="img/add.png" class="graph">
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
                                    <img src="img/settings.png" class="settings">
                                    <span>Settings</span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <img src="img/categories.png" class="graph">
                                    <span>Catagories</span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <img src="img/forecast.png" class="graph">
                                    <span>Forecast</span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <img src="img/reports.png" class="graph">
                                    <span>Reports</span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <img src="img/calender.png" class="graph">
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
                <timeline>
                    <timeline-item :label="true">
                      <span class="tag is-danger">
                        10 Feb. 2014
                      </span>
                    </timeline-item>
                    <timeline-item>
                        <span class="fa fa-envelope tag is-info"></span>

                        <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                            <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                            <div class="timeline-body">
                                Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                quora plaxo ideeli hulu weebly balihoo...
                            </div>
                            <div class="timeline-footer">
                                <a class="button is-primary is-small">Read more</a>
                                <a class="button is-danger is-small">Delete</a>
                            </div>
                        </div>
                    </timeline-item>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <timeline-item>
                        <span class="fa fa-user tag is-primary"></span>

                        <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                            <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request</h3>
                        </div>
                    </timeline-item>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <timeline-item>
                        <span class="fa fa-comments tag is-danger"></span>

                        <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                            <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                            <div class="timeline-body">
                                Take me to your leader!
                                Switzerland is small and neutral!
                                We are more like Germany, ambitious and misunderstood!
                            </div>
                            <div class="timeline-footer">
                                <a class="button is-info is-small">View comment</a>
                            </div>
                        </div>
                    </timeline-item>
                    <!-- END timeline item -->
                    <!-- timeline time label -->
                    <timeline-item :label="true">
                  <span class="tag is-primary">
                    3 Jan. 2014
                  </span>
                    </timeline-item>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <timeline-item>
                        <span class="fa fa-camera  tag is-danger"></span>

                        <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                            <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                            <div class="timeline-body">
                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                            </div>
                        </div>
                    </timeline-item>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <timeline-item>
                        <span class="fa fa-video-camera tag is-success"></span>

                        <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i> 5 days ago</span>

                            <h3 class="timeline-header"><a href="#">Mr. Doe</a> shared a video</h3>

                            <div class="timeline-body">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tMWkeBIohBs" frameborder="0" allowfullscreen=""></iframe>
                                </div>
                            </div>
                            <div class="timeline-footer">
                                <a href="#" class="button is-success is-small">See comments</a>
                            </div>
                        </div>
                    </timeline-item>
                    <!-- END timeline item -->
                    <timeline-item>
                        <span class="fa fa-clock-o tag is-white"></span>
                    </timeline-item>
                </timeline>
            </article>
        </div>
    </div>
</template>

<script>
  import Vue from 'vue'
  import CardModal from './modals/CardModal'
  import Datepicker from 'vue-bulma-datepicker'
  import { Timeline, TimelineItem } from '../components/timeline'

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
      Datepicker,
      Timeline,
      TimelineItem
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
      },

      urlBuilder (page) {
        return { query: { ...this.$route.query, page } } // Changing page in location query
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

    .time{
        font-size: 14px;
        font-weight: bold;
    }

    .pagination_mfbf {
        font-size: 10px;
        margin-top: -37px;
        margin-bottom: 20px;
    }

    .pagination-list, .timeline {
        list-style-type: none !important;
    }

</style>
