<template>
  <div class="mb-6">
    <label
      v-if="label"
      for=""
      class="text-sm text-gray-600 dark:text-gray-400"
    >{{ label }}</label>
    <select
      :id="id"
      v-model="selectedOption"
      required=""
      :class="selectClass"
      :name="name"
      @change="changeValue($event, selectedOption)"
    >
      <option
        v-if="placeholder"
        value=""
      >
        {{ placeholder }}
      </option>
      <option
        v-for="(option, index) in options"
        :key="index"
        :value="option.id"
      >
        {{ option.name }}
      </option>
    </select>
  </div>
</template>
<script>

export default {
  name: 'Dropdown',
  props: {
    label: {
      type: String,
      default: ''
    },
    id: {
      type: String,
      default: ''
    },
    options: {
      type: Array,
      default: () => []
    },
    name: {
      type: String,
      default: ''
    },
    placeholder: {
      type: String,
      default: ''
    }
  },
  data () {
    return {
      selectClass: [`w-full px-3 py-2 placeholder-gray-300 border 
        border-gray-300 rounded-md focus:outline-none focus:ring
        focus:ring-indigo-100 focus:border-indigo-300
        dark:bg-gray-700 dark:text-white dark:placeholder-gray-500
        dark:border-gray-600 dark:focus:ring-gray-900 
        dark:focus:border-gray-500`],
      selectedOption: ''
    }
  },
  methods: {
    changeValue: function (event, value) {
      const name = event?.currentTarget?.name
      this.$emit('update-value', name, value)
    }
  }
}
</script>
