<template>
  <app-layout>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <welcome v-if="showWelcome" />
          <create-account v-if="createAccount" />
          <accounts-list
            v-else
            :accounts="accounts"
          />
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout'
import AccountsList from '@/Pages/Accounts/AccountsList'
import CreateAccount from '@/Pages/Accounts/CreateAccount'
import Welcome from '@/Pages/Accounts/Welcome'

export default {
  name: 'Accounts',
  components: {
    'accounts-list': AccountsList,
    'app-layout': AppLayout,
    'create-account': CreateAccount,
    welcome: Welcome
  },
  props: {
    accounts: {
      type: Array,
      required: true,
      default: () => {
        return []
      }
    }
  },
  data () {
    return {
      createAccount: false
    }
  },
  computed: {
    showWelcome: function () {
      return !(this?.accounts.length > 0) && !this.createAccount
    }
  },
  beforeUnmount () {
    this.emitter.off('showCreateAccount', this.showCreateAccount)
  },
  created () {
    this.emitter.on('showCreateAccount', this.showCreateAccount)
  },
  methods: {
    showCreateAccount: function () {
      this.createAccount = true
    }
  }
}
</script>
