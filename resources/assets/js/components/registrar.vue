<template>
    <div class="col-12" style="background-color: #cce3f6; border-radius: 15px">
        <br>
        <br>
        <form class="needs-validation" novalidate>
            <div class="row g-3">
                <div class="col-3">
                    <label class="form-label">Nombre <span style="color: red">*</span></label>
                    <input type="text" class="form-control" v-model="nombre">
                    <label class="mt-2" style="color: red" v-show="!$v.nombre.required && submitStatus">El nombre es
                        requerido </label>
                </div>

                <div class="col-3">
                    <label class="form-label">Apellido <span style="color: red">*</span></label>
                    <input type="text" class="form-control" v-model="apellido">
                    <label class="mt-2" style="color: red" v-show="!$v.apellido.required && submitStatus">El apellido es
                        requerido </label>
                </div>

                <div class="col-3">
                    <label class="form-label">Edad <span style="color: red">*</span></label>
                    <input type="number" class="form-control" max="80" v-model="edad">
                    <label class="mt-2" style="color: red" v-show="!$v.edad.required && submitStatus">La edad es
                        requerido </label>
                </div>

                <div class="col-3">
                    <label class="form-label">Sueldo <span style="color: red">*</span></label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                        <vue-numeric
                            class="form-control"
                            name="sueldo"
                            currency=""
                            v-model="saldo"
                        ></vue-numeric>
                    </div>
                    <label class="mt-2" style="color: red" v-show="!$v.saldo.required && submitStatus">El sueldo es
                        requerido </label>
                </div>
            </div>
            <br>
            <br>
            <div class="row g-3">
                <div class="col-3">
                    <label class="form-label">Cantidad del prestamo <span style="color: red">*</span></label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                        <vue-numeric
                            class="form-control"
                            name="cantidad_prestamo"
                            currency=""
                            v-model="cantidad_prestamo"
                        ></vue-numeric>
                    </div>
                    <label class="mt-2" style="color: red" v-show="!$v.cantidad_prestamo.required && submitStatus">La cantidad del prestamo es
                        requerido </label>
                </div>

                <div class="col-3">
                    <label class="form-label">Debe facturas</label>
                    <select  class="form-control" name="debe_facturas"  v-model="debe_factura">
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
                </div>

                <div class="col-3">
                    <label class="form-label">Sexo <span style="color: red">*</span></label>
                    <select  class="form-control" name="debe_facturas"  v-model="sexo">
                        <option value="hombre">Hombre</option>
                        <option value="mujer">Mujer</option>
                    </select>
                    <label class="mt-2" style="color: red" v-show="!$v.sexo.required && submitStatus">El sexo es
                        requerido </label>
                </div>
            </div>
            <hr class="my-4">

            <button class="w-100 btn btn-primary btn-lg" id="btn-submit" @click="guardar" type="button">
                Registrar solicitud
            </button>
        </form>
        <br>
        <br>
    </div>
</template>

<script>
import {required} from 'vuelidate/lib/validators';

export default {
    name: "registrar",
    data () {
      return {
          nombre: '',
          apellido: '',
          edad: '',
          saldo: 0,
          sexo: 0,
          cantidad_prestamo: 0,
          debe_factura: 'no',
          submitStatus: false,
      }
    },
    methods: {
        guardar()
        {
            this.submitStatus = false;
            if(this.Validation()){
                this.submitStatus = true;
                this.$toast.error({
                    title: 'Error',
                    message: 'Debe completar todos los campos requeridos *',
                });
                return 0;
            }
            let param = {
                ...{nombre: this.nombre},
                ...{apellido: this.apellido},
                ...{edad: this.edad},
                ...{saldo: this.saldo},
                ...{sexo: this.sexo},
                ...{cantidad_prestamo: this.cantidad_prestamo},
                ...{debe_factura: this.debe_factura}
            }
            axios.post("/save_propuesta", param).then((response) => {
               console.log(response);
                this.$toast.success({
                    title: 'Error',
                    message: response.data.message,
                });
            })
            .catch((error) => {
                console.log(error, 'there');
                this.$toast.error({
                    title: 'Exito',
                    message: error.response.data.message,
                });
            });
        },
        toast()
        {
            this.$toast.error({
                title: 'Error',
                message: "message",
            });
        },

        Validation() {
            this.$v.$touch();
            return this.validation = this.$v.$invalid ? true : false;
        }
    },

    validations: {
        nombre: {
            required
        },
        apellido: {
            required
        },
        edad: {
            required
        },
        saldo: {
            required
        },
        sexo: {
            required
        },
        cantidad_prestamo: {
            required
        },
    },
}
</script>

<style scoped>

</style>
