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
            action=""
            method="POST"
          >
            <input-field />
            <input-field />
            <dropdown />
            <div class="mb-6">
              <button
                type="submit"
                class="w-full px-3 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none"
              >
                Create Account
              </button>
            </div>
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
import Input from '@/Snippets/Forms/Input'
import Dropdown from '@/Snippets/Forms/Dropdown'

export default {
  name: 'CreateAccount',
  components: {
    'input-field': Input,
    dropdown: Dropdown
  }
}
</script>
