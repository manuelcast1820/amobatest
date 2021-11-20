<template>
    <div class="container">
        <div class="text-center" style="margin: 20px 0px 20px 0px">
            <span class="text-secondary">AMOBA</span>
        </div>
        <notifications class="success" group="foo" position="bottom left" />
        <notifications class="warning" group="warn" position="bottom left" />
        <notifications class="info" group="info" position="bottom left" />

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <!-- for logged-in user-->
                <div class="navbar-nav" v-if="isLoggedIn">
                    <router-link to="/profiles" class="nav-item nav-link"
                        >Perfiles</router-link
                    >
                    <a
                        class="nav-item nav-link"
                        style="cursor: pointer"
                        @click="logout"
                        >Logout</a
                    >
                </div>
                <!-- for non-logged user-->
                <div class="navbar-nav" v-else>
                    <router-link to="/" class="nav-item nav-link"
                        >Home</router-link
                    >
                    <router-link to="/login" class="nav-item nav-link"
                        >login</router-link
                    >
                    <router-link to="/register" class="nav-item nav-link"
                        >Register
                    </router-link>
                </div>
            </div>
        </nav>
        <br />
        <router-view />
    </div>
</template>

<script>
export default {
    name: "App",
    data() {
    console.log(localStorage.token )
        if(localStorage.token == ""){
            return {
                isLoggedIn: false,
            };
        }else{
            return {
                isLoggedIn: true,
            };
        }
        
    },
    created() {
        if (window.Laravel.isLoggedin) {
            this.isLoggedIn = true;
        }
    },
    methods: {
        logout(e) {
            e.preventDefault();
            const headers = { 'Content-Type': 'application/json',
                Authorization: `Bearer ${localStorage.token}` 
            };
            console.log('salirrrrr')
            console.log(headers);
            this.axios
                .post("/api/logout",{},{
                    headers: headers
                })
                .then((response) => {
                    if (response.data.success) {
                        window.location.href = "/";
                        localStorage.token = "";
                    } else {
                        console.log(response);
                    }
                })
                .catch(function (error) {
                    console.error(error);
                });
        },
    },
};
</script>
