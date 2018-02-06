<template>
    <form action="">
        <div class="modal-card">
            <header class="modal-card-head is-small">
                <img src="/img/income_new.png" alt="User Image">
                <label class="label">Insert income</label>
            </header>
            <section class="modal-card-body">
                <div class="columns">
                    <div class="column">
                        <b-field label="Income categories">
                            <div class="control">
                                <autocomplete
                                    placeholder = "Search for income"
                                    groupName = "income">
                                </autocomplete>
                            </div>
                        </b-field>
                    </div>
                    <div class="column">
                        <b-field label="Income collected month">
                            <div class="control">
                                Datepicker
                            </div>
                        </b-field>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <b-field label="Describe your income">
                            <div class="control">
                                Textarea
                            </div>
                        </b-field>
                    </div>
                    <div class="column">
                        <b-field label="Upload your salary receipt">
                            File Input
                        </b-field>
                        <div class="columns">
                            <div class="column">
                                <b-field label="Occurrence">
                                    <div class="is-small">
                                        Switch
                                    </div>
                                </b-field>
                            </div>
                            <div class="column">
                                <b-field label="Intervels">
                                    <div class="field">
                                        <div class="control">
                                            Dropdown
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
                                vue-autonumeric
                            </div>
                        </b-field>
                    </div>
                    <div class="column">
                        <b-field label="Amount after SKAT">
                            <div class="control has-icons-left">
                                vue-autonumeric
                            </div>
                        </b-field>
                    </div>
                </div>
            </section>
            <footer class="modal-card-foot">
                <div class="field is-grouped is-pulled-right">
                    <a class="button is-danger is-small" @click="$parent.close()">
                        <span class="icon is-small">
                          <icon class="fa fa-close"></icon>
                        </span>
                        <span>Close</span>
                    </a>
                    <a class="button is-success is-small">
                        <span class="icon is-small">
                          <icon class="fa fa-save"></icon>
                        </span>
                        <span>Save</span>
                    </a>
                </div>
            </footer>
        </div>
    </form>
</template>

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
    .label {
        padding: 5px 0px 0px 5px;
    }
</style>
