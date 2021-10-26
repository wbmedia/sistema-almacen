<template>
    <div>
        <form @submit.prevent="editLocation(location)" v-if="editMode"></form>
        <form @submit.prevent="addLocation" v-else>
            <h3>Agregar Locación</h3>
            <div class="form-group">
                <input
                    type="text"
                    class="form-control input-alternate"
                    placeholder="Nombre de la Locación"
                    v-model="location.description"
                >
            </div>
            <button class="btn btn-primary">Agregar</button>
        </form>

        <hr>
        <h3>Lista de Locaciones</h3>
        <ul class="list-group">
            <li class="list-group-item" v-for="(item, index) in addLocation" :key="index">
                <span class="badge badge-primary float-right">
                    {{item.updated_at}}
                </span>
                <p>{{item.description}}</p>

                <button
                    class="btn btn-primary"
                    @click="editForm(item)"
                >
                    Editar</button>
                <button
                    class="btn btn-primary"
                    @click="deleteLocation(item, index)"
                >
                    Eliminar</button>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return {
            locations: [],
            editMode: false,
            location: {
                description: ''
            }
        }
    },
    created() {
        axios.get('locations')
        .then((res) => {
            this.notas = res.notas
        }).catch(e => console.log(e));
    },
    methods: {
        addLocation() {
            if (this.location.description === '' || this.location.description === null) {
                alert('Debes Introducir el Nombre de la Locación')
            }
            const newLocation = this.description
            this.location = { description: ''}
            axios.post('locations', newLocation)
                .then((res) => {
                    const sendLocation = res.data
                    this.location.push(sendLocation)
                }).catch(e => console.log(e))
        },
        editForm(location) {
            this.location = location.description
            this.editMode = true
        },
        editLocation(location) {
            const params = {description: location.description}
            axios.put(`locations/${locations.id}`, params)
            .then(res => {
                this.editMode = false
                const index = this.locations.findIndex(item => item.id === location.id)
                this.locations[index] = res.data
            }).catch(e => console.log(e))
        },
        deleteLocation(location, index) {
            const confirmDelete = confirm(`Eliminar Locación ${location.description}`)
            if (confirmDelete) {
                axios.default(`locations/${location.id}`)
                    .then(() => {
                        this.locations.splice(index, 1)
                    }).catch(e => console.log(e))
            }
        },
        cancelEdit() {
            this.editMode = false
            this.location = {description: ''}
        }
    }
}
</script>
