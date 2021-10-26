<template>
<div>
    <form @submit.prevent="addActive">
        <h3>Agregar Activo</h3>
        <div class="form-group">
            <input type="text"
                   class="form-control input-alternate"
                   placeholder="Nombre"
                   v-model="active.name"
            >
        </div>
        <div class="form-group">
            <textarea type="text"
                   class="form-control input-alternate"
                   placeholder="Características"
                   v-model="active.features"
            ></textarea>
        </div>

        <div class="form-group">
        <input type="number"
               min="0"
               class="form-control input-alternate"
               placeholder="Unidades"
               v-model="active.unit"
        >
        </div>

        <div class="form-group">
            <input type="number"
                   min="0"
                   class="form-control input-alternate"
                   placeholder="Unidades"
                   v-model="active.stock"
            >
        </div>

        <div class="form-group">
            <textarea type="text"
                      class="form-control input-alternate"
                      placeholder="Notas"
                      v-model="active.note"
            ></textarea>
        </div>

        <div>
            <div class="form-group">
                <select
                    name=""
                    id=""
                    class="form-control input-alternate"
                >
                    <option value="">Seleccionar Opción ...</option>
                </select>
            </div>
        </div>

        <button
            class="btn btn-primary"
            type="submit"

        >
            Agregar
        </button>
    </form>
</div>
</template>
<script>
export default {
    data() {
        return {
            actives: [],
            editMode: false,
            active: {
                name: '',
                features: '',
                unit: '',
                stock: 0.0,
                note: '',
                state: ['New', 'Used', 'Sploit', 'Defect'],
            }
        }
    },
    methods: {
        addActive() {

        }
    }
}
</script>
