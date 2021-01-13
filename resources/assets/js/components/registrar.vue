<template>
    <div class="col-12" style="background-color: #cce3f6; border-radius: 15px">
        <br>
        <br>
        <form class="needs-validation" novalidate>
            <div class="row g-3">
                <div class="col-9">
                    <label for="firstName" class="form-label">Operacion</label>
                    <input type="text" class="form-control" id="operacion" placeholder="" value="5+5" disabled>
                </div>

                <div class="col-3">
                    <label for="lastName" class="form-label">Resultado</label>
                    <input type="text" class="form-control" id="resultado" placeholder="" value="" required="">
                    <div class="invalid-feedback">
                        <p>Este campo es requerido</p>
                    </div>
                </div>
            </div>

            <hr class="my-4">

            <button class="w-100 btn btn-primary btn-lg" id="btn-submit" type="submit">
                Comprobar Resultado
            </button>
        </form>
        <br>
        <br>
    </div>
</template>

<script>
export default {
    name: "registrar"
}
</script>

<style scoped>

</style>
