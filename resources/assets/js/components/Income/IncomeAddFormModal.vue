<template>
    <form action="">
        <div class="modal-card">
            <header class="modal-card-head is-small">
                <p class="modal-card-title">Insert income</p>
            </header>
            <section class="modal-card-body">
                <div class="columns">
                    <div class="column">
                        <b-field label="Type">
                            <div class="control">
                                <autocomplete></autocomplete>
                            </div>
                        </b-field>
                    </div>
                    <div class="column">
                        <b-field label="Issue date">
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
                        <b-field label="Tags">
                            <div class="control has-icons-left has-icons-right">
                                <div>
                                    <multiselect
                                            v-model="value"
                                            :options="options"
                                            :multiple="true"
                                            track-by="library"
                                            :custom-label="customLabel"
                                    >
                                    </multiselect>
                                </div>
                            </div>
                        </b-field>
                        <div class="columns">
                            <div class="column">
                                <b-field label="Status">
                                    <div>
                                        <vb-switch type="success" size="large" v-model="value" @change="change"/>
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
            <footer class="modal-card-foot is-pulled-left">
                <div class="field is-grouped">
                    <div class="control">
                        <button class="button" type="button" @click="$parent.close()">Close</button>
                    </div>
                    <div class="control">
                        <button class="button is-text">Save</button>
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
        text: '',
        selected: null,
        options: ['list', 'of', 'options'],
        value: { language: 'JavaScript', library: 'Vue-Multiselect' },
        options: [
          {	language: 'JavaScript', library: 'Main salary' },
          { language: 'JavaScript', library: 'Temp loan' },
          { language: 'JavaScript', library: 'Random' }
        ]
      }
    },
    methods: {
      change (val) {
        this.text = val ? 'Repeat' : 'Random'
      },
      customLabel (option) {
        return `${option.library} - ${option.language}`
      },
      getData(obj){
        console.log(obj);
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
</style>
