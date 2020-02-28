<template>
    <base-modal
        modal-id="createEventModal"
        modal-title="Criar Novo Evento"
        variant="dark"
        @create="createEvent"
    >
        <div class="form-group">
            <label for="eventName">Nome do evento</label>
            <input type="text" name="eventName" v-model="eventName" id="eventName" class="form-control">
        </div>

        <div class="form-group">
            <label for="eventPlace">Local do evento</label>
            <input type="text" name="eventPlace" v-model="place" id="eventPlace" class="form-control">
        </div>

        <div class="form-group">
            <label for="eventDescription">Breve descrição</label>
            <textarea name="eventDescription" v-model="description" id="eventDescription" class="form-control" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="eventDateStart">Data de início do evento</label>
            <input type="date" name="eventDateStart" v-model="dateStart" id="eventDateStart" class="form-control">
        </div>

        <div class="form-group">
            <label for="eventDateEnd">Data de térmimo do evento</label>
            <input type="date" name="eventDateEnd" v-model="dateEnd" id="eventDateEnd" class="form-control">
        </div>
    </base-modal>
</template>

<script>
export default {
    data: function() {
        return {
            eventName: '',
            place: '',
            description: '',
            dateStart: '',
            dateEnd: '',
        }
    },
    
    methods: {
        async createEvent() {
            let data = {
                'eventName': this.eventName,
                'place': this.place,
                'description': this.description,
                'dateStart': this.dateStart,
                'dateEnd': this.dateEnd,
            }

            console.log(data);
            // await window.axios.post('/api/event', data);

            // window.location.replace('/editor');
        }
    }
}
</script>

<style lang="css" scoped>
</style>
