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
                                <div class="select">
                                    <select>
                                        <option>Select dropdown</option>
                                        <option>With options</option>
                                    </select>
                                </div>
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
                        <b-field label="Status">
                            <div>
                                <p>
                                    <vb-switch type="success" size="large" v-model="value" @change="change"/>
                                </p>
                                <p>
                                    {{ text }}
                                </p>
                            </div>
                        </b-field>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <b-field label="Amount">
                            <div class="control">

                            </div>
                        </b-field>
                    </div>
                    <div class="column">

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
  import Datepicker from 'vuejs-datepicker'
  import VbSwitch from 'vue-bulma-switch'
  import Multiselect from 'vue-multiselect'

  export default {
    components: {
      BField,
      Datepicker,
      VbSwitch,
      Multiselect
    },
    props: ['email', 'password'],
    data() {
      return {
        isPublic: true,
        format: 'd MMMM yyyy',
        value: false,
        text: '',
        selected: null,
        options: ['list', 'of', 'options'],
        value: { language: 'JavaScript', library: 'Vue-Multiselect' },
        options: [
          {	language: 'JavaScript', library: 'Vue.js' },
          { language: 'JavaScript', library: 'Vue-Multiselect' },
          { language: 'JavaScript', library: 'Vuelidate' }
        ]
      }
    },
    methods: {
      change (val) {
        this.text = val ? 'PAID' : 'NOT PAID'
      },
      customLabel (option) {
        return `${option.library} - ${option.language}`
      }
    }
  }
</script>

<style>
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
