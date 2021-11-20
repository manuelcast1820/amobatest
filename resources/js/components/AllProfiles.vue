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
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="floa: left; width: 100%">
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
            <table style="background: #f8fafc" class="table">
                <tbody>
                    <tr v-for="profile in profiles" :key="profile.Id">
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
                            <div style="float: left;margin-left: 10px;margin-top: 35px;">
                               <strong>{{ profile.First_name }}</strong>
                            </div>
                        </td>
                        <td style="width: 75%;">{{ profile.Description }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            profiles: [],
            modalVisibile: false,
            email: "",
            name: "",
            Description: "",
            photo: {},
        };
    },
    created() {
        const headers = { Authorization: `Bearer ${localStorage.token}` };
        this.axios
            .get("http://amoba.test/api/profiles/", { headers })
            .then((response) => {
                this.profiles = response.data;
            });
    },
    methods: {
        deleteProduct(id) {
            this.axios
                .delete("http://amoba.test//api/profiles/${id}")
                .then((response) => {
                    let i = this.profiles.map((data) => data.id).indexOf(id);
                    this.profiles.splice(i, 1);
                });
        },
        showModalWindow: function () {
            this.modalVisibile = !this.modalVisibile;
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
                .post("http://amoba.test/api/profiles", formData, {
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
                        this.modalVisibile = !this.modalVisibile;
                    }
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
    left:0px;
    top:0px;
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
}
.vue-notification-group.success .vue-notification-wrapper {
    background: green;
    color: #fff;
}
.vue-notification-group.success .vue-notification {
    background: green;
    color: #fff;
    border: 0px;
}
table {
  border-collapse:separate; 
  border-spacing: 0 20px;
  background:#333;
}
.table th, .table td {
    border:0px;
    background:#FFF;
}
</style>
