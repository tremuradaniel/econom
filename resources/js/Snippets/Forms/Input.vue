<template>
  <div class="mb-6">
    <label
      :if="label"
      for="name"
      class="block mb-2 text-sm text-gray-600 dark:text-gray-400"
    >{{ label }}</label>
    <input
      :id="id"
      v-model="valueModel"
      :type="type"
      :name="inputName"
      required=""
      :placeholder="placeholder"
      :class="inputClass"
      @input="changeValue($event, valueModel)"
    >
  </div>
</template>
<script>

export default {
  name: 'Input',
  props: {
    id: {
      type: String,
      default: ''
    },
    label: {
      type: String,
      default: ''
    },
    options: {
      type: Array,
      default: () => []
    },
    placeholder: {
      type: String,
      default: ''
    },
    inputName: {
      type: String,
      default: ''
    },
    type: {
      type: String,
      default: 'text'
    },
    value: {
      type: [String, Number],
      default: ''
    }
  },
  data () {
    return {
      inputClass: [`w-full px-3 py-2 placeholder-gray-300 border
        border-gray-300 rounded-md focus:outline-none focus:ring 
        focus:ring-indigo-100 focus:border-indigo-300 
        dark:bg-gray-700 dark:text-white 
        dark:placeholder-gray-500 dark:border-gray-600 
        dark:focus:ring-gray-900 dark:focus:border-gray-500`],
      valueModel: this.value
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
