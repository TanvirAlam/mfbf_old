<template>
    <article class="tile is-child box">
        <div class="level-left">
            <img src="img/income_new.png" alt="User Image">
            <label class="label">Income</label>
        </div>
        <div class="amount income income-color">
            <span class="icon is-medium">
                <icon class="fa fa-plus"></icon>
            </span>
            30,000
        </div>
        <div class="is-pulled-right">
            <a class="button is-success is-small" @click="isModalActive = true">
                <span class="icon is-small">
                    <icon class="fa fa-th-list"></icon>
                </span>
                <span>View</span>
            </a>
            <a class="button is-success is-small" @click="isModalActive = true">
                <span class="icon is-">
                    <icon class="fa fa-plus"></icon>
                </span>
                <span>Add</span>
            </a>
        </div>
        <b-modal :active.sync="isModalActive" :width="640" scroll="keep">
            <IncomeAddFormModal></IncomeAddFormModal>
        </b-modal>
    </article>
</template>
<script>
    import IncomeAddFormModal from './IncomeAddFormModal'

    export default {
      components: {
        IncomeAddFormModal
      },
      data() {
        return {
          isModalActive: false
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
        font-size: xx-large;
    }
    .income-color {
        -webkit-filter: opacity(.5) drop-shadow(0 0 0 green);
    }
    .amount::after {
        content:"DKK";
    }
</style>