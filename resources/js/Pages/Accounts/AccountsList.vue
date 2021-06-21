<template>
  <div>
    <div class="p-6 sm:px-20 bg-white border-b border-gray-200 text-center">
      <h1>Accounts</h1>
      <table id="accounts">
        <tr>
          <th>Account</th>
          <th>Account Type</th>
          <th>Amount</th>
          <th>Currency</th>
          <th>Actions</th>
        </tr>
        <tr
          v-for="(account, key) in accounts"
          :key="key"
        >
          <td>{{ account.name }}</td>
          <td>{{ account.account_type.name }}</td>
          <td>{{ account.amount }}</td>
          <td>{{ account.currency.name }}</td>
          <td>
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
          </td>
        </tr>
      </table>
    </div>
  </div>
</template>

<script>

export default {
  name: 'AccountList',
  props: {
    accounts: {
      type: Array,
      required: true,
      default: () => {
        return []
      }
    }
  },
  created () {

  }

}

</script>

<style scoped>
  #accounts {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  #accounts td, #accounts th {
    border: 1px solid #ddd;
    padding: 8px;
  }

  #accounts tr:nth-child(even){background-color: #f2f2f2;}

  #accounts tr:hover {background-color: #ddd;}

  #accounts th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
  }
</style>
