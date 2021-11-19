<template>
    <div>
        <h2 class="text-center">Lista de Usuarios</h2>
 
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <!-- <th>Actions</th> -->
            </tr>
            </thead>
            <tbody>
            <tr v-for="profile in profiles" :key="profile.Id">
                <td>{{ profile.id }}</td>
                <td>{{ profile.user.First_name }}</td>
                <td>{{ profile.Last_name }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: profile.id }}" class="btn btn-success">Edit</router-link>
                        <button class="btn btn-danger" @click="deleteProfile(profile.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                profiles: []
            }
        },
        created() {
            const headers = { Authorization: `Bearer ${localStorage.token}` };
            this.axios
                .get('http://amoba.test/api/profiles/',{ headers } )
                .then(response => {
                    this.profiles = response.data;
                });
        },
        methods: {
            deleteProduct(id) { 
                this.axios
                    .delete('http://amoba.test//api/profiles/${id}')
                    .then(response => {
                        let i = this.profiles.map(data => data.id).indexOf(id);
                        this.profiles.splice(i, 1)
                    });
            }
        }
    }
</script>