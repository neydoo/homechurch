<template>
    <div class="panel panel-default">
        <div class="panel-heading">Create Group</div>
        <div class="panel-body">
            <form>
                <div class="form-group">
                    <input class="form-control" type="text" v-model="name" placeholder="Group Name">
                </div>
                <div class="form-group">
                    <select v-model="church_id" multiple id="church">
                        <option v-for="church in churches" :value="church.id" :key="church.id">
                            {{ church.name  }}
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <select v-model="users" multiple id="friends">
                        <option v-for="user in initialUsers" :value="user.id" :key="user.id">
                            {{ user.first_name +' '+user.last_name + '( '+ user.username +' )' }}
                        </option>
                    </select>
                </div>
            </form>
        </div>
        <div class="panel-footer text-center">
            <button type="submit" @click.prevent="createGroup" class="btn btn-primary">Create Group</button>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['initialUsers','churches'],

        data() {
            return {
                name: '',
                users: [],
                church_id: '',
            }
        },

        methods: {
            createGroup() {
                axios.post('/groups', {name: this.name, users: this.users})
                .then((response) => {
                    this.name = '';
                    this.users = [];
                    Bus.$emit('groupCreated', response.data);
                });
            }
        }
    }
</script>
