<template>
    <div>
        <group-chat v-for="group in groups" :group="group" :key="group.id" :user="user" :members="initialGroupMembers" :administrator="isAdmin"></group-chat>
    </div>
</template>

<script>
    export default {
        props: ['initialGroups', 'user','initialGroupMembers','isAdmin'],

        data() {
            return {
                groups: []
            }
        },

        mounted() {
            this.groups = this.initialGroups;

            Bus.$on('groupCreated', (group) => {
                this.groups.push(group);
            });

            this.listenForNewGroups();
        },

        methods: {
            listenForNewGroups() {
                Echo.private('users.' + this.user.id)
                    .listen('GroupCreated', (e) => {
                        this.groups.push(e.group);
                    });
            }
        }
    }
</script>
