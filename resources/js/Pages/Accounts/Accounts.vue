<template>
    <app-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <welcome v-if="!userHasAccounts" />
                    <create-account v-else  />
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import CreateAccount from '@/Pages/Accounts/CreateAccount'
    import Welcome from '@/Pages/Accounts/Welcome'

    export default {
        name: 'Accounts',
        computed: {
            userHasAccounts: function () {
                return this?.accounts.length > 0
            }
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
        components: {
            'app-layout': AppLayout,
            'create-account': CreateAccount,
            'welcome': Welcome
        }
    }
</script>
