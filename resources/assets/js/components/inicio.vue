<template>
    <div class="col-lg-12">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Sueldo</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Cantidad solicitada</th>
                    <th scope="col">Facturas vencidas</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="propuesta in propuestas"
                    :key="propuesta.id">
                    <th scope="row" v-text="propuesta.id"></th>
                    <td v-text="propuesta.nombre"></td>
                    <td v-text="propuesta.apellido"></td>
                    <td v-text="propuesta.edad"></td>
                    <td v-text="propuesta.saldo"></td>
                    <td v-text="propuesta.sexo"></td>
                    <td v-text="propuesta.cantidad_prestamo"></td>
                    <td v-text="propuesta.debe_factura"></td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-success" @click="updateState('aceptado')">Aceptar</button>
                            <button type="button" class="btn btn-warning" @click="updateState('denegado')">Denegar</button>
                            <button type="button" class="btn btn-danger" @click="DeletePropuesta(propuesta.id)">Eliminar</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    name: "inicio",
    data () {
        return {
            propuestas: [],
        }
    },
    mounted() {
        this.getPropuestas();
    },
    methods: {
        getPropuestas() {
            axios.get("get_propuestas", {}).then((response) => {
                this.propuestas = response.data;
            }).catch((error) => {

            });
        },
        updateState(state) {
            axios.post("/update_propuesta", {state: state}).then((response) => {
                this.getPropuestas();
            }).catch((error) => {

            });
        },
        DeletePropuesta(id) {
            axios.post("/delete_propuesta", {id: id}).then((response) => {
                this.getPropuestas();
            }).catch((error) => {

            });
        },
    }
}
</script>

<style scoped>

</style>
