<template>
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6" v-if="churches.length > 0 && initialUsers.length > 0">
            <h3>Create Group</h3>
            <form>
                <div class="form-group">
                    <input class="form-control" type="text" v-model="name" placeholder="Group Name">
                </div>
                <div class="form-group">
                    <select v-model="church_id" class="form-control" id="church">
                        <option v-for="church in churches" :value="church.id" :key="church.id">
                            {{ church.name  }}
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <select v-model="users" class="form-control" multiple id="friends">
                        <option v-for="user in initialUsers" :value="user.id" :key="user.id">
                            {{ user.first_name +' '+user.last_name + '( '+ user.username +' )' }}
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <textarea class="form-control" type="text" v-model="description" placeholder="Group Description"></textarea>
                </div>
                <button type="submit" @click.prevent="createGroup" class="btn btn-primary">Create Group</button>
            </form>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6" v-if="groups.length > 0 && initialUsers.length > 0">
            <h3>Add Users To Group</h3>
            <form>
                <div class="form-group">
                    <select v-model="group_id" class="form-control" id="group_id">
                        <option v-for="group in groups" :value="group.id" :key="group.id">
                            {{ group.name  }}
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <select v-model="users" class="form-control" multiple id="friends">
                        <option v-for="user in initialUsers" :value="user.id" :key="user.id">
                            {{ user.first_name +' '+user.last_name + '( '+ user.username +' )' }}
                        </option>
                    </select>
                </div>
                <button type="submit" @click.prevent="addGroupUsers" class="btn btn-primary">Add User</button>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['initialUsers','churches','groups'],

        data() {
            return {
                name: '',
                users: [],
                church_id: '',
                group_id: '',
                description:''
            }
        },

        methods: {
            createGroup() {
                axios.post('/groupchats/store', {name: this.name, description: this.description, church_id: this.church_id, users: this.users})
                .then((response) => {
                    if(response.data.success){
                        this.name = '';
                        this.users = [];
                        Bus.$emit('groupCreated', response.data.model);
                        alert(response.data.msg)
                    }else {
                        alert(response.data.msg)
                    }
                });
            },
            addGroupUsers() {
                axios.post('/groupchats/add/user', {group_id: this.group_id, users: this.users})
                .then((response) => {
                    if(response.data.success){
                        this.group_id = '';
                        this.users = [];
                        Bus.$emit('groupCreated', response.data.model);
                        alert(response.data.msg)
                    }else {
                        alert(response.data.msg)
                    }
                });
            }
        }
    }
</script>
