<template>
    <div>
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200 text-center">
            <div class="text-white bg-black rounded-full flex justify-center pt-8 sm:pt-0 text-5xl select-none ml-60 mr-60">
                💲 econom 💲
            </div>
            <div class="mt-8 text-2xl">
                Welcome to Econom!!!
            </div>

            <div class="mt-6 text-gray-500">
                Econom is here to help you manage your money!
            </div>
            <div class="mt-6 text-gray-500">
                It looks like you don't have an account yet...
            </div>
            <button type="submit">Create Account</button>
        </div>
    </div>
</template>

<script>
    import JetApplicationLogo from '@/Jetstream/ApplicationLogo'

    export default {
        components: {
            JetApplicationLogo,
        },
    }
</script>
