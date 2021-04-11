<template>
  <div>
    <div class="p-6 sm:px-20 bg-white border-b border-gray-200 text-center">
      <div class="text-white bg-black rounded-full flex justify-center pt-8 sm:pt-0 text-5xl select-none ml-60 mr-60">
        💲 econom 💲
      </div>
      <div class="max-w-md mx-auto my-10 bg-white p-5 rounded-md shadow-sm">
        <div class="text-center">
          <h1 class="my-3 text-3xl font-semibold text-gray-700 dark:text-gray-200">
            Create New Account Pages
          </h1>
        </div>
        <div class="m-7">
          <form
            id="form"
            action="/accounts/create_account"
            method="POST"
            @submit.prevent="createAccount"
          >
            <input-field
              :id="'accountName'"
              :label="'Name'"
              :value="form.formaccountName"
              :input-name="'accountName'"
              @update-value="updateValue"
            />
            <input-field
              :label="'Initial amount'"
              :type="'number'"
              :value="form.initialAmount"
              @update-value="updateValue"
            />
            <dropdown
              :id="'accountType'"
              :label="'Type'"
              :name="'accountType'"
              :options="accountTypes"
              @update-value="updateValue"
            />
            <dropdown
              :id="'currency'"
              :label="'Currency'"
              :name="'currency'"
              :options="currencies"
              @update-value="updateValue"
            />
            <button-snippet
              :button-text="'Create account'"
            />
            <p
              id="result"
              class="text-base text-center text-gray-400"
            />
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Button from '@/Snippets/Forms/Button'
import Dropdown from '@/Snippets/Forms/Dropdown'
import Input from '@/Snippets/Forms/Input'
import axios from 'axios'
import sprint from 'sprint'

export default {
  name: 'CreateAccount',
  components: {
    'button-snippet': Button,
    dropdown: Dropdown,
    'input-field': Input
  },
  data () {
    return {
      form: {
        accountName: '',
        initialAmount: 0,
        accountType: null,
        currency: null
      },
      accountTypes: [],
      currencies: []
    }
  },
  mounted () {
    this.getData()
  },
  methods: {
    createAccount: function () {
      console.log('createAccount')
      this.$inertia.post('/accounts/create_account', this.form)
    },
    getData: function () {
      axios.get('accounts/create_form_data')
        .then((res) => {
          this.setData(res.data)
        })
        .catch(function (error) {
          console.error(error)
        })
    },
    updateValue: function (name, value) {
      this.form[name] = value
    },
    setData: function (data) {
      this.currencies = data?.currencies.map(elem => {
        return {
          id: elem.id,
          name: sprint('%s (%s)', elem.name, elem.short_name)
        }
      })
      this.accountTypes = data.accountTypes
        ? data.accountTypes.map(elem => {
          return {
            id: elem.id,
            name: elem.name
          }
        })
        : []
    }
  }
}
</script>
