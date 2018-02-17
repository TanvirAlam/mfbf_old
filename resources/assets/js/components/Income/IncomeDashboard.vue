<template>
    <article class="tile is-child box">
        <div class="columns">
            <div class="column is-narrow">
                <div class="level-left">
                    <img class="income-color" src="/img/income.png" alt="User Image">
                    <label class="label level-left">Income</label>
                </div>
            </div>
            <div class="column is-narrow">
                <div class="level-right" style="width: 125px;">
                    <div class="control has-icons-left has-icons-right">
                        <datepicker
                                input-class="input"
                                :minimumView="'month'"
                                :placeholder="'Month'"
                                :format="customFormatter"
                                @selected="showIncomeAmount">
                        </datepicker>
                        <span class="icon is-left">
                            <img class="income-color" src="/img/calendar.png" alt="User Image">
                        </span>
                    </div>
                    <!--<a class="button is-small">
                        <span class="icon is-small">
                           <icon class="fa fa-arrow-right"></icon>
                        </span>
                    </a>-->
                </div>
            </div>
        </div>
        <div class="income-amount income income-color">

            <!--{{ formatAmount(incomeAmount) }}-->

            <div class="iCountUp">
                <span class="icon">
                <img class="income-color" src="/img/money.png" alt="User Image">
            </span>
                <ICountUp
                        :startVal="startVal"
                        :endVal="endVal"
                        :decimals="decimals"
                        :duration="duration"
                        :options="options"
                        @ready="onReady"
                />
            </div>
        </div>
        <hr/>
        <div class="is-pulled-right">
            <a class="button is-success is-small" @click="isViewIncomeModalActive = true">
                <span class="icon is-small">
                    <icon class="fa fa-th-list"></icon>
                </span>
                <span>View</span>
            </a>
            <a class="button is-success is-small" @click="isInsertIncomeModalActive = true">
                <span class="icon is-">
                    <icon class="fa fa-plus"></icon>
                </span>
                <span>Add</span>
            </a>
        </div>
        <b-modal :active.sync="isInsertIncomeModalActive" :width="640" scroll="keep">
            <IncomeAddFormModal></IncomeAddFormModal>
        </b-modal>
        <b-modal :active.sync="isViewIncomeModalActive" :width="640" scroll="keep">
            <IncomeListModal></IncomeListModal>
        </b-modal>
    </article>
</template>
<script>
    import IncomeAddFormModal from './IncomeAddFormModal'
    import IncomeListModal from './IncomeListModal'
    import Datepicker from 'vuejs-datepicker'
    import moment from 'moment'
    import ICountUp from 'vue-countup-v2'

    export default {
      components: {
        IncomeAddFormModal,
        IncomeListModal,
        Datepicker,
        ICountUp
      },
      data() {
        return {
          isInsertIncomeModalActive: false,
          isViewIncomeModalActive: false,
          startVal: 0,
          endVal: 150000000,
          decimals: 0,
          duration: 2.5,
          options: {
            useEasing: true,
            useGrouping: true,
            separator: '.',
            decimal: ',',
            suffix: '/-DKK'
          }
        }
      },
      methods: {
        formatAmount(value) {
          let val = (value/1).toFixed(2).replace('.', ',')
          return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")
        },
        customFormatter(date) {
          return moment(date).format('MMM YY')
        },
        onReady(instance, CountUp) {
          //const that = this;
          instance.update(this.endVal + 100);
        },
        showIncomeAmount() {
          this.endVal = 800000
        }
      }
    }
</script>
<style>
    .label {
        padding: 5px 0px 0px 5px;
        -webkit-filter: opacity(.5) drop-shadow(0 0 0 green);
    }
    .income {
        font-size: x-large;
    }
    .income-color {
        -webkit-filter: opacity(.5) drop-shadow(0 0 0 green);
    }
    .columns:not(:last-child) {
         margin-bottom: 0;
    }
    .input {
        border: 1px solid transparent;
        border-radius: 5px;
        box-shadow: none;
        font-size: 1rem;
        height: 2.25em;
        font-weight: bold;
        text-align: left;
        width: 100%;
    }
</style>
