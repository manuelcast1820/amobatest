<template>
    <div>
        <div class="container">
            <div
                style="
                    position: fixed;
                    z-index: 1000;
                    width: 100%;
                    left: 0px;
                    top: 0px;
                    background: #333;
                    opacity: 0.5;
                    height: 2000px;
                "
                v-show="modalVisibile"
            ></div>
            <div
                style="
                    position: fixed;
                    z-index: 1000;
                    width: 50%;
                    left: 25%;
                    top: 0px;
                "
                v-show="modalVisibile"
            >
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button
                                @click="showModalWindow()"
                                type="button"
                                class="close"
                                data-dismiss="modal"
                            >
                                <span>×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div style="float: left; width: 100%">
                                <div style="float: left; margin-top: 15px">
                                    Cargar Imagen
                                </div>
                                <div class="dropbox">
                                    <i class="fas fa-upload"></i>

                                    <input
                                        type="file"
                                        accept="image/*"
                                        class="input-file"
                                        @change="
                                            updatePhoto(
                                                $event.target.name,
                                                $event.target.files
                                            )
                                        "
                                    />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input
                                    type="text"
                                    v-model="name"
                                    class="form-control"
                                    id="name"
                                    name="name"
                                />
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="email"
                                    v-model="email"
                                    id="email"
                                />
                            </div>
                            <input
                                type="hidden"
                                name="id"
                                v-model="id"
                                id="id"
                            />
                            <input
                                type="hidden"
                                name="User_id"
                                v-model="User_id"
                                id="User_id"
                            />
                            <div class="form-group">
                                <label for="direccion">Descripción:</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="Description"
                                    v-model="Description"
                                    id="Description"
                                />
                            </div>
                        </div>
                        <div
                            style="align-self: center; border: 0px"
                            class="modal-footer"
                        >
                            <input
                                v-if="isNew"
                                style="
                                    background: #f89110;
                                    color: #fff;
                                    border: 0px;
                                "
                                type="submit"
                                @click="saveProfile()"
                                class="btn btn-primary"
                                value="Guardar"
                            />

                            <input
                                v-else
                                style="
                                    background: #f89110;
                                    color: #fff;
                                    border: 0px;
                                "
                                type="submit"
                                @click="updateProfile()"
                                class="btn btn-primary"
                                value="Actualizar"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Date picker -->
        <div style="float: left; width: 100%">
            <div style="float: left">
                <datepicker
                    wrapper-class="inline"
                    placeholder="Desde"
                    format="dd/MM/yyyy"
                    :clear-button="true"
                    v-model="fromdate"
                    :language="es"
                    @closed=""
                ></datepicker>
            </div>
            <div style="float: left; margin-left: 5%">
                <datepicker
                    wrapper-class="inline"
                    placeholder="Hasta"
                    format="dd/MM/yyyy"
                    :clear-button="true"
                    v-model="todate"
                    @closed=""
                    :language="es"
                ></datepicker>
            </div>
            <div style="float: left; margin-left: 5%">
                <button
                    style="
                        background: #f89110;
                        color: #fff;
                        border: 0px;
                        border-radius: 5px;
                        padding: 5px 20px;
                        font-size: 15px;
                    "
                    @click="filterbyDate()"
                >
                    Filtrar
                </button>
            </div>
        </div>

        <div style="floa: left; width: 100%">
            <div style="float: left; margin-top: 15px; width: 25%">
                <input
                    style="border-radius: 8px"
                    type="text"
                    class="form-control"
                    name="search"
                    v-model="search"
                    id="search"
                    placeholder="Buscar Persona"
                    @keyup="searchProfile()"
                />
            </div>
            <div style="float: right" class="container-button">
                <button
                    style="
                        background: #f89110;
                        color: #fff;
                        border: 0px;
                        padding: 10px 15px;
                        border-radius: 10px;
                        font-size: 17px;
                    "
                    @click="showModalWindow()"
                >
                    <i
                        style="font-size: 20px; position: relative; top: 3px"
                        class="fas fa-plus-circle"
                    ></i>
                    Nuevo Contacto
                </button>
            </div>
        </div>
        <div style="float: left; width: 100%; margin-top: 20px">
            <table style="background: #d3d3d3" class="table">
                <tbody>
                    <tr v-for="profile in profiles.data" :key="profile.Id">
                        <td style="width: 25%">
                            <div style="float: left">
                                <img
                                    style="
                                        height: 120px;
                                        width: 120px;
                                        border-radius: 50%;
                                    "
                                    v-bind:src="
                                        '/profile_photo/' + profile.Ima_profile
                                    "
                                />
                            </div>
                            <div
                                style="
                                    float: left;
                                    margin-left: 10px;
                                    margin-top: 35px;
                                "
                            >
                                <strong>{{ profile.First_name }}</strong>
                                <p>
                                    <a
                                        style="
                                            color: #333;
                                            font-weight: 500;
                                            text-decoration: none;
                                        "
                                        href="#"
                                        @click="deleteProfile(profile.id)"
                                        >Eliminar</a
                                    >
                                </p>
                            </div>
                        </td>
                        <td style="width: 70%">{{ profile.Description }}</td>
                        <td
                            style="
                                width: 5%;
                                text-align: center;
                                vertical-align: middle;
                            "
                        >
                            <a
                                href="javascript:"
                                @click="editProfile(profile.id)"
                                ><i
                                    style="font-size: 20px; color: #444"
                                    class="fas fa-pencil-alt"
                                ></i
                            ></a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div style="float: right">
                <pagination
                    :data="profiles"
                    @pagination-change-page="getResults"
                >
                    <span slot="prev-nav">&lt; Anterior</span>
                    <span slot="next-nav">Siguiente página &gt;</span>
                </pagination>
            </div>
        </div>
    </div>
</template>

<script>
import Datepicker from "vuejs-datepicker";
import { en, es } from "vuejs-datepicker/dist/locale";

export default {
    components: {
        Datepicker,
    },
    data() {
        return {
            profiles: {},
            modalVisibile: false,
            email: "",
            name: "",
            Description: "",
            photo: {},
            search: "",
            id: "",
            isNew: true,
            fromdate: "",
            todate: "",
            en: en,
            es: es,
            User_id : ""
        };
    },
    created() {
        this.getResults();
    },
    methods: {
        deleteProfile(id) {
            const headers = { Authorization: `Bearer ${localStorage.token}` };
            console.log("delete " + id);
            this.$swal({
                title: "¿Estas seguro que deseas eliminar?",
                text: "No podras revertir esta acción",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Si",
            }).then((result) => {
                if (result.value) {
                    this.axios
                        .delete("api/profiles/" + id, {
                            headers: headers,
                        })
                        .then((response) => {
                            this.profiles = response.data;
                            this.$notify({
                                group: "warn",
                                title: "Importante",
                                text: "Registro Eliminado",
                                duration: 4000,
                            });
                        });
                }
            });
        },
        showModalWindow: function () {
            this.modalVisibile = !this.modalVisibile;
            this.isNew = true;
            this.id = "";
        },
        updatePhoto: function (name, files) {
            if (!files.length) return;
            this.photo = {
                name: files[0].name,
                data: files[0],
            };
        },
        saveProfile: function () {
            let formData = new FormData();
            formData.append("email", this.email);
            formData.append("name", this.name);
            formData.append("First_name", this.name);
            formData.append("Description", this.Description);
            if (this.photo.name !== undefined) {
                formData.append("photo", this.photo.data, this.photo.name);
            }

            const headers = { Authorization: `Bearer ${localStorage.token}` };
            this.axios
                .post("api/profiles", formData, {
                    headers: headers,
                })
                .then((response) => {
                    if (response.data.success) {
                        this.profiles = response.data.profiles;
                        this.$notify({
                            group: "foo",
                            title: "Importante",
                            text: "Registro Completado",
                            duration: 4000,
                        });
                        this.name = "";
                        this.email = "";
                        this.Description = "";
                        this.isNew = true;
                        this.id = "";
                        this.modalVisibile = !this.modalVisibile;
                    }
                })
                .catch((error) => {
                    let errors = error.response.data;
                    let messages = "";
                    errors.errors.forEach(function (message, indice, array) {
                        if (messages == "") {
                            messages = message;
                        } else {
                            messages = messages + ", " + message;
                        }
                    });
                    this.$notify({
                        group: "warn",
                        title: "Importante error",
                        text: messages,
                        duration: 4000,
                    });
                });
        },
        searchProfile: function () {
            const headers = { Authorization: `Bearer ${localStorage.token}` };
            const data = { search: this.search };
            this.axios
                .post("api/profiles/filter", data, {
                    headers: headers,
                })
                .then((response) => {
                    this.profiles = response.data;
                });
        },
        getResults(page) {
            if (typeof page === "undefined") {
                page = 1;
            }
            const headers = { Authorization: `Bearer ${localStorage.token}` };
            this.axios
                .get("api/profiles/?page=" + page, {
                    headers,
                })
                .then((response) => {
                    console.log("get result response");
                    this.profiles = response.data;
                });
        },
        editProfile(id) {
            const headers = { Authorization: `Bearer ${localStorage.token}` };
            this.axios
                .get("api/profiles/" + id, {
                    headers,
                })
                .then((response) => {
                    let profile = response.data;
                    this.modalVisibile = !this.modalVisibile;
                    this.name = profile.First_name;
                    this.email = profile.user.email;
                    this.Description = profile.Description;
                    this.isNew = false;
                    this.User_id = profile.User_id;
                    this.id = profile.id;
                });
        },
        updateProfile() {
            const headers = { Authorization: `Bearer ${localStorage.token}` };
            let formData = new FormData();
            formData.append("email", this.email);
            formData.append("name", this.name);
            formData.append("First_name", this.name);
            formData.append("Description", this.Description);
            formData.append("id", this.id);
            formData.append("User_id", this.User_id);
            if (this.photo.name !== undefined) {
                formData.append("photo", this.photo.data, this.photo.name);
            }
            this.axios
                .post("api/update-profile", formData, {
                    headers: headers,
                })
                .then((response) => {
                    this.modalVisibile = !this.modalVisibile;
                    this.name = "";
                    this.email = "";
                    this.Description = "";
                    this.isNew = true;
                    this.id = "";
                    this.User_id = "";
                    this.profiles = response.data;
                    this.$notify({
                        group: "info",
                        title: "Importante",
                        text: "Registro Actualizado",
                        duration: 4000,
                    });
                })
                .catch((error) => {
                    let errors = error.response.data;
                    let messages = "";
                    errors.errors.forEach(function (message, indice, array) {
                        if (messages == "") {
                            messages = message;
                        } else {
                            messages = messages + ", " + message;
                        }
                    });
                    this.$notify({
                        group: "warn",
                        title: "Importante error",
                        text: messages,
                        duration: 4000,
                    });
                });
        },
        filterbyDate: function () {
            const headers = { Authorization: `Bearer ${localStorage.token}` };
            const data = { fromdate: this.fromdate, todate: this.todate };
            this.axios
                .post("api/filter-date", data, {
                    headers: headers,
                })
                .then((response) => {
                    this.profiles = response.data;
                });
        },
    },
};
</script>

<style lang="scss">
.dropbox {
    outline: 2px dashed grey;
    outline-offset: 0px;
    color: dimgray;
    padding: 10px 10px;
    min-height: 50px;
    position: relative;
    cursor: pointer;
    width: 50px;
    height: 50px;
    float: left;
    margin-left: 5%;
}

.input-file {
    opacity: 0;
    width: 50px;
    height: 50px;
    position: absolute;
    cursor: pointer;
    left: 0px;
    top: 0px;
}

.dropbox:hover {
    background: #f89110;
    opacity: 0.7;
}
.dropbox i {
    position: relative;
    left: 20%;
    font-size: 20px;
    top: 5px;
}
.vue-notification-group.success {
    background: green;
    color: #fff;
    font-size: 20px;
}
.vue-notification-group.success .vue-notification-wrapper {
    background: green;
    color: #fff;
    font-size: 20px;
}
.vue-notification-group.success .vue-notification {
    background: green;
    color: #fff;
    border: 0px;
    font-size: 20px;
}
.vue-notification-group.warning {
    background: red;
    color: #fff;
}
.vue-notification-group.warning .vue-notification-wrapper {
    background: red;
    color: #fff;
    font-size: 20px;
}
.vue-notification-group.warning .vue-notification {
    background: red;
    color: #fff;
    border: 0px;
    font-size: 20px;
}
.vue-notification-group.info {
    background: orange;
    color: #fff;
}
.vue-notification-group.info .vue-notification-wrapper {
    background: orange;
    color: #fff;
    font-size: 20px;
}
.vue-notification-group.info .vue-notification {
    background: orange;
    color: #fff;
    border: 0px;
    font-size: 20px;
}
table {
    border-collapse: separate;
    border-spacing: 0 20px;
    background: #333;
}
.table th,
.table td {
    border: 0px;
    background: #fff;
}
.vdp-datepicker input {
    height: 35px;
    padding: 5px;
    border-radius: 5px;
    border: 1px solid #ededed;
}
body {
    background: #d3d3d3;
}
tr td:first-child {
    border-top-left-radius: 10px;
}
tr td:last-child {
    border-top-right-radius: 10px;
}
tr td:first-child {
    border-bottom-left-radius: 10px;
}
tr td:last-child {
    border-bottom-right-radius: 10px;
}
</style>
