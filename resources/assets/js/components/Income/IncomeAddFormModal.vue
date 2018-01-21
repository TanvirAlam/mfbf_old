<template>
    <form action="">
        <div class="modal-card">
            <header class="modal-card-head is-small">
                <img src="img/income_new.png" alt="User Image">
                <label class="label">Insert income</label>
            </header>
            <section class="modal-card-body">
                <div class="columns">
                    <div class="column">
                        <b-field label="Category">
                            <div class="control">
                                <autocomplete v-validate="'required'" placeholder="Search for income type"></autocomplete>
                            </div>
                        </b-field>
                    </div>
                    <div class="column">
                        <b-field label="Collected at">
                            <div class="control">
                                <div class="select">
                                    <datepicker :format="format"></datepicker>
                                </div>
                            </div>
                        </b-field>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <b-field label="Description">
                            <div class="control">
                                <textarea class="textarea" placeholder="Textarea"></textarea>
                            </div>
                        </b-field>
                    </div>
                    <div class="column">
                        <b-field label="Upload">
                        <div class="file has-name is-small">
                            <label class="file-label">
                                <input class="file-input" type="file" name="resume">
                                <span class="file-cta">
                                  <span class="file-icon">
                                    <i class="fa fa-upload"></i>
                                  </span>
                                  <span class="file-label">
                                    Choose a file…
                                  </span>
                                </span>
                                <span class="file-name">
                                  Salary sheet
                                </span>
                            </label>
                        </div>
                        </b-field>
                        <div class="columns">
                            <div class="column">
                                <b-field label="Occurrence">
                                    <div class="is-small">
                                        <vb-switch v-validate="'required'" type="success" size="large" v-model="value" @change="change"/>
                                        <i v-if="text = 'Repeat'" class="fa fa-random"></i>
                                        {{ text }}
                                    </div>
                                </b-field>
                            </div>
                            <div class="column">
                                <b-field label="Intervels">
                                    <div class="field">
                                        <div class="control">
                                            <div class="select is-primary">
                                                <select>
                                                    <option>Monthly</option>
                                                    <option>Daily</option>
                                                    <option>Weekly</option>
                                                    <option>Hourly</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </b-field>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <b-field label="Amount before SKAT">
                            <div class="control has-icons-left">
                                <vue-autonumeric
                                        v-model="defaultValue"
                                        :options="{
                                                 digitGroupSeparator: '.',
                                                 decimalCharacter: ',',
                                                 decimalCharacterAlternative: '.',
                                                 currencySymbol: '\u00a0DKK',
                                                 currencySymbolPlacement: 's',
                                                 roundingMethod: 'U',
                                                 minimumValue: '0'
                                             }"
                                ></vue-autonumeric>
                            </div>
                        </b-field>
                    </div>
                    <div class="column">
                        <b-field label="Amount after SKAT">
                            <div class="control has-icons-left">
                                <vue-autonumeric
                                        v-validate="'required'"
                                        v-model="defaultValue"
                                        :options="{
                                                 digitGroupSeparator: '.',
                                                 decimalCharacter: ',',
                                                 decimalCharacterAlternative: '.',
                                                 currencySymbol: '\u00a0DKK',
                                                 currencySymbolPlacement: 's',
                                                 roundingMethod: 'U',
                                                 minimumValue: '0'
                                             }"
                                ></vue-autonumeric>
                            </div>
                        </b-field>
                    </div>
                </div>
            </section>
            <footer class="modal-card-foot is-pulled-right">
                <div class="field is-grouped is-pulled-right">
                    <div class="control">
                        <a class="button is-light is-small" @click="$parent.close()">
                            <span class="icon is-small">
                                <icon class="fa fa-times"></icon>
                            </span>
                            <span>Close</span>
                        </a>
                    </div>
                    <div class="control">
                        <button :disabled="errors.any()" type="submit" class="button is-success is-small">
                            Submit
                        </button>
                    </div>
                </div>
            </footer>
        </div>
    </form>
</template>

<script>
  import BField from '../../../../../node_modules/buefy/src/components/field/Field.vue'
  import VueAutonumeric from '../../../../../node_modules/vue-autonumeric/src/components/VueAutonumeric.vue'
  import Datepicker from 'vuejs-datepicker'
  import VbSwitch from 'vue-bulma-switch'
  import Multiselect from 'vue-multiselect'
  import { Validator } from 'vee-validate';

  export default {
    components: {
      BField,
      Datepicker,
      VbSwitch,
      Multiselect,
      VueAutonumeric
    },
    props: ['url'],
    data() {
      return {
        isPublic: true,
        format: 'd MMMM yyyy',
        defaultValue: 0.00,
        value: true,
        text: 'Repeat',
        selected: null,
      }
    },
    methods: {
      change (val) {
        this.text = val ? 'Repeat' : 'Random'
      },
      getData(obj){
        console.log(obj);
      },
      customFormatter(date) {
        date: new Date(2016, 9,  16)
      },
      validateBeforeSubmit() {
        this.$validator.validateAll().then((result) => {
          if (result) {
            this.register()
          }
        })
      },
    },

    computed: {
      occurrence: function() {
        if (this.text == 'Repeat') {
          return 'fa-repeat'
        } else if (this.text == 'Random') {
          return 'fa-random'
        }
      },
      currentFirstOfTheMonth: function () {
        date: new Date(2016, 9,  16)
      }
    }
  }
</script>

<style>
    /*
    TODO import css vue2-autocomplete.css
     */
    .modal-card {
        width: auto;
    }
    input {
        padding: .50em .5em;
        font-size: 100%;
        border: 1px solid #ccc;
        width: 100%
    }
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
</style>
