<template>
  <div class="mb-6">
    <button
      type="submit"
      :class="selectClass"
    >
      {{ buttonText }}
    </button>
  </div>
</template>
<script>

export default {
  name: 'Button',
  props: {
    buttonText: {
      type: String,
      default: ''
    }
  },
  data () {
    return {
      selectClass: [`w-full px-3 py-4 text-white bg-indigo-500 rounded-md
       focus:bg-indigo-600 focus:outline-none`]
    }
  }
}
</script>
